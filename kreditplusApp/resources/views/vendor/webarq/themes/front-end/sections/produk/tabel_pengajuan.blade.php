<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */ ?>
<table>
	<thead>
		<tr>
			<th class="a-left">Persyaratan Umum</th>
			<th>Karyawan</th>
			<th>Wiraswasta</th>
			<th>Profesional</th>
		</tr>
	</thead>
	<tbody>
@foreach ($shareData as $data)
	<tr>
		<td data-title="{{$data->persyaratan}}">{{$data->persyaratan}}</td>
		<td data-title="Karyawan" class="a-center">@if($data->karyawan)<i class="icwp ic_checked"></i>@endif</td>
		<td data-title="Wiraswasta" class="a-center">@if($data->wiraswasta)<i class="icwp ic_checked"></i>@endif</td>
		<td data-title="Profesional" class="a-center">@if($data->profesional)<i class="icwp ic_checked"></i>@endif</td>
	</tr>
@endforeach
	</tbody>
</table>
