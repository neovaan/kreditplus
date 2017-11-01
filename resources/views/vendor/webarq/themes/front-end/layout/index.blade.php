<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 1/17/2017
 * Time: 2:08 PM
 */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('meta-title', $metaTitle)</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Favicon -->
    <link rel="shortcut icon" type="images/x-icon" href="{{ URL::asset('favicon.ico') }}"/>
    <!-- Bootstrap 3.3.6 -->
    <!-- Font Awesome -->

    <!-- Enable/Disabled browser system cache -->
    @if (1 === (int) Wa::config('system.site.cache'))
        <meta http-equiv="cache-control" content="max-age=0"/>
        <meta http-equiv="cache-control" content="no-cache"/>
        <meta http-equiv="expires" content="0"/>
        <meta http-equiv="expires" content="{{ date('D, d M Y H:i:s e') }}"/>
        <meta http-equiv="pragma" content="no-cache"/>
    @endif

   
                <!-- Theme style -->
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/front-end/js/slick/slick.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/front-end/js/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/front-end/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/front-end/css/desktop.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/front-end/css/tablet.css')}}">
        <!--endbuild-->
        
        <!--js-->
        <!--build:js js/main.min.js -->
        <script type="text/javascript" src="{{URL::asset('vendor/webarq/front-end/js/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('vendor/webarq/front-end/js/TweenMax.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('vendor/webarq/front-end/js/ScrollToPlugin.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('vendor/webarq/front-end/js/slick/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('vendor/webarq/front-end/js/js_lib.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('vendor/webarq/front-end/js/js_run.js')}}"></script>

        @stack('view-style')

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    {!! Wa::getThemesView($shareThemes, 'common.header') !!}
    <div class="loaderpage"></div>
         @yield('content')
         <!--Footer -->
   <!--  <div class="box-chat">
        <div class="ttl-chat">
            <i class="icwp ic_chat"></i> Online Chat
        </div>
    </div> -->
<footer>
            <div class="foot-top">
                <div class="wrapper">
                    <div class="foot-menu">
                        <div class="list-foot-menu">
                            <h6>Tentang kami</h6>
                            <ul>
                                <li><a href="{{URL('about')}}">Profil Perusahaan</a></li>
                                <li><a href="{{URL('visimisi')}}">Visi Misi & Nilai Perusahaan</a></li>
                                <li><a href="{{URL('manajement')}}">Manajemen</a></li>
                                <li><a href="{{URL('prestasi')}}">Prestasi Perusahaan</a></li>
                                <li><a href="{{URL('gcg')}}">Good Corporate Governance</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Produk</h6>
                            <ul>
                                <li><a href="{{URL('produk')}}">Pembelian Elektronik</a></li>
                                <li><a href="{{URL('produk-mobil')}}">Pembelian Mobil</a></li>
                                <li><a href="{{URL('produk-motor')}}">Pembelian Motor</a></li>
                                <li><a href="{{URL('pinjaman-usaha')}}">Pinjaman Modal Usaha</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Information</h6>
                            <ul>
                                <li><a href="{{URL('informasi')}}">Promo Material</a></li>
                                <li><a href="{{URL('informasi')}}">Berita</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Karir</h6>
                            <ul>
                                <li><a href="{{URL('karir')}}">Lowongan Kerja</a></li>
                                <li><a href="{{URL('kreditplus-karir')}}">Mengapa Bekerja di Kreditplus?</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Kreditplusku</h6>
                            <ul>
                                <li><a href="{{URL('kreditplus-mobile')}}">Kreditplus Mobile</a></li>
                                <li><a href="{{URL('kreditmu')}}">KreditMu</a></li>
                                <li><a href="{{URL('simulasi')}}">Simulasi Kredit</a></li>
                            </ul>
                        </div>
                        <div class="list-foot-menu">
                            <h6>Hi! Kreditplus</h6>
                            <ul>
                                <li><a href="{{URL('contact')}}">Form Kontak</a></li>
                                <li><a href="{{URL('kantor-cabang')}}">Kantor Cabang</a></li>
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
                                <figure><img src="{{URL('vendor/webarq/front-end/images/material/logo-ojk.png')}}"></figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-bottom">
                <div class="wrapper">
                    <div class="logo-foot">
                        <a href=""><img src="{{URL('vendor/webarq/front-end/images/material/logo-footer.png')}}"></a>
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

