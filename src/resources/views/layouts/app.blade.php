<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigry</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common1.css')}}">
    @yield('css')
</head>
<body>
    <div class="app">
        <div class="frame">
            <h1 class="name">PiGLy</h1>
            @yield('content')
        </div>
    </div>
</body>
</html>