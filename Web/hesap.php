<?php


/*
 * 
 * 
 * 
 * <<<<<<<<<<<<<<<<<<<<<<< Yasin Kucuk .
 * 			www.sanalkurs.com | king.achiles
 * Ne yaptiginizi bildiginiz surece degistirmekte ozgursunuz !
 * 
 * 
 */


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
			case 'aktivasyon' :
				$this->aktivasyon ();
				break;
			case 'act':
				$this->act();
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
		global $veritabani, $hata, $au, $oturum;
		
		if (! isset ( $_POST ['email'] ) or $_POST ['email'] == "") {
			$hata->hata_Ekle ( 'email', giris_email_bos );
		} elseif ($veritabani->hesap_Kontrol ( $_POST ['email'] )) {
			$hata->hata_Ekle ( 'email', giris_email_ayni );
		}
		
		if (! isset ( $_POST ['pass'] ) or $_POST ['pass'] == "") {
			$hata->hata_Ekle ( 'pass', giris_pass_bos );
		} elseif ($_POST ['pass'] != $_POST ['pass2']) {
			$hata->hata_Ekle ( 'pass', giris_pass_esle );
		}
		
		if (! isset ( $_POST ['isimsoyisim'] ) or $_POST ['isimsoyisim'] == "") {
			$hata->hata_Ekle ( 'isim', giris_isim_bos );
		}
		
		if ($hata->hata_Toplam () == 0) {
			
			if (ACT_GEREKLI) {
				$act = 0;
				$kod = $au->act_olustur ( rand ( 0, 39 ) );
				$veritabani->act_ekle ( $kod );
				$au->act_gonder ( $_POST ['email'], $kod );
				$url = 'aktivasyon.php?adim=a2&email=' . $_POST ['email'] . '&act=' . $act;
				$_SESSION ['email'] = $_POST ['email'];
			} else {
				$act = 1;
				$url = 'kayit.php?git=basari&act=' . $act;
			
			}
			
			if (! $veritabani->hesap_Kayit ( $_POST ['email'], md5 ( $_POST ['pass'] ), $_POST['isimsoyisim'], $act, uniqid ( 'yk_' ) )) {
				header ( 'location: kayit.php?git=hata' );
			} else {
				if (! ACT_GEREKLI and GIRIS_OTO) {
					$oturum->oturum_olustur ( $_POST ['email'] );
					$url = 'hesap.php';
				}
				header ( 'location: ' . $url );
			}
		}
	
	}
	
	private function act() {
		global $veritabani, $hata;
		if (! isset ( $_POST ['email'] ) or $_POST ['email'] == "") {
			$hata->hata_Ekle ( 'email', giris_email_bos );
		} elseif (!$veritabani->hesap_Kontrol ( $_POST ['email'] )) {
			$hata->hata_Ekle ( 'email', act_email_yok );
		}
		
		if ($hata->hata_Toplam () == 0) {
			$_SESSION['email'] = $_POST['email'];
			header('Location: aktivasyon.php?adim=a2');
		}
	}
	
	private function aktivasyon() {
		global $veritabani, $hata, $au;
		if (! isset ( $_POST ['act_kod'] ) or $_POST ['act_kod'] == "") {
			$hata->hata_Ekle ( 'act_kod', act_kod_bos );
		} elseif (! $veritabani->act_dogrula ( $_POST ['act_kod'] )) {
			$hata->hata_Ekle ( 'act_kod', act_kod_hata );
		}
		
		if ($hata->hata_Toplam () == 0) {
			if ($au->act_bitir ()) {
				header ( 'Location: aktivasyon.php?adim=sonuc&durum=true' );
			} else {
				header ( 'Location: aktivasyon.php?adim=sonuc&durum=false' );
			}
		}
	}

}

$hesap = new hesap ();

?>