<?php 
    $d->reset();
	$sql_danhmuc = "select id,ten_$lang,tenkhongdau,photo, mota_$lang from #_baiviet where type='duan' and noibat<>0 and hienthi=1 order by stt,id asc limit 0,6";
	$d->query($sql_danhmuc);
	$congtrinhnb = $d->result_array(); 

    $d->reset();
	$sql_danhmuc = "select id, noidung_$lang from #_info where type='gioithieu_slogan'";
	$d->query($sql_danhmuc);
	$slogancongtrinh = $d->fetch_array(); 	
 ?>


<div class="clear"></div>
<div class="congtrinhnb">
	<div class="margin_auto">
		<div class="khung">
			<div class="thanh_title1"><h2>Công trình nổi bật</h2> 
			<div class="clear"></div>
			<div class="slogancongtrinh">
			<?=$slogancongtrinh['noidung_'.$lang]?>
			</div>
			</div>
			<div>
				<?php for ($i=0; $i < count($congtrinhnb); $i++) {  ?>
					<div class="box_congtrinh">
						<img src="<?=_upload_baiviet_l.$congtrinhnb[$i]['photo']?>" alt="<?=$congtrinhnb[$i]['ten_'.$lang]?>">
						<a href="du-an/<?=$congtrinhnb[$i]['tenkhongdau']?>.html">
						<div class="congtrinh_hover">
							<h5><?=$congtrinhnb[$i]['ten_'.$lang]?></h5>
							<p><?=$congtrinhnb[$i]['mota_'.$lang]?></p>
						</div>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>