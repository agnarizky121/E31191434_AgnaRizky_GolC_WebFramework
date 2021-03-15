<?php 
class produk{
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $episode = 0,
            $harga = 0;
            
        public function sayHello() {
        return "Selamat datang di KOMIK-KU";
        }
      
        function diskon(){
            if($this->penulis == 'Masashi Kishimoto') echo "mendapat diskon 20%";
            elseif ($this->penulis == 'Shumira')echo "mendapat diskon 30%";
            else echo "tidak didiskon";
        }
        function hitung(){
            if($this->penulis == 'Masashi Kishimoto') $status = $this->harga*20/100;
            elseif ($this->penulis == 'Shumira') $status = $this->harga*30/100;
            return $status;
}
}

$produk1 = new produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Japan";
$produk1->harga = 25000;
$produk1->episode = 150;
$produk1->sayHello(); 

echo $produk1->sayHello();
echo "<br>";
echo "1.";
echo "Judul :";
echo $produk1->judul;
echo " penulis :";
echo $produk1->penulis;
echo " penerbit :";
echo $produk1->penerbit;
echo " harga :";
echo $produk1->harga;
echo " episode :";
echo $produk1->episode;
echo "<br>";
echo $produk1->diskon();
echo " Harga Diskon Menjadi = ";
echo $produk1->hitung();


    $produk2 = new produk();
    $produk2->judul = "Black Clover";
    $produk2->penulis = "Shumira";
    $produk2->penerbit = "Japan";
    $produk2->harga = 30000;
    $produk2->episode = 100;
    
    echo "<br>";
    echo "2.";
    echo "Judul :";
    echo $produk2->judul;
    echo " penulis :";
    echo $produk2->penulis;
    echo " penerbit :";
    echo $produk2->penerbit;
    echo " harga :";
    echo $produk2->harga;
    echo " episode :";
    echo $produk2->episode;    
    echo "<br>";
    echo $produk2->diskon();
    echo " Harga Diskon Menjadi = ";
    echo $produk2->hitung();

    ?>
        

