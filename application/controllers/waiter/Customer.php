<?php

    class Customer extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("userModel");
            if ($this->userModel->isNotLogin()) redirect(site_url('login'));

            $this->load->model("menuModel");
            $this->load->model("pesananModel");
            $this->load->model("customerModel");
            $this->load->model("transaksiModel");
            $this->load->library('form_validation');
        }
        
        public function index()
        {
            $data["menu"] = $this->menuModel->getAll();
            $this->load->view("waiter/menu/list", $data);
        }
        
        public function add()
        {
            $customer = $this->customerModel;

            $customer->save();

            $this->session->set_flashdata('success', 'Orderan Berhasil Ditambahkan');
            redirect('waiter/pesanan/add');
        }

    }
