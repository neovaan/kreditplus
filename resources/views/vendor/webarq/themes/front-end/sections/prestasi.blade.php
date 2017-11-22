<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */ 
?>
      <div class="box-list-achievement">
         <?php foreach ($shareData as $data) { ?>
         <div class="list-achievement">
            <div class="in-achievement btn-poppres">
               <figure><img src="{{URL::asste($data->thumbnail)}}" alt="prestasi"></figure>
               <p>{{$data->intro}}</p>

               <div class="inpop">
                  <figure><img src="{{URL($data->image)}}" alt="{{$data->title}}"></figure>
                  <div class="dpres">
                     <h5>{{$data->title}}</h5>
                     <p>{{$data->intro}}</p>
                  </div>
               </div>
            </div>
         </div>
         <?php  } ?>
      </div>

      <div class="popup" id="pop-prestasi">
         <div class="in-popup">
            <div class="btn-close"></div>
             <div class="wrappop shpop">
               <figure><img src="{{URL::asset('vendor/webarq/front-end/images/content/certificate.jpg')}}" alt="Perusahaan Pembiayaan Terbaik No 1"></figure>
               <div class="dpres">
                  <h5>Perusahaan Pembiayaan Terbaik No 1</h5>
                  <p>Ajang Infobank Multifinance Award 2011</p>
               </div>
             </div>
         </div>
      </div>