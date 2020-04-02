<?php

    class Overview extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("userModel");
            if ($this->userModel->isNotLogin()) redirect(site_url('login'));

            $this->load->model("overviewModel");
        }

        public function index()
        {
            $data["pemasukanBulan"]      = $this->overviewModel->pemasukanBulan();
            $data["pemasukanTahun"]      = $this->overviewModel->pemasukanTahun();
            $data["transaksiBelumLunas"] = $this->overviewModel->transaksiBelumLunas();

            $data["pemasukanJan"] = $this->overviewModel->pemasukanJan();
            $data["pemasukanFeb"] = $this->overviewModel->pemasukanFeb();
            $data["pemasukanMar"] = $this->overviewModel->pemasukanMar();
            $data["pemasukanApr"] = $this->overviewModel->pemasukanApr();
            $data["pemasukanMay"] = $this->overviewModel->pemasukanMay();
            $data["pemasukanJun"] = $this->overviewModel->pemasukanJun();
            $data["pemasukanJul"] = $this->overviewModel->pemasukanJul();
            $data["pemasukanAug"] = $this->overviewModel->pemasukanAug();
            $data["pemasukanSep"] = $this->overviewModel->pemasukanSep();
            $data["pemasukanOct"] = $this->overviewModel->pemasukanOct();
            $data["pemasukanNov"] = $this->overviewModel->pemasukanNov();
            $data["pemasukanDec"] = $this->overviewModel->pemasukanDec();

            $this->load->view("kasir/overview", $data);
        }

    }

?>