<form method="post" action="" id="frm-a">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="box-chooseproduct">
		<div class="produk-list">
			@foreach($produk as $val)
			<div class="l-produk">
				<div class="in-produk">
					<figure><img src="<?php echo URL::asset($val['image']);?>" alt="produk"></figure>
					<div class="desc-product">
						<h5>{{$val['title']}}</h5>
						<button type="button" onclick="kredit('{{$val['id']}}')" class="btn-box btn-ssm btn-yellow" data-value="pembelian elektronik">PILIH PRODUK</button>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="row_list box-form">
				<div class="col col_5 col_xsml">
					<label>{{$shareData[0]->field1}}</label>
					<select name="brand">
					</select>
				</div>
				<div class="col col_5 col_xsml">
					<label>{{$shareData[0]->field2}}</label>
					<select name="area">
						@foreach($area as $q)
							<option value="{{$q['title']}}">{{$q['title']}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<hr>

			<div class="personal-data">
				<h4>{{$shareData[0]->field3}}</h4>
				<div class="row_list box-form">
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field4}}</label>
						<input type="text" class="i" name="nama">
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field5}}</label>
						<input type="text" class="i" name="alamat">
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field6}}</label>
						<input type="text" class="i" name="ktp">
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field7}}</label>
						<input type="text" class="i" name="telp">
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field8}}</label>
						<input type="email" class="i" name="email">
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field9}}</label>
						<div class="box-radio-button">
							<label class="radio-custom"><input type="radio" value="1" name="rya"> {{$shareData[0]->field10}}</label>
							<label class="radio-custom"><input type="radio" value="0" name="rya"> {{$shareData[0]->field11}}</label>
						</div>
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field12}}</label>
						<textarea name="pesan" class="i"></textarea>
					</div>
					<div class="col col_5 subcap col_xsml">
						<div class="left">
							<div class="g-recaptcha" data-sitekey="{{$shareData[0]->captcha}}"></div>
						</div>
						<div class="right">
							<input type="submit" class="btn-box btn-lg" value="{{$shareData[0]->field13}}">
						</div>
					</div>
				</div>
			</div>
</form>	
<script>
	$(document).ready(function(){
		//overlay();
		var btn = $(".box-chooseproduct button").first().click();
		$('#frm-a').on('submit', function(){
			if(cekForm()){
					$.ajax({
						url:'pengajuan/form/a',
						data:$(this).serialize(),
						type:'POST',
						dataType:'json',
						success:function(data){
							if(data.response == "error"){
								alert('Error captcha');
							}else{
								if(data.response == "ok"){
									alert('Data Berhasil Disimpan');
									location.reload();
								}else{
									alert('Error');
									location.reload();
								}
							}
						}
					});
			 }
			return false;
		});
	});
	function kredit(val){
		$.post('pengajuan/set/a',{_token:"<?php echo csrf_token();?>",val:val}, function(data){
			$('[name="brand"]').html(data);
		});
	}

	function overlay(){
		$('body').prepend('<div class="ovr"></div>');
		$('.ovr').css({'width':$('body').width(),'height':$('body').height(),'z-index':6000,'position':'absolute','opacity':0.2,'background-color':'black'});
	}

	function cekForm(){
		$(".i").css({'border-color':''});
		var i=0;
		$('.i').each(function(k,v){
			if($(this).val() == ""){
				$(this).css({'border-color':'red'});
				i++;
			}
		});
		if(i == 0){
			return true;
		}else{
			return false;
		}
	}
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>