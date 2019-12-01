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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',['as'=>'home.index','uses'=>'HomeController@index']);

Route::get('/about',['as'=>'about.index','uses'=>'AboutController@index']);

Route::get('/news',['as'=>'news.index','uses'=>'NewsController@index']);

/*
Route::get('/',['as'=>'home.index',function(){
    return view('home');
}]);

Route::get('/about',['as'=>'about.index',function(){
    return view('about');
}]);

Route::get('/news',['as'=>'news.index',function(){
    return view('news');
}]);
*/

