<?php

?>
<div class="wrap-sm">
	@foreach($shareData as $data)
	<h3 class="tblue">{{$data->title}}</h3>
	<h3 class="tregular">{{$data->intro}}</h3>
	<?php echo $data->description ;?>
	</div>
	@endforeach
	<br/>
	<a href="{{URL('karir')}}" class="btn-box btn-red">LIHAT LOWONGAN PEKERJAAN</a>
</div>
csdacdscs