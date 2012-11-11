<?php

//include 'WebV2/Veritabani.php';
include 'WebV2/Sistem.php';
include 'WebV2/Hesap.php';


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
		<?php 
		
			if($Oturum->Durum())
				include TEMP.'header.tpl';
			else
				include $DIR[1].'/header.tpl';
		?>
		<div id="icerik_hesap">
                    <div id="hesap">
                       <?php
                       /*
                        * 
                        * $DIR[1] // -> ayar.php
                        * 
                        * $DIR[1] = /Templates/Hesap/
                        * 
                        */
                            @$git = $_GET['git'];
                            
                            switch($git) {
                                case 'arama':
                                    include $DIR[1].'ara.tpl';
                                    break;
                                case 'cikis':
                                    include $DIR[1].'cikis.tpl';
                                    break;
                                case 'profil':
                                    include $DIR[1].'profil.tpl';
                                    break;
                                case 'ag':
                                    include $DIR[1].'ag.tpl';
                                    break;
                                case 'soru':
                                    include $DIR[1].'soru.tpl';
                                    break;
                                case 'cevap':
                                	include $DIR[1].'cevap.tpl';
                                	break;
                                case 'anasayfa':
                                case 'populer':
                                default:
                                    include $DIR[1].'populer.tpl';
                                    break;
                            }
                       
                       ?>
                    </div>
		</div>
		<?php include TEMP.'/foother_in.tpl';?>
	</div>
</body>
</html>