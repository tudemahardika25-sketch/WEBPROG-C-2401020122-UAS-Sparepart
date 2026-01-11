<form action="{{ route('sparepart.update', $sparepart->id) }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="nama_sparepart" value="{{ $sparepart->nama_sparepart }}">
<input type="number" name="harga" value="{{ $sparepart->harga }}">
<input type="number" name="stok" value="{{ $sparepart->stok }}">

<button type="submit">Update</button>
</form>
