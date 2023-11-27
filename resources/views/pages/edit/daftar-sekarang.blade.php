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
                <form action="URL_GOOGLE_FORM_ANDA" method="post" target="_blank">
                    <!-- Ganti URL_GOOGLE_FORM_ANDA dengan URL formulir Google Anda -->
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="entry.1234567890" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="entry.2345678901" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="entry.3456789012" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email:</label>
                        <input type="email" id="email" name="entry.4567890123" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telepon_rumah">Telepon Rumah:</label>
                        <input type="tel" id="telepon_rumah" name="entry.5678901234" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <input type="text" id="nisn" name="entry.6789012345" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah:</label>
                        <input type="text" id="asal_sekolah" name="entry.7890123456" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat_sekolah">Alamat Sekolah:</label>
                        <textarea id="alamat_sekolah" name="entry.8901234567" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="daftar_ke">Daftar ke:</label>
                        <input type="text" id="daftar_ke" name="entry.9012345678" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto:</label>
                        <input type="file" id="foto" name="entry.0123456789" class="form-control">
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
