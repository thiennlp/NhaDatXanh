<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css"/>
<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect  : 'none',
            closeEffect : 'none'
        });
    });
</script>
<?php 
$d->reset();
$sql= "select id,photo,thumb from #_baiviet_photo where hienthi=1 and type='".$type_bar."' and id_baiviet='".$row_detail['id']."' order by stt, ngaytao";
$d->query($sql);
$thuvien = $d->result_array();
//dump($thuvien);
?>
<div id="info">
  <div id="sanpham">

    <div class="khung">
      <div class="thanh_title"><h2><?=$title_detail?></h2></div>
      <h1 class="tieude"> <?=$row_detail['ten_'.$lang]?></h1>
      <div>

<script>
$(document).ready(function() {
    $("#contenttabs .hidden").hide(); // Initially hide all contenttabs
    $("#tabs li:first").attr("id","current"); // Activate first tab
    $("#contenttabs div.hidden:first").fadeIn(); // Show first tab content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();        
        $("#contenttabs .hidden").hide(); //Hide all contenttabs
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('title')).fadeIn(); // Show contenttabs for current tab
    });
});
</script>

        <ul id="tabs">
          <li><a href="#" title="tab1">Hình ảnh</a></li>
          <li><a href="#" title="tab2">Thông tin chi tiết</a></li>
      </ul>

      <div id="contenttabs"> 
          <div class="hidden" id="tab1">
            <div class="box_duan">
            <a class="fancybox" rel="gallery1"  href="<?=_upload_baiviet_l.$row_detail['photo']?>">
              <img src="<?=_upload_baiviet_l.$row_detail['thumb']?>" alt="<?=$row_detail['ten_'.$lang]?>"/>
            </a>
            </div>
            <?php for($i=0; $i<count($thuvien); $i++) { ?>
            <div class="box_duan">
            <a class="fancybox" rel="gallery1"  href="<?=_upload_baiviet_l.$thuvien[$i]['photo']?>">
              <img src="<?=_upload_baiviet_l.$thuvien[$i]['thumb']?>" alt="<?=$thuvien[$i]['ten_'.$lang]?>"/>
            </a>
            </div>
            <?php } ?>
          </div>
          <div class="hidden" id="tab2">
              <?=$row_detail['noidung_'.$lang]?>
          </div>
          <div class="clear"></div>
      </div>

      </div>

    </div>

  </div>
</div>