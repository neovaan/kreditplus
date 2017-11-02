<h3 class="tblue">{{$shareData[0]->title}}</h3>
<?php echo $shareData[0]->description;?>

<div class="career-form box-form">
	<div class="left">
		<form method="post" id="frm-c">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<label>{{$shareData[0]->field1}}</label>
				<input type="text" name="nama" placeholder="">
			</div>
			<!-- <div class="row">
				<label>Subjek</label>
				<select>
					<option>Subjek option</option>
					<option>Subjek option</option>
				</select>
			</div> -->
			<div class="row">
				<label>{{$shareData[0]->field2}}</label>
				<input type="text" name="telp" placeholder="">
			</div>
			<div class="row">
				<label>{{$shareData[0]->field3}}</label>
				<input type="email" name="email" placeholder="">
			</div>
			<div class="row">
				<label>{{$shareData[0]->field4}}</label>
				<textarea name="pesan"></textarea>
			</div>
			<div class="row submit">
				<input type="submit" class="btn-box btn-lg" value="SUBMIT">
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
		$('#frm-c').submit(function(){
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