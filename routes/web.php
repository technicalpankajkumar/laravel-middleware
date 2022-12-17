<?php

use App\Http\Controllers\UrlretriveController;
use Illuminate\Support\Facades\DB;
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

// Route::get('/{name?}/{age?}',[UrlretriveController::class,'retrive']);

// Route::get('/home',function(){

//     return view('Home');

// });

// Route::get('/home/{name}',function($name="Pankaj kumar"){

//     $a=compact('name');
//     return view('Home')->with($a);

// })->where('name','[A-Za-z]+');

// Route::view('/about','Home');

Route::view('/unvalable','unvalable');

Route::get('/about',function(){
    // $d=DB::select('SELECT * FROM laravel_Middlewire');
    $d=["Pankajkumar","JitendraYadav"];
    // echo"<pre>";
    // print_r($d);
    // die;
    return view('about',compact('d'));
})->middleware('about_auth');


Route::group(["middleware"=>['user_auth']],function(){
    Route::view('/user/dashboard','user_dashboard');
    Route::view('/user/profile','user_profile');

});

Route::group(["middleware"=>['admin']],function(){
    Route::view('/admin/dashboard','admin_dashboard');
    Route::view('/admin/profile','admin_profile');

});


