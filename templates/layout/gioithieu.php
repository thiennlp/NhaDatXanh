<?php
$d->reset();
$sql="select id,ten_$lang,tenkhongdau, mota_$lang from #_baiviet where hienthi=1 and type='gioithieu' and noibat<>0 order by stt,id asc limit 0,2";
$d->query($sql);
$gioithieu_nb=$d->result_array();

$d->reset();
$sql="select id,ten_$lang,tenkhongdau,thumb from #_baiviet where hienthi=1 and type='baivieticon' order by stt,id asc";
$d->query($sql);
$row_icon=$d->result_array();

$d->reset();
$sql="select id,ten_$lang,tenkhongdau, mota_$lang, thumb from #_product_list where hienthi=1 and type='product' and noibat<>0 order by stt,id asc limit 0,3";
$d->query($sql);
$pro_list_nb=$d->result_array();

?>
<div class="news-nb">
	<div class="thanh_title"> <h4>PHOTOCOPY TRẮC LAN</h4> </div>
	<div class="tintuc1" style=" background: url(images/line1.png) repeat-y top center;">

		<div class="tt_frm le" >
			<a href="gioi-thieu/<?=$gioithieu_nb[0]['tenkhongdau']?>.html"><p><?=$gioithieu_nb[0]['mota_'.$lang]?></p></a>

			<div class="clear"></div>
		</div><!-- tt_frm -->

		<?php for($i=0;$i<count($pro_list_nb);$i++){?>
		<?php 
		$d->reset();
		$sql="select id,ten_$lang,tenkhongdau,  thumb from #_product_cat where hienthi=1 and type='product' and id_list=".$pro_list_nb[$i]['id']." order by stt,id asc";
		$d->query($sql);
		$pro_cat_nb=$d->result_array();
		?>

		<div class="tt_frm " >
			<a href="san-pham/<?=$pro_list_nb[$i]['tenkhongdau']?>">
				<h3><?=$pro_list_nb[$i]['ten_'.$lang]?></h3>
			</a>
			<ul>
				<?php for ($j=0; $j < count($pro_cat_nb); $j++) { ?>
				<li>- <a href="san-pham/<?=$pro_list_nb[$i]['tenkhongdau']?>/<?=$pro_cat_nb[$j]['tenkhongdau']?>"><?=$pro_cat_nb[$j]['ten_'.$lang]?></a> </li>
				<?php } ?>
				<div class="clear"></div>
			</ul>

			<a href="san-pham/<?=$pro_list_nb[$i]['tenkhongdau']?>.html"><span class="so">0<?=($i+1)?></span></a>
			<div class="clear"></div>
		</div><!-- tt_frm -->
		<?php }?>

		<div class="tt_frm" >
			<div class="slickgioithieu" >
				<?php for($j=0,$count_icon=count($row_icon);$j<$count_icon;$j+=2){?>
				<div>
					<div class="row_icon">
						<div class="img_rowicon">
							<a href="bai-viet/<?=$row_icon[$j]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$row_icon[$j]['thumb']?>" alt="<?=$row_icon[$j]['ten_'.$lang]?>"></a>
						</div>
						<div class="ten_rowicon"><a href="bai-viet/<?=$row_icon[$j]['tenkhongdau']?>.html"></a> <?=$row_icon[$j]['ten_'.$lang]?></div>
					</div>
					<div class="row_icon">
						<?php if($j+1< $count_icon) {?>
						<div class="img_rowicon">
							<a href="bai-viet/<?=$row_icon[$j]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$row_icon[$j+1]['thumb']?>" alt="<?=$row_icon[$j+1]['ten_'.$lang]?>"></a>
						</div>
						<div class="ten_rowicon"><a href="bai-viet/<?=$row_icon[$j]['tenkhongdau']?>.html"><?=$row_icon[$j+1]['ten_'.$lang]?></a></div>

						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</div><!-- tt_frm -->

		<div class="tt_frm gioithieu1" >
			<a href="gioi-thieu/<?=$gioithieu_nb[1]['tenkhongdau']?>.html">
				<p><?=$gioithieu_nb[1]['mota_'.$lang]?></p></a>

				<div class="clear"></div>
			</div><!-- tt_frm -->
			<div class="clear"></div>

		</div>
		<div class="clear"></div>
		<div class="border-bottom" style="margin:20px 0;"></div>
	</div>
	<!-- .End news-nb -->





