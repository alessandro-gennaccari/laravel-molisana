<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;700&display=swap" rel="stylesheet"> 
    <title>@yield('title')</title>
</head>
<body>

    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>