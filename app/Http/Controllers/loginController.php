<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('dangnhap');
    }

    public function login(Request $request)
    {
        return redirect('/home'); // chuyển hướng về home
    }
}