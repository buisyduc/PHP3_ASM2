<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @include('user.layout.header')

    <div class="content">
        @yield('content')
    </div>

    @include('user.layout.footer')
</body>
</html>
