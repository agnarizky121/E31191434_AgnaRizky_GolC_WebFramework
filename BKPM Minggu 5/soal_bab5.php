<?php 
interface hitungLuas {
    public function calcArea();
}
class hitungLuasPersegi implements hitungLuas{
    private $sisi;
    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function calcArea(){
        return "Luas Persegi = ".$this->sisi * $this->sisi;
    }
}
class hitungLuasSegitiga implements hitungLuas{
    private $alas;
    private $tinggi;
    public function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function calcArea(){
        return "Luas Segitiga = ".$this->alas * $this->tinggi / 2;
    }
}
class hitungLuasLingkaran implements hitungLuas {
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    // calcArea calculates the area of circles
    public function calcArea(){
        return "Luas lingkaran = ".$this->radius * $this->radius * pi();
    }
}
$persegi = new hitungLuasPersegi(5);
$segitiga = new hitungLuasSegitiga(5,4);
$lingkaran = new hitungLuasLingkaran(7);


echo $persegi->calcArea();
echo "<br>";
echo $segitiga->calcArea();
echo "<br>";
echo $lingkaran->calcArea();
?>