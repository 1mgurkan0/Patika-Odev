<?php
$hesapla = array_map(function($sayi){
    if($sayi %3 === 0){
        echo "Girilen sayi 3 e tam bölünüyor";
    }
    elseif($sayi %3 === 1){
        $yenideger =  $sayi +2 ;
        echo "Girilen sayi 3 e bölünemiyor En yakın Bölünebecek sayı $yenideger";
    }
    else{
      $yenideger =  $sayi +1 ;
        echo "Girilen sayi 3 e bölünemiyor En yakın Bölünebecek sayı $yenideger";
    }
},$_POST);
echo $hesapla["sayi"];
