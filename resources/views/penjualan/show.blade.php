@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Penjualan</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="penjualan_id">ID</label>
                <input type="text" class="form-control" id="penjualan_id" name="penjualan_id" value="{{ $penjualan->penjualan_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="penjualan_kode">Kode Penjualan</label>
                <input type="text" class="form-control" id="penjualan_kode" name="penjualan_kode" value="{{ $penjualan->penjualan_kode }}" readonly>
            </div>
            <div class="form-group">
                <label for="pembeli">Pembeli</label>
                <input type="text" class="form-control" id="pembeli" name="pembeli" value="{{ $penjualan->pembeli }}" readonly>
            </div>
            <div class="form-group">
                <label for="user">User</label>
                <input type="text" class="form-control" id="user" name="user" value="{{ $penjualan->user->nama }}" readonly>
            </div>
            <div class="form-group">
                <label for="penjualan_tanggal">Tanggal Penjualan</label>
                <input type="text" class="form-control" id="penjualan_tanggal" name="penjualan_tanggal" value="{{$penjualan->penjualan_tanggal}}" readonly>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('penjualan') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection