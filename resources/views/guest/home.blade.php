{{-- @extends('layouts.app') --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolpress.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            {{-- @if (Route::has('login')) --}}

                {{-- <div class="top-left links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div> --}}

                {{-- <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                {{-- Pagina in costruzione --}}
                <div id="root"></div>
            </div>
        </div>
        {{-- Richiamare Vue --}}
        <script src=" {{asset('js/front.js')}}"></script>
        {{-- Richiamare Vil js di Bootstrap --}}
        <script src=" {{asset('js/app.js')}}"></script>
    </body>
</html>
