<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body>
        <img class="logo"src="{{ asset('img/logo.png') }}" alt="">
        @include('partials.nav')

        @yield('content')
    </body>
</html>
