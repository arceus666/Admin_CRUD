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
        return view('signin');
    }
    public function loginEmployee(Request $request)
    {
        $emp_user_name = $request->input('emp_user_name');
        $emp_password = $request->input('emp_password');


        $employee = DB::table('employee')
            ->where('emp_user_name', $emp_user_name)
            ->where('emp_password', $emp_password)
            ->first();

        if ($employee) {

            return redirect('/employee/employee-dashboard');
        }


        return redirect('/signin')->with('error', 'Invalid employee credentials');
    }

    public function loginAdmin(Request $request)
    {
        $admin_username = $request->input('admin_username');
        $admin_password = $request->input('admin_password');


        $admin = DB::table('admin')
            ->where('admin_name', $admin_username)
            ->where('admin_password', $admin_password)
            ->first();

        if ($admin) {

            return redirect('/admin/admin-dashboard');
        }


        return redirect('/login')->with('error', 'Invalid admin credentials');
    }


}
