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
        return view('/signin');
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
            // Set a session variable to mark the employee as logged in
            $request->session()->put('employee_logged_in', true);
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
            // Set a session variable to mark the admin as logged in
            $request->session()->put('admin_logged_in', true);
            return redirect('/admin/admin-dashboard');
        }

        return redirect('/login')->with('error', 'Invalid admin credentials');
    }

    private function checkEmployeeLogin(Request $request)
    {
        if (!$request->session()->has('employee_logged_in') || !$request->session()->get('employee_logged_in')) {
            return redirect('/signin')->with('error', 'Please sign in as an employee');
        }
        return null;
    }

    private function checkAdminLogin(Request $request)
    {
        if (!$request->session()->has('admin_logged_in') || !$request->session()->get('admin_logged_in')) {
            return redirect('/login')->with('error', 'Please sign in as an admin');
        }
        return null;
    }

    public function employeeDashboard(Request $request)
    {
        $checkLogin = $this->checkEmployeeLogin($request);
        if ($checkLogin !== null) {
            return $checkLogin;
        }
        // Proceed with rendering the employee dashboard
        return view('employee.dashboard');
    }

    public function adminDashboard(Request $request)
    {
        $checkLogin = $this->checkAdminLogin($request);
        if ($checkLogin !== null) {
            return $checkLogin;
        }
        // Proceed with rendering the admin dashboard
        return view('admin.dashboard');
    }
}
