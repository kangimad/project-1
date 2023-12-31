<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <header>
        @include('partials.navbar')
    </header>

    <section>
        @yield('content')
    </section>

    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
