<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @inertiaHead
    @routes
    <script>
        Ziggy.url = "https://laracamp.fly.dev"
        console.log(Ziggy);
    </script>

</head>

<body>
    @inertia
</body>

</html>