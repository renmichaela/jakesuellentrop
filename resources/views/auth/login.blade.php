@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="flex flex-col items-center mx-auto w-1/3">
            <div class="w-2/3">
                <label for="email" class="block mb-1 text-left text-xl">Email</label>
                <input type="email" name="email" id="email" class="mb-4 p-2 text-black w-full">
            </div>
            <div class="w-2/3">
                <label for="password" class="block mb-1 text-left text-xl">Password</label>
                <input type="password" name="password" id="password" class="mb-4 p-2 text-black w-full">
            </div>
            <div class="flex justify-between w-2/3">
                <button type="submit" class="bg-black p-4 rounded-md">Login</button>
                <button type="button" class="p-4 text-right w-full"><a href="{{ route('register') }}">Register</a></button>
            </div>
            <div class="w-2/3">
            </div>
        </div>
    </form>
@endsection