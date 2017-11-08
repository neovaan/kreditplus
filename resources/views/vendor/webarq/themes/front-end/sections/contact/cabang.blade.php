<div class="box-filter">
	<div class="right">
		<label>Provinsi : </label>
		<select onchange="kota(this.value)">
			<option value="jabodetabek">Jabodetabek</option>
			<option value="indo">Indonesia</option>
		</select>
	</div>
</div>

<div class="office-list">
	@foreach($shareData as $data)
	<div class="list-office">
		<div class="in-office">
			<h5>{{$data->kota}}</h5>
			<p>{{$data->alamat}}</p>
			<div class="laddress">
				Telp. <a href="tel:02129333646">{{$data->telp}}</a><br>
				Fax. <a href="tel:02129333648">{{$data->fax}}</a><br>
				Email. <a href="mailto:{{$data->email}}">{{$data->email}}</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
<script type="text/javascript">	
	function kota(v){
		$.ajax({
			url:'contact/xy/a',
			data:"val="+v+"&_token={{csrf_token()}}",
			type:'POST',
			dataType:'json',
			success:function(data){
				if(data.response == "ok"){
					var html="";
					$.each(data.val, function(k,val){
						html+='<div class="list-office">';
							html+='<div class="in-office">';
								html+='<h5>'+val.kota+'</h5>';
								html+='<p>'+val.alamat+'</p>';
								html+='<div class="laddress">';
									html+='Telp. <a href="tel:02129333646">'+val.telp+'</a><br/>';
									html+='Fax. <a href="tel:02129333648">'+val.fax+'</a><br/>';
									html+='Email. <a href="mailto:'+v.email+'">'+val.email+'</a>';
								html+='</div>';
							html+='</div>';
						html+="</div>";
					});
					if(html != ""){
						$(".office-list").html(html);
					}
				}
			}
		});
	}
</script>