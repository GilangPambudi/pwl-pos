@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($detail)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
            Data yang Anda cari tidak ditemukan.
        </div>
        <a href="{{ url('penjualandetail') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        @else
        <form method="POST" action="{{ url('/penjualandetail/'.$detail->detail_id) }}" class="form-horizontal">
            @csrf
            {!! method_field('PUT') !!} <!-- tambahkan baris ini untuk proses edit yang butuh method PUT -->
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Barang</label>
                <div class="col-10">
                    <select class="form-control" id="barang_id" name="barang_id" required>
                        <option value="">- Pilih Barang -</option>
                        @foreach($barang as $item)
                        <option value="{{ $item->barang_id }}" data-harga="{{ $item->harga_jual }}">{{ $item->barang_nama }}</option>
                        @endforeach
                    </select>
                    @error('barang_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Kode Penjualan</label>
                <div class="col-10">
                    <select class="form-control" id="penjualan_id" name="penjualan_id" required>
                        <option value="">- Pilih Kode Penjualan -</option>
                        @foreach($penjualan as $item)
                        <option value="{{ $item->penjualan_id }}" @if($item->penjualan_id == $detail->penjualan_id) selected @endif>{{ $item->penjualan_kode }}</option>
                        @endforeach
                    </select>
                    @error('penjualan_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Jumlah</label>
                <div class="col-10">
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $detail->jumlah }}" required>
                    @error('jumlah')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Harga Jual</label>
                <div class="col-10">
                    <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="{{ $detail->harga_jual }}" required>
                    @error('harga_jual')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Total Harga</label>
                <div class="col-10">
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $detail->harga }}" required>
                    @error('harga')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label"></label>
                <div class="col-10">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('penjualandetail') }}">Kembali</a>
                </div>
            </div>
        </form>
        @endempty
    </div>
</div>
@endsection
@push('css')
@endpush
@push('js')
<script>
    $(document).ready(function() {
        $('#barang_id').change(function() {
            var harga = $(this).find(':selected').data('harga');
            $('#jumlah').val(1);
            $('#harga_jual').val(harga);
            $('#harga').val(harga);
        });

        $('#jumlah').keyup(function() {
            var harga = $('#harga_jual').val();
            var jumlah = $(this).val();
            var total = harga * jumlah;
            $('#harga').val(total);
        });
    });
</script>
@endpush