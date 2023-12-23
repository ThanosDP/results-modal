<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <title>@yield('title') | 365 Jobs</title>
    <link rel="stylesheet" href="{{ mix('/_name_/css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="_name_/images/">
</head>

<body>
    @include('_name_.layouts.header')

    @yield('content')

    @include('_name_.layouts.footer')

    <script src="{{ mix('_name_/js/app.js') }}"></script>

    @stack('scripts')
</body>

</html>
