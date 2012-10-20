<?php 

global $veritabani;


$result $veritabani->soru_Listele($_SESSION['hesapid']);

foreach($result as $row = $array) {


	echo "
    <div id='sorular'>
        
       	<div id='{$array['id']}' class='gelensoru'>
            	<input type='hidden' id='soruid' value='{$array['id']}' />
                <div class='gelensoru_baslik'>". kullanici_bul($array['soran']) ." soruyor : {$array['baslik']}</div>
                <div class='gelensoru_cevap'> <input type='text' /> <input type='button' id='gonder_beni' value = 'gonder'/></div>
            
            </div>
            
        </div>
        ";


}



?>