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
	@if($page['parent_id'] == "0")
	    <li class="active"><a href="{{URL::trans($page['permalink'])}}">{{$page['title']}}</a></li>
		@foreach(Wa::menu()->getNodes() as $m)
			@if($m['parent_id'] == $pageid)
				<li><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
			@endif
		@endforeach
	@else
		<?php $parent = $page['parent_id'];?>
		@foreach(Wa::menu()->getNodes() as $m)
			@if($m['parent_id'] == $parent || $m['id'] == $parent)
				<li class="<?php echo $pageid == $m['id'] ? 'active' : '';?>"><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
			@endif
		@endforeach
	@endif

</ul>