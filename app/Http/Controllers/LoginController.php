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
        $credentials = $request->validate([
            'role' => 'required|in:user,admin', // Role phải là 'user' hoặc 'admin'
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $loginType = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([$loginType => $request->input('email')]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                // Đăng nhập thành công và role là admin
                return redirect()->route('dashboard')->with('success', 'You have successfully logged in as admin.');
            } else {
                // Đăng nhập thành công và role là user
                return redirect()->route('home')->with('success', 'You have successfully logged in as user.');
            }
        } else {
            // Đăng nhập thất bại
            return redirect()->back()->withErrors([
                'message' => 'Incorrect account or password.',
            ]);
        }
    }
}

