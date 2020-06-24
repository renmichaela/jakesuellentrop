@extends('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="flex flex-col items-center mx-auto w-1/3">
            <div class="w-2/3">
                <label for="name" class="block mb-1 text-left text-xl">Name</label>
                <input type="name" name="name" id="name" class="mb-4 p-2 text-black w-full">
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-2/3">
                <label for="email" class="block mb-1 text-left text-xl">Email</label>
                <input type="email" name="email" id="email" class="mb-4 p-2 text-black w-full">
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-2/3">
                <label for="password" class="block mb-1 text-left text-xl">Password</label>
                <input type="password" name="password" id="password" class="mb-4 p-2 text-black w-full">
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-2/3">
                <label for="password-confirmation" class="block mb-1 text-left text-xl">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password-confirmation" class="mb-4 p-2 text-black w-full">
                @error('password_confirmation')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-between w-2/3">
                <button type="submit" class="bg-black p-4 rounded-md">Register</button>
                <button type="button" class="p-4 text-right w-full"><a href="{{ route('login') }}">Login</a></button>
            </div>
        </div>
    </form>
@endsection