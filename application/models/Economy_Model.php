<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Economy_model extends CI_Model{
        private $t_economies = "economies";

        public function init($id){
            $data = array(
                'id' => $id
            );
            $this->db->insert($this->t_economies, $data);
        }

    }

?>