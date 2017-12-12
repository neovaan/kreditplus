 <style>
 .no-spinners {
  -moz-appearance:textfield;
}

.no-spinners::-webkit-outer-spin-button,
.no-spinners::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
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
						<button type="button" onclick="kredit('{{$val['id']}}')" class="btn-box btn-ssm btn-yellow" data-value="pembelian elektronik">{{Wa::trans('site.label_pilih_produk')}}</button>
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
						<input type="number" class="i no-spinners" name="ktp">
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field7}}</label>
						<input type="number" class="i no-spinners" name="telp">
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field8}}</label>
						<input type="email" class="i" name="email">
					</div>
					<div class="col col_5 col_xsml">
						<label>{{$shareData[0]->field9}}</label>
						<div class="box-radio-button">
							<label class="radio-custom"><input type="radio" value="yes" name="yes/no"> {{$shareData[0]->field10}}</label>
							<label class="radio-custom"><input type="radio" value="no" name="yes/no"> {{$shareData[0]->field11}}</label>
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
<div class="popup" id="pop-pengajuan">
    <div class="in-popup">
        <div class="btn-close"></div>
        <div class="wrappop wrapsmall">
            <div class="dpres a-center">
                <h5>{{Wa::trans('site.label_msg_ok')}}</h5>
            </div>
        </div>
    </div>
</div>	
<script>
	$(document).ready(function(){
		$('[name="ktp"]').keydown(function(event){
			var k = event.keyCode;
			var arr = [48,49,50,51,52,53,54,55,56,57,8,9,96,97,98,99,100,101,102,103,104,105];
            if(jQuery.inArray(k,arr) === -1){
        		event.preventDefault();
        	}
        	var l = $(this).val();
        	if(l.length == 16 && k != 8)
        		event.preventDefault();
		});
		$('[name="telp"]').keydown(function(event){
			var k = event.keyCode;
			var arr = [48,49,50,51,52,53,54,55,56,57,8,9,96,97,98,99,100,101,102,103,104,105];
            if(jQuery.inArray(k,arr) === -1){
        		event.preventDefault();
        	}
        	var l = $(this).val();
        	if(l.length == 13 && k != 8)
        		event.preventDefault();
		});
		var btn = $(".box-chooseproduct button").first().click();
		$('#frm-a').on('submit', function(){
			if(cekForm()){
					$.ajax({
						url:'pengajuan/form/a',
						data:$(this).serialize(),
						type:'POST',
						dataType:'json',
						beforeSend:function(){
							overlayDefault();
						},
						success:function(data){
							if($('.ovr').length){
								$('.ovr').remove();
							}
							if(data.response == "error"){
								alert("{{Wa::trans('site.label_error')}}");
							}else{
								if(data.response == "ok"){
									var inpres = $(".popup#pop-pengajuan");
		                            TweenLite.set(inpres, {scale: 0.95});
		                            $(".popup#pop-pengajuan").fadeIn(300);
		                            TweenLite.to(inpres, 0.3, {scale: 1, ease: Power1.easeOut});
		                            setTimeout(function(){
		                           		location.reload();
		                           	});
								}else{
									alert("{{Wa::trans('site.label_error')}}");
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

	function overlayDefault(){
		$('body').prepend('<div class="ovr"></div>');
		$('.ovr').css({'width':$('body').width(),'height':$('body').height(),'z-index':6000,'position':'absolute','opacity':0.4,'background-color':'black'});
	}

	 function clearForm(){
        $(".i").each(function(){
            $(this).val("");
        });
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