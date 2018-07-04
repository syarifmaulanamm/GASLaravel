@extends('layouts.app')

@section('content')
<div class="container text-center">
    <img src="{{ asset('images/GAS_DESIGN_KIT-11.png') }}" alt="Selamat Bergabung">
    <h1 class="text-pink">
        Selamat Bergabung Menjadi Jamaah Gardi!
    </h1>
    <a href="{{ route('home') }}" class="btn btn-warning btn-rounded">
        <ion-icon name="arrow-back"></ion-icon> Kembali ke Dashboard
    </a>
</div>
@endsection