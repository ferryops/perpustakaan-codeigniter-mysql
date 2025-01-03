<?php

namespace App\Controllers;

use App\Models\BukuModel;

class BukuController extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    // Menampilkan daftar semua buku
    public function index()
    {
        $keyword = $this->request->getGet('keyword'); // Ambil input pencarian
        if ($keyword) {
            // Jika ada keyword, cari buku berdasarkan judul atau kode_buku
            $data['buku'] = $this->bukuModel
                ->like('judul', $keyword)
                ->orLike('kode_buku', $keyword)
                ->findAll();
        } else {
            // Jika tidak ada keyword, tampilkan semua buku
            $data['buku'] = $this->bukuModel->findAll();
        }

        $data['keyword'] = $keyword; // Kirim keyword ke view

        return view('buku/index', $data);
    }



    // Form tambah buku
    public function create()
    {
        return view('buku/create');
    }

    // Menyimpan data buku
    public function store()
    {
        $data = $this->request->getPost();

        if (!$this->bukuModel->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->bukuModel->errors());
        }

        return redirect()->to('/buku')->with('success', 'Buku berhasil ditambahkan.');
    }

    // Menampilkan detail buku berdasarkan kode_buku
    public function show($kode_buku)
    {
        $data['buku'] = $this->bukuModel->find($kode_buku);

        if (!$data['buku']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Buku dengan kode $kode_buku tidak ditemukan.");
        }

        return view('buku/show', $data);
    }

    // Form edit buku
    public function edit($kode_buku)
    {
        $data['buku'] = $this->bukuModel->find($kode_buku);

        if (!$data['buku']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Buku dengan kode $kode_buku tidak ditemukan.");
        }

        return view('buku/edit', $data);
    }

    // Mengupdate data buku
    public function update($kode_buku)
    {
        $data = $this->request->getPost();

        if (!$this->bukuModel->update($kode_buku, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->bukuModel->errors());
        }

        return redirect()->to('/buku')->with('success', 'Buku berhasil diperbarui.');
    }

    // Menghapus data buku
    public function delete($kode_buku)
    {
        if (!$this->bukuModel->delete($kode_buku)) {
            return redirect()->to('/buku')->with('error', 'Gagal menghapus buku.');
        }

        return redirect()->to('/buku')->with('success', 'Buku berhasil dihapus.');
    }
}
