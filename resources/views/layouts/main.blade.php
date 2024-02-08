<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Miftakhul Anam</title>
</head>

<body>

    @include('partials.navbar')

    @yield('container')

</body>

</html>
