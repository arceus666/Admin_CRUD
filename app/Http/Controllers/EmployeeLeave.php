<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Leave;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EmployeeLeave extends Controller
{
    public function timein(Request $request){
        $query = DB::table('attendance')->insert([
            'attendance_time_in'=>$request->input('attendance_time_in'),
            'emp_full_name'=>$request->input('emp_full_name')
        ]);
        return redirect('/employee/employee-attendance');
    }
    public function editOut($id){
    $attendance = Attendance::find($id);
    $employee = Employee::find($id);
    return view('employee/employee-timeout',compact('attendance', 'employee'));
    }
    public function updateOut(Request $request, $id){
        $attendance = Attendance::find($id);
        $attendance->attendance_time_out = $request->input('attendance_time_out');
        $attendance->update();
        return redirect('employee/employee-attendance');
    }
    public function editLeave($id){
        $leave = Leave::find($id);
        return view('employee/employee-editleave',compact('leave'));
    }
    public function editletter(Request $request, $id){
        $leave = Leave::find($id);
        $leave->leave_subject = $request->input('leave_subject');
        $leave->leave_date = $request->input('leave_date');
        $leave->update();
        return redirect('employee/employee-leave');
    }
}
