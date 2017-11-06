<h3 class="tblue">{{$shareData[0]->title}}</h3>
<div class="box-vis">
	<div class="left">
		<div class="box-nilvis">
			<div class="icon-nilvis icwp ic_vision"></div>
			<div class="desc-nilvis">
				<h3 class="tregular">Visi</h3>
				<p><?php echo $shareData[0]->visi;?></p>
			</div>
		</div>
		<div class="box-nilvis">
			<div class="icon-nilvis icwp ic_mision"></div>
			<div class="desc-nilvis">
				<h3 class="tregular">Misi</h3>
				<?php echo $shareData[0]->misi;?>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="box-nilvis">
			<div class="icon-nilvis icwp ic_value"></div>
			<div class="desc-nilvis">
				<h3 class="tregular">Nilai nilai</h3>
				<?php echo $shareData[0]->nilai;?>
			</div>
		</div>
	</div>
</div>