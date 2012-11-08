<?php
/**
 * Bu proje egitim amacli gelistirilmistir, hic bir sekilde satilamaz !
 * 
 * Bu projeyi istediginiz gibi gelistirmek ozgursunuzdur.
 * 
 * 
 * Iletisim:
 * 
 * http://ask.fm/ysnkck35
 * http://www.sanalkurs.net/forum/profile/king.achiles/
 * 
 * Yasin Kucuk
 * @access public
 * @author Yasin
 */
class Au {
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aE
	 */
	public function Aktivasyon_Kod_Olustur($aE) {
		return md5 ( $aE );
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aEmail
	 * @param
	 *       	 aKod
	 */
	public function Aktivasyon_Email_Gonder($aEmail, $aKod) {
		$subject = SISTEM_ISIM . " Aktivasyon ";
		
		$message = "
		
		
			Sitemize kayit oldugunuz icin tesekkurler , 
			hesabinizi aktiflestirmek icin asagidaki baglantiya tiklayarak
			gerekli sayfaya gidebilirsiniz.
			
			Aktivasyon kodunuz : {$aKod}
			
			" . SISTEM_URL . "aktivasyon.php?git=act&kod={$aKod}&email={$aEmail}
		
		
		";
		
		mail ( $aEmail, $subject, $message );
	}
	
	/**
	 *
	 * @access public
	 */
	public function Aktivasyon_Bitir() {
		global $Veritabani;
		if (! isset ( $_SESSION ['email'] )) {
			header ( 'Location: aktivasyon.php' );
		} else {
			if ($Veritabani->Hesap_Guncelle (FALSE, $_SESSION ['email'], 'acces', 1 )) {
				return true;
				unset ( $_SESSION ['email'] );
			} else {
				return false;
			}
		}
	}
}
?>