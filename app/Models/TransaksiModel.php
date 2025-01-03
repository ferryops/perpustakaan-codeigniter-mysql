<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $allowedFields = [
        'id_anggota',
        'kode_buku',
        'tanggal_pinjam',
        'tanggal_kembali_direncanakan',
        'tanggal_kembali',
        'denda'
    ];

    protected $validationRules = [
        'id_anggota' => 'required|integer',
        'kode_buku' => 'required|max_length[10]',
        'tanggal_pinjam' => 'required|valid_date',
        'tanggal_kembali_direncanakan' => 'required|valid_date',
    ];

    // Event Hooks
    protected $beforeInsert = ['checkTanggalKembali'];
    protected $beforeUpdate = ['checkTanggalKembali'];

    /**
     * Check tanggal_kembali validity
     */
    protected function checkTanggalKembali(array $data)
    {
        // Jika tanggal_kembali tidak diisi atau tidak valid, set null
        if (empty($data['data']['tanggal_kembali']) || !$this->isValidDate($data['data']['tanggal_kembali'])) {
            $data['data']['tanggal_kembali'] = null;
        }

        return $data;
    }

    /**
     * Validasi format tanggal
     */
    protected function isValidDate($date)
    {
        $d = \DateTime::createFromFormat('Y-m-d', $date);
        return $d && $d->format('Y-m-d') === $date;
    }
}

