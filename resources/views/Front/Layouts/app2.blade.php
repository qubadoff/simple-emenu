<!doctype html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('/') }}/storage/{{ siteInfo()->logo }}" type="image/png">
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="{{ url('/') }}/assets/vender/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/assets/vender/icons/icofont.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/assets/vender/slick/slick/slick.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/vender/slick/slick/slick-theme.css">

    <link href="{{ url('/') }}/assets/vender/fontawesome/css/all.min.css" rel="stylesheet">

    <link href="{{ url('/') }}/assets/vender/sidebar/demo.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
</head>

<body>
@yield('content')
@include('Front.Layouts.inc.dock')
@include('Front.Layouts.inc.nav')

<script src="{{ url('/') }}/assets/vender/jquery/jquery.min.js" type="18a2d3dfb535db9b4de43d13-text/javascript"></script>
<script src="{{ url('/') }}/assets/vender/bootstrap/js/bootstrap.bundle.min.js" type="18a2d3dfb535db9b4de43d13-text/javascript"></script>

<script src="{{ url('/') }}/assets/vender/slick/slick/slick.min.js" type="18a2d3dfb535db9b4de43d13-text/javascript"></script>

<script src="{{ url('/') }}/assets/vender/sidebar/hc-offcanvas-nav.js" type="18a2d3dfb535db9b4de43d13-text/javascript"></script>

<script src="{{ url('/') }}/assets/js/custom.js" type="18a2d3dfb535db9b4de43d13-text/javascript"></script>
<script src="https://askbootstrap.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="18a2d3dfb535db9b4de43d13-|49" defer></script>
</body>

</html>
