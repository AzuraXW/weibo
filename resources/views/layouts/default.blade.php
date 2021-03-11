<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'Weibo App')</title>
</head>
<body>
    @include('layouts._header')

    <div class="container">
      @include('shared._messages')
      @yield('content')
    </div>
    @include('layouts._footer')
</body>
</html>