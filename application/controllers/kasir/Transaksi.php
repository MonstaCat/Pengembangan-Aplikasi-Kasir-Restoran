<?php

    class Transaksi extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("userModel");
            if ($this->userModel->isNotLogin()) redirect(site_url('login'));

            $this->load->model("transaksiModel");
            $this->load->model("pesananModel");
            $this->load->library('form_validation');
        }

        public function index($id = null)
        {
            $data["transaksiLunas"] = $this->transaksiModel->getAll();
            $data["transaksiBelumLunas"] = $this->transaksiModel->getAllBelumLunas();
            $this->load->view("kasir/transaksi/list", $data);
        }

        public function bayar($id = null)
        {
            $transaksi = $this->transaksiModel;
            $pesanan = $this->pesananModel;

            $data["transaksi"] = $transaksi->getById($id);
            $data["pesanan"] = $pesanan->getById($id);
            $data["view_pesanan"] = $pesanan->TransgetById($id);

            $this->load->view("kasir/transaksi/bayar_form", $data);
        }

        public function bayarTransaksi()
        {
            $transaksi = $this->transaksiModel;
            $transaksi->update();

            redirect('kasir/transaksi');
        }

    }

?>
