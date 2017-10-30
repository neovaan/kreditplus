    <?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 4/28/2017
 * Time: 4:02 PM
 */?>
@extends('webarq::themes.front-end.layout.index')
<section class="banner">
  <figure>
    <img src="{{URL::asset('vendor/webarq/front-end/images/content/banner-simulasi.jpg')}}" alt="banner">
  </figure>
  <div class="submenu-banner">
    <div class="wrap-sm">
      <div class="box-submenu">
        <div class="btn-submenu">Submenu</div>
        <div class="drop-submenu">
          <ul>
            <li class="active"><a href="simulasi">Simulasi</a></li>
            <li><a href="pengajuan-kredit">Pengajuan Kredit</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@section('content')
<section class="ctnwp">
<div class="wrap-sm">
   @include('webarq::themes.front-end.sections.simulasi')
</div>
</section>
@endsection
