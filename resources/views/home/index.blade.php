<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <!-- Page Title -->
    <title>Gaby & Gus - 16 de diciembre de 2023</title>

    <meta name="keywords" content="">
    <meta name="description"
        content="Familia y amigos, nos encantaría compartir con ustedes este día tan especial
    para nosotros, y que nos sigan acompañando en esta increíble historia, los
    esperemos con mucho amor y alegría a nuestra celebración.">
    <meta name="author" content="Gaby & Gus">

    <!-- Mobile Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fav and touch icons -->
    <link rel="icon" href="images/fav_touch_icons/favicon.ico" sizes="any">
    <link rel="icon" href="images/fav_touch_icons/favicon.svg" type="image/svg+xml">
    <link rel="manifest" href="images/fav_touch_icons/manifest.json">

    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- FontAwesome CSS -->
    {{-- <link href="css/fontawesome-all.min.css" rel="stylesheet" /> --}}
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" />

    <!-- Neela Icon Set CSS -->
    <link href="css/neela-icon-set.css" rel="stylesheet" />

    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.min.css" rel="stylesheet" />

    <!-- Template CSS -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" />
    <link href="css/custom2.css" rel="stylesheet" />

    <!-- Modernizr JS -->
    <script src="js/modernizr-3.6.0.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>

    @include('home.partials.preloader')


    <!-- BEGIN WRAPPER -->
    <div id="wrapper">

        @include('home.partials.header')
        @include('home.partials.hero')

        <section id="about-us">
            <div class="container">
                <div class="row about-elems-wrapper">
                    <div class="divider-about-us visible" data-animation-direction="fade" data-animation-delay="500">
                        <i class="icon-two-hearts"></i>
                    </div>
                </div>

                <div class="row">
                    <div class="about-us-desc col-lg-8 offset-lg-2 visible" data-animation-direction="from-bottom"
                        data-animation-delay="300">
                        <h3>¡Juntos para siempre!</h3>
                        <p>
                            Familia y amigos, nos encantaría compartir con ustedes este día tan especial
                            para nosotros y que nos sigan acompañando en esta increíble historia.
                            Aquí encontrarán toda la información necesaria de nuestra boda,
                            desde las fechas, lugares, hoteles y todos los detalles para que se
                            preparen a celebrar con nosotros.
                        </p>
                        <!-- <img src="images/signature-2.png" alt="Andrew and Isabella"> -->
                    </div>
                </div>
            </div>
        </section>

        {{-- @include('home.partials.agenda') --}}
        @include('home.partials.invite')
        {{-- @include('home.partials.location') --}}
        {{-- @include('home.partials.dress-code') --}}
        @include('home.partials.transportation')
        @include('home.partials.lodging')
        @include('home.partials.blog')
        @include('home.partials.weeding-gifts')
        @include('home.partials.contact')
        @include('home.partials.footer')

    </div>
    <!-- END WRAPPER -->


    <!-- Google Maps API and Map Richmarker Library -->
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('MAPS_API_KEY') }}"></script>
    <script src="js/richmarker.js"></script>

    <!-- Libs -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery-migrate-3.3.2.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/ismobile.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints-sticky.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/lightbox.min.js"></script>

    <!-- Nicescroll script to handle gallery section touch swipe -->
    <script src="js/jquery.nicescroll.js"></script>

    <!-- Hero Background Slideshow Script -->
    <script src="js/jquery.zoomslider.js"></script>

    <!-- Template Scripts -->
    <script src="js/variables.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/contact.js"></script>

</body>

</html>
