<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 font-sans text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-white shadow-md py-4 px-6 mb-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-pink-600 text-xl font-bold">ToDoList</div>
            <ul class="flex space-x-6 text-sm font-medium">
                <li>
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-pink-600 {{ request()->is('home') ? 'border-b-2 border-pink-500' : '' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('calendar') }}" class="text-gray-700 hover:text-pink-600 {{ request()->is('tugas') ? 'border-b-2 border-pink-500' : '' }}">
                        Tugas
                    </a>
                </li>
                <li>
                    <a href="{{ route('akun') }}" class="text-gray-700 hover:text-pink-600 {{ request()->is('akun') ? 'border-b-2 border-pink-500' : '' }}">
                        Akun
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- Konten Halaman --}}
    <main>
        @yield('content')
    </main>

</body>
</html>
