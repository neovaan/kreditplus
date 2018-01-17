@extends('base')
@section('content')
<!-- middle -->
<section class="banner">
	<figure>
		<img src="{{URL('images/content/banner-motor.jpg')}}" alt="banner">
	</figure>
	<div class="submenu-banner">
		<div class="wrap-sm">
			<div class="box-submenu">
				<div class="btn-submenu">Submenu</div>
				<div class="drop-submenu">
					@include('produk.menu')
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ctnwp">
	<div class="wrap-sm">
		<h3 class="tblue">PEMBELIAN MOTOR</h3>
		<h3 class="tregular">Kredit Plus memberikan solusi pembiayaan motor anda dengan proses yang mudah, cepat dan aman.</h3>

		Berbagai kemudahan yang ditawarkan Kreditplus yaitu :
		<ol>
			<li>3 jam sudah bisa transaksi</li>
			<li>Membiayai kendaraan Jepang ataupun non jepang</li>
			<li>Asuransi atas mobil & motor yang dibiayai sepanjang masa pembiayaan</li>
			<li>Asuransi jiwa atas konsumen yang mengajukan pembiayaan</li>
			<li>Dapat membiayai kendaraan hingga 10 tahun termasuk tenor</li>
			<li>Jangka waktu pembiayaan mulai dari 9 hingga 47 bulan</li>
			<li>Pembayaran angsuran yang mudah melalui berbagai payment point</li>
		</ol>
		
		<br>

		Berikut adalah persyaratan aplikasi pengajuan kredit motor:
		<br>
		<br>
		<table >
			<thead>
				<tr>
					<th class="a-left">Persyaratan Umum</th>
					<th>Karyawan</th>
					<th>Wiraswasta</th>
					<th>Profesional</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Fotocopy KTP Pemohon</td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
				</tr>
				<tr>
					<td>Fotocopy Surat Ijin Usaha Perdagangan (SIUP)</td>
					<td class="a-center">&nbsp;</td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
				</tr>
				<tr>
					<td>Fotocopy Nomor Pokok Wajib Pajak (NPWP)</td>
					<td class="a-center">&nbsp;</td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
				</tr>
				<tr>
					<td>Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir</td>
					<td class="a-center">&nbsp;</td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
				</tr>
				<tr>
					<td>Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )</td>
					<td class="a-center"><i class="icwp ic_checked"></i></td>
					<td class="a-center">&nbsp;</td>
					<td class="a-center">&nbsp;</td>
				</tr>
			</tbody>
		</table>

		<p>Informasi lebih lanjut mengenai pembiayaan Kreditplus dapat diperoleh melalui petugas kami di toko/dealer rekanan kami atau langsung menghubungi kantor cabang krediplus terdekat.</p>

		<div class="adv" style="background-image: url('{{URL('images/content/adv.jpg')}}');">
			<div class="inadv">
				<h4>PEMBIAYAAN KREDIT YANG MUDAH, CEPAT, AMAN</h4>
				<a href="" class="btn-box btn-sm">AJUKAN KREDIT</a>
			</div>
		</div>
		<br>
		<div class="related-product">
			<h4>Produk Yang Lainnya</h4>
			<div class="prod-list-h">
				<div class="list-prod">
					<a href="">
						<figure><img src="{{URL('images/content/prod-05.jpg')}}" alt="product 1"></figure>
						<div class="desc-prod">
							<h4>PEMBELIAN ELEKTRONIK</h4>
						</div>
					</a>
				</div>
				<div class="list-prod">
					<a href="">
						<figure><img src="{{URL('images/content/prod-02.jpg')}}" alt="product 2"></figure>
						<div class="desc-prod">
							<h4>PEMBELIAN MOBIL</h4>
						</div>
					</a>
				</div>
				<div class="list-prod">
					<a href="">
						<figure><img src="{URL('images/content/prod-04.jpg')}}" alt="product 3"></figure>
						<div class="desc-prod">
							<h4>PEMINJAMAN MODAL USAHA</h4>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of middle -->
@endsection