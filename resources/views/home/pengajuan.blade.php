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
						<li><a href="{{URL('simulasi')}}">Simulasi</a></li>
						<li class="active"><a href="{{URL('pengajuan')}}">Pengajuan Kredit</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ctnwp">
	<div class="wrap-sm">
		<h3 class="tblue">FORM PENGAJUAN KREDIT</h3>
		<p>Saya dengan ini mengajukan pembiayaan (kredit) untuk pembelian produk :</p>
		<h4>Jenis Produk</h4>
		<form>
			<div class="box-chooseproduct">
				<input type="hidden" name="jenisproduk" value="">
				<div class="produk-list">
					<div class="l-produk active">
						<div class="in-produk">
							<figure><img src="images/content/prod-01.jpg" alt="produk"></figure>
							<div class="desc-product">
								<h5>Pembelian Elektronik</h5>
								<button type="button" class="btn-box btn-ssm btn-yellow" data-value="pembelian elektronik">PILIH PRODUK</button>
							</div>
						</div>
					</div>
					<div class="l-produk">
						<div class="in-produk">
							<figure><img src="images/content/prod-02.jpg" alt="produk"></figure>
							<div class="desc-product">
								<h5>Pembelian Mobil</h5>
								<button type="button" class="btn-box btn-ssm btn-yellow" data-value="pembelian mobil">PILIH PRODUK</button>
							</div>
						</div>
					</div>
					<div class="l-produk">
						<div class="in-produk">
							<figure><img src="images/content/prod-03.jpg" alt="produk"></figure>
							<div class="desc-product">
								<h5>Pembelian Motor</h5>
								<button type="button" class="btn-box btn-ssm btn-yellow" data-value="pembelian motor">PILIH PRODUK</button>
							</div>
						</div>
					</div>
					<div class="l-produk">
						<div class="in-produk">
							<figure><img src="images/content/prod-04.jpg" alt="produk"></figure>
							<div class="desc-product">
								<h5>Peminjaman Modal Usaha</h5>
								<button type="button" class="btn-box btn-ssm btn-yellow" data-value="peminjaman modal usaha">PILIH PRODUK</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row_list box-form">
				<div class="col col_5 col_xsml">
					<label>Brand</label>
					<select>
						<option>Pilih brand</option>
						<option>Brand 1</option>
						<option>Brand 2</option>
						<option>Brand 3</option>
					</select>
				</div>
				<div class="col col_5 col_xsml">
					<label>Area</label>
					<select>
						<option>Pilih area</option>
						<option>Area 1</option>
						<option>Area 2</option>
						<option>Area 3</option>
					</select>
				</div>
			</div>
			<hr>

			<div class="personal-data">
				<h4>Data Pribadi</h4>
				<div class="row_list box-form">
					<div class="col col_5 col_xsml">
						<label>Nama Lengkap</label>
						<input type="text" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>Alamat</label>
						<input type="text" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>No KTP</label>
						<input type="text" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>Telephone</label>
						<input type="text" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>Email</label>
						<input type="email" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>Apakah anda pernah menggunakan produk Adira Finance</label>
						<div class="box-radio-button">
							<label class="radio-custom"><input type="radio" name="rya"> Ya</label>
							<label class="radio-custom"><input type="radio" name="rya"> Tidak</label>
						</div>
					</div>
					<div class="col col_5 col_xsml">
						<label>Pesan</label>
						<textarea></textarea>
					</div>
					<div class="col col_5 subcap col_xsml">
						<div class="left">
							<div class="g-recaptcha" data-sitekey="6Lc_GDIUAAAAABpyyiQiyG4diJiC-BDdLUL4cyLA"></div>
						</div>
						<div class="right">
							<input type="submit" name="" class="btn-box btn-lg" value="AJUKAN KREDIT">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<!-- end of middle -->
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection