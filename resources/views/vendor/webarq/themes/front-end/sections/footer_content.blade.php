@if(count($shareData))
<div class="adv" style="background-image: url('<?php echo URL::asset($shareData[0]->background);?>');">
	<div class="inadv">
		<h4>{{$shareData[0]->txt}}</h4>
		<a href="{{URL::trans($shareData[0]->link)}}" class="btn-box btn-sm">{{$shareData[0]->txtbtn}}</a>
	</div>
</div>
@endif