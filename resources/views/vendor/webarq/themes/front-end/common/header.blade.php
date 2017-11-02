<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 1/17/2017
 * Time: 2:27 PM
 */ ?>
<?php //print_r();die('fr');?>
<header>
    <div class="wrapper">
        <div class="head-top">
            <div class="left">
                <a href="tel:02129333646"><i class="icwp ic_wa"></i> 021-2933 3646</a>
                <a href="{{URL('karir')}}">Karir</a>
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
                <a href="index.php">
                    <img src="{{URL::asset('vendor/webarq/front-end/images/material/logo.png')}}" alt="logo">
                </a>
            </div>
            <div class="head-right">
                <div class="mainmenu">
                    <div class="burg-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                 <!--    <ul>
                        <li class="menures"><a>MENU</a></li->
                        <?php 
                            foreach(Wa::menu()->getNodes() as $m){
                                if($m['position'][0] == "main"){
                        ?>
                            <li><a href="{{URL($m['permalink'])}}">{{$m['title']}}</a>
                        <?php 
                                 } 
                             } 
                       ?>
                    </ul> -->
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
                    <a href="{{URL('pengajuan')}}" class="btn-request">
                        Ajukan Kredit
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
</script>