<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>

    @session('key')
    <h1>{{ $value }}</h1>
    @endsession


    @if (@session('status'))
        {{ session ('status') }}
    @endif

    @yield('content')

    <section>
        @yield('morecontent')
    </section>
</body>
</html>











