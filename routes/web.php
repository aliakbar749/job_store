<?php

use Illuminate\Support\Facades\Route;
Use App\Addjob;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $datas=Addjob::get();
    return view('Welcome',compact('datas'));
    //return view('welcome');
});

Auth::routes();
//Route::get('/admin','AdminController@index')->name('admin')->middleware('admin');
Route::middleware(['admin'])->group(function(){
    Route::get('/admin','AdminController@index')->name('admin');
    Route::get('/addjob','AdminController@addjob')->name('admin.addjob');
    Route::post('/savejob','AdminController@save')->name('admin.savejob');
    Route::get('/showjob','AdminController@show')->name('showjob');
    Route::get('/jobslist','AdminController@jobslist')->name('admin.jobslist');
    Route::get('/details/{id}','AdminController@jobdetails')->name('admin.jobdetails');
    Route::get('/edit/{id}','AdminController@editjobdetails')->name('admin.editjobdetails');
    Route::post('/update/{id}','AdminController@updatejobdetails')->name('admin.updatejob');
    Route::get('/delete/{id}','AdminController@jobdelete')->name('admin.jobdelete');




});

Route::middleware(['employer'])->group(function(){
    Route::get('/employer','EmployerController@index')->name('employer');

});

Route::middleware(['user'])->group(function(){
    $datas=Addjob::get();
    Route::get('/user','UserController@index',compact('datas'))->name('user');
    Route::get('/jobdetails/{id}','UserController@jobdetails')->name('user.jobdetails');
    


});




//Route::get('/employer','EmployerController@index')->name('employer')->middleware('employer');
//Route::get('/user','UserController@index')->name('user')->middleware('user');

//Route::get('/home', 'HomeController@index')->name('home');
