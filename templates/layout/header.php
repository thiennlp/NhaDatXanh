<?php

$d->reset();
$sql_banner_top= "select thumb_$lang from #_photo where type='logo'";
$d->query($sql_banner_top);
$logo_top = $d->fetch_array();


$d->reset();
$sql_banner_top= "select photo_$lang from #_photo where type='banner'";
$d->query($sql_banner_top);
$banner_top = $d->fetch_array();


?>


<div id="banner">
    <div class="margin_auto">
        <div id="logo">
            <a href="index.html" >
                <img src="<?=_upload_hinhanh_l.$logo_top['thumb_'.$lang]?>" width='100%' alt="Banner">
            </a>
        </div>
        <div class="hotline_top">
            Hotline: <span><?=$row_setting['hotline']?></span>
        </div>

    </div>
    <div class="clear"></div>
</div>


<div id="main_menu">
    <div class="margin_auto">
        <?php include _template."layout/menu.php";?>
    </div>
</div>




