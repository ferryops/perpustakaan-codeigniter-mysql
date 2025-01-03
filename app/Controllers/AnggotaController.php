<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    protected $anggotaModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }

    // Menampilkan daftar semua anggota
    public function index()
    {
        $data['anggota'] = $this->anggotaModel->findAll();

        return view('anggota/index', $data);
    }

    // Form tambah anggota
    public function create()
    {
        return view('anggota/create');
    }

    // Menyimpan data anggota
    public function store()
    {
        $data = $this->request->getPost();

        if (!$this->anggotaModel->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->anggotaModel->errors());
        }

        return redirect()->to('/anggota')->with('success', 'Anggota berhasil ditambahkan.');
    }

    // Menampilkan detail anggota berdasarkan id_anggota
    public function show($id_anggota)
    {
        $data['anggota'] = $this->anggotaModel->find($id_anggota);

        if (!$data['anggota']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Anggota dengan ID $id_anggota tidak ditemukan.");
        }

        return view('anggota/show', $data);
    }

    // Form edit anggota
    public function edit($id_anggota)
    {
        $data['anggota'] = $this->anggotaModel->find($id_anggota);

        if (!$data['anggota']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Anggota dengan ID $id_anggota tidak ditemukan.");
        }

        return view('anggota/edit', $data);
    }

    // Mengupdate data anggota
    public function update($id_anggota)
    {
        $data = $this->request->getPost();

        if (!$this->anggotaModel->update($id_anggota, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->anggotaModel->errors());
        }

        return redirect()->to('/anggota')->with('success', 'Anggota berhasil diperbarui.');
    }

    // Menghapus data anggota
    public function delete($id_anggota)
    {
        if (!$this->anggotaModel->delete($id_anggota)) {
            return redirect()->to('/anggota')->with('error', 'Gagal menghapus anggota.');
        }

        return redirect()->to('/anggota')->with('success', 'Anggota berhasil dihapus.');
    }
}
