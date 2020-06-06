<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
    /* End of file filename.php */
    
    class Login extends CI_Controller{

        
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('user_logged') == null){
                // redirect(site_url('public/login'));
            }else{
                $this->load->model('user_model');
            }
        }
        
        public function index(){
            $this->load->view('public/pages/login.php');
        }

        public function on_login(){
            $email = $this->input->post('email');
            $password = $this->input->post('upass');
            $data = $this->user_model->doLogin($email, $password);
            echo json_encode($data);
        }

        public function on_logout(){
            $this->session->sess_destroy();
            echo json_encode(true);
        }
    }

?>