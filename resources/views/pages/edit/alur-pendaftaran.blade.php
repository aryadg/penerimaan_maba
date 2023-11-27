@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
    <style>
        .main-content {
            text-align: center;
        }

        .section-body {
            margin-top: 20px; /* Tambahkan margin top agar terdapat jarak dengan alur pendaftaran */
        }

        .additional-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .additional-image {
            max-width: 80%; /* Atur lebar gambar agar tidak 100% */
            height: auto;
            border: 1px solid #ccc; /* Contoh: tambahkan border untuk efek visual */
            border-radius: 10px; /* Contoh: tambahkan border-radius untuk sudut gambar yang lebih lembut */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Contoh: tambahkan shadow untuk efek visual */
        }

        .new-container {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 10px;
        }

        .grid-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Posisikan grid di tengah secara horizontal */
            align-items: center;
        }

        .grid-item {
            width: calc(25% - 20px); /* Atur lebar setiap kolom dan beri margin antar kolom */
            margin: 10px;
            padding: 100px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;

            display: flex;
            flex-direction: column;
            justify-content: center; /* Posisikan konten di tengah secara vertical */
            align-items: center;
        }
    </style>
@endpush

@section('main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- CSS Libraries -->
    <style>
        .main-content {
            text-align: center;
        }

        .section-body {
            margin-top: 20px;
        }

        .additional-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-bottom: 100px;
        }

        .additional-image {
            max-width: 80%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .new-container {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 10px;
            width: 80%; /* Sesuaikan lebar container sesuai kebutuhan */
            margin-left: auto;
            margin-right: auto;
        }

        .grid-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .grid-item {
            width: calc(40% - 20px);
            margin: 10px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>ALUR PENDAFTARAN</h1>
            </div>

            <div class="section-body">
                <!-- Tambahkan elemen container baru di bawah alur pendaftaran -->
                <div class="additional-container">
                    <!-- Tambahkan tag <img> untuk menampilkan gambar tambahan -->
                    <img src="{{ asset('img/AlurPendaftaran.png') }}" alt="Additional Image" class="additional-image">
                </div>

                <!-- Tambahkan container baru di bawah container gambar -->
                <div class="new-container">
                    <h2>Cara Mendaftar</h2>
                    <p>Step by step untuk melakukan pendaftaran.</p>

                    <!-- Tambahkan grid container di dalam new-container -->
                    <div class="grid-container">
                        <!-- Tambahkan grid item -->
                        <div class="grid-item">
                            <h4>1. DAFTAR</h4>
                            <p>Mahasiswa baru membuat akun polibest</p>
                        </div>
                        <!-- Tambahkan grid item -->
                        <div class="grid-item">
                            <h4>2. MENGISI FORMULIR</h4>
                            <p>Mahasiswa baru mengisi formulir yang disediakan</p>
                        </div>
                        <!-- Tambahkan grid item -->
                        <div class="grid-item">
                            <h4>3. REGISTRASI AWAL</h4>
                            <p>Mahasiswa baru membayar uang pendaftaran dan meng-upload bukti pembayaran</p>
                        </div>
                        <!-- Tambahkan grid item -->
                        <div class="grid-item">
                            <h4>4. SELEKSI</h4>
                            <p>Mahasiswa baru memilih jalur seleksi (jalur tes/jalur prestasi)</p>
                        </div>
                        <!-- Tambahkan grid item -->
                        <div class="grid-item">
                            <h4>5. TES</h4>
                            <p>Mahasiswa baru melaksanakan tes sesuai tes jadwal yang ditentukan</p>
                        </div>
                        <!-- Tambahkan grid item -->
                        <div class="grid-item">
                            <h4>6. HASIL TES</h4>
                            <p>Mendapatkan SKD setelah dinyatakan lulus tes</p>
                        </div>
                        <!-- Tambahkan grid item -->
                        <div class="grid-item">
                            <h4>7. REGISTRASI ULANG</h4>
                            <p>Melakukan pembayaran dan mendapatkan jadwal OMB, jas ALMAMETER serta mendapatkan KTM (kartu tanda mahasiswa)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>

@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
