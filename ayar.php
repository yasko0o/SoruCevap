<?php
// veritabani ayarlari
define ( "MYSQL_HOST", "localhost" );
define ( "MYSQL_USER", "root" );
define ( "MYSQL_PASS", "" ); // localhost icin bostur.
define ( "MYSQL_DATA", "sorucevap" );
// Sistem ayarlari

define ( "SISTEM_DILI", "TURKCE" );
define ( "UYE_KAYIT_SISTEMI", TRUE );
define ( "UYE_KAYIT_CAPTCHA", FALSE );

define ( "SISTEM_EMAIL", "yasin35kucuk@gmail.com" ); // test amacli yazilmistir
                                                     // !
define ( "SISTEM_ISIM", "Ozgur yazilim" );
define ( "SISTEM_URL", "localhost.com/" );
define ( "GIRIS_OTO", false ); // kayit olunduktan sonra otomatik giris
                               // yapilsinmi
                               // ? // eger aktivasyon sistemi kapali ise
                               // calisir
                               // !!
                               // /// dosya dizini

define ( "TEMP", "Templates/" );
$DIR = array (TEMP . "Aktivasyon/", TEMP . "Hesap/" );
// dil

// AKTIVASYON ?

/*
 * 0 aktivasyon gerekli 1 normal uye 2 yasakli 9 admin !
 */

define ( "ACT_GEREKLI", false );

define ( "SORU_SOR", true ); // soru sorma ozelligi
define ( "SORU_MAX_KARAKTER", 500 ); // soru sorarken kullanabilecek karakter
                                     // sayisi.
define ( "CEVAP_MAX", 500 ); // cevap yazarken sunulan karakter sayisi !
define ( "CEVAP_YAZ", true ); // cevap yazma ozelligi
define ( "CEVAP_VIDEO", false ); // bu suan kapali daha aktif hale getirilmesi
                                 // icin
                                 // kodlar yazilmadi..

session_start ();

// echo $DIR;

?>
