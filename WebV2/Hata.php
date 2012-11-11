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
class Hata {
	private $_hata;
	private $_hata_dizin = array();
	
	/**
	 *
	 * @access public
	 */
	public function Hata() {
		if (isset ( $_SESSION ['hata'] )) {
			$this->_hata_dizin = $_SESSION ['hata'];
			$this->_hata = count ( $this->_hata_dizin );
			unset ( $_SESSION ['hata'] );
		} else {
			$this->_hata = 0;
		}
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aHata
	 * @param
	 *       	 aMesaj
	 */
	public function Ekle($aHata, $aMesaj) {
		$this->_hata_dizin [$aHata] = $aMesaj;
		$this->_hata = count ( $this->_hata_dizin );
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aHata
	 */
	public function Dondur($aHata) {
		if (array_key_exists ( $aHata, $this->_hata_dizin )) {
			return $this->_hata_dizin [$aHata];
		} else {
			return "";
		}
	}
	
	/**
	 *
	 * @access public
	 * @return int
	 * @return Type int
	 */
	public function Toplam() {
		return $this->_hata;
	}
}
$Hata = new Hata ();
?>