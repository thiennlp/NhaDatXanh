
<div class="margin_auto">
  <div class="center">


    <?php
    $d->reset();
    $sql_slider = "select id, ten_$lang,tenkhongdau,mota_vi,thumb from #_baiviet where hienthi=1 and type='tintuc' and noibat!=0 order by stt,id asc ";
    $d->query($sql_slider);
    $row_tin = $d->result_array();
    ?>
    <div class="tintuc_nb">
      <div class="title-center">TIN TỨC NỔI BẬT</div>
      <div class="tintuc" style=" background: url(images/line1.png) repeat-y top center;">
        <?php for($i=0;$i<count($row_tin);$i++){?>
        <div class="tt_frm <?php if(($i+1)%2==0){?> chan <?php }else{?> le <?php }?> wow rollIn" >
          <a href="tin-tuc/<?=$row_tin[$i]['tenkhongdau']?>.html">
            <img src="<?=_upload_baiviet_l.$row_tin[$i]['thumb']?>" alt="<?=$row_tin[$i]['ten_'.$lang]?>">
            <h3><?=$row_tin[$i]['ten_'.$lang]?></h3></a>
            <p class="mota"><?=catchuoi($row_tin[$i]['mota_'.$lang],250)?></p>
            <a href="tin-tuc/<?=$row_tin[$i]['tenkhongdau']?>.html">
             <span class="so">0<?=($i+1)?></span></a>
             <div class="clear"></div>
           </div><!-- tt_frm -->
           <?php if(($i+1)%2==0) echo '<div class="clear"></div>';?>            
           <?php }?>
           <div class="clear"></div>
         </div>
       </div>
       <!-- .End video-clip -->



       <div class="clear"></div>
     </div><!-- . End center -->
   </div><!-- margin -->
   <div class="clear"></div>