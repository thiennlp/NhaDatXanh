<script language="javascript">
  function addtocart(pid){
    document.form_giohang.productid.value=pid;
    document.form_giohang.command.value='add';
    document.form_giohang.submit();
  }
</script>
<form name="form_giohang" action="index.php" method="post">
  <input type="hidden" name="productid" />
  <input type="hidden" name="command" />
</form>
<div id="info">
  <div id="sanpham">
    <div class="thanh_title"> <h2>Tìm Kiếm ' <?=$_GET['keywords']?> ' </h2> </div>

    <div class="khung">
      <?php if(count($product)!=0){?>
      <?php for($j=0, $count_tt=count($product);$j<$count_tt;$j++){  ?>
      <?php $type_s = $product[$j]['type']; ?>

      <div class="box_new">
        <div class="box_new_img">
          <a href="<?=$search[$type_s]?>/<?=$product[$j]['tenkhongdau']?>.html" ><img src="<?=_upload_baiviet_l.$product[$j]['thumb']?>" border="0" /></a>
        </div>

        <h3><a href="<?=$search[$type_s]?>/<?=$product[$j]['tenkhongdau']?>.html" ><?=$product[$j]['ten_'.$lang]?></a></h3>
        <?=_substr($product[$j]['mota_'.$lang],225)?>
        <div class="xemtiep"><a href="<?=$com?>/<?=$product[$j]['tenkhongdau']?>.html" >Xem Tiếp </a></div>
      </div>

      <?php }?>
      <?php } else {?><div style="text-align:center; color:#FF0000; font-weight:bold; font-size:22px; text-transform:uppercase;" >Chưa Có Tin Cho Mục này .</div> <?php }?>

    </div>
      <div class="clear"></div>
      <div class="paging"><?=$paging?></div> 
  </div>

  
</div> 