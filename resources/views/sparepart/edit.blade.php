@extends('layouts.layout')

@section('title','Edit Sparepart')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-warning">
                Edit Sparepart
            </div>

            <div class="card-body">
                <form action="{{ route('sparepart.update',$item['id']) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Sparepart</label>
                        <input type="text" name="nama" class="form-control" value="{{ $item['nama'] }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" value="{{ $item['merk'] }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $item['harga'] }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ $item['stok'] }}">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('sparepart.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                        <button class="btn btn-warning">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
