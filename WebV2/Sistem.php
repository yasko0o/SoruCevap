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
class Sistem {
	
	/**
	 * @AttributeType string
	 */
	private $_oturum_sayfa = hesap;
	/**
	 * @AttributeType boolean
	 */
	private $_aktif_sayfa = false;
	
	/**
	 *
	 * @access public
	 */
	public function Sistem() {
		Global $Oturum;
		$this->Sayfa_Erisim($Oturum->Durum());
	}
	
	/**
	 *
	 * @access private
	 */
	private function Sayfa_Erisim($aOturum) {
		if ($aOturum == FALSE and $this->$_aktif_sayfa == $this->$_oturum_sayfa) {
			header ( 'Location: giris.php' );
		}
	}
}
?>