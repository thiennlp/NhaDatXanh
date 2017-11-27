<?php 
    $d->reset();
	$sql_danhmuc = "select id,ten_$lang,tenkhongdau,thumb, mota_$lang from #_baiviet where type='dichvu' and noibat<>0 and hienthi=1 order by stt,id asc limit 0,3";
	$d->query($sql_danhmuc);
	$result_danhmuc = $d->result_array(); 
?>

<div class="dichvu">
	<div class="margin_auto">
		<?php for ($i=0; $i < count($result_danhmuc); $i++) {  ?>
			<div class="box_dichvu <?php if(($i+1)%3==0){ echo 'last';}?>">
				<div class="dichvu_img">
					<a href="dich-vu/<?=$result_danhmuc[$i]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$result_danhmuc[$i]['thumb']?>" alt="<?=$result_danhmuc[$i]['ten_'.$lang]?>"></a>
				</div>
				<div class="ten_dv">
					<a href="dich-vu/<?=$result_danhmuc[$i]['tenkhongdau']?>.html"><h3><?=$result_danhmuc[$i]['ten_'.$lang]?></h3></a>
					<br><br>
					<p><?=$result_danhmuc[$i]['mota_'.$lang]?></p>
					<div class="clear"></div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="clear"></div>
</div>
