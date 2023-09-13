<?php
//Define the function
function diskon2(){
    //Define harga as a static variable
    static $harga = 1000;
    $harga = 0.8 * $harga;

    echo 'harga = '.$harga.'<br/>';
}
//set harga to 2000
$harga = 30;
//call the function twice
diskon2();
diskon2();
//display the harga
echo 'harga = '.$harga.'<br/>';
?>