@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<section class="flex flex-col items-center justify-center text-center px-6 py-24">
    <h1 class="text-4xl font-bold mb-4 text-pink-500">To Do List Web App</h1>
    <p class="text-lg mb-6 max-w-xl">
        Organisasikan tugas harianmu, lihat kalender pekerjaan, dan kelola prioritasmu dengan mudah. Login atau daftar untuk memulai!
    </p>
    <div class="flex space-x-4">
        <a href="{{ route('login') }}" class="px-6 py-2 bg-pink-500 hover:bg-pink-600 text-white rounded-xl">Masuk</a>
        <a href="{{ route('register') }}" class="px-6 py-2 border border-pink-500 text-pink-500 hover:bg-pink-100 rounded-xl">Daftar</a>
    </div>
</section>
@endsection
