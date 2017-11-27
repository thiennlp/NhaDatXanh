<?php  if(!defined('_source')) die("Error");

		$tabs_type = array( "tuongcay" => "tuong-cay","santhuong" => "san-thuong","tieucanh" => "tieu-canh", "gallery" => "gallery"); 


    $d->reset();
    $sql= "select ten_$lang,id,tenkhongdau,thumb,type,mota_$lang from #_baiviet where hienthi=1 and (type='tuongcay' or type='santhuong' or type='tieucanh' or type='gallery' ) and noibat!=0 order by stt,id desc limit 0,3";
    $d->query($sql);
    $tatca = $d->result_array();

    $d->reset();
    $sql= "select ten_$lang,id,tenkhongdau,thumb,mota_$lang from #_baiviet where hienthi=1 and type='tuongcay' and noibat!=0 order by stt,id desc limit 0,3";
    $d->query($sql);
    $tuongcay = $d->result_array();

    $d->reset();
    $sql= "select ten_$lang,id,tenkhongdau,thumb,mota_$lang from #_baiviet where hienthi=1 and type='santhuong' and noibat!=0 order by stt,id desc limit 0,3";
    $d->query($sql);
    $santhuong = $d->result_array();

    $d->reset();
    $sql= "select ten_$lang,id,tenkhongdau,thumb,mota_$lang from #_baiviet where hienthi=1 and type='tieucanh' and noibat!=0 order by stt,id desc limit 0,3";
    $d->query($sql);
    $tieucanh = $d->result_array();

    $d->reset();
    $sql= "select ten_$lang,id,tenkhongdau,thumb,mota_$lang from #_baiviet where hienthi=1 and type='gallery' and noibat!=0 order by stt,id desc limit 0,3";
    $d->query($sql);
    $gallery = $d->result_array();


?>
