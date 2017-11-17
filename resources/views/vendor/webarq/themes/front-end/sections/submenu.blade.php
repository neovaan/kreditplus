<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */
use App\Submenu;
 $page = Wa::menu()->getActive()->eloquent()->getAttributes();
 $pageid = $page['id'];
 $arr_temp = array();
 ?>
<ul>
	@if($page['parent_id'] == "0")
	   <?php $e = 0;?>
	   @foreach(Wa::menu()->getNodes() as $m)
			@if($m['parent_id'] == $pageid)
				@foreach(Wa::menu()->getChild() as $w)
				<?php $e++;?>
				<li class="<?php echo $e == 1 ? 'active' : '';?>"><a href="{{URL::trans($w->permalink)}}">{{$w->title}}</a></li>
				@endforeach
			@endif
			@if($e != 0)
				@break
			@endif 
		@endforeach
		@if($e == 0)
			<li class="active"><a href="{{URL::trans($page['permalink'])}}">{{$page['title']}}</a></li>
		@endif
	@else
		<?php $parent = $page['parent_id'];?>
		<?php $r = false;?>
		@foreach(Wa::menu()->getNodes() as $m)
			@if($m['parent_id'] == $parent)
				<?php $sub = Submenu::asd($parent);?>
				@foreach($sub as $q)
					<?php $r=true;?>
					<li class="<?php echo $q->id == $pageid ? 'active' : '';?>"><a href="{{URL::trans($q->permalink)}}">{{$q->title}}</a></li>
				@endforeach
			@endif
			<?php if($r) break;?>
		@endforeach
	@endif
</ul>