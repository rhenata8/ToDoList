@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="flex items-center justify-center px-6 py-20">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-bold text-pink-500 mb-6 text-center">Masuk ke Akunmu</h2>
        @if (session('error'))
            <p class="text-red-500 mb-4 text-sm">{{ session('error') }}</p>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400" required>
            </div>
            <div class="mb-6">
                <label class="block mb-1">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400" required>
            </div>
            <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white py-2 rounded-lg font-semibold">Masuk</button>
        </form>
    </div>
</section>
@endsection
