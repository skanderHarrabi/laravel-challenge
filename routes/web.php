<?php
use Illuminate\Http\Request;
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
Route::get("/exportEvents",'eventsController@export');
Route::get("/exportTodaysEvents",'eventsController@exportTodayEvents');
Route::get("/exportNextFiveDaysEvents",'eventsController@exportNextFiveDaysEvents');
Route::post("/importEvents",'eventsController@import');

Route::get('/{path}',function(){
  return View('welcome');
})->where('path','.*');