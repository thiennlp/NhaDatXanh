<script type="text/javascript">
  $(document).ready(function(e) {
    $(window).scroll(function(e) {
      var body = $("body");
      var top = body.scrollTop();
      
    });
    
    $('html,body').animate({
      scrollTop: $('#main').offset().top},'slow'
      );


  }); 
</script>

<link href="js/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="js/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {

    $('.thanhtoannhanh').click(function(e) {
      var pid = $(this).data('id');
      var soluong = $('.soluong_12').val();
      if(soluong <= 0){
        alert('Bạn chưa chọn số lượng !');
        return false;
      }

      $.ajax({
        type: "POST",
        url: "ajax/add_giohang.php", 
        data: {pid:pid,soluong:soluong},
        success: function(string){
          var getData = $.parseJSON(string);   
          var result = getData.result_giohang;
          var count = getData.count;

          if(result > 0) {    
            alert('Bạn đã thêm thành công sản phẩm này vào giỏ hàng');
            window.location.href="thanh-toan.html";        
          }
          else if (result == -1)alert('Sản phẩm này không tồn tại');
          else if (result == 0)
            { alert('Sản phẩm này đã có trong giỏ hàng'); window.location.href="thanh-toan.html";      
        }
      }          
    });
    });

  });
</script>

<script language="javascript">
  function addtocart(pid){
    document.form_giohang.productid.value=pid;
    document.form_giohang.command.value='add';
    document.form_giohang.submit();
  }
</script>
<form name="form_giohang" action="index.php" method="post">
  <input type="hidden" name="productid" />
  <input type="hidden" name="command" />
</form>
<div id="info">
  <div id="sanpham">
    <?php //include _template."layout/left.php";?> 

    
    <div class="khung">
      <div class="thanh_title"><h2><?=$title_detail?> chi tiết</h2></div>
      <div class="khung_1 col-md-9 col-sm-12 col-xx-12 col-xs-12">
        <?php //include _template."layout/dieuhuong_detail.php";?>
        <div class="clear"></div>
        <div class="frame_images col-md-4 col-sm-4 col-xx-12 col-xs-12" >
          <div class="app-figure" id="zoom-fig">
            <a href="<?=_upload_product_l.$row_detail['photo']?>" id="Zoom-1" class="MagicZoom" title="<?=$row_detail['ten_'.$lang]?> .">
              <img src="<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" width="250" /></a>
            </div>

            <div class="selectors">
              <?php include _template."layout/jssor.php";?>
            </div>
          </div>

          <ul class="khung_thongtin col-md-8 col-sm-8 col-xx-12s col-xs-12">
            <li><h1><?=$row_detail['ten_'.$lang]?></h1></li>
            <li class="gia_detail"><b><?=_gia?> :</b> <?php if($row_detail['giaban']==0) echo "Liên Hệ"; else echo number_format ($row_detail['giaban'],0,",",".")." VNĐ";?></li>
            <li class="giacu_detail">Giá trước đây : <span><?php if($row_detail['giacu']==0) echo "Liên Hệ"; else echo number_format ($row_detail['giacu'],0,",",".")." VNĐ";?></span></li>

            <li class="MASP"><b>MASP :</b> <?=$row_detail['masp']?></li>
            <li class="khuyenmai_detail">
              <?=$row_detail['mota_'.$lang]?>
            </li>
            <li class="MASP"><b>Lượt xem :</b> <?=$row_detail['luotxem']?></li>

            <li>
              <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55a5ff5b3a9222b9" async="async"></script>
              <script src="https://apis.google.com/js/platform.js" async defer></script>
              <?=get_social('','share');?>
            </li>
            <li class="masp">Số lượng : <input type="text" size="1" class="soluong_12" value="1" /></li>
            
            <li class="dathang_detail">
              <div class="thanhtoannhanh" data-id="<?=$row_detail['id']?>">Đặt hàng ngay</div>
            </li>

          </ul>
          <!-- khungthongtin -->

          <div class="clear"></div>
          <div id="container_product">
            <div id="tabs">
              <ul>
                <li class="thongtinsp">Thông tin sản phẩm</li>
              </ul>
              <div class="clear"></div>
              <div id="tab-1" style="display: block;">
                <div class="noidung_ta" style="clear:left;"><?=$row_detail['noidung_'.$lang]?>
                  <div class="phantrang"></div>
                </div>
              </div>
            </div>
          </div> <!-- container_product -->
        </div>

        <div class="clear"></div>

        <div class="thanh_title"><h2>Sản phẩm cùng loại</h2></div>
        <div>
          <?php for($j=0,$count_sp=count($product);$j<$count_sp;$j++){?>
          <div class="item1" >
            <?php if($product[$j]['moi']!=0) {?> <img class="hot" src="images/icon_hot.png" alt="Hot"> <?php } ?>
            <div class="product_img">
              <a href="san-pham/<?=$product[$j]['tenkhongdau']?>.html"><img src="<?=_upload_product_l.$product[$j]['thumb']?>" alt="<?=$product[$j]['ten_'.$lang]?>" /></a>
              <a href="san-pham/<?=$product[$j]['tenkhongdau']?>.html">
                <div class="hover_mota"><?=$product[$j]['mota_'.$lang]?></div>
              </a>
            </div>
            <a href="san-pham/<?=$product[$j]['tenkhongdau']?>.html"><h3><?=$product[$j]['ten_'.$lang]?></h3></a>
            <div class="clear"></div>
            <p class="giaban">Giá: <span><?php if($product[$j]['giaban']==0) echo "Liên Hệ"; else echo number_format ($product[$j]['giaban'],0,",",".")." VNĐ";?></span></p>
            <p class="giacu"><span><?php if($product[$j]['giacu']==0) echo "Liên Hệ"; else echo number_format ($product[$j]['giacu'],0,",",".")." VNĐ";?></span></p>
            <p class="giohang"><a href="#" alt="giỏ hàng" onclick="addtocart(<?=$product[$j]['id']?>);">Giỏ hàng</a></p>
            <p class="chitietsp"><a href="san-pham/<?=$product[$j]['tenkhongdau']?>.html">Chi tiết</a></p> 
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
