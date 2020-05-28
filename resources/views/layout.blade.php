<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jake Suellentrop</title>

        {{-- Styles --}}
        <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-white font-thin h-screen m-0 font-body">
        <div id="app">
            <div class="flex h-screen items-center justify-center relative">

                <div class="content text-center w-screen">
                    @yield('content')
                </div>

                <div class="bottom-0 fixed h-12">
                    <navigation
                        current-route="{{ Request::url() }}"
                        :routes="{{ json_encode([
                            ['link' => route('welcome'), 'text' => 'Home'],
                            ['link' => route('chat'), 'text' => 'Chat App'],
                            ['link' => 'https://github.com/jakesuellentrop/jakesuellentrop', 'text' => 'Github', 'external' => true]
                        ]) }}"/>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
