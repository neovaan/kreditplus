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
	   <?php $e = 0;?>
	   @foreach(Wa::menu()->getNodes() as $m)
			@if($m['parent_id'] == $pageid)
				<?php $e++;?>
				<li class="<?php echo $e == 1 ? 'active' : '';?>"><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
			@endif
		@endforeach
		@if($e == 0)
			<li class="active"><a href="{{URL::trans($page['permalink'])}}">{{$page['title']}}</a></li>
		@endif
	@else
		<?php $parent = $page['parent_id'];?>
		@foreach(Wa::menu()->getNodes() as $m)
			@if($m['parent_id'] == $parent || $m['id'] == $parent)
				<li class="<?php echo $pageid == $m['id'] ? 'active' : '';?>"><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>
			@endif
		@endforeach
	@endif

</ul>