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

<div class="alamat">Haveel Informations & Call Center</div>
          <div class="alamat2">Jl. Mojopahit 50 | Surabaya - Indonesia</div>
         
      <div class="judul"> &nbsp;or you can use form below ...</div>

      <!--formulir section -->

<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','nama');
pt_register('POST','perusahaan');
pt_register('POST','alamat');
pt_register('POST','jabatan');
pt_register('POST','telepon');
pt_register('POST','handphone');
pt_register('POST','fax');
pt_register('POST','email');
pt_register('POST','detail');
$detail=preg_replace("/(\015\012)|(\015)|(\012)/","&nbsp;<br />", $detail);/*pt_register('POST','hubungi');*/
if($nama=="" || $perusahaan=="" || $alamat=="" || $telepon=="" || $handphone=="" || $email=="" || $detail=="" ){
$errors=1;
$error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
}
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email)){
$error.="<li>Invalid email address entered";
$errors=1;
}
if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="nama pengirim : ".$nama."
perusahaan : ".$perusahaan."
alamat : ".$alamat."
jabatan : ".$jabatan."
telepon : ".$telepon."
handphone : ".$handphone."
fax : ".$fax."
email : ".$email."
detail : ".$detail."
hubungi : ".$hubungi."
";
$message = stripslashes($message);
mail("zaenani@gmail.com, zaenani@desainproduk.com, zaenani@outlook.com, admin@haveel.com, ruaniwati@yahoo.com, rusman@haveel.com, info@haveel.com, rusmanforindo@yahoo.com, rusmanforindo@gmail.com","Form Submitted at your website",$message,"From:Haveel Website");
$make=fopen("admin/data.dat","a");
$to_put="";
$to_put .= $nama."|".$perusahaan."|".$alamat."|".$jabatan."|".$telepon."|".$handphone."|".$fax."|".$email."|".$detail."|".$hubungi."
";
fwrite($make,$to_put);
?>
<!--end of process section -->
      <div class="judul">Thank You, <?php echo $nama; ?> !</div><br />
   <table width="500" border="0" align="center" cellpadding="6" cellspacing="1" bgcolor="#E8E8E8"  class="ftxt">
  <tr><td width="200" bgcolor="#FFFFFF">Nama Lengkap | <i>Fullname</i></td>
  <td width="300" bgcolor="#FFFFFF"><?php echo $nama; ?></td>
  </tr>
  <tr><td bgcolor="#FFFFFF">Perusahaan | <i>Company</i></td>
  <td bgcolor="#FFFFFF"> <?php echo $perusahaan; ?> </td>
  </tr>
  <tr><td bgcolor="#FFFFFF">Alamat | <i>Address</i></td>
  <td bgcolor="#FFFFFF"> <?php echo $alamat; ?> </td>
  </tr>
  <tr><td bgcolor="#FFFFFF">Jabatan | <i>Position in Company</i></td>
  <td bgcolor="#FFFFFF"> <?php echo $jabatan; ?> </td>
  </tr>
  <tr><td bgcolor="#FFFFFF">Telepon | <i>Phone</i></td>
  <td bgcolor="#FFFFFF"> <?php echo $telepon; ?> </td>
  </tr>
  <tr><td bgcolor="#FFFFFF">Handphone | <i>Mobile Phone</i></td>
  <td bgcolor="#FFFFFF"> <?php echo $handphone; ?> </td>
  </tr>
  <tr><td bgcolor="#FFFFFF">Fax | <i>Fax</i></td>
  <td bgcolor="#FFFFFF"> <?php echo $fax; ?> </td>
  </tr>
  <tr><td bgcolor="#FFFFFF">e-mail</td>
  <td bgcolor="#FFFFFF"> <?php echo $email; ?> </td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF">Detail / <i>Info</i></td>
  <td valign="top" bgcolor="#FFFFFF"> <?php echo $detail; ?> </td>
  </tr>
  </table>
  
  <div class="parg2">We will contact you by email at <?php echo $email; ?> as soon as this form being confirmed. Best regards ! Haveel.
  You may <a href="index.php">click here</a> to return to front page.</div>
<!-- Do not change anything below this line -->

<?php 
}
?>

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