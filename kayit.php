<?php

include 'Web/veritabani.php';
include 'Web/hesap.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soru Cevap</title>
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>  
<script type="text/javascript" src="Templates/yonlendir.js"></script>  
</head>

<body>
	<div id="genel">
		<?php include TEMP.'header.tpl';?>
		<div id="icerik">
			<?php include TEMP.'kayit.tpl'?>
		</div>
		<?php include TEMP.'foother_in.tpl';?>
	</div>
</body>
</html>