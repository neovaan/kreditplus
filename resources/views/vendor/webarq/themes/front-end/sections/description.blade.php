<h3 class="tblue">{{$shareData[0]->title}}</h3>
<?php echo $shareData[0]->intro; ?>
<?php
  $page = Wa::menu()->getActive()->eloquent()->getAttributes();
?>
