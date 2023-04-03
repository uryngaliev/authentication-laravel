<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="py-8 text-lg bg-[#111827]">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between">
            <div>
                <a class="text-white text-xl" href="{{route('home')}}">Logo</a>
            </div>
            <div>
                <a class="bg-blue-700 text-white py-2 px-6 rounded-xl" href="{{route('register')}}">Sign in</a>
            </div>
        </nav>
    </div>
</header>
@yield('content')
</body>
</html>
