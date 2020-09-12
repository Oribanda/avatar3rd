<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('api/upload', 'UploadController');
Route::get('/img', 'ImgController@index');

//下記を追記
//画像をアップロードするページ
Route::get('/upload', 'Api/UploadController@input');
//画像を保存したり画像名をDBに格納する部分
Route::post('/upload', 'Api/UploadController@upload');
//保存した画像を表示するページ
Route::get('/output', 'Api/UploadController@output');
//上記までを追記
