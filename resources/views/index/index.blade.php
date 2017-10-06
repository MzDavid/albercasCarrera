@extends('layout')
@section('content')
<!-- Content  -->
<div id="page-content">
	<!-- Slider -->
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider"> <img src="images/slider/slide1.jpg" title="#htmlcaption1" data-thumb="images/slider/slide1.jpg" alt="" /> <img src="images/slider/slide2.jpg" title="#htmlcaption2" data-thumb="images/slider/slide2.jpg" alt="" /> <img src="images/slider/slide3.jpg" title="#htmlcaption3" data-thumb="images/slider/slide3.jpg" alt="" /> </div>
		<canvas id='sea'></canvas>
		<div id="htmlcaption1" class="nivo-caption">
			<div class="vert-wrapper">
				<div class="vert">
					<div class="text text1">Albercas perfectas, siempre.</div>
					<div class="text text2">Agua clara, conciencia limpia.</div>
					<div class="text text3"><a href="#" class="btn btn-light">Saber más</a></div>
				</div>
			</div>
		</div>
		<div id="htmlcaption2" class="nivo-caption">
			<div class="vert-wrapper">
				<div class="vert">
					<div class="text text1">Hacemos todo el trabajo
						<br>Te llevas la diversión.</div>
						<div class="text text2">Momentos de relajación</div>
						<div class="text text3"><a href="#" class="btn btn-light">Saber más</a></div>
					</div>
				</div>
			</div>
			<div id="htmlcaption3" class="nivo-caption">
				<div class="vert-wrapper">
					<div class="vert">
						<div class="text text1">Servicio 100% confiable</div>
						<div class="text text2">Hacemos brillar tu alberca</div>
						<div class="text text3"><a href="#" class="btn btn-light">Saber más</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Slider -->
		<!-- Services Block -->
		<div class="block">
			<div class="container">
				<div class="row services-carousel">
					<div class="col-sm-4 animation" data-animation="fadeInLeft" data-animation-delay="0s">
						<div class="service-item">
							<div class="icon-circle">
								<div class="icon-hover"></div>
								<div class="icon icon-swimming-pool"></div>
							</div>
							<div class="service-title">
								<h4>SERVICIOS<br>RESIDENCIALES</h4> </div>
								<div class="service-text">Una alberca puede ser el lugar perfecto para ti y tu familia </div>
							</div>
						</div>
						<div class="col-sm-4 animation" data-animation="fadeInUp" data-animation-delay="0s">
							<div class="service-item">
								<div class="icon-circle">
									<div class="icon-hover"></div>
									<div class="icon icon-waterpolo"></div>
								</div>
								<div class="service-title">
									<h4>SERVICIOS <br>COMERCIALES</h4> </div>
									<div class="service-text"> Podemos proporcionar todo tipo de servicios a  su alberca, spa, y la reparación de la fuente, la renovación de acuerdo a sus necesidades. </div>
								</div>
							</div>
							<div class="col-sm-4 animation" data-animation="fadeInRight" data-animation-delay="0s">
								<div class="service-item">
									<div class="icon-circle">
										<div class="icon-hover"></div>
										<div class="icon icon-shovel"></div>
									</div>
									<div class="service-title">
										<h4>SERVICIOS DE<br> CONSTRUCCIÓN</h4></div>
										<div class="service-text">Podemos ayudarle a diseñar y construir una alberca que cumpla con sus especificaciones únicas </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //Services Block -->
					<!-- Category Block -->
					<div class="block bottom-sm-margin">
						<div class="container">
							<div class="row category-carousel">
								<div class="col-sm-6 col-md-4">
									<div class="category-item animation" data-animation="fadeInLeft" data-animation-delay="0s">
										<div class="category-image"> <img src="images/category-img-01.jpg" alt="" class="img-responsive">
											<h5 class="category-title">Reparaciones</h5>
											<div class="wave-wrapper">
												<div class="wave"></div>
											</div>
										</div>
										<div class="category-text">Nuestros servicios de reparación pueden ayudarle a solucionar cualquier fuga, reemplazo de válvula o mal funcionamiento de la bomba<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 animation" data-animation="fadeIn" data-animation-delay="0s">
								<div class="category-item">
									<div class="category-image"> <img src="images/category-img-02.jpg" alt="" class="img-responsive">
										<h5 class="category-title">Remodelaciones</h5>
										<div class="wave-wrapper">
											<div class="wave"></div>
										</div>
									</div>
									<div class="category-text">¡Podemos ayudarte a diseñar y reparar viejas albercas para verse como nuevas!<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
									</span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 animation" data-animation="fadeInRight" data-animation-delay="0s">
							<div class="category-item">
								<div class="category-image"> <img src="images/category-img-03.jpg" alt="" class="img-responsive">
									<h5 class="category-title">Instalación de Equipo</h5>
									<div class="wave-wrapper">
										<div class="wave"></div>
									</div>
								</div>
								<div class="category-text">Conocimientos avanzados para hacer una fácil instalación de su equipo<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="category-item animation" data-animation="fadeInLeft" data-animation-delay="0s">
							<div class="category-image"> <img src="images/category-img-04.jpg" alt="" class="img-responsive">
								<h5 class="category-title">Acabados para piscinas y jacuzzis</h5>
								<div class="wave-wrapper">
									<div class="wave"></div>
								</div>
							</div>
							<div class="category-text">Te ayudamos a encontrar el diseño adecuado para el interior de su alberca <span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="category-item animation" data-animation="fadeIn" data-animation-delay="0s">
						<div class="category-image"> <img src="images/category-img-05.jpg" alt="" class="img-responsive">
							<h5 class="category-title">Lavado a Presión</h5>
							<div class="wave-wrapper">
								<div class="wave"></div>
							</div>
						</div>
						<div class="category-text">El lavado a presión es una forma eficaz para eliminar la suciedad y algas de su alberca<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item animation" data-animation="fadeInRight" data-animation-delay="0s">
					<div class="category-image"> <img src="images/category-img-06.jpg" alt="" class="img-responsive">
						<h5 class="category-title">Azulejos</h5>
						<div class="wave-wrapper">
							<div class="wave"></div>
						</div>
					</div>
					<div class="category-text">Manejamos una gran variedad de cerámica, vidrio y azulejos naturales a su elección<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- //Category Block -->
