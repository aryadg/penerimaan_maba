@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <style>
        .hero {
            background-size: cover;
            background-position: center;
            height: 400px;
            position: relative;
            overflow: hidden;
            margin-bottom:50px;
        }

        .hero-inner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .hero-inner h2 {
            font-size: ;
        }

        .hero-inner p {
            font-size: 1.6em;
        }

        .hero-inner a {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.2em;
            color: #fff;
            background-color: rgba(255, 255, 255, 0.2);
            text-decoration: none;
            border-radius: 5px;
        }

        /* Add more slides as needed */
        .hero.bg1 {
            background-image: url('img/gedung1.jpg');
        }

        .hero.bg2 {
            background-image: url('img/gedung2.jpg');
        }

        .hero.bg3 {
            background-image: url('img/karsa.jpg');
        }

        /* Animation */
        .hero {
            animation: fadeInOut 5s infinite;
        }
        

        @keyframes fadeInOut {
            0%, 100% {
                opacity: 0;
            }

            20%, 80% {
                opacity: 1;
            }
            
        }
    </style>
@endpush

@section('main')<div class="main-content">
        @if(session('success'))
    <div class="alert alert-success alert-has-icon">
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        <div class="alert-body">
            <div class="alert-title">Success</div>
            {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-has-icon">
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        <div class="alert-body">
            <div class="alert-title">Error</div>
            {{ session('error') }}
        </div>
    </div>
@endif

        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="section-body">
        </section>
        <div class="col-12 mb-4">
            <div class="hero bg1">
                <div class="hero-inner">
                    <h1 style="background-color: blue">Selamat Datang Calon Mahasiswa Baru</h1>
                    <h3 style="background-color:blue" class="lead">Program studi POLITEKNIK BHAKTI SEMESTA sebagai produk pendidikan mempunyai prospek yang sesuai pasar pada era digital, adapun prospek dari masing-masing program studi. Politeknik Bhakti Semesta membuka Penerimaan Mahasiswa Baru angkatan ke-3 tahun akademik 2023/2024 untuk kelas reguler di 3 program studi unggulan.</h3>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Akun Anda</a>
                    </div>
                </div>
            </div>

        <div class="section-body">
                <!-- <h2 class="section-title">Pricing</h2>
                <p class="section-lead">Price components are very important for SaaS projects or other projects.</p> -->

                <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                        <div class="pricing pricing-highlight">
                            <!-- <div class="pricing-title">
                                Small Team
                            </div> -->
                            <div class="pricing-padding">
                                <div class="pricing-price">
                                <img src="img/icon1.png" alt="Pricing Image" style="width: 100px; height: 100px;">
                                </div>
                                <div class="pricing-details">
                                    <div class="pricing-item">
                                        <!-- <div class="pricing-item-icon"><i class="fas fa-check"></i></div> -->
                                        <div class="pricing-item-label"><h3>Alur Pendaftaran</h3></div>
                                    </div>
                                    <div class="pricing-item">
                                        <!-- <div class="pricing-item-icon"><i class="fas fa-check"></i></div> -->
                                        <div class="pricing-item-label">Alur Pendaftaran Mahasiswa Baru</div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-cta">
                            <a href="/bd-alur">Masuk</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="pricing pricing-highlight">
                            <!-- <div class="pricing-title">
                                Small Team
                            </div> -->
                            <div class="pricing-padding">
                                <div class="pricing-price">
                                <img src="img/icon2.png" alt="Pricing Image" style="width: 100px; height: 100px;">
                                </div>
                                <div class="pricing-details">
                                    <div class="pricing-item">
                                        <!-- <div class="pricing-item-icon"><i class="fas fa-check"></i></div> -->
                                        <div class="pricing-item-label"><h3>Daftar Sekarang</h3></div>
                                    </div>
                                    <div class="pricing-item">
                                        <!-- <div class="pricing-item-icon"><i class="fas fa-check"></i></div> -->
                                        <div class="pricing-item-label">Pendaftaran Mahasiswa Baru</div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-cta">
                            <a href="/bd-daftar-sekarang">Masuk</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="pricing pricing-highlight">
                            <!-- <div class="pricing-title">
                                Small Team
                            </div> -->
                            <div class="pricing-padding">
                                <div class="pricing-price">
                                <img src="img/icon3.png" alt="Pricing Image" style="width: 100px; height: 100px;">
                                </div>
                                <div class="pricing-details">
                                    <div class="pricing-item">
                                        <!-- <div class="pricing-item-icon"><i class="fas fa-check"></i></div> -->
                                        <div class="pricing-item-label"><h3>Virtual Account</h3></div>
                                    </div>
                                    <div class="pricing-item">
                                        <!-- <div class="pricing-item-icon"><i class="fas fa-check"></i></div> -->
                                        <div class="pricing-item-label">Sistem Pembayaran</div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-cta">
                            <a href="/bd-virtual">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var hero = document.querySelector('.hero');
            var currentImageIndex = 0;

            function changeBackground() {
                currentImageIndex = (currentImageIndex + 1) % 3; // Assuming you have 3 background images
                hero.className = 'hero bg' + (currentImageIndex + 1);
            }

            setInterval(changeBackground, 5000); // Change background every 5 seconds
        });
    </script>
@endpush