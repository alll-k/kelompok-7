<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login'); // pastikan file resources/views/login.blade.php ada
    }

    public function prosesLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // Contoh validasi manual (sementara)
        if ($email === 'admin@gmail.com' && $password === '123456') {
            return redirect()->route('beranda');
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function register()
    {
        return view('register');
    }

    public function registerProses(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat, silakan login!');
    }
}