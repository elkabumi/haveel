
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/addition.css" type="text/css" media="screen" />
<!--
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>
-->
<?php
$filename = "products/".$kategori.".txt";
$fd = fopen ($filename, "r");
$contents = fread ($fd,filesize ($filename));
$pagecount = (isset($_GET['page'])) ? $_GET['page'] : "";
if ( $pagecount == "" ) {
	$pagecount = 1;
}

fclose ($fd); 
$delimiter = ",";
$splitcontents = explode($delimiter, $contents);
$counter = "#";



foreach ( $splitcontents as $tuple )
{
$counter = $counter+1;
$isi[$counter] = $tuple;
/* echo "counter ".$counter." : ".$isi[$counter]."<br>"; */
}

/* data initiation */
$col=1;
$imgv=1;
$namv=2;
$idv=4;
$dt=0;
$row=1;



/* start to build it */
while ($row<=$maxrow){
	echo "<div class=rows>";
while($col<=4){
	$gambar= $isi[$imgv].".jpg"; $trimmed = ltrim($gambar);$kode = ltrim($isi[$imgv]);
	
	/*
	echo "<div class=tmpt style=background-image:url(images/".$isi[$idv].".gif);><div class=thum>";
	echo "<a rel=lightbox href=products/img/".$trimmed." title=".$isi[$namv]."><img src=products/thumb/".$trimmed."></a></div>";
	echo "<div class=det>".$isi[$namv]."<br>&nbsp;&nbsp;&nbsp;".$kode."</div>";
	echo "</div>";
	*/
	?>
	<div class="tmpt" style="background-image:url('images/<?= $isi[$idv]; ?>.gif'); background-position: 0px 3px;">
	<div class="thum">
	<a class="fancybox" href="<?= "products/img/".$trimmed; ?>" data-fancybox-group="gallery" title="<?= $isi[$namv]; ?>"><img src="<?= "products/thumb/".$trimmed; ?>" alt="" /></a>
	</div>
	<div class="det"><?= $isi[$namv]."<br>&nbsp;&nbsp;&nbsp;".$kode; ?></div>
	</div>
	<?php
	$col++;	$imgv=$imgv+4;$namv=$namv+4;$idv=$idv+4;
	}
	echo "</div>";
	$col=1;
	$row++;
	}
	

?>