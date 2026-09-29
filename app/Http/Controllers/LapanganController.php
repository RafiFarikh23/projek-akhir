<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {
        $lapangan = Lapangan::all();

        return view('admin.lapangan.index', compact('lapangan'));
    }

    public function create()
    {
        return view('admin.lapangan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lapangan' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'fasilitas' => 'required',
            'status' => 'required'
        ]);

        Lapangan::create($request->all());

        return redirect()
            ->route('admin.lapangan.index')
            ->with('success', 'Data lapangan berhasil ditambahkan.');
    }

    public function edit($id_lapangan)
    {
        $lapangan = Lapangan::findOrFail($id_lapangan);

        return view('admin.lapangan.edit', compact('lapangan'));
    }

    public function update(Request $request, $id_lapangan)
    {
        $request->validate([
            'nama_lapangan' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'fasilitas' => 'required',
            'status' => 'required'
        ]);

        $lapangan = Lapangan::findOrFail($id_lapangan);

        $lapangan->update($request->all());

        return redirect()
            ->route('admin.lapangan.index')
            ->with('success', 'Data lapangan berhasil diperbarui.');
    }

    public function destroy($id_lapangan)
    {
        $lapangan = Lapangan::findOrFail($id_lapangan);

        $lapangan->delete();

        return redirect()
            ->route('admin.lapangan.index')
            ->with('success', 'Data lapangan berhasil dihapus.');
    }
}