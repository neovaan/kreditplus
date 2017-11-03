    <?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 4/28/2017
 * Time: 4:02 PM
 */?>
@extends('webarq::themes.front-end.layout.index')
@section('content')
<section class="banner">
    <div class="box-maps">
        <div id="map_location"></div>
    </div>
    <div class="submenu-banner">
        <div class="wrap-sm">
            <div class="box-submenu">
                <div class="btn-submenu">Submenu</div>
                <div class="drop-submenu">
                    <ul>
                        @foreach(Wa::menu()->getNodes() as $m)
                            @if(in_array($m['parent_id'],(array('14')))  || $m['id'] == "14" )
                                <li><a href="{{URL($m['permalink'])}}">{{$m['title']}}</a></li>
                            @endif
                        @endforeach
                      <!--   <li class="active"><a href="{{URL('contact')}}">Contact Form</a></li>
                        <li><a href="{{URL('kantor-cabang')}}">Kantor Cabang</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ctnwp">
<div class="wrap-sm">
@if ([] !== $shareSections)
    @foreach ($shareSections as $section)
      @if($section->getKey() != 'banner')
        {!! $section->toHtml() !!}
      @endif          
    @endforeach
@endif
<?php
$res = [    // ganti value ini dari DataBase    
            [
                'name' => 'Kreditplus',
                'contact' => 'Kredit Plus Kedoya',
                'href' => '<a href="#location1">View Detail</a>',
                'lat' => -6.1782296,
                'long'=> 106.7639424,
                'icmark'=> URL::asset('vendor/webarq/front-end/images/material/ic_marker.png')
            ]
        ];

$json = [];
foreach ($res AS $val) {
    $key = $val['lat'].'|'.$val['long'].'|'.$val['icmark'];
    if (array_key_exists($key, $json)) {
        array_push($json[$key], $val);
        continue;
    }
    $json[$key] = [$val];
}

?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmS8x7WCej7xbfM134RQYiNm_W_k4g5t8" type="text/javascript"></script>
<script type="text/javascript">

        var rmarker = new Array();

        var json = <?php echo json_encode($json); ?>;
    $(document).ready(function () {
        var mapIcon = '{{URL::asset("vendor/webarq/front-end/images/material/ico_map.png")}}';

                /*var markers = [
                    ["Lokasi Kantor",3.5653088,98.5470958], 
                    ["Lokasi Kantor",-6.2079179,106.827408], 
                    ["Lokasi Kantor",-1.255499,131.9832697], 
                    ["Lokasi Kantor",-2.9154406,107.7473872], 
                    ["Lokasi Kantor",-1.496066,110.4699927], 
                    ["Lokasi Kantor",-6.2333863,106.8306576],
                ];*/ 

        var map;
        var center= {lat:-6.1561976, lng: 106.8410695},
            zoom = 1;
        // if($(window).width() <= 1200) {
        //     center= {lat: -3.0469665, lng: 110.1623948};
        //     zoom = 2;
        // }

        var mapOptions = {
            center: center,
            zoom: zoom,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false,
            scrollwheel: true,
            styles: [{featureType:"landscape",stylers:[{hue:"#FFAD00"},{saturation:50.2},{lightness:-34.8},{gamma:1}]},{featureType:"road.highway",stylers:[{hue:"#FFAD00"},{saturation:-19.8},{lightness:-1.8},{gamma:1}]},{featureType:"road.arterial",stylers:[{hue:"#FFAD00"},{saturation:72.4},{lightness:-32.6},{gamma:1}]},{featureType:"road.local",stylers:[{hue:"#FFAD00"},{saturation:74.4},{lightness:-18},{gamma:1}]},{featureType:"water",stylers:[{hue:"#00FFA6"},{saturation:-63.2},{lightness:38},{gamma:1}]},{featureType:"poi",stylers:[{hue:"#FFC300"},{saturation:54.2},{lightness:-14.4},{gamma:1}]}]
        };
        

        // Display a map on the page
        map = new google.maps.Map(document.getElementById('map_location'), mapOptions);
        map.setTilt(50);

        //intializeGmaps('map_location', [-1.0469665, 118.1623948], markers, baseUrl, zoom);
        //storeLocatorMaps('map_location', baseUrl);

        var infowindow = new google.maps.InfoWindow();
        //   content: location
        // });
        // var infowindow = new google.maps.InfoWindow({});

        // console.log(json);


        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
            this.setZoom(12);
            google.maps.event.removeListener(boundsListener);
        });

        
        $.each(json, function(k, v) {
            var latLong = k.split('|');
            var marker = new google.maps.Marker({
                uniqueId: k,
                position: new google.maps.LatLng(parseFloat(latLong[0]), parseFloat(latLong[1])),
                icon: latLong[2],
                map: map,
            });
            // console.log(latLong[2]);

            rmarker[k] = marker;

            marker.addListener('click', function () {
                var content = '';

                $.each(json[this.uniqueId], function (k, v) {
                    content += '<div class="map_content"><b>' + v.name + '</b><br>' + v.contact + '<br></div>';
                });
                infowindow.setContent(content);
                infowindow.open(map, marker);

                setTimeout(function() { smootScroll(); }, 100);

            });
        });


    });


    function goMarker(id)
    {
        google.maps.event.trigger(rmarker[id], "click");
        return false;
    }
</script>
</div>
</section>
@endsection
