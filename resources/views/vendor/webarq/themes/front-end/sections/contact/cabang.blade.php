<h3 class="tblue">KANTOR CABANG</h3>
		<h3 class="tregular">Temukan Cabang Kreditplus terdekat</h3>

		<div class="box-filter">
			<div class="left">Pilih kawasan, untuk melihat informasi GB store terdekat </div>
			<div class="right">
				<label>Provinsi : </label>
				<select>
					<option>Jabodetabek</option>
					<option>Indonesia</option>
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
						Email. <a href="mailto:cs@kreditplus.com">{{$data->email}}</a>
					</div>
				</div>
			</div>
			@endforeach
			
		</div>