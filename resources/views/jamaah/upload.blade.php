@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-5 text-center">
        Upload Persyaratan Jamaah <br>
        <small class="text-center badge badge-primary badge-pill" style="font-size: 12pt;">
            Nama Jamaah : Syarif Maulana (QXKO2P)
        </small>
    </h1>

    <form action="{{ route('afterCreateJamaah') }}">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-5 text-center">
                <div class="card-body">
                    <input type="file" name="paspor" id="paspor">
                </div>
                <div class="card-footer">
                    <strong><ion-icon name="document"></ion-icon> Paspor</strong>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-5 text-center">
                <div class="card-body">
                    <input type="file" name="ktp" id="ktp">
                </div>
                <div class="card-footer">
                    <strong><ion-icon name="document"></ion-icon> KTP</strong>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-5 text-center">
                <div class="card-body">
                    <input type="file" name="kk" id="kk">
                </div>
                <div class="card-footer">
                    <strong><ion-icon name="document"></ion-icon> Kartu Keluarga</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-link">Lewati</button>
        <button type="submit" class="btn btn-pink btn-rounded">Upload Sekarang <ion-icon name="arrow-forward"></ion-icon></button>
    </div>

    </form>

</div>
@endsection