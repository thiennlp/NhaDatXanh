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
        <?php if(count($product)!=0){?>
        <?php for($j=0,$count_sp=count($product);$j<$count_sp;$j++){?>
            <div class="item1" >
                    <?php if($product[$j]['moi']!=0) {?> <img class="hot" src="images/icon_hot.png" alt="Hot"> <?php } ?>
                    <div class="product_img">
                      <a href="san-pham/<?=$product[$j]['tenkhongdau']?>.html"><img src="<?=_upload_product_l.$product[$j]['thumb']?>" alt="<?=$product[$j]['ten_'.$lang]?>" /></a>
                      <a href="san-pham/<?=$product[$j]['tenkhongdau']?>.html">
                        <div class="hover_mota"><?=$product[$j]['mota_'.$lang]?></div>
                      </a>
                    </div>
                    <a href="san-pham/<?=$product[$j]['tenkhongdau']?>.html"><h3><?=$product[$j]['ten_'.$lang]?></h3></a>
                    <div class="clear"></div>
                    <p class="giaban">Giá: <span><?php if($product[$j]['giaban']==0) echo "Liên Hệ"; else echo number_format ($product[$j]['giaban'],0,",",".")." VNĐ";?></span></p>
                    <p class="giacu"><span><?php if($product[$j]['giacu']==0) echo "Liên Hệ"; else echo number_format ($product[$j]['giacu'],0,",",".")." VNĐ";?></span></p>
                    <p class="giohang"><a href="javascript:void(0)" alt="giỏ hàng" onclick="addtocart(<?=$product[$j]['id']?>);">Giỏ hàng</a></p>
                    <p class="chitietsp"><a href="san-pham/<?=$product[$j]['tenkhongdau']?>.html">Chi tiết</a></p> 
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