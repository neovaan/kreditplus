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
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('meta-title', $metaTitle)</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="@yield('meta-description', $metaDescription )">
    <meta name="author" content="{{ Wa::config('system.site.meta.author', 'Webarq') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="images/x-icon" href="{{ URL::asset(Wa::config('system.favicon')) }}"/>
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
         @include('webarq::themes.front-end.sections.footer')
        <!--end of Footer -->
    </body>
</html>

