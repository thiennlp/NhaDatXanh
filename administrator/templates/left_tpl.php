<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>


  <li class="article_li <?php if($_GET['com']=='baiviet' && $_GET['type']!='mau') echo ' activemenu' ?>" id="menu_bv"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub">

      <li<?php if($_GET['type']=='tuongcay') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tuongcay">Quản lý tường cây </a></li>

      <li<?php if($_GET['type']=='santhuong') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=santhuong">Quản lý sân thượng </a></li>


      <li<?php if($_GET['type']=='tieucanh') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tieucanh">Quản lý tiểu cảnh</a></li>

      <li<?php if($_GET['type']=='gallery') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=gallery">Quản lý Gallery</a></li>

      <li<?php if($_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tintuc">Quản lý tin tức</a></li>
      <li<?php if($_GET['type']=='dichvu') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=dichvu">Quản lý dịch vụ</a></li>

    </ul>
  </li>

  <li class="article_li <?php if($_GET['com']=='info') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='gioithieu') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=gioithieu">Giới thiệu</a></li>    

    </ul>
  </li>



  <li class="template_li<?php if($_GET['com']=='setting' || $_GET['com']=='newsletter' || $_GET['com']=='bannerqc'  || $_GET['com']=='company') echo ' activemenu' ?>" id="menu5"><a href="#" title="" class="exp"><span>Thông tin công ty</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='logo') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
      
      <li<?php if($_GET['type']=='bannerqc') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=bannerqc" title="">banner quảng cáo</a></li>

      <li<?php if($_GET['type']=='favicon') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=favicon" title="">Favicon</a></li>

      <li<?php if($_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=lienhe" title="">Liên hệ</a></li>
      <li<?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=footer" title="">Footer</a></li>
      <li<?php if($_GET['com']=='setting') echo ' class="this"' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
      <li<?php if($_GET['com']=='newsletter') echo ' class="this"' ?>><a href="index.php?com=newsletter&act=man" title="">Gửi Mail</a></li>

    </ul>
  </li>

  <li class="gallery_li<?php if($_GET['com']=='photo') echo ' activemenu' ?>" id="menu7"><a href="#" title="" class="exp"><span>Hình Ảnh - Slider</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Hình ảnh slider</a></li>
       <li<?php if($_GET['type']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man&type=video" title="">Video</a></li>

    </ul>
  </li>



</ul>