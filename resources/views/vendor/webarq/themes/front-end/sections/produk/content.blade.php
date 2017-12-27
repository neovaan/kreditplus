@foreach ($shareData as $data)
   <h3 class="tblue"><?php echo $data->title;?></h3>
   <h3 class="tregular"><?php echo str_replace('"','',$data->intro);?></h3>
   <?php echo $data->description; ?>
@endforeach
<script>
	$('table tbody tr td img').each(function(k,v){
		console.log($(this).children());
		$(this).replaceWith("<i class='icwp ic_checked'></i>");
	});
</script>