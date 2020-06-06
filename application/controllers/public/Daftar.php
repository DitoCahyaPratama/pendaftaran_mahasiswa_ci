<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
    /* End of file filename.php */
    
    class Daftar extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model(
                array(
                    'user_model', 
                    'biography_model',
                    'form_model',
                    'economy_model',
                    'family_model',
                    'education_model',
                    'study_model'
                )
            );
        }
        
        public function index(){
            $data['prodi'] = $this->study_model->get_study()->result();
            $this->load->view('public/pages/daftar.php', $data);
        }

        public function on_daftar(){
            $username = $this->input->post('uname');
            $password = $this->input->post('upass');
            $email    = $this->input->post('email');
            $telp     = $this->input->post('telp');
            $prodi    = $this->input->post('prodi');
            $data = $this->user_model->doDaftar($username, $password, $email, $telp);
            if($data == 'sukses'){
                $row_user = $this->user_model->get_id($email)->result();
                foreach($row_user as $row){
                    $id = $row->id;
                }
                $this->biography_model->init($id, $telp);
                // $this->form_model->init($id, $prodi);
                // $this->economy_model->init($id);
                // $this->family_model->init($id);
                // $this->education_model->init($id);
            }

            echo json_encode($data);
        }
    }

?>