<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // Sesuaikan dengan nama tabel di database
    // protected $primaryKey = 'id'; // Sesuaikan dengan nama kolom primary key

    protected $fillable = [
        'nama_lengkap',
        'alamat',
        'tanggal_lahir',
        'telepon',
        'nisn',
        'asal_sekolah',
        'daftar_ke',
        'foto',
    ];

    // Jika Anda ingin menyembunyikan beberapa atribut
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Jika Anda ingin mengubah tipe data atribut
    protected $casts = [
        'tanggal_lahir' => 'datetime',
        // 'daftar_ke' => 'datetime',
    ];
}
