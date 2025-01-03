<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $allowedFields = [
        'username',
        'password'
    ];

    protected $validationRules = [
        'username' => 'required|max_length[50]|is_unique[admin.username]',
        'password' => 'required|min_length[8]'
    ];

    protected $validationMessages = [
        'username' => ['is_unique' => 'Username ini sudah digunakan.'],
        'password' => ['min_length' => 'Password harus memiliki panjang minimal 8 karakter.']
    ];
}
