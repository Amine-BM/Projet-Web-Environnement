<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Mon application environnement</title>
</head>
<body>
<script src="{{asset('js/app.js')}}"></script>
    @include('partials.nav')
        @yield('content')
    </div>
</body>
</html>