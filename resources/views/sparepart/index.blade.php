@extends('layouts.layout')

@section('title', 'Data Sparepart')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between">
        <span>📦 Data Sparepart Motor</span>
        <a href="{{ route('sparepart.create') }}" class="btn btn-light btn-sm">
            + Tambah Sparepart
        </a>
    </div>

    <div class="card-body">
        @if(count($sparepart) == 0)
            <div class="alert alert-warning text-center">
                Data sparepart masih kosong
            </div>
        @else
        <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sparepart as $i => $s)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $s['nama'] }}</td>
                    <td>{{ $s['merk'] }}</td>
                    <td>Rp {{ number_format($s['harga'],0,',','.') }}</td>
                    <td>{{ $s['stok'] }}</td>
                    <td>
                        <a href="{{ route('sparepart.edit',$s['id']) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('sparepart.destroy',$s['id']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
