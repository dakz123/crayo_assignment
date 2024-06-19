<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin(Request $request)
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $validated = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
            'is_admin' => 1
        ]);
        if ($validated) {
            return redirect()->route('dashboard')->with('message', 'Welcome');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
}
