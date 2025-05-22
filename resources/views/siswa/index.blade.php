@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 px-4">

    <h1 class="text-3xl text-gray-900 dark:text-gray-100 text-center font-semibold mb-6">DATA SISWA</h1>

    <!-- Tombol Tambah -->
    <div class="flex justify-center mb-6">
        <a href="{{ route('siswa.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded shadow transition">
            + Tambah Siswa
        </a>
    </div>

    <!-- Tabel -->
    <div class="max-w-3xl mx-auto dark:bg-gray-900 border border-gray-700 text-black dark:text-white shadow-xl rounded overflow-hidden">
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-300 dark:bg-gray-800 text-black dark:text-gray-300">
                <tr>
                    <th class="px-6 py-3 border-b border-gray-700 text-center">Nama</th>
                    <th class="px-6 py-3 border-b border-gray-700 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $siswa)
                <tr class="dark:hover:bg-gray-800 transition">
                    <td class="px-6 py-3 border-b border-gray-700 text-center">{{ $siswa->nama }}</td>
                    <td class="px-6 py-3 border-b border-gray-700 text-center space-x-2">
                        <!-- Tombol Lihat -->
                        <button onclick="openModal('{{ $siswa->id }}', '{{ $siswa->nama }}')" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded shadow">
                            Lihat
                        </button>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="text-center px-6 py-4 text-gray-400">Belum ada data siswa.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div id="siswaModal" class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm flex items-center justify-center hidden z-50">
    <div class="bg-gray-300 dark:bg-gray-900 border border-gray-700 text-white p-6 rounded shadow-lg max-w-sm w-full">
        <h2 class="text-xl font-bold mb-4 text-black dark:text-white">Detail Siswa</h2>
        <p id="modalNama" class="text-black dark:text-white mb-4"></p>
        <div class="text-right">
            <button onclick="closeModal()" class="bg-gray-200 hover:bg-gray-100 dark:bg-gray-600 dark:hover:bg-gray-700 text-black dark:text-white px-4 py-2 rounded transition">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- Script Modal -->
<script>
    function openModal(id, nama) {
        document.getElementById('modalNama').innerText = "Nama: " + nama;
        document.getElementById('siswaModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('siswaModal').classList.add('hidden');
    }
</script>
@endsection