<?php

$d->reset();
$sql = "select noidung_$lang from #_company where type='footer' ";
$d->query($sql);
$footer = $d->fetch_array();

$d->reset();
$sql = "select * from #_lkweb where hienthi=1 and type='lkwebft' order by stt,id desc ";
$d->query($sql);
$lkwebft = $d->result_array();



?>

<div class="clear"></div>
<div class="dangkynhantin">
	<div class="margin_auto">
		<?php include _template."layout/addon/nhantin.php"; ?>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>

<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
    $(".various").fancybox({
      maxWidth  : 800,
      maxHeight : 800,
      fitToView : false,
      width   : '100%',
      height    : '100%',
      autoSize  : false,
      closeClick  : true,
      openEffect  : 'none',
      closeEffect : 'none'
    });
  });
</script>
<div id="bottom">
	<div class="margin_auto">

		<div class="clear"></div>
		<div class="bottom">

			<div class="thongtin_bt">
				<?=$footer['noidung_'.$lang]?>
			</div>

			<div class="bando_ft">
			<a class="various fancybox.iframe" data-fancybox-type="iframe" href="vitri.php">
				<div class="icon_map">
					<div class="pin bounce"></div>
					<div class="pulse"></div>		
				</div>
				</a>
			</div>

			<div class="khung_facebook">
				<h4>Fanpage facebook</h4>
				<div class="fanpage_fb">
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script> 

					<div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-width="275" data-height="170" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="<?=$row_setting['facebook']?>">Facebook</a></blockquote></div></div>

				</div>
			</div>
			
			<div class="clear"></div>
		</div>


		<div class="clear"></div>
	</div>

	<div class="copy">
		<div class="margin_auto">
			2016 Copyright © Hải Đường. All rights reserved
		</div>
	</div>
</div>




