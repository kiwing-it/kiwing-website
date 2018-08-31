<!DOCTYPE html>
<html lang="en" xmlns:og="https://ogp.me/ns#">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Kiwing" />
    <meta name="description" content="{{ trans('landing.seo.description') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keywords" content="{{ trans('landing.seo.keywords') }}" />
    <meta property="og:title" content="{{ trans('landing.seo.title') }}" />
    <meta property="og:site_name" content="Kiwing" />
    <meta property="og:description" content="{{ trans('landing.seo.description') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.kiwing.it/" />
    <meta property="og:image" content="https://www.kiwing.it/images/og_image-eee2f59114a216953a4fd66e330733dd.jpg" />
    <meta property="og:image:width" content="1868" />
    <meta property="og:image:height" content="1728" />

    @if($alternativeLocale === 'en')
        <meta property="og:locale" content="es_AR" />
        <meta property="og:locale:alternate" content="en_US" />
    @else
        <meta property="og:locale" content="en_US" />
        <meta property="og:locale:alternate" content="es_AR" />
    @endif

    <title>{{ trans('landing.seo.title') }}</title>

    <!-- Royal Preloader CSS -->
    <link href="/css/royal_preloader.css" rel="stylesheet">

    <!-- jQuery Files -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Royal Preloader -->
    <script type="text/javascript" src="/js/royal_preloader.min.js"></script>
    <script type="text/javascript">
        Royal_Preloader.config({
            mode: 'logo',
            logo: '/images/kiwing-bird.png',
            text_colour: '#205E89',
            showProgress: false,
            background: "#FFFFFF"
        });
    </script>

    <!-- Stylesheets -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/ionicons.min.css" rel="stylesheet">
    <link href="/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="/css/logoiconfont.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet" title="main-css">
    <link href="/css/colors/blue.css" rel="stylesheet">
    <link href="/css/base-light.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="/css/kiwing.css" rel="stylesheet">
</head>
<body class="royal_preloader" data-spy="scroll" data-target=".navbar" data-offset="70">
<div id="royal_preloader"></div>

@include('skills.common.header')

@yield('content')

@include('skills.common.footer')

<!-- Javascript Files -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.mixitup.js"></script>
<script type="text/javascript" src="/js/form-validator.min.js"></script>
<script type="text/javascript" src="/js/jquery.countTo.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/js/scrollreveal.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

</body>
</html>
