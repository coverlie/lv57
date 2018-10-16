<?php

use App\Http\Controllers\FileUploadController;

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

//Route::get('/', function () { return view('user.show'); });

Route::get('hello','HelloController@index');
Route::get('htest','HelloController@htest');

Route::get('/','UserController@index');
Route::resource('user','UserController');



Route::get('upload','FileUploadController@index');
Route::post('newfile', 'FileUploadController@upload');
Route::get('/download/{filename}', 'FileUploadController@download');
