<?php

namespace App\Http\Controllers;
use App\Models\Shift;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShiftController extends Controller
{
    public function addShift(Request $request){
        $query = DB::table('shift')->insert([

            'shift_name'=>$request->input('shift_name'),
            'shift_time_in'=>$request->input('shift_time_in'),
            'shift_time_out'=>$request->input('shift_time_out'),
        ]);
        return redirect('admin/admin-shift');
    }
    public function editShift($id){
        $shift = Shift::find($id);
        return view('admin/admin_edit_shift', compact('shift'));
    }
    public function updateShift(Request $request, $id){
        $shift = Shift::find($id);
        $shift->shift_name = $request->input('shift_name');
        $shift->shift_time_in = $request->input('shift_time_in');
        $shift->shift_time_out = $request->input('shift_time_out');
        $shift->update();
        return redirect('admin/admin-shift');
    }
    public function deleteShift($id){
        $shift = Shift::find($id);
        $shift->delete();
        return redirect('admin/admin-shift');
    }
}
