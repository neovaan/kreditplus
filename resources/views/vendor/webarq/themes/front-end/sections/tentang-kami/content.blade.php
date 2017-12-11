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
   @if($data->intro != "")
     <h3 class="tregular"><?php echo str_replace('"','',$data->intro);?></h3>
   @endif
  
   <?php echo $data->description;?>
   @if($data->link && $data->txtbtn_pelajari)
       <br/>
       <a href="{{URL::trans($data->link)}}" class="btn-box btn-red">{{$data->txtbtn_pelajari}}</a>
       <br/>
    @endif
@endforeach
<script>
   $(function(){
      if($(".ctnwp ol").length){
         var html = '';
         var val = $(".ctnwp ol li").text(function(text,val){
            html+= "<li>"+val+"</li>";
         });
         var q = $(".ctnwp li").parent();
         q.replaceWith('<ul>'+html+'</ul>');
      }
   });
</script>
 
