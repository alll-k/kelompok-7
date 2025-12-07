<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
