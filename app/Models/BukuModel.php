<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'kode_buku';

    protected $allowedFields = [
        'kode_buku',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'jumlah_eksemplar'
    ];

    protected $validationRules = [
        'kode_buku' => 'required|max_length[10]',
        'judul' => 'required|max_length[255]',
        'penulis' => 'required|max_length[255]',
        'penerbit' => 'required|max_length[255]',
        'tahun_terbit' => 'required|numeric|exact_length[4]',
        'jumlah_eksemplar' => 'required|integer|greater_than_equal_to[0]'
    ];

    protected $validationMessages = [
        'kode_buku' => ['required' => 'Kode Buku harus diisi.'],
        'judul' => ['required' => 'Judul Buku harus diisi.'],
        'jumlah_eksemplar' => [
            'integer' => 'Jumlah eksemplar harus berupa angka.',
            'greater_than_equal_to' => 'Jumlah eksemplar tidak boleh kurang dari 0.'
        ]
    ];
}
