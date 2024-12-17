<x-layout>
    <x-slot:title>Golongan</x-slot:title>

    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Golongan</h1>
        <a href="{{ route('golongan.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Tambah Golongan</a>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mt-4">{{ session('success') }}</div>
        @endif

        <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama Golongan</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($golongan as $index => $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $item->gol_nama }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{ route('golongan.edit', $item->gol_id) }}" class="text-blue-500 hover:underline">Edit</a> |
                            <form action="{{ route('golongan.destroy', $item->gol_id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
