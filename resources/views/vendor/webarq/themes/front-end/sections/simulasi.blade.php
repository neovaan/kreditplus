<h3 class="tblue">SIMULASI KREDIT</h3>
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
				<label>Tenor</label>
				<select id="tenor">
					@foreach($tmp_bulan as $b)
						<option value="{{$b}}">{{$b}} bulan</option>
					@endforeach
				</select>
			</div>
			<div class="row">
				<label>Harga</label>
				<input type="text" name="harga" class="i">
			</div>
			<div class="row">
				<label>Uang Muka</label>
				<input type="text" id="dpx" class="i">
			</div>
			<div class="row">
				<label>Bunga</label>
				<input type="email" class="i" name="bunga" placeholder="Min 2%">
			</div>
			<div class="row">
				<label>Admin Fee</label>
				<label class="block"><strong>Rp 100.000,-</strong></label>
			</div>
			<div class="row submit">
				<input type="button" onclick="simulasi()" class="btn-box btn-lg" value="SIMULASI">
			</div>
		</form>
	</div>
	<div class="right">
		<div class="address-box a-center">
			<h4 class="reg">Angsuran Perbulan</h4>
			<h3 id="angsuran">Rp 2.000.000,-</h3>
			<br>
			<h4 class="reg">Angsuran Awal</h4>
			<h3 id="dp_awal">Rp 20.000.000,-</h3>
		</div>
		<div class="notsim">*Simulasi ini hanya sebagai ilustrasi</div>
	</div>
</div>
<script>
$(document).ready(function(){
		$('[type="text"]').keydown(function(event){
			var code = event.keyCode || event.which;
			var reg = [48,49,50,51,52,53,54,55,56,57,58,59,8,9];
			if(jQuery.inArray(code, reg) === -1){
				event.preventDefault();
			}
		});
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
			var dp  = $("#dpx").val();
			var bunga  = $('[name="bunga"]').val();
			var uang_muka = (parseInt(dp)/100)*parseInt(harga);
			var pokok_hutang = 1+((parseInt(bunga)/100)*parseInt(tenor));
			var angsuran = (parseInt(harga) - parseInt(uang_muka)) * parseInt(pokok_hutang) / parseInt(tenor);
			$("#angsuran").html(rupiah(angsuran));
			$("#dp_awal").html(rupiah(dp));
		}
	}

	function rupiah(val){
		var	number_string = val.toString(),
			sisa 	= number_string.length % 3,
			rupiah 	= number_string.substr(0, sisa),
			ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
				
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		return "Rp. "+ rupiah;
	}
</script>