@extends('layouts.app')

@section('title', 'Profil Universitas')

@push('style')
    <!-- CSS Libraries -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container2 {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }

        h1, h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .profile-section, .faculties-section, .contact-section {
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 5px;
        }

        address {
            font-style: normal;
        }
    </style>
@endpush

@section('main')
    <div class="container2">
        <header>
            <h1>Universitas XYZ</h1>
            <p>Tempat Membangun Masa Depan</p>
        </header>

        <section class="profile-section">
            <h2>Profil Universitas</h2>
            <p>Universitas XYZ adalah lembaga pendidikan tinggi yang berkomitmen untuk memberikan pendidikan berkualitas dan menciptakan lingkungan pembelajaran yang inspiratif.</p>
        </section>

        <section class="faculties-section">
            <h2>Fakultas</h2>
            <ul>
                <li>Fakultas Ilmu Komputer</li>
                <li>Fakultas Ekonomi</li>
                <li>Fakultas Teknik Elektro</li>
            </ul>
        </section>

        <section class="contact-section">
            <h2>Kontak</h2>
            <address>
                Jl. Universitas No. 123<br>
                Kota ABC 12345<br>
                Email: info@universitasxyz.ac.id<br>
                Telepon: (123) 456-7890
            </address>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
