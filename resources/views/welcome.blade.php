<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
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
</body>
</html>
