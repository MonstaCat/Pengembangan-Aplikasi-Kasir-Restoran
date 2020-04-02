<?php

    class userModel extends CI_Model {

        private $_table = "users";

        public function doLogin()
        {
            $post = $this->input->post();

            // Cari user berdasarkan email atau username
            $this->db->where('email', $post["email"])
                     ->or_where('username', $post["email"]);
            $user = $this->db->get($this->_table)->row();

            // Jika user terdaftar
            if ($user) {
                $isPasswordTrue = sha1($post["password"], $user->password);
                $isAdmin  = $user->role == "admin";
                $isKasir  = $user->role == "kasir";
                $isWaiter = $user->role == "waiter";

                if ($isPasswordTrue && $isAdmin) {
                    $this->session->set_userdata(['user_logged' => $user]);
                    $this->_updateLastLogin($user->idUser);
                    redirect(site_url('admin'));
                    return true; 
                } else if ($isPasswordTrue && $isKasir) {
                    $this->session->set_userdata(['user_logged' => $user]);
                    $this->_updateLastLogin($user->idUser);
                    redirect(site_url('kasir'));
                    return true;
                } else if ($isPasswordTrue && $isWaiter) {
                    $this->session->set_userdata(['user_logged' => $user]);
                    $this->_updateLastLogin($user->idUser);
                    redirect(site_url('waiter'));
                    return true;
                }
            }

            return false;
        }

        public function isNotLogin()
        {
            return $this->session->userdata('user_logged') == NULL;
        }

        private function _updateLastLogin($idUser)
        {
            $sql = "UPDATE {$this->_table} SET lastLogin = now() WHERE idUser = {$idUser}";
            $this->db->query($sql);
        }

    }

?>