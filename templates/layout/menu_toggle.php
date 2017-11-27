<?php

   $d->reset();
  $sql = "select * from #_product_list where hienthi=1 and type='product' order by stt,id desc";
  $d->query($sql);
  $row_list = $d->result_array();

?>
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<script>
	$().ready(function(e) {
        $('.accordion-3').dcAccordion({
			eventType: 'click',
			autoClose: false,
			menuClose   : true,   
			classExpand : 'dcjq-current-parent',
			saveState: false,
			disableLink: false,
			showCount: false,
			hoverDelay   : 50,
			speed: 'slow'
		});
		$(".icon_more").click(function(){
		
		if($(this).css("transform")=="none"){
			$(this).css("transform","rotate(90deg)");
			
		}else{
			$(this).css("transform","none");
		}
	});
    });
</script>

<script>
	jQuery(document).ready(function() {
		$('.para').hide();
		$(".icon_toggle_nav").click(function(){
			$(".para").slideToggle("slow");
			$(this).toggleClass("active"); return true;
		});
	});
</script>


<div class="cate-pro menu_tg" style="position:relative;">
	<div class="icon_toggle_nav" style="position:relative;">
    
    	Menu
		
        <img src="images/icon_toggle.png" />
    	    
    </div>
      <a href="index.html"></a>  
        
      <ul class="toggle_menu accordion accordion-3 para"> 
          <li class="icon <?php if($_GET['com']=='trang-chu' || $_GET['com']==''){?>active<?php }?>"><a href="trang-chu.html"><?=_trangchu?></a></li>
          <li class="icon <?php if($_GET['com']=='gioi-thieu'){?>active<?php }?>"><a href="gioi-thieu.html"><?=_gioithieu?></a></li>
          
          <li class="icon <?php if($_GET['com']=='san-pham'){?>active<?php }?>"><a href="san-pham.html"><?=_sanpham?></a>
          <a  class="icon_more"></a>
             <ul>
                <?php for($i=0,$count_xem=count($row_list);$i<$count_xem;$i++){?>
                <?php
                    $d->reset();
                    $sql = "select * from #_product_cat where hienthi=1 and id_list='".$row_list[$i]['id']."' and type='product' order by stt,id desc";
                    $d->query($sql);
                    $row_cat = $d->result_array();
                ?>

                 <li><a href="<?=$row_list[$i]['tenkhongdau']?>"><?=$row_list[$i]['ten_'.$lang]?></a>
                 <a  class="icon_more"></a>
                  <ul>
                  <?php for($j=0,$count_cat=count($row_cat);$j<$count_cat;$j++){
                      $d->reset();
                      $sql = "select * from #_product_item where hienthi=1 and id_cat='".$row_cat[$j]['id']."' and type='product' order by stt,id desc";
                      $d->query($sql);
                      $row_item = $d->result_array();
                  ?>
                     <li><a href="<?=$row_list[$i]['tenkhongdau']?>/<?=$row_cat[$j]['tenkhongdau']?>"><?=$row_cat[$j]['ten_'.$lang]?></a>
                        <a  class="icon_more"></a>
                          <ul>
                            <?php for ($t=0; $t <count($row_item) ; $t++) {  ?>
                              <li>
                                  <a href="<?=$row_list[$i]['tenkhongdau']?>/<?=$row_cat[$j]['tenkhongdau']?>/<?=$row_item[$t]['tenkhongdau']?>"><?=$row_item[$t]['ten_'.$lang]?></a>
                              </li>
                            <?php } ?>
                          </ul>

                     </li>
                    <?php } ?>
                  </ul>

                 </li>
                <?php } ?>
              </ul>
          </li>
          <li class="icon <?php if($_GET['com']=='dich-vu'){?>active<?php }?>"><a href="dich-vu.html"><?=_dichvu?></a></li>

         <li class="icon <?php if($_GET['com']=='tin-tuc'){?>active<?php }?>"><a href="tin-tuc.html"><?=_tintuc?></a>

          </li>

          <li class="icon <?php if($_GET['com']=='tuyen-dung'){?>active<?php }?>"><a href="tuyen-dung.html"><?=_tuyendung?></a>
          <li class="icon <?php if($_GET['com']=='lien-he'){?>active<?php }?>"><a href="lien-he.html"><?=_lienhe?></a></li>

      </ul>
</div>