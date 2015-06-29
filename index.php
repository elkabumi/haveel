<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Haveel</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/cssmenu.css" rel="stylesheet" type="text/css" />

<!-- Grid gallery -->
<link rel="stylesheet" type="text/css" href="css/gridgallery/demo.css" />
<link rel="stylesheet" type="text/css" href="css/gridgallery/component.css" />
<script src="js/gridgallery/modernizr.custom.js"></script>

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

	

<div class="image_content_frame">

<div class="desc1">
	<div class="title">what is haveel ?</div>
	<div class="desc">Haveel is a distribution company that supplies HPL (High Pressure Laminate) and PVC Edging, with experiences in HPL product and its application has made Haveel the most reliable supplier.
You may have extensive options of product categories with constant consistency of product type, color, quality and availability.  Continuously provide latest trend of product in color and style to ensure a creative concept can be made.
	</div>
</div>

<div class="desc2">
	<div class="title">meet haveel !</div>
	<div class="desc">
		Sophicticate and best resource for high pressure laminate.
	</div>
	<br>
	<a href="cat_new.php?cat=senseme" style="text-decoration:none"><span class="button">Click here to enter</span></a>
</div>

<div style="clear:both"></div>
<div id="dvLoading_welcome"></div>
<div class="image_content"></div>

</div>

<?php
include 'grid_gallery.php';
?>

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

<!-- grid gallery -->

<script src="js/gridgallery/imagesloaded.pkgd.min.js"></script>
		<script src="js/gridgallery/masonry.pkgd.min.js"></script>
		<script src="js/gridgallery/classie.js"></script>
		<script src="js/gridgallery/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>

<script type="text/javascript">
$(window).load(function(){
	  $('#dvLoading').fadeOut(1000);

	  $('#dvLoading_welcome').fadeOut(4000);
});

</script>