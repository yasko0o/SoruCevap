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
			$hata->hata_Ekle ( 'email', giris_email_bos );
		} elseif (! $veritabani->hesap_Kontrol ( $_POST ['email'] )) {
			$hata->hata_Ekle ( 'email', giris_email_yok );
		}
		
		if (! isset ( $_POST ['pass'] ) or $_POST ['pass'] == "") {
			$hata->hata_Ekle ( 'pass', giris_pass_bos );
		}elseif($veritabani->hesap_Giris($_POST['email'], $_POST['pass']) == false) {
			$hata->hata_Ekle ( 'email', giris_pass_hata );
		}
		
		if ($hata->hata_Toplam () == 0) {
			$oturum->oturum_olustur ( $_POST['email'] );
			header ( "Location: main.php" );
		}
	
	}
	
	private function Kayit() {
	
	}

}

$hesap = new hesap ();

?>