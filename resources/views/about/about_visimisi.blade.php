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
		<h3 class="tblue">VISI MISI & NILAI-NILAI PERUSAHAAN</h3>
		<div class="box-vis">
			<div class="left">
				<div class="box-nilvis">
					<div class="icon-nilvis icwp ic_vision"></div>
					<div class="desc-nilvis">
						<h3 class="tregular">Visi</h3>
						<p>Menjadi Perusahaan Pembiayaan Yang Terbaik di Indonesia</p>
					</div>
				</div>
				<div class="box-nilvis">
					<div class="icon-nilvis icwp ic_mision"></div>
					<div class="desc-nilvis">
						<h3 class="tregular">Misi</h3>
						<ol>
							<li>Menyediakan produk dan jasa pembiayaan multiguna yang terbaik untuk masyarakat</li>
							<li>Membangun kerangka bagi setiap individu untuk belajar, berkembang, mewujudkan dan menciptakan nilai serta kesempatan</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="box-nilvis">
					<div class="icon-nilvis icwp ic_value"></div>
					<div class="desc-nilvis">
						<h3 class="tregular">Nilai nilai</h3>
						<ol>
							<li>Integritas</li>
							<li>Kerjasama</li>
							<li>Peduli dan bertanggung jawab</li>
							<li>Lakukan dengan benar dan mengembangkan diri</li>
							<li>Sikap 'Pasti Bisa' (Can-do Attitude)</li>
							<li>Kesederhanaan</li>
							<li>Rajin</li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<div class="adv" style="background-image: url('{{URL('images/content/adv.jpg')}}');">
			<div class="inadv">
				<h4>PEMBIAYAAN KREDIT YANG MUDAH, CEPAT, AMAN</h4>
				<a href="" class="btn-box btn-sm">AJUKAN KREDIT</a>
			</div>
		</div>
	</div>
</section>
<!-- end of middle -->
@endsection