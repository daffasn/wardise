@extends('dashboard')
@section('Banner')
@endsection
@section('Content')
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/menu.jpg" data-speed="0.8" style="height: 5%;"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center" style="margin-top: -70px;">
							<div class="home_subtitle page_subtitle">Café Paradise</div>
							<div class="home_title"><h1>Menu</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- The Menu -->
	<h1 class="text-center">MENU YANG DISEDIAKAN</h1>
	<section id="fh5co-work" >
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Makanan</h2>
				</div>
			</div>
			<div class="row row-bottom-padded-sm">

				@forelse ($makanan as $item)

				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="{{asset('storage/images/'.$item->gambar)}}" class="fh5co-project-item image-popup to-animate">
						<img src="{{asset('storage/images/'.$item->gambar)}}" alt="Image" style="max-width: 100%; height:270px;" class="mx-auto d-block">
						<div class="fh5co-text text-center">
						<h2>{{ $item->nama }}</h2>
						<span style="color: #000;">Rp. {{ $item->harga }}</span>
						</div>
					</a>
				</div>

				@empty
                    
				@endforelse
			</div>
		</div>
	</section>

	<section id="fh5co-work" style="margin-top: -80px;">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Minuman</h2>
				</div>
			</div>
			<div class="row row-bottom-padded-sm">

				@forelse ($minuman as $item)

				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="{{asset('storage/images/'.$item->gambar)}}" class="fh5co-project-item image-popup to-animate">
						<img src="{{asset('storage/images/'.$item->gambar)}}" alt="Image" style="max-width: 100%; height:270px;" class="mx-auto d-block">
						<div class="fh5co-text text-center">
						<h2>{{ $item->nama }}</h2>
						<span style="color: #000;">Rp. {{ $item->harga }}</span>
						</div>
					</a>
				</div>

				@empty
                    
				@endforelse
			</div>
		</div>
	</section>

@endsection
