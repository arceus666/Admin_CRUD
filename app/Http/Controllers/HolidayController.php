<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Holiday;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HolidayController extends Controller
{
   public function addHoliday(Request $request){
        $query = DB::table('holiday')->insert([

            'holiday_name'=>$request->input('holiday_name'),
            'holiday_date'=>$request->input('holiday_date'),
            'holiday_description'=>$request->input('holiday_description')
        ]);
        return redirect('admin/admin-holiday');
   }
   public function editHoliday($id){
       $holiday = Holiday::find($id);
       return view('/admin/admin_edit_holiday', compact('holiday'));
   }
   public function updateHoliday(Request $request, $id){
       $holiday = Holiday::find($id);
       $holiday->holiday_name=$request->input('holiday_name');
       $holiday->holiday_date=$request->input('holiday_date');
       $holiday->holiday_description=$request->input('holiday_description');
       $holiday->update();
       return redirect('/admin/admin-holiday');
   }
   public function deleteHoliday($id){
       $holiday = Holiday::find($id);
       $holiday->delete();
       return redirect('/admin/admin-holiday');
   }
}
