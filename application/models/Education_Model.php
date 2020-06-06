<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Education_model extends CI_Model{
        private $t_educations = "educations";

        public function init($id){
            $data = array(
                'id' => $id
            );
            $this->db->insert($this->t_educations, $data);
        }
        
    }

?>