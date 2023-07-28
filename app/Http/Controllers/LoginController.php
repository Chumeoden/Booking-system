<?php

// app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $role = $request->input('role');
        $guard = $role === 'admin' ? 'admin' : 'web';

        if (Auth::guard($guard)->attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->route($role === 'admin' ? 'admin.index' : 'home');
        } else {
            // Đăng nhập thất bại
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}
