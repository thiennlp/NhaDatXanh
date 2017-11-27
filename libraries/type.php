<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";	
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$act = explode('_',$act);
	if(count($act>1)){
		$act = $act[1];
	} else {
		$act = $act[0];
	}
	switch($type){
		//-------------product------------------
		case 'product':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "true";
					$config_mota= "true";
					@define ( _width_thumb , 240 );
					@define ( _height_thumb , 237 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Sản Phẩm";
					$config_images = "true";
					$config_mota= "true";
					$config_list = "true";
					$config_cat = "true";
					$config_item = "true";
					$config_sub = "false";
					@define ( _width_thumb , 255 );
					@define ( _height_thumb , 235 );
					@define ( _style_thumb , 1 );
					$ratio_ = 3;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
			
		case 'tintuc':
			$title_main = "Tin tức";
			$config_ten = "true";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "true";
			$config_sub = "false";
			@define ( _width_thumb , 250 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

			
		case 'dichvu':
			$title_main = "Dịch vụ";
			$config_ten = "true";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "true";
			$config_sub = "false";
			@define ( _width_thumb , 240 );
			@define ( _height_thumb , 240 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'tuongcay':
			$title_main = "Tường cây";
			$config_ten = "true";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "true";
			$config_sub = "false";
			$config_img = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 315 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

	case 'santhuong':
			$title_main = "Sân thượng";
			$config_ten = "true";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "true";
			$config_sub = "false";
			$config_img = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 315 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

	case 'tieucanh':
			$title_main = "Tiểu cảnh";
			$config_ten = "true";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "true";
			$config_sub = "false";
			$config_img = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 315 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

	case 'gallery':
			$title_main = "Gallery";
			$config_ten = "true";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "true";
			$config_sub = "false";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 315 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;


		case 'gioithieu':
			$title_main = "Giới thiệu";
			$config_ten="false";
			$config_images = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 485 );
			@define ( _height_thumb , 300 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;



		case 'download':
			$title_main = "Download File";
			$config_images = "true";
			@define ( _width_thumb , 200 );
			@define ( _height_thumb , 250 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		
		case 'album':
			$title_main = "Album";
			$config_images = "true";
			$config_list = "false";
			$config_mota= "true";
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			@define ( _width_thumb , 375 );
			@define ( _height_thumb , 260 );
			@define ( _style_thumb , 1 );
			$ratio_ = 2;
			break;

		case 'album_list':
			$title_main = "danh mục album";
			$config_images = "true";
			$config_list = "false";
			@define ( _width_thumb , 200 );
			@define ( _height_thumb , 160 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------info------------------
		case 'slogan':
			$title_main = 'Slogan';
			$config_ten = 'false';
			break;
		case 'tags':
			$title_main = 'tags';
			$config_ten = 'true';
			break;
			
		case 'trangchu':
			$title_main = 'Trang chủ';
			$config_images = 'true';
			$config_ten = 'true';
			@define ( _width_thumb , 590 );
			@define ( _height_thumb , 260 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'hinhanh':
			$title_main = 'Hình ảnh';
			$config_ten = 'true';
			break;
		case 'chamsoc':
			$title_main = 'chăm sóc khách hàng';
			$config_ten = 'true';
			break;
		case 'lienhe':
			$title_main = 'Liên hệ';
			$config_ten = 'true';
			break;

		case 'banner':
			$title_main = 'Banner';
			@define ( _width_thumb , 690 );
			@define ( _height_thumb , 65 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;

		case 'bannerqc':
			$title_main = 'Banner quảng cáo';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 265 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;


		case 'bannermb':
			$title_main = 'Banner mobile';
			@define ( _width_thumb , 700 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;


		case 'logo':
			$title_main = 'Logo';
			@define ( _width_thumb , 165 );
			@define ( _height_thumb , 90 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'popup':
			$title_main = 'Popup';
			$links_ = 'true';
			$config_hienthi = 'true';
			@define ( _width_thumb , 900 );
			@define ( _height_thumb , 500 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		

		case 'favicon':
			$title_main = 'Favicon';
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'bgweb':
			$title_main = 'background web';
			@define ( _width_thumb , 500 );
			@define ( _height_thumb , 120 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------photo------------------
		case 'slider':
			$title_main = "Hình ảnh slider";
			$config_mota= "false";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 650 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;



		case 'doitac':
		    $title_main = "Đối tác";
			@define ( _width_thumb , 170 );
			@define ( _height_thumb , 100 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;

		case 'hotro':
		    $title_main = "Hỗ trợ thanh toán";
			@define ( _width_thumb , 55 );
			@define ( _height_thumb , 30 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;


		case 'lkweb':
		    $title_main = "Liên kết web";
			@define ( _width_thumb , 36 );
			@define ( _height_thumb , 36 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;

		case 'lkwebft':
		    $title_main = "Liên kết web footer";
			@define ( _width_thumb , 36 );
			@define ( _height_thumb , 36 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;

		//--------------defaut---------------
		default: 
			$source = "";
			$template = "index";
			break;
	}

?>