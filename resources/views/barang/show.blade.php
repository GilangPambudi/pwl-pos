@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Barang</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="kategori_nama">Kategori</label>
                <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" value="{{ $barang->kategori->kategori_nama }}" readonly>
            </div>
            <div class="form-group">
                <label for="barang_kode">Kode Barang</label>
                <input type="text" class="form-control" id="barang_kode" name="barang_kode" value="{{ $barang->barang_kode }}" readonly>
            </div>
            <div class="form-group">
                <label for="barang_nama">Nama Barang</label>
                <input type="text" class="form-control" id="barang_nama" name="barang_nama" value="{{ $barang->barang_nama }}" readonly>
            </div>
            <div class="form-group">
                <label for="harga_beli">Harga Beli</label>
                <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="Rp{{ $barang->harga_beli }}" readonly>
            </div>
            <div class="form-group">
                <label for="harga_jual">Harga Jual</label>
                <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="Rp{{ $barang->harga_jual }}" readonly>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('barang') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection