@extends('layout')
	@section('content')
	<!-- Content  -->
	<div id="page-content">
		<!-- Block -->
		<div class="block bottom-md-margin">
			<div class="container">
				<h1 class="text-center decor color">Our Services</h1>
				<p class="text-center font18">Our team of highly trained and industry award winning technicians make over 100,000 poolside visits each year. Pool Services is the Safe, Reliable, Professional, Trustworthy, and Easy choice for all your pool service, repair and remodeling needs. </p>
				<div class="divider-xs"></div>
				<div class="row services-carousel">
					<div class="col-sm-4 animation" data-animation="fadeInLeft" data-animation-delay="0s">
						<div class="service-item">
							<div class="icon-circle">
								<div class="icon-hover"></div>
								<div class="icon icon-swimming-pool"></div>
							</div>
							<div class="service-title">
								<h4>RESIDENTIAL POOL <br>SERVICES</h4> </div>
							<div class="service-text">A swimming pool can provide the perfect backyard getaway for you and your family </div>
						</div>
					</div>
					<div class="col-sm-4 animation" data-animation="fadeInUp" data-animation-delay="0s">
						<div class="service-item">
							<div class="icon-circle">
								<div class="icon-hover"></div>
								<div class="icon icon-waterpolo"></div>
							</div>
							<div class="service-title">
								<h4>COMMERCIAL POOL <br>SERVICE</h4> </div>
							<div class="service-text"> We can provide all of your commercial pool, spa, and fountain repair, renovation, and service needs </div>
						</div>
					</div>
					<div class="col-sm-4 animation" data-animation="fadeInRight" data-animation-delay="0s">
						<div class="service-item">
							<div class="icon-circle">
								<div class="icon-hover"></div>
								<div class="icon icon-shovel"></div>
							</div>
							<div class="service-title">
								<h4>CONSTRUCTION <br> SERVICES</h4></div>
							<div class="service-text">We can help you design and build a pool that meets your unique specifications </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Block -->
		<!-- Block -->
		<div class="block bg-3">
			<div class="container">
				<h2 class="text-center decor decor-white">Pool Maintenance</h2>
				<div class="row text-icon-carousel step-animation-container">
					<div class="col-sm-6 step-animation" data-animation="fadeInLeft" data-animation-delay="0s">
						<h5 class="text-icon-hor-title">ADVICE BY PHONE</h5>
						<div class="text-icon-hor">
							<div class="text-icon-hor-icon"><i class="icon icon-handshake"></i></div>
							<div class="text-icon-hor-text">You’ll find our friendly, motivated and experienced office staff ready and trained to help answer, or get answers to many of your questions ranging from water chemistry issues to maintenance and service questions.</div>
						</div>
					</div>
					<div class="col-sm-6 step-animation" data-animation="fadeInRight" data-animation-delay="0s">
						<h5 class="text-icon-hor-title">POOL INSPECTIONS</h5>
						<div class="text-icon-hor">
							<div class="text-icon-hor-icon"><i class="icon icon-wrench"></i></div>
							<div class="text-icon-hor-text">The inspection we perform is a visual and operational inspection of the pool and equipment. An average inspection takes about an hour, sometimes less, often a little longer.</div>
						</div>
					</div>
					<div class="col-sm-6 step-animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
						<h5 class="text-icon-hor-title">DRAIN & CLEAN</h5>
						<div class="text-icon-hor">
							<div class="text-icon-hor-icon"><i class="icon icon-sweep"></i></div>
							<div class="text-icon-hor-text">A Drain & Clean can revitalize your pool’s plaster or painted finish, and extend the need for a new surface. It can help make your water chemistry easier to balance.It is generally recommended every 5 to 7 years.</div>
						</div>
					</div>
					<div class="col-sm-6 step-animation" data-animation="fadeInRight" data-animation-delay="0.2s">
						<h5 class="text-icon-hor-title">WATER ANALYSIS</h5>
						<div class="text-icon-hor">
							<div class="text-icon-hor-icon"><i class="icon icon-test-tube"></i></div>
							<div class="text-icon-hor-text">Take the guess work out of balancing your swimming pool's water chemistry, bring us a water sample (at least 2 cups) and let our trained staff test it for you. Its easy to see that a green pool needs attention...</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Block -->
		<!-- Category Block -->
		<div class="block bottom-sm-margin">
			<div class="container">
			<h2 class="text-center decor color">Featured Services</h2>
				<div class="divider-xs"></div>
				<div class="row category-carousel">
					<div class="col-sm-6 col-md-4">
						<div class="category-item animation" data-animation="fadeInLeft" data-animation-delay="0s">
							<div class="category-image"> <img src="images/category-img-01.jpg" alt="" class="img-responsive">
								<h5 class="category-title">Repairs</h5>
								<div class="wave-wrapper">
									<div class="wave"></div>
								</div>
							</div>
							<div class="category-text">Our pool repair services can help you fix any leak, valve replacement or pump malfunctions<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 animation" data-animation="fadeIn" data-animation-delay="0s">
						<div class="category-item">
							<div class="category-image"> <img src="images/category-img-02.jpg" alt="" class="img-responsive">
								<h5 class="category-title">Renovations</h5>
								<div class="wave-wrapper">
									<div class="wave"></div>
								</div>
							</div>
							<div class="category-text">We can help design and restore old pools to look brand new!<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 animation" data-animation="fadeInRight" data-animation-delay="0s">
						<div class="category-item">
							<div class="category-image"> <img src="images/category-img-03.jpg" alt="" class="img-responsive">
								<h5 class="category-title">Equipment Install</h5>
								<div class="wave-wrapper">
									<div class="wave"></div>
								</div>
							</div>
							<div class="category-text">Our expert pool technicians make it easy to install your new pool equipment<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="category-item animation" data-animation="fadeInLeft" data-animation-delay="0s">
							<div class="category-image"> <img src="images/category-img-04.jpg" alt="" class="img-responsive">
								<h5 class="category-title">Interior
									<br> Pool Surface</h5>
								<div class="wave-wrapper">
									<div class="wave"></div>
								</div>
							</div>
							<div class="category-text">When it comes to finding the right interior pool surface for your design <span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="category-item animation" data-animation="fadeIn" data-animation-delay="0s">
							<div class="category-image"> <img src="images/category-img-05.jpg" alt="" class="img-responsive">
								<h5 class="category-title">Pressure Wash</h5>
								<div class="wave-wrapper">
									<div class="wave"></div>
								</div>
							</div>
							<div class="category-text">Pressure washing a pool is an effective way to remove dirt and even algae<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="category-item animation" data-animation="fadeInRight" data-animation-delay="0s">
							<div class="category-image"> <img src="images/category-img-06.jpg" alt="" class="img-responsive">
								<h5 class="category-title">Pool Tile</h5>
								<div class="wave-wrapper">
									<div class="wave"></div>
								</div>
							</div>
							<div class="category-text">We carry a wide variety of ceramic, glass and natural tile for you to choose from<span class="category-more-link"><a href=""><span class="icon icon-right-arrow"></span></a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Category Block -->
	</div>
	<!-- // Content  -->
@endsection
</body>
</html>