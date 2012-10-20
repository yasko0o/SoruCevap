<?php




define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "root");
define("MYSQL_PASS", ""); // localhost icin bostur.
define("MYSQL_DATA", "sorucevap");

define("SISTEM_EMAIL", "yasin35kucuk@gmail.com"); // test amacli yazilmistir !
define("SISTEM_ISIM", "Ozgur yazilim");
define("SISTEM_URL", "localhost.com/");


///// dosya dizini


define("TEMP", "Templates/");
// dil
include 'Dil/tr.php';

//AKTIVASYON ?

/*
 * 
 * 0 aktivasyon gerekli
 * 1 normal uye
 * 2 yasakli
 * 
 * 
 */

define("ACT_GEREKLI", false);

?>
