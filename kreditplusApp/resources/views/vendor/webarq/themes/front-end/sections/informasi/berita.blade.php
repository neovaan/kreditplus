<?php $page = Wa::menu()->getActive()->eloquent()->getAttributes(); ?>
<div class="title-info">
	<div class="left">
		<h3 class="tblue">{{$page['title']}}</h3>
	</div>
	<div class="right">
		<label>{{Wa::trans('site.label_tampilkan')}} : </label>
		<select onchange="tampil(this.value)">
			<option value="">All</option>
			@if($type->count())
				@foreach($type as $t)
					<option value="{{$t->title}}">{{ucfirst($t->title)}}</option>
				@endforeach
			@endif
		</select>
	</div>
</div>
<div class="promo-list">
	<?php $i=1;?>
	@foreach($shareData as $data)
		<div class="list-promo">
			<figure><img src="{{URL::asset($data->image)}}" alt="promo {{$i}}" style=""></figure>
			<div class="desc-promo">
				<a href="{{URL::trans($page['permalink'].'/read/'.$data->permalink)}}" class="lbl {{ ($data->type == 'promo') ? 'lyellow' : 'lblue' }} lbl-sm">{{ strtoupper($data->type)  }}</a>
				<h4>{{$data->title}}</h4>
				<p>{{$data->intro}}</p>
				<a href="{{URL::trans($page['permalink'].'/read/'.$data->permalink)}}" class="link-blue">{{Wa::trans('site.label_lihat_selengkapnya')}}</a>
			</div>
		</div>
		<?php $i++; ?>
	@endforeach
	{!! $shareData->render('pagination') !!}
</div>
<script>
	function tampil(v){
		var cls = {'promo':'lyellow','berita':'lblue'};
		$.ajax({
			url:"{{$page['permalink']}}/xy/a",
			data:"val="+v+"&_token=<?php echo csrf_token();?>",
			type:"POST",
			dataType:"json",
			success:function(data){
				if(data.response == "ok"){
					var html="";
					$.each(data.val, function(k,vals){
						var t = vals.type;
						var url = "{{URL::trans('informasi')}}";
						html+="<div class='list-promo'>";
							html+='<figure><img src="{{URL::asset("/")}}'+vals.image+'" alt="'+v+'"></figure>';
							html+='<div class="desc-promo">';
								html+='<a href="'+url+"/"+vals.permalink+'" class="lbl '+cls[vals.type]+' lbl-sm">'+t.toUpperCase()+'</a>';
								html+='<h4>'+vals.title+'</h4>';
								html+='<p>'+vals.intro+'</p>';
								html+="<a href='"+url+"/read/"+vals.permalink+"' class='link-blue'>{{Wa::trans('site.label_lihat_selengkapnya')}}</a>";
							html+="</div>";
						html+="</div>";
					});
					if(html != ""){
						$(".promo-list").html(html);
					}
				}
			}
		});
	}
</script>