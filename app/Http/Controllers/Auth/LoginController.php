<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
            'email'    => ['required', 'string', 'email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($credentials)) {
            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'Данный пользователь не найден в базе данных'
                ]);
        }
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
