<html>
<head></head>
<title></title>
<body bg background = http://2.bp.blogspot.com/-gj9pSpbm3xw/T8A9dGx1S7I/AAAAAAAABH4/A_IBVlpQpGc/s000/body-bg.png >
<table bgcolor="white" align=center border=0>
<tr>
<td width=800><h2 align="center">
<?php
libxml_use_internal_errors(true);
libxml_clear_errors();
$dom = new DomDocument;
$dom->loadHTMLFile("http://www.republika.co.id/berita/regional/jawa-tengah-diy/12/02/22/lzskzn-warga-diimbau-waspadai-perkembangan-gunung-merapi");
$xpath = new DomXPath($dom);
$judul = $xpath->query("/html/body/div[5]/div/div/div[2]/h1");
foreach ($judul as $jdl) {
	echo $jdl->nodeValue;
	echo "<br/>";
	}
?>
</h2>
<br/>
<img src="http://static.republika.co.id/uploads/images/detailnews/tanaman_di_lereng_gunung_merapi_101217182625.jpg">
<?php
libxml_use_internal_errors(true);
libxml_clear_errors();
$dom = new DomDocument;
$dom->loadHTMLFile("http://www.republika.co.id/berita/regional/jawa-tengah-diy/12/02/22/lzskzn-warga-diimbau-waspadai-perkembangan-gunung-merapi");
$xpath = new DomXPath($dom);
$judul = $xpath->query("/html/body/div[5]/div/div/div[2]/div[6]/p");
foreach ($judul as $jdl) {
	echo $jdl->nodeValue;
	echo "<br/>";
	}
?>
</td>
<td width=270>
<img src="http://www.sehat.info/wp-content/uploads/2013/02/vitamin-dari-sinar-matahari-260x125.jpg">
<h4>
<?php
libxml_use_internal_errors(true);
libxml_clear_errors();
$dom = new DomDocument;
$dom->loadHTMLFile("http://www.sehat.info/");
$xpath = new DomXPath($dom);
$judul = $xpath->query("/html/body/div[2]/div[2]/div/section/div[2]/ul/li/h2/a");
foreach ($judul as $jdl) {
	echo $jdl->nodeValue;
	}
?>
</h4>
<?php
libxml_use_internal_errors(true);
libxml_clear_errors();
$dom = new DomDocument;
$dom->loadHTMLFile("http://www.sehat.info/");
$xpath = new DomXPath($dom);
$judul = $xpath->query("/html/body/div[2]/div[2]/div/section/div[2]/ul/li/div[2]");
foreach ($judul as $jdl) {
	echo $jdl->nodeValue;
	echo "<br/>";
	}
?>
</td>
</tr>
</table>
</body>
</html>
