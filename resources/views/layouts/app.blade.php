<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        td,th{
            vertical-align: middle !important;
        }
        td:last-child {
            display: flex !important;
        }
        tbody tr:first-child td:last-child{
            border-top: 0 !important;
        }
        td a{
            margin-right: 10px;
        }
    </style>
</head>
<body>
        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
