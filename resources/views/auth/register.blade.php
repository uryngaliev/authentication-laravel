<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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
<div class="bg-w-full max-w-xs mx-auto mt-8">
    <form action="{{route('store')}}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="{{$errors->has('name') ? 'placeholder-red-400 border-red-400' : ''}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="name" id="name" type="text" placeholder="Name">
            @error('name')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input
                class="{{$errors->has('email') ? 'placeholder-red-400 border-red-400' : ''}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="email" id="email" type="email" placeholder="Email">
            @error('email')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="{{$errors->has('password' ? 'placeholder-red-400' : '')}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="password" id="password" type="password" placeholder="Password">
            @error('password')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                Password Confirm
            </label>
            <input
                class="{{$errors->has('password_confirmation' ? 'placeholder-red-400 border-red-400' : '')}} shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="password_confirmation" id="password_confirmation" type="password"
                placeholder="Password Confirm">
            @error('password_confirmation')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button
                class="w-full bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Sign In
            </button>
        </div>
    </form>
</div>
</body>
</html>
