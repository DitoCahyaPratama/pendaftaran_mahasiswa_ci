<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Biography_model extends CI_Model{
        private $t_biographies = "biographies";

        public function init($id, $telp){
            $data = array(
                'user_id' => $id,
                'no_telp' => $telp
            );
            $this->db->insert($this->t_biographies, $data);
        }

    }    
    
?>