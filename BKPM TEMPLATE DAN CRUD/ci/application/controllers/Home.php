<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
    }

    // menampilkan semua data
    public function index()
    {
        $data['user'] = $this->mahasiswa_model->getAll()->result();
        // Pagination
        $this->load->library('pagination');

        // config
        $config['base_url'] = 'http://localhost/sbadmin/home/index/';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('grup', 'grup', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data';
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('home/tambah');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => htmlspecialchars($this->input->post('password', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'grup' => htmlspecialchars($this->input->post('grup', true))
            ];
            $this->mahasiswa_model->input_data($data, 'tm_user');
            redirect('home');

        }
    }
}
