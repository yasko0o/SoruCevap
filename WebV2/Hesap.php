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
class Hesap {
	
	/**
	 *
	 * @access public
	 */
	public function Hesap() {
		switch (@$_POST ['key']) {
			case 'giris' :
				$this->Giris ();
				break;
			case 'kayit' :
				$this->Kayit ();
				break;
			case 'aktivasyon' :
				$this->Aktivasyon_Tamamla ();
				break;
			case 'act' :
				$this->Aktivasyon_Istek ();
				break;
			case 'cevap' :
				$this->Cevap_Gonder ();
				break;
		}
	}
	
	/**
	 *
	 * @access private
	 */
	private function Giris() {
		global $Veritabani, $oturum, $Hata;
		
		if (! isset ( $_POST ['email'] ) or $_POST ['email'] == "") {
			$Hata->Ekle ( 'email', giris_email_bos );
		} elseif (! $Veritabani->Hesap_Kontroll ( $_POST ['email'] )) {
			$Hata->Ekle ( 'email', giris_email_yok );
		}
		
		if (! isset ( $_POST ['pass'] ) or $_POST ['pass'] == "") {
			$Hata->Ekle ( 'pass', giris_pass_bos );
		} elseif ($Veritabani->Hesap_Giris ( $_POST ['email'], $_POST ['pass'] ) == false) {
			$Hata->Ekle ( 'pass', giris_pass_hata );
		}
		
		if ($Hata->Toplam () == 0) {
			$Oturum->Olustur ( $_POST ['email'] );
			header ( "Location: hesap.php" );
		
		}
	}
	
	/**
	 *
	 * @access private
	 */
	private function Kayit() {
		global $Veritabani, $Oturum, $Hata, $Au;
		
		if (! isset ( $_POST ['email'] ) or $_POST ['email'] == "") {
			$Hata->Ekle ( 'email', giris_email_bos );
		} elseif ($veritabani->hesap_Kontrol ( $_POST ['email'] )) {
			$Hata->Ekle ( 'email', giris_email_ayni );
		}
		
		if (! isset ( $_POST ['pass'] ) or $_POST ['pass'] == "") {
			$Hata->Ekle ( 'pass', giris_pass_bos );
		} elseif ($_POST ['pass'] != $_POST ['pass2']) {
			$Hata->Ekle ( 'pass', giris_pass_esle );
		}
		
		if (! isset ( $_POST ['isimsoyisim'] ) or $_POST ['isimsoyisim'] == "") {
			$Hata->Ekle ( 'isim', giris_isim_bos );
		}
		
		if ($Hata->Toplam () == 0) {
			
			if (ACT_GEREKLI) {
				$act = 0;
				$aKod = $Au->act_olustur ( rand ( 0, 39 ) );
				$Veritabani->act_ekle ( $aKod );
				$au->act_gonder ( $_POST ['email'], $aKod );
				$url = 'aktivasyon.php?adim=a2&email=' . $_POST ['email'] . '&act=' . $act;
				$_SESSION ['email'] = $_POST ['email'];
			} else {
				$act = 1;
				$url = 'kayit.php?git=basari&act=' . $act;
			
			}
			
			if (! $veritabani->hesap_Kayit ( $_POST ['email'], md5 ( $_POST ['pass'] ), $_POST ['isimsoyisim'], $act, uniqid ( 'yk_' ) )) {
				header ( 'location: kayit.php?git=hata' );
			} else {
				if (! ACT_GEREKLI and GIRIS_OTO) {
					$Oturum->oturum_olustur ( $_POST ['email'] );
					$url = 'hesap.php';
				}
				header ( 'location: ' . $url );
			}
		}
	}
	
	/**
	 *
	 * @access private
	 */
	private function Cevap_Gonder() {
		global $Veritabani, $Hata;
		if (! isset ( $_POST ['yanit'] ) or $_POST ['yanit'] == "") {
			$Hata->Ekle ( 'cevap', cevap_kutu_bos );
		} elseif (strlen ( $_POST ['cevap'] ) > CEVAP_MAX) {
			$Hata->Ekle ( 'cevap', cevap_max_karakter );
		}
		
		if ($Hata->Toplam () == 0) {
			$soru = $Veritabani->soru_Bul ( $_GET ['soru'] );
			$Veritabani->Soru_Guncelle ( $soru ['id'], 'durum', 1 );
			$Veritabani->Soru_Guncelle ( $soru ['id'], 'cevap', $_POST ['yanit'] );
			$Veritabani->Bildiri_Ekle ( $soru ['soran'], bildiri_yanit, 0 );
			header ( "Location: hesap.php?git=soru" );
		
		}
	}
	
	/**
	 *
	 * @access private
	 */
	private function Soru_Sor() {
		global $Veritabani, $Hata;		
		if (! isset ( $_POST ['soru'] ) or $_POST ['soru'] == "") {
			$Hata->Ekle ( 'soru', soru_kutu_bos );
		} elseif (strlen ( $_POST ['soru'] ) > DEF_SORU_MAX_KARAKTER) {
			$Hata->Ekle ( 'soru', soru_max_karakter );
		}
		
		if ($Hata->Toplam () == 0) {
			$Veritabani->Soru_Ekle($_SESSION['hesap_uniq'], $_GET['kisi'], $_POST['soru'], time())
			$Veritabani->Bildiri_Ekle($_GET['kisi'], YENI_SORU_SORULDU, 0)
			header ( "Location: hesap.php?git=soru" );
		
		}
	}
	
	/**
	 *
	 * @access private
	 */
	private function Aktivasyon_Tamamla() {
		global $Veritabani, $Hata, $Au;
		if (! isset ( $_POST ['act_kod'] ) or $_POST ['act_kod'] == "") {
			$Hata->Ekle ( 'act_kod', act_kod_bos );
		} elseif (! $Veritabani->Aktivasyon_Kontrol ( $_POST ['act_kod'] )) {
			$Hata->Ekle ( 'act_kod', act_kod_hata );
		}
		
		if ($Hata->Toplam () == 0) {
			if ($Au->Aktivasyon_Bitir ()) {
				header ( 'Location: aktivasyon.php?adim=sonuc&durum=true' );
			} else {
				header ( 'Location: aktivasyon.php?adim=sonuc&durum=false' );
			}
		}
	}
	
	/**
	 *
	 * @access private
	 */
	private function Aktivasyon_Istek() {
		global $Veritabani, $Hata;
		if (! isset ( $_POST ['email'] ) or $_POST ['email'] == "") {
			$Hata->Ekle ( 'email', giris_email_bos );
		} elseif (! $Veritabani->Hesap_Kontroll ( $_POST ['email'] )) {
			$Hata->Ekle ( 'email', act_email_yok );
		}
		
		if ($Hata->Toplam () == 0) {
			$_SESSION ['email'] = $_POST ['email'];
			header ( 'Location: aktivasyon.php?adim=a2' );
		}
	}
}
?>