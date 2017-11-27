<?php

$d->reset();
$sql = "select thumb_$lang,link,mota_$lang from #_photo where hienthi=1 and type='slider' order by stt,id desc";
$d->query($sql);
$slide_s = $d->result_array();

?>
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/jquery.slider.js"></script>
<link type="text/css" rel="stylesheet" href="css/style_slider.css" />

<div class="slider" data-role="content">

 <div id="slider1_container" style="position: relative; top: 0px; width: 1366px;height:650px; overflow: hidden; margin:0 auto;">  
  <div u="slides" style="cursor: move; position: absolute;margin:0 auto;  top: 0px; width: 1366px; height: 650px; overflow: hidden;">
    <?php for($i=0;$i<count($slide_s);$i++){?>
    <div>
      <a  u=image href="<?=$slide_s[$i]["link"]?>" target="_blank">
      <img u=image src="<?=_upload_hinhanh_l.$slide_s[$i]["thumb_".$lang]?>"  alt="slider" />
      </a>   
  
    </div>
    <?php } ?>
  </div> 
</div> 
<div class="clear"></div>
</div>