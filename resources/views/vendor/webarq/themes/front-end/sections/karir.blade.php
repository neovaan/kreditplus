<?php

?>
<div class="wrap-sm">
	<h3 class="tblue">BERGABUNG DENGAN KREDITPLUS</h3>
	<h3 class="tregular">Kreditplus membuka peluang bagi professional muda/lulusan baru untuk pengalaman belajar sekaligus bekerja yang mengasah dan membangun kapabilitas diri. Bergabunglah bersama kami.</h3>
	<p>Mencari individu-individu berbakat dan berpotensi yang mampu mencerminkan tata nilai perusahaan untuk menjadi bagian dari tim yang mengakselerasi pencapaian visi. Kembangkanlah ide, kreativitas dan inovasi anda sebagai solusi dalam rangka peningkatan kualitas operasional sampai dengan pengembangan bisnis. Temukan berbagai pekerjaan dan tugas yang menantang dan berbagai pilihan tempat bekerja. Anda akan bekerja sama dengan rekan kerja dari berbagai latar belakang pendidikan, profesi dan budaya. Temukan pengalaman berharga dan rasakan bagaimana semua hal tersebut dapat mengembangkan kemampuan dan kompetensi anda.</p>
	
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
</div>