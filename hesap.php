<?php

include 'Web/veritabani.php';
include 'Web/sistem.php';


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
		
			if($oturum->oturum_bilgisi())
				include TEMP.'/hesap/header.tpl';
			else
				include TEMP.'/header.tpl';
		?>
		<div id="icerik_hesap">
                    <div id="hesap">
                       <?php
                       
                            @$git = $_GET['git'];
                            
                            switch($git) {
                                case 'arama':
                                    include TEMP.'/hesap/ara.tpl';
                                    break;
                                case 'cikis':
                                	$oturum->oturum_sil();
                                    //include TEMP.'/hesap/cikis.tpl';
                                    break;
                                case 'profil':
                                    include TEMP.'/hesap/profil.tpl';
                                    break;
                                case 'ag':
                                    include TEMP.'/hesap/ag.tpl';
                                    break;
                                case 'soru':
                                    include TEMP.'/hesap/soru.tpl';
                                    break;
                                case 'populer':
                                default:
                                    include TEMP.'/hesap/populer.tpl';
                                    break;
                            }
                       
                       ?>
                    </div>
		</div>
		<?php include TEMP.'/foother_in.tpl';?>
	</div>
</body>
</html>