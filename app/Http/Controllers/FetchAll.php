<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Employee;
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

        return view('employee.employee-attendance', ['data' => $data]);

    }

}
