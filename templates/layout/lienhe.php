<?php 
$d->reset();
$sql = "select thumb_$lang from #_photo where type='bannergioithieu' order by stt asc";
$d->query($sql);
$banner_center = $d->result_array();

?>
<script language="javascript" src="js/my_script.js"></script>
<script language="javascript">
	function js_submit12(){
		if(isEmpty(document.getElementById('ten'), "Xin nhập Họ tên.")){
			document.getElementById('ten').focus();
			return false;
		}
		if(isEmpty(document.getElementById('diachi'), "Xin nhập Địa Chỉ.")){
			document.getElementById('diachi').focus();
			return false;
		}
		
		if(isEmpty(document.getElementById('dienthoai'), "Xin nhập Số điện thoại.")){
			document.getElementById('dienthoai').focus();
			return false;
		}
		
		if(!isNumber(document.getElementById('dienthoai'), "Số điện thoại không hợp lệ.")){
			document.getElementById('dienthoai').focus();
			return false;
		}
		
		if(!check_email(document.frm.email.value)){
			alert("Email không hợp lệ");
			document.frm.email.focus();
			return false;
		}
	
		
		if(isEmpty(document.getElementById('noidung'), "Xin nhập Nội dung.")){
			document.getElementById('noidung').focus();
			return false;
		}
		
		document.frm.submit();
	}
</script>
<div class="clear"></div>
<div class="wapper_bando">
	<div class="bandoidex">
		<img src="<?=_upload_hinhanh_l.$banner_center[0]['thumb_'.$lang]?>" alt="<?=$row_setting['ten_'.$lang]?>">

	</div>
	<div class="dangkynhantin">
		<h4>Form liên hệ</h4>

		<div class="form_lh1">
			<form method="post" name="frm" action="lien-he.html" enctype="multipart/form-data">
				<div class="box_lienhe1">
					<p><input placeholder="<?=_hovaten?>" name="ten" type="text" class="tflienhe" id="ten" /></p>
					<p><input placeholder="<?=_address?>" name="diachi" type="text"  class="tflienhe" id="diachi"/></p>
					<p><input placeholder="<?=_dienthoai?>" name="dienthoai" type="text" class="tflienhe" id="dienthoai"/></p>
					<p><input placeholder="Email" name="email" type="text" class="tflienhe" id="email"  /></p>
				</div>
					<p><textarea placeholder="<?=_noidung?>" name="noidung" cols="50" rows="5" class="ta_noidung" id="noidung"></textarea></p>
					<p><label>&nbsp </label>
						<button type="button" onclick="js_submit12();"> Gửi liên hệ</button>
					</p> 
			</form>
		</div>
	</div>
</div>