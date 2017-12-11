<h3 class="tblue">{{$shareData[0]->title}}</h3>
<?php echo $shareData[0]->description;?>

<div class="career-form box-form">
	<div class="left">
		<form method="post" id="frm-c">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<label>{{$shareData[0]->field1}}</label>
				<input type="text" class="i" name="nama" placeholder="">
			</div>
			<!-- <div class="row">  
				<label>Pekerjaan</label>
				<select>
					<option>Subjek option</option>
					<option>Subjek option</option>
				</select>
			</div> -->
			<div class="row">
				<label>{{$shareData[0]->field2}}</label>
				<input type="text" class="i" name="telp" placeholder="">
			</div>
			<div class="row">
				<label>{{$shareData[0]->field3}}</label>
				<input type="email" class="i" name="email" placeholder="">
			</div>
			<div class="row">
				<label>{{$shareData[0]->field4}}</label>
				<textarea name="pesan" class="i"></textarea>
			</div>
			<div class="row submit">
				<input type="submit" class="btn-box btn-lg" value="SUBMIT">
			</div>
		</form>
	</div>
	<div class="right">
		<div class="address-box">
			<i class="icwp ic_building" style="background-image:url('{{URL::asset($shareData[0]->icon)}}')"></i>
			<h4>{{$shareData[0]->nm_persh}}</h4>
			<p>{{$shareData[0]->alamat}}</p>
			<div class="laddress">
				Telp. <a href="tel:02129333646">{{$shareData[0]->telp}}</a><br>
				Fax. <a href="tel:02129333648">{{$shareData[0]->fax}}</a><br>
				Email. <a href="mailto:cs@kreditplus.com">{{$shareData[0]->email}}</a>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#frm-c').submit(function(){
			if(cekForm()){
				$.ajax({
					url:"{{URL::to('contact')}}",
					type:$(this).attr('method'),
					data:$(this).serialize(),
					beforeSend:function(){
						loaderOverlay();
					},
					dataType:'json',
					success:function(data){
                        disOverlay();
						if(data.response == "ok"){
							alert('Data Berhasil Tersimpan');
							location.reload();
						}
					}
				});
			}
			return false;
		});

	});
	function cekForm(){
		$(".i").css({'border-color':''});
		var i=0;
		$('.i').each(function(k,v){
			if($(this).val() == ""){
				$(this).css({'border-color':'red'});
				i++;
			}
		});
		if(i == 0){
			return true;
		}else{
			return false;
		}
	}
    function loaderOverlay(){
        $('body').prepend('<div id="ovecls"></div>');
        var b = $('body').width();
        var h = $('body').height();
        $("#ovecls").css({'width':b,'height':h,'z-index':10000,'background-color':'black','opacity':0.6, 'position':'absolute','top':0,'left':0});
    }

    function disOverlay(){
        $("#ovecls").remove();
    }
</script>
<?php
$res = [    // ganti value ini dari DataBase    
            [
                'name' => $shareData[0]->title_name,
                'contact' => $shareData[0]->contact_name,
                'href' => '<a href="#location1">View Detail</a>',
                'lat' => $shareData[0]->lat,
                'long'=> $shareData[0]->long,
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