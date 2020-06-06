<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
    /* End of file filename.php */

    class Home extends CI_Controller {
        public function index(){
            $this->load->view('public/index.php');
        }
    }
    
?>