<?php
$sql_muaban = "select tenkhongdau,ten_$lang,id,thumb from #_baiviet where hienthi=1 and type='".$type_bar."' and noibat!=0 order by stt ";
$d->query($sql_muaban);
$row_noibat = $d->result_array();
?>
<script src="js/ImageScroller.js" language="javascript"></script>
<div id="ctsdiv" style="text-align:center; position:relative; height:500px; overflow:hidden">
 <table width="100%" border="0" cellspacing="0" cellpadding="0" id="ctstbl" style="position:relative; margin:0px">
   <?php for($i=0,$count_ha=count($row_noibat);$i<$count_ha;$i++){?>
   <tr>
    <td valign="top">
     <table width="100%" cellspacing="0" cellpadding="0" border="0">
       <tr>
        <td valign="top" class="sp_noibat">
        <a href="<?=$com?>/<?=$row_noibat[$i]['tenkhongdau']?>.html" >
            <img src="<?=_upload_baiviet_l.$row_noibat[$i]['thumb']?>" alt="<?=$row_noibat[$i]['ten_'.$lang]?>"/>
            <h3><?=$row_noibat[$i]['ten_'.$lang]?></h3>
          </a>
        </td>
      </tr>                          
    </table>
  </td>
</tr>
<?php }?>
</table>
<script type="text/javascript">createScroller("myScroller", "ctsdiv", "ctstbl",0,50,1,0,1);</script>   
</div>