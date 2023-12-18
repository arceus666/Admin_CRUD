<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('/login');
    }

    public function loginEmployee(Request $request){

    }

}
