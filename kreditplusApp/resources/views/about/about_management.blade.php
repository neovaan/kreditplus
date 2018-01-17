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
		<h3 class="tblue">MANAJEMEN</h3>
		<p>Kreditplus memiliki lisensi pembiayaan modal kerja, pembiayaan multi guna dan berbagai aktivitas lainnya sesuai dengan persetujuan Otoritas Jasa Keuangan. Saat ini, Kreditplus memfokuskan bisnisnya pada pembiayaan mobil, motor dan elektronik. Serta telah menjadi salah satu pemain terkemuka di industri pembiayaan yang tersebar melalui jaringan distribusi di 244 lokasi di seluruh Indonesia serta didukung oleh lebih dari 12.000 karyawan.</p>
		<br>
		<br>
		<div class="a-center">
			<img src="{{URL('images/content/management.png')}}">
		</div>
	</div>
</section>
<!-- end of middle -->
@endsection