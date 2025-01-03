<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AuthController extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $this->adminModel->where('username', $username)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            session()->set([
                'isLoggedIn' => true,
                'admin_id' => $admin['id_admin'],
                'username' => $admin['username']
            ]);

            return redirect()->to('/transaksi');
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
