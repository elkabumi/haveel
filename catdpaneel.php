<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Haveel</title>
<link href="css/mastercat.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
</head>

<body>
<?php
$kategori = $_GET['cat'];
if($kategori == "dpaneel"){
	$maxrow=6;
} elseif($kategori == "quaterzone"){
	$maxrow=4;
} 
?>
<div class="mainwrapper"><div class="casing">
<!--  header table -->
  <table width="900px" border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg.gif">
    <tr>
      <td width="300" height="30px" valign="bottom" align="left" class="clock"><?php include ("dfunct.php") ?></td>
      <td width="600" valign="bottom" align="right"><a href="product.php"><img src="images/home.gif" />&nbsp;<img src="images/prodbutton.gif" alt="" /></a>&nbsp;<a href="contact.php"><img src="images/contact.gif" /></a></td>
    </tr>
  </table>
  <table width="900"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="295" valign="top" height="500" align="center">
        <img src="images/headercat.jpg" /><br />
          <a href="cat.php?cat=woodgrain"><img src="images/btnhaveel.gif" /></a>
        &nbsp;
        <img src="images/lgdpanel.gif" alt="" width="193" height="48" /><br />
          <br />
        </td>
      <td width="605" valign="top">
      <div class="logo"><img src="images/headleft.jpg" /></div>
      
      <div class="judul">d'Paneel PVC Edging product catalogue</div>
      <div class="subjudul">Postforming, Hotpress and PVC Edging</div>
	  <?php include ("dpanelcontent.php") ?></td>
    </tr>
  </table>
  
  <table width="914" border="0" cellpadding="0" cellspacing="0" background="images/botcal.jpg">
    <tr>
      <td height="234" valign="top"><table width="914" border="0" cellpadding="15" cellspacing="0">
        <tr>
          <td width="283" height="145">&nbsp;</td>
          <td width="631" align="center">
<!--          <div class="alamat">Haveel Informations & Call Center</div>
          <div class="alamat2">Jl. Mojopahit 50 | Surabaya - Indonesia</div>
          <div class="alamat3">0817 0303 3838</div> -->
          </td>
          </tr>
        <tr>
          <td class="botnav">&nbsp;&copy; 2008 - Haveel  |  High Pressure Laminate</td>
          <td>&nbsp;</td>
        </tr>
        
      </table></td>
      </tr>
  </table>
  <!--  content table -->
</div>
</div>
</body>
</html>
