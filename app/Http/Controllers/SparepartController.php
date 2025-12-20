<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SparepartController extends Controller
{
    private $file;

    public function __construct()
    {
        $this->file = storage_path('app/sparepart.json');

        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
    }

    private function getData()
    {
        return json_decode(file_get_contents($this->file), true) ?? [];
    }

    private function saveData($data)
    {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function index()
    {
        $sparepart = $this->getData();
        return view('sparepart.index', compact('sparepart'));
    }

    public function create()
    {
        return view('sparepart.create');
    }

    public function store(Request $request)
    {
        $data = $this->getData();

        $data[] = [
            'id' => time(),
            'nama' => $request->nama,
            'merk' => $request->merk,
            'harga' => $request->harga,
            'stok' => $request->stok
        ];

        $this->saveData($data);
        return redirect()->route('sparepart.index');
    }

    public function edit($id)
    {
        $data = $this->getData();
        $item = collect($data)->firstWhere('id', (int)$id);

        if (!$item) {
            return redirect()->route('sparepart.index');
        }

        return view('sparepart.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->getData();

        foreach ($data as $i => $row) {
            if ($row['id'] == (int)$id) {
                $data[$i]['nama'] = $request->nama;
                $data[$i]['merk'] = $request->merk;
                $data[$i]['harga'] = $request->harga;
                $data[$i]['stok'] = $request->stok;
                break;
            }
        }

        $this->saveData($data);
        return redirect()->route('sparepart.index');
    }

    public function destroy($id)
    {
        $data = $this->getData();
        $data = array_filter($data, fn($s) => $s['id'] != (int)$id);

        $this->saveData(array_values($data));
        return redirect()->route('sparepart.index');
    }
}
