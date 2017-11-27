<?php
	session_start();
	$session=session_id();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	

    //Lưu ngôn ngữ chọn vào $_SESSION
	if(!isset($_SESSION['lang2']))
	{
		$_SESSION['lang2']='vi';
	}
	
	$lang=$_SESSION['lang2'];	//Lấy ngỗn ngữ

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php";




?>
<style type="text/css">
	.map_title {
    color: #0075c0;
    font-weight: bold;
}
</style>
<body class="bando" >
                   



<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD5Mevy_rl8U4ZyBB8i5jmdxfvb9Cg5UoE&sensor=false"></script>
		  <script>
		    function initialize() {
		        var myLatlng = new google.maps.LatLng(<?=$row_setting['toado']?>);
		        var mapOptions = {
		            zoom: 17,
		            center: myLatlng
		        };

		        var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

		        var contentString = "<table style='text-align:left; font-weight:100;'><tr><th style='font-size:16px; color:#039BB2; font-weight:bold; text-transform: uppercase;'><?=$row_setting['ten_'.$lang]?></th></tr><tr><th>Địa chỉ : <?=$row_setting['diachi_'.$lang]?></th></tr><tr><th>Điện thoại : <?=$row_setting['dienthoai']?></th></tr><tr><th>Email : <?=$row_setting['email']?></th></tr></table>";

		        var infowindow = new google.maps.InfoWindow({
		            content: contentString
		        });

		        var marker = new google.maps.Marker({
		            position: myLatlng,
		            map: map,
		            title: "<?=$row_setting['ten_'.$lang]?>"
		        });
		        infowindow.open(map, marker);
		    }

		    google.maps.event.addDomListener(window, 'load', initialize);


		</script>
           <div id="map_canvas" style="width=100%; height:100%"></div>
           <div class="clear"></div>                    

</body>