<!-- Pricing Block -->
<div class="block bg-2">
	<div class="container">
		<div class="pricing">
			<div class="pricing-box">
				<div class="inside">
					<h3>Precios</h3>
					<div class="price-carousel">
						<div class="price-item">
							<h6 class="price-title">Servicio de limpieza</h6>
							<div class="price-text">Our Weekly residential pool cleaning is designed for unscreened pools, with or without spas, which may require extra attention because of leaves or debris.</div>
							<div class="price-price">
								<div class="price-from">Starting at</div>
								<div class="price-value"><span>$<b>65.00</b></span> a month</div>
							</div>
							<div class="price-action"><a href="#" class="btn">Order now</a></div>
						</div>
						<div class="price-item">
							<h6 class="price-title">Pool cleaning service</h6>
							<div class="price-text">Our Weekly residential pool cleaning is designed for unscreened pools, with or without spas, which may require extra attention because of leaves or debris.</div>
							<div class="price-price">
								<div class="price-from">Starting at</div>
								<div class="price-value"><span>$<b>65.00</b></span> a month</div>
							</div>
							<div class="price-action"><a href="#" class="btn">Order now</a></div>
						</div>
						<div class="price-item">
							<h6 class="price-title">Pool cleaning service</h6>
							<div class="price-text">Our Weekly residential pool cleaning is designed for unscreened pools, with or without spas, which may require extra attention because of leaves or debris.</div>
							<div class="price-price">
								<div class="price-from">Starting at</div>
								<div class="price-value"><span>$<b>65.00</b></span> a month</div>
							</div>
							<div class="price-action"><a href="#" class="btn">Order now</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Pricing Block -->
