<?php
class Sekil{
    // Dikdörtgen Hesaplamaları
    public function dikdortgenalan($kisak , $uzunk){
        return $kisak * $uzunk;
    }
    public function dikdortgencevre($kisak , $uzunk){
        return ($kisak + $uzunk)*2;
    }
    // Üçgen Hesaplamaları
    public function ucgenalan($taban,$yukseklik)
    {
       return ($yukseklik * $taban)/2;
    }
    public function ucgencevre($ken1,$ken2,$ken3){
        return $ken1 + $ken2 + $ken3;
    }

    // Kare Hesaplamaları
    public function karealan($kenar)
    {
        return  $kenar * $kenar;
    }
    public function karecevre($kenar)
    {
        return $kenar*4;
    }
}
class Islemler extends Sekil{
    // Dikdörtgen İşlemleri
    public $UzunKenar;
    public $KisaKenar;
    public function dikdortgenalanyazdir() {
        return $this->dikdortgenalan($this->KisaKenar, $this->UzunKenar);
    }
    public function dikdortgencevreyazdir() {
        return $this->dikdortgencevre($this->KisaKenar, $this->UzunKenar);
    }
    // Üçgen İşlemleri
    public $Taban;
    public $Yukseklik;
    public $Kenar1;
    public $Kenar2;
    public $Kenar3;
    public function ucgenalanyazdir()
    {
        return $this->ucgenalan($this->Taban, $this->Yukseklik);
    }
    public function ucgencevreyazdir()
    {
        return $this ->ucgencevre($this->Kenar1, $this->Kenar2, $this->Kenar3);
    }
    // Kare İşlemleri
    public $Kkenar;
    public function karealanyazdir()
    {
        return $this ->karealan($this ->Kkenar);
    }
    public function karecevreyazdir()
    {
        return $this ->karecevre($this ->Kkenar);
    }
}
class Kare extends Sekil{
 public $Kenar;
}
$Islem = new Islemler();
$Islem ->UzunKenar =10;
$Islem ->KisaKenar =10;

$Islem ->Taban= 8;
$Islem ->Yukseklik=5;
$Islem ->Kenar1 =10;
$Islem ->Kenar2 =15;
$Islem ->Kenar3 =8;

$Islem ->Kkenar=5;

echo "Dikdörgenin Alanı : ".$Islem ->dikdortgenalanyazdir()."<br>";
echo "Dikdörgenin Çevresi : ".$Islem ->dikdortgencevreyazdir()."<br>";
echo "Üçgenin Alanı : ".$Islem ->ucgenalanyazdir()."<br>";
echo "Üçgenin Çevresi : ".$Islem ->ucgencevreyazdir()."<br>";
echo "Karenin Alanı : ".$Islem ->karealanyazdir()."<br>";
echo "Karenin Çevresi : ".$Islem ->karecevreyazdir()."<br>";