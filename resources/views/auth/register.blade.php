@extends('welcome')
@section('title', 'Регистрация')
@section('content')
    <div class="bg-w-full max-w-xs mx-auto mt-8">
        <form action="{{route('store')}}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
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
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
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
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
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
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
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
@endsection
