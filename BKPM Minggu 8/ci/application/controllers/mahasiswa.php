<?php 
defined('BASEPATH')or exit('No direct script access allowed');
class mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }
    public function index(){
        $data['mahasiswa'] = $this->mahasiswa_model->get_data();
        $this->load->view('view_mahasiswa',$data);
    }
    public function prodi(){
        $data1['mahasiswa1'] = $this->mahasiswa_model->get_prodi();
        $this->load->view('view_prodi',$data1);
    }
    public function angkatan(){
        $data2['mahasiswa2'] = $this->mahasiswa_model->get_angkatan();
        $this->load->view('view_angkatan',$data2);
    }
    public function profil(){
        echo "ini adalah method profil pada contoh controller mahasiswa";
    }
}
?>