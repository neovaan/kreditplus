<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 5:40 PM
 */ ?>

@extends('webarq::themes.front-end.layout.index')
@section('content')
@if ([] !== $shareSections)
    @foreach ($shareSections as $section)
      @if($section->getKey() == 'slide')
        {!! $section->toHtml() !!}
      @endif          
    @endforeach
@endif
@if ([] !== $shareSections)
    @foreach ($shareSections as $section)
      @if($section->getKey() != 'slide')
        {!! $section->toHtml() !!}
      @endif          
    @endforeach
@else
    <section class="servicehome" id="scbtm">
	<div class="trig-service"></div>
	<div class="wrapper">
		<div class="box-servicehome">
			<div class="left-service">
				<div class="ctn-service">
					<h4 class="tblue a-from-left" delay=".4" trigger-anim=".trig-service">LAYANAN KREDITPLUS</h4>
					<h2 class="a-from-left" delay=".5" trigger-anim=".trig-service">Kreditplus merupakan perusahaan yang bergerak di bidang pembiayaan </h2>
					<p class="a-from-left" delay=".6" trigger-anim=".trig-service">Kreditplus didirikan pada 9 Juni 1994 dan memiliki lisensi pembiayaan modal kerja. Saat ini bisnis Kreditplus fokus pada pembiayaan mobil, motor, dan elektronik. berikut adalah fitur kreditplus yang mungkin membantu anda</p>
				</div>
				<div class="box-simservice">
					<div class="list-simservice a-from-bottom" delay=".9" trigger-anim=".trig-service">
						<a href="{{URL('contact')}}">
							<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/ic_office.png')}}" alt="kantor cabang"></figure>
							<span>Kantor Cabang</span>
						</a>
					</div>
					<div class="list-simservice a-from-bottom" delay="1" trigger-anim=".trig-service">
						<a href="{{URL('simulasi')}}">
							<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/ic_simulation.png')}}" alt="simulasi kredit"></figure>
							<span>Simulasi Kredit</span>
						</a>
					</div>
					<div class="list-simservice a-from-bottom" delay="1.1" trigger-anim=".trig-service">
						<a href="tel:02129333646">
							<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/ic_phone.png')}}" alt="telepon hotline"></figure>
							<span>Telepon Hotline</span>
						</a>
					</div>
				</div>
			</div>
			<div class="right-service">
				<div class="mcycle"><img src="{{URL::asset('vendor/webarq/front-end/images/content/motorcycle-img.png')}}" alt="motorcycle"></div>
				<div class="scar"><img src="{{URL::asset('vendor/webarq/front-end/images/content/car-img.png')}}" alt="car"></div>
				<div class="dots"></div>
				<div class="inright-service">
					<div class="servicekredit scbtm">
						<span>Layanan KreditPlus</span>
						<div class="drop-servicekredit">
							<div class="list-servicekredit"><a href="">Layanan 1</a></div>
							<div class="list-servicekredit"><a href="">Layanan 2</a></div>
						</div>
					</div>
					<div class="ctn-kreright">
						<h2 class="a-from-right" delay="1.8" trigger-anim=".trig-service">Belanja Nyaman Tanpa Tunai</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="produkkredit">
	<div class="trig-produk"></div>
	<div class="inprodukkredit a-from-bottom" delay=".3" trigger-anim=".trig-produk" style="background-image: url('<?php echo URL::asset("vendor/webarq/front-end/images/content/bg-kredibilitas.jpg");?>');">
		<div class="bgcirc"></div>
		<div class="inprokre">
			<h3 class="a-from-bottom" delay=".8" trigger-anim=".trig-produk">Produk Kreditplus</h3>
			<div class="circwhite">
				<div class="box-list-product">
					<div class="list-product">
						<a href="{{URL('produk')}}">
							<div class="in-product">
								<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/prod-01.jpg')}}" alt="Pembelian Elektronik"></figure>
								<div class="desc">
									<h4>Pembelian Elektronik</h4>
									<p>This is Photoshop's version  of Lorem</p>
								</div>
							</div>
						</a>
					</div>
					<div class="list-product">
						<a href="{{URL('produk-mobil')}}">
							<div class="in-product">
								<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/prod-02.jpg')}}" alt="Pembelian Mobil"></figure>
								<div class="desc">
									<h4>Pembelian Mobil</h4>
									<p>This is Photoshop's version  of Lorem</p>
								</div>
							</div>
						</a>
					</div>
					<div class="list-product">
						<a href="{{URL('produk-motor')}}">
							<div class="in-product">
								<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/prod-03.jpg')}}" alt="Pembelian Motor"></figure>
								<div class="desc">
									<h4>Pembelian Motor</h4>
									<p>This is Photoshop's version  of Lorem</p>
								</div>
							</div>
						</a>
					</div>
					<div class="list-product">
						<a href="{{URL('pinjaman-usaha')}}">
							<div class="in-product">
								<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/prod-04.jpg')}}" alt="Peminjaman Modal Usaha"></figure>
								<div class="desc">
									<h4>Peminjaman Modal Usaha</h4>
									<p>This is Photoshop's version  of Lorem</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="infohome">
	<div class="trig-info"></div>
	<div class="wrapper">
		<div class="title-infohome a-from-left" delay=".3" trigger-anim=".trig-info">
			<h3>INFORMASI</h3>
			<a href="">Lihat Semua</a>
		</div>
		<div class="box-infohome">
			<div class="lg-info a-from-left" delay=".5" trigger-anim=".trig-info">
				<a href="{{URL('informasi')}}">
					<figure>
						<img src="{{URL::asset('vendor/webarq/front-end/images/content/news-lg-01.jpg')}}" alt="promo">
						<span class="lbl">PROMO</span>
					</figure>
					<div class="desc-lg-info">
						<h4>Beli Sekarang Bayar Nanti</h4>
						<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec s</p>
					</div>
				</a>
			</div>
			<div class="sm-info">
				<div class="box-list-info-sm">
					<div class="list-info-sm a-from-right" delay=".8" trigger-anim=".trig-info">
						<a href="{{URL('informasi')}}">
							<figure>
								<img src="{{URL::asset('vendor/webarq/front-end/images/content/news-thumb-01.jpg')}}" alt="berita">
								<span class="lbl lblue">BERITA</span>
							</figure>
							<div class="desc-sm-info">
								<h4>Memilih Mobil Sesuai Dengan Kebutuhan Keluarga</h4>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
								<span class="link-blue">Lihat Selengkapnya</span>
							</div>
						</a>
					</div>
					<div class="list-info-sm a-from-right" delay=".9" trigger-anim=".trig-info">
						<a href="{{URL('informasi')}}">
							<figure>
								<img src="{{URL::asset('vendor/webarq/front-end/images/content/news-thumb-02.jpg')}}" alt="promo">
								<span class="lbl">PROMO</span>
							</figure>
							<div class="desc-sm-info">
								<h4>Ini Dia Tips Belanja Pintar Dengan Uang THR</h4>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
								<span class="link-blue">Lihat Selengkapnya</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonihome">
	<div class="trig-testimoni"></div>
	<div class="intestimonihome a-from-bottom" delay=".3" trigger-anim=".trig-testimoni" style="background-image: url('<?php echo URL::asset("vendor/webarq/front-end/images/content/bg-testimoni.jpg");?>');">
		<div class="wrapper">
			<h3 class="a-from-bottom" delay=".8" trigger-anim=".trig-testimoni">Testimonial Nasabah Kami</h3>
			<div class="box-list-testimoni">
				<div class="list-testimoni">
					<div class="inner-testimoni">
						<div class="img-testi">
							<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/user-01.jpg')}}" alt="testimoni"></figure>
							<div class="ttl-testi">
								<h6>Jane Doe</h6>
								<span>Karyawan swasta</span>
							</div>
						</div>
						<div class="ctn-testi">
							This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
						</div>
					</div>
				</div>
				<div class="list-testimoni">
					<div class="inner-testimoni">
						<div class="img-testi">
							<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/user-02.jpg')}}" alt="testimoni"></figure>
							<div class="ttl-testi">
								<h6>Felicia</h6>
								<span>Karyawan swasta</span>
							</div>
						</div>
						<div class="ctn-testi">
							Berkat Kreditplus sekarang modal usaha saya bertambah dan tanpa proses yang sulit, terima kasih Kreditplus.
						</div>
					</div>
				</div>
				<div class="list-testimoni">
					<div class="inner-testimoni">
						<div class="img-testi">
							<figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/user-01.jpg')}}" alt="testimoni"></figure>
							<div class="ttl-testi">
								<h6>Isyana</h6>
								<span>Karyawan Swasta</span>
							</div>
						</div>
						<div class="ctn-testi">
							This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sponsorhome">
	<div class="trig-sponsor"></div>
	<div class="wrapper">
		<div class="box-list-sponsor">
			<div class="list-sponsor">
				<a href=""><img src="{{URL::asset('vendor/webarq/front-end/images/content/spons-elevania.png')}}" alt="elevania"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL::asset('vendor/webarq/front-end/images/content/spons-home.png')}}" alt="home"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL::asset('vendor/webarq/front-end/images/content/spons-jdid.png')}}" alt="jdid"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL::asset('vendor/webarq/front-end/images/content/spons-target.png')}}" alt="target"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL::asset('vendor/webarq/front-end/images/content/spons-elevania.png')}}" alt="elevania"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL::asset('vendor/webarq/front-end/images/content/spons-home.png')}}" alt="home"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL::asset('vendor/webarq/front-end/images/content/spons-jdid.png')}}" alt="jdid"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL::asset('vendor/webarq/front-end/images/content/spons-target.png')}}" alt="target"></a>
			</div>
		</div>
	</div>
</section>
    @endif
@endsection
