@extends('layouts.navbar')

@section('content')
<div class="container mt-5">
    <h1>Tambah Asset</h1>
    <form action="{{ route('asset.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="host_id">Nama Penyewa:</label>
            <select class="form-control" id="host_id" name="host_id">
                @foreach ($hosts as $host)
                    <option value="{{ $host->id }}">{{ $host->nama_penyewa }}</option>
                @endforeach
            </select>
        </div>
        {{-- <div class="form-group">
            <label for="host_id">Penyewa:</label>
            <input type="text" class="form-control" id="host_id" name="host_id">
        </div> --}}
        
        <div class="form-group">
            <label for="wilayah">Wilayah:</label>
            <input type="text" class="form-control" id="wilayah" name="wilayah">
        </div>
        <div class="form-group">
            <label for="nama_aset">Nama Aset:</label>
            <input type="text" class="form-control" id="nama_aset" name="nama_aset">
        </div>
        <div class="form-group">
            <label for="jenis_aset">Jenis Aset:</label>
            <input type="text" class="form-control" id="jenis_aset" name="jenis_aset">
        </div>
        <div class="form-group">
            <label for="kode_aset">Kode Aset:</label>
            <input type="text" class="form-control" id="kode_aset" name="kode_aset">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
