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
      <td width="600" valign="bottom" align="right"><a href="index.php"><img src="images/home.gif" /></a>&nbsp;<img src="images/contact.gif" /></td>
    </tr>
  </table>
  <table width="900"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="295" valign="top" height="500" align="center">
      <img src="images/headercat.jpg" /><br />        
      <img src="images/katalog.jpg" /><br />
      <a href="cat.php?cat=woodgrain"><img src="images/btnhaveel.gif" /></a><br />
      <a href="catdp.php"><img src="images/btndpanel.gif" /></a><br />
      </td>
      <td width="605" valign="top">
      <div class="logo"><img src="images/headleft.jpg" /></div>
      	<div class="alamat">Haveel Informations & Call Center</div>
          <div class="alamat2">Jl. Mojopahit 50 | Surabaya - Indonesia</div>
          <div class="alamat3">0817 0303 3838</div>
      <div class="judul"> &nbsp;or you can use form below ...</div>

      <!--formulir section -->
<form enctype='multipart/form-data' action='process.php' method='post'>
<div class="warn">Please fill in all fields marked with a *</div>
<table width="500" border="0" align="center" cellpadding="6" cellspacing="1" bgcolor="#E8E8E8"  class="ftxt">
  <tr>
    <td width="200" bgcolor="#FFFFFF">Nama Lengkap | <i>Fullname</i></td>
    <td width="300" bgcolor="#FFFFFF"><input name='nama' type=text size=40 maxlength="60" />
      * </td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">Perusahaan | <i>Company</i></td>
    <td bgcolor="#FFFFFF"><input name='perusahaan' type=text size=40 maxlength="60" />
    *</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" >Alamat |  <i>Address</i></td>
    <td bgcolor="#FFFFFF"><input name='alamat' type=text size=40 maxlength="60" />
      *</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Jabatan |  <i>Position in Company</i></td>
    <td bgcolor="#FFFFFF"><input type=text name='jabatan' size=40 maxlength="60" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Telepon |  <i>Phone</i></td>
    <td bgcolor="#FFFFFF"><input type=text name='telepon' size=40 maxlength="40" />
      *</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Handphone |  <i>Mobile Phone</i></td>
    <td bgcolor="#FFFFFF"><input type=text name='handphone' size=40 maxlength="40" />
      *</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Fax |  <i>Fax</i></td>
    <td bgcolor="#FFFFFF"><input type=text name='fax' size=40 maxlength="40" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">e-mail</td>
    <td bgcolor="#FFFFFF"><input type=text name='email' />
      *</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" valign="top">Detail / <i>Info *</i></td>
    <td bgcolor="#FFFFFF" valign="top"><textarea name='detail' rows=10 cols=32></textarea></td>
  </tr>
</table>
<br />
<table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#E8E8E8">
  <tr>
    <td height="50" align="center" bgcolor="#FFFFFF"><font face="Verdana" size="2">
      <input type="submit" value='Submit Form' />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value='Reset Form' />
    </font></td>
    </tr>
</table>
</form>
<!--end of formulir section -->

      </td>
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
