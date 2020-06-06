<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
    /* End of file filename.php */
    
    class User_model extends CI_Model{
        private $t_users = "users";
        private $t_biographies = "biographies";

        public function doLogin($email, $password){
            $this->db->where('email', $email)->or_where('password', password_hash($password, PASSWORD_DEFAULT));
            $user = $this->db->get($this->t_users)->row();
            
            if($user){
                $isPasswordTrue = password_verify($password, $user->password);
                $isPeserta = $user->role == 'peserta';
                $isAktif = $user->status == 'Aktif';

                if($isPasswordTrue == 1 && $isPeserta){
                    if($isAktif ){
                        $this->session->set_userdata(['user_logged' => $user]);
                        $this->_updateLastLogin($user->id);
                        return true;
                    }
                    return 'Akun belum aktif';
                }else{
                    return 'Username atau Password Salah';
                }
            }
            return false;
        }

        public function doDaftar($username, $password, $email, $telp){
            $this->db->where('no_telp', $telp);
            $cek_telp = $this->db->get($this->t_biographies)->row();
            $this->db->where('email', $email);
            $cek_email = $this->db->get($this->t_users)->row();
            if($cek_telp || $cek_email){
                if($cek_telp){
                    return 'No telepon telah terdaftar gunakan no lain';
                }else if($cek_email){
                    return 'Email telah terdaftar gunakan email lain';
                }
            }else{
                //Insert data user
                $data_user = array(
                    'email' => $email,
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                );
                $this->db->insert($this->t_users, $data_user);
                return true;
            }
            return false;
        }

        public function isNotLogin(){
            return $this->session->userdata('user_logged') === null;
        }

        private function _updateLastLogin($id){
            $sql = "UPDATE {$this->t_users} SET last_login=now() WHERE id={$id}";
            $this->db->query($sql);
        }

        public function getId($email){
            $this->db->select('id')->where('email', $email);
            $user = $this->db->get($this->t_users)->row();
            $id = $user->id;
            return $id;
        }
    }

?>