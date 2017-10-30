<h3 class="tblue">{{$shareData[0]->title}}</h3>
<?php echo $shareData[0]->description;?>

<div class="career-form box-form">
	<div class="left">
		<form method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<label>Nama</label>
				<input type="text" name="nama" placeholder="Nama anda">
			</div>
			<!-- <div class="row">
				<label>Subjek</label>
				<select>
					<option>Subjek option</option>
					<option>Subjek option</option>
				</select>
			</div> -->
			<div class="row">
				<label>Nomor Telephone</label>
				<input type="text" name="telp" placeholder="Nama anda">
			</div>
			<div class="row">
				<label>Email</label>
				<input type="email" name="email" placeholder="Nama anda">
			</div>
			<div class="row">
				<label>Pesan</label>
				<textarea name="pesan"></textarea>
			</div>
			<div class="row submit">
				<input type="submit" class="btn-box btn-lg" value="KIRIM">
			</div>
		</form>
	</div>
	<div class="right">
		<div class="address-box">
			<i class="icwp ic_building"></i>
			<h4>PT. Finansia Multi Finance</h4>
			<p>{{$shareData[0]->alamat}}</p>
			<div class="laddress">
				Telp. <a href="tel:02129333646">{{$shareData[0]->telp}}</a><br>
				Fax. <a href="tel:02129333648">{{$shareData[0]->fax}}</a><br>
				Email. <a href="mailto:cs@kreditplus.com">{{$shareData[0]->email}}</a>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('form').submit(function(){
			$.ajax({
				url:'contact',
				type:$(this).attr('method'),
				data:$(this).serialize(),
				dataType:'json',
				success:function(data){
					if(data.response == "ok"){
						alert('Data Berhasil Tersimpan');
						location.reload();
					}
				}
			});
			return false;
		});

	});
</script>