@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-5 text-center">
        Pendaftaran Jamaah <br>
        <small class="text-center badge badge-primary badge-pill" style="font-size: 12pt;">
            Agent : {{ Auth::user()->code }}
        </small>
    </h1>

    <form action="{{ route('uploadFileJamaah') }}">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis" class="text-pink">Jenis Pendaftaran</label>
                    <select name="jenis" id="jenis" class="form-control input-pink">
                        <option value="1">Umrah</option>
                        <option value="2">Haji Khusus</option>
                        <option value="3">Tabungan Umrah</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="paket" class="text-pink">Paket</label>
                    <select name="paket" id="paket" class="form-control input-pink">
                        <option value="1">Umrah 9 Hari</option>
                        <option value="2">Umrah 12 Hari</option>
                        <option value="3">Umrah ...</option>
                    </select>
                </div>
            </div>
        </div>

        <hr>
        
        <h3 id="paspor">Paspor</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama" class="text-pink">Nama Sesuai Paspor</label>
                    <input type="text" name="nama" id="nama" class="form-control input-pink">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="no_paspor" class="text-pink">Nomor Paspor</label>
                    <input type="text" name="no_paspor" id="no_paspor" class="form-control input-pink">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tk_paspor" class="text-pink">Tempat Keluar Paspor</label>
                    <input type="text" name="tk_paspor" id="tk_paspor" class="form-control input-pink">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tgk_paspor" class="text-pink">Tanggal Keluar Paspor</label>
                    <input type="date" name="tgk_paspor" id="tgk_paspor" class="form-control input-pink">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="mb_paspor" class="text-pink">Masa Berlaku Paspor</label>
                    <input type="date" name="mb_paspor" id="mb_paspor" class="form-control input-pink">
                </div>
            </div>
        </div>

        <hr>

        <h3 id="data-diri">Data Diri</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tem_lahir" class="text-pink">Tempat Lahir</label>
                    <input type="text" name="tem_lahir" id="tem_lahir" class="form-control input-pink">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tgl_lahir" class="text-pink">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control input-pink">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenkel" class="text-pink">Jenis Kelamin</label>
                    <select name="jenkel" id="jenkel" class="form-control input-pink">
                        <option value="1">Laki - Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="kewarganegaraan" class="text-pink">Kewarganegaraan</label>
                    <select name="kewarganegaraan" id="kewarganegaraan" class="form-control input-pink">
                        <option value="1">WNI</option>
                        <option value="2">WNA</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_ayah" class="text-pink">Nama Ayah</label>
                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control input-pink">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tgl_lahir" class="text-pink">Nama Ibu</label>
                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control input-pink">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone" class="text-pink">Nomor Handphone</label>
                    <input type="number" name="phone" id="phone" class="form-control input-pink">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="text-pink">Email</label>
                    <input type="email" name="email" id="email" class="form-control input-pink">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat" class="text-pink">Alamat</label>
            <textarea name="alamat" id="alamat" rows="5" class="form-control input-pink"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-pink btn-rounded">
                Daftar Sekarang <ion-icon name="arrow-forward"></ion-icon>
            </button>
        </div>
    </form>
</div>
@endsection