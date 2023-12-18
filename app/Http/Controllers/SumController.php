<?php

namespace App\Http\Controllers;
use App\Models\Departments;
use App\Models\EmployeeType;
use App\Models\Employee;
use App\Models\Holiday;
use Illuminate\Routing\Controller;

use App\Models\Attendance;
use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumofAll()
    {
        // Assuming you retrieve total attendance and total employees here
        $totalAttendance = Attendance::count();
        $totalEmployees = Employee::count();
        $totalDepartments = Departments::count();
        $holiday = Holiday::count();

    return view('admin/admin-dashboard', [
        'data' => $totalAttendance,
        'totalEmployees' => $totalEmployees,
        'totalDepartments' => $totalDepartments,
        'holiday'=>$holiday
    ]);
}
}
