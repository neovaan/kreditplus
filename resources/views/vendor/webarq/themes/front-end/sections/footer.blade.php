<?php use App\Submenu;?>
<footer>  {{-- dd(Wa::menu()->main()) --}}
            <div class="foot-top">
                <div class="wrapper">
                    <div class="foot-menu">
                        <?php $id=array();?>
                        @foreach(Wa::menu()->getNodes() as $c)
                                <?php $f = false;?>
                                <?php $parent = '';?>
                                @if($c['permalink'] != "/" && $c['parent_id'] == "0")
                                        <div class="list-foot-menu">
                                            <h6>{{$c['title']}}</h6>
                                            <ul>
                                        <?php $f = true;?>
                                        <?php $parent = $c['id'];?>
                                @endif
                                @if($f)
                                    @if(Wa::menu()->getNode($parent)->getChild('first'))
                                        <?php $menu = Submenu::asd($parent);?>            
                                        @foreach($menu as $mlink)                       
                                            <li><a href="{{URL::trans($mlink['permalink'])}}">{{$mlink['title']}}</a></li>
                                        @endforeach
                                            </ul>
                                        </div>
                                    @else
                                            <li><a href="{{URL::trans($c['permalink'])}}">{{$c['title']}}</a></li>
                                           </ul>
                                        </div>
                                    @endif
                                @endif
                        @endforeach
                    </div>
                    <div class="foot-subs">
                        <div class="box-subscribe">
                            <h6>{{ $footer->count() ? $footer[0]->txt1 : ''}}</h6>
                            <div class="boxf-mail">
                                <form id="sm">
                                    <input type="email" id="em" name="email" placeholder="Email">
                                    <input type="submit" name="" value="" class="btn-fly">
                                </form>
                            </div>
                        </div>
                        <div class="box-ojk">
                            <h6>{{$footer->count() ? $footer[0]->txt2 : ''}}</h6>
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
                        <a href="{{URL::trans('/')}}"><img src="{{URL(Wa::config('system.site.logofooter'))}}"></a>
                    </div>
                    <div class="copyright">{!! html_entity_decode(Wa::config('system.site.copyright')) !!} <a href="https://www.webarq.com" target="_blank">WEBARQ</a></div>
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
<script>
    $(document).ready(function(){
        $("#sm").submit(function(){
            if($("#em").val() != ""){
                $.post("{{URL::to('newsletter')}}",{'data':$("#em").val(),'_token':"{{csrf_token()}}" }, function(res){
                    if(res.response == "ok"){
                        alert(res.msg);
                        $("#em").val("");
                        $("#em").css({'border-color':''});
                    }
                },'json');
            }else{
                $("#em").css({'border-color':'red'});
            }
            return false;
        });
    });
</script>