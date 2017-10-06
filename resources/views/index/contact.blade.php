@extends('layout')
	@section('content')
	<!-- Content  -->
	<div id="page-content">
		<!-- Block -->
		<div class="block">
			<div class="container">
				<h1 class="text-center decor color">Contacto</h1>
				<div class="row">
					<div class="col-sm-5 col-md-3">
						<div class="address">
							<div><img src="images/logo.svg" class="img-responsive" alt="" /></div>
							<div class="divider-sm"></div>
							<div class="address-block">
								<i class="icon icon-location"></i>
								<h6 class="text-uppercase">Dirección:</h6>LIMBANO BLANDIN #102
								<br>GAVIOTAS NORTE, CENTRO.
							</div>
							<div class="address-block">
								<i class="icon icon-call-telephone"></i>
								<h6 class="text-uppercase">Contáctame:</h6> +52 993 137 0017
							</div>
							<div class="divider-sm"></div>
							<h6>¿TIENES ALGUNA PREGUNTA?</h6>
							<p><a href="#">albercascarrera@gmail.com</a>
							</div>
							<div class="divider"></div>
						</div>
						<div class="col-sm-1 visible-lg"></div>
						<div class="col-sm-7 col-md-8">
							<form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
								<div id="success">
									<p>¡Tu mensaje se envio con exito!</p>
								</div>
								<div id="error">
									<p>Algo salio mal, intenta actualizar y enviar el formulario de nuevo.</p>
								</div>
								<div class="inputs-col">
									<div class="row">
										<div class="col-md-6">
											<div class="input-wrapper">
												<label>Nombre <span class="required">*</span></label>
												<input type="text" class="input-custom input-full" name="name" placeholder="Tu nombre">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-wrapper">
												<label>Teléfono</label>
												<input type="text" class="input-custom input-full" name="phone" placeholder="(555) 555-5555">
											</div>
										</div>
									</div>
									<div class="input-wrapper">
										<label>Email</label>
										<input type="text" class="input-custom input-full" name="email" placeholder="xxxx@xxxx.xxx">
									</div>
								</div>
								<div>
									<label>Mensaje</label>
									<textarea class="textarea-custom input-full" name="message"></textarea>
								</div>
								<button type="submit" id="submit" class="btn">Enviar Mensaje</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- //Block -->
			<!-- Block -->
			<div class="block bottom-null">
				<div id="map"></div>
			</div>
			<!-- //Block -->
		</div>
		<!-- // Content  -->
		@endsection
		      <!-- Google map -->
		      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		      <script type="text/javascript">
				// When the window has finished loading create our google map below
				google.maps.event.addDomListener(window, 'load', init);

				function init() {
					// Basic options for a simple Google Map
					// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
					var mapOptions = {
						// How zoomed in you want the map to start at (always required)
						zoom: 14,
						scrollwheel: false, // The latitude and longitude to center the map (always required)
						center: new google.maps.LatLng(17.979121, -92.921061), // Glasgow
						// How you would like to style the map. 
						// This is where you would paste any style found on Snazzy Maps.
						styles: [{
							"featureType": "administrative",
							"elementType": "labels.text.fill",
							"stylers": [{
								"color": "#444444"
							}]
						}, {
							"featureType": "landscape",
							"elementType": "all",
							"stylers": [{
								"color": "#f2f2f2"
							}]
						}, {
							"featureType": "poi",
							"elementType": "all",
							"stylers": [{
								"visibility": "off"
							}]
						}, {
							"featureType": "road",
							"elementType": "all",
							"stylers": [{
								"saturation": -100
							}, {
								"lightness": 45
							}]
						}, {
							"featureType": "road.highway",
							"elementType": "all",
							"stylers": [{
								"visibility": "simplified"
							}]
						}, {
							"featureType": "road.arterial",
							"elementType": "labels.icon",
							"stylers": [{
								"visibility": "off"
							}]
						}, {
							"featureType": "transit",
							"elementType": "all",
							"stylers": [{
								"visibility": "off"
							}]
						}, {
							"featureType": "water",
							"elementType": "all",
							"stylers": [{
								"color": "#46bcec"
							}, {
								"visibility": "on"
							}]
						}]
					};
					// Get the HTML DOM element that will contain your map 
					// We are using a div with id="map" seen below in the <body>
					var mapElement = document.getElementById('map');
					// Create the Google Map using our element and options defined above
					var map = new google.maps.Map(mapElement, mapOptions);
					var image = 'images/map-marker.png';
					// Let's also add a marker while we're at it
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(17.979121, -92.921061),
						map: map,
						icon: image
					});
				}
			</script>