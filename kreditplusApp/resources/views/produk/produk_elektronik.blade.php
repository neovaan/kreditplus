@extends('base')
@section('content')
<section class="banner">
	<figure>
		<img src="{{URL('images/content/banner-produk.jpg')}}" alt="banner">
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
		<h3 class="tblue">PEMBELIAN ELEKTRONIK</h3>
		<h3 class="tregular">Kreditplus membantu konsumen mewujudkan impian untuk memiliki barang-barang elektronik dan furniture berkualitas dengan harga yang terjangkau.</h3>

		Kreditplus menyediakan Berbagai Kemudahan:
		<ol>
			<li>Persyaratan dokumen yang sederhana.</li>
			<li>Proses aplikasi yang mudah dan cepat.</li>
			<li>Beragam program promosi.</li>
			<li>Tempat pembayaran angsuran yang tersebar luas</li>
		</ol>
		
		<br>
		<p>Informasi lebih lanjut seputar fitur pembiayaan Kreditplus dapat diperoleh melalui petugas pemasaran di toko-toko rekanan kami atau langsung menghubungi kantor cabang Kreditplus terdekat.</p>

		Berikut adalah persyaratan aplikasi pengajuan kredit elektronik :
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
					<td data-title="Persyaratan Umum">Fotocopy KTP Pemohon</td>
					<td data-title="Karyawan" class="a-center"><i class="icwp ic_checked"></i></td>
					<td data-title="Wiraswasta" class="a-center"><i class="icwp ic_checked"></i></td>
					<td data-title="Profesional" class="a-center"><i class="icwp ic_checked"></i></td>
				</tr>
				<tr>
					<td data-title="Persyaratan Umum">Fotocopy Surat Ijin Usaha Perdagangan (SIUP)</td>
					<td data-title="Karyawan" class="a-center">&nbsp;</td>
					<td data-title="Wiraswasta" class="a-center"><i class="icwp ic_checked"></i></td>
					<td data-title="Profesional" class="a-center"><i class="icwp ic_checked"></i></td>
				</tr>
				<tr>
					<td data-title="Persyaratan Umum">Fotocopy Nomor Pokok Wajib Pajak (NPWP)</td>
					<td data-title="Karyawan" class="a-center">&nbsp;</td>
					<td data-title="Wiraswasta" class="a-center"><i class="icwp ic_checked"></i></td>
					<td data-title="Profesional" class="a-center"><i class="icwp ic_checked"></i></td>
				</tr>
				<tr>
					<td data-title="Persyaratan Umum">Fotocopy Rekening Koran/Rekening Tabungan 3 Bulan Terakhir</td>
					<td data-title="Karyawan" class="a-center">&nbsp;</td>
					<td data-title="Wiraswasta" class="a-center"><i class="icwp ic_checked"></i></td>
					<td data-title="Profesional" class="a-center"><i class="icwp ic_checked"></i></td>
				</tr>
				<tr>
					<td data-title="Persyaratan Umum">Fotocopy Slip Gaji atau surat Keterangan Penghasilan Resmi dan Sah ( Bulan Terakhir )</td>
					<td data-title="Karyawan" class="a-center"><i class="icwp ic_checked"></i></td>
					<td data-title="Wiraswasta" class="a-center">&nbsp;</td>
					<td data-title="Profesional" class="a-center">&nbsp;</td>
				</tr>
			</tbody>
		</table>

		<div class="adv" style="background-image: url('images/content/adv.jpg');">
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
						<figure><img src="{{URL('images/content/prod-02.jpg')}}" alt="product 1"></figure>
						<div class="desc-prod">
							<h4>PEMBELIAN MOBIL</h4>
						</div>
					</a>
				</div>
				<div class="list-prod">
					<a href="">
						<figure><img src="{{URL('images/content/prod-03.jpg')}}" alt="product 2"></figure>
						<div class="desc-prod">
							<h4>PEMBELIAN MOTOR</h4>
						</div>
					</a>
				</div>
				<div class="list-prod">
					<a href="">
						<figure><img src="{{URL('images/content/prod-04.jpg')}}" alt="product 3"></figure>
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