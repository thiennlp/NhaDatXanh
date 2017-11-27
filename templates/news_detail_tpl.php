<div id="info">
    <div id="sanpham">
      <?php //include _template."layout/left_bv.php";?> 

      <div class="khung">
          
        <div class="thanh_title"><h2><?=$title_detail?></h2></div>

        <h1 class="tieude"> <?=$row_detail['ten_'.$lang]?></h1>
        <div class="noidung">
            <?=$row_detail['noidung_'.$lang]?>

      <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-574cff40f17ff9c4"></script>
                              <!-- Go to www.addthis.com/dashboard to customize your tools -->
                              <div class="addthis_native_toolbox"></div>

        </div>
        
        <div style="clear:left;"></div><br /><br />

        <div class="thanh_title"><h2><?=_othernews?></h2></div>

            <div>
                <?php foreach($tintuc as $key => $tinkhac  ){?>
                <div class="box_new box_new_detail wow fadeInUp" data-wow-duration="<?=0.1*$key*3?>s">
                    <div class="box_new_img">
                      <a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>.html" ><img src="<?=_upload_baiviet_l.$tinkhac['thumb']?>" border="0" /></a>
                  </div>

                  <h3><a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>.html" ><?=$tinkhac['ten_'.$lang]?></a></h3>
                  <?=_substr($tintuc[$i]['mota_'.$lang],225)?>
                  <div class="xemtiep"><a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>.html" >Xem Tiếp </a></div>
              </div>
              <?php }?>
            </div>
    </div>      
    
</div>
</div>
