<!DOCTYPE HTML>

<html>
<head>
    <title>@yield('page_title')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="/public/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/public/assets/css/main.css"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/public/assets/css/ie9.css"/><![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/public/assets/css/ie8.css"/><![endif]-->
</head>
<body class="@yield('single')">

<div id="wrapper">
    @include('components.Header')
    @include('components.Menu')

    @yield('content')
</div>


<!-- Scripts -->
<script src="/public/assets/js/jquery.min.js"></script>
<script src="/public/assets/js/skel.min.js"></script>
<script src="/public/assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="/public/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="/public/assets/js/main.js"></script>

</body>
</html>
