<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('signin'); // Assuming your view is named login.blade.php
    }
    public function loginEmployee(Request $request)
    {
        $emp_user_name = $request->input('emp_user_name');
        $emp_password = $request->input('emp_password');

        // Perform validation and authentication logic against the employees table in the database
        $employee = DB::table('employee')
            ->where('emp_user_name', $emp_user_name)
            ->where('emp_password', $emp_password)
            ->first();

        if ($employee) {
            // Authentication successful, redirect to employee dashboard or any other page
            return redirect('/employee/employee-dashboard');
        }

        // Authentication failed, redirect back with an error message
        return redirect('/signin')->with('error', 'Invalid employee credentials');
    }

    public function loginAdmin(Request $request)
    {
        $admin_username = $request->input('admin_username');
        $admin_password = $request->input('admin_password');

        // Perform validation and authentication logic against the admins table in the database
        $admin = DB::table('admin')
            ->where('admin_name', $admin_username)
            ->where('admin_password', $admin_password)
            ->first();

        if ($admin) {
            // Authentication successful, redirect to admin dashboard or any other page
            return redirect('/admin/admin-dashboard');
        }

        // Authentication failed, redirect back with an error message
        return redirect('/login')->with('error', 'Invalid admin credentials');
    }


}
