<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddEmployee;
use App\Http\Controllers\EmployeeLeave;
use App\Http\Controllers\Leaved;
use App\Http\Controllers\FetchAll;

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


/*  Admin Profile   */
Route::get('admin/admin-dashboard', function (){
    return view('admin/admin-dashboard');
});
Route::get('/login', function (){
    return view('login');
});
Route::get('/admin', function (){
   return view('admin');
});
Route::get('/admin/admin_addemployee',function (){
   return view('admin/admin_addemployee');
});
Route::get('/register',function (){
   return view('register');
});
Route::get('admin/admin-viewemployee', function (){
    return view('admin/admin-viewemployee');
});
Route::get('admin/admin-attendance', function (){
    return view('admin/admin-attendance');
});
Route::get('admin/admin-profile', function (){
   return view('admin/admin-profile');
});
Route::get('admin/admin-leaveapproval', function (){
    return view('admin/admin-leaveapproval');
});
Route::get('admin/admin-leavestatus', function (){
    return view('admin/admin-leavestatus');
});
Route::match(['get', 'post'], 'added', [AddEmployee::class,'added']);
Route::get('delete/{id}', [AddEmployee::class,'remove']);
Route::get('edit/{id}', [AddEmployee::class,'edit']);
Route::put('update-data/{id}', [AddEmployee::class, 'update']);
Route::get('editleave/{id}', [AddEmployee::class, 'editleave']);
Route::put('update-status/{id}', [AddEmployee::class, 'edited']);

/* Employee */
Route::get('/employee/employee-dashboard', function (){
   return view('employee/employee-dashboard');
});
Route::get('/employee/employee-profile', function (){
   return view('employee/employee-profile');
});
Route::get('/employee/employee-attendance', function (){
    return view('employee/employee-attendance');
});
Route::get('/employee/employee-leave', function (){
    return view('employee/employee-leave');
});
Route::get('/employee/employee-messages', function (){
    return view('employee/employee-messages');
});
Route::get('/employee/employee_addleave', function (){
   return view('employee/employee_addleave');
});
Route::get('/employee/employee-addattendance', function () {
    return view('employee/employee-addattendance');
});
Route::get('/employee/employee-timeout', function (){
    return view('employee/employee-timeout');
});
Route::get('/employee/employee-editleave', function (){
    return view('employee/employee-editleave');
});
Route::match(['get', 'post'], 'addTimein', [EmployeeLeave::class,'timein']);
Route::match(['get','post'],'addLeave',[Leaved::class,'addLeave']);
Route::get('editOut/{id}', [EmployeeLeave::class, 'editOut']);
Route::put('update-out/{id}', [EmployeeLeave::class, 'updateOut']);
Route::get('editLeave/{id}', [EmployeeLeave::class, 'editLeave']);
Route::put('editLeaveLetter/{id}', [EmployeeLeave::class, 'editletter']);

/*  Fetch Data    */
Route::get('/employee/employee-messages', [FetchAll::class, 'fetchAll'])->name('/employee/employee-messages');
Route::get('/employee/employee-attendance', [FetchAll::class, 'fetchAttendance'])->name('/employee/employee-attendance');
Route::get('/employee/employee-leave', [FetchAll::class, 'fetchLeaved'])->name('/employee/employee-leave');
Route::get('/admin/admin-attendance', [FetchAll::class, 'fetchAdmin'])->name('admin/admin-attendance');
Route::get('/admin/admin-leaveapproval', [FetchAll::class, 'fetchAdminLeave'])->name('admin/admin-leaveapproval');







