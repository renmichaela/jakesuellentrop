<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jake Suellentrop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="flex h-screen items-center justify-center relative">

                <div class="content w-screen">
                    @yield('content')
                </div>

                <div class="bottom-0 fixed links h-12">
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
