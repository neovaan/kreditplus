<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */
 $page = Wa::menu()->getActive()->eloquent()->getAttributes();
 $pageid = $page['id'];
 ?>
<ul>
    <li class="active"><a href="{{$page['permalink']}}">{{$page['title']}}</a></li>
	@foreach(Wa::menu()->getNodes() as $m)
		@if($m['parent_id'] == $pageid)
			<li><a href="{{URL($m['permalink'])}}">{{$m['title']}}</a></li>
		@endif
	@endforeach
</ul>