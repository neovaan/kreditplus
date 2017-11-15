<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */
//dd(Wa::menu());
 $page = Wa::menu()->getActive()->eloquent()->getAttributes();
 $pageid = $page['id'];
 $arr_temp = array();
 ?>
<ul>
	@if($page['parent_id'] == "0")
	   <?php $e = 0;?>
	   @foreach(Wa::menu()->getNodes() as $m)
			@if($m['parent_id'] == $pageid)
				<?php $e++;?>
				<?php $arr_temp[$m['sequence']] = $m['id']."|".$m['permalink']."|".$m['title']?>
				<!--<li class="<?php echo $e == 1 ? 'active' : '';?>"><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>-->
			@endif
		@endforeach
		@if($e == 0)
		    <?php $arr_temp[$m['sequence']] = $m['id']."|".$m['permalink']."|".$m['title']?>
			<!--<li class="active"><a href="{{URL::trans($page['permalink'])}}">{{$page['title']}}</a></li>-->
		@endif
	@else
		<?php $parent = $page['parent_id'];?>
		@foreach(Wa::menu()->getNodes() as $m)
			@if($m['parent_id'] == $parent)
			    <?php $arr_temp[$m['sequence']] = $m['id']."|".$m['permalink']."|".$m['title']?>
				<!--<li class="<?php echo $pageid == $m['id'] ? 'active' : '';?>"><a href="{{URL::trans($m['permalink'])}}">{{$m['title']}}</a></li>-->
			@endif
		@endforeach
	@endif
	<?php ksort($arr_temp);?>
	@foreach($arr_temp as $a)
	   <?php $q = explode("|",$a); ?>
       <li class="<?php echo $pageid == $q[0] ? 'active' : '';?>"><a href="{{URL::trans($q[1])}}">{{$q[2]}}</a></li>
	@endforeach
</ul>