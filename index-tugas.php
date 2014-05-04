<html>
<head></head>
<title></title>
<body bg background = http://2.bp.blogspot.com/-gj9pSpbm3xw/T8A9dGx1S7I/AAAAAAAABH4/A_IBVlpQpGc/s000/body-bg.png >
<table bgcolor="white" width=800 align=center border=1>
<tr>
<td>
<?php
libxml_use_internal_errors(true);
libxml_clear_errors();
$dom = new DomDocument;
$dom->loadHTMLFile("http://www.beritateknologi.com/tentang/handphone/");
$xpath = new DomXPath($dom);
$judul = $xpath->query("/html/body/div/div/div[5]/div/div/div/div/div/div/div[2]/div/div/div/a/img");
foreach ($judul as $jdl) {
	echo $jdl->nodeValue;
	echo "<img src=$jdl->nodeValue>";
	echo "<br/>";
	}
///html/body/div/div/div[5]/div/div/div/div/div/div/div[4]/div/div/div[2]
//body bg background = http://2.bp.blogspot.com/-gj9pSpbm3xw/T8A9dGx1S7I/AAAAAAAABH4/A_IBVlpQpGc/s000/body-bg.png >
?>
</td>
</tr>
/table>
</body>
</html>
