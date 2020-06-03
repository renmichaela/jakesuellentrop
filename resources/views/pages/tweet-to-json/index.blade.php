@extends('layout')

@section('content')
<div id="tweet-to-json">
    <form action="{{ route('tweet-to-json.get') }}" method="get" class="flex flex-col mx-auto w-1/4 p-4">
        <input
            type="text"
            name="tweetId"
            id="tweet-id"
            class="text-black p-2 mb-4"
            placeholder="Tweet ID"
        />
        <button
            class="border border-solid border-white p-2"
            type="submit"
        >
            Get Tweet
        </button>
    </form>
</div>
@endsection