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
		@if($data->count())
			<h3 class="tblue">{{Wa::trans('site.label_hasil_pencarian')}}</h3>
			@foreach($data as $item)
				<div class="listver">
					<div class="lsv">
						<h5><?php echo $item->title ;?></h5>
						<p><?php echo $item->intro;?></p>
						<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link.'/read/'.$item->title)}}">Selengkapnya</a>
					</div>
				</div>
			@endforeach
		@else
			<h3 class="tblue">Not Found</h3>
		@endif
	</div>
</section>
@endsection
