<section class="slidehome">
	<div class="boxsliderhome">
		@foreach($shareData as $data)
			<div class="list-slide">
				<figure>
					<img src="{{URL::asset($data->image)}}" img-large="{{URL::asset($data->image)}}" img-medium="{{URL::asset($data->image_desktop)}}" img-small="{{URL::asset($data->image_phone)}}" alt="slidehome 1">
				</figure>
				<div class="desc">
					<div class="wrapper">
						<i class="dotted"></i>
						<h1>{{$data->title}}</h1>
						<p>{{$data->intro}}</p>
						@if($data->link)
						<a href="{{URL($data->link)}}" target="_blank" class="btn-box btn-red">{{$data->txtbtn}}</a>
						@endif
					</div>
				</div>
			</div>
		@endforeach
	</div>
</section>