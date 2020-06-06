<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Family_model extends CI_Model{
        private $t_families = "families";

        public function init($id){
            $data = array(
                'user_id' => $id
            );
            $this->db->insert($this->t_families, $data);
        }

    }

?>