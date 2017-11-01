@extends('webarq::themes.front-end.layout.index')
<section class="banner">
  <figure>
    <img src="{{URL::asset('vendor/webarq/front-end/images/content/banner-simulasi.jpg')}}" alt="banner">
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
@section('content')
<section class="ctnwp">
	<div class="wrap-sm">
		<h3 class="tblue"><?php echo $data[0]->title ;?></h3>
		<h3 class="tregular"><?php echo $data[0]->intro;?></p>
		<img src="<?php echo URL::asset($data[0]->image) ;?>" alt="information">
		<br>
		<br>
		<p><?php echo $data[0]->description ;?></p>

		<a href="{{URL('informasi')}}" class="link-blue">Back to List</a>
		
		<div class="related-news">
			<h4>Berita Lainnya</h4>
			<div class="news-list">
				<?php $var = 1;?>
				@foreach($list as $l)
					<div class="list-news">
						<figure><img src="<?php echo URL::asset($l->image);?>" alt="news {{$var}}"></figure>
						<div class="desc-news">
							<h4><?php echo $l->title;?></h4>
							<p><?php echo $l->intro;?></p>
							<a href="{{URL('informasi/read/'.$l->id)}}" class="link-blue">Lihat Selengkapnya</a>
						</div>
					</div>
					<?php $var++;?>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection