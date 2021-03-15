<?php 
class kalkulator{
    private $total,
            $angka1 = 20,
            $angka2 = 2;
        
        function tambah(){
            echo "Variabel 1 = ",$this->angka1," + Variabel 2 = ",$this->angka2;
            echo "<br>";
            echo "Hasil = ",$this->total = $this->angka1+$this->angka2;
        }
        function kurang(){
            echo "<br>";
            echo "Variabel 1 = ",$this->angka1," - Variabel 2 = ",$this->angka2;
            echo "<br>";
            echo "Hasil = ",$this->total = $this->angka1-$this->angka2;
        }
        function bagi(){
            echo "<br>";
            echo "Variabel 1 = ",$this->angka1," : Variabel 2 = ",$this->angka2;
            echo "<br>";
            echo "Hasil = ",$this->total = $this->angka1/$this->angka2;
        }
        function kali(){
            echo "<br>";
            echo "Variabel 1 = ",$this->angka1," x Variabel 2 = ",$this->angka2;
            echo "<br>";
            echo "Hasil = ",$this->total = $this->angka1*$this->angka2;
        }
}
$hitung1 = new kalkulator();
$hitung1->tambah();
    $hitung2 = new kalkulator();
    $hitung2->kurang();
        $hitung3 = new kalkulator();
        $hitung3->bagi();
            $hitung4 = new kalkulator();
            $hitung4->kali();
?>