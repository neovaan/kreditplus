    <?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 4/28/2017
 * Time: 4:02 PM
 */
$page = Wa::menu()->getActive()->eloquent()->getAttributes();
?>
@extends('webarq::themes.front-end.layout.index')
<section class="banner">
    @if (isset($shareSections) && is_array($shareSections) && $page['permalink'] != "contact")
        @foreach ($shareSections as $section)
          @if($section->getKey() == 'banner')
             {!! $section->toHtml() !!}
          @endif          
        @endforeach
    @else
        <!-- Contact Banner -->
         <div class="box-maps">
            <div id="map_location"></div>
        </div>
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
@section('content')
<section class="ctnwp">
<div class="wrap-sm">
    @if ([] !== $shareSections)
        @if($page['permalink'] == "simulasi")
            @include('webarq::themes.front-end.sections.simulasi')
        @else
            @foreach ($shareSections as $section)
              @if($section->getKey() != 'banner')
                {!! $section->toHtml() !!}
              @endif          
            @endforeach
            <?php
                 $arr_footer = array('tentang-kami','produk','produk-motor','produk-mobil','produk-elektronik','gcg');
             ?>
             <!-- Footer Banner -->

             @if( in_array($page['permalink'],$arr_footer) )
                <br/>
                <br/>
                @include('webarq::themes.front-end.sections.footer_content')
             @endif

              <!-- Footer Google Play -->
             @if($page['permalink'] == "kreditplusku")
                <div class="downloadapps margtop">
                    <div class="left">Download Kreditplus Mobile di google Play</div>
                    <div class="right">
                        <a href="" target="_blank"><img src="{{URL::asset('vendor/webarq/front-end/images/content/google-play.png')}}" alt="google play apps"></a>
                    </div>
                </div>
             @endif
        @endif
    @endif
</div>
</section>
@endsection
