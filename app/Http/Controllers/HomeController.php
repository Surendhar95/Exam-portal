<?php

namespace App\Http\Controllers;
use Validator;
use Auth;
use DB;
use Hash;
use Redirect;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;



class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }
    public function choosemode(Request $req){
   
   	

    	if($req->mode == 'admin' )
         	return view('pages.login_adm');
    if($req->mode == 'student'){
      $pass = Hash::make('whatever');
      return $pass;


    }
    	//return view('pages.login_stu');
    if($req->mode == 'faculty')
    	return view('pages.login_fac');

   }
   
   public function login_adm(Request $request){
      $input = $request->all();
      $rules = array('userid' => 'required','password' => 'required');

      $v = Validator::make($input,$rules);
      if($v->fails()){
        return Redirect::to('log')->withErrors($v);

      }else {
        $credentials = array('userid' => $input['userid'],'password' => $input['password']);
        
        if(Auth::attempt($credentials)){

          return Redirect::to('/admin');

        }else{
          return Redirect::to('log')->withErrors('Not a valid');
        }
        }

      }

      public function postregister(Request $request){
        $input = $request->all();
        $rules = ['name' => 'required|max:30','userid' => 'required|unique:users','password' => 'required|max:255','password_confirmation' => 'required|max:255|same:password'];

        $v = Validator::make($input,$rules);
        if($v->passes()){

          $password = $input['password'];
          $password = Hash::make($password);
          $user = new User();
          $user->userid = $input['userid'];
          $user->username = $input['name'];
          $user->password = $password;
          $user->save();

          return Redirect::to('/');


        }
        else
        {
          return Redirect::to('/reg')->withErrors($v);
        }



    }

    public function login_stu(Request $req){
      $stu = DB::table('students')->where('rollno',$req->rollno)->value('rollno');
      if($stu == NULL){
        $msg = "Invalid rollno";
        return view('pages.login_stu')->with('msg',$msg);
      }
      return view('pages.studentview');

    }

      public function login_fac(Request $req){
      $fac = DB::table('faculty')->where('fac_id',$req->id)->value('fac_id');
      if($fac == NULL){
        $msg = "Invalid ID";
        return view('pages.login_fac')->with('msg',$msg);
      }
      return view('pages.faculty_view');

    }

}
