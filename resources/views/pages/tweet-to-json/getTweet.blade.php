@extends('layout')

@section('content')
<div class="w-1/2 mx-auto">
    <table>
    @foreach(json_decode($tweet) as $key => $value)
        @if(is_string($value))
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $value }}</td>
        </tr>
        @else
        <tr>
            <td>{{ $key }}</td>
            <td>This bitch ain't a string</td>
        </tr>
        @endif
    @endforeach
    </table>
</div>
@endsection