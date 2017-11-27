
<style type="text/css" media="all">
	.list_carousel_4 {
		text-align: center;
		display: inline-block;
	}
	.list_carousel_4 .foo4 {
		margin: 0;
		width: 1200px;
		padding: 0;
		list-style: none;
		display: block;
	}
	.list_carousel_4 li {

		display: inline-block;text-align: center;
	}
	.list_carousel_4 li img{

	}
	.list_carousel_4.responsive {
		width: auto;
		margin-left: 0;
	}
	.clearfix {
		float: none;
		clear: both;
	}


</style>
<?php
$d->reset();
$sql = "select ten_$lang,id,thumb,tenkhongdau,mota_$lang from #_baiviet where hienthi=1 and type='dichvu' and noibat!=0 order by stt,id desc";
$d->query($sql);
$product_nb = $d->result_array();
?>
<div class="thanh_title"><h2>Dịch vụ</h2> </div>

<div class="sanpham_nb">
	<div class="margin_auto">
		<div class="list_carousel_4">
			<div class="slicksp">
				<?php for($j=0,$count_ch=count($product_nb);$j<$count_ch;$j++){?>
				<div>
					<div class="item wow bounceInRight " data-wow-delay="<?=1*$j*300?>ms">
						<div class="list_img">
							<a href="du-an/<?=$product_nb[$j]['tenkhongdau']?>.html">
								<img src="<?=_upload_baiviet_l.$product_nb[$j]['thumb']?>">
							</a>

							<h3><a href="du-an/<?=$product_nb[$j]['tenkhongdau']?>.html"><?=$product_nb[$j]['ten_'.$lang]?></a></h3>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<div class="clear"></div>