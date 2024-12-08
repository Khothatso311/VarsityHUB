<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'MainController@welcome')->name('index');
Route::post('/passwordRequest', 'ResetPassController@update');
Route::get('/reset', 'ResetPassController@index');
Route::post('/resetEmail', 'ResetPassController@store');
       

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/student', 'StudentController@index')->name('student');
Route::get('/viewss/{id}', 'StudentController@show');
Route::get('/varsity', 'VarsityController@index')->name('varsity');
Route::get('/add', 'AddVarsityController@index')->name('addByAdmin');
Route::post('/addUniversity', 'AddVarsityController@store');
Route::get('/view/{id}', 'AdminController@show')->name('showVarsity');
Route::get('/views/{id}', 'addUniversityProfileController@show');

 Route::get('/apply', 'applyController@index')->name('apply');
 Route::post('/applyform', 'applyController@store');
 
 Route::get('/studentProfile', 'StudentProfileController@index')->name('studentProfile');
  Route::get('/admission', 'admissionController@index')->name('admission');

Route::get('/delete/{id}', 'AdminController@destroy')->name('showVarsity');
Route::get('/adminProfile', 'adminProfileController@index')->name('adminProfile');
Route::get('/varsityProfile', 'UniversityProfileController@index')->name('varsityProfile');
Route::get('/addInstitute', 'addUniversityProfileController@index')->name('addUniversity');