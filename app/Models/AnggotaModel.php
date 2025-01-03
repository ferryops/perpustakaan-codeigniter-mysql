<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';

    protected $allowedFields = [
        'nama',
        'alamat',
        'nomor_telepon',
        'email'
    ];

    protected $validationRules = [
        'nama' => 'required|max_length[255]',
        'alamat' => 'required',
        'nomor_telepon' => 'required|numeric|max_length[15]',
        'email' => 'required|valid_email|is_unique[anggota.email]'
    ];

    protected $validationMessages = [
        'email' => ['is_unique' => 'Email ini sudah terdaftar.']
    ];
}