<!-- Why Choose Block -->
<div class="block bottom-sm-margin">
	<div class="container">
		<h2 class="decor color text-center">Why choose us?</h2>
		<div class="row text-icon-carousel step-animation-container">
			<div class="col-sm-4">
				<div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0s">
					<div class="text-icon-icon"><span><i class="icon icon-medal"></i><span class="icon-hover"></span></span>
					</div>
					<h5 class="text-icon-title">Worry free guarantee</h5>
					<div class="text-icon-text">Forget about fluctuating water chemistry. In fact, forget about buying and lugging chemicals, troubleshooting problems, remembering to latch the gate, whether its safe to swim, or if your filter’s making a funny noise</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0.2s">
					<div class="text-icon-icon"><span><i class="icon icon-handshake"></i><span class="icon-hover"></span></span>
					</div>
					<h5 class="text-icon-title">NO CONTRACTS. EVER</h5>
					<div class="text-icon-text">Most service contracts simply limit your freedom as a customer. By design they lock you into one-sided agreements that make it easier for companies to pay less attention to you. </div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0.4s">
					<div class="text-icon-icon"><span><i class="icon icon-wrench"></i><span class="icon-hover"></span></span>
					</div>
					<h5 class="text-icon-title">PRIORITY REPAIR ADVANTAGE</h5>
					<div class="text-icon-text">When your pool filter breaks down in the middle of a heat wave, or your heater goes on the fritz in the middle of winter, it makes all the difference in the world to know you’ll get help quickly. </div>
				</div>
			</div>
			<div class="clearfix hidden-xs"></div>
			<div class="col-sm-4">
				<div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0.6s">
					<div class="text-icon-icon"><span><i class="icon icon-test-tube"></i><span class="icon-hover"></span></span>
					</div>
					<h5 class="text-icon-title">SALT chlorine GENERATOR</h5>
					<div class="text-icon-text">We don’t believe you or your family should swim in a pool without the benefits of a saltwater chlorine generator. They eliminate harmful chloramines and additives found in chlorination chemicals, and they noticeably improve water quality with a relative softening effect on hair and skin.</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0.8s">
					<div class="text-icon-icon"><span><i class="icon icon-sweep"></i><span class="icon-hover"></span></span>
					</div>
					<h5 class="text-icon-title">TOTAL CLEAN PROMISE</h5>
					<div class="text-icon-text">“Spot Cleaning” is a dirty little practice some pool service companies use to reduce their prices. It involves picking and choosing what to clean based upon what you see. It ignores basic microbiology and flies in the face of proper pool care.</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="1s">
					<div class="text-icon-icon"><span><i class="icon icon-clock"></i><span class="icon-hover"></span></span>
					</div>
					<h5 class="text-icon-title">SHOW UP ON TIME</h5>
					<div class="text-icon-text">You can always trust we’ll be there, on time even if you’re at work. We use GPS enabled trucks, and each scheduled service visit is logged online with our data center, complete with the details when we’re done.</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Why Choose Block -->
<!-- How work Block -->
<div class="block bg-1">
	<div class="container">
		<h2 class="text-center decor decor-white">How it works</h2>
		<div class="row number-carousel step-animation-container">
			<div class="col-sm-6">
				<div class="text-num step-animation" data-animation="fadeInLeft" data-animation-delay="0s">
					<div class="text-num-num"><span>1</span></div>
					<div class="text-num-info">
						<h5 class="text-num-title">Submit your service request</h5>
						<p>It is very important to us that customers meet the owner, give the history of their pool, so that any kinks can be worked out before we start regular service. Pool Service cannot be quoted properly over the phone.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="text-num step-animation" data-animation="fadeInRight" data-animation-delay="0s">
					<div class="text-num-num"><span>2</span></div>
					<div class="text-num-info">
						<h5 class="text-num-title">We connect you with a certified service technician </h5>
						<p>In some cases the pool will not be ready for weekly Pool Service. If this is the case customers will be informed of repairs or if a clean-up is needed before service can begin. Work will only be completed with customer approval.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="text-num last step-animation" data-animation="fadeInLeft" data-animation-delay="0.8s">
					<div class="text-num-num"><span>3</span></div>
					<div class="text-num-info">
						<h5 class="text-num-title">A service technician will reach out to you shortly </h5>
						<p>Our Service Manager will service the pool for the first two weeks of service. During this time all equipment will be logged and a detailed report will be given to your permanent pool service technician.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="text-num last step-animation" data-animation="fadeInRight" data-animation-delay="0.8s">
					<div class="text-num-num"><span>4</span></div>
					<div class="text-num-info">
						<h5 class="text-num-title">Back to enjoying your backyard</h5>
						<p>Assigned service tech will start regular service.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //How work Block -->
