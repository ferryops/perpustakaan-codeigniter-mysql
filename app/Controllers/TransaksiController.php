<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\BukuModel;
use App\Models\AnggotaModel;

class TransaksiController extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        $this->bukuModel = new BukuModel();
        $this->anggotaModel = new AnggotaModel();
    }

    // Menampilkan semua transaksi
    public function index()
    {           
        $data['transaksi'] = $this->transaksiModel
            ->select('transaksi.*, anggota.nama AS nama_anggota')
            ->join('anggota', 'anggota.id_anggota = transaksi.id_anggota')
            ->findAll();

        return view('transaksi/index', $data);
    }


    // Form tambah transaksi
    public function create()
    {
        $data['buku'] = $this->bukuModel->findAll();
        $data['anggota'] = $this->anggotaModel->findAll();

        return view('transaksi/create', $data);
    }

    // Menyimpan data transaksi
    public function store()
    {
        $data = $this->request->getPost();

        if (!$this->transaksiModel->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->transaksiModel->errors());
        }

        return redirect()->to('/transaksi')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    // Menampilkan detail transaksi berdasarkan id_transaksi
    public function show($id_transaksi)
    {
        $data['transaksi'] = $this->transaksiModel->find($id_transaksi);

        if (!$data['transaksi']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Transaksi dengan ID $id_transaksi tidak ditemukan.");
        }

        return view('transaksi/show', $data);
    }

    // Form edit transaksi
    public function edit($id_transaksi)
    {
        $data['transaksi'] = $this->transaksiModel->find($id_transaksi);

        if (!$data['transaksi']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Transaksi dengan ID $id_transaksi tidak ditemukan.");
        }

        $data['buku'] = $this->bukuModel->findAll();
        $data['anggota'] = $this->anggotaModel->findAll();

        return view('transaksi/edit', $data);
    }

    // Mengupdate data transaksi
    public function update($id_transaksi)
    {
        $data = $this->request->getPost();

        if (!$this->transaksiModel->update($id_transaksi, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->transaksiModel->errors());
        }

        return redirect()->to('/transaksi')->with('success', 'Transaksi berhasil diperbarui.');
    }

    // Menghapus data transaksi
    public function delete($id_transaksi)
    {
        if (!$this->transaksiModel->delete($id_transaksi)) {
            return redirect()->to('/transaksi')->with('error', 'Gagal menghapus transaksi.');
        }

        return redirect()->to('/transaksi')->with('success', 'Transaksi berhasil dihapus.');
    }
}
