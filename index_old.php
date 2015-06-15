<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Haveel</title>
<link href="css/master.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="swfobject.js"></script>
</head>

<body>
<?
$headnum = $_GET[id];
if($headnum == "assembly"){
	$title = "assembling process";
	$load = "assm";
} elseif($headnum == "cleaning"){
	$title = "how to clean haveel up ?";
	$load = "clean";
} elseif($headnum == "chemical"){
	$title = "chemical resistance";
	$load = "chem";
} elseif($headnum == "spec"){
	$title = "technical specifications";
	$load = "spec";
}else {
	$title = "what is haveel ?";
	$load = "about";
}
?>
<div class="mainwrapper"><div class="casing">
<!--  header table -->
  <table width="900px" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="300" height="30px" valign="bottom" align="left" class="clock"><?php include ("dfunct.php") ?></td>
      <td width="600" valign="bottom" align="right"><a href="product.php"><img src="images/catlink.gif" /></a>&nbsp;<a href="contact.php"><img src="images/contact.gif" /></a>&nbsp;&nbsp;</td>
    </tr>
  </table>
<!--  content table --><table width="900px" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="424" height="542">
      <div id="section"><img src="images/mainleft.jpg" /></div>
		<script type="text/javascript">
		var so = new SWFObject("header.swf", "Haveel", "424", "542", "9", "#ffffff");
		so.addParam("quality", "high");
		so.addParam("wmode", "transparent");
		so.write("section");
		</script>
      </td>
      <td width="476" align="left" valign="top">
      <div id="isi">
      <div class="logo"><img src="images/logo.jpg" /></div>
      <div class="judul"><?php echo ($title)?></div>
      <div class="parg"><?php include ("includes/".$load.".html")


?></div>
<table width="445" border="0" align="right" cellpadding="0" cellspacing="0">
  <tr>
    <td width="245" ><div class="alamat2">Haveel Informations & Call Center</div>
          <div class="alamat3">0817 0303 3838</div></td>
    <td width="200" valign="bottom"><img src="images/lgdpanel.jpg" /></td>
    </tr>
</table>

          </div>
      </td>
    </tr>
  </table>
    <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="400" class="botnav">&copy; 2008 - Haveel  |  High Pressure Laminate</td>
      <td width="500">&nbsp;</td>
    </tr>
  </table>
</div>
</div>
</body>
</html>
