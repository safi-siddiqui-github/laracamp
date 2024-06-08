<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
    <title>Larabank Panel</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <div class="px-20">

        @yield('content')

    </div>

</body>

</html>