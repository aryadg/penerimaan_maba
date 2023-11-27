@extends('layouts.app')

@section('title', 'Pembayaran Uang Kuliah')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pembayaran Uang Kuliah</h1>
            </div>

            <div class="section-body">
                <!-- Formulir Pembayaran Uang Kuliah -->
                {{-- <form action="{{ route('proses.pembayaran') }}" method="post"> --}}
                    @csrf
                    <div class="form-group">
                        <label for="nomor_kartu">Nomor Kartu:</label>
                        <input type="text" id="nomor_kartu" name="nomor_kartu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_expired">Tanggal Expired:</label>
                        <input type="text" id="tanggal_expired" name="tanggal_expired" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kode_cvv">Kode CVV:</label>
                        <input type="text" id="kode_cvv" name="kode_cvv" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="bank">Pilih Bank:</label>
                        <select id="bank" name="bank" class="form-control">
                            <option value="bank_a">Bank A</option>
                            <option value="bank_b">Bank B</option>
                            <option value="bank_c">Bank C</option>
                            <!-- Tambahkan opsi bank sesuai kebutuhan -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Proses Pembayaran</button>
                </form>
                <!-- End Formulir Pembayaran Uang Kuliah -->
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
