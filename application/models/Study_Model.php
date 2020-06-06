<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Study_model extends CI_Model{
        private $t_studies = "studies";

        public function get_study(){
            $this->db->select('id, name');
            $data = $this->db->get($this->t_studies);
            return $data;
        }
    }

?>