<?php
define("PWI", "Pemrograman Web dan Internet");
echo 'Hari ini sedang praktikum '.PWI.'<br/>';
$constant_name = "PWI";
echo 'Hari ini sedang praktikum '.constant($constant_name).'<br/>';

//konstanta bawaan PHP
echo 'File yang sedang di proses "'.__FILE__.' pada baris '.__LINE__.'"<br/>';
?>