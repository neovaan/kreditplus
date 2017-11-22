
<section class="sponsorhome">
	<div class="trig-sponsor"></div>
	<div class="wrapper">
		<div class="box-list-sponsor">
			@if(count($shareData))
				@php $shuffle = $shareData->toArray() @endphp
				<?php shuffle($shuffle);?>
				@foreach($shuffle as $data)
					<div class="list-sponsor">
						<a href="{{$data['link']}}" target="_blank"><img src="{{URL::asset($data['logo'])}}"></a>
					</div>
				@endforeach
			@endif
		</div>
	</div>
</section>