<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>
<!-- Abfrage ob der Nutzer angemeldet ist oder ob nicht
<h1 class="text-3xl font-bold">
    @if (Route::has('login'))
        @auth
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        @else
            <div class="text-sm font-normal">
                <h1>
                    Du bist nicht angemeldet klicke unten um dich anzumelden.
                </h1>
                <li class="font-bold underline"><a href="{{ url('/login') }}">Anmeldung</a></li>
            </div>
        @endauth
    @endif
</h1>
Ende Abfrage -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>


</body>
</html>
