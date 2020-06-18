@extends('layouts.app')

@section('content')
<file-upload form-action="{{ route('memes.upload') }}" init-uploads="{{ json_encode($uploads) }}">
    <template v-slot:token>
        @csrf
    </template>
</file-upload>
@endsection