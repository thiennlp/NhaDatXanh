<?php
$d->reset();
$sql = "select * from #_product_list where hienthi=1 and type='product' order by stt,id desc";
$d->query($sql);
$row_list = $d->result_array();

$d->reset();
$sql = "select * from #_baiviet_list where hienthi=1 and type='linhvuchoatdong' order by stt,id desc";
$d->query($sql);
$row_linhvuchoatdong = $d->result_array();

?>
<script type="text/javascript">
  $(document).ready(function() {
    $(".nut_menu").click(function(){
      $(this).parent().find("#menu_right").stop().slideToggle();
    });

    $("#menu_right a.more").click(function(){
      $(this).parent().find("ul").slideToggle();
      return false;
    });
  });
</script>

<div class="nut_menu">
    <span class="show"></span>
</div>
<nav id="menu_right" >
  <ul>
       <li class="icon"><a style="width:auto; padding-right:20px" href="trang-chu.html"><span> Trang chủ </span></a></li>

     <li class="icon <?php if($_GET['com']=='gioi-thieu'){?>active<?php }?>"><a href="gioi-thieu.html"><?=_gioithieu?></a></li>
     <li class="icon <?php if($_GET['com']=='san-pham'){?>active<?php }?>"><a class="<?php if(count($row_list)!=0) { ?>more <?php }?>" href="san-pham.html"><?=_sanpham?></a>
       <ul>
          <?php for($i=0,$count_xem=count($row_list);$i<$count_xem;$i++){?>
          <?php
          $d->reset();
          $sql = "select * from #_product_cat where hienthi=1 and id_list='".$row_list[$i]['id']."' and type='product' order by stt,id desc";
          $d->query($sql);
          $row_cat = $d->result_array();
          ?>

          <li><a class="<?php if(count($row_cat)!=0) { ?>more <?php }?>" href="san-pham/<?=$row_list[$i]['tenkhongdau']?>"><?=$row_list[$i]['ten_'.$lang]?></a>

            <ul>
              <?php for($j=0,$count_cat=count($row_cat);$j<$count_cat;$j++){
                $d->reset();
                $sql = "select * from #_product_item where hienthi=1 and id_cat='".$row_cat[$j]['id']."' and type='product' order by stt,id desc";
                $d->query($sql);
                $row_item = $d->result_array();
                ?>
                <li><a  href="san-pham/<?=$row_list[$i]['tenkhongdau']?>/<?=$row_cat[$j]['tenkhongdau']?>"><?=$row_cat[$j]['ten_'.$lang]?></a></li>
                <?php } ?>
                <div class="clear"></div>
            </ul>

        </li>
        <?php } ?>
    </ul>
</li>
<li class="icon <?php if($_GET['com']=='linh-vuc-hoat-dong'){?>active<?php }?>"><a href="linh-vuc-hoat-dong.html">Lĩnh vực hoạt động</a>
    <ul>
      <?php for($j=0,$count_linhvuc=count($row_linhvuchoatdong);$j<$count_linhvuc;$j++){ ?>
      <li><a href="linh-vuc-hoat-dong/<?=$row_linhvuchoatdong[$j]['tenkhongdau']?>"><?=$row_linhvuchoatdong[$j]['ten_'.$lang]?></a></li>
      <?php } ?>

  </ul>
</li>
<li class="icon <?php if($_GET['com']=='thu-vien'){?>active<?php }?>"><a href="thu-vien.html">Thư viện</a></li>
<li class="icon <?php if($_GET['com']=='dich-vu'){?>active<?php }?>"><a href="dich-vu.html"><?=_dichvu?></a>
</li>          
<li class="icon <?php if($_GET['com']=='tin-tuc'){?>active<?php }?>"><a href="tin-tuc.html"><?=_tintuc?></a></li>
<li class="icon <?php if($_GET['com']=='tuyen-dung'){?>active<?php }?>"><a href="tuyen-dung.html"><?=_tuyendung?></a></li>

<li class="<?php if($_GET['com']=='lien-he'){?>active<?php }?>"><a href="lien-he.html"><?=_lienhe?></a></li>
</ul>

</nav>