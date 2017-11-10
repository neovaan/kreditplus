@foreach($shareData as $d)
<div class="downloadapps margtop">
	<div class="left">{{$d->txt}}</div>
	<div class="right">
		<a href="{{$d->link}}" target="_blank"><img src="{{URL($d->image)}}" alt="google play apps"></a>
	</div>
</div>
@endforeach