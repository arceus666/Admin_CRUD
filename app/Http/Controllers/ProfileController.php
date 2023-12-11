<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\system_project;
use function PHPUnit\Framework\returnSelf;

class ProfileController extends Controller
{
    public function fetchAll(): View
    {
        return view('profile', ['data' => Crud::all()]);
    }
public function edit($id){
        $prof = Crud::find($id);
        return view('edit',compact('prof'));
}
public function update(Request $request, $id){
        $prof = Crud::find($id);
        $prof->fname=$request->input('user_fname');
        $prof->lname=$request->input('user_lname');
        $prof->birthdate=$request->input('birthdate');
        $prof->nationality=$request->input('nationality');
        $prof->address=$request->input('address');
        $prof->city=$request->input('city');
        $prof->country=$request->input('country');
        $prof->civil_status=$request->input('civil_status');
        $prof->gender=$request->input('gender');
        $prof->email=$request->input('email');
        $prof->phone_number=$request->input('phone_number');
        $prof->document_type=$request->input('document_type');
        $prof->identity_number=$request->input('identity_number');
        $prof->designation=$request->input('designation');
        $prof->upload_profile=$request->input('upload_profile');



        $prof->update();
        return redirect('view_employee');
}
    public function destroy(string|int $id): RedirectResponse
    {
        Crud::destroy($id);
        return to_route('dashboard', ['data' => Crud::all()]);
    }
}



