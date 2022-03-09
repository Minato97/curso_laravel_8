<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- favicom-->
    <!--estilos -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<!--header-->
<!--nav-->
    @include('layouts.partials.header')
    @include('layouts.partials.footer')
@yield('content')

<!--footer-->
<!--script-->
</body>
</html>
