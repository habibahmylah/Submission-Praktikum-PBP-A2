<?php
//Define a function
function diskon(){
    //Define harga as a global variabel
    global $harga;
    //Multiple harga by 0.8
    $harga = 0.8 * $harga;
}
//Set harga
$harga = 2000;
//Call the function
diskon();
//Display the age
echo 'harga = '.$harga.'<br/>';
?>