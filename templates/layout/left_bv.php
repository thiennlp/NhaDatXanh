<?php


$d->reset();
$sql = "select * from #_baiviet where hienthi=1 and type='".$type_bar."'  order by stt,id desc";
$d->query($sql);
$row_list1 = $d->result_array();

?>
<div id="left">
 <div class="danhmuc">
  <div class="thanh">Danh mục bài viết</div>
  <div class="ddsmoothmenu-v" id="smoothmenu2">
   <ul>
    <?php for($i=0,$count_xem=count($row_list1);$i<$count_xem;$i++){?>
      <li><a href="<?=$com?>/<?=$row_list1[$i]['tenkhongdau']?>.html"><?=$row_list1[$i]['ten_'.$lang]?></a>
      </li>
    <?php } ?>
    </ul>
  </div>
</div>




</div>