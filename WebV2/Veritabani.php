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
class Veritabani {
	
	/**
	 *
	 * @access public
	 */
	public function veritabani() {
		$this->baglan = mysql_connect ( MYSQL_HOST, MYSQL_USER, MYSQL_PASS ) or die ( "Baglanti sirasinda bir hata olustu." );
		mysql_select_db ( MYSQL_DATA, $this->baglan ) or die ( "Veri tabani secilemedi." );
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aEmail
	 * @param
	 *       	 aSifre
	 * @return boolean
	 *
	 *
	 * @return Type boolean
	 */
	public function Hesap_Giris($aEmail, $aSifre) {
		$result = mysql_query ( "SELECT email, pass FROM hesap WHERE email = '$aEmail'" );
		$arr = mysql_fetch_array ( $result );
		
		if ($arr ['pass'] != md5 ( $aSifre ))
			return false;
		else
			return true;
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aEmail
	 * @param
	 *       	 aSifre
	 * @param
	 *       	 aIsim
	 * @param
	 *       	 aAcc
	 * @param
	 *       	 aUniq
	 * @return boolean
	 *
	 *
	 *
	 *
	 *
	 * @return Type boolean
	 */
	public function Hesap_Olustur($aEmail, $aSifre, $aIsim, $aAcc, $aUniq) {
		$q = "INSERT INTO hesap (email, pass, isimsoyisim, acces, uniq) VALUES ('$aEmail', '$eSifre', '$eIsim', '$eAcc', '$eUniq')";
		
		if (mysql_query ( $q )) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aEmail
	 * @return boolean
	 *
	 * @return Type boolean
	 */
	public function Hesap_Kontroll($aEmail) {
		$result = mysql_query ( "SELECT email FROM hesap WHERE email = '$aEmail'" );
		if (mysql_num_rows ( $result ))
			return true;
		else
			return false;
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aRef
	 * @return boolean
	 *
	 * @return Type boolean
	 */
	public function Hesap_Sil($aRef) {
		// Not yet implemented
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aEmail
	 * @param
	 *       	 aGuvenlik
	 */
	public function Hesap_KayipSifre($aEmail, $aGuvenlik) {
		// Not yet implemented
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aRef
	 */
	public function Hesap_Bilgileri($aRef) {
		$query = "SELECT * FROM hesap WHERE email = '$aRef'";
		$result = mysql_query ( $query );
		return mysql_fetch_array ( $result );
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aRef
	 */
	public function Hesap_BilgiAl($aRef, $aAlan, $aUniq) {
		if ($aUniq == false) {
			$query = "SELECT $aAlan FROM hesap WHERE email = '$aRef'";
		} else {
			$query = "SELECT $aAlan FROM hesap WHERE uniq = '$aRef'";
		}
		$result = mysql_query ( $query );
		$data = mysql_fetch_array ( $result );
		return $data [0];
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aRef
	 * @param
	 *       	 aAlan
	 * @param
	 *       	 aDeger
	 */
	public function Hesap_Guncelle($aUniq, $aRef, $aAlan, $aDeger) {
		if ($aUniq == false) {
			$q = "UPDATE hesap SET {$aAlan} = '{$aDeger}' WHERE email = '{$aRef}'";
		} else {
			$q = "UPDATE hesap SET {$aAlan} = '{$aDeger}' WHERE uniq = '{$aRef}'";
		}
		
		if (mysql_query ( $q )) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aKod
	 */
	public function Aktivasyon_Ekle($aKod) {
		$q = "INSERT INTO aktivasyon (kod) VALUES ('$aKod')";
		if (mysql_query ( $q )) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aKod
	 */
	public function Aktivasyon_Kontrol($aKod) {
		$q = "SELECT kod FROM aktivasyon WHERE kod = '{$aKod}'";
		$result = mysql_query ( $q );
		if (mysql_num_rows ( $result ))
			return true;
		else
			return false;
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 $aRef
	 * @return array
	 *
	 */
	public function Soru_Listele($aRef) {
		$data = array ();
		$q = "SELECT * FROM sorular WHERE cevaplayan = '$aRef' and durum = 0 ORDER BY id DESC";
		$result = mysql_query ( $q );
		while ( $row = mysql_fetch_array ( $result ) ) {
			array_push ( $data, $row );
		}
		
		return $data;
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aSoruid
	 * @param
	 *       	 aAlan
	 * @param
	 *       	 aDeger
	 * @return boolean
	 *
	 *
	 *
	 * @return Type boolean
	 */
	public function Soru_Guncelle($aSoruid, $aAlan, $aDeger) {
		$q = "UPDATE sorular SET {$aAlan} = '{$aDeger}' WHERE id = '{$aSoruid}'";
		if (mysql_query ( $q )) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aSoruid
	 * @return array
	 *
	 * @return Type array
	 */
	public function Soru_Bilgileri($aSoruid) {
		$q = "SELECT * FROM sorular WHERE id = '$aSoruid'"
		
		
		$result = mysql_query ( $q );
		return mysql_fetch_array ( $result );
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aHesap
	 * @param
	 *       	 aMesaj
	 * @param
	 *       	 aTur
	 */
	public function Bildiri_Ekle($aHesap, $aMesaj, $aTur) {
		$q = "INSERT INTO bildiri (hesap, mesaj, durum, tur) VALUES ('$aHesap', '$aMesaj', '0', '$aTur')";
		
		if (mysql_query ( $q )) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aHesap
	 */
	public function Arkadas_Listele($aHesap) {
		// Not yet implemented
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aHesap
	 * @param
	 *       	 aKisi
	 */
	public function Arkadas_Ekle($aHesap, $aKisi) {
		// Not yet implemented
	}
	
	/**
	 *
	 * @access public
	 * @param
	 *       	 aHesap
	 * @param
	 *       	 aKisi
	 */
	public function Arkadas_Sil($aHesap, $aKisi) {
		// Not yet implemented
	}
}

$Veritabani = new Veritabani ();

?>