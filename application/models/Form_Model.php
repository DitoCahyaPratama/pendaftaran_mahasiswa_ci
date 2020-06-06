<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Form_model extends CI_Model{
        private $t_forms = "forms";

        public function init($id, $prodi){
            $data = array(
                'user_id' => $id,
                'prodi' => $prodi
            );
            $this->db->insert($this->t_forms, $data);
        }

    }

?>