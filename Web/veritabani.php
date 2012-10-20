<?php
include 'ayar.php';
class veritabani {
	
	public function veritabani() {
		$baglan = mysql_connect ( MYSQL_HOST, MYSQL_USER, MYSQL_PASS ) or die ( "Baglanti sirasinda bir hata olustu." );
		mysql_select_db ( MYSQL_DATA, $baglan ) or die ( "Veri tabani secilemedi." );
	}
	
	public function hesap_Giris($email, $pass) {
		$result = mysql_query ( "SELECT email, pass FROM hesap WHERE email = '{$email}'" );
		$arr = mysql_fetch_array ( $result );
		
		if ($arr ['pass'] != $pass)
			return false;
		else
			return true;
	
	}
	
	public function hesap_Kayit($email, $pass, $acc = 0) {
		$query = mysql_query ( "INSERT INTO hesap (email, pass, acces) VALUES ('{$email}', '{$pass}', '{$acc}'" );
		if ($query)
			return true;
		else
			return false;
	
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
		return mysql_fetch_array ( $query );
	}
	
	public function soru_Listele($hesap_ref) {
		$data = null;
		$result = mysql_query ( "SELECT * FROM sorular WHERE cevaplayan = '{$hesap_ref}' AND durum = 0 ORDER BY id DESC" );
		while ( $row = mysql_fetch_array ( $result ) ) {
			array_push ( $data, $row );
		}
		
		return $data;
	}

}

$veritabani = new veritabani ();

?>