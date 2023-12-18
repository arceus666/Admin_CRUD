<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class Leaved extends Controller
{
    public function addLeave(Request $request){
        $query = DB::table('leave')->insert([
            'leave_subject'=>$request->input('leave_subject'),
            'leave_date'=>$request->input('leave_date'),
            'emp_full_name'=>$request->input('emp_full_name')
        ]);
        return redirect('/employee/employee-leave');
    }
}
