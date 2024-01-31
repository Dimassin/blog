<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="container bg-dark text-white">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('post.index') }}">posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('post.create') }}">create</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>
