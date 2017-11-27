<?php 
	$d->reset();
	$sql = "select thumb, mota_$lang, ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='tintuc' and noibat!='' order by stt asc";
	$d->query($sql);
	$tintuc_baiviet = $d->result_array();
 ?>
 <script type="text/javascript">
$().ready(function(){
	$('.tintucnn').slick({
		  dots: false,
		  infinite: true,
		  speed: 1500,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  autoplay: true,
		  responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			  }
			},
			{
			  breakpoint: 800,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 450,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
		});
	});

</script>
<div class="tintuc_index">
	<div class="container">
        <div class="thanh_title"><h2><?=_tintucvasukien?></h2>    </div>
            <div class="tintucnn">
	            <?php for($j=0;$j<count($tintuc_baiviet);$j++){?>
		            <div>
		                <div class="item_index" >
		                     <div class="product_images"><a href="tin-tuc/<?=$tintuc_baiviet[$j]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$tintuc_baiviet[$j]['thumb']?>" alt="<?=$tintuc_baiviet[$j]['ten_'.$lang]?>" /></a></div>
		                     <div class="clear"></div>
		                     <h3><a href="tin-tuc/<?=$tintuc_baiviet[$j]['tenkhongdau']?>.html"><?=$tintuc_baiviet[$j]['ten_'.$lang]?></a> </h3>
		                     <p class="mota"><?=$tintuc_baiviet[$j]['mota_'.$lang]?></p>
		                     <div class="clear"></div>

		                </div>
		            </div>
	            <?php } ?>
            </div>
            <div class="clear"></div>
		
	</div>
</div>