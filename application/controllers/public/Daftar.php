<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
    /* End of file filename.php */
    
    class Daftar extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
        }
        
        public function index(){
            $this->load->view('public/pages/daftar.php');
        }

        public function onDaftar(){
            $username = $this->input->post('uname');
            $password = $this->input->post('upass');
            $email    = $this->input->post('email');
            $telp     = $this->input->post('telp');
            $prodi    = $this->input->post('prodi');
            $data = $this->user_model->doDaftar($username, $password, $email, $telp, $prodi);
            echo json_encode($data);
        }
    }

?>