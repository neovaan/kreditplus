@extends('base')
@section('content')
<!-- middle -->
<section class="banner">
	<figure>
		<img src="{{URL('images/content/banner-about.jpg')}}" alt="banner">
	</figure>
	<div class="submenu-banner">
		<div class="wrap-sm">
			<div class="box-submenu">
				<div class="btn-submenu">Submenu</div>
				<div class="drop-submenu">
					@include('about.menu')
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ctnwp">
	<div class="wrap-sm">
		<h3 class="tblue">PRESTASI</h3>
		<h3 class="tregular">This is Photoshop's version  of Lorem Ipsum.</h3>
		<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>

		<div class="box-list-achievement">
			<?php for ($i=0; $i < 3; $i++) { ?>
			<div class="list-achievement">
				<div class="in-achievement btn-poppres">
					<h4>Perusahaan Pembiayaan Terbaik No 1</h4>
					<p>Ajang Infobank Multifinance Award 2011</p>

					<div class="inpop">
						<figure><img src="{{URL('images/content/certificate.jpg')}}" alt="Perusahaan Pembiayaan Terbaik No 1"></figure>
						<div class="dpres">
							<h5>Perusahaan Pembiayaan Terbaik No 1</h5>
							<p>Ajang Infobank Multifinance Award 2011</p>
						</div>
					</div>
				</div>
			</div>
			<div class="list-achievement">
				<div class="in-achievement btn-poppres">
					<h4>Perusahaan Pembiayaan Terbaik No 2</h4>
					<p>Ajang Infobank Multifinance Award 2011</p>

					<div class="inpop">
						<figure><img src="{{URL('images/content/certificate.jpg')}}" alt="Perusahaan Pembiayaan Terbaik No 1"></figure>
						<div class="dpres">
							<h5>Perusahaan Pembiayaan Terbaik No 2</h5>
							<p>Ajang Infobank Multifinance Award 2011</p>
						</div>
					</div>
				</div>
			</div>
			<div class="list-achievement">
				<div class="in-achievement btn-poppres">
					<h4>Perusahaan Pembiayaan Terbaik No 3</h4>
					<p>Ajang Infobank Multifinance Award 2011</p>

					<div class="inpop">
						<figure><img src="{{URL('images/content/certificate.jpg')}}" alt="Perusahaan Pembiayaan Terbaik No 1"></figure>
						<div class="dpres">
							<h5>Perusahaan Pembiayaan Terbaik No 3</h5>
							<p>Ajang Infobank Multifinance Award 2011</p>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

		<div class="pagination">
			<a href="" class="prev">Previous</a>
			<a href="" class="active">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="">5</a>
			<a href="" class="next">Next</a>
		</div>
	</div>
</section>
<!-- end of middle -->
<div class="popup" id="pop-prestasi">
	<div class="in-popup">
		<div class="btn-close"></div>
		<div class="wrappop shpop">
			<figure><img src="{{URL('images/content/certificate.jpg')}}" alt="Perusahaan Pembiayaan Terbaik No 1"></figure>
			<div class="dpres">
				<h5>Perusahaan Pembiayaan Terbaik No 1</h5>
				<p>Ajang Infobank Multifinance Award 2011</p>
			</div>
		</div>
	</div>
</div>
@endsection