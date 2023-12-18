<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Departments;
use App\Models\Employee;
use App\Models\EmployeeType;
use App\Models\Holiday;
use App\Models\Leave;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FetchAll extends Controller
{
    public function fetchAll(): \Illuminate\Contracts\View\View
    {
        $data = Leave::all();

        return view('employee.employee-messages', ['data' => $data]);

    }
    public function fetchAttendance(): \Illuminate\Contracts\View\View
    {
        $data = Attendance::all();
        $employee = Employee::all();

        return view('employee.employee-attendance', ['data' => $data, 'employee' => $employee]);
    }
    public function fetchLeaved(): \Illuminate\Contracts\View\View
    {
        $data = Leave::all();
        $employee = Employee::all();

        return view('employee.employee-leave', ['data' => $data, 'employee' => $employee]);
    }
    public function fetchAdmin(): \Illuminate\Contracts\View\View
    {
        $data = Attendance::all();
        $employee = Employee::all();
        return view('admin.admin-attendance', ['data' => $data, 'employee' => $employee]);
    }
    public function fetchAdminLeave(): \Illuminate\Contracts\View\View
    {
        $data = Leave::all();
        $employee = Employee::all();
        return view('admin.admin-leaveapproval', ['data' => $data, 'employee' => $employee]);
    }
    public function fetchDepartments(): \Illuminate\Contracts\View\View
    {
        $data = Departments::all();
        return view('admin.admin-department', ['data' => $data]);
    }
    public function fetchEmployeeDepartment(): \Illuminate\Contracts\View\View
    {
        $data = Departments::all();
        return view('employee/employee-department', ['data' => $data]);
    }
    public function fetchHoliday(): \Illuminate\Contracts\View\View
    {
        $data = Holiday::all();
        return view('employee/employee-holiday', ['data' => $data]);
    }





}
