<?php

namespace App\Http\Controllers;
use Validator;
use Auth;
use Session;
use Hash;
use Redirect;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class ExamController extends Controller
{

  public function exam_1(Request $req){

    $ex_id = $req->exid;
    $desc = $req->desc;
    $duration = $req->dur;
    $sem = $req->sem;

    $select = DB::table('exams')->where('ex_id',$ex_id)->value('ex_id');
    if($select == NULL){
        DB::table('exams')->insert(['ex_id'=> $ex_id,'desc'=>$desc,'duration' => $duration]);
        $sub = DB::table('papers')->where('sem',$sem);
        Session::set('exid',$ex_id);
    
        return view('pages.exam_2')
        ->with('dur',$duration)
        ->with('sub',$sub);
        }
    else{
      $error = 'Exam Id already exist.Try new.';
      return view('pages.exam_1')->with('msg',$error);
    }
      

  }

   public function exam_2(Request $req){
      $date1 = date("Y-m-d", strtotime($req->date1));
      $date2 = date("Y-m-d", strtotime($req->date2));
      $date3 = date("Y-m-d", strtotime($req->date3));
      $date4 = date("Y-m-d", strtotime($req->date4));
     
      $exid = Session::get('exid');

      foreach($req->day1 as $days=>$values){
        DB::table('tt')->insert(['ex_id' =>$exid,'date' => $date1,'code'=>$values]);
      }
      foreach($req->day2 as $days=>$values){
        DB::table('tt')->insert(['ex_id' =>$exid,'date' => $date2,'code'=>$values]);
      }
       foreach($req->day3 as $days=>$values){
        DB::table('tt')->insert(['ex_id' =>$exid,'date' => $date3,'code'=>$values]);
      }
       foreach($req->day4 as $days=>$values){
       DB::table('tt')->insert(['ex_id' =>$exid,'date' => $date4,'code'=>$values]);
      }
      return Redirect::to('/alloc');

     

   }

   public function pass_det(){
   
      $exid = Session::get('exid');
        
        $det = DB::table('exams')->where('ex_id',$exid)->get();
        $time = DB::table('tt')->where('ex_id',$exid)->get();
        $i = 0;


       // return $time;

      return view('pages.ex_allocate')
      ->with('ex_det',$det)
      ->with('id',$i)
      ->with('tt',$time);

   }

   public function hall1_alloc(){
      $exid = Session::get('exid');
      $hall = DB::table('allocation')->where('ex_id',"$exid")->where('hall_id',"H01")->get();
      $i = 0;
      $fac = DB::table('duty')->where('ex_id',"$exid")->where('hall_id',"H01")->get();
      return view('pages.h1alloc')
      ->with('hall1',$hall)
      ->with('fac1',$fac)
      ->with('i',$i);
   }

 public function hall2_alloc(){
      $exid = Session::get('exid');
      $hall = DB::table('allocation')->where('ex_id',"$exid")->where('hall_id',"H02")->get();
      $i = 0;
       $fac = DB::table('duty')->where('ex_id',$exid)->where('hall_id',"H02")->get();
      return view('pages.h2alloc')
      ->with('hall2',$hall)
      ->with('fac2',$fac)
      ->with('i',$i);
   }

 public function hall3_alloc(){
      $exid = Session::get('exid');
      $hall = DB::table('allocation')->where('ex_id',"$exid")->where('hall_id',"H03")->get();
      $i = 0;
       $fac = DB::table('duty')->where('ex_id',$exid)->where('hall_id',"H03")->get();
      return view('pages.h3alloc')
      ->with('hall3',$hall)
      ->with('fac3',$fac)
      ->with('i',$i);
   }
    public function hall4_alloc(){
      $exid = Session::get('exid');
      $hall = DB::table('allocation')->where('ex_id',$exid)->where('hall_id',"H04")->get();
      $i = 0;
       $fac = DB::table('duty')->where('ex_id',$exid)->where('hall_id',"H04")->get();
      return view('pages.h4alloc')
      ->with('hall4',$hall)
      ->with('fac4',$fac)
      ->with('i',$i);
   }



   public function exam_alloc(){

     
      $exid = Session::get('exid');

      //STUDENTS allocation

      //retrieve from students 

      $cse = DB::table('students')->select('rollno')->where('dept','CSE')->get();
      $ece = DB::table('students')->select('rollno')->where('dept','ECE')->get();
      $eee = DB::table('students')->select('rollno')->where('dept','EEE')->get();
      $mech = DB::table('students')->select('rollno')->where('dept','MEC')->get();
       $det = DB::table('exams')->where('ex_id',$exid)->get();
      
      //insert into allocation

      $i = 0;
      foreach($cse as $stu){

          $left = DB::table('halls')->where('seat_id',0)->skip($i)->take(1)->get();
          foreach($left as $l){
            DB::table('allocation')->insert(['ex_id'=>$exid,'hall_id'=>$l->hall_id,'rollno'=>$stu->rollno,'seat_no'=>$l->seat_no]);
        }
          $i = $i + 1;
      }
      $count_cse = count($cse);

      $i = 0;
      foreach($ece as $stu){

          $right = DB::table('halls')->where('seat_id',1)->skip($i)->take(1)->get();
          foreach($right as $r){
            DB::table('allocation')->insert(['ex_id'=>$exid,'hall_id'=>$r->hall_id,'rollno'=>$stu->rollno,'seat_no'=>$r->seat_no]);
        }
          $i = $i + 1;
      }
      $count_ece = count($ece);
      $i = $count_cse ;
      foreach($eee as $stu){

          $left = DB::table('halls')->where('seat_id',0)->skip($i)->take(1)->get();
          foreach($left as $l){
            DB::table('allocation')->insert(['ex_id'=>$exid,'hall_id'=>$l->hall_id,'rollno'=>$stu->rollno,'seat_no'=>$l->seat_no]);
        }
          $i = $i + 1;
      }

      $i = $count_ece ;
      foreach($mech as $stu){

          $right = DB::table('halls')->where('seat_id',1)->skip($i)->take(1)->get();
          foreach($right as $r){
            DB::table('allocation')->insert(['ex_id'=>$exid,'hall_id'=>$r->hall_id,'rollno'=>$stu->rollno,'seat_no'=>$r->seat_no]);
        }
          $i = $i + 1;
      }

      //FACULTY ALLOCATION

      $fac = DB::table('faculty')->select('fac_id')->orderByRaw("RAND()")->get();
      $i=0;

      foreach($fac as $val){
        $i = $i/2;
        $i = (int)$i;
     //   return $i;
        $hal = DB::table('halls')->select('hall_id')->skip($i)->take(1)->get();
        //return $halls;
        foreach($hal as $h){
      if($h->hall_id == NULL){
        return view('pages.examdetails')
         ->with('ex_det',$det);
      }            
          DB::table('duty')->insert(['ex_id'=>$exid,'hall_id'=>$h->hall_id,'fac_id'=>$val->fac_id]);
      }
      $i++;
    }
    return view('pages.examdetails')
     ->with('ex_det',$det);

   }

   public function view_tt(){
    $exid = Session::get('exid');
     $time = DB::table('tt')->where('ex_id',$exid)->get();
     $i = 0;
     //return $exid;
     return view('pages.timetable')
     ->with('tt',$time)
     ->with('id',$i);

   }




}






