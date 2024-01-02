@extends('layouts.app')

@section('title', 'Pendaftaran Mahasiswa Baru')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pendaftaran Mahasiswa Baru</h1>
            </div>

            <div class="section-body">
                <!-- Formulir Pendaftaran Mahasiswa Baru -->
                <form action="{{ route('mahasiswa.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama_lengkap" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email:</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telepon_rumah">Telepon Rumah:</label>
                        <input type="tel" id="telepon" name="telepon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <input type="text" id="nisn" name="nisn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah:</label>
                        <input type="text" id="asal_sekolah" name="asal_sekolah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="daftar_ke">Daftar ke:</label>
                        <input type="text" id="daftar_ke" name="daftar_ke" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto:</label>
                        <input type="file" id="foto" name="foto" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
                <!-- End Formulir Pendaftaran Mahasiswa Baru -->
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
