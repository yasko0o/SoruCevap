<?php

include 'oturum.php';

class sistem {
	
	private $oturum = false;
	
	private $oturum_sayfa = array ('hesap'); // giris yapilmasi gereken sayfalar !
	
	private $aktif_sayfa = false;
	
	public function sistem() {
		global $oturum;
		
		$this->oturum = $oturum->oturum_bilgisi ();
		
		$this->aktif_sayfa = basename ( $_SERVER ['SCRIPT_FILENAME'], '.php' );
	
		$this->sayfa_yukle ();
	}
	
	public function sayfa_yukle() {
		global $oturum;
		if(!$this->oturum AND $this->aktif_sayfa == 'hesap') {
			header('Location: giris.php');
		}
	}

}

$sistem = new sistem ();

?>