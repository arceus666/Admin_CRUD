<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\system_project;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;

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
Route::get('view_employee', function (){
    return view('view_employee');
});
Route::get('attendance', function (){
    return view('attendance');
});
/*  Admin Profile   */
Route::get('register', [system_project::class,'index']);
Route::post('added', [system_project::class, 'add']);
Route::get('/profile', [ProfileController::class, 'fetchAll'])->name('profile');
Route::get('deleted/{id}', [ProfileController::class, 'destroy']);
Route::get('edit/{id}',[ProfileController::class, 'edit']);
Route::put('update-data/{id}',[ProfileController::class, 'update']);
Route::get('/admin', function (){
   return view('admin');
});



/* Employee */
Route::get('/employee', function (){
   return view('employee');
});
Route::post('insert', [EmployeeController::class, 'add']);
Route::get('employee',[EmployeeController::class, 'fetchAll'])->name('employee');
Route::get('delete/{id}', [EmployeeController::class, 'destroy']);


/* Leave */
Route::post('add', [LeaveController::class, 'add']);
Route::get('leave',[LeaveController::class, 'fetchAll'])->name('leave');

Route::get('leave', function (){
    return view('leave');
});

