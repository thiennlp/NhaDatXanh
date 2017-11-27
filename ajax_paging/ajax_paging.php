
<?php
session_start();
@define ( '_template' , '../templates/');
@define ( '_lib' , '../libraries/');
@define ( '_source' , '../sources/');	



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

include_once "class_paging_ajax.php";

$d = new database($config['database']);

// echo 'sss'; exit();
// dump($_POST);
if(isset($_POST["page"]))
{
	
	$paging = new paging_ajax();
	


	$paging->class_pagination = "pagination";
	$paging->class_active = "active";
	$paging->class_inactive = "inactive";
	$paging->class_go_button = "go_button";
	$paging->class_text_total = "total";
	$paging->class_txt_goto = "txt_go_button";
	$paging->per_page = 8; 	
	$paging->page = $_POST["page"];
	$paging->text_sql = "select ten_$lang,id,thumb,tenkhongdau,mota_$lang,giaban,giacu,moi from table_product where type='product' and hienthi=1 and id_list=".$_POST["dieukien"]."  order by stt,id asc ";
	$result_pag_data = $paging->GetResult();
	$message = '';
	$paging->data = "" . $message . "";


}

?>

<?php

$j=0;
while ($row = mysql_fetch_array($result_pag_data)) { $j++;?>  
<div class="item1" >
	<?php if($row['moi']!=0) {?> <img class="hot" src="images/icon_hot.png" alt="Hot"> <?php } ?>
	<div class="product_img">
		<a href="san-pham/<?=$row['tenkhongdau']?>.html"><img src="<?=_upload_product_l.$row['thumb']?>" alt="<?=$row['ten_'.$lang]?>" /></a>
		<a href="san-pham/<?=$row['tenkhongdau']?>.html">
			<div class="hover_mota"><?=$row['mota_'.$lang]?></div>
		</a>
	</div>
	<a href="san-pham/<?=$row['tenkhongdau']?>.html"><h3><?=$row['ten_'.$lang]?></h3></a>
	<div class="clear"></div>
	<p class="giaban">Giá: <span><?php if($row['giaban']==0) echo "Liên Hệ"; else echo number_format ($row['giaban'],0,",",".")." VNĐ";?></span></p>
	<p class="giacu"><span><?php if($row['giacu']==0) echo "Liên Hệ"; else echo number_format ($row['giacu'],0,",",".")." VNĐ";?></span></p>
	<p class="giohang"><a href="javascript:void(0)" alt="giỏ hàng" onclick="addtocart(<?=$row['id']?>);">Giỏ hàng</a></p>
	<p class="chitietsp"><a href="san-pham/<?=$row['tenkhongdau']?>.html">Chi tiết</a></p> 


</div> 
<?php } 

if($j==0) echo "Chưa có sản phẩm ...."; else{ echo $paging->Load();}
?>  
<div class="clear"></div>



