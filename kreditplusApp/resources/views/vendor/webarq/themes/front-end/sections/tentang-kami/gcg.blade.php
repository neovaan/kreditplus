<h3 class="tblue">{{$shareData[0]->title}}</h3>
<h3 class="tregular"><?php echo $shareData[0]->intro; ?></h3>
<div class="a-center">
	<img src="{{URL($shareData[0]->image)}}" alt="GCG">
</div>
<br/>
<?php echo $shareData[0]->description;?>