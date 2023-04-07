<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.pages.auth.login');
    }

    public function submitLogin(Request $request)
    {
        return $request->all();
    }

    public function register()
    {
        return view('frontend.pages.auth.register');
    }

    public function submitRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:8|confirmed'
        ]);

        $validatedData['password'] = Hash::make($request->password);
        // User::create($validatedData);
        // Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        return $request->all();
    }

    public function logout()
    {
        Session::flush('user');
        Auth::logout();
        return redirect('/');
    }
}
