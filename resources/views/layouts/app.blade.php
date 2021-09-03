<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home 5 - MiniBlog</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/favicon.ico" />

    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed"
        href="{{asset('frontend')}}/assets/images/apple-touch-icon-114x114-precomposed.png">

    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed"
        href="{{asset('frontend')}}/assets/images/apple-touch-icon-72x72-precomposed.html">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed"
        href="{{asset('frontend')}}/assets/images/apple-touch-icon-57x57-precomposed.png">

    <!-- Library -->
    <link href="{{asset('frontend')}}/assets/css/lib.css" rel="stylesheet">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/rtl.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/style.css">

    <!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body data-offset="200" data-spy="scroll" data-target=".ownavigation">
    <!-- Loader -->
    @include('frontend.partials.header')

    <div class="main-container">

        @yield('frontend-maincontent')

    </div>

    @include('frontend.partials.footer')

    <!-- JQuery v1.12.4 -->
    <script src="{{asset('frontend')}}/assets/js/jquery-1.12.4.min.js"></script>

    <!-- Library - Js -->
    <script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/lib.js"></script>

    <!-- Library - Theme JS -->
    <script src="{{asset('frontend')}}/assets/js/functions.js"></script>

</body>

</html>