<!-- Gallery Block -->
<div class="block">
	<div class="container">
		<h2 class="decor color text-center">Proyectos Destacados</h2>
		<p class="text-center font18">Nuestra empresa presta atención especial a los detalles de cada proyecto para asegurar la satisfacción completa de cada cliente. Vea ejemplos de fotos de nuestro trabajo anterior en la galería de abajo, o contáctenos para más información.</p>
		<div class="divider"></div>
	</div>
	<div class="gallery" id="gallery">
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-01-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-01.jpg">
					<h6 class="item-name">New Residential Pool Construction</h6>
					<div class="item-price"><span>$</span>16500.00</div>
					<div class="item-period">3 Weeks</div>
					<div class="item-location">Baltimore, MD</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-02-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-02.jpg">
					<h6 class="item-name">Pool Installation</h6>
					<div class="item-price"><span>$</span>26500.00</div>
					<div class="item-period">5 Weeks</div>
					<div class="item-location">Florida, USA</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-03-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-03.jpg">
					<h6 class="item-name">Residential Pool Installation</h6>
					<div class="item-price"><span>$</span>18500.00</div>
					<div class="item-period">10 Weeks</div>
					<div class="item-location">NY, USA</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-04-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-04.jpg">
					<h6 class="item-name">Pool Construction</h6>
					<div class="item-price"><span>$</span>55000.00</div>
					<div class="item-period">10 Weeks</div>
					<div class="item-location">California, USA</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-05-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-05.jpg">
					<h6 class="item-name">Residential Pool</h6>
					<div class="item-price"><span>$</span>10500.00</div>
					<div class="item-period">4 Weeks</div>
					<div class="item-location">Ontario, Canada</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-06-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-06.jpg">
					<h6 class="item-name">Custom Pool Construction</h6>
					<div class="item-price"><span>$</span>16500.00</div>
					<div class="item-period">2 Weeks</div>
					<div class="item-location">Texas, USA</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-07-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-07.jpg">
					<h6 class="item-name">Residential Pool Construction</h6>
					<div class="item-price"><span>$</span>26500.00</div>
					<div class="item-period">3 Weeks</div>
					<div class="item-location">NY, USA</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-08-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-08.jpg">
					<h6 class="item-name">New Pool Construction</h6>
					<div class="item-price"><span>$</span>6500.00</div>
					<div class="item-period">1 Weeks</div>
					<div class="item-location">NY, USA</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-09-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-09.jpg">
					<h6 class="item-name">Residential Pool Installation</h6>
					<div class="item-price"><span>$</span>67500.00</div>
					<div class="item-period">7 Weeks</div>
					<div class="item-location">Texas, USA</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-10-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-10.jpg">
					<h6 class="item-name">New Residential Pool Construction</h6>
					<div class="item-price"><span>$</span>16500.00</div>
					<div class="item-period">3 Weeks</div>
					<div class="item-location">Baltimore, MD</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-11-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-11.jpg">
					<h6 class="item-name">New Residential Pool Construction</h6>
					<div class="item-price"><span>$</span>5000.00</div>
					<div class="item-period">3 Weeks</div>
					<div class="item-location">Baltimore, MD</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-12-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-12.jpg">
					<h6 class="item-name">Pool Construction</h6>
					<div class="item-price"><span>$</span>14500.00</div>
					<div class="item-period">3 Weeks</div>
					<div class="item-location">Baltimore, MD</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-13-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-13.jpg">
					<h6 class="item-name">New Residential Pool Construction</h6>
					<div class="item-price"><span>$</span>7500.00</div>
					<div class="item-period">3 Weeks</div>
					<div class="item-location">Baltimore, MD</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-14-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-14.jpg">
					<h6 class="item-name">Residential Pool Construction</h6>
					<div class="item-price"><span>$</span>16500.00</div>
					<div class="item-period">3 Weeks</div>
					<div class="item-location">California, MD</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-15-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-15.jpg">
					<h6 class="item-name">New Pool Construction</h6>
					<div class="item-price"><span>$</span>16500.00</div>
					<div class="item-period">10 Weeks</div>
					<div class="item-location">NY, USA</div>
				</a>
			</div>
		</div>
		<div class="gallery__item">
			<div class="gallery__item__image"> <img src="images/gallery/gallery-home-img-16-thumb.jpg" alt="" />
				<a class="hover" href="images/gallery/gallery-home-img-16.jpg">
					<h6 class="item-name">New Residential Pool Construction</h6>
					<div class="item-price"><span>$</span>45500.00</div>
					<div class="item-period">12 Weeks</div>
					<div class="item-location">Texas, USA</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- //Gallery Block -->
