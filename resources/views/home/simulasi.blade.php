@extends('base')
@section('content')
<!-- middle -->
<section class="banner">
	<figure>
		<img src="images/content/banner-simulasi.jpg" alt="banner">
	</figure>
	<div class="submenu-banner">
		<div class="wrap-sm">
			<div class="box-submenu">
				<div class="btn-submenu">Submenu</div>
				<div class="drop-submenu">
					<ul>
						<li class="active"><a href="{{URL('simulasi')}}">Simulasi</a></li>
						<li><a href="{{URL('pengajuan')}}">Pengajuan Kredit</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ctnwp">
	<div class="wrap-sm">
		<h3 class="tblue">SIMULASI KREDIT</h3>
		
		<div class="career-form box-form">
			<div class="left">
				<form method="post">
					<div class="row">
						<label>Tenor</label>
						<select>
							<option>9 Bulan</option>
							<option>12 Bulan</option>
						</select>
					</div>
					<div class="row">
						<label>Harga</label>
						<input type="text" name="" placeholder="Rp 1.000.000,-">
					</div>
					<div class="row">
						<label>Uang Muka</label>
						<input type="text" name="" placeholder="Nilai %">
					</div>
					<div class="row">
						<label>Bunga</label>
						<input type="email" name="" placeholder="Min 2%">
					</div>
					<div class="row">
						<label>Admin Fee</label>
						<label class="block"><strong>Rp 100.000,-</strong></label>
					</div>
					<div class="row submit">
						<input type="submit" name="" class="btn-box btn-lg" value="SIMULASI">
					</div>
				</form>
			</div>
			<div class="right">
				<div class="address-box a-center">
					<h4 class="reg">Angsuran Perbulan</h4>
					<h3>Rp 2.000.000,-</h3>
					<br>
					<h4 class="reg">Angsuran Awal</h4>
					<h3>Rp 20.000.000,-</h3>
				</div>
				<div class="notsim">*Simulasi ini hanya sebagai ilustrasi</div>
			</div>
		</div>
		
	</div>
</section>
<!-- end of middle -->
@endsection