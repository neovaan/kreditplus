<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */ ?>

@foreach ($shareData as $data)
    <figure>
        <img src="{{URL::asset($data->path)}}" img-large="{{URL::asset($data->path)}}" img-medium="{{URL::asset($data->image_medium)}}" img-small="{{URL::asset($data->image_small)}}" alt="banner">
    </figure>
@endforeach
