    <?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 4/28/2017
 * Time: 4:02 PM
 */?>
@extends('webarq::themes.front-end.layout.index')
@section('content')
<section class="ctnwp">
	<div class="wrap-sm">
		<?php
			foreach($shareSections as $data){
				foreach($data->getData()->items() as $q){
			?>
					<h3 class="tblue">{{$q->title}}</h3>
					<h3 class="tregular">{{$q->intro}}</h3>
					<?php echo $q->description; ?>
			<?php
			}
		}
		?>
	</div>
</section>
@endsection
