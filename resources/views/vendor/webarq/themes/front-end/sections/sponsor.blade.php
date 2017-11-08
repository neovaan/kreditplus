
<section class="sponsorhome">
	<div class="trig-sponsor"></div>
	<div class="wrapper">
		<div class="box-list-sponsor">
			@if(count($shareData))
				@foreach($shareData as $data)
					<div class="list-sponsor">
						<a href="{{$data->link}}" target="_blank"><img src="{{URL::asset($data->logo)}}"></a>
					</div>
				@endforeach
			@endif
			<!-- <div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-home.png')}}" alt="home"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-jdid.png')}}" alt="jdid"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-target.png')}}" alt="target"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-elevania.png')}}')}}" alt="elevania"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-home.png')}}" alt="home"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-jdid.png')}}" alt="jdid"></a>
			</div>
			<div class="list-sponsor">
				<a href=""><img src="{{URL('vendor/webarq/front-end/images/content/spons-target.png')}}" alt="target"></a>
			</div> -->
		</div>
	</div>
</section>