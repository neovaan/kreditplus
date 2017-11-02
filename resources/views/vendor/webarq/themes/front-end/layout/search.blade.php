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
			@if($data->count())
				@foreach($data as $item)
			<h3 class="tblue"><?php echo $item->title ;?></h3>
			<h3 class="tregular"><?php echo $item->intro;?></p>
			<img src="<?php echo URL::asset($item->image) ;?>" alt="information">
			<br>
			<br>
			<p><?php echo $item->description ;?></p>
			<br/>
			<br/>
				@endforeach
			@endif
		</div>
	</section>
@endsection
