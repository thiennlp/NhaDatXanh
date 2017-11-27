<?php
$d->reset();
$sql = "select * from #_product_list where hienthi=1 and type='product' order by stt,id desc";
$d->query($sql);
$row_list = $d->result_array();


?>

<nav id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li class="icon <?php if($_GET['com']=='gioi-thieu'){?>active<?php }?>"><a href="gioi-thieu.html"><?=_gioithieu?></a></li>
    <li class="icon <?php if($_GET['com']=='tuong-cay'){?>active<?php }?>"><a href="tuong-cay.html">Tường cây</a>
     
    </li>
    <li class="icon <?php if($_GET['com']=='san-thuong'){?>active<?php }?>"><a href="san-thuong.html">Sân thượng</a>


    </li>

    <li class="icon <?php if($_GET['com']=='tieu-canh'){?>active<?php }?>"><a href="tieu-canh.html">Tiểu cảnh</a>
        
    </li>          
    <li class="icon <?php if($_GET['com']=='gallery'){?>active<?php }?>"><a href="gallery.html">Gallery</a></li>
    <li class="icon <?php if($_GET['com']=='tin-tuc'){?>active<?php }?>"><a href="tin-tuc.html">Tin tức</a></li>

    <li class="<?php if($_GET['com']=='lien-he'){?>active<?php }?>"><a href="lien-he.html"><?=_lienhe?></a></li>
         <?php include _template."layout/addon/timkiem.php";?>
<div class="clear"></div>
  </ul>

</nav>