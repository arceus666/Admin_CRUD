<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddEmployee;
use App\Http\Controllers\EmployeeLeave;
use App\Http\Controllers\Leaved;
use App\Http\Controllers\FetchAll;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\LoginController;

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
Route::get('admin/admin-department', function (){
    return view('admin/admin-department');
});
Route::get('admin/admin_add_department', function (){
    return view('admin/admin_add_department');
});
Route::get('admin/admin-holiday', function (){
    return view('admin/admin-holiday');
});Route::get('admin/admin_add_holiday', function (){
    return view('admin/admin_add_holiday');
});
Route::match(['get', 'post'], 'added', [AddEmployee::class,'added']);
Route::get('delete/{id}', [AddEmployee::class,'remove']);
Route::get('edit/{id}', [AddEmployee::class,'edit']);
Route::put('update-data/{id}', [AddEmployee::class, 'update']);
Route::get('editleave/{id}', [AddEmployee::class, 'editleave']);
Route::put('update-status/{id}', [AddEmployee::class, 'edited']);
///END OF ADMIN
///Department Management
Route::get('admin/admin_edit_departments', function (){
    return view('admin/admin_edit_departments');
});
Route::get('admin/admin_edit_holiday', function (){
    return view('admin/admin_edit_holiday');
});
Route::match(['get','post'], 'add',[AddEmployee::class,'addDep']);
Route::get('editDepartment/{id}', [DepartmentController::class,'editDepartment']);
Route::put('updateDepartment/{id}',[DepartmentController::class,'updateDepartment']);
Route::get('deleteDepartment/{id}',[DepartmentController::class,'deleteDepartment']);
/* Holiday Department*/
Route::match(['get','post'],'addHoliday',[HolidayController::class,'addHoliday']);
Route::get('editHoliday/{id}', [HolidayController::class,'editHoliday']);
Route::put('updateHoliday/{id}',[HolidayController::class,'updateHoliday']);
Route::get('deleteHoliday/{id}',[HolidayController::class,'deleteHoliday']);
/*End of Department*/

/* Admin Shift Management*/
Route::get('admin/admin-shift', function (){
    return view('admin/admin-shift');
});
Route::get('admin/admin_add_shift',function (){
    return view('admin/admin_add_shift');
});
Route::match(['get','post'],'addShift',[ShiftController::class,'addShift']);
Route::get('editShift/{id}',[ShiftController::class,'editShift']);
Route::put('updateShift/{id}',[ShiftController::class,'updateShift']);
Route::get('deleteShift/{id}',[ShiftController::class,'deleteShift']);


/*Location Management*/
Route::get('admin/admin-location', function (){
    return view('admin/admin-location');
});
Route::get('admin/admin_add_location', function (){
    return view('admin/admin_add_location');
});
Route::get('admin/admin_edit_location', function (){
   return view('admin/admin_edit_location');
});
Route::match(['get','post'],'addLocation',[LocationController::class,'addLocation']);
Route::get('editLocation/{id}',[LocationController::class,'editLocation']);
Route::put('updateLocation/{id}', [LocationController::class,'updateLocation']);
Route::get('deleteLocation/{id}',[LocationController::class,'deleteLocation']);
/*End of Location Management



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

/*Employee Department*/
Route::get('/employee/employee-department', function (){
    return view('employee/employee-department');
});



/*  Fetch Data    */
Route::get('/employee/employee-messages', [FetchAll::class, 'fetchAll'])->name('/employee/employee-messages');
Route::get('/employee/employee-attendance', [FetchAll::class, 'fetchAttendance'])->name('/employee/employee-attendance');
Route::get('/employee/employee-leave', [FetchAll::class, 'fetchLeaved'])->name('/employee/employee-leave');
Route::get('/admin/admin-attendance', [FetchAll::class, 'fetchAdmin'])->name('admin/admin-attendance');
Route::get('/admin/admin-leaveapproval', [FetchAll::class, 'fetchAdminLeave'])->name('admin/admin-leaveapproval');
Route::get('/admin/admin-department', [FetchAll::class, 'fetchDepartments'])->name('admin/admin-department');
Route::get('/employee/employee-department', [FetchAll::class, 'fetchEmployeeDepartment'])->name('employee/employee-department');
Route::get('/employee/employee-dashboard',[SumController::class,'sumofAll'])->name('employee/employee-dashboard');

/* Authentication For Admin and Employee */

Route::get('/login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class,'showLoginForm']);

Route::get('/signin', function (){
   return view('signin');
});








