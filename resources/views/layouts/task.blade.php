<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OneTask</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

    <header>
        @include('shared.header')
    </header>

    <div>
        @yield('content')
    </div>

    <footer>
        @include('shared.footer')
    </footer>   
</body>
</html>