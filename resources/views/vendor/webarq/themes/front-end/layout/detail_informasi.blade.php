@extends('webarq::themes.front-end.layout.index')
@section('content')
<section class="banner">
    @if ($banner->count())
        <figure>
	        <img src="{{URL::asset($banner[0]->path)}}" img-medium="{{URL::asset($banner[0]->image_medium)}}" img-small="{{URL::asset($banner[0]->image_small)}}" alt="banner">
	    </figure>
    @endif
    <div class="submenu-banner">
        <div class="wrap-sm">
            <div class="box-submenu">
                <div class="btn-submenu">Submenu</div>
                <div class="drop-submenu">
                    @include('webarq::themes.front-end.sections.submenu')
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ctnwp">
	<div class="wrap-sm">
		@if($data->count())
			<h3 class="tblue"><?php echo $data[0]->title ;?></h3>
			<h3 class="tregular"><?php echo $data[0]->intro;?></h3>
			<p><?php echo $data[0]->description ;?></p>
		@else
			<h3 class="tblue">Not Found</h3>
		@endif
		<a href="{{URL::to($link)}}" class="link-blue">{{Wa::trans('site.label_kembali')}}</a>
		<div class="related-news">
			@if($list->count())
				<h4>{{Wa::trans('site.label_berita_lainya')}}</h4>
			@endif
			<div class="news-list">
				<?php $var = 1;?>
				@foreach($list as $l)
					<div class="list-news">
						<figure><img src="<?php echo URL::asset($l->image);?>" alt="news {{$var}}"></figure>
						<div class="desc-news">
							<h4><?php echo $l->title;?></h4>
							<p><?php echo $l->intro;?></p>
							<a href="{{URL::trans($link.'/read/'.$l->permalink)}}" class="link-blue">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
					<?php $var++;?>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection