<?php

include 'hata.php';

class hesap {
	
	public function hesap() {
		switch (@$_POST ['key']) {
			case 'giris' :
				$this->Giris ();
				break;
			case 'kayit' :
				$this->Kayit ();
				break;
		}
	}
	
	private function Giris() {
		global $veritabani, $oturum, $hata;
		
		if (! isset ( $_POST ['email'] ) or $_POST ['email'] == "") {
			$hata->hata_Ekle ( 'email', '0x00email' );
		} elseif (! $veritabani->hesap_Kontrol ( $_POST ['email'] )) {
			$hata->hata_Ekle ( 'email', '0x01emailyok' );
		}
		
		if (! isset ( $_POST ['pass'] ) or $_POST ['pass'] == "") {
			$hata->hata_Ekle ( 'pass', '0x10pass' );
		}elseif($veritabani->hesap_Giris($_POST['email'], $_POST['pass']) == false) {
			$hata->hata_Ekle ( 'email', '0x11passhata' );
		}
		
		if ($hata->hata_Toplam () > 0) {
		
		} else {
			$oturum->oturum_olustur ( $ref );
			header ( "Location: main.php" );
		}
	
	}
	
	private function Kayit() {
	
	}

}

$hesap = new hesap ();

?>