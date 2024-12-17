<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Method untuk menampilkan data pelanggan
    public function pelanggan()
    {
        // Mengambil semua data pelanggan
        $pelanggan = Pelanggan::all();
        
        // Mengembalikan view dengan data pelanggan
        return view('pelanggan', ['pelanggan' => $pelanggan]);
    }
    public function edit(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'pel_nama' => 'required|string|max:255',
                'pel_alamat' => 'required|string|max:255',
            ]);

            $pelanggan->update($request->all());

            return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diperbarui.');
        }

        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function hapus($id)
    {
        Pelanggan::destroy($id);

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus.');
    }
}
