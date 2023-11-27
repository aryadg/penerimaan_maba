@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="section-body">
        </section>
        <div class="col-12 mb-4">
                        <div class="hero bg-primary text-white">
                            <div class="hero-inner">
                                <h2>Selamat Datang Calon Mahasiswa Baru</h2>
                                <p class="lead">Program studi POLITEKNIK BHAKTI SEMESTA sebagai produk pendidikan mempunyai prospek yang sesuai pasar pada era digital, adapun prospek dari masing-masing program studi. Politeknik Bhakti Semesta membuka Penerimaan Mahasiswa Baru angkatan ke-3 tahun akademik 2023/2024 untuk kelas reguler di 3 program studi unggulan.</p>
                                <div class="mt-4">
                                    <a href="#"
                                        class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                                        Akun Anda</a>
                                </div>
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
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
