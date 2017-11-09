    <?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 4/28/2017
 * Time: 4:02 PM
 */?>
@extends('webarq::themes.front-end.layout.index')
<section class="banner">
    @if (isset($shareSections) && is_array($shareSections))
        @foreach ($shareSections as $section)
          @if($section->getKey() == 'banner')
             {!! $section->toHtml() !!}
          @endif          
        @endforeach
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
        @foreach ($shareSections as $section)
          @if($section->getKey() != 'banner')
            {!! $section->toHtml() !!}
          @endif          
        @endforeach
    @endif
    <a href="{{URL::trans('karir')}}" class="btn-box btn-red">{{Wa::trans('site.label_btn_lowongan')}}</a>
</div>
</section>
@endsection
