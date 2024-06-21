<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('login.registration');
    }

    public function register(Request $request)
    {
        return redirect()->route('posts.index');
    }
}
