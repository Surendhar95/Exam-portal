<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('pages.front-page');
    });

   //Route::post('login', 'loginController@choosemode');

   Route::post('/log', 'HomeController@choosemode');
  
  Route::get('/reg', function () {
        return view('pages.register');
    });
Route::get('/log',function () {
        return view('pages.login_adm');
    });



Route::post('/regis','Homecontroller@postregister');
Route::post('/admin','HomeController@login_adm');
//Admin
Route::get('/admin',function(){

  return view('pages.admin_view');
});

Route::get('/h1_alloc','ExamController@hall1_alloc');
Route::get('/h2_alloc','ExamController@hall2_alloc');
Route::get('/h3_alloc','ExamController@hall3_alloc');
Route::get('/h4_alloc','ExamController@hall4_alloc');





//Create Exam routes


Route::get('create_exam',function () {
        return view('pages.exam_1');
    });
Route::post('exam_1','ExamController@exam_1');

Route::get('create_tt',function () {
        return view('pages.exam_2');
    });
Route::get('hall', function () {
        return view('pages.hall');
    });

Route::post('/exam_2','ExamController@exam_2');

Route::get('/exam_2',function () {
        return view('error.503');
    });


Route::get('/alloc','ExamController@pass_det');

Route::get('/allocate','ExamController@exam_alloc');

Route::get('/t',function(){
  return view('pages.timetable');
});

Route::get('/view_tt','ExamController@view_tt');




//login 

Route::get('/login_stu',function(){
  return view('pages.login_stu');
});
Route::post('/student','HomeController@login_stu');

Route::get('/login_fac',function(){
  return view('pages.login_fac');
});
Route::post('/fac','HomeController@login_fac');

   


});


