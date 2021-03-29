<?php 
class mahasiswa_model extends CI_Model {
    public function get_data(){
        $data_mahasiswa = [["nama"=>"Kim Jefry","prodi"=>"MIF"],
        ["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
        ["nama"=>"Budi Sudarsono","prodi"=>"TIF"]];
        return $data_mahasiswa;
    }
    public function get_prodi(){
        $data_mahasiswa1 = 
        [["prodi1"=>"MIF","keterangan"=>"Manajemen Informatika"],
        ["prodi1"=>"TKK","keterangan"=>"Teknik Komputer"],
        ["prodi1"=>"TIF","keterangan"=>"Teknik Informatika"]];
        return $data_mahasiswa1;
    }
    public function get_angkatan(){
        $data_mahasiswa2 = 
        [["angkatan"=>"2016"],
        ["angkatan"=>"2017"],
        ["angkatan"=>"2018"]];
        return $data_mahasiswa2;
    }
}
?>