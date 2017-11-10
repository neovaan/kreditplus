<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 1/17/2017
 * Time: 2:27 PM
 */ ?>
<header>
    <div class="wrapper">
        <div class="head-top">
            <div class="left">
                <?php if(!empty(Wa::config('system.telepon'))){ ?>
                    <a href="tel:{{Wa::config('system.telepon')}}"><i class="icwp ic_wa"></i>{{Wa::config('system.telepon')}}</a>
               <?php } ?>
                @foreach(Wa::menu()->getNodes() as $m)
                    @if($m['id'] == "17")
                        <a href="{{URL($m['permalink'])}}">{{$m['title']}}</a>
                    @endif
                @endforeach
            </div>
            <div class="right">
              @foreach (Wl::getCodes() as $code)
                            {{--@if ($code !== app()->getLocale())--}}
                            @set(activeURL, Wa::menu()->getActive() ? Wa::menu()->getActive()->eloquent()->trans('permalink', $code) : '')
                            @if (isset($shareDetail) && $shareDetail instanceof \Illuminate\Database\Eloquent\Model && $shareDetail->count())
                                @if (null !== Wa::menu()->getSegment('markup.key'))
                                    @set(activeURL, $activeURL . '/' . Wa::menu()->getSegment('markup.key'))
                                @endif
                                @set(activeURL, $activeURL . '/' . $shareDetail->trans('permalink', $code))
                            @else
                            @endif
                            <a href="{{ URL::trans($activeURL, [], null, $code) }}">{{strtoupper($code)}}
                            </a>
                            {{--@endif--}}
                    @endforeach
            </div>
        </div>
        <div class="head-bottom">
            <div class="logo">
                <a href="{{URL::trans('/')}}">
                    <img src="{{URL(Wa::config('system.site.logo'))}}" alt="logo">
                </a>
            </div>
            <div class="head-right">
                <div class="mainmenu">
                    <div class="burg-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                     {!! Wa::menu()->generate(Wa::menu()->main()) !!}
                    <div class="bg-gradient"></div>
                    <div class="bg-overlay"></div>
                    <div class="box-search">
                        <span class="btn-search"></span>
                        <div class="drop-search">
                            <form method="get" onsubmit="search()" action="{{URL('q')}}">
                                <input type="text" name="d" placeholder="Search...">
                            </form>
                            <a class="sub-search"></a>
                        </div>
                    </div>
                </div>
                <div class="request-head">
                    @foreach(Wa::menu()->getNodes() as $m)
                        @if($m['id'] == "16")
                         <a href="{{URL($m['permalink'])}}" class="btn-request">
                          {{Wa::trans('site.label_btn_pengajuan_kredit')}}
                        </a>
                        @endif
                    @endforeach
                    {{-- 
                    <a href="{{URL::trans(Wa::menu()->getNode('16')->permalink)}}" class="btn-request">
                        
                    </a>
                   --}}
                </div>
            </div>
        </div>
    </div>
</header>
<script>
</script>