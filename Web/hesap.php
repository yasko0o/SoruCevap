<?php

include 'au.php';
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
		} elseif ($veritabani->hesap_Giris ( $_POST ['email'], $_POST ['pass'] ) == false) {
			$hata->hata_Ekle ( 'pass', giris_pass_hata );
		}
		
		if ($hata->hata_Toplam () == 0) {
			$oturum->oturum_olustur ( $_POST ['email'] );
			header ( "Location: hesap.php" );
		
		}
	
	}
	
	private function Kayit() {
		global $veritabani, $hata, $au;
		
		if (! isset ( $_POST ['email'] ) or $_POST ['email'] == "") {
			$hata->hata_Ekle ( 'email', giris_email_bos );
		} elseif ($veritabani->hesap_Kontrol ( $_POST ['email'] )) {
			$hata->hata_Ekle ( 'email', giris_email_ayni );
		}
		
		if (! isset ( $_POST ['pass'] ) or $_POST ['pass'] == "") {
			$hata->hata_Ekle ( 'pass', giris_pass_bos );
		}
		
		if (! isset ( $_POST ['isim'] ) or $_POST ['isim'] == "") {
			$hata->hata_Ekle ( 'isim', giris_isim_bos );
		}
		
		if ($hata->hata_Toplam () == 0) {
			
			if (ACT_GEREKLI) {
				$act = 0;
				$kod = $au->act_olustur ( rand ( 0, 39 ) );
				$au->act_gonder ( $_POST ['email'], $kod );
			} else {
				$act = 1;
			}
			
			if (! $veritabani->hesap_Kayit ( $_POST ['email'], md5 ( $_POST ['pass'] ), $act, uniqid ( 'yk_' ) )) {
				header ( 'location: kayit.php?git=hata' );
			} else {
				header ( 'location: kayit.php?git=basari&act=' . $act );
			}
		}
	
	}

}

$hesap = new hesap ();

?>