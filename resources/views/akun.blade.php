@extends('layouts.app')

@section('title', 'Profil Akun')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold text-pink-500 mb-6">Profil Akun</h1>

    <div class="bg-white p-6 rounded-lg shadow">
        <p><strong>Nama:</strong> {{ session('user_name') }}</p>
        <p><strong>Email:</strong> {{ session('user_email') }}</p>
    </div>
</div>
@endsection
