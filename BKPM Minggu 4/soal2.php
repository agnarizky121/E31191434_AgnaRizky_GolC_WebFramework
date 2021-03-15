<?php 
class produk{

    function ukuran(){
        if($this->model == "Terbaru") echo "Produk Baru,Ukuran : L,XL,XXL"; 
        else echo "Produk Lama,Ukuran : S,M";
    }
    function warna(){
        if($this->tipe == 1) echo "Warna : Hitam";
        elseif ($this->tipe == 2) echo "Warna : Merah";
        elseif ($this->tipe == 3) echo "Warna : Hijau"; 
        else;
    }
    function getNama(){
        $str = "Nama Produk :";
        return $str;
    }
}

class topi extends produk{
    public $tipe,
           $model;
    function getNama(){
       $str = parent::getNama()."Topi";
       return $str;
    }    
    function ukuran(){
        $str =parent::ukuran();
        return $str;
    }
    function warna(){
        $str = parent::warna();
        return $str;
    }
}
class celana extends produk{
    public $tipe,
           $model;
    function getNama(){
        $str = parent::getNama()."Celana";
        return $str;
    }    
    function ukuran(){
        $str =parent::ukuran();
        return $str;
    }
    function warna(){
        $str = parent::warna();
        return $str;
}
}
class baju extends produk{
    public $tipe,
           $model;
    function getNama(){
        $str = parent::getNama()."Baju";
        return $str;
    }    
    function ukuran(){
        $str =parent::ukuran();
        return $str;
    }
    function warna(){
        $str = parent::warna();
        return $str;
}
}

$topi1 = new topi();
$topi1->tipe = 2;
$topi1->model = "Terbaru";
echo $topi1->model;
echo "<br>";
echo $topi1->ukuran();
echo "<br>";
echo $topi1->warna();
echo "<br>";
echo $topi1->getNama();
echo "<br>";

$baju = new baju();
$baju->tipe = 1;
$baju->model = "Lama";
echo $baju->model;
echo "<br>";
echo $baju->ukuran();
echo "<br>";
echo $baju->warna();
echo "<br>";
echo $baju->getNama();

?>