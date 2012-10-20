<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$data = 'sorucevap';

$baglan = mysql_connect ( $host, $user, $pass ) or die ( "Baglanti sirasinda bir hata olustu." );
mysql_select_db ( $data, $baglan ) or die ( "Veri tabani secilemedi." );
session_start ();


///// TEMPLATE


define("TEMP", "Templates/");

?>
