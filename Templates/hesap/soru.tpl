
<h2>Sorular</h2>
<?php 
	
	global $veritabani;
	$data = $veritabani->soru_Listele($_SESSION['hesap_uniq']);
	foreach($data as $liste => $soru) {
		
		echo "
		
		
		<div id='soru'>
      		<h3>{$soru[1]}</h3>
      		<span class='zaman'>".date('d-m-y', $soru[5])."</span>
      		<span class='yanitla'><a href='?soru={$soru[0]}&git=cevap'>Yanitla</a></span>
		</div>
		
		
		
		";
		
	}


 ?>

