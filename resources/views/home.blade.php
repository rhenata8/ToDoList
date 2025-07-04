@extends('layouts.app')

@section('title', 'Tugas Terdekat')

@section('content')
<div class="px-6 py-10 max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold text-pink-500 mb-4">Tugas Terdekat</h1>

    @if ($tasks->isEmpty())
        <p class="text-gray-500">Belum ada tugas terdekat.</p>
    @else
        <ul class="space-y-4">
            @foreach ($tasks as $task)
                <li class="bg-white p-4 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $task->title }}</h2>
                        <p class="text-sm text-gray-500">Prioritas: <span class="font-medium">{{ $task->priority }}</span> | Deadline: {{ $task->deadline }}</p>
                    </div>
                    <form method="POST" action="{{ route('task.status', $task->id) }}">
                        @csrf
                        <input type="checkbox" name="is_done" onChange="this.form.submit()" {{ $task->is_done ? 'checked' : '' }}>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
