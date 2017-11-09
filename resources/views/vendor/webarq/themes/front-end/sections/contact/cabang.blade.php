<div class="box-filter">
	<div class="right">
		<label>Provinsi : </label>
		<select onchange="kota(this.value)">
			<option value="jabodetabek">Jabodetabek</option>
			<option value="indo">Indonesia</option>
		</select>
	</div>
</div>

<div class="office-list">
	@foreach($shareData as $data)
	<div class="list-office">
		<div class="in-office">
			<h5>{{$data->kota}}</h5>
			<p>{{$data->alamat}}</p>
			<div class="laddress">
				Telp. <a href="tel:02129333646">{{$data->telp}}</a><br>
				Fax. <a href="tel:02129333648">{{$data->fax}}</a><br>
				Email. <a href="mailto:{{$data->email}}">{{$data->email}}</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
<script type="text/javascript">	
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
						html+='<div class="list-office">';
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
$res=array();
foreach($map as $data){
    // ganti value ini dari DataBase    
        $a =     [
                'name' => $data->title_name,
                'contact' => $data->contact_name,
                'href' => '<a href="#location1">View Detail</a>',
                'lat' => $data->lat,
                'long'=> $data->long,
                'icmark'=> URL::asset('vendor/webarq/front-end/images/material/ic_marker.png')
            ];
        array_push($res,$a);
}
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