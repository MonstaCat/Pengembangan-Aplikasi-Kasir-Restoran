<?php

    class Pesanan extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("userModel");
            if ($this->userModel->isNotLogin()) redirect(site_url('login'));

            $this->load->model("menuModel");
            $this->load->model("pesananModel");
            $this->load->model("customerModel");
            $this->load->library('form_validation');
        }
        
        public function index()
        {
            $data["pesanan"] = $this->pesananModel->getAll();
            $this->load->view("waiter/pesanan/list", $data);
        }
        
        public function add()
        {
            $data['customer'] = $this->customerModel->getAll();
            $data["menuM"] = $this->menuModel->getAllMakanan();
            $data["menuMi"] = $this->menuModel->getAllMinuman();
            $this->load->view("waiter/pesanan/new_form", $data);
        }

        public function addPesanan()
        {
            $pesanan = $this->pesananModel;
            $pesanan->save();
        }

        public function edit($id = null)
        {
            $pesanan = $this->pesananModel;

            $data["pesanan"] = $pesanan->getById($id);
            $data["view_pesanan"] = $pesanan->ViewgetById($id);

            $this->load->view("waiter/pesanan/edit_form", $data);
        }

        public function editPesanan()
        {
            $pesanan = $this->pesananModel;
            $pesanan->update();
            redirect('waiter/pesanan');
        }

        public function delete($id = null)
        {
            if (!isset($id)) show_404();

            if ($this->pesananModel->delete($id)) {
                redirect(site_url('waiter/pesanan'));
            }
        }

    }

?>