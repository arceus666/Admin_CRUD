<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\system_project;

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
Route::get('/dbconn', function (){
   return view('dbconn');
});
Route::get('/dashboard ', function (){
   return view('dashboard');
});
Route::get('/login', function (){
    return view('login');
});
Route::get('/update', function (){
   return view('update');
});
Route::get('/addemploye',function (){
   return view('addemploye');
});
Route::get('/register',function (){
   return view('register');
});
Route::get('register', [system_project::class,'index']);
Route::post('add', [system_project::class, 'add']);
Route::get('/profile', [ProfileController::class, 'fetchAll'])->name('profile');
Route::get('/profile/delete/{id}', [ProfileController::class, 'destroy']);
Route::get('edit/{id}',[ProfileController::class, 'edit']);
Route::put('update-data/{id}',[ProfileController::class, 'update']);



