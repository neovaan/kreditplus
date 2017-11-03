<div class="title-info">
	<div class="left">
		<h3 class="tblue">INFORMASI</h3>
	</div>
	<div class="right">
		<label>Tampilkan : </label>
		<select>
			<option>Promo & Berita</option>
			<option>Promo</option>
			<option>Berita</option>
		</select>
	</div>
</div>
<div class="promo-list">
	<?php $page = Wa::menu()->getActive()->eloquent()->getAttributes(); ?>
	<?php $i=1;?>
	@foreach($shareData as $data)
		<div class="list-promo">
			<figure><img src="{{URL::asset($data->image)}}" alt="promo {{$i}}"></figure>
			<div class="desc-promo">
				<a href="" class="lbl {{ ($data->type == 'promo') ? 'lyellow' : 'lblue' }} lbl-sm">{{ ($data->type == 'promo') ? 'PROMO' : 'BERITA' }}</a>
				<h4>{{$data->title}}</h4>
				<p>{{$data->intro}}</p>
				<a href="{{URL($page['permalink'].'/read/'.$data->title)}}" class="link-blue">Lihat Selengkapnya</a>
			</div>
		</div>
		<?php $i++; ?>
	@endforeach
	{!! $shareData->render('pagination') !!}
</div>