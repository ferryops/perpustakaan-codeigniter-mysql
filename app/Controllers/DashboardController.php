<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\AnggotaModel;
use App\Models\TransaksiModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class DashboardController extends BaseController
{
    protected $bukuModel;
    protected $anggotaModel;
    protected $transaksiModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
        $this->anggotaModel = new AnggotaModel();
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        // Statistik singkat
        $data['jumlah_buku'] = $this->bukuModel->countAll();
        $data['jumlah_anggota'] = $this->anggotaModel->countAll();
        $data['transaksi_aktif'] = $this->transaksiModel->where('tanggal_kembali', null)->countAllResults();

        // Daftar buku yang sedang dipinjam
        $data['buku_dipinjam'] = $this->transaksiModel
            ->select('buku.judul, anggota.nama, transaksi.tanggal_pinjam, transaksi.tanggal_kembali_direncanakan, transaksi.denda')
            ->join('buku', 'buku.kode_buku = transaksi.kode_buku')
            ->join('anggota', 'anggota.id_anggota = transaksi.id_anggota')
            ->where('tanggal_kembali', null)
            ->findAll();

        return view('dashboard/index', $data);
    }

    public function generatePdf()
    {
        $transaksi = $this->transaksiModel
            ->select('buku.judul, anggota.nama, transaksi.tanggal_pinjam, transaksi.tanggal_kembali_direncanakan, transaksi.denda')
            ->join('buku', 'buku.kode_buku = transaksi.kode_buku')
            ->join('anggota', 'anggota.id_anggota = transaksi.id_anggota')
            ->where('tanggal_kembali', null)
            ->findAll();

        $html = view('dashboard/pdf', ['transaksi' => $transaksi]);

        $options = new Options();
        $options->set('defaultFont', 'Helvetica');
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $dompdf->stream("laporan_transaksi_peminjaman.pdf", ["Attachment" => true]);
    }
}


