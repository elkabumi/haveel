<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Haveel</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/cssmenu.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="new/jquery.js"></script>
<script type="text/javascript" src="js/jsmenu.js"></script>

<!-- new lightbox -->
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />

<script> 
$(document).ready(function(){

  $('.fancybox').fancybox();

   
});
</script> 
</head>
<body>
<div id="dvLoading"></div>
<div class="content">

	<div class="logo"></div>


<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <li><a href='product_new.php'><span>Product Catalogue</span></a>
      <ul>
         <li ><a href='cat_new.php?cat=senseme'><span>HPL PRODUCT</span></a></li>
         <li ><a href='pvc_edging.php?cat=dpaneel'><span>PVC EDGING</span></a></li>
      </ul>
   </li>
   
   <li class='last'><a href='contact_new.php'><span>Contact</span></a></li>
</ul>
</div>
	<!--
	<div class="menu_frame">
		<ul class="menu">
			<a href="#"><li>Home</li></a>
			<a href="#"><li>Product Catalogue</li></a>
			<a href="#"><li>Contact</li></a>
		</ul>
	</div>
	-->

	

<div class="content_frame">
<?
$kategori = (isset($_GET['cat'])) ? $_GET['cat'] : "";
if($kategori == "senseme"){
  $maxrow=5;
} elseif($kategori == "quaterzone"){
  $maxrow=4;
} elseif($kategori == "openpore"){
  $maxrow=4;
} elseif($kategori == "woodpolish"){
  $maxrow=4;
} elseif($kategori == "woodgrain"){
  $maxrow=9;
} elseif($kategori == "metallic"){
  $maxrow=4;
} elseif($kategori == "fancy"){
  $maxrow=3;
} elseif($kategori == "solid"){
  $maxrow=4;
}
?>
<div class="content_frame_left2">

<div class="side_menu">
<div class="side_menu_header">HPL Products</div>


<a href="cat_new.php?cat=senseme" class="new_link"><div class="side_menu_link <?php if($kategori == "senseme"){ echo "side_menu_link_active"; }?>">Sense Me</div></a>
<a href="cat_new.php?cat=quaterzone" class="new_link"><div class="side_menu_link <?php if($kategori == "quaterzone"){ echo "side_menu_link_active"; }?>">Quater Zone</div></a>
<a href="cat_new.php?cat=openpore" class="new_link"><div class="side_menu_link <?php if($kategori == "openpore"){ echo "side_menu_link_active"; }?>">Open Pore</div></a>
<a href="cat_new.php?cat=woodpolish" class="new_link"><div class="side_menu_link <?php if($kategori == "woodpolish"){ echo "side_menu_link_active"; }?>">Wood Polish</div></a>
<a href="cat_new.php?cat=woodgrain" class="new_link"><div class="side_menu_link <?php if($kategori == "woodgrain"){ echo "side_menu_link_active"; }?>">Wood Grain</div></a>
<a href="cat_new.php?cat=metallic" class="new_link"><div class="side_menu_link <?php if($kategori == "metallic"){ echo "side_menu_link_active"; }?>">Metallic</div></a>
<a href="cat_new.php?cat=fancy" class="new_link"><div class="side_menu_link <?php if($kategori == "fancy"){ echo "side_menu_link_active"; }?>">Fancy & Leather</div></a>
<a href="cat_new.php?cat=solid" class="new_link"><div class="side_menu_link <?php if($kategori == "solid"){ echo "side_menu_link_active"; }?>">Solid Color</div></a>

</ul>
</div>

</div>

<div class="content_frame_right">

  <div class="judul">High Pressure Laminate product catalogue</div>
      <div class="subjudul">all HPL products are available at 1220 x 2440 mm size</div>
      <div class="hmg"><img src="images/headers/<?php print ($kategori)?>.jpg"/></div>
      <br>
	  <?php include ("nutab.php") ?>
    <br>
<img src="images/keterangan.gif" width="171" height="82" />
</div>
</div>

<div class="footer">
<div class="footer_first">
<a href="#"><div class="footer_f_1"></div></a>
<a href="#"><div class="footer_f_2"></div></a>
<a href="#"><div class="footer_f_3"></div></a>
<a href="#"><div class="footer_f_4"></div></a>


</div>
<div class="footer_second">
<div class="footer_s_top">Haveel Informations & Call Center</div>
<div class="footer_s_bottom">0817 0303 3838</div>
</div>
<div class="footer_third">
<div class="footer_t_right"></div>
</div>
</div>

</div>

</body>
</html>

<script type="text/javascript">
$(window).load(function(){
	  $('#dvLoading').fadeOut(1000);

	  $('#dvLoading_welcome').fadeOut(4000);
});

</script>