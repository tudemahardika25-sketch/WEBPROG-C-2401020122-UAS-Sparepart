@extends('layouts.app')

@section('content')

<div class="card shadow-lg">
    <div class="card-header text-danger fw-bold">
        DAFTAR SPAREPART
    </div>

    <div class="card-body">

        <a href="{{ route('sparepart.create') }}" class="btn btn-success mb-3">
            + TAMBAH SPAREPART
        </a>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>STOK</th>
                    <th>AKSI</th>
                </tr>
            </thead>

            <tbody>
                @foreach($spareparts as $sp)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ strtoupper($sp->nama_sparepart) }}</td>
                    <td>Rp {{ number_format($sp->harga) }}</td>
                    <td>{{ $sp->stok }}</td>
                    <td>
                        <a href="{{ route('sparepart.edit', $sp->id) }}" class="btn btn-warning btn-sm">EDIT</a>

                        <form action="{{ route('sparepart.destroy', $sp->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('HAPUS DATA INI?')">
                                HAPUS
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection
