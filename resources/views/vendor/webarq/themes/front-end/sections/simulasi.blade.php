<style>
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance:textfield;
}
</style>
<h3 class="tblue">{{$shareData[0]->title}}</h3>
<?php
	$bulan = 12;
	$tmp_bulan = array();
	for($i=1;$i<=5;$i++){
		$tmp_bulan[]=$bulan * $i;
	}
?>

<div class="career-form box-form">
	<div class="left">
		<form>
			<div class="row">
				<label>{{$shareData[0]->field1}}</label>
				<select id="tenor">
					@foreach($tmp_bulan as $b)
						<option value="{{$b}}">{{$b}} bulan</option>
					@endforeach
				</select>
			</div>
			<div class="row">
				<label>{{$shareData[0]->field2}}</label>
				<input type="text"  onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" name="harga" class="i">
			</div>
			<div class="row">
				<label>{{$shareData[0]->field3}}</label>
				<input type="text" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" id="dpx" class="i">
			</div>
			<div class="row">
				<label>{{$shareData[0]->field4}}</label>
				<input type="number" class="i" name="bunga" placeholder="Min 2%">
			</div>
			<div class="row">
				<label>{{$shareData[0]->txt1}}</label>
				<label class="block"><strong>Rp 100.000,-</strong></label>
			</div>
			<div class="row submit">
				<input type="button" onclick="simulasi()" class="btn-box btn-lg" value="{{$shareData[0]->txtbtn}}">
			</div>
		</form>
	</div>
	<div class="right">
		<div class="address-box a-center">
			<h4 class="reg">{{$shareData[0]->angsuran1}}</h4>
			<h3 id="angsuran"></h3>
			<br>
			<h4 class="reg">{{$shareData[0]->angsuran2}}</h4>
			<h3 id="dp_awal"></h3>
		</div>
		<div class="notsim">*{{$shareData[0]->txt2}}</div>
	</div>
</div>
<script type="text/javascript" src="{{URL::asset('a.js')}}"></script>
<script>
$(document).ready(function(){
		
	});
	function simulasi(){
		var i=0;
		$('.i:input').each(function(k,v){
			if($(v).val() == ""){
				$(this).css({'border-color':'red'});
				i++;
			}
			
		});
		if($("#tenor").val() == ""){
			$("#select").css({'border-color':'red'});
			i++;
		}
		if(i == 0){
			var tenor  = $("#tenor").val();
			var harga  = $('[name="harga"]').val();
			harga = replaceTitik(harga);
			var dp  = $("#dpx").val();
			dp = replaceTitik(dp);
			var bunga  = $('[name="bunga"]').val();
			// var uang_muka = (parseInt(dp)/100)*parseInt(harga);
			// var pokok_hutang = 1+((parseInt(bunga)/100)*parseInt(tenor));
			// var angsuran = (parseInt(harga) - parseInt(uang_muka)) * parseInt(pokok_hutang) / parseInt(tenor);
			var cicilan = parseInt(harga) / parseInt(tenor);
			var persen = parseInt(bunga) / 100;
			var bunga_cicilan =  (parseInt(harga) * persen) / 12;
			var angsuran = cicilan + bunga_cicilan;
			$("#angsuran").html(rupiah(angsuran));
			$("#dp_awal").html(rupiah(dp));
		}
	}

	function replaceTitik(v){
		var ret = '';
		for(var i = 0; i < v.length; i++){
			if(v[i] != ".")
				ret += v[i];
		}
		return ret;
	}

	function rupiah(val){
		var	number_string = val.toString();
			number_string = number_string.replace("-","");
			var sisa 	= number_string.length % 3,
			rupiah 	= number_string.substr(0, sisa),
			ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
				
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		return "Rp. "+ rupiah;
	}
</script>