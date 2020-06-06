<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
    /* End of file filename.php */
    
    class Kontak extends CI_Controller{
        public function index(){
            $this->load->view('public/pages/kontak.php');
        }
    }

?>