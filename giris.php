<?php

include 'Web/veritabani.php';
include 'Web/oturum.php';
include 'Web/hesap.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SoruCevap</title>
<script type="text/javascript" src="jquery.js"></script>

<style type="text/css">
ul,li {
	padding: 0px;
	margin: 0px;
}

li {
	list-style: none;
}

.temizle {
	clear: both;
}

#govde {
	width: 1024px;
	margin-right: auto;
	margin-left: auto;
}

#kallanici_menu {
	margin-bottom: 15px;
}

#kallanici_menu ul li a {
	display: block;
	width: 150px;
	padding: 25px;
	text-decoration: none;
	color: #AAAAAA;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 26px;
	float: left;
	border-bottom-width: 5px;
	border-bottom-style: solid;
	border-bottom-color: #F2E3C8;
}

#kallanici_menu ul li a:hover {
	color: #777777;
	border-bottom-width: 5px;
	border-bottom-style: solid;
	border-bottom-color: #777777;
}

#sorular .gelensoru {
	background-color: #F6F6F6;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #ABABAB;
	margin-bottom: 5px;
}

#sorular .gelensoru_baslik {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #888888;
	padding: 15px;
	margin-bottom: 5px;
	border-bottom-width: 1px;
	border-bottom-style: dotted;
	border-bottom-color: #D5D5D5;
}

#sorular .gelensoru_cevap {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 18px;
	padding-top: 15px;
	padding-right: 15px;
	padding-bottom: 15px;
	padding-left: 40px;
}
</style>
</head>

<body>

	<div id="govde">
		<?php include TEMP.'header.tpl';?>
		<div id="icerik">
		
			<?php include TEMP.'giris.tpl'?>
			
	
		</div>
	</div>

</body>
</html>
