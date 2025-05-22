@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center dark:bg-gray-900 px-4">
    <div class="w-full max-w-md bg-gray-200 dark:bg-gray-800 border border-gray-700 p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-black dark:text-white mb-6 text-center">Tambah Siswa</h2>

        <form action="{{ route('siswa.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="nama" class="block text-sm font-medium text-black dark:text-gray-300 mb-1">Nama Siswa</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    required
                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 text-black dark:text-white rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded transition">
                    Simpan
                </button>
                <a href="{{ route('siswa.index') }}" class="text-sm text-black dark:text-gray-300  hover:text-white underline">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection