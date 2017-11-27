<?php
session_start();

@define ( '_template' , './templates/');
@define ( '_source' , './sources/');
@define ( '_lib' , './libraries/');

if(!isset($_SESSION['lang']))
{
	$_SESSION['lang']='vi';
}
$lang=$_SESSION['lang'];

include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."functions.php";
include_once _lib."functions_share.php";
include_once _lib."class.database.php";
include_once _source."lang_$lang.php";
include_once _lib."functions_giohang.php";
include_once _lib."file_requick.php";
include_once _lib."counter.php"; 

if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
	$pid=$_REQUEST['productid'];
	$soluong=1;
	addtocart($pid,$soluong);
	redirect("thanh-toan.html");}
	
	if($_GET['lang']!=''){
		$_SESSION['lang']=$_GET['lang'];
		header("location:".$_SESSION['links']);
	} else {
		$_SESSION['links']=getCurrentPageURL();
	}
	?>
	<!DOCTYPE html>
	<html lang="vi">
	<head>
		<meta charset="UTF-8">
		<base href="http://<?=$config_url?>/">
		<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$favicon['thumb_'.$lang]?>" type="image/x-icon" />

		<title><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></title>
		<meta name="description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
		<meta name="keywords" content="<?php if($keywords_bar!='') echo $keywords_bar; else echo $row_setting['keywords']; ?>">

		<meta name="robots" content="noodp,index,follow" />
		<meta name="google" content="notranslate" />
		<meta name='revisit-after' content='1 days' />
		<meta name="ICBM" content="<?=$row_setting['toado']?>">
		<meta name="geo.position" content="<?=$row_setting['toado']?>">
		<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
		<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">
		<?=$share_facebook?>

		<script language="javascript" type="text/javascript" src="js/jquery-2.1.4.js"></script>
		<link rel="stylesheet" type="text/css" href="js/ddsmoothmenu-v.css" />
		<link rel="stylesheet" type="text/css" href="js/ddsmoothmenu.css" />
		<link rel="stylesheet" href="css/muangay.css">
		<link rel="stylesheet" type="text/css" href="js/animate.css"/>

		<link rel="stylesheet" type="text/css" href="js/owl_carousel/assets/owl.carousel.css" />
		<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
		<script type="text/javascript" src="js/owl_carousel/owl.carousel.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css"/>
		<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
		<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>

		<script type="text/javascript" src="js/smoothscroll.js"></script>
		<script type="text/javascript" src="js/wow.min.js"></script>

		<link rel="stylesheet" type="text/css" href="js/slick.css"/>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript">
			new WOW().init();

			$().ready(function(){
				$('.slicksp').slick({
					dots: false,
					infinite: true,
					speed: 1500,
					slidesToShow: 4,
					slidesToScroll: 1,
					autoplay: true,
				});
				

			});
		</script>
		<script>
			$().ready(function(){
				$(window).scroll(function(){
					if($(window).scrollTop()>35){
						$("#header").css("position","fixed");
						$("#header").css("height","70px");
						$("#logo").css("padding-top","0");
						$("#logo img").css("height","70px");
					}else{
						$("#header").css("position","absolute");
						$("#header").css("height","auto");
						$("#logo img").css("height","inherit");
					}
				});
			});
		</script>

		<script type="text/javascript">
			ddsmoothmenu.init({
			mainmenuid: "smoothmenu1", //menu DIV id
			orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'ddsmoothmenu', //class added to menu's outer DIV
			//customtheme: ["#1c5a80", "#18374a"],
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
		})
		</script>

		<style type="text/css">
			body{
				font-family: Arial;
				font-size:14px;
				line-height:1.5;
				background-color:<?=$row_background['mauneen']?>;
				background-attachment:<?=$row_background['fix_bg']?>;
				height: 100%;
				min-width: 1200px;
			}
		</style>
	</head>

	<body >
		<?=$row_setting['analytics']?> 
		<div id="container">

			<header id="header">
				<?php include _template."layout/header.php"; ?>

			</header>
			
			<div class="clear"></div>
			<div id="slide_show">
				<?php include _template."layout/quake_slider.php";?>
				<div class="clear"></div>
			</div>
			<main id="main">
				<div class="margin_auto">
					<section id="content">
						<?php if($_GET['com']=='' || $_GET['com']=='index' || $_GET['com']=='trang-chu'){?>
						<?php include _template.$template."_tpl.php";?>
						<?php } else { ?>
						<?php //include _template."layout/left.php";?> 
						<div class="info" >
							<?php include _template.$template."_tpl.php";?>
						</div>
						<?php } ?>
					</section>
				</div>
			</main>

			<div class="clear"></div>
			<?php if($_GET['com']=='' || $_GET['com']=='index' || $_GET['com']=='trang-chu'){?>
			<?php include _template."layout/sp_noibat.php";?>
			<?php include _template."layout/bannercenter.php";?>     
			<?php include _template."layout/bottom.php";?>     
			<?php } ?>

			<footer id="footer">
				<?php include _template."layout/footer.php"; ?>
			</footer>

		</div>
		<?=$row_setting['vchat']?>

		<?php if($_GET['com']=='' || $_GET['com']=='index' || $_GET['com']=='trang-chu'){?>
		<?php //include _template."layout/addon/popup.php"; ?>
		<?php } ?>

		<?php //include _template."layout/addon/fanpage.php"; ?>

	</body>

	</html>
