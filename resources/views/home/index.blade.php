<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Page Title -->
	<title>Jaesy & Jorge - 19 de noviembre de 2022</title>

	<meta name="keywords" content="one-page, single page, multi-page, wedding template, retina ready, responsive, modern html5 template, bootstrap, css3, wedding, venue">
	<meta name="description" content="Neela - Responsive One/Multi-Page Wedding HTML5 Template">
	<meta name="author" content="Wisely Themes">

	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Fav and touch icons -->
	<link rel="icon" href="images/fav_touch_icons/favicon.ico" sizes="any">
	<link rel="icon" href="images/fav_touch_icons/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="images/fav_touch_icons/apple-touch-icon-180x180.png">
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
	<link href="css/fontawesome-all.min.css" rel="stylesheet" />

	<!-- Neela Icon Set CSS -->
	<link href="css/neela-icon-set.css" rel="stylesheet" />

	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.min.css" rel="stylesheet" />

	<!-- Template CSS -->
	<link href="css/style.css" rel="stylesheet" />

	<!-- Custom CSS -->
	<link href="css/custom.css" rel="stylesheet" />

	<!-- Modernizr JS -->
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
					<div class="about-us-desc col-lg-8 offset-lg-2 visible" data-animation-direction="from-bottom" data-animation-delay="300">
						<h3>¡Nos casamos!</h3>
						<p>
							Familia y amigos, nos encantaría compartir con ustedes este día tan especial
							para nosotros, y que nos sigan acompañando en esta increíble historia, los
							esperemos con mucho amor y alegría a nuestra celebración.
						</p>
						<!-- <img src="images/signature-2.png" alt="Andrew and Isabella"> -->
					</div>
				</div>
			</div>
		</section>

		<!-- BEGIN THE WEDDING SECTION -->
		<section id="the-wedding" class="parallax-background bg-color-overlay padding-divider-top section-divider-bottom-1">
			<div class="section-divider-top-1 off-section"></div><!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title light">Invitación</h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 center">
						<div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">
							<div class="invite_title">
								<div class="text">
									Jaesy<small>&</small>Jorge
								</div>
							</div>

							<div class="invite_info">
								{{-- <h2>Jaesy <small>&</small> Jorge</h2> --}}

								<div class="uppercase">Los esperamos en la ceremonia religiosa que tendrá lugar el</div>
								<div class="date">19 de noviembre de 2022<small>05:00 pm</small></div>
								<div class="uppercase">Iglesia de San Román<br>San Francisco de Campeche</div>

								<!-- <h5>Después nos vamos a mamar</h5> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END THE WEDDING SECTION -->


		<!-- BEGIN WEDDING LOCATION SECTION -->
		<section id="location">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="section-title">
							Ceremonia y Recepción
						</h2>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-xl-10 offset-xl-1">

						<div class="map-info-container">
							<div class="info-wrapper" data-animation-direction="from-bottom" data-animation-delay="100">
								<div class="location-info">
									<div class="neela-style">
										<h4 class="has-icon"><i class="icon-big-church"></i>Ceremonia<small>05:00pm</small></h4>
										<h5>Iglesia de San Román</h5>
										<p>
											Calle 10 S/N, Barrio de San Román<br/>
											San Francisco de Campeche, Campeche. CP 24040.
										</p>

										<div class="info-map-divider"></div>

										<h4 class="has-icon"><i class="icon-champagne-glasses"></i>Recepción<small>07:00pm</small></h4>
										<h5>Ex Hacienda Xtelchel</h5>
										<p>
											Carretera Campeche - Mérida km. 12<br/>
											San Francisco de Campeche, Campeche. CP 24087.
										</p>
									</div>
								</div>
							</div>

							<div class="map-wrapper" data-animation-direction="fade" data-animation-delay="100">
								<div id="map_canvas" class="gmap"></div>

								<div class="map_pins">
									<ul class="pins">
										<li>                         </li>
										<li>                         </li>
										<li><i class="fas fa-bell"></i>Ceremonia</li>
										<li><i class="fas fa-glass-cheers"></i>Recepción</li>
										<li>                         </li>
										<li>                         </li>
									</ul>
								</div>
							</div>
						</div>

						<div class="center">
							<a href="#rsvp" class="btn btn-primary scrollto">RSVP</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END WEDDING LOCATION SECTION -->




		<!-- BEGIN OUR STORY TITLE SECTION -->
		<section id="our-story-title" class="parallax-background bg-color-overlay section-divider-bottom-2 padding-divider-top">
			<div class="section-divider-top-1 off-section"></div><!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title light">Transporte y hospedaje</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- END OUR STORY TITLE SECTION -->

		<!-- BEGIN TRANSPORTATION SECTION -->
		<section>
			<div class="container">
				<ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
								data-bs-target="#pills-home" type="button" role="tab"
								aria-controls="pills-home" aria-selected="true">
							<i class="fa fa-plane"></i>
							CDMX - Campeche
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
								data-bs-target="#pills-profile" type="button" role="tab"
								aria-controls="pills-profile" aria-selected="false">
							<i class="fa fa-plane"></i>
							<i class="fa fa-bus"></i>
							CDMX - Mérida
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
								data-bs-target="#pills-contact" type="button" role="tab"
								aria-controls="pills-contact" aria-selected="false">
							<i class="fa fa-car"></i>
							Carretera
						</button>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
							aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-5 d-flex flex-column">
								<h4 class="text-center">
									IDA
								</h3>
								<div class="flex-grow-1 mt-1 mb-3">
									Los vuelos directos a Campeche sólo manejan un horario.
								</div>
								<div>
									<div class="card flight-card p-2">
										<h5 class="text-center">
											Aeroméxico único vuelo
										</h5>
										<div class="mt-2 px-2 d-flex justify-content-between align-items-center">
											<div class="location-info">
												<div class="time">6:42 am</div>
												<div class="city">CDMX T1</div>
											</div>
											<div class="flex-grow-1 d-flex justify-content-between align-items-center px-3">
												<div class="arrow-line"></div>
												<i class="fas fa-caret-right"></i>
											</div>
											<div class="location-info">
												<div class="time">7:30 am</div>
												<div class="city">Campeche</div>
											</div>
										</div>
									</div>

									<div class="mt-3 card flight-card p-2">
										<h5 class="text-center">
											Volaris único vuelo
										</h5>
										<div class="mt-2 px-2 d-flex justify-content-between align-items-center">
											<div class="location-info">
												<div class="time">1:37 pm</div>
												<div class="city">CDMX T1</div>
											</div>
											<div class="flex-grow-1 d-flex justify-content-between align-items-center px-3">
												<div class="arrow-line"></div>
												<i class="fas fa-caret-right"></i>
											</div>
											<div class="location-info">
												<div class="time">3:15 pm</div>
												<div class="city">Campeche</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="vr-dashed"></div>
							</div>
							<div class="col-5 d-flex flex-column">
								<h4 class="text-center">
									VUELTA
								</h3>
								<div class="flex-1 mt-1 mb-3">
									El aeropuerto está a 15 min de cualquier punto de la ciudad de Campeche te recomendamos
									salir a las 7am de hotel o casa
								</div>
								<div>
									<div class="card flight-card p-2">
										<h5 class="text-center">
											Aeroméxico único vuelo
										</h5>
										<div class="mt-2 px-2 d-flex justify-content-between align-items-center">
											<div class="location-info">
												<div class="time">8:30 am</div>
												<div class="city">Campeche</div>
											</div>
											<div class="flex-grow-1 d-flex justify-content-between align-items-center px-3">
												<div class="arrow-line"></div>
												<i class="fas fa-caret-right"></i>
											</div>
											<div class="location-info">
												<div class="time">10:30 am</div>
												<div class="city">CDMX</div>
											</div>
										</div>
									</div>

									<div class="mt-3 card flight-card p-2">
										<h5 class="text-center">
											Volaris único vuelo
										</h5>
										<div class="mt-2 px-2 d-flex justify-content-between align-items-center">
											<div class="location-info">
												<div class="time">3:50 pm</div>
												<div class="city">Campeche</div>
											</div>
											<div class="flex-grow-1 d-flex justify-content-between align-items-center px-3">
												<div class="arrow-line"></div>
												<i class="fas fa-caret-right"></i>
											</div>
											<div class="location-info">
												<div class="time">5:39 pm</div>
												<div class="city">CDMX T1</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="row mt-4">
							<div class="col-6">
								<h4 class="text-center">
									<i class="fa fa-plane"></i>
								</h4>
								<div class="mt-2">
									Otra opción para llegar a la ciudad de Campeche, es volando a la ciudad de Mérida,
									las siguientes aerolíneas cuentan con vuelos directos: Aeroméxico, VivaAerobus
									y Volaris.
								</div>
							</div>
							<div class="col-6">
								<h4 class="text-center">
									<i class="fa fa-bus"></i>
								</h4>
								<div class="mt-2">
									<div>
										Del aeropuerto de Mérida salen camiones directos a la Ciudad de Campeche
										por las líneas de autobuses: ADO y OCC.
									</div>

									<div class="mt-2">
										El tiempo estimado es de 2hrs 20 min. el costo del camión varia entre $242 y $260,
										existen distintas corridas, la última saliendo del aeropuerto es a las 18:30hrs,
										verifícalo con el horario de tu vuelo.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="mt-4 text-center">
							Para los que les guste manejar y recorrer nuestro bello México, pueden llegar a Campeche por Autopista, es un viaje aproximado de 12hrs, dependiendo de las paradas de que hagas, el costo promedio de las casetas es de $3,500 de ida y otros $3,500 de regreso. De gasolina son entre 2 o 3 tanques dependiendo el auto.
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END TRANSPORTATION SECTION -->

		<section>
			<h3 class="text-center">Hospedaje</h3>
			<div class="container">
				<div class="my-4">
					Existen alojamientos para todos los presupuestos,
					todos los que ves aquí quedan cerca del centro histórico y del malecón:
				</div>

				<ul>
					<li>
						Hoteles entre $400 y $800 por noche.
						En el centro de la Ciudad

						<ul>
							<li>
								<a href="https://mayacampechehotel.com/" target="_blank">
									Hotel Maya Campeche
								</a>
							</li>
							<li>
								<a href="https://castelmarhotelcampeche.com-hotel.com/es/" target="_blank">
									Hotel Castelmar
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									Hotel Baluartes
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									Hotel Plaza Colonial
								</a>
							</li>
						</ul>
					</li>
					<li>
						Hoteles entre $900 y $1500 por noche (En el Malecón)
						<ul>
							<li>
								<a href="https://www.gammahoteles.com/es/gamma-campeche-malecon?gclid=CjwKCAjw9e6SBhB2EiwA5myr9vFN3JT_7e48hEcSFXhB1HCz6kFPryRyXxVc1lEde8chjx3Q80ZSrBoCx4UQAvD_BwE&gclsrc=aw.ds" target="_blank">
									Hotel Gamma
								</a>
							</li>
							<li>
								<a href="https://www.oceanview.com.mx" target="_blank">
									Hotel Ocean View
								</a>
							</li>
							<li>
								<a href="https://www.online-reservations.com/?hotelid=171510&gclid=CjwKCAjw9e6SBhB2EiwA5myr9tSBAE1ZHf7OnBj3qhbl1dVhYDYHqti_TJLvwoAtfV3WX8xDdz2p3BoCAWYQAvD_BwE" target="_blank">
									Hotel Holiday Inn Campeche
								</a>
							</li>
							<li>
								<a href="https://www.cityexpress.com/express/hoteles-mexico/campeche/san-francisco-de-campeche/campeche" target="_blank">
									Hotel City Express Campeche
								</a>
							</li>
						</ul>
					</li>
					<li>
						Hoteles Boutique Entre $3000 y $5000 por noche
						<ul>
							<li>
								<a href="https://www.casadongustavo.com/es/index.html" target="_blank">
									Hotel Boutique Casa Don Gustavo (centro)
								</a>
							</li>
							<li>
								<a href="https://www.marriott.com/en-us/hotels/cpehl-hacienda-puerta-campeche-a-luxury-collection-hotel-campeche/overview/?scid=bb1a189a-fec3-4d19-a255-54ba596febe2&y_source=1_Mjg3MDA4NS03MTUtbG9jYXRpb24ud2Vic2l0ZQ%3D%3D" target="_blank">
									Hacienda Puerta Campeche (centro)
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="https://www.airbnb.mx/wishlists/1054601796?s=13" target="_blank">
							Recomendados de AirBnb - Boda Jorge y Jaesy
						</a>
					</li>
				</ul>

				<h5 class="mt-3 text-center">
					Te sugerimos reservar con anticipación vuelos y hospedaje, considera que es puente y esto puede modificar costos y disponibilidad.
				</h5>
			</div>
		</section>

		<!-- BEGIN BRIDESMAIDS SECTION -->
		<section id="dress-code" class="parallax-background bg-color-overlay">
			<div class="container">

				<div class="row">
					<div class="col-sm-12">
						<h2 class="section-title light mb-0">Código de vestimenta</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">

					</div>
				</div>

			</div>
		</section>
		<!-- END BRIDESMAIDS SECTION -->

        @include('home.partials.timeline')
        {{-- @include('home.partials.bridesmaids')
        @include('home.partials.groomsmen') --}}
        @include('home.partials.weeding-gifts')
        {{-- @include('home.partials.gallery')
        @include('home.partials.testimonials') --}}
        @include('home.partials.blog')
        @include('home.partials.contact')
        @include('home.partials.footer')

	</div>
	<!-- END WRAPPER -->


	<!-- Google Maps API and Map Richmarker Library -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHOXsTqoSDPQ5eC5TChvgOf3pAVGapYog"></script>
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

</body>
</html>
