<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AdminController extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    // Menampilkan semua admin
    public function index()
    {
        $data['admin'] = $this->adminModel->findAll();

        return view('admin/index', $data);
    }

    // Form tambah admin
    public function create()
    {
        return view('admin/create');
    }

    // Menyimpan data admin
    public function store()
    {
        $data = $this->request->getPost();

        // Enkripsi password sebelum menyimpan
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if (!$this->adminModel->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->adminModel->errors());
        }

        return redirect()->to('/admin')->with('success', 'Admin berhasil ditambahkan.');
    }

    // Menampilkan detail admin
    public function show($id_admin)
    {
        $data['admin'] = $this->adminModel->find($id_admin);

        if (!$data['admin']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Admin dengan ID $id_admin tidak ditemukan.");
        }

        return view('admin/show', $data);
    }

    // Form edit admin
    public function edit($id_admin)
    {
        $data['admin'] = $this->adminModel->find($id_admin);

        if (!$data['admin']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Admin dengan ID $id_admin tidak ditemukan.");
        }

        return view('admin/edit', $data);
    }

    // Mengupdate data admin
    public function update($id_admin)
    {
        $data = $this->request->getPost();

        if (!empty($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        } else {
            unset($data['password']); // Jika password kosong, jangan diperbarui
        }

        if (!$this->adminModel->update($id_admin, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->adminModel->errors());
        }

        return redirect()->to('/admin')->with('success', 'Admin berhasil diperbarui.');
    }

    // Menghapus data admin
    public function delete($id_admin)
    {
        if (!$this->adminModel->delete($id_admin)) {
            return redirect()->to('/admin')->with('error', 'Gagal menghapus admin.');
        }

        return redirect()->to('/admin')->with('success', 'Admin berhasil dihapus.');
    }
}
