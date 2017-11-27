
<div id="info">
    <div id="sanpham">

        
        <div class="khung">
        
 
        <div class="thanh_title"><h2><?=$title_detail?></h2> </div>
        <div>
		<?php if(count($product)!=0){?>
         <?php for($j=0,$count_sp=count($product);$j<$count_sp;$j++){?>
          <div class="item2 col-md-4 col-sm-6 col-xs-12" >
         <div class="product_images"><a href="thietbi-vattu/<?=$product[$j]['tenkhongdau']?>.html"><img src="<?=_upload_product_l.$product[$j]['thumb']?>" alt="<?=$product[$j]['ten_'.$lang]?>" /></a></div>
         <div class="bong_sp"></div>
                  <div class="clear"></div>

         <h3><?=$product[$j]['ten_'.$lang]?></h3>
<!--          <p class="giaban">Giá : <span><?php if($product[$j]['giaban']==0) echo "Liên Hệ"; else echo number_format ($product[$j]['giaban'],0,",",".")." VNĐ";?></span>
        
         </p> -->
    </div>
        <?php } ?>
        
        
		<?php } else { ?><div style="text-align:center; color:#FF0000; font-weight:900; font-size:22px; text-transform:uppercase;" >Chưa Có Tin Cho Mục này .</div> <?php }?>
</div>
        <div class="clear"></div>
        <div class="paging"><?=$paging?></div> 

      </div>
         
    </div>
  </div>

  <h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>