<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */ ?>

@foreach ($shareData as $data)
    <figure>
        <img src="{{URL::asset($data->path)}}" img-large="images/content/banner-about.jpg" img-medium="images/content/banner-about-md.jpg" img-small="images/content/banner-about-sm.jpg" alt="banner">
    </figure>
@endforeach
