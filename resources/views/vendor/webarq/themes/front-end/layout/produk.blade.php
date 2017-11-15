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
    @if (isset($shareSections) && is_array($shareSections))
        @foreach ($shareSections as $section)
          @if($section->getKey() == 'banner')
             {!! $section->toHtml() !!}
             @break
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
<section class="ctnwp">
<div class="wrap-sm">
    @if ([] !== $shareSections)
        @foreach ($shareSections as $section)
          @if($section->getKey() != 'banner' &&  $section->getKey() != 'submenu' && $section->getKey() != 'mini_banner')
            {!! $section->toHtml() !!}
          @endif          
        @endforeach
    @endif
     @if ([] !== $shareSections)
        @foreach ($shareSections as $section)
          @if($section->getKey() == 'mini_banner')
            {!! $section->toHtml() !!}
          @endif          
        @endforeach
    @endif
    @if($produk->count())
        <div class="related-product">
            <h4>{{Wa::trans('site.label_produklain')}}</h4>
            <div class="prod-list-h">
                <?php $i=0;?>
                @foreach($produk as $q)
                    <?php if($i == 3) break;?>
                    <div class="list-prod">
                        <a href="{{URL::trans($q->link)}}">
                            <figure><img src="{{URL::asset($q->image)}}" alt="{{$q->title}}"></figure>
                            <div class="desc-prod">
                                <h4>{{$q->title}}</h4>
                            </div>
                        </a>
                    </div>
                    <?php $i++;?>
                @endforeach
            </div>
        </div>
    @endif
</div>
</section>
@endsection
