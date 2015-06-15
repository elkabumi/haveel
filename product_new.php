<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Haveel</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/cssmenu.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="new/jquery.js"></script>
<script type="text/javascript" src="js/jsmenu.js"></script>
<script> 
$(document).ready(function(){
    $(".image_content").click(function(){
        $(".image_content").animate({
            marginTop : '260px',
            height: '245px'
           
        }, 1500);
        
        $(".desc1").animate({
            opacity: '1'
        }, 2000);

        $(".desc2").animate({
            opacity: '1'
        }, 2000);
		


    });
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

<div class="content_frame_left"></div>
<div class="content_frame_right">

<div class="judul">Haveel Product Informations &amp; Catalogue</div>
      <div class="judul2">About High Pressure Laminate</div>
      <div class="parg"><?php include ("includes/about2.html")?></div>
      <div class="judul2">Assembling HPL Products</div>
      <div class="parg"><?php include ("includes/assm.html")?></div>
      <div class="judul2">How to Clean HPL Products ?</div>
      <div class="parg"><?php include ("includes/clean.html")?></div>
      <div class="judul2">HPL Product Chemical Resistance</div>
      <div class="parg"><?php include ("includes/chem.html")?></div>
      <div class="judul2">Technical Specifications</div>
      <div class="parg"><img src="images/spec.gif" /></div>

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