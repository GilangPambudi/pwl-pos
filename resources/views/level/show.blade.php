@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Level</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="level_kode">Kode Level</label>
                <input type="text" class="form-control" id="level_kode" name="level_kode" value="{{ $level->level_kode }}" readonly>
            </div>
            <div class="form-group">
                <label for="level_nama">Nama Level</label>
                <input type="text" class="form-control" id="level_nama" name="level_nama" value="{{ $level->level_nama }}" readonly>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('level') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection