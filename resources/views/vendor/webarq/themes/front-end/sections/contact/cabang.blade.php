<div class="box-filter">
    <div class="left">{{Wa::trans('site.text_kawasan_kantor_cabang')}}</div>
	<div class="right">
		<label><b>{{Wa::trans('site.text_cabang')}} : </b></label>
		<select class="border" onchange="kota(this.value)" id="prof">
			<option value="jabodetabek">Jabodetabek</option>
			<option value="indo">Indonesia</option>
		</select>
	</div>
</div>

<div class="office-list">
    <?php $res=array();?>
    <?php $i = 0;?>
	@foreach($shareData as $data)
        <?php 
            if($data->lat && $data->long){
                $a = [
                    'name' => $data->title_name,
                    'contact' => $data->contact_name,
                    'href' => '<a href="#location1">View Detail</a>',
                    'lat' => $data->lat,
                    'long'=> $data->long,
                    'icmark'=> 'vendor/webarq/front-end/images/material/ic_marker.png'
                ];
                array_push($res,$a);
            }
       ?>
	<div class="list-office">
		<div class="in-office" onclick="goMarker('{{$i}}')">
			<h5>{{$data->kota}}</h5>
			<p>{{$data->alamat}}</p>
			<div class="laddress">
				Telp. <a href="tel:02129333646">{{$data->telp}}</a><br>
				Fax. <a href="tel:02129333648">{{$data->fax}}</a><br>
				Email. <a href="mailto:{{$data->email}}">{{$data->email}}</a>
			</div>
		</div>
	</div>
    <?php $i++;?>
	@endforeach
</div>
<script type="text/javascript">	
    $(document).ready(function(){
        var json_prov = [{"id":"11","name":"ACEH"},{"id":"12","name":"SUMATERA UTARA"},{"id":"13","name":"SUMATERA BARAT"},{"id":"14","name":"RIAU"},{"id":"15","name":"JAMBI"},{"id":"16","name":"SUMATERA SELATAN"},{"id":"17","name":"BENGKULU"},{"id":"18","name":"LAMPUNG"},{"id":"19","name":"KEPULAUAN BANGKA BELITUNG"},{"id":"21","name":"KEPULAUAN RIAU"},{"id":"31","name":"DKI JAKARTA"},{"id":"32","name":"JAWA BARAT"},{"id":"33","name":"JAWA TENGAH"},{"id":"34","name":"DI YOGYAKARTA"},{"id":"35","name":"JAWA TIMUR"},{"id":"36","name":"BANTEN"},{"id":"51","name":"BALI"},{"id":"52","name":"NUSA TENGGARA BARAT"},{"id":"53","name":"NUSA TENGGARA TIMUR"},{"id":"61","name":"KALIMANTAN BARAT"},{"id":"62","name":"KALIMANTAN TENGAH"},{"id":"63","name":"KALIMANTAN SELATAN"},{"id":"64","name":"KALIMANTAN TIMUR"},{"id":"65","name":"KALIMANTAN UTARA"},{"id":"71","name":"SULAWESI UTARA"},{"id":"72","name":"SULAWESI TENGAH"},{"id":"73","name":"SULAWESI SELATAN"},{"id":"74","name":"SULAWESI TENGGARA"},{"id":"75","name":"GORONTALO"},{"id":"76","name":"SULAWESI BARAT"},{"id":"81","name":"MALUKU"},{"id":"82","name":"MALUKU UTARA"},{"id":"91","name":"PAPUA BARAT"},{"id":"94","name":"PAPUA"}];
        var html = '';
        $.each(json_prov,function(k,v){
            html+="<option value='"+v.id+"'>"+v.name.toLowerCase()+"</option>";
        });
        $("#prof").append(html);
    });
	function kota(v){
		$.ajax({
			// url:'contact/xy/a',
			url:'{{URL::trans(Wa::menu()->getActive()->permalink."/xy/a")}}',
			data:"val="+v+"&_token={{csrf_token()}}",
			type:'POST',
			dataType:'json',
			success:function(data){
				if(data.response == "ok"){
					var html="";
					$.each(data.val, function(k,val){
                        var m = val.id;
                        m = parseInt(m) - 1;
						html+='<div class="list-office" onclick="goMarker('+m+')">';
							html+='<div class="in-office">';
								html+='<h5>'+val.kota+'</h5>';
								html+='<p>'+val.alamat+'</p>';
								html+='<div class="laddress">';
									html+='Telp. <a href="tel:02129333646">'+val.telp+'</a><br/>';
									html+='Fax. <a href="tel:02129333648">'+val.fax+'</a><br/>';
									html+='Email. <a href="mailto:'+v.email+'">'+val.email+'</a>';
								html+='</div>';
							html+='</div>';
						html+="</div>";
					});
					if(html != ""){
						$(".office-list").html(html);
					}
				}
			}
		});
	}
</script>
<?php
$json = [];
foreach ($res AS $val) {
    $key = $val['lat'].':'.$val['long'].':'.$val['icmark'];
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
            fullscreenControl: false,
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
            var latLong = k.split(':');
            var u = "{{URL::asset('/')}}";
            var marker = new google.maps.Marker({
                uniqueId: k,
                position: new google.maps.LatLng(parseFloat(latLong[0]), parseFloat(latLong[1])),
                icon: u+latLong[2],
                map: map,
            });
            rmarker[k] = marker;

            rmarker.push(marker);

            marker.addListener('click', function () {
                var content = '';
                var target = '';

                $.each(json[this.uniqueId], function (k, v) {

                    content += '<div class="map_content"><b>' + v.name + '</b><br>' + v.contact + '<br></div>';
                    target = v.target;
                });
                infowindow.setContent(content);
                infowindow.open(map, marker);

                // setTimeout(function() { smootScroll(); }, 100);

                var intarget = parseInt($("#"+target).offset().top) - parseInt($("header").height()) + 40;
                $(".office-list .list-office .in-office").removeClass("active");
                $("#"+target).find(".in-office").addClass("active");
                // console.log(intarget);

                $("html, body").animate({ scrollTop: intarget }, 100);
                $("html, body").on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
                   $("html, body").stop();
                });
                return false;
                // TweenLite.to(window, 1, {scrollTo:intarget, ease:Quart.easeInOut});

            });
            marker.addListener('mouseover', function () {
                var content = '';
                var target = '';

                $.each(json[this.uniqueId], function (k, v) {

                    content += '<div class="map_content"><b>' + v.name + '</b><br>' + v.contact + '<br></div>';
                    target = v.target;
                });
                infowindow.setContent(content);
                infowindow.open(map, marker);

                // setTimeout(function() { smootScroll(); }, 100);

                // var intarget = parseInt($("#"+target).offset().top) - parseInt($("header").height()) + 40;
                // $(".office-list .list-office .in-office").removeClass("active");
                // $("#"+target).find(".in-office").addClass("active");
                // console.log(intarget);

                // TweenLite.to(window, 1, {scrollTo:intarget, ease:Quart.easeInOut});

            });
        });


    });


    function goMarker(id)
    {
        google.maps.event.trigger(rmarker[id], "mouseover");
        officeClick();
    }
    function officeClick(){
        $(".office-list .list-office .in-office").click(function(){
            if($(".box-maps").length){
                $(".office-list .list-office .in-office").removeClass("active");
                $(this).addClass("active");
                $("html, body").animate({ scrollTop: 0 }, 100);
                $("html, body").on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
                   $("html, body").stop();
                });
                // TweenLite.to(window, 1, {scrollTo:0, ease:Quart.easeInOut});
            }
        });
    }
</script>