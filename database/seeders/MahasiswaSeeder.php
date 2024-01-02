<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data mahasiswa
        DB::table('mahasiswa')->insert([
            'nama_lengkap' => 'John Doe',
            'alamat' => 'Jl. Contoh No. 123',
            'tanggal_lahir' => '1995-05-15',
            'telepon' => '08123456789',
            'nisn' => '1234567890',
            'asal_sekolah' => 'SMA Contoh',
            'daftar_ke' => '2023-01-01',
            'foto' => null, // Foto dapat kosong (nullable)
        ]);

        // Tambahkan data mahasiswa lain jika diperlukan
        // DB::table('mahasiswa')->insert([
        //     'nama_lengkap' => 'Nama Lengkap Lain',
        //     ...
        // ]);
    }
}
