<h3 class="tblue">{{$shareData[0]->title}}</h3>
<?php echo $shareData[0]->intro; ?>
<?php
  $page = Wa::menu()->getActive()->eloquent()->getAttributes();
?>
@if($page['permalink'] == "pengajuan")
	<form method="post" action="">
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
					<label>Brand</label>
					<select name="brand">
					</select>
				</div>
				<div class="col col_5 col_xsml">
					<label>Area</label>
					<select name="area">
						@foreach($area as $q)
							<option value="{{$q['id']}}">{{$q['title']}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<hr>

			<div class="personal-data">
				<h4>Data Pribadi</h4>
				<div class="row_list box-form">
					<div class="col col_5 col_xsml">
						<label>Nama Lengkap</label>
						<input type="text" class="i" name="nama">
					</div>
					<div class="col col_5 col_xsml">
						<label>Alamat</label>
						<input type="text" class="i" name="alamat">
					</div>
					<div class="col col_5 col_xsml">
						<label>No KTP</label>
						<input type="text" class="i" name="ktp">
					</div>
					<div class="col col_5 col_xsml">
						<label>Telephone</label>
						<input type="text" class="i" name="telp">
					</div>
					<div class="col col_5 col_xsml">
						<label>Email</label>
						<input type="email" class="i" name="email">
					</div>
					<div class="col col_5 col_xsml">
						<label>Apakah anda pernah menggunakan produk Adira Finance</label>
						<div class="box-radio-button">
							<label class="radio-custom"><input type="radio" value="1" name="rya"> Ya</label>
							<label class="radio-custom"><input type="radio" value="0" name="rya"> Tidak</label>
						</div>
					</div>
					<div class="col col_5 col_xsml">
						<label>Pesan</label>
						<textarea name="pesan" class="i"></textarea>
					</div>
					<div class="col col_5 subcap col_xsml">
						<div class="left">
							<div class="g-recaptcha" data-sitekey="6LeNHTYUAAAAAAy8SIrkraJo9wdZVpW_hnw5mljT"></div>
						</div>
						<div class="right">
							<input type="submit" class="btn-box btn-lg" value="AJUKAN KREDIT">
						</div>
					</div>
				</div>
			</div>
</form>	
<script>
	$(document).ready(function(){
		var btn = $(".box-chooseproduct button").first().click();
		$('form').on('submit', function(){
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
@endif