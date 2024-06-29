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
        Ziggy.url = "{{ env('APP_URL') }}"
    </script>

</head>

<body>
    <p>{{env('APP_URL')}}</p>
    @inertia
</body>

</html>