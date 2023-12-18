<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\Departments;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
   public function editDepartment($id){
        $dep = Departments::find($id);
        return view('/admin/admin_edit_departments', compact('dep'));
   }
   public function updateDepartment(Request $request, $id){
        $department = Departments::find($id);
        $department->emp_type_id=$request->input('emp_type_id');
        $department->dep_name=$request->input('dep_name');
        $department->update();
        return redirect('admin/admin-department');
   }
   public function deleteDepartment($id){
       $dep = Departments::find($id);
       $dep->delete();
       return redirect('admin/admin-department');
   }
   public function insertDepartment(Request $request){
        $query = DB::table('department')->insert([

            'dep_name'=>$request->input('dep_name')
        ]);
        return redirect('admin/admin-department');
   }
   public function editDepartmentName($id){
       $dep = Department::find($id);
       return view('admin/admin_edit_department', compact('dep'));
   }
   public function updateDepartmentName(Request $request, $id){
       $dep = Department::find($id);
       $dep->dep_name = $request->input('dep_name');
       $dep->update();
       return redirect('admin/admin-department');
   }
   public function deleteDepartmentName($id){
       $dep = Department::find($id);
       $dep->delete();
       return redirect('admin/admin-department');
   }
}
