<?php
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
		
		if ($arr ['pass'] != md5($pass))
			return false;
		else
			return true;
	
	}
	
	public function hesap_Kayit($email, $pass, $acc, $uniq) {
		$q = "INSERT INTO hesap (email, pass, acces, uniq) VALUES ('$email', '$pass', '$acc', '$uniq')";
		
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
	
	public function hesap_Bilgileri($ref) {
		$query = mysql_query ( "SELECT * FROM hesap WHERE email = '{$ref}'" );
		return mysql_fetch_array ( $query ) or die(mysql_error());
	}
	
	public function soru_Listele($ref) {
		$data = null;
		$result = mysql_query ( "SELECT * FROM sorular WHERE cevaplayan = '{$ref}' AND durum = 0 ORDER BY id DESC" );
		while ( $row = mysql_fetch_array ( $result ) ) {
			array_push ( $data, $row );
		}
		
		return $data;
	}

}

$veritabani = new veritabani ();

?>