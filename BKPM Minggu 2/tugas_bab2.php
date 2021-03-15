<?php 
class laptop{
    public $merk,
           $pemilik;
           
    function getPemilik($x){
        $this->pemilik = $x;
    }
    function getMerk($x){
        $this->merk = $x;
    }
    function hidupkan_laptop(){
        echo "Hidupkan Laptop ",$this->merk," milik ",$this->pemilik;
    }       
    function matikan_laptop(){
        echo "Matikan Laptop ",$this->merk," milik ",$this->pemilik;
    }
    function restart_laptop(){
        echo "Matikan Laptop ",$this->merk," milik ",$this->pemilik;
        echo ". Hidupkan Laptop ",$this->merk," milik ",$this->pemilik;
    }
}
$laptop1 = new laptop();    
$laptop1->pemilik = "A";
$laptop1->merk = "ASUS";
    $laptop2 = new laptop();    
    $laptop2->pemilik = "B";
    $laptop2->merk = "Acer";
        $laptop3 = new laptop();    
        $laptop3->pemilik = "C";
        $laptop3->merk = "Lenovo";



$laptop1->hidupkan_laptop();
echo "<br>";
$laptop2->matikan_laptop();
echo "<br>";
$laptop3->restart_laptop();

?>