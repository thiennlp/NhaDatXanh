
<?php 
    $d->reset();
    $sql = "select id, ten_$lang,links from #_video where hienthi=1 order by stt asc";
    $d->query($sql);
    $result_video = $d->result_array();  
?>
<script type="text/javascript">
    $(document).ready(function() {
          $('.video_lienquan').change(function (){
            var str = $(this).val(); 
            if(str != '')
            $('#box_video').load("js/ajax_video.php?id="+str);
            return false;
        });
    });
</script>
<div class="margin_auto">
<div class="center">


    <div class="video-clip">
        <div class="title-center">VIDEO CLIP</div>
        <div class="conten-center">
            <div class="video_slider">
                <div id="box_video" style="width:100%;padding: 10px 5px;">
                <?php  $arr =explode("=", $result_video[0]['links']); ?>
                    <iframe width="375" height="280" src="https://www.youtube.com/embed/<?=$arr[1]?>" frameborder="0" allowfullscreen></iframe>
                </div>
                
                 <div class="select_video" style="border: 3px solid #b5b6b6; width: 378px;  height: 25px; margin-left:10px;margin: 0px auto;" >
                    <select class="video_lienquan" style=" width: 100%; height: 25px;  margin-bottom:0px;">
                    <option value="">Video khác</option>
                    <?php for($i=0;$i<count($result_video );$i++) { ?>
                        <option value="<?=$result_video[$i]['id']?>">
                        <?=$result_video[$i]['ten_vi']?>
                        </option>
                    <?php } ?>
                    </select>
                </div>  
            </div><!-- End .video_slider --> 
        </div>
    </div>
    <!-- .End video-clip -->


 <link rel="stylesheet" type="text/css" href="js/jquery.simplyscroll.css"/>
<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
<script type="text/javascript"> 
(function($) {
    $(function() {
        $("#scroller").simplyScroll({
            orientation:'vertical',
            customClass:'vert'
        });
    });
})(jQuery);
</script> 
<?php
    $d->reset();
    $sql_slider = "select id, ten_$lang,tenkhongdau,mota_vi,thumb from #_baiviet where hienthi=1 and type='tintuc' order by stt,id asc";
    $d->query($sql_slider);
    $rusult_tintuc = $d->result_array();
?>
    <div class="video-clip">
        <div class="title-center">TIN TỨC MỚI</div>
        <div class="conten-center">
            <div id="scroller">
                 <div class="tintucmoi">
                    <?php for($i=0; $i< count($rusult_tintuc); $i++)
                    { ?>
                        <div class="box_tintucmoi">
                                <div class="hinhtt">
                                <a href="tin-tuc/<?php echo $rusult_tintuc[$i]['tenkhongdau'] ?>.html">
                                <img src="<?php echo _upload_baiviet_l.$rusult_tintuc[$i] ['thumb']; ?>" alt="<?=$rusult_tintuc[$i]['ten_'.$lang]?>"   width="100%"; height="100%"  /></a>
                                </div><!--hinhtt-->
                                <div class="infott">
                                <a href="tin-tuc/<?php echo $rusult_tintuc[$i]['tenkhongdau'] ?>.html"><?php echo $rusult_tintuc [$i] ['ten_vi']; ?></a> <br>
                                <?php echo $rusult_tintuc [$i] ['mota_'.$lang]; ?>
                                </div><!--infott-->
                                <div class="clr"></div>
                                <div style="border-bottom: 1px dotted #999; clear: both;height: 23px;"></div>
                        </div>
                        <?php  }?>
                </div><!---tintuc-->  
            </div>    
        </div>
    </div>
    <!-- .End video-clip -->


    <div class="video-clip" style="margin-right: 0 !important;    width: 384px !important;">
        <div class="title-center">FANPAGE FACEBOOK</div>
        <div class="conten-center">
            <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script> 

                    <div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-width="385" data-height="340" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="<?=$row_setting['facebook']?>">Facebook</a></blockquote></div></div>
            </div>    
       
    </div>
    <!-- .End video-clip -->
    <div class="clr"></div>

    <div class="clear"></div>
</div><!-- . End center -->
</div><!-- margin -->
<div class="clear"></div>