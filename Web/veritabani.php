<?php

/*
 * <<<<<<<<<<<<<<<<<<<<<<< Yasin Kucuk . www.sanalkurs.com | king.achiles Ne
* yaptiginizi bildiginiz surece degistirmekte ozgursunuz !
*/

include 'ayar.php';

class veritabani {
	private $baglan;
	public function __construct() {
		$this->baglan = mysql_connect ( MYSQL_HOST, MYSQL_USER, MYSQL_PASS ) or die ( "Baglanti sirasinda bir hata olustu." );
		mysql_select_db ( MYSQL_DATA, $this->baglan ) or die ( "Veri tabani secilemedi." );
	}

	public function hesap_Giris($email, $pass) {
		$result = mysql_query ( "SELECT email, pass FROM hesap WHERE email = '$email'" );
		$arr = mysql_fetch_array ( $result );

		if ($arr ['pass'] != md5 ( $pass ))
			return false;
		else
			return true;

	}

	public function hesap_Kayit($email, $pass, $isim, $acc, $uniq) {
		$q = "INSERT INTO hesap (email, pass, isimsoyisim, acces, uniq) VALUES ('$email', '$pass', '$isim', '$acc', '$uniq')";

		if (mysql_query ( $q )) {
			return true;
		} else {
			return false;
		}

	}

	public function hesap_Kontrol($email) {
		$result = mysql_query ( "SELECT email FROM hesap WHERE email = '{$email}'" );
		if (mysql_num_rows ( $result ))
			return true;
		else
			return false;
	}

	public function hesap_KayipSifre($email) {
		// simdilik bos!
	}

	public function hesap_Sil($ref) {
		// simdilik bos!
	}

	public function hesap_Bilgileri($refe) {
		$query = mysql_query ( "SELECT * FROM hesap WHERE email = '$refe'" );
		return mysql_fetch_array ( $query ) or die ( mysql_error () );
	}

	public function hesap_BilgiAlani($uniq, $ref, $alan) {

		if ($uniq == false) {
			$q = "SELECT $alan FROM hesap WHERE email = '$ref'";
		} else {
			$q = "SELECT $alan FROM hesap WHERE uniq = '$ref'";
		}
		$result = mysql_query ( $q );
		$data = mysql_fetch_array ( $result );
		return $data [0];
	}

	public function hesap_Guncelle($ref, $alan, $deger) {
		if (! $uniq) {
			$q = "UPDATE hesap SET {$alan} = '{$deger}' WHERE email = '{$ref}'";
		} else {
			$q = "UPDATE hesap SET {$alan} = '{$deger}' WHERE uniq = '{$ref}'";
		}

		if (mysql_query ( $q )) {
			return true;
		} else {
			return false;
		}

	}

	public function soru_Listele($ref) {
		$data = array ();
		$result = mysql_query ( "SELECT * FROM sorular WHERE cevaplayan = '$ref' and durum = 0 ORDER BY id DESC" );
		while ( $row = mysql_fetch_array ( $result ) ) {
			array_push ( $data, $row );
		}

		return $data;
	}

	public function soru_Bul($id) {
		$result = mysql_query ( "SELECT * FROM sorular WHERE id = '$id'" );
		return mysql_fetch_array($result);
	}

	public function soru_Guncelle($ref, $alan, $deger) {
		$q = "UPDATE sorular SET {$alan} = '{$deger}' WHERE id = '{$ref}'";
		if(mysql_query($q)) {
			return true;
		} else {
			return false;
		}
	}



	public function bildiri_Ekle($hesap, $mesaj, $tur = 0) {


		$q = "INSERT INTO bildiri (hesap, mesaj, durum, tur) VALUES ('$hesap', '$mesaj', '0', '$tur')";

		if(mysql_query($q)) {
			return true;
		} else {
			return false;
		}


	}

	public function act_ekle($kod) {
		$q = "INSERT INTO aktivasyon (kod) VALUES ('$kod')";
		if (mysql_query ( $q )) {
			return true;
		} else {
			return false;
		}
	}

	public function act_dogrula($kod) {
		$result = mysql_query ( "SELECT kod FROM aktivasyon WHERE kod = '{$kod}'" );
		if (mysql_num_rows ( $result ))
			return true;
		else
			return false;
	}
}

$veritabani = new veritabani ();

?>