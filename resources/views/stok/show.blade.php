@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Stok</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="stok_id">ID Stok</label>
                <input type="text" class="form-control" id="stok_id" name="stok_id" value="{{ $stok->stok_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="barang_id">ID Barang</label>
                <input type="text" class="form-control" id="barang_id" name="barang_id" value="{{ $stok->barang->barang_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="barang_nama">Nama Barang</label>
                <input type="text" class="form-control" id="barang_nama" name="barang_nama" value="{{ $stok->barang->barang_nama }}" readonly>
            </div>
            <div class="form-group">
                <label for="stok_tanggal">Tanggal Stok</label>
                <input type="text" class="form-control" id="stok_tanggal" name="stok_tanggal" value="{{ $stok->stok_tanggal }}" readonly>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('stok') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection