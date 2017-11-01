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
			<h3 class="tblue"><?php echo $data[0]->title ;?></h3>
			<h3 class="tregular"><?php echo $data[0]->intro;?></p>
			<img src="<?php echo URL::asset($data[0]->image) ;?>" alt="information">
			<br>
			<br>
			<p><?php echo $data[0]->description ;?></p>
		</div>
	</section>
@endsection
