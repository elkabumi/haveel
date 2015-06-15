
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>


<body>
<?
$filename = "cat.txt";
$fd = fopen ($filename, "r");
$contents = fread ($fd,filesize ($filename));
$pagecount = $_GET[page];
if ( $pagecount == "" ) {
	$pagecount = 1;
}

fclose ($fd); 
$delimiter = ",";
$splitcontents = explode($delimiter, $contents);
$counter = "#";
?>

<?
foreach ( $splitcontents as $color )
{
$counter = $counter+1;
$isi[$counter] = $color;
}
?>

<?php
/* initiate variables */
$pages=5;
$gambar=(3+(($pagecount-1)*48));
$nama=(4+(($pagecount-1)*48));
$buka=(2+(($pagecount-1)*48));
$kode=(1+(($pagecount-1)*48));
$ket=(4+(($pagecount-1)*48));
$nil=10;
$cap_nil=$nil;
$tbl_row=1;
/* start built the table */
echo "<table width=519  height=560 border=0 align=center cellpadding=1 cellspacing=1 bgcolor=#E2E2E2 class=katalog>";
while($tbl_row<=4)
  {
  echo "<tr>";
  		$img_row=1;
		while($img_row<=3){
		echo "<td height=124 width=172 bgcolor=#FFFFFF align=center class=bgtab>";
		echo "<a href=images/hpl/".$isi[$buka]." rel=lightbox[haveel] title=".$isi[$ket]."><img border=no src=images/hpl/".$isi[$gambar]."></a>";
		echo "</td>";
		$nil++;
	    $img_row++;
		$gambar=$gambar+4;
		$buka=$buka+4;
		$ket=$ket+4;
  		}
  echo "</tr>";
    echo "<tr>";
  		$capt_row=1;
		while($capt_row<=3){
		echo "<td height=20 width=160 bgcolor=#FFFFFF align=center >";
		echo "<span class=style3>".$isi[$nama]." - ".$isi[$kode]."</span>";
		echo "</td>";
		$cap_nil++;
	    $capt_row++;
		$nama=$nama+4;
		$kode=$kode+4;
  		}
  echo "</tr>";
  $tbl_row++;
  }
echo "</table>";
/* table end */
echo "</br>";
		echo "<div class=katlink>you are viewing page ".$pagecount." of ".$pages."&nbsp; | &nbsp;jump to page :&nbsp;";
  		$link_row=1;
		while($link_row<=$pages){
		echo "<a href=cat.php?page=".$link_row.">&nbsp<span class=style3>".$link_row."</span>&nbsp</a>&nbsp;&nbsp;";
		$link_row++;
		}
?>
