<?php

class hata {
	
	private $toplam_hata = 0;
	private $hata_arr = array ();
	
	public function hata() {
		if (isset ( $_SESSION ['hata'] )) {
			$this->hata = $_SESSION ['hata'];
			$this->toplam_hata = count ( $this->hata_arr );
		} else {
			$this->toplam_hata = 0;
		}
	}
	
	public function hata_Ekle($hata, $mesaj) {
		$this->hata_arr [$hata] = $mesaj;
		$this->toplam_hata = count ( $this->hata_arr );
	}
	
	public function hata_Goster($hata) {
		if (array_key_exists ( $hata, $this->hata_arr )) {
			return $this->hata_arr [$hata];
		} else {
			return "";
		}
	}
	
	public function hata_Toplam() {
		return $this->toplam_hata;
	}

}

$hata = new hata ();

?>