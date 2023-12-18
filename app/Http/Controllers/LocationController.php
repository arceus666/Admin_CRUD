<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function addLocation(Request $request){
        $query = DB::table('location')->insert([
        'location_name'=>$request->input('location_name')
        ]);
        return redirect('admin/admin-location');
    }
    public function editLocation($id){
        $location = Location::find($id);
        return view('/admin/admin_edit_location', compact('location'));
    }
    public function updateLocation(Request $request, $id){
        $location = Location::find($id);
        $location->location_name=$request->input('location_name');
        $location->update();
        return redirect('/admin/admin-location');
    }
    public function deleteLocation($id){
        $location = Location::find($id);
        $location->delete();
        return redirect('/admin/admin-location');
    }
}
