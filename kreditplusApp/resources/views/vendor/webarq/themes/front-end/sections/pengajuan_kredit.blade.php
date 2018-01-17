<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */
?>
<h3 class="tblue">FORM PENGAJUAN KREDIT</h3>
<p>Saya dengan ini mengajukan pembiayaan (kredit) untuk pembelian produk :</p>
<h4>Jenis Produk</h4>
<form>
	<div class="box-chooseproduct">
		<input type="hidden" name="jenisproduk" value="">
		<div class="produk-list">
			<?php $last = count($shareData) - 1; ?>
			@for($i=1 ; $i<=4; $i++)
			<?php $img = "img".$i; $title = "title".$i; ?>
			<div class="l-produk">
				<div class="in-produk">
					<figure><img src="<?php echo URL::asset($shareData[$last]->$img);?>" alt="produk"></figure>
					<div class="desc-product">
						<h5>{{$shareData[$last]->$title}}</h5>
						<button type="button" class="btn-box btn-ssm btn-yellow" data-value="pembelian elektronik">PILIH PRODUK</button>
					</div>
				</div>
			</div>
			@endfor
		</div>
	</div>
	<div class="row_list box-form">
				<div class="col col_5 col_xsml">
					<label>Brand</label>
					<select>
						<option>Pilih brand</option>
						<option>Brand 1</option>
						<option>Brand 2</option>
						<option>Brand 3</option>
					</select>
				</div>
				<div class="col col_5 col_xsml">
					<label>Area</label>
					<select>
						<option>Pilih area</option>
						<option>Area 1</option>
						<option>Area 2</option>
						<option>Area 3</option>
					</select>
				</div>
			</div>
			<hr>

			<div class="personal-data">
				<h4>Data Pribadi</h4>
				<div class="row_list box-form">
					<div class="col col_5 col_xsml">
						<label>Nama Lengkap</label>
						<input type="text" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>Alamat</label>
						<input type="text" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>No KTP</label>
						<input type="text" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>Telephone</label>
						<input type="text" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>Email</label>
						<input type="email" name="">
					</div>
					<div class="col col_5 col_xsml">
						<label>Apakah anda pernah menggunakan produk Adira Finance</label>
						<div class="box-radio-button">
							<label class="radio-custom"><input type="radio" name="rya"> Ya</label>
							<label class="radio-custom"><input type="radio" name="rya"> Tidak</label>
						</div>
					</div>
					<div class="col col_5 col_xsml">
						<label>Pesan</label>
						<textarea></textarea>
					</div>
					<div class="col col_5 subcap col_xsml">
						<div class="left">
							<div class="g-recaptcha" data-sitekey="6Lf7BDUUAAAAAODhf04fje-sG1Bt7JPZNvG9uXhJ"></div>
						</div>
						<div class="right">
							<input type="submit" name="" class="btn-box btn-lg" value="AJUKAN KREDIT">
						</div>
					</div>
				</div>
			</div>
</form>	
<script src='https://www.google.com/recaptcha/api.js'></script>