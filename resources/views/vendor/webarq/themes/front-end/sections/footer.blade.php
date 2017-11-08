
<footer>  {{-- dd(Wa::menu()->main()) --}}
            <div class="foot-top">
                <div class="wrapper">
                    <div class="foot-menu">
                        <?php $id=array();?>
                        @foreach(Wa::menu()->getNodes() as $c)
                            @if($c['permalink'] != "/" && $c['parent_id'] == "0")
                                 <div class="list-foot-menu">
                                    <h6>{{$c['title']}}</h6>
                                    <ul>
                                         @foreach(Wa::menu()->getNodes() as $m)
                                            @if(in_array($m['parent_id'],(array($c['id']))) || $m['id'] == $c['id'])
                                                <li><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        @endforeach
                        {{-- 
                        <div class="list-foot-menu">
                            <h6>Tentang kami</h6>
                            <ul>
                                 @foreach(Wa::menu()->getNodes() as $m)
                                    @if(in_array($m['parent_id'],(array('02')))  || $m['id'] == "02" )
                                        <li><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Produk</h6>
                            <ul>
                                @foreach(Wa::menu()->getNodes() as $m)
                                    @if(in_array($m['parent_id'],(array('07')))  || $m['id'] == "07" )
                                        <li><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Information</h6>
                            <ul>
                               @foreach(Wa::menu()->getNodes() as $m)
                                    @if($m['id'] == "13" )
                                        <li><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Karir</h6>
                            <ul>
                                  @foreach(Wa::menu()->getNodes() as $m)
                                    @if(in_array($m['parent_id'],(array('17'))) || $m['id'] == "17")
                                        <li><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Kreditplusku</h6>
                            <ul>
                                @foreach(Wa::menu()->getNodes() as $m)
                                    @if(in_array($m['parent_id'],(array('11'))) )
                                        <li><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Hi! Kreditplus</h6>
                            <ul>
                                 @foreach(Wa::menu()->getNodes() as $m)
                                    @if(in_array($m['parent_id'],(array('14')))  || $m['id'] == "14" )
                                        <li><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        --}}
                    </div>
                    <div class="foot-subs">
                        <div class="box-subscribe">
                            <h6>{{$footer[0]->txt1}}</h6>
                            <div class="boxf-mail">
                                <form>
                                    <input type="email" name="" placeholder="Email">
                                    <input type="submit" name="" value="" class="btn-fly">
                                </form>
                            </div>
                        </div>
                        <div class="box-ojk">
                            <h6>{{$footer[0]->txt2}}</h6>
                            <a href="{{$footer[0]->link}}" target="_blank">
                                <figure><img src="{{URL::asset($footer[0]->image)}}"></figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- dd(Wa::config('system.site')) --}}
            <div class="foot-bottom">
                <div class="wrapper">
                    <div class="logo-foot">
                        <a href=""><img src="{{URL(Wa::config('system.site.logo'))}}"></a>
                    </div>
                    <div class="copyright">{!! html_entity_decode(Wa::config('system.site.copyright')) !!}<a href="https://www.webarq.com" target="_blank">WEBARQ</a></div>
                    <div class="sosmed-foot">
                        <span>Follow Us</span>
                        @if(!empty(Wa::config('system.facebook')))
                            <a href="{{Wa::config('system.facebook')}}" target="_blank"><i class="icwp ic_fb"></i></a>
                        @endif
                        @if(!empty(Wa::config('system.instagram')))
                            <a href="{{Wa::config('system.instagram')}}" target="_blank"><i class="icwp ic_ig"></i></a>   
                        @endif
                        @if(!empty(Wa::config('system.twitter')))
                              <a href="{{Wa::config('system.twitter')}}" target="_blank"><i class="icwp ic_tw"></i></a>
                        @endif
                        @if(!empty(Wa::config('system.linkedin')))
                             <a href="{{Wa::config('system.linkedin')}}" target="_blank"><i class="icwp ic_in"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </footer>