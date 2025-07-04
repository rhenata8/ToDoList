@extends('layouts.app')

@section('title', 'Kalender Tugas')

@section('content')
<div class="px-6 py-10 max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold text-pink-500 mb-4">Tambah Tugas</h1>

    @if(session('success'))
        <div class="text-green-600 mb-3">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('tugas.store') }}" class="bg-white p-4 rounded-lg shadow-md mb-8">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block mb-1">Nama Tugas</label>
                <input type="text" name="title" class="w-full border px-3 py-2 rounded-lg" required>
            </div>
            <div>
                <label class="block mb-1">Prioritas</label>
                <select name="priority" class="w-full border px-3 py-2 rounded-lg" required>
                    <option value="Tinggi">Tinggi</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Rendah">Rendah</option>
                </select>
            </div>
            <div>
                <label class="block mb-1">Deadline</label>
                <input type="date" name="deadline" class="w-full border px-3 py-2 rounded-lg" required>
            </div>
        </div>
        <button type="submit" class="mt-4 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg">
            Tambah
        </button>
    </form>

    <h2 class="text-xl font-semibold mb-3">Daftar Tugas</h2>

    @if($tasks->isEmpty())
        <p class="text-gray-500">Belum ada tugas.</p>
    @else
        <ul class="space-y-3">
            @foreach($tasks as $task)
                <li class="bg-gray-50 p-4 rounded-lg shadow flex justify-between items-center">
                    <div>
                        <h3 class="font-medium text-lg">{{ $task->title }}</h3>
                        <p class="text-sm text-gray-600">📅 {{ $task->deadline }} | 🔥 Prioritas: {{ $task->priority }}</p>
                    </div>
                    @if($task->is_done)
                        <span class="text-green-600 font-semibold">✔ Selesai</span>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
