@extends('layout')
	@section('content')
	<!-- Content  -->
	<div id="page-content">
		<!-- Block -->
		<div class="block">
			<div class="container">
				<h1 class="text-center decor color">Galeria</h1>
				<p class="text-center font18">Pool finishes offer a range of effects from fun to elegant. Pebble, Beadcrete, and many more options can give you just the look you want.Combine them with custom mosaic and tile work for a truly special pool!</p>
			</div>
			<div class="divider"></div>
			<div class="gallery gallery-isotope" id="gallery">
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-01.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-01.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item doubleW doubleH">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-02.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-02.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-03.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-03.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-04.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-04.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item doubleW">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-05.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-05.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-06.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-06.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item doubleH">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-07.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-07.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-08.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-08.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-09.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-09.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item doubleW doubleH">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-10.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-10.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image doubleH"> <img src="images/gallery/gallery-img-11.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-11.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-12.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-12.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-13.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-13.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-14.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-14.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item doubleH">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-15.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-15.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-16.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-16.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-17.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-17.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-18.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-18.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-19.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-19.jpg">zoom</a> </div>
				</div>
				<div class="gallery__item">
					<div class="gallery__item__image"> <img src="images/gallery/gallery-img-20.jpg" alt="" /> <a class="btn btn-lg" href="images/gallery/gallery-img-20.jpg">zoom</a> </div>
				</div>

			</div>
			<div class="divider divider--md"></div>
			<div class="text-center"><a class="btn btn--wd view-more-gallery" data-load="gallery-more-ajax.txt">More photos</a></div>
			<div id="galleryPreload"></div>
		</div>
		<!-- //Block -->

	</div>
	<!-- // Content  -->
@endsection
@section('galeria')
<script src="js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="js/plugins/isotope.pkgd.min.js"></script>
@endsection
</body>
</html>


