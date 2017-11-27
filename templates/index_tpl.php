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

    <div class="khung">

      <ul id="tabs">
        <li><a href="#" title="tab1">All</a></li>
        <li><a href="#" title="tab2">Tường cây</a></li>
        <li><a href="#" title="tab3">Sân thượng</a></li>
        <li><a href="#" title="tab4">Tiểu cảnh</a></li>    
        <li><a href="#" title="tab5">Gallary</a></li>    
      </ul>
      <div id="contenttabs"> 
        <div class="hidden" id="tab1">

          <?php for ($i=0; $i < count($tatca); $i++) {  ?>
          <?php  $type_tabs = $tatca[$i]['type']; ?>
          <div class="box_baiviet">
            <div class="box_baiviet_img wow bounceInUp center" data-wow-delay="0.5s" >
              <a href="<?=$tabs_type[$type_tabs]?>/<?=$tatca[$i]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$tatca[$i]['thumb']?>" alt="<?=$tatca[$i]['ten_'.$lang]?>"></a>
            </div>
            <div class="box_baiviet_info wow bounceInRight center" >
              <a href="<?=$tabs_type[$type_tabs]?>/<?=$tatca[$i]['tenkhongdau']?>.html"> <h3><?=$tatca[$i]['ten_'.$lang]?></h3> </a>
              <?=$tatca[$i]['mota_'.$lang]?>
            </div>
            <div class="clear"></div>
          </div>
          <?php } ?>
          <div class="clear"></div>
        </div>
        <div class="hidden" id="tab2">
          <?php for ($i=0; $i < count($tuongcay); $i++) {  ?>
          <div class="box_baiviet">
            <div class="box_baiviet_img">
              <a href="tuong-cay/<?=$tuongcay[$i]['tenkhongdau']?>.html">  <img src="<?=_upload_baiviet_l.$tuongcay[$i]['thumb']?>" alt="<?=$tuongcay[$i]['ten_'.$lang]?>"> </a>
            </div>
            <div class="box_baiviet_info">
              <a href="tuong-cay/<?=$tuongcay[$i]['tenkhongdau']?>.html"> <h3><?=$tuongcay[$i]['ten_'.$lang]?></h3> </a>
              <?=$tuongcay[$i]['mota_'.$lang]?>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="hidden" id="tab3">
          <?php for ($i=0; $i < count($santhuong); $i++) {  ?>
          <div class="box_baiviet">
            <div class="box_baiviet_img">
              <a href="san-thuong/<?=$santhuong[$i]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$santhuong[$i]['thumb']?>" alt="<?=$santhuong[$i]['ten_'.$lang]?>"></a>
            </div>
            <div class="box_baiviet_info">
              <a href="san-thuong/<?=$santhuong[$i]['tenkhongdau']?>.html"> <h3><?=$santhuong[$i]['ten_'.$lang]?></h3> </a>
              <?=$santhuong[$i]['mota_'.$lang]?>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="hidden" id="tab4">
          <?php for ($i=0; $i < count($tieucanh); $i++) {  ?>
          <div class="box_baiviet">
            <div class="box_baiviet_img">
              <a href="tieu-canh/<?=$tieucanh[$i]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$tieucanh[$i]['thumb']?>" alt="<?=$tieucanh[$i]['ten_'.$lang]?>"></a>
            </div>
            <div class="box_baiviet_info">
              <a href="tieu-canh/<?=$tieucanh[$i]['tenkhongdau']?>.html"> <h3><?=$tieucanh[$i]['ten_'.$lang]?></h3> </a>
              <?=$tieucanh[$i]['mota_'.$lang]?>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="hidden" id="tab5">
          <?php for ($i=0; $i < count($gallery); $i++) {  ?>
          <div class="box_baiviet">
            <div class="box_baiviet_img">
              <a href="gallery/<?=$gallery[$i]['tenkhongdau']?>.html"><img src="<?=_upload_baiviet_l.$gallery[$i]['thumb']?>" alt="<?=$gallery[$i]['ten_'.$lang]?>"></a>
            </div>
            <div class="box_baiviet_info">
              <a href="gallery/<?=$gallery[$i]['tenkhongdau']?>.html"> <h3><?=$gallery[$i]['ten_'.$lang]?></h3> </a>
              <?=$gallery[$i]['mota_'.$lang]?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>

      <div class="clear"></div>
      <div class="xemthem_index">
        <a href="tuong-cay.html"> Xem thêm </a>
      </div>
    </div>


  </div>
</div>
<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>

<script>
  $(document).ready(function() {
    $("#contenttabs .hidden").hide(); // Initially hide all contenttabs
    $("#tabs li:first").attr("id","current"); // Activate first tab
    $("#contenttabs div.hidden:first").fadeIn(); // Show first tab content
    
    $('#tabs a').click(function(e) {
      e.preventDefault();        
        $("#contenttabs .hidden").hide(); //Hide all contenttabs
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('title')).fadeIn(); // Show contenttabs for current tab
      });
  })
</script>