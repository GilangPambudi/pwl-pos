@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Kategori</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="kategori_kode">Kode Kategori</label>
                <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" value="{{ $kategori->kategori_kode }}" readonly>
            </div>
            <div class="form-group">
                <label for="kategori_nama">Nama Kategori</label>
                <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" value="{{ $kategori->kategori_nama }}" readonly>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('kategori') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection