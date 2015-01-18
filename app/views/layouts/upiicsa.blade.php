<!DOCTYPE html>
<html lang="@yield('lang', 'es-MX')">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="@yield('description')">
		<meta name="author" content="@yield('author')">

		<title>@yield('title', 'UPIICSA')</title>

		<!-- #Bootstrap Core CSS -->
		<link type="text/css" href="{{ asset('css/boostrap/bootstrap.min.css') }}" rel="stylesheet">

		<!-- #MAIN CSS -->
		<link type="text/css" href="{{ asset('css/main.css') }}" rel="stylesheet">

		<!-- #ANIMATE CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

		<!-- #UPIICSA CSS -->
		<link type="text/css" href="{{ asset('css/upiicsa.css') }}" rel="stylesheet">


		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="{{ asset('upiicsa.jpg') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('upiicsa.jpg') }}" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>

	</head>

	<body data-spy="scroll">

		<div class="container">

			<!-- Section: #MENU -->
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li>
									<a href="#welcome" class="gn-icon gn-icon-article">Bienvenida</a>
								</li>
								<li>
									<a href="#ultimos-registros" class="gn-icon gn-icon-article">Ultimos Registros</a>
								</li>
								<li>
									<a href="#registro" class="gn-icon gn-icon-article">Registro</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li>
					<a class="ipn" href="{{ asset('/') }}"><img src="{{ asset('img/logo-upiicsa.png') }}" id="upiicsa-logo" alt="UPIICSA"/></a>
				</li>
				<li class="hidden-xs">
					<a class="ipn" href="http://www.ipn.mx/Paginas/inicio.aspx" title="ipn.mx">
						<span class="ipn-title">
							Instituto Polit&eacute;cnico Nacional
							<span>
								"La T&eacute;cnica al servicio de la patria."
							</span>
						</span>
						<img src="{{ asset('img/logo-ipn.png') }}" alt="IPN" style="width:35px;margin-top:-10px;">
					</a>
				</li>
			</ul>
			<!-- Section: #MENU -->
		
		</div>

		<!-- #APP -->
			@yield('app')
		<!-- / #APP -->

		<!-- #FOOTER -->
		<footer>

			<div class="footer-content clearfix">
				<div class="container custom-container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a href="#" class="footer-logo">Sobre este projecto</a>
							<p>
								Este projecto fue iniciado para dar solución y comprender un poco más la forma de organizarce entre alumnos de la <a href="http://www.upiicsa.ipn.mx/Paginas/inicio.aspx">UPIICSA</a>.
							</p>
							<p>
								Siendo esta una activida preopuiesta por la profesora <a href="" class="learn-more">Beatriz Ramirez Woolrich</a>, teniendo como objetivo realizar esta prueva a la mayor cantidad posible de la comunidad estudiantil de la <a href="http://www.upiicsa.ipn.mx/Paginas/inicio.aspx">UPIICSA</a>.
							</p>
							<a href="#" class="learn-more">learn more</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<h3>Top Tags</h3>
							<div class="footer-tags">
								<ul>
									<li>
										<a href="{{ route('team', ['1']) }}">Equipo 1</a>
									</li>
									<li>
										<a href="{{ route('team', ['2']) }}">Equipo 2</a>
									</li>
									<li>
										<a href="{{ route('team', ['3']) }}">Equipo 3</a>
									</li>
									<li>
										<a href="http://www.upiicsa.ipn.mx/Paginas/inicio.aspx">UPIICSA</a>
									</li>
									<li>
										<a href="{{ route('team', ['4']) }}">Equipo 4</a>
									</li>
									<li>
										<a href="{{ route('team', ['5']) }}">Equipo 5</a>
									</li>
									<li>
										<a href="http://www.ipn.mx/Paginas/inicio.aspx">IPN</a>
									</li>
									<li>
										<a href="{{ route('team', ['6']) }}">Equipo 6</a>
									</li>
									<li>
										<a href="{{ route('team', ['7']) }}">Equipo 7 - Presión Salarial</a>
									</li>
									<li>
										<a href="{{ route('team', ['8']) }}">Equipo 8</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-6">

							<h3>Recurda visitar</h3>

							<ul class="company-social">
								<li class="social-facebook">
									<a href="https://www.facebook.com/groups/659643600801298/" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li class="social-twitter">
									<a href="https://twitter.com/upiicsa" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li class="social-dribble">
									<a href="https://dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a>
								</li>
								<li class="social-google">
									<a href="https://www.google.com.mx/maps/place/UPIICSA/@19.396391,-99.089865,17z/data=!3m1!4b1!4m2!3m1!1s0x85d1fc31da3619d1:0x5257e9d2398504b0" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="bottom-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<p>
								Copyright © 2015 - Cristian Jaramillo
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- / #FOOTER -->

	</body>

	<!-- # Core JavaScript Files -->

	<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		if (!window.jQuery) {
			document.write('<script src="{{ asset('js/libs/jquery-2.1.1.min.js') }}"><\/script>');
		}
	</script>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script>
		if (!window.jQuery.ui) {
			document.write('<script src="{{ asset('js/libs/jquery-ui-1.10.3.min.js') }}"><\/script>');
		}
	</script>


	<!-- #BOOTSTRAP JS -->
	<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

	<!-- #CLASSIE JS -->
	<script src="{{ asset('js/classie/classie.js') }}"></script>

	<!-- #SCROLLUP JS -->
	<script src="{{ asset('js/scrollUp/jquery.scrollUp.js') }}"></script>

	<!-- #GNMENU JS -->
	<script src="{{ asset('js/gnmenu/gnmenu.js') }}"></script>

	<!-- #NIVO JS -->
	<script src="{{ asset('js/nivo/nivo-lightbox.min.js') }}"></script>

	<script src="{{ asset('js/jquery.fittext.js') }}"></script>
	<script src="{{ asset('js/jquery.lettering.js') }}"></script>
	<script src="{{ asset('js/jquery.textillate.js') }}"></script>

	<!-- #CUSTOM JS -->
	<script src="{{ asset('js/custom.js') }}"></script>

	<script type="text/javascript">

		$('.section-heading h1')
      		.fitText(1)
      		.textillate({ in: { effect: 'flipInY' }});

      	$('.section-heading p')
	      .fitText(3.2, { maxFontSize: 18 })
	      .textillate({ initialDelay: 1000, in: { delay: 3, shuffle: true } });

		$.scrollUp();
	</script>

	@yield('scripts')

</html>
