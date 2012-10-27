<?php

global $veritabani;

$soru = $veritabani->soru_Bul($_GET['soru']);
$soran = $veritabani->hesap_BilgiAlani(true, $soru['soran'], 'isimsoyisim');
echo "
		
		<h2><a href='profil.php?kullanici={$soru['soran']}'>$soran</a> size sordu :</h2>
		<div id='soru'>
      		<h3>{$soru[1]}</h3>
      		<span class='zaman'>".date('d-m-y', $soru[5])."</span>
            <div id='cevap'>
            	<form method='post' action='#'>
            	<div id='yanit_kutu'>
                	<input type='hidden' value='cevap' name='key' id='key' />
                	<input type='text' name='yani' id='yanit' class='yanit_text'/>
                
                </div>
                
                <div id='dokun'>
                	<input type='submit' class='button medium blue' value = 'gonder'/>
                </div>
            	</form>
            </div>
      		
		</div>
		
		
		
		";


?>