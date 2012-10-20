<?php

include 'oturum.php';

class sistem {
	
	private $oturum = false;
	private $sayfa = array('main', 'giris', 'kayit','ayar');
	
	public function sistem() {
		global $oturum;
		$this->oturum = $oturum->oturum_bilgisi ();
		$this->sayfa_yukle ();
	}
	
	public function sayfa_yukle() {
		global $oturum;
		// $_SESSION['giris'] = false;

		
		if($this->oturum == false) {
			Header("Location: giris.php");
		} else {
			$url = basename($_SERVER['SCRIPT_FILENAME'], '.php');
			if(!in_array($url, $this->sayfa)) {
				Header("Location: hata.php?git=404");
			}
		}
		
	}

}

$sistem = new sistem ();

?>