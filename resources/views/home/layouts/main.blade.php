<!DOCTYPE html>
<html lang="en">
<head>
    <title>PPOINT</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('images/home/fav.ico') }}" type="image/x-icon">

    @include('home/layouts/css')
    @stack('css')
</head>
<body>
    @include('home/layouts/header')

    <div class="content">
        @yield('content')
    </div>


    @include('home/layouts/footer')
@include('home/layouts/js');
@stack('js')
