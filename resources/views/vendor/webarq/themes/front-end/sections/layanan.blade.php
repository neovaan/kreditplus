<section class="servicehome" id="scbtm">
	<div class="trig-service"></div>
	<div class="wrapper">
		<div class="box-servicehome">
			<div class="left-service">
				<div class="ctn-service">
					<h4 class="tblue a-from-left" delay=".4" trigger-anim=".trig-service">{{$shareData[0]->title}}</h4>
					<h2 class="a-from-left" delay=".5" trigger-anim=".trig-service">{{$shareData[0]->intro}}</h2>
					<p class="a-from-left" delay=".6" trigger-anim=".trig-service"><?php echo $shareData[0]->description; ?></p>
				</div>
				<div class="box-simservice">
					<div class="list-simservice a-from-bottom" delay=".9" trigger-anim=".trig-service">
						<a href="kantor_cabang.php">
							<figure><img src="{{URL('vendor/webarq/front-end/images/content/ic_office.png')}}" alt="kantor cabang"></figure>
							<span>Kantor Cabang</span>
						</a>
					</div>
					<div class="list-simservice a-from-bottom" delay="1" trigger-anim=".trig-service">
						<a href="simulasi.php">
							<figure><img src="{{URL('vendor/webarq/front-end/images/content/ic_simulation.png')}}" alt="simulasi kredit"></figure>
							<span>Simulasi Kredit</span>
						</a>
					</div>
					<div class="list-simservice a-from-bottom" delay="1.1" trigger-anim=".trig-service">
						<a href="tel:02129333646">
							<figure><img src="{{URL('vendor/webarq/front-end/images/content/ic_phone.png')}}" alt="telepon hotline"></figure>
							<span>Telepon Hotline</span>
						</a>
					</div>
				</div>
			</div>
			<div class="right-service">
				<div class="mcycle"><img src="{{URL($shareData[0]->image1)}}" alt="motorcycle"></div>
				<div class="scar"><img src="{{URL($shareData[0]->image2)}}" alt="car"></div>
				<div class="dots"></div>
				<div class="inright-service">
					<div class="servicekredit scbtm">
						<span>Layanan KreditPlus</span>
						<div class="drop-servicekredit">
							<div class="list-servicekredit"><a href="">Layanan 1</a></div>
							<div class="list-servicekredit"><a href="">Layanan 2</a></div>
						</div>
					</div>
					<div class="ctn-kreright">
						<h2 class="a-from-right" delay="1.8" trigger-anim=".trig-service">Belanja Nyaman Tanpa Tunai</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>