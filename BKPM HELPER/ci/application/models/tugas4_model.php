<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Agna Rizky","nim"=>"E31191434"],
			["nama"=>"Siti Latifatul","nim"=>"E31181655"],
			["nama"=>"Khaleed","nim"=>"E31162312"] 
        ];
        return $data_mahasiswa;
	}
}
?>