<section class="slidehome">
	<div class="boxsliderhome">
		@foreach($shareData as $data)
			<div class="list-slide">
				<figure>
					<img src="{{URL::asset($data->image)}}" alt="slidehome 1">
				</figure>
				<div class="desc">
					<div class="wrapper">
						<i class="dotted"></i>
						<h1>{{$data->title}}</h1>
						<p>{{$data->intro}}</p>
						<a href="#" class="btn-box btn-red">AJUKAN KREDIT</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</section>