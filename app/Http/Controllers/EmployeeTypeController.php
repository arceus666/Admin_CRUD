<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use App\Models\EmployeeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeTypeController extends Controller
{
    public  function addEmployeeType(Request $request){
        $query = DB::table('employee_type')->insert([

            'emp_type_id'=>$request->input('emp_type_id')
        ]);
        return redirect('admin/admin-employeetype');
    }
    public function editType($id){
        $emp = EmployeeType::find($id);
        return view('admin-functionality/editemployeetype', compact('emp'));
    }
    public function updateEmpType(Request $request, $id){
        $emp = EmployeeType::find($id);
        $emp->emp_type_id = $request->input('emp_type_id');
        $emp->update();
        return redirect('admin/admin-employeetype');
    }
    public function deleteType($id){
        $emp = EmployeeType::find($id);
        $emp->delete();
        return redirect('admin/admin-employeetype');
    }

}
