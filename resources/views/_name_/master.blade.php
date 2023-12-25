<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ mix('/_name_/css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="_name_/images/">

    {{-- * Google Fonts * --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('_name_.layouts.header')

    @yield('content')

    @include('_name_.layouts.footer')

    <script src="{{ mix('_name_/js/app.js') }}"></script>

    @stack('scripts')
</body>

</html>