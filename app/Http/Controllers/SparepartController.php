<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        $spareparts = Sparepart::all();
        return view('sparepart.index', compact('spareparts'));
    }

    public function create()
    {
        return view('sparepart.create');
    }

    public function store(Request $request)
    {
        Sparepart::create([
            'nama_sparepart' => $request->nama_sparepart,
            'harga'          => $request->harga,
            'stok'           => $request->stok,
        ]);

        return redirect()->route('sparepart.index');
    }

    public function edit($id)
    {
        $sparepart = Sparepart::findOrFail($id);
        return view('sparepart.edit', compact('sparepart'));
    }

    public function update(Request $request, $id)
    {
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->update([
            'nama_sparepart' => $request->nama_sparepart,
            'harga'          => $request->harga,
            'stok'           => $request->stok,
        ]);

        return redirect()->route('sparepart.index');
    }

    public function destroy($id)
    {
        Sparepart::findOrFail($id)->delete();
        return redirect()->route('sparepart.index');
    }
}
