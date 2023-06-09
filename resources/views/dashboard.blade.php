<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <a class="bg-blue-700 text-white py-2 px-6 rounded-xl" href="{{route('logout')}}">Log out</a>
            </div>
        </nav>
    </div>
</header>
<h1 class="text-2xl font-bold"></h1>
</body>
</html>




