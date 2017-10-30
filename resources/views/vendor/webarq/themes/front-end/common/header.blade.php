<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 1/17/2017
 * Time: 2:27 PM
 */ ?>
<?php //print_r();die('fr');?>
<header>
    <div class="wrapper">
        <div class="head-top">
            <div class="left">
                <a href="tel:02129333646"><i class="icwp ic_wa"></i> 021-2933 3646</a>
                <a href="{{URL('karir')}}">Karir</a>
            </div>
            <div class="right">
               <!--  <a href="">Eng</a>
                <a href="">Ind</a> -->
            </div>
        </div>
        <div class="head-bottom">
            <div class="logo">
                <a href="index.php">
                    <img src="{{URL::asset('vendor/webarq/front-end/images/material/logo.png')}}" alt="logo">
                </a>
            </div>
            <div class="head-right">
                <div class="mainmenu">
                    <div class="burg-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul>
                        <li class="menures"><a>MENU</a></li->
                        <?php 
                            foreach(Wa::menu()->getNodes() as $m){
                                if($m['position'][0] == "main"){
                        ?>
                            <li><a href="{{URL($m['permalink'])}}">{{$m['title']}}</a>
                        <?php 
                                 } 
                             } 
                       ?>
                    </ul>
                    <div class="bg-gradient"></div>
                    <div class="bg-overlay"></div>
                    <div class="box-search">
                        <span class="btn-search"></span>
                        <div class="drop-search">
                            <form method="post">
                                <input type="text" name="" placeholder="Search...">
                                <button type="button" class="sub-search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="request-head">
                    <a href="{{URL('pengajuan')}}" class="btn-request">
                        Ajukan Kredit
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>