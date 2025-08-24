<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/html/demo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2025 16:12:44 GMT -->
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    @include('student/layouts/css')
    @stack('css')


	<!-- REVOLUTION SLIDER END -->
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        @include('student/layouts/header')
        @yield('content')

        @include('student/layouts/footer')
    </div>
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

    @include('student/layouts/js');
    @stack('js')
</body>
</html>
