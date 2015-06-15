<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Haveel</title>
<link href="css/mastercat.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
</head>

<body>
<div class="mainwrapper"><div class="casing">
<!--  header table -->
  <table width="900px" border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg.gif">
    <tr>
      <td width="300" height="30px" valign="bottom" align="left" class="clock"><?php include ("dfunct.php") ?></td>
      <td width="600" valign="bottom" align="right"><a href="index.php"><img src="images/home.gif" /></a>&nbsp;</td>
    </tr>
  </table>
  <table width="900"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="295" valign="top" height="500" align="center">
      <img src="images/headercat.jpg" /><br />        
      <img src="images/katalog.jpg" /><br />
      <a href="cat.php"><img src="images/btnhaveel.gif" /></a><br />
      <a href="catdp.php"><img src="images/btndpanel.gif" /></a><br />
      </td>
      <td width="605" valign="top">
      <div class="logo"><img src="images/headleft.jpg" /></div>
      	<div class="alamat">Haveel Informations & Call Center</div>
          <div class="alamat2">Jl. Mojopahit 50 | Surabaya - Indonesia</div>
          <div class="alamat3">0817 0303 3838</div><!--process section -->
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
$detail = pt_register('POST','detail');
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
?>      </td>
    </tr>
  </table>
  
  <table width="914" border="0" cellpadding="0" cellspacing="0" background="images/botcal.jpg">
    <tr>
      <td height="234" valign="top"><table width="914" border="0" cellpadding="15" cellspacing="0">
        <tr>
          <td width="283" height="155">&nbsp;</td>
          <td width="631" align="center">
	
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
