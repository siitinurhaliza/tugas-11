<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    use Illuminate\Http\Request;

public function showRegistrationForm()
{
    return view('register');
}

public function register(Request $request)
{
   
    return redirect()->route('welcome', [
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
    ]);
}

public function welcome(Request $request)
{
    return view('welcome', [
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
    ]);
}

}
