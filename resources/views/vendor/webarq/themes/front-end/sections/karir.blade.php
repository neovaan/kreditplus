<?php

?>
	<div class="box-acc">
		@foreach($shareData as $data)

		<div class="list-acc active">
			<div class="btn-acc">
				<h5>{{$data->title_job}}</h5>
				<span>Penempatan : {{$data->penempatan}}</span>
				<div class="plusacc">
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="desc-acc">
				<!-- <ol>
					<li>Usia maksimal 30 tahun.</li>
					<li>Pendidikan minimal S1</li>
					<li>Memiliki pengalaman minimal 1 tahun retail banking atau perusahaan pembiayaan</li>
					<li>Memiliki komunikasi yang baik & mampu menganalisa dengan baik</li>
					<li>Berdedikasi, memiliki integritas, loyalitas yang tinggi, cekatan, kreatif, self motivated, good on teamwork</li>
				</ol> -->
				<?php echo $data->description; ?>
				<br>
				<br>
				Apply dengan mengirimkan CV Anda ke : <a href="mailto:recruitment@finansia.com" class="link-black">recruitment@finansia.com</a>
			</div>
		</div>
		@endforeach
	</div>