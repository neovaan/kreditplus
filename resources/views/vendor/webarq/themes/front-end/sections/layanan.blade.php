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
							<figure><img src="{{URL($shareData[0]->image3)}}" alt="kantor cabang"></figure>
							<span>{{$shareData[0]->txt3}}</span>
						</a>
					</div>
					<div class="list-simservice a-from-bottom" delay="1" trigger-anim=".trig-service">
						<a href="simulasi.php">
							<figure><img src="{{URL($shareData[0]->image4)}}" alt="simulasi kredit"></figure>
							<span>{{$shareData[0]->txt4}}</span>
						</a>
					</div>
					<div class="list-simservice a-from-bottom" delay="1.1" trigger-anim=".trig-service">
						<a href="tel:02129333646">
							<figure><img src="{{URL($shareData[0]->image5)}}" alt="telepon hotline"></figure>
							<span>{{$shareData[0]->txt5}}</span>
						</a>
					</div>
				</div>
			</div>
			<div class="right-service">
				<div class="mcycle"><img src="{{URL::asset($shareData[0]->image1)}}" alt="motorcycle"></div>
				<div class="scar"><img src="{{URL::asset($shareData[0]->image2)}}" alt="car"></div>
				<div class="dots"></div>
				<div class="inright-service">
					<div class="servicekredit scbtm">
						<span>{{$shareData[0]->txt1}}</span>
						<div class="drop-servicekredit">
							<div class="list-servicekredit"><a href="">Layanan 1</a></div>
							<div class="list-servicekredit"><a href="">Layanan 2</a></div>
						</div>
					</div>
					<div class="ctn-kreright">
						<h2 class="a-from-right" delay="1.8" trigger-anim=".trig-service">{{$shareData[0]->txt2}}</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>