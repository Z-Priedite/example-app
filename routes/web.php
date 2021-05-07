<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});


Route::get('/services', function () {
    return view('pages.services');
});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/FAQ', function () {
    return view('pages.FAQ');
});

Route::post('/home', function () {
    // $var = request()->all();
   //  $specvar = request()->input('name');
     // dd($var, $specvar);
  
 
     $newuser = new User;
 
     $newuser->name = request()->input('name');
     $newuser->email = request()->input('email');
     $newuser->password='xxyyzz';
     $newuser->save();
 
     return redirect('/home')
     ->with('message','Done!');
 });
 
 