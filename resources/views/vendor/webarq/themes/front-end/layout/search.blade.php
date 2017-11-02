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
	  	 <figure>
	        <img src="{{URL('vendor/webarq/front-end/images/content/banner-career.jpg')}}" alt="banner">
	    </figure>
	    <div class="submenu-banner">
	        <div class="wrap-sm">
	            <div class="box-submenu">
	                
	            </div>
	        </div>
	    </div>
	</section>
	<section class="ctnwp">
		<div class="wrap-sm">
			<h3 class="tblue">SEARCH RESULT</h3>
			@if($data->count())
				@foreach($data as $item)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $item->title ;?></h5>
							<p><?php echo $item->intro;?></p>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL('informasi/read/'.$item->title)}}">Selengkapnya</a>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</section>
@endsection
