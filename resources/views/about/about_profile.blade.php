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
		<h3 class="tblue">PROFILE PERUSAHAAN</h3>
		<h3 class="tregular">PT.Finansia Multi Finance (Kreditplus), merupakan perusahaan yang bergerak di bidang pembiayaan di Indonesia yang didirikan pada tanggal 9 Juni 1994 di Indonesia ternama di Indonesia</h3>
		<p>Kreditplus memiliki lisensi pembiayaan modal kerja, pembiayaan multi guna dan berbagai aktivitas lainnya sesuai dengan persetujuan Otoritas Jasa Keuangan. Saat ini, Kreditplus memfokuskan bisnisnya pada pembiayaan mobil, motor dan elektronik. Serta telah menjadi salah satu pemain terkemuka di industri pembiayaan yang tersebar melalui jaringan distribusi di 244 lokasi di seluruh Indonesia serta didukung oleh lebih dari 12.000 karyawan.</p>
		<div class="imgctn">
			<div class="left">
				<img src="{{URL('images/content/office-01.jpg')}}" alt="office 1">
			</div>
			<div class="right">
				<img src="{{URL('images/content/office-02.jpg')}}" alt="office 2">
			</div>
		</div>
		<p>Dalam menjalankan usahanya, Kreditplus senantiasa beradaptasi dengan perkembangan jaman. Selain pembiayaan untuk produk sepeda motor, mobil, dan elektronik yang sudah berjalan selama ini, Kreditplus juga mengembangkan penetrasi pembiayaan baru dengan menjalin kerjasama dengan e-commerce channel melalui sistem yang terintegrasi untuk melakukan transaksi online diluar transaksi tunai dan kartu kredit. Sebagai perusahaan pembiayaan, Kreditplus memberikan limit pembiayaan yang maksimal untuk beragam kategori produk dengan jangka waktu pembiayaan yang bervariatif.</p>

		<p>Kreditplus juga memberikan kemudahan dan kenyamanan untuk konsumen Kreditplus melalui kerjasama dengan lebih dari 9.000 jaringan ATM berbagai Bank (BRI, BNI, BCA dan Permata) serta Non-Bank (Kantor Pos, gerai Indomaret dan Alfamart).<br/>
		Kreditplus terus memantapkan langkah dalam bisnis pembiayaan dengan selalu mengikuti perkembangan pasar dan kondisi masyarakat dimana hal ini semakin mematangkan dan mendewasakan Perusahaan. Hal ini dapat terlihat dari pertumbuhan kinerja dan keuangan Perusahaan, serta penghargaan yang diberikan oleh publik, diantaranya dengan mendapatkan predikat dengan kinerja "Sangat Bagus" untuk Kategori Perusahaan Pembiayaan Beraset 1 Triliun ke atas versi Majalah Info Bank.</p>

		<p>Kecepatan pelayanan dalam pengajuan aplikasi, kemudahan syarat dan pembayaran yang dipertahankan oleh Perusahaan sampai dengan saat ini telah menjadi unggulan dari Kreditplus untuk bersaing dengan perusahaan pembiayan lainnya.</p>
		<br>
		<br>

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