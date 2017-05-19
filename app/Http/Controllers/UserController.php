<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            flash('Entered!')->success();
            return redirect('/messages');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/messages');
    }

}
