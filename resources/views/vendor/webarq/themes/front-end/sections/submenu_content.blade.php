<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/24/2017
 * Time: 6:09 PM
 */ ?>
     <h3 class="tblue">PRESTASI</h3>
      <h3 class="tregular">This is Photoshop's version  of Lorem Ipsum.</h3>
      <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
      
      <div class="box-list-achievement">
         <?php foreach ($shareData as $data) {  ?>
         <div class="list-achievement">
            <div class="in-achievement btn-poppres">
               <h4>{{$data->title}}</h4>
               <p>{{$data->intro}}</p>

               <div class="inpop">
                  <figure><img src="{{URL($data->image)}}" alt="{{$data->title}}"></figure>
                  <div class="dpres">
                     <h5></h5>
                     <p></p>
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