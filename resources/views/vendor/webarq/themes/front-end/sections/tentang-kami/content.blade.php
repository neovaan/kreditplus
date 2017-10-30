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
      <h3 class="tregular"><?php echo str_replace('"','',$data->intro);?></h3>
      <?php
           $desc = explode("<p>",$data->description);
           $i=0;
           foreach($desc as $d){
            if($i == 2){
      ?>
               	<div class="imgctn">
            			<div class="left"><img src="{{URL::asset($data->image1)}}" alt="office 1"></div>
            			<div class="right"><img src="{{URL::asset($data->image2)}}" alt="office 2"></div>
            		</div>
          <?php 
            } 
            echo "<p>".$d."</p>";
            $i++;
          ?>
    <?php } ?>
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
 
