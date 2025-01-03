<?php

namespace App\Controllers;

class WelcomeController extends BaseController
{
    public function index()
    {
        // Periksa apakah user sudah login
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/transaksi');
        }

        // Jika belum login, tampilkan halaman login
        return view('welcome_message');
    }
}
