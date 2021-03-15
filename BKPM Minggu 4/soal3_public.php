<?php 
class tablet{
    public $merk,
    $ram,
    $memory,
    $camera,
    $processor;

    public function getMerk(){
        $str = "Nama Merk : ".$this->merk;
        return $str;
    }
    public function getRam(){
        $str = "Ram : ".$this->ram;
        return $str;
    }
    public function getMemory(){
        $str = "Memory : ".$this->memory;
        return $str;
    }
    public function getCamera(){
        $str = "Camera : ".$this->camera;
        return $str;
    }
    public function getProcessor(){
        $str = "Processor : ".$this->processor;
        return $str;
    }
}
class handphone extends tablet{
    public $handphone_baru;

    public function beli_handphone( tablet $handphone_baru ){
        $str = "Membeli Handphone "."<br>"."{$handphone_baru->getMerk()} 
        | {$handphone_baru->getRam()} 
        | {$handphone_baru->getMemory()} | {$handphone_baru->getCamera()} 
        | {$handphone_baru->getProcessor()}";
        return $str;
    }
}
$handphone1 = new handphone();
$handphone1->merk = "Xiaomi";
$handphone1->ram = "3 gb";
$handphone1->memory = "32 gb";
$handphone1->camera = "8 Mp";
$handphone1->processor = "Snapdragon 636";
echo $handphone1->beli_handphone($handphone1);
?>