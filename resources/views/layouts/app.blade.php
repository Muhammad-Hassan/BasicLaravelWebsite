<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')

<div class="container">
    @if(Request::is('/'))
    @include('inc.showcase')
    @endif
<div class="row">
    <div class="col-md-8 col-lg-8">
        @include('inc.errorsmessages')
        @yield('content')
    </div>

    <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
    </div>

</div>
</div>

<footer class="text-center" id="footer">
    <p>Copyright 2017 &copy; Basic Website By Syed Muhammad Hassan</p>
</footer>

</body>
</html>