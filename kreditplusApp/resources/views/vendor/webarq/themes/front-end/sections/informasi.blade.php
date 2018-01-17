<div class="title-info">
	<div class="left">
		<h3 class="tblue">INFORMASI</h3>
	</div>
	<div class="right">
		<label>Tampilkan : </label>
		<select onchange="tampil(this.value)">
			<option value="">Promo & Berita</option>
			<option value="promo">Promo</option>
			<option value="berita">Berita</option>
		</select>
	</div>
</div>
<div class="promo-list">
	<?php $i=1;?>
	@foreach($shareData as $data)
		<div class="list-promo">
			<figure><img src="{{URL::asset($data->image)}}" alt="promo {{$i}}"></figure>
			<div class="desc-promo">
				<a href="" class="lbl {{ ($data->type == 'promo') ? 'lyellow' : 'lblue' }} lbl-sm">{{ ($data->type == 'promo') ? 'PROMO' : 'BERITA' }}</a>
				<h4>{{$data->title}}</h4>
				<p>{{$data->intro}}</p>
				<a href="{{URL('informasi/read/'.$data->id)}}" class="link-blue">Lihat Selengkapnya</a>
			</div>
		</div>
		<?php $i++; ?>
	@endforeach
</div>
<script>
	function tampil(v){
		$.ajax({
			url:"{{URL('Informasi/tampil/type')}}",
			data:"val="+v,
			type:"POST",
			dataType:"json",
			success:function(data){

			}
		});
	}
</script>