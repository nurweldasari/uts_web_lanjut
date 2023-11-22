<?php

// LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Memproses data login
    public function login(Request $request)
    {
        // Lakukan validasi form login di sini

        // Gantilah ini dengan logika otentikasi yang sesuai dengan kebutuhan Anda
        $adminUsername = 'admin';
        $adminPassword = 'password';

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === $adminUsername && $password === $adminPassword) {
            // Jika login berhasil, arahkan ke halaman dashboard
            return redirect()->route('dashboard');
        } else {
            // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
            return redirect()->route('login.form')->with('login_failed', 'Invalid credentials. Please try again.');
        }
    }
}
