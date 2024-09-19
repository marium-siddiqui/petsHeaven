<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\mycontroller;

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
    return view('index');
});
Route::get('/donate',function(){
    return view('donate');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/adopt',function(){
    return view('adopt');
});
Route::get('/adoptform',function(){
    return view('adoptform');
})->name('adoptform') ;
Route::get('/events',function(){
    return view('events');
});
Route::get('/rescue',function(){
    return view('rescue');
});
Route::get('/care',function(){
    return view('care');
});
Route::get('/admin/header',function(){
    return view('Admin.header');
});
Route::get('/fetchcontact',function(){
    return view('Admin.fetchcontact');
});
Route::get('/adopetpetdata',function(){
    return view('Admin.adoptpetdata');
});
Route::POST('/insert', [mycontroller::class , 'insertcontact']);
Route::POST('/donate', [mycontroller::class , 'insertdonate']);
Route::GET('/fetchcontact',[mycontroller::class , 'fetchcontact']);
Route::GET('/donation',[mycontroller::class , 'donation']);
Route::Post('/adoptform',[mycontroller::class , 'adoptpet']);
Route::Get('/adoptpetdata',[mycontroller::class , 'adoptpetdata'])->name('demo');