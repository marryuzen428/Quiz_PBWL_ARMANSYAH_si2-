<x-layout>
    <x-slot:title>Tambah Golongan</x-slot:title>

    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Tambah Golongan</h1>

        <form action="{{ route('golongan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="gol_nama" class="block font-bold mb-2">Nama Golongan</label>
                <input type="text" id="gol_nama" name="gol_nama" class="border rounded w-full p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
            <a href="{{ route('golongan.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
        </form>
    </div>
</x-layout>
