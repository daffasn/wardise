@extends('dashboard')
@section('Banner')
@endsection
@section('Content')
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/home.jpg" data-speed="0.8" style="height: 120%;"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center mt-4">
							<div class="home_subtitle page_subtitle ml-auto mr-auto">Selamat Datang di Wardise</div>
							<div class="home_title ml-auto mr-auto mt-3"><h1 style="font-size: 60px;">Tempatnya Asik, Nyaman, dan Santuy</h1></div>
							<div class="home_text ml-auto mr-auto">
								<p style="font-size: 20px;">24 Hours</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll_icon" style="margin-bottom: -100px;"></div>
	</div>

	{{-- Fasilitas --}}
	
	<div class="colorlib-featured">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 offset-sm-1 text-center colorlib-heading mb-5" style="margin-top: 150px;">
					<h1><strong> Fasilitas yang disediakan </strong></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 text-center">
					<div class="featured">
						<div class="featured-img featured-img-2" style="background-image:url(images/wifi.jpg) ">
						</div>
					</div>
					<h2 style="color: #b49383"><b>WiFi</b></h2>
				</div>
				<div class="col-sm-4 text-center">
					<div class="featured">
						<div class="featured-img featured-img-2" style="background-image:url(images/unostacko.jpg)" >
						</div>
					</div>
					<h2 style="color: #b49383"><b>Stacko Uno</b></h2>
				</div>
				<div class="col-sm-4 text-center">
					<div class="featured">
						<div class="featured-img featured-img-2" style="background-image:url(images/listrik.png)">
						</div>
					</div>
					<h2 style="color: #b49383"><b>Terminal Listrik</b></h2>
				</div>
				<div class="col-sm-4 text-center">
					<div class="featured">
						<div class="featured-img featured-img-2" style="background-image:url(images/uno.jpg)">
						</div>
					</div>
					<h2 style="color: #b49383"><b>Kartu UNO</b></h2>
				</div>
				<div class="col-sm-4 text-center">
					<div class="featured">
						<div class="featured-img featured-img-2" style="background-image:url(images/striking.png)">
						</div>
					</div>
					<h2 style="color: #b49383"><b>Karambol</b></h2>
				</div>
				<div class="col-sm-4 text-center">
					<div class="featured">
						<div class="featured-img featured-img-2" style="background-image:url(images/catur.jpg)">
						</div>
					</div>
					<h2 style="color: #b49383"><b>Catur</b></h2>
				</div>
			</div>
		</div>
	</div>

	<!-- Signature Dish -->

	<div class="sig">
		<div class="sig_content_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="sig_content">
							<div class="sig_subtitle page_subtitle">Menu Kombinasi Favorite</div>
							<div class="sig_title"><h1>Paket Nongkrong</h1></div>
							<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
							<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
								<div class="sig_name">Makanan Fishroll & Minuman Cofee</div>
								<div class="sig_price ml-auto">Rp.20.000</div>
							</div>
							<div class="sig_content_list">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>FishRoll isi 7</li>
									<li>Cofee + susu</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sig_image_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5">
						<div class="sig_image">
							<div class="background_image" style="background-image:url(images/favorite.png)"></div>
							<img src="images/sig.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- dapa tolong copasin testimoni elu kesini pake background ini yaa -->
	<h1 class="page_subtitle text-center" style="margin-top: 40px;">What They Say</h1>
	<div class="section_title text-center"><h1><b>About Us</b></h1></div>
	<div class="testimonials" style="margin-top: 70px;">

		@forelse ($testimonis as $item)
			
		<div class="card">
			<div class="layer"></div>
			<div class="content">
				<p>{{ $item->deskripsi }}</p>
					<div class="image mt-3">
						<img src="{{asset('storage/images/'.$item->gambar)}}" style="height: 100px;">
					</div>
					<div class="details mt-3">
						<h2>{{ $item->nama }}<br><span>{{ $item->peran }}</span></h2>
					</div>
				</div>
			</div>
		
		

		@empty
				
		@endforelse
		
		</div>
	
    @endsection