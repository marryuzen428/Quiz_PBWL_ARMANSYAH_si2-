<x-layout>
    <x-slot:title>Pelanggan</x-slot:title>

    <div class="flex flex-col p-4">
        <h1 class="text-3xl font-bold mb-4">Tabel Pelanggan</h1>
        
        <!-- Tombol Aksi -->
        <div class="flex space-x-4 mb-4">
            <a href="/pelanggan/tambah" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Tambah Pelanggan</a>
        </div>

        <!-- Tabel Data Pelanggan -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Alamat</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Looping Data Pelanggan -->
                    @forelse ($pelanggan as $index => $item)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="border px-4 py-2">{{ $item->pel_nama }}</td>
                            <td class="border px-4 py-2">{{ $item->pel_alamat }}</td>
                            <td class="border px-4 py-2 text-center">
                                <a href="/pelanggan/edit/{{ $item->pel_id }}" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="/pelanggan/hapus/{{ $item->pel_id }}" class="text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center border px-4 py-2">Data pelanggan tidak tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
