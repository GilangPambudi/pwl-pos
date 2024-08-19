@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail User</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="user_id">ID User</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $user->user_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="text" class="form-control" id="level" name="level" value="{{ $user->level->level_nama }}" readonly>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" readonly>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" value="******" readonly>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('user') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection