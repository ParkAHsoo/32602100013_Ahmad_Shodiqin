<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table =  'tb_mahasiswa';
    protected $primaryKey = 'nim';
    protected $useAutoIncrement = false;

    protected $allowedFields = [
        'nim',
        'nama',
        'prodi',
        'universitas',
        'nomor_handphone'
    ];
}
