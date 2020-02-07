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
    $title=" What's up !!! ";
    $content=" สวัสดีครับ ";
    return view('welcome')->with (['title'=>$title,'content'=>$content,]);
})->name('home');

Route::get('/contact', function () {
    //return "ส่งเมลล์มาที่ poramin@gmail.com";
    $title="ติดต่อ";
    $content="ส่งเมลล์มาที่ poramin@gmail.com";
    return view('contact')->with (['title'=>$title,'content'=>$content,]);

})->name('contact')->middleware('auth');

Route::get('/abot', function () {
    //return "ติดต่องานได้ที่ FB: อาราฟ";
    $title="ติดต่อได้อีก";
    $content="ติดต่องานได้ที่ FB: อาราฟ";
    return view('abot')->with (['title'=>$title,'content'=>$content,]);
})->name('abot');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
