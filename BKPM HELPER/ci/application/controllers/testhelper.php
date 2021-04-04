<?php 
defined('BASEPATH')OR exit('No direct script access allowed');
class testhelper extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('html');
    }
    public function index(){
        $this->load->view('view_helper');
    }
}
?>