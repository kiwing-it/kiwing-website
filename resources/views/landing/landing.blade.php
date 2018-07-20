<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Kiwing IT Labs" />
    <meta name="description" content="Kiwing IT Labs Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kiwing IT Labs</title>

    <!-- Royal Preloader CSS -->
    <link href="css/royal_preloader.css" rel="stylesheet">

    <!-- jQuery Files -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Parallax File -->
    <script type="text/javascript" src="js/parallax.min.js"></script>

    <!-- Royal Preloader -->
    <script type="text/javascript" src="js/royal_preloader.min.js"></script>
    <script type="text/javascript">
        Royal_Preloader.config({
            mode: 'logo',
            logo: 'images/kiwing-bird.png',
            text_colour: '#205E89',
            showProgress: false,
            background: "#FFFFFF"
        });
    </script>

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ionicons.min.css" rel="stylesheet">
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/logoiconfont.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" title="main-css">
    <link href="css/colors/blue.css" rel="stylesheet">
    <link href="css/base-light.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="css/kiwing.css" rel="stylesheet">
</head>
<body class="royal_preloader" data-spy="scroll" data-target=".navbar" data-offset="70">
    <div id="royal_preloader"></div>

    @include('landing.common.header')
    
    @include('landing.section.home')
    
    @include('landing.section.ideology')
    
    @include('landing.section.services')
    
    @include('landing.section.about')

    @include('landing.section.ourcount')

    @include('landing.section.work')
    
    @include('landing.section.contact')
    
    <!-- Begin Map -->
    <div id="map"></div>
    <!-- End Map -->
    
    @include('landing.common.footer')
    
    <!-- Javascript Files -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArLNT3t4qsJEBmR0R9P_6ueLIQz0Jvt1M&callback=initMap" async defer></script>
    <script type="text/javascript">
        /* ---- Google Maps ---- */
        function initMap() {
            var mapOptions = {
                zoom: 4,
                zoomControl: false,
                scaleControl: false,
                scrollwheel: false,
                disableDoubleClickZoom: true,
                center: new google.maps.LatLng(-31.4200, -64.1880), // Cordoba
                styles: [{
                    "featureType": "landscape",
                    "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]
                }, {
                    "featureType": "poi",
                    "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]
                }, {
                    "featureType": "road.highway",
                    "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
                }, {
                    "featureType": "road.arterial",
                    "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]
                }, {
                    "featureType": "road.local",
                    "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
                }, {
                    "featureType": "transit",
                    "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
                }, {
                    "featureType": "administrative.province",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]
                }]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-31.4200, -64.1880),
                map: map,
                title: 'Our Office!'
            });
        }
    </script>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/particlesRun.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.js"></script>
    <script type="text/javascript" src="js/form-validator.min.js"></script>
    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript">
        /* ---- Counter (our count) ---- */
        $('#ourcount').one('inview', function(event, isInView) {
            if (isInView) {
                $('.timer').countTo({speed: 3000});
            }
        });
    </script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/scrollreveal.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
