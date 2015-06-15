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
<?
$kategori = $_GET[cat];
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
<div class="mainwrapper"><div class="casing">
<!--  header table -->
  <table width="900px" border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg.gif">
    <tr>
      <td width="300" height="30px" align="left" class="clock"><?php include ("dfunct.php") ?></td>
      <td width="600" valign="bottom" align="right"><a href="index.php"><img src="images/home.gif" /></a><a href="product.php">&nbsp;<img src="images/prodbutton.gif" alt="" /></a>&nbsp;<a href="contact.php"><img src="images/contact.gif" /></a></td>
    </tr>
  </table>
  <table width="900"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="295" valign="top" height="500"><div align="center">
        <img src="images/headercat.jpg" /><br />
          <a href="catdpaneel.php?cat=dpaneel"><img src="images/btndpanel.gif" alt="Click here for PVC Edging Catalogue" /></a>
&nbsp; 
        <table width="200" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td><div class="alamat3">Other HPL Categories :</div></td>
          </tr>
          <tr>
            <td><span class="alamat2"><a href="cat.php?cat=senseme">Sense Me</a></span></td>
          </tr>
          <tr>
            <td><span class="alamat2"><a href="cat.php?cat=quaterzone">Quater Zone</a></span></td>
          </tr>
          <tr>
            <td><span class="alamat2"><a href="cat.php?cat=openpore">Open Pore</a></span></td>
          </tr>
          <tr>
            <td><span class="alamat2"><a href="cat.php?cat=woodpolish">Wood Polish</a></span></td>
          </tr>
          <tr>
            <td><span class="alamat2"><a href="cat.php?cat=woodgrain">Wood Grain</a></span></td>
          </tr>
          <tr>
            <td><span class="alamat2"><a href="cat.php?cat=metallic">Metallic</a></span></td>
          </tr>
          <tr>
            <td><span class="alamat2"><a href="cat.php?cat=fancy">Fancy & Leather</a></span></td>
          </tr>
          <tr>
            <td><span class="alamat2"><a href="cat.php?cat=solid">Solid Color</a></span></td>
          </tr>
        </table>
        <p><br />
        </p>
</div></td>
      <td width="605" valign="top">
      <div class="logo"><img src="images/headleft.jpg" /></div>
      <div class="judul">High Pressure Laminate product catalogue</div>
      <div class="subjudul">all HPL products are available at 1220 x 2440 mm size</div>
	  <div class="hmg"><img src="images/headers/<?php print ($kategori)?>.jpg"/></div>
    
	  <?php include ("nutab.php") ?></td>
    </tr>
  </table>
  
  <table width="914" border="0" cellpadding="0" cellspacing="0" background="images/botcal.jpg">
    <tr>
      <td height="234" valign="top"><table width="914" border="0" cellpadding="15" cellspacing="0">
        <tr>
          <td width="283" height="155">&nbsp;</td>
          <td width="631" align="left" valign="top"><img src="images/keterangan.gif" width="171" height="82" /></td>
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
