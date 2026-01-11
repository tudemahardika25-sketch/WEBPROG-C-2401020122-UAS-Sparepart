@extends('layouts.app')

@section('content')

<div class="card shadow-lg">
    <div class="card-header text-danger fw-bold">
        TAMBAH SPAREPART
    </div>

    <div class="card-body">

        <form action="{{ route('sparepart.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>NAMA SPAREPART</label>
                <input type="text" name="nama_sparepart" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>HARGA</label>
                <input type="number" name="harga" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>STOK</label>
                <input type="number" name="stok" class="form-control" required>
            </div>

            <button class="btn btn-success">SIMPAN</button>
            <a href="{{ route('sparepart.index') }}" class="btn btn-secondary">KEMBALI</a>
        </form>

    </div>
</div>

@endsection
