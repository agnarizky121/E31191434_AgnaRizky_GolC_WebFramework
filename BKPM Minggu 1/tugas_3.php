<?php 
class kendaraan{
    public $merk,
           $nama,
           $harga,
           $tahun_pembuatan;
        
        function getMerk($x){
            $this->merk = $x;
        }
        function getNama($x){
            $this->nama = $x;
        }
        function getHarga($x){
            $this->harga = $x;
        }   
        function hargaSecond(){
            if($this->tahun_pembuatan > 2010) echo "mendapat diskon 20%";
            elseif ($this->tahun_pembuatan >= 2005-2010) echo "mendapat diskon 30%";
            elseif ($this->tahun_pembuatan < 2005) echo "mendapat diskon 40%";
            else echo "tidak mendapatkan diskon";
        }
            function hitung(){
                if($this->tahun_pembuatan > 2010) $status = $this->harga*20/100;
                elseif ($this->tahun_pembuatan >= 2005-2010) $status = $this->harga*30/100;
                elseif($this->tahun_pembuatan < 2005) $status = 40/100;
                return $status;
        
        
        }
}
            $kendaraan1 = new kendaraan();
            $kendaraan1->merk = 'honda';
            $kendaraan1->nama = 'supra';
            $kendaraan1->harga = 5000;
            $kendaraan1->tahun_pembuatan = 2006;

            
            echo " Merk = ";
            echo $kendaraan1->merk;
            echo "<br>";
            echo " Nama = ";
            echo $kendaraan1->nama;
            echo "<br>";
            echo " Harga = ";
            echo $kendaraan1->harga;
            echo " Tahun Pembuatan = ";
            echo $kendaraan1->tahun_pembuatan;
            echo "<br>";
            echo " ";
            echo $kendaraan1->hargaSecond();
            echo " ";
            echo " Harga Diskon Menjadi = ";
            echo $kendaraan1->hitung();
            
?>