<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nama_lengkap',
        'alamat',
        'tanggal_lahir',
        'telepon',
        'nisn',
        'asal_sekolah',
        'daftar_ke',
        // 'foto',
    ];

    protected $casts = [
        'tanggal_lahir' => 'datetime',
    ];
}