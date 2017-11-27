<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);
	
	$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
	if ($page <= 0) $page = 1;
	
	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();

	$d->reset();
	$sql_setting = "select * from #_bgweb where type='bgweb' limit 0,1";
	$d->query($sql_setting);
	$row_background= $d->fetch_array();

	$d->reset();
    $sql = "select thumb_$lang from #_photo where type='favicon'";
    $d->query($sql);
    $favicon = $d->fetch_array();
	
	switch($com){
		case 'video':
			$source = "video";
			$template = isset($_GET['id']) ? "video_detail" : "video";
			break;
			
		case 'ban-do':
			$source = "map";
			$template ="map";
			break;
		case 'download':
			$source = "download";
			$template = isset($_GET['id']) ? "download_detail" : "download";
			$type_bar = 'download';
			$title_detail = "Download";
			break;
		case 'thu-vien-anh':
			$source = "album";
			$template = isset($_GET['id']) ? "album_detail" : "album";
			$type_bar = 'album';
			$title_detail = "album";
			break;
		case 'site-map':
			$source = "sitemap";
			$template ="sitemap";
			break;


		case 'dang-nhap':
			$source = "login";
			$template ="login";
			break;
		case 'tags':
			$source = "tags";
			$template ="tags";
			break;
		
		case 'phan-hoi':
			$source = "gopy";
			$template = "gopy";
			break;	
		
		case 'hoi-dap':
			$source = "hoidap";
			$template ="hoidap";
			break;
			

		case 'bao-gia':
			$source = "about";
			$template = "about";
			$title_detail = "Bảng báo giá";
			$type_bar = 'banggia';
			break;
		case 'kiem-tra-don-hang':
			$source = "donhang";
			$template = "donhang";
			$title_detail = "Kiểm tra đơn hàng";
			$type_bar = 'chamsoc';
			break;



		case 'chinh-sach-hoi-vien':
			$source = "about";
			$template = "about";
			$title_detail = _chinhsachhoivien;
			$type_bar = 'hoivien';
			break;

		case 'hinh-anh':
			$source = "gallery";
			$template = "gallery_detail";			
			break;

		case 'linh-vuc-hoat-dong':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'linhvuchoatdong';
			$title_detail = 'Lĩnh vực hoạt động';
			break;


		case 'gioi-thieu':
			$source = "about";
			$template = "about";
			$title_detail = _gioithieu;
			$type_bar = 'gioithieu';
			break;

		case 'tuong-cay':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'tuongcay';
			$title_detail = 'Tường cây';
			break;

		case 'san-thuong':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'santhuong';
			$title_detail = 'Sân thượng';
			break;

		case 'tieu-canh':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'tieucanh';
			$title_detail = 'Tiểu cảnh';
			break;

		case 'gallery':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'gallery';
			$title_detail = 'Gallery';
			break;

		case 'tin-tuc':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'tintuc';
			$title_detail = _tintuc;
			break;


		case 'tu-van':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'tuvan';
			$title_detail = _tuvan;
			break;
		case 'su-kien':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'sukien';
			$title_detail = _sukien;
		break;	
		
		case 'san-pham':
			$source = "product";
			$template =isset($_GET['id']) ? "product_detail" : "product";
			$title_detail = _sanpham;
			$type_bar = 'sanpham';	
			break;	

		case 'du-an':
			$source = "news";
			$template = isset($_GET['id']) ? "duan_detail" : "duan";	
			$title_detail = _duan;
			$type_bar = 'duan';						
			break;		
								
		case 'lien-he':
			$source = "contact";
			$template = "contact";
			break;

		case 'giao-hang-toan-quoc':
			$source = "giaohang";
			$template = "giaohang";
			break;

		case 'giao-hang-nhan-tien':
			$source = "giaohangnt";
			$template = "giaohangnt";
			break;

		case 'doi-tra-hang-trong-10-ngay':
			$source = "doitra";
			$template = "doitra";
			break;


		
		case 'tim-kiem':
			$source = "search";
			$template = "search";
			break;
		case 'gio-hang':
			$source = "giohang";
			$template = "giohang";
			break;	
		case 'thanh-toan':
			$source = "thanhtoan";
			$template = "thanhtoan";
			break;
		case 'xac-nhan':
			$source = "xacnhan";
			$template = "xacnhan";
			break;		

		default: 
			$source = "index";
			$template = "index";
			break;
	}
	
	if($source!="") include _source.$source.".php";
	
	if($_REQUEST['com']=='logout')
	{
	session_unregister($login_name);
	header("Location:index.php");
	}		
?>