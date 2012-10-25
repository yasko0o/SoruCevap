<?php


/*
 *
*
*
* <<<<<<<<<<<<<<<<<<<<<<< Yasin Kucuk .
* 			www.sanalkurs.com | king.achiles
* Ne yaptiginizi bildiginiz surece degistirmekte ozgursunuz !
*
*
*/


class au {
	public function act_olustur($e) {
		return md5 ( $e );
	}
	
	public function act_gonder($email, $kod) {
		$subject = SISTEM_ISIM . " Aktivasyon ";
		
		$message = "
		
		
			Sitemize kayit oldugunuz icin tesekkurler , 
			hesabinizi aktiflestirmek icin asagidaki baglantiya tiklayarak
			gerekli sayfaya gidebilirsiniz.
			
			Aktivasyon kodunuz : {$kod}
			
			" . SISTEM_URL . "aktivasyon.php?git=act&kod={$kod}&email={$email}
		
		
		";
		
		mail ( $email, $subject, $message );
	
	}
	
	public function act_bitir() {
		global $veritabani;
		if (! isset ( $_SESSION ['email'] )) {
			header ( 'Location: aktivasyon.php' );
		} else {
			if ($veritabani->hesap_Guncelle ( $_SESSION ['email'], 'acces', 1 )) {
				return true;
				unset($_SESSION['email']);
			} else {
				return false;
			}
		}
	
	}
}

$au = new au ();

?>