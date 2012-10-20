<?php

class oturum {
	
	private $oturum = false;
	
	public function oturum() {
		
		if (! isset ( $_SESSION ['giris'] ) or $_SESSION ['giris'] == false) {
			$this->oturum = false;
		} else {
			$this->oturum = true;
		}
	
	
	}
	
	public function oturum_olustur($ref) {
		
	}
	
	public function oturum_bilgisi() {
		return $this->oturum;
	}

}

$oturum = new oturum ();