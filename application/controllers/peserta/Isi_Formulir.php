<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Isi_Formulir extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model("public/user_model");
            if($this->user_model->isNotLogin()){
                redirect(site_url('login'));
            }
        }
        
        public function index(){
            $this->load->view('peserta/index.php');
        }
    }
    
?>