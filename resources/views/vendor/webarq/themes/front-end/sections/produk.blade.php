<section class="produkkredit">
	<div class="trig-produk"></div>
	<div class="inprodukkredit a-from-bottom" delay=".3" trigger-anim=".trig-produk" style="background-image: url('{{URL('vendor/webarq/front-end/images/content/bg-kredibilitas.jpg')}}');">
		<div class="bgcirc"></div>
		<div class="inprokre">
			<h3 class="a-from-bottom" delay=".8" trigger-anim=".trig-produk">Produk Kreditplus</h3>
			<div class="circwhite">
				<div class="box-list-product">
					<?php $i=0;?>
					@foreach($shareData as $data)
						@if($i == 5)
							@break
						@endif
					<div class="list-product">
						<a href="#">
							<div class="in-product">
								<figure><img src="{{URL($data->image)}}" alt="{{$data->title}}"></figure>
								<div class="desc">
									<h4>{{$data->title}}</h4>
									<p>{{$data->intro}}</p>
								</div>
							</div>
						</a>
					</div>
					<?php $i++;?>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<?php $link = ""; ?>
 @foreach(Wa::menu()->getNodes() as $m)
    @if($m['id'] == "13" )
        <?php $link =  $m['permalink'];?>
    @endif
@endforeach
@if($info->count())
<section class="infohome">
	<div class="trig-info"></div>
	<div class="wrapper">
		<div class="title-infohome a-from-left" delay=".3" trigger-anim=".trig-info">
			<h3>INFORMASI</h3>
			<a href="{{URL::trans($link)}}">Lihat Semua</a>
		</div>
		<div class="box-infohome">
			<div class="lg-info a-from-left" delay=".5" trigger-anim=".trig-info">
				<a href="{{URL::trans($link.'/read/'.$info[0]->permalink)}}">
					<figure>
						<img src="{{URL($info[0]->image)}}" alt="{{$info[0]->type}}">
						<span class="lbl <?php echo ( ($info[0]->type == "berita") ? "lblue" : "lyellow") ;?>">{{$info[0]->type}}</span>
					</figure>
					<div class="desc-lg-info">
						<h4>{{$info[0]->title}}</h4>
						<p>{{$info[0]->intro}}</p>
					</div>
				</a>
			</div>
			<div class="sm-info">
				<div class="box-list-info-sm">
					<?php $i = 0; ?>
					@foreach($info as $q)
						<?php
							$i++;
							if($i == 1)
								continue;
						?>
						<div class="list-info-sm a-from-right" delay=".8" trigger-anim=".trig-info">
							<a href="{{URL::trans($link.'/read/'.$q->permalink)}}">
								<figure>
									<img src="{{URL($q->image)}}" alt="{{$q->type}}">
									<span class="lbl <?php echo ( ($q->type == "berita") ? "lblue" : "lyellow") ;?>">{{$q->type}}</span>
								</figure>
								<div class="desc-sm-info">
									<h4>{{$q->title}}</h4>
									<p>{{$q->intro}}</p>
									<span class="link-blue">Lihat Selengkapnya</span>
								</div>
							</a>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endif
@if($testimoni->count())
<section class="testimonihome">
	<div class="trig-testimoni"></div>
	<div class="intestimonihome a-from-bottom" delay=".3" trigger-anim=".trig-testimoni" style="background-image: url('{{URL('vendor/webarq/front-end/images/content/bg-testimoni.jpg')}}');">
		<div class="wrapper">
			<h3 class="a-from-bottom" delay=".8" trigger-anim=".trig-testimoni">Testimonial Nasabah Kami</h3>
			<div class="box-list-testimoni">
				@foreach($testimoni as $testi)
				<div class="list-testimoni">
					<div class="inner-testimoni">
						<div class="img-testi">
							<figure><img src="{{URL('vendor/webarq/front-end/images/material/user.png')}}" alt="testimoni"></figure>
							<div class="ttl-testi">
								<h6>{{$testi['nama']}}</h6>
								<!--<span>Karyawan swasta</span>-->
							</div>
						</div>
						<div class="ctn-testi">
							{{$testi['pesan']}}
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endif
<section class="sponsorhome">
	<div class="trig-sponsor"></div>
	<div class="wrapper">
		<div class="box-list-sponsor">
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-elevania.png')}}" alt="elevania"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-home.png')}}" alt="home"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-jdid.png')}}" alt="jdid"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-target.png')}}" alt="target"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-elevania.png')}}')}}" alt="elevania"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-home.png')}}" alt="home"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-jdid.png')}}" alt="jdid"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-target.png')}}" alt="target"></a>
			</div>
		</div>
	</div>
</section>