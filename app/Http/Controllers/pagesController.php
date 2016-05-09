<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    

   public function getAbout(){
    $temp = "hi bro!!";
        return view('pages.new')
        ->with("tmp",$temp);
   }
   public function getlay(){
    $temp = "hi bro!!";
        return view('layouts.login_layout');
    }
        
}