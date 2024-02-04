<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/home') }}" class="">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center" id="app">
                <div class="col-12">
                    <loading-planning></loading-planning>
                </div>
                <div class="col-12">
                    <house-direction></house-direction>
                </div>
            </div>
        </div>
    </body>
</html>
