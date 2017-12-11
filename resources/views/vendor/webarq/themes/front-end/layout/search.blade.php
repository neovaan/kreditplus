<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 5:40 PM
 */ ?>

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
        <!-- <div class="box-submenu">
            <div class="btn-submenu">Submenu</div>
            <div class="drop-submenu">
               
            </div>
        </div> -->
    </div>
</div>
</section>
<section class="ctnwp">
	<div class="wrap-sm">
			<h3 class="tblue">{{Wa::trans('site.label_hasil_pencarian')}}</h3>
			<?php $t = false;?>
			@if($informasi->count())
				<?php $t = true;?>
				@foreach($informasi as $item)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $item->title ;?></h5>
							<p><?php echo $item->intro;?></p>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL::trans($link.'/read/'.$item->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

			@if($produk->count())
				<?php $t = true;?>
				@foreach($produk as $p)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $p->title ;?></h5>
							<p><?php echo $p->intro;?></p>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL::trans($p->link)}}">
							{{Wa::trans('site.label_lihat_selengkapnya')}}
						    </a>
						</div>
					</div>
				@endforeach
			@endif

			@if($karir->count())
			<?php $t = true;?>
			<?php $arr_karir = array();?>
				@foreach($karir as $k)
					@if(!in_array($k->section_id,$arr_karir))
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $k->title_job ;?></h5>
							<?php $link = Wa::menu()->getNode(17);?>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
					<?php $arr_karir[]=$k->section_id;?>
					@endif
				@endforeach
			@endif

			@if($content->count())
				<?php $t = true;?>
				<?php $arr_content = array();?>
				@foreach($content as $c)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $c->title ;?></h5>
							<p>{{$c->intro}}</p>
							<?php $section = explode(".",$c->section_id);?>
							<?php $link = Wa::menu()->getNode($section[0]);?>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

			@if($content_karir->count())
				<?php $t = true;?>
				<?php $arr_content_karir = array();?>
				@foreach($content_karir as $ck)
					@if(!in_array($ck->section_id,$arr_content_karir))
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $ck->title ;?></h5>
							<p>{{$ck->intro}}</p>
							<?php $section = explode(".",$ck->section_id);?>
							<?php $link = Wa::menu()->getNode($section[0]);?>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
					<?php $arr_content_karir[]=$ck->section_id;?>
					@endif
				@endforeach
			@endif

			@if($layanan->count())
				<?php $t = true;?>
				@foreach($layanan as $l)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $l->title ;?></h5>
							<p>{{$l->intro}}</p>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL('/')}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

			@if($visimisi->count())
				<?php $t = true;?>
				@foreach($visimisi as $vm)
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $vm->title ;?></h5>
							<?php $section = explode(".",$vm->section_id);?>
							<?php $link = Wa::menu()->getNode($section[0]);?>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
				@endforeach
			@endif

			@if($prestasi->count())
				<?php $t = true;?>
				<?php $arr_pres = array();?>
				@foreach($prestasi as $pr)
					@if(!in_array($pr->section_id,$arr_pres))
					<div class="listver">
						<div class="lsv">
							<h5><?php echo $pr->title ;?></h5>
							<p>{{$pr->intro}}</p>
							<?php $section = explode(".",$pr->section_id);?>
							<?php $link = Wa::menu()->getNode($section[0]);?>
							<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
						</div>
					</div>
					<?php $arr_pres[]=$pr->section_id;?>
					@endif
				@endforeach
			@endif
			<?php $req = Request::segment(3);?>
			@if(strpos(strtolower($req),'pengajuan') !== false || strpos(strtolower($req),'form') !== false)
				<?php $t = true;?>
				<div class="listver">
					<div class="lsv">
						<h5>Form Pengajuan</h5>
						<?php $link = Wa::menu()->getNode(16);?>
						<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
					</div>
				</div>
			@endif

			@if(strpos(strtolower($req),'simulasi') !== false || strpos(strtolower($req),'kredit') !== false)
				<?php $t = true;?>
				<div class="listver">
					<div class="lsv">
						<h5>Simulasi</h5>
						<?php $link = Wa::menu()->getNode(15);?>
						<a class="link-blue" style="margin-bottom:10px;" href="{{URL($link->permalink)}}">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
					</div>
				</div>
			@endif

			@if(!$t)
				<div class="listver">
					<div class="lsv">
						<h5>{{Wa::trans('site.label_notfound')}}</h5>
					</div>
				</div>
			@endif
		
	</div>
</section>
@endsection
