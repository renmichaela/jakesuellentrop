@extends('layout')

@section('content')
<div x-data="{ open: false }">
    <button class="border border-solid px-8 py-4" @click="open = true">Open Dropdown</button>

    <ul
        class="bg-white px-8 py-4 text-black"
        x-show="open"
        @click.away="open = false"
    >
        Dropdown Body
    </ul>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection