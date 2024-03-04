<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('styles')
</head>

<body class="bg-slate-900 font-sans">
    @yield('contenido')
</body>

</html>