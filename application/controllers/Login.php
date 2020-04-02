<?php

    class Login extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("userModel");
            $this->load->library("form_validation");
        }

        public function index()
        {
            if ($this->input->post()) {
                $this->userModel->doLogin();
            }

            $this->load->view('loginPage');
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect(site_url('login'));
        }

    }

?>