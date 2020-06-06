<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
    /* End of file filename.php */
    
    class Not_Found extends CI_Controller{
        public function index(){
            $this->load->view('public/404.php');
        }
    }

?>