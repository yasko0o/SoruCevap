<?php 
include 'ayar.php';
class veritabani {


	public function veritabani() {
		
	}
	
	
	public function hesap_Giris($email, $pass) {
	}
	
	public function hesap_Kayit($email, $pass, $act = 0) {
	}
	
	public function hesap_Kontrol($email) {
		
	}
	
	public function hesap_KayipSifre($email) {
	}
	
	public function hesap_Sil($ref) {
	}
	
	public function soru_Listele($hesap_ref) {
		$data = null;
		$result = mysql_query("SELECT * FROM sorular WHERE cevaplayan = '{$hesap_ref}' AND durum = 0 ORDER BY id DESC");
		while($row = mysql_fetch_array($result)) {
			array_push($data, $row);
		}
		
		return $data;
	}
	
}

$veritabani = new veritabani();

?>