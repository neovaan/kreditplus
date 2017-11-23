<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 5:40 PM
 */ ?>

@extends('webarq::themes.front-end.layout.index')
@section('content')
<section class="banner">
@if ($banner->count())
    <figure>
        <img src="{{URL::asset($banner[0]->path)}}" img-medium="{{URL::asset($banner[0]->image_medium)}}" img-small="{{URL::asset($banner[0]->image_small)}}" alt="banner">
    </figure>
@endif
<div class="submenu-banner">
    <div class="wrap-sm">
        <div class="box-submenu">
            <div class="btn-submenu">Submenu</div>
            <div class="drop-submenu">
                @include('webarq::themes.front-end.sections.submenu')
            </div>
        </div>
    </div>
</div>
</section>
<section class="ctnwp">
	<div class="wrap-sm">
			<h3 class="tblue">{{Wa::trans('site.label_hasil_pencarian')}}</h3>
			@if($informasi->count())
				@foreach($informasi as $item)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $item->title ;?></h5>
							<p><?php echo $item->intro;?></p>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL::trans($link.'/read/'.$item->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

			@if($produk->count())
				@foreach($produk as $p)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $p->title ;?></h5>
							<p><?php echo $p->intro;?></p>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL::trans($p->link)}}">
							{{Wa::trans('site.label_lihat_selengkapnya')}}
						    </a>
						</div>
					</div>
				@endforeach
			@endif

			@if($karir->count())
				@foreach($karir as $k)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $k->title_job ;?></h5>
							<?php $link = Wa::menu()->getNode(17);?>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

			@if($content->count())
				@foreach($content as $c)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $c->title ;?></h5>
							<p>{{$c->intro}}</p>
							<?php $section = explode(".",$c->section_id);?>
							<?php $link = Wa::menu()->getNode($section[0]);?>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

			@if($content_karir->count())
				@foreach($content_karir as $ck)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $ck->title ;?></h5>
							<p>{{$ck->intro}}</p>
							<?php $link = Wa::menu()->getNode(23);?>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

			@if($layanan->count())
				@foreach($layanan as $l)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $l->title ;?></h5>
							<p>{{$l->intro}}</p>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL('/')}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

		
	</div>
</section>
@endsection
