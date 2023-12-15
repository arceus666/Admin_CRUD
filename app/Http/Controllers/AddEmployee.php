<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AddEmployee extends Controller
{

   public function added(Request $request){

    $query = DB::table('employee')->insert([

       'emp_user_name'=>$request->input('emp_user_name'),
       'emp_password'=>$request->input('emp_password'),
        'dep_name'=>$request->input('dep_name'),
        'emp_type_id'=>$request->input('emp_type_id'),
        'location_id'=>$request->input('location_id'),
        'location_name'=>$request->input('location_name'),
        'shift_id'=>$request->input('shift_id'),
        'shift_name'=>$request->input('shift_name'),
        'shift_time_in'=>$request->input('shift_time_in'),
        'shift_time_out'=>$request->input('shift_time_out'),
        'emp_gender'=>$request->input('emp_gender'),
        'emp_joining_data'=>$request->input('emp_joining_data'),
        'emp_full_name'=>$request->input('emp_full_name'),
        'emp_dob'=>$request->input('emp_dob'),
        'emp_address'=>$request->input('emp_address'),
        'emp_contact'=>$request->input('emp_contact'),
        'emp_email'=>$request->input('emp_email'),


    ]);
    return redirect('admin/admin-viewemployee');
   }
    public function remove($id){
       $employee = Employee::find($id);
       $employee->delete();
       return redirect('admin/admin-viewemployee');
    }

    public function edit($id){
            $employee = Employee::find($id);
            return view('/admin/admin_editemployee',compact('employee'));
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->emp_user_name = $request->input('emp_user_name');
        $employee->emp_password = $request->input('emp_password');
        $employee->dep_name = $request->input('dep_name');
        $employee->emp_type_id = $request->input('emp_type_id');
        $employee->location_id = $request->input('location_id');
        $employee->location_name = $request->input('location_name');
        $employee->shift_id = $request->input('shift_id');
        $employee->shift_name = $request->input('shift_name');
        $employee->shift_time_in = $request->input('shift_time_out');
        $employee->emp_gender = $request->input('emp_gender');
        $employee->emp_joining_data = $request->input('emp_joining_data');
        $employee->emp_full_name = $request->input('emp_full_name');
        $employee->emp_dob = $request->input('emp_dob');
        $employee->emp_address = $request->input('emp_address');
        $employee->emp_contact = $request->input('emp_contact');
        $employee->emp_email = $request->input('emp_email');
        $employee->update();
        return redirect('/admin/admin-viewemployee');
    }
    public function editleave($id){
       $leave = Leave::find($id);
       $employee = Employee::find($id);
       return view('/admin/admin-leavestatus', compact('leave'));
    }
    public function edited(Request $request, $id){
        $leave = Leave::find($id);
        $leave->leave_status = $request->input('leave_status');
        $leave->update();
        return redirect('/admin/admin-leaveapproval');
    }
}