<!-- Testimonials Block -->
<div class="block bottom-md-margin">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="testimonials animation" data-animation="fadeInLeft">
					<h3 class="color decor text-center">Testimonios</h3>
					<div class="testimonials-carousel">
						<div class="testimonials-item">
							<div class="testimonials-text">Anyone can clean your pool, but the service from The Pool Services is at another level. They really care about doing a great job, so it’s always a pleasure to have them come by.</div>
							<div class="testimonials-username">Eldon C. Caron</div>
						</div>
						<div class="testimonials-item">
							<div class="testimonials-text">Great service. They really helped me out when my heater went out. They made the service and payment very convenient for me. I highly recommend this company.</div>
							<div class="testimonials-username">Paul Grant</div>
						</div>
						<div class="testimonials-item">
							<div class="testimonials-text">Anyone can clean your pool, but the service from The Pool Services is at another level. They really care about doing a great job, so it’s always a pleasure to have them come by.</div>
							<div class="testimonials-username">Eldon C. Caron</div>
						</div>
						<div class="testimonials-item">
							<div class="testimonials-text">Great service. They really helped me out when my heater went out. They made the service and payment very convenient for me. I highly recommend this company.</div>
							<div class="testimonials-username">Paul Grant</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="request-form animation" data-animation="fadeInRight">
					<h4>SOLICITE UNA COTIZACIÓN</h4>
					<div>Nuestras cotizaciones son gratuitas, profesionales y justas. La mayoría de las cotizaciones requieren una visita al sitio. </div>
					<div id="requestSuccess">
						<p>¡Tu mensaje se envió con éxito!</p>
					</div>
					<div id="requestError">
						<p>Algo salió mal, Intentalo nuevamente.</p>
					</div>
					<form id="requestform" action="prosess-request.php">
						<input class="input-custom input-full" type="text" name="name" placeholder="Nombre:" />
						<input class="input-custom input-full" type="text" name="phone" placeholder="Teléfono:" />
						<input class="input-custom input-full" type="text" name="state" placeholder="Estado:" />
						<input class="input-custom input-full" type="text" name="street" placeholder="Calle:" />
						<input class="input-custom input-full" type="text" name="zip" placeholder="Código Postal:" />
						<button class="btn btn-light" type="submit" id="submit">ENVIAR MENSAJE</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Testimonials Block -->
</div>
<!-- // Content  -->
@endsection
</body>
</html>
