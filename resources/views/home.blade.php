@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" id="main-jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-2 text-center text-md-left">
                <img src="{{ asset('images/GAS_DESIGN_KIT-07.png') }}" alt="Nama Perwakilan">
            </div>
            <div class="col-md-6 pt-4 text-center text-md-left">
                <p class="badge badge-pill badge-light" style="font-size: 14pt;">GAT01001</p>
                <h1>Nama Perwakilan</h1>
                <p>Jl. Lurus Menuju Kebenaran No. 01</p>
            </div>
            <div class="col-md-2 text-center pt-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">123</h1>
                    </div>  
                    <div class="card-footer"><ion-icon name="people"></ion-icon> Jamaah</div>
                </div>
            </div>
            <div class="col-md-2 text-center pt-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">123</h1>
                    </div>  
                    <div class="card-footer"><ion-icon name="podium"></ion-icon> Poin</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<!-- {{ Auth::user()->username }} -->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card card-gas-1 mb-5" id="card-main-1">
                <div class="card-body">
                    <h2 class="card-title">Pendaftaran Jamaah</h2>
                    <p>Cek status pendaftaran jamaah atau pendaftaran baru</p>
                    <a href="#" class="btn btn-pink-outline btn-w-50"><ion-icon name="search"></ion-icon> Cek Status Pendaftaran</a>
                    <a href="#" class="btn btn-warning btn-rounded btn-w-50"><ion-icon name="person-add"></ion-icon> Pendaftaran Baru</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-gas-1 mb-5" id="card-main-2">
                <div class="card-body">
                    <h2 class="card-title">Pembayaran</h2>
                    <p>Cek history pembayaran atau konfirmasi pembayaran</p>
                    <div>
                        <a href="#" class="btn btn-pink-outline btn-w-50" style="display: block;"><ion-icon name="time"></ion-icon> Cek History Pembayaran</a>
                        <a href="#" class="btn btn-warning btn-rounded btn-w-50" style="display: block;"><ion-icon name="checkmark"></ion-icon> Konfirmasi Pembayaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-5">
        <ion-icon name="wifi"></ion-icon> Info Terbaru
    </h2>
    <div id="row-striped">
        <div class="row">
            <div class="col-md-9 p-3">
                Daftar tabungan umrah dapat cashback 200,000
            </div>
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-sm btn-pink-outline btn-block mt-2">Lihat lebih detail <ion-icon name="arrow-forward"></ion-icon></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 p-3">
                Daftar tabungan umrah dapat cashback 200,000
            </div>
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-sm btn-pink-outline btn-block mt-2">Lihat lebih detail <ion-icon name="arrow-forward"></ion-icon></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 p-3">
                Daftar tabungan umrah dapat cashback 200,000
            </div>
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-sm btn-pink-outline btn-block mt-2">Lihat lebih detail <ion-icon name="arrow-forward"></ion-icon></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 p-3">
                Daftar tabungan umrah dapat cashback 200,000
            </div>
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-sm btn-pink-outline btn-block mt-2">Lihat lebih detail <ion-icon name="arrow-forward"></ion-icon></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 p-3">
                Daftar tabungan umrah dapat cashback 200,000
            </div>
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-sm btn-pink-outline btn-block mt-2">Lihat lebih detail <ion-icon name="arrow-forward"></ion-icon></a>
            </div>
        </div>
    </div>
</div>
@endsection
