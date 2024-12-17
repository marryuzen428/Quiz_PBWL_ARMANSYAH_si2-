<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $golongan = Golongan::all();
        return view('golongan.index', compact('golongan'));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gol_nama' => 'required|unique:tb_golongan,gol_nama|max:100',
        ]);

        Golongan::create($request->all());
        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil ditambahkan.');
    }

    public function edit(Golongan $golongan)
    {
        return view('golongan.edit', compact('golongan'));
    }

    public function update(Request $request, Golongan $golongan)
    {
        $request->validate([
            'gol_nama' => 'required|unique:tb_golongan,gol_nama,' . $golongan->gol_id . '|max:100',
        ]);

        $golongan->update($request->all());
        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil diperbarui.');
    }

    public function destroy(Golongan $golongan)
    {
        $golongan->delete();
        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil dihapus.');
    }
}

