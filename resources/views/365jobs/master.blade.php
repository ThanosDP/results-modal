<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | 365 Jobs</title>
    <link rel="stylesheet" href="{{ mix('/365jobs/css/app.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body style="background-image: url('365jobs/images/background.svg')">
    @include('365jobs.layouts.header')

    @yield('content')

    @include('365jobs.layouts.footer')

    <script src="{{ mix('365jobs/js/app.js') }}" defer></script>

    @stack('scripts')
</body>

</html>
