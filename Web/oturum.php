<?php

class oturum {
	
	private $oturum = false;
	
	public function oturum() {
		session_start ();
		if (! isset ( $_SESSION ['giris'] ) or $_SESSION ['giris'] == false) {
			$this->oturum = false;
		} else {
			$this->oturum = true;
		}
	
	}
	
	public function oturum_olustur($ref) {
		global $veritabani;
		$this->oturum_sil ();
		$_SESSION ['giris'] = true;
		$_SESSION ['hesap_bilgileri'] = $veritabani->hesap_Bilgileri ( $ref );
		// $_SESSION ['hesap_uniq'] = $_SESSION ['hesap_bilgileri']['uniq'];
	
	}
	
	public function oturum_sil() {
		//unset ( $_SESSION ['hesap_uniq'] );
		unset ( $_SESSION ['hesap_bilgileri'] );
		unset ( $_SESSION ['giris'] );
	}
	
	public function oturum_bilgisi() {
		return $this->oturum;
	}

}

$oturum = new oturum ();