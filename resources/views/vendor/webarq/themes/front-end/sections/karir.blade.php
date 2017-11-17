<?php

?>
	<div class="box-acc">
		@foreach($shareData as $data)
		<div class="list-acc">
			<div class="btn-acc">
				<h5>{{$data->title_job}}</h5>
				<span>{{$karir[0]->txt1}} : {{$data->penempatan}}</span>
				<div class="plusacc">
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="desc-acc">
				<?php echo $data->description; ?>
			</div>
		</div>
		@endforeach
	</div>