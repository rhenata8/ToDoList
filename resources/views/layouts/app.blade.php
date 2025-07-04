<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'To Do List')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen flex flex-col justify-between text-gray-800">

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="text-center text-sm py-4 text-gray-400">
        &copy; {{ date('Y') }} To Do List by Rhenata
    </footer>

</body>
</html>
