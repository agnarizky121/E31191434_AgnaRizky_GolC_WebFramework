<?php 
class Buku {
    public $judul_buku = "judul";
    public $pengarang = "pengarang"; 
    public $penerbit = "penerbit";
    public $tahun_terbit = 0000;
    public $cetakan = "cetakan";
}
$Buku1 = new Buku();
$Buku1->judul_buku = "dinosaurus";
$Buku1->pengarang = "Agna Rizky";
$Buku1->penerbit = "Erlangga";
$Buku1->tahun_terbit = "2021";
$Buku1->cetakan = "Tretan Muslim";

    echo "Judul : ";
        echo $Buku1->judul_buku;
          echo "<br>";  
    echo "Pengarang : ";
        echo $Buku1->pengarang;
            echo "<br>";
    echo "Penerbit : ";
        echo $Buku1->penerbit;
            echo "<br>";
    echo "Tahun : ";
        echo $Buku1->tahun_terbit;
            echo "<br>";
    echo "Cetakan : ";
        echo $Buku1->cetakan;
?>