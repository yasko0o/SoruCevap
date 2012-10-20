<?php 




$query = mysql_query("UPDATE sorular SET cevap = '{$cevap}' WHERE id = '{$soruid}'");

if($query) {
	
	echo 'cevap basari ile kayit edildi !';
	
} else {
	
	echo 'bir hata olustu';
}


?>