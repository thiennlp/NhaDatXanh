

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

    <?php //include _template."layout/left.php";?> 

    
    <div class="khung">
      <div class="thanh_title"><h2><?=$title_detail?></h2> </div>
      <div>
        <?php if(count($tintuc)!=0){?>
        <?php for($j=0,$count_sp=count($tintuc);$j<$count_sp;$j++){?>
        <div class="item1" >
            <div class="product_img">
              <a href="mau/<?=$tintuc[$j]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$tintuc[$j]['thumb']?>" alt="<?=$tintuc[$j]['ten_'.$lang]?>" /></a>
              <a href="mau/<?=$tintuc[$j]['tenkhongdau']?>.html"><div class="hover_mota"><?=$tintuc[$j]['mota_'.$lang]?></div></a>
            </div>
            <a href="mau/<?=$tintuc[$j]['tenkhongdau']?>.html"><h3><?=$tintuc[$j]['ten_'.$lang]?></h3></a>
            <div class="clear"></div>
        </div> 
        <?php } ?>
        <?php } else { ?>
        <div style="text-align:center; color:#FF0000; font-weight:900; font-size:22px; text-transform:uppercase;"> Chưa Có Tin Cho Mục này . </div>
        <?php }?>

      </div>
      <div class="clear"></div>
      <div class="paging"><?=$paging?></div> 

    </div>
  </div>
</div>
<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>


<div style='display:none'>
  <div id='inline_content'></div>
</div>