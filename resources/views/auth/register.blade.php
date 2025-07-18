@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
<section class="flex items-center justify-center px-6 py-20">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-bold text-pink-500 mb-6 text-center">Buat Akun Baru</h2>
        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Nama</label>
            <input type="text" name="name" class="w-full border rounded-lg px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Email</label>
            <input type="email" name="email" class="w-full border rounded-lg px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Password</label>
            <input type="password" name="password" class="w-full border rounded-lg px-4 py-2" required>
        </div>
        <div class="mb-6">
            <label class="block mb-1">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full border rounded-lg px-4 py-2" required>
        </div>
        <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white py-2 rounded-lg font-semibold">Daftar</button>
    </form>

    </div>
</section>
@endsection
