    <?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 4/28/2017
 * Time: 4:02 PM
 */?>
@extends('webarq::themes.front-end.layout.index')
@section('content')
<section class="banner">
    <div class="box-maps">
        <div id="map_location"></div>
    </div>
    <div class="submenu-banner">
        <div class="wrap-sm">
            <div class="box-submenu">
                <div class="btn-submenu">Submenu</div>
                <div class="drop-submenu">
                    <ul>
                        @foreach(Wa::menu()->getNodes() as $m)
                            @if(in_array($m['parent_id'],(array('14')))  || $m['id'] == "14" )
                                <li><a href="{{URL($m['permalink'])}}">{{$m['title']}}</a></li>
                            @endif
                        @endforeach
                      <!--   <li class="active"><a href="{{URL('contact')}}">Contact Form</a></li>
                        <li><a href="{{URL('kantor-cabang')}}">Kantor Cabang</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ctnwp">
<div class="wrap-sm">
@if ([] !== $shareSections)
    @foreach ($shareSections as $section)
      @if($section->getKey() != 'banner')
        {!! $section->toHtml() !!}
      @endif          
    @endforeach
@endif
</div>
</section>
@endsection
