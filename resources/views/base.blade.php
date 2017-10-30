<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Kredit Plus</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

        <link rel="icon" href="{{URL('images/favicon.ico')}}" type="image/gif">

        <!--Style-->
        <!--build:css css/styles.min.css--> 
        <link rel="stylesheet" href="{{URL('js/slick/slick.css')}}">
        <link rel="stylesheet" href="{{URL('js/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{URL('css/style.css')}}">
        <link rel="stylesheet" href="{{URL('css/desktop.css')}}">
        <link rel="stylesheet" href="{{URL('css/tablet.css')}}">
        <link rel="stylesheet" href="{{URL('css/mobile.css')}}">
        <!--endbuild-->
        
        <!--js-->
        <!--build:js js/main.min.js -->
        <script type="text/javascript" src="{{URL('js/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{URL('js/TweenMax.min.js')}}"></script>
        <script type="text/javascript" src="{{URL('js/ScrollToPlugin.min.js')}}"></script>
        <script type="text/javascript" src="{{URL('js/slick/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{URL('js/js_lib.js')}}"></script>
        <script type="text/javascript" src="{{URL('js/js_run.js')}}"></script>
        <!--endbuild-->

    </head>
    <body>


        <!-- header -->
        <header>
            <div class="wrapper">
                <div class="head-top">
                    <div class="left">
                        <a href="tel:02129333646"><i class="icwp ic_wa"></i> 021-2933 3646</a>
                        <a href="{{URL('karir/list')}}">Karir</a>
                    </div>
                    <div class="right">
                        <a href="">Eng</a>
                        <a href="">Ind</a>
                    </div>
                </div>
                <div class="head-bottom">
                    <div class="logo">
                        <a href="index.php">
                            <img src="{{URL('images/material/logo.png')}}" alt="logo">
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
                                <li><a href="{{URL('about/profile')}}">Tentang Kami</a></li>
                                <li><a href="{{URL('produk')}}">Produk</a></li>
                                <li><a href="{{URL('plusku')}}">KreditPlusku</a></li>
                                <li><a href="{{URL('informasi')}}">Information</a></li>
                                <li><a href="{{URL('contact')}}">Hi! KreditPlus</a></li>
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
        <!-- end of header -->
        <div class="loaderpage"></div>
         @yield('content')
         <!--Footer -->
        <div class="box-chat">
            <div class="ttl-chat">
                <i class="icwp ic_chat"></i> Online Chat
            </div>
        </div>
        <footer>
            <div class="foot-top">
                <div class="wrapper">
                    <div class="foot-menu">
                        <div class="list-foot-menu">
                            <h6>Tentang kami</h6>
                            <ul>
                                <li><a href="{{URL('about/profile')}}">Profil Perusahaan</a></li>
                                <li><a href="{{URL('about/visimisi')}}">Visi Misi & Nilai Perusahaan</a></li>
                                <li><a href="{{URL('about/management')}}">Manajemen</a></li>
                                <li><a href="{{URL('about/prestasi')}}">Prestasi Perusahaan</a></li>
                                <li><a href="{{URL('about/gcg')}}">Good Corporate Governance</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Produk</h6>
                            <ul>
                                <li><a href="{{URL('produk/elektronik')}}">Pembelian Elektronik</a></li>
                                <li><a href="{{URL('produk/mobil')}}">Pembelian Mobil</a></li>
                                <li><a href="{{URL('produk/motor')}}">Pembelian Motor</a></li>
                                <li><a href="{{URL('produk/pinjaman')}}">Pinjaman Modal Usaha</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Information</h6>
                            <ul>
                                <li><a href="{{URL('informasi/promo')}}">Promo Material</a></li>
                                <li><a href="#">Berita</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Karir</h6>
                            <ul>
                                <li><a href="{{URL('karir/list')}}">Lowongan Kerja</a></li>
                                <li><a href="{{URL('karir')}}">Mengapa Bekerja di Kreditplus?</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Kreditplusku</h6>
                            <ul>
                                <li><a href="#">Kreditplus Mobile</a></li>
                                <li><a href="#">KreditMu</a></li>
                                <li><a href="{{URL('simulasi')}}">Simulasi Kredit</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Hi! Kreditplus</h6>
                            <ul>
                                <li><a href="{{URL('contact')}}">Form Kontak</a></li>
                                <li><a href="{{URL('contact')}}">Kantor Cabang</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="foot-subs">
                        <div class="box-subscribe">
                            <h6>Daftar dan Dapatkan Tips Finansial</h6>
                            <div class="boxf-mail">
                                <form>
                                    <input type="email" name="" placeholder="Email">
                                    <input type="submit" name="" value="" class="btn-fly">
                                </form>
                            </div>
                        </div>
                        <div class="box-ojk">
                            <h6>Terdaftar dan diawasi oleh</h6>
                            <a href="">
                                <figure><img src="{{URL('images/material/logo-ojk.png')}}"></figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-bottom">
                <div class="wrapper">
                    <div class="logo-foot">
                        <a href=""><img src="{{URL('images/material/logo-footer.png')}}"></a>
                    </div>
                    <div class="copyright">Copyright © 2017 kreditplus . Site By <a href="https://www.webarq.com" target="_blank">WEBARQ</a></div>
                    <div class="sosmed-foot">
                        <span>Follow Us</span>
                        <a href=""><i class="icwp ic_fb"></i></a>
                        <a href=""><i class="icwp ic_ig"></i></a>
                        <a href=""><i class="icwp ic_tw"></i></a>
                        <a href=""><i class="icwp ic_in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!--end of Footer -->
    </body>
</html>