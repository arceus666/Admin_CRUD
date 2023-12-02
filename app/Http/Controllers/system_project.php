<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Profiler\Profile;

class system_project extends Controller
{
    function index(){
        $data = array(
          'list'=>DB::table('crud')->get()
        );

    return view('register',$data);
    }

    function add(Request $request)
    {


        $query = DB::table('crud')->insert([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'birthdate' => $request->input('birthdate'),
            'nationality' => $request->input('nationality'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'civil_status' => $request->input('civil_status'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'document_type' => $request->input('document_type'),
            'identity_number' => $request->input('identity_number'),
            'designation' => $request->input('designation'),
            'upload_profile' => $request->input('upload_profile')
        ]);

        if ($query) {

            return back()->with('success', 'Data have been successfully inserted');
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }

}
