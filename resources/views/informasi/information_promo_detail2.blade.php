@extends('base')
@section('content')
<section class="banner">
	<figure>
		<img src="images/content/banner-promo2.jpg" alt="banner">
	</figure>
	<div class="submenu-banner">
		<div class="wrap-sm">
			<div class="box-submenu">
				<div class="btn-submenu">Submenu</div>
				<div class="drop-submenu">
					<ul>
						<li class="active"><a href="information_promo_detail2.php">Kreditplus Mobile</a></li>
						<li><a href="information_promo_detail_mu.php">KreditMu</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ctnwp">
	<div class="wrap-sm">
		<h3 class="tblue">FITUR KREDITPLUS MOBILE</h3>
		<h3 class="tregular">Kreditplus Mobile adalah aplikasi jasa pembiayaan konsumen dari Kreditplus yang menawarkan berbagai kemudahan dan manfaat bagi seluruh pengguna (member maupun non-member Kreditplus) dalam satu genggaman.</h3>
		<p>Sesuai dengan motto kami yaitu cepat, mudah, dan aman, nikmati kecepatan informasi dan kemudahan pengajuan kredit sampai dengan pembayaran langsung dari smartphone anda.</p>
		<img src="{{URL('images/content/promo-img2.jpg')}}" alt="information">
		<br>
		<br>
		<p>Anda dapat mulai mengembangkan usaha impian anda dengan layanan modal usaha maupun multiguna motor dan mobil dari Kreditplus serta penuhi semua kebutuhan elektronik anda dengan layanan multiguna barang.</p>
		<p>Sementara tersedia untuk wilayah Jabodetabek.<br/>
		Informasi lebih lanjut hubungi <a href="" class="link-black"><b>Contact Center KreditPlus 1500 605.</b></a></p>

		<div class="downloadapps margtop">
			<div class="left">Download Kreditplus Mobile di google Play</div>
			<div class="right">
				<a href="" target="_blank"><img src="{{URL('images/content/google-play.png')}}" alt="google play apps"></a>
			</div>
		</div>
		
	</div>
</section>
<!-- end of middle -->
@endsection