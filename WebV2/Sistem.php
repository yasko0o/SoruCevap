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

require 'Oturum.php';
require 'Veritabani.php';

class Sistem {
	
	/**
	 * @AttributeType string
	 */
	private $_oturum_sayfa = 'hesap';
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
		// session_start();
		$this->Sayfa_Erisim ( $Oturum->Durum () );
		include_once '/Dil/' . $this->Sistem_Dil_Yukle () . '.php';
		$this->_aktif_sayfa = basename ( $_SERVER ['SCRIPT_FILENAME'], '.php' );
	
	}
	
	/**
	 *
	 * @access private
	 */
	private function Sayfa_Erisim($aOturum) {
		if ($aOturum == FALSE and $this->_aktif_sayfa == $this->_oturum_sayfa) {
			header ( 'Location: giris.php' );
		}
	}
	
	/**
	 *
	 * @access private
	 *        
	 * @return string
	 *
	 */
	private function Sistem_Dil_Algila() {
		
		if (isset ( $_GET ['dil'] )) {
			$_SESSION ['SISTEM_DIL'] = $_GET ['dil'];
		} else {
			if (! isset ( $_SESSION ['SISTEM_DIL'] ) or $_SESSION ['SISTEM_DIL'] == NULL or is_numeric ( $_SESSION ['SISTEM_DIL'] )) {
				$_SESSION ['SISTEM_DIL'] = SISTEM_DILI;
			}
		}
		
		return $_SESSION ['SISTEM_DIL'];
	
	}
	
	/**
	 *
	 * @access private
	 *        
	 * @return string
	 *
	 */
	private function Sistem_Dil_Yukle() {
		$dil = $this->Sistem_Dil_Algila ();
		
		switch ($dil) {
			case 'TURKCE' :
				return 'tr';
				break;
			case 'ENGLISH' :
				return 'en';
				break;
			case 'NEDERLANDS' :
				return 'nl';
				break;
		
		}
	
	}

}
$Sistem = new Sistem ();
?>