<?php

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
    return view('welcome');
});
// Route::get('/second', function () {
//     //return view('welcome');
//     return "<h1>This is Second page<h1>";
// });
// Route::get('/users/{id}/{name}',function($id,$name){
//     return 'this is user '.$name.' with an id of '.$id;    
// });

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
