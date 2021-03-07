<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app" class="container mx-auto">
        <div class="overflow-x-auto">
            <div class="min-w-screen min-h-screen bg-gray-100 flex flex-col items-center justify-center bg-gray-100 font-sans overflow-hidden">
            @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
