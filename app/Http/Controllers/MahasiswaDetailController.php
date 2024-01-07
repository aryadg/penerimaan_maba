<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Mahasiswa;

class MahasiswaDetailController extends Controller
{
    public function create(Request $request)
    {
        // return Mahasiswa::all();

        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'telepon' => 'required',
            'nisn' => 'required',
            'asal_sekolah' => 'required',
            'daftar_ke' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif', // sesuaikan dengan kebutuhan
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'Failed', 'state' => '100', 'message' => $validator->errors()]);
        }

        $nama_lengkap = $request->input('nama_lengkap');
        $alamat = $request->input('alamat');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $telepon = $request->input('telepon');
        $nisn = $request->input('nisn');
        $asal_sekolah = $request->input('asal_sekolah');
        $daftar_ke = $request->input('daftar_ke');

        // return $request->all();

        try {
            $mahasiswa = new Mahasiswa();
            $mahasiswa->nama_lengkap = $nama_lengkap;
            $mahasiswa->alamat = $alamat;
            $mahasiswa->tanggal_lahir = $tanggal_lahir;
            $mahasiswa->telepon = $telepon;
            $mahasiswa->nisn = $nisn;
            $mahasiswa->asal_sekolah = $asal_sekolah;
            $mahasiswa->daftar_ke = $daftar_ke;

            // Proses upload foto jika ada
            if ($request->hasFile('foto')) {
                $fotoPath = $request->file('foto')->store('public/foto_mahasiswa');
                $mahasiswa->foto = basename($fotoPath);
            }

            // Simpan mahasiswa ke dalam database
            $mahasiswa->save();

            return redirect()->route('bd-dashboard')->with('success', 'Mahasiswa baru berhasil ditambahkan!');
        } catch (\Exception $e) {
            return $e->getMessage();
            // Handle exception jika terjadi kesalahan saat menyimpan mahasiswa
            return redirect()->route('bd-dashboard')->with('error', $e->getMessage());
        }
    }
}
