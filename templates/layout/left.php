<?php
$d->reset();
$sql = "select id, ten_$lang,links from #_video where hienthi=1 and type='video' order by stt asc";
$d->query($sql);
$result_video = $d->result_array();  

$d->reset();
$sql = "select * from #_yahoo where hienthi=1 order by stt";
$d->query($sql);
$row_yahoo = $d->result_array();

$d->reset();
$sql = "select * from #_lkweb where hienthi=1 order by stt";
$d->query($sql);
$mangxh = $d->result_array();

$d->reset();
$sql = "select * from #_product_list where hienthi=1 and type='product' and noibat!='' order by stt,id desc";
$d->query($sql);
$row_list1 = $d->result_array();

?>
<script type="text/javascript">
  $(document).ready(function() {
    $('.video_lienquan').change(function (){
      var str = $(this).val(); 
      if(str != '')
        $('#box_video').load("js/ajax_video.php?id="+str);
      return false;
    });
  });
</script>
<div id="left">

  <div class="danhmuc">
    <div class="thanh">Video</div>
    <div class="conten-center">
      <div class="video_slider">
        <div id="box_video" style="width:100%;">
          <?php  $arr =explode("=", $result_video[0]['links']); ?>
          <iframe width="100%" height="175" src="https://www.youtube.com/embed/<?=$arr[1]?>" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="select_video" style=" width: 100%;  height: 25px; margin-left:10px;margin: 0px auto;" >
          <select class="video_lienquan" style=" width: 100%; height: 25px;  margin-bottom:10px;">
            <option value="">Video khác</option>
            <?php for($i=0;$i<count($result_video );$i++) { ?>
            <option value="<?=$result_video[$i]['id']?>">
              <?=$result_video[$i]['ten_vi']?>
            </option>
            <?php } ?>
          </select>
        </div>  
      </div><!-- End .video_slider --> 

    </div>
  </div>


  <div class="danhmuc">
    <div class="thanh">Bài viết nổi bật</div>
    <div class="left hotro">
      <?php include _template."layout/run_image.php";?>
    </div>
  </div>



</div>