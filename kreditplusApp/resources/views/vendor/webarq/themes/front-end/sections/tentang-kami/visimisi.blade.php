@foreach($shareData as $data)
<h3 class="tblue">{{$data->title}}</h3>
<div class="box-vis">
	<div class="left">
		<div class="box-nilvis">
			<div class="icon-nilvis icwp ic_vision" style="background-image:url('{{URL::asset($data->img_visi)}}');"></div>
			<div class="desc-nilvis">
				<h3 class="tregular">{{$data->txt_visi}}</h3>
				<p><?php echo $data->visi;?></p>
			</div>
		</div>
		<div class="box-nilvis">
			<div class="icon-nilvis icwp ic_mision" style="background-image:url('{{URL::asset($data->img_misi)}}');"></div>
			<div class="desc-nilvis">
				<h3 class="tregular">{{$data->txt_misi}}</h3>
				<?php echo $data->misi;?>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="box-nilvis">
			<div class="icon-nilvis icwp ic_value" style="background-image:url('{{URL::asset($data->img_nilai)}}');"></div>
			<div class="desc-nilvis">
				<h3 class="tregular">{{$data->txt_nilai}}</h3>
				<?php echo $data->nilai;?>
			</div>
		</div>
	</div>
</div>
@endforeach