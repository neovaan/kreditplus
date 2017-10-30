@extends('base')
@section('content')
<!-- middle -->
<section class="banner">
	<figure>
		<img src="images/content/banner-promo.jpg" alt="banner">
	</figure>
	<div class="submenu-banner">
		<div class="wrap-sm">
			<div class="box-submenu">
				<div class="btn-submenu">Submenu</div>
				<div class="drop-submenu">
					<ul>
						<li class="active"><a href="">Promo</a></li>
						<li><a href="">Kredit</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ctnwp">
	<div class="wrap-sm">
		<div class="title-info">
			<div class="left">
				<h3 class="tblue">INFORMASI</h3>
			</div>
			<div class="right">
				<label>Tampilkan : </label>
				<select>
					<option>Promo & Berita</option>
					<option>Promo</option>
					<option>Berita</option>
				</select>
			</div>
		</div>
		<div class="promo-list">
			<div class="list-promo">
				<figure><img src="images/content/promo-01.jpg" alt="promo 1"></figure>
				<div class="desc-promo">
					<a href="" class="lbl lyellow lbl-sm">PROMO</a>
					<h4>Memilih Mobil Sesuai Dengan Kebutuhan Keluarga</h4>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
					<a href="information_promo_detail.php" class="link-blue">Lihat Selengkapnya</a>
				</div>
			</div>
			<div class="list-promo">
				<figure><img src="images/content/promo-02.jpg" alt="promo 2"></figure>
				<div class="desc-promo">
					<a href="" class="lbl lblue lbl-sm">BERITA</a>
					<h4>Ini Dia Tips Belanja Pintar Dengan Uang THR</h4>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
					<a href="information_promo_detail.php" class="link-blue">Lihat Selengkapnya</a>
				</div>
			</div>
			<div class="list-promo">
				<figure><img src="images/content/promo-01.jpg" alt="promo 1"></figure>
				<div class="desc-promo">
					<a href="" class="lbl lyellow lbl-sm">PROMO</a>
					<h4>Memilih Mobil Sesuai Dengan Kebutuhan Keluarga</h4>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
					<a href="information_promo_detail.php" class="link-blue">Lihat Selengkapnya</a>
				</div>
			</div>
			<div class="list-promo">
				<figure><img src="images/content/promo-02.jpg" alt="promo 2"></figure>
				<div class="desc-promo">
					<a href="" class="lbl lblue lbl-sm">BERITA</a>
					<h4>Ini Dia Tips Belanja Pintar Dengan Uang THR</h4>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
					<a href="information_promo_detail.php" class="link-blue">Lihat Selengkapnya</a>
				</div>
			</div>
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
@endsection