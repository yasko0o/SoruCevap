<?php

class au {
	public function act_olustur($e) {
		return md5 ( $e );
	}
	
	public function act_gonder($email, $kod) {
		$subject = SISTEM_ISIM." Aktivasyon ";
		
		$message = "
		
		
			Sitemize kayit oldugunuz icin tesekkurler , 
			hesabinizi aktiflestirmek icin asagidaki baglantiya tiklayarak
			gerekli sayfaya gidebilirsiniz.
			
			Aktivasyon kodunuz : {$kod}
			
			".SISTEM_URL."hesap.php?git=act&kod={$kod}
		
		
		";
		
		
		
		mail($email, $subject, $message);
		
	}
}

$au = new au();

?>