
<?php 
$d->reset();
$sql = "select thumb_$lang from #_photo where type='bannerqc' order by stt asc";
$d->query($sql);
$banner_center = $d->fetch_array();

?>
<div class="banner_center">	
	<img src="<?=_upload_hinhanh_l.$banner_center['thumb_'.$lang]?>" alt="<?=$row_setting['ten_'.$lang]?>">

</div>	