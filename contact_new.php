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
<form enctype='multipart/form-data' action='process.php' method='post'>
<div class="warn">Please fill in all fields marked with a *</div>
<table width="600" border="0" style="margin-left:10px;" cellpadding="10" cellspacing="1" bgcolor="#E8E8E8"  class="ftxt">
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
<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#E8E8E8">
  <tr>
    <td height="50" align="center" bgcolor="#FFFFFF"><font face="Verdana" size="2">
      <input type="submit" value='Submit Form' />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value='Reset Form' />
    </font></td>
    </tr>
</table>
</form>

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