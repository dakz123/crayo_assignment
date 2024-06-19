<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.getLogin')->with('success', 'You have been successfully logged out');
    }
}
