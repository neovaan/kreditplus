<h3 class="tblue">{{$shareData[0]->title}}</h3>
<?php echo $shareData[0]->intro; ?>
<img src="{{URL($shareData[0]->image)}}" alt="information">
<br>
<br>
<?php echo $shareData[0]->description;?>
<?php
  $page = Wa::menu()->getActive()->eloquent()->getAttributes();
?>
@if($page['permalink'] == "kreditplus-mobile")
	<div class="downloadapps margtop">
		<div class="left">Download Kreditplus Mobile di google Play</div>
		<div class="right">
			<a href="" target="_blank"><img src="{{URL('vendor/webarq/front-end/images/content/google-play.png')}}" alt="google play apps"></a>
		</div>
	</div>
@endif
@if($page['permalink'] == "kreditmu")
	<a href="" class="btn-box btn-red">PELAJARI LEBIH LANJUT</a>
@endif