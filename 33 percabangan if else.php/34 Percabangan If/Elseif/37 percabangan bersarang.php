<?php

$umur = 16;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "<br>karna ibu sudah menikah,saya ucapkan selamat buk!";
    } else {
        echo "<hr> karena usia kamu sudah > 18, kami ucapkan Selamat datang wahai pemuda!";
    }
} else {
    echo "<br>maaf umur kamu masih $umur,Maaf website ini hanya untuk yang sudah berumur 18+";
}
print_r("<P><strong>by :jiihann syafitrii");
?>
