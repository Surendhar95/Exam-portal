<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Input;

class loginController extends Controller
{
    

   public function choosemode(Request $req){
   
   	

    	if($req->mode == 'admin' )
         	return view('pages.login_adm');
    if($req->mode == 'student')
    	return view('pages.login_stu');
    if($req->mode == 'faculty')
    	return view('pages.login_fac');

   }
   
   public function login_adm(){
      $input = Input::all();
      $rules = array('userid' => 'required','password' => 'required');

      $v = Validator::make($input,$rules);
      if($v->fails){
        return Redirect::to('log')->withErrors($v);

      }else {
        $credentials = array('userid' => $input['userid'],'password' => $input['password']);
        
        if(Auth::attempt($credentials)){

          return Redirect::to('admin');

        }else{
          return Redirect::to('login');
        }
        }

      }



   }


        
