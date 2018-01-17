<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */ ?>
 <?php
  $page = Wa::menu()->getActive()->eloquent()->getAttributes();
?>
@foreach ($shareData as $data)
   <h3 class="tblue"><?php echo $data->title;?></h3>
   @if(in_array($page['permalink'], array("manajement")) )
      <p><?php echo $data->intro; ?></p>
   @else
      <h3 class="tregular"><?php echo str_replace('"','',$data->intro);?></h3>
   @endif
   @if($data->img_left && $data->img_right)
   	<div class="imgctn">
			<div class="left"><img src="{{URL::asset($data->img_left)}}" alt="office 1"></div>
			<div class="right"><img src="{{URL::asset($data->img_right)}}" alt="office 2"></div>
		</div>
    @endif
    @if($data->img_information)
      <div class="a-center">
         @if($data->img_information)<img src='{{URL($data->img_information)}}'>@endif
      </div>
    @endif
     @if(!in_array($page['permalink'],array("manajement")) )
        <?php echo $data->description;?>
    @endif
    <br/>
    @if($page['permalink'] == "kreditmu")
      <a href="" class="btn-box btn-red">PELAJARI LEBIH LANJUT</a>
    @endif
    <!-- Button Karir -->
     @if($page['permalink'] == "kreditplus-karir")
       <a href="{{URL('career-list')}}" class="btn-box btn-red">LIHAT LOWONGAN PEKERJAAN</a>
     @endif
@endforeach
<script>
   $(function(){
      if($(".ctnwp ul").length){
         var html = '';
         var val = $(".ctnwp ul li").text(function(text,val){
            html+= "<li>"+val+"</li>";
         });
         var q = $(".ctnwp li").parent();
         q.replaceWith('<ol>'+html+'</ol>');
      }
   });
</script>
 
