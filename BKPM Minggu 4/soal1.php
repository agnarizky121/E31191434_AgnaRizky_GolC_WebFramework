<?php 
//parent class
class mobilLengkap{
    public $model;
    function getModel($x){
        $this->model = $x;
    }    
     public function nontonTV(){
        $str = "Hidupkan TV, TV mencari Channel, TV menampilkan gambar";
        return $str;
    }
    function hidupkan_mobil(){
        $str = "Masukkan Kunci, Nyalakan Mobil : ".$this->model;
        return $str;  
    }
     function matikan_mobil(){
        $str = "Matikan mobil : ".$this->model;
        return $str;
    }
     function ubahgigi(){
        $str = "Ubah gigi mobil : ".$this->model;
        return $str;  
    }       
}
//child class
class MobilBMW extends mobilLengkap{
    public function nontonTV(){
        $str =  "Nonton TV :".parent::nontonTV().", Mobil : ".$this->model;
       return $str;
    }       
}
class MobilBMWberaksi extends MobilBMW{

}

    $mobilbmw = new MobilBMWberaksi();
    $mobilbmw->model = "BMW M4";
    echo $mobilbmw->nontonTV();
    echo "<br>";
    echo $mobilbmw->hidupkan_mobil();
    echo "<br>";
    echo $mobilbmw->matikan_mobil();
    echo "<br>";
    echo $mobilbmw->ubahgigi();
?>