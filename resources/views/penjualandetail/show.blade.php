@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Barang</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="detail_id">ID</label>
                <input type="text" class="form-control" id="detail_id" name="detail_id" value="{{ $detail->detail_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="penjualan_kode">Kode Penjualan</label>
                <input type="text" class="form-control" id="penjualan_kode" name="penjualan_kode" value="{{ $detail->penjualan->penjualan_kode }}" readonly>
            </div>
            <div class="form-group">
                <label for="barang_nama">Nama Barang</label>
                <input type="text" class="form-control" id="barang_nama" name="barang_nama" value="{{ $detail->barang->barang_nama }}" readonly>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $detail->jumlah }}" readonly>
            </div>
            <div class="form-group">
                <label for="harga">Total Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{$detail->harga}}" readonly>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('penjualandetail') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection