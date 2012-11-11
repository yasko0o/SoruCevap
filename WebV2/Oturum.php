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
class Oturum {
	
	private $_Oturum = false;
	
	/**
	 *
	 * @access public
	 */
	public function Oturum() {
		
		if (! isset ( $_SESSION ['giris'] ) or $_SESSION ['giris'] == false) {
			$this->_Oturum = false;
		} else {
			$this->_Oturum = true;
		}
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aRef
	 */
	public function Olustur($aRef) {
		global $Veritabani;
		// $this->oturum_sil ();
		$_SESSION ['giris'] = true;
		$_SESSION ['hesap_uniq'] = $Veritabani->Hesap_BilgiAl ( $aRef, 'uniq', FALSE );
		// $_SESSION ['hesap_bilgileri'] = $veritabani->hesap_Bilgileri($ref);
	}
	
	/**
	 *
	 * @access public
	 */
	public function Sil() {
		// unset ( $_SESSION ['hesap_uniq'] );
		unset ( $_SESSION ['hesap_bilgileri'] );
		unset ( $_SESSION ['giris'] );
	}
	
	/**
	 *
	 * @access public
	 */
	public function Durum() {
		return $this->_Oturum;
	}
}
$Oturum = new Oturum ();
?>