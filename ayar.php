<?php
// veritabani ayarlari
define ( "MYSQL_HOST", "localhost" );
define ( "MYSQL_USER", "root" );
define ( "MYSQL_PASS", "" ); // localhost icin bostur.
define ( "MYSQL_DATA", "sorucevap" );
// Sistem ayarlari
define ( "SISTEM_EMAIL", "yasin35kucuk@gmail.com" ); // test amacli yazilmistir !
define ( "SISTEM_ISIM", "Ozgur yazilim" );
define ( "SISTEM_URL", "localhost.com/" );
define ("GIRIS_OTO", false); // kayit olunduktan sonra otomatik giris yapilsinmi ? // eger aktivasyon sistemi kapali ise calisir !!
// /// dosya dizini

define ( "TEMP", "Templates/" );
// dil
include 'Dil/tr.php';

// AKTIVASYON ?

/*
 * 0 aktivasyon gerekli 1 normal uye 2 yasakli
 */

define ( "ACT_GEREKLI", true );


define("CEVAP_MAX", 500);
define("CEVAP_VIDEO", false); // bu suan kapali daha aktif hale getirilmesi icin kodlar yazilmadi..

session_start();

?>
