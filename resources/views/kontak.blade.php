@extends('dashboard')
@section('Banner')
@endsection
@section('Content')
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8" style="height: 5%;"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center" style="margin-top: -70px;">
							<div class="home_subtitle page_subtitle">Café Paradise</div>
							<div class="home_title"><h1>Kontak Kami</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact" style="margin-top: -150px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact_title">Contact info</div>
					<div class="contact_text">
						<p>Untuk lebih lanjutnya bisa hubungi kami langsung atau datang ke lokasi kami thanks.</p>
					</div>
					<div class="contact_logo_container">
						<div class="contact_logo_title">Cafe</div>
						<div class="contact_logo_subtitle">Paradise</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact_list_container d-flex flex-column align-items-lg-center justify-content-start">
						<div class="contact_list_content">
							<ul class="contact_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Alamat</div></div>
                                    <a href="https://goo.gl/maps/uPeZrQ4NCLUJ3KjV7">Jl. Puri Cendana No.194</a>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>No.Hp</div></div>
                                    <a href="https://wa.me/6287774215757?text=Isi Pesan">+62 877-7421-5757</a>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>cafeparadise@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row google_map_row">
				<div class="col">
						<!-- Google Map -->
                    <div class="row contact-info-wrap">
                        <a href="https://goo.gl/maps/H3VdK41631EUvaFg8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63464.0087185769!2d106.97133806036331!3d-6.197497608320163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f27345fea39%3A0x1a9efb3f65009bf1!2sWarkop%20Paradise!5e0!3m2!1sid!2sid!4v1641125384222!5m2!1sid!2sid" width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
				</div>
			</div>
		</div>
	</div>
@endsection