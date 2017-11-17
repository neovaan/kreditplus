
<header>
    <div class="wrapper">
        <div class="head-top">
            <div class="left">
                <?php if(!empty(Wa::config('system.telepon'))){ ?>
                    <a href="tel:{{Wa::config('system.telepon')}}"><i class="icwp ic_wa"></i>{{Wa::config('system.telepon')}}</a>
               <?php } ?>
                @foreach(Wa::menu()->getNodes() as $m)
                    @if($m['id'] == "17")
                        <a href="{{URL($m['permalink'])}}">{{trim($m['title'])}}</a>
                    @endif
                @endforeach
            </div>
            <div class="right">
              @foreach (Wl::getCodes() as $code)
                            @set(activeURL, Wa::menu()->getActive() ? Wa::menu()->getActive()->eloquent()->trans('permalink', $code) : '')
                            @if (isset($shareDetail) && $shareDetail instanceof \Illuminate\Database\Eloquent\Model && $shareDetail->count())
                                @if (null !== Wa::menu()->getSegment('markup.key'))
                                    @set(activeURL, $activeURL . '/' . Wa::menu()->getSegment('markup.key'))
                                @endif
                                @set(activeURL, $activeURL . '/' . $shareDetail->trans('permalink', $code))
                            @else
                            @endif
                            <a class="{{ app()->getLocale() == $code ? 'active' : ''}}" href="{{ URL::trans($activeURL, [], null, $code) }}">{{strtoupper($code)}}
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
                       <ul>
                            <li class="menures"></li>
                           @foreach(Wa::menu()->main() as $key => $menu)
                                @php $link = $menu->permalink; @endphp
                                @if(Wa::menu()->getNode($menu->id)->getChild('first'))                                
                                    @php $link = Wa::menu()->getNode($menu->id)->getChild('first')->permalink; @endphp
                                @endif
                                <li class="{{ in_array($menu->id,$menu->getActive(true)) ? 'active' : ''}}"><a href="{{URL::trans($link)}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    <div class="bg-gradient"></div>
                    <div class="bg-overlay"></div>
                    <div class="box-search">
                        <span class="btn-search"></span>
                        <div class="drop-search">
                        	<?php $link = Wa::menu()->getNode(13);?>
                            <form method="get" id="searchfrm" onsubmit="search(); return false;" action="{{URL($link->permalink)}}">
                                <input type="text" name="d" id="qs" placeholder="Search...">
                                <button type="button" class="sub-search">
                            </form>
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
                </div>
            </div>
        </div>
    </div>
</header>
<script>
	function search(){
		var param = $("#qs").val();
		var action = $("#searchfrm").attr('action');
		location.href=action+"/q/"+param;
	}
</script>