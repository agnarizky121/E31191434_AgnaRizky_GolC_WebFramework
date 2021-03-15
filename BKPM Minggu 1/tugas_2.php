<?php 
class kendaraan{
    public $jenis_kendaraan,
           $jumlah_roda,
           $merk,
           $bahan_bakar,
           $harga,
           $tahun_pembuatan;

    function getMerk($x)
    {
        $this->merk = $x;
    }
    function getHarga($x)
    {
        $this->harga = $x;
    }
    function getBBM()
    {
        if($this->bahan_bakar == 'pertalite'&&$this->tahun_pembuatan >= 2005) 
        $status = "tidak mendapat subsidi";
        else $status = "mendapat subsidi";
        return $status;
    }
}
            $kendaraan1 = new kendaraan();
            $kendaraan1->merk = 'calya';
            $kendaraan1->harga = 5000000;
            $kendaraan1->bahan_bakar = 'premium';
            $kendaraan1->tahun_pembuatan = 2006;

        echo " Merk = ";
            echo $kendaraan1->merk;
                echo "<br>";
        echo " Harga = ";
            echo $kendaraan1->harga;
                 echo "<br>";
        echo " Bahan Bakar = ";
            echo $kendaraan1->bahan_bakar;
                echo "<br>";
        echo " Tahun = ";
            echo $kendaraan1->tahun_pembuatan;
                echo "<br>";
        
             $kendaraan1->getBBM();
        echo $kendaraan1->getBBM();

// $kendaraan2 = new kendaraan();
// $kendaraan2->merk = 'supra';
// $kendaraan2->harga = 6000000;
// $kendaraan2->bahan_bakar = 'premium';

//         echo $kendaraan2->merk;
//         echo " ";
//         echo $kendaraan2->harga;
//         echo " ";
//         echo $kendaraan2->bahan_bakar;

//         $kendaraan2->getBBM();
//         echo " ";
//         echo $kendaraan2->getBBM();
?>