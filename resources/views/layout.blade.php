<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<link rel="icon" href="favicon.ico">
	<title>Albercas Carrera</title>
	<!-- Bootstrap core CSS -->
	<link href="css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="css/plugins/bootstrap-submenu.css" rel="stylesheet">
	<link href="css/plugins/animate.min.css" rel="stylesheet">
	<link href="css/plugins/nivo-slider.css" rel="stylesheet">
	<link href="css/plugins/slick.css" rel="stylesheet">
	<link href="css/plugins/magnific-popup.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Icon Font-->
	<link href="font/icons/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body class="home">
	<!-- Loader -->
	<div id="loader-wrapper" class="loader-on">
		<div id="loader">
			<div class="loader">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<p>Cargando</p>
			</div>
		</div>
	</div>
	<!-- //Loader -->
	<!-- Header -->
	<header class="page-header {{ Request::is('/') ? '' : 'page-header2' }}">
		<!-- Fixed navbar -->
		<nav class="navbar" id="slide-nav">
			<div class="container">
				<div class="navbar-header">
					<div class="header-top">
						<div class="row">
							<div class="col-sm-8 col-md-4 first-mobile">
								<div class="phone">
									<div class="number"><i class="icon icon-call-telephone"></i><span>+1 800 603 6035</span></div>
									<div>COTIZA SIN COSTO</div>
								</div>
							</div>
							<div class="col-sm-4 col-lg-3 hidden-xs hidden-sm">
								<div class="slogan">Todo lo que hacemos ayuda a las personas a vivir vidas más saludables</div>
							</div>
							<div class="col-lg-1 visible-lg"></div>
							<div class="col-sm-4 text-center">
								<div class="logo">
									<a href="index"><img src="images/logo.svg" alt="Logo"></a>
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="navbar-toggle"><i class="icon icon-menu"></i><i class="icon icon-cancel"></i></button>
				</div>
				<div id="slidemenu" data-hover="dropdown" data-animations="fadeIn">
					<ul class="nav navbar-nav">
						<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Inicio</a></li>
						<li class="{{ Request::is('nosotros') ? 'active' : '' }}"><a href="nosotros">Acerca</a></li>
						<li class="dropdown {{ Request::is('servicios') ? 'active' : '' }}"> <a href="servicios" data-toggle="dropdown">Servicios<span class="ecaret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li class="dropdown-submenu"> <a href="#" data-toggle="dropdown">Servicios de albercas residenciales<span class="ecaret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Paquete de mantenimiento semanal</a></li>
										<li><a href="#">Paquete de mantenimiento quincenal</a></li>
										<li><a href="#">Abrir / Cerrar el paquete</a></li>
										<li><a href="#">Servicio de apertura de la alberca</a></li> 
										<li><a href="#">Servicio de cierre de la alberca </a></li>
										<li><a href="#">Inspección de la alberca </a></li>
										<li><a href="#">Detección de fugas </a></li>
										<li><a href="#">Renovación de la alberca </a></li>
										<li><a href="#">Revestimiento de alberca </a></li>
										<li><a href="#">Cubiertas para albercas</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu"> <a href="#">Servicios de albercas comerciales<span class="ecaret"></span></a>
									<ul class="dropdown-menu">
									<li><a href="#">Servicio de cierre de la alberca</a></li>
									<li><a href="#">Inspección de la alberca</a></li>
									<li><a href="#">Detección de fugas</a></li>
									<li><a href="#">Renovación de la alberca</a></li>
									<li><a href="#">Revestimiento de alberca</a></li>
									<li><a href="#">Cubre la alberca</a></li>
									<li><a href="#">Paquete de mantenimiento semanal</a></li>
									<li><a href="#">Paquete de mantenimiento quincenal</a></li>
									<li><a href="#">Abrir / Cerrar el paquete</a></li>
									<li><a href="#">Servicio de apertura de la alberca</a></li>
									</ul>
								</li>
								<li><a href="#">Nueva construcción comercial</a></li>
							</ul>
						</li>
						<li><a href="galeria">Galeria</a></li>
						<li><a href="tips">Tips</a></li>
						<li><a href="contacto">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- // Header -->
	@yield('content')
	<!-- Footer -->
		<!-- Footer -->
		<div class="page-footer">
			<div class="back-to-top hidden-xs"><a href="#top"><span class="icon icon-up-arrow"></span></a></div>
			<div class="container">
				<div class="footer-menu hidden-xs">
					<ul>
						<li><a href="/">Inicio</a></li>
						<li><a href="nosotros">Acerca</a></li>
						<li><a href="servicios">Servicios</a></li>
						<li><a href="galeria">Galeria</a></li>
						<li><a href="tips">tips</a></li>
						<li><a href="contacto">contacto</a></li>
					</ul>
				</div>
				<div class="row footer-row">
					<div class="col-sm-4">
						<div class="location"><i class="icon icon-location"></i>LIMBANO BLANDIN #102. GAVIOTAS NORTE, CENTRO.</div>
					</div>
					<div class="col-sm-4 first-mobile">
						<div class="phone">
							<div class="number"><i class="icon icon-call-telephone"></i><span>+52 993 137 0017</span></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="logo">
							<a href="index.html"><img src="images/logo-invert.svg" alt="Logo"></a>
						</div>
					</div>
				</div>
				<div class="footer-bot">
					<div class="copyright">© Albercas Carrera. 2016. Políticas de Privacidad</div>
					<div class="social-links">
						<ul>
							<li>
								<a class="icon icon-social-facebook" href="#"></a>
							</li>
							<li>
								<a class="icon icon-social-twitter" href="#"></a>
							</li>
							<li>
								<a class="icon icon-social-google-plus" href="#"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<canvas id='footerSea'></canvas>
		</div>
		<!-- //Footer -->
		<script src="js/jquery.js"></script>
		<script src="js/plugins/bootstrap.min.js"></script>
		<script src="js/plugins/jquery.nivo.slider.js"></script>
		<script src="js/plugins/slick.min.js"></script>
		<script src="js/plugins/jquery.magnific-popup.min.js"></script>
		<script src="js/plugins/jquery.waypoints.min.js"></script>
		<script src="js/plugins/jquery.countTo.js"></script>
		<script src="js/plugins/jquery.form.js"></script>
		<script src="js/plugins/jquery.validate.min.js"></script>
		@yield('galeria')
	  <script src="js/custom.js"></script>
	  <!--Start of Tawk.to Script-->
	  <script type="text/javascript">
	  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	  (function(){
	  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	  s1.async=true;
	  s1.src='https://embed.tawk.to/593051a04374a471e7c50fc5/default';
	  s1.charset='UTF-8';
	  s1.setAttribute('crossorigin','*');
	  s0.parentNode.insertBefore(s1,s0);
	  })();
	  </script>
	  <!--End of Tawk.to Script-->