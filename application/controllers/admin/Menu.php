<?php

    class Menu extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("userModel");
            if ($this->userModel->isNotLogin()) redirect(site_url('login'));

            $this->load->model("menuModel");
            $this->load->library('form_validation');
        }

        public function index()
        {
            $data["makanan"] = $this->menuModel->getAllMakanan();
            $data["minuman"] = $this->menuModel->getAllMinuman();
            $this->load->view("admin/menu/list", $data);
        }

        public function add()
        {
            $menu = $this->menuModel;
            $validation = $this->form_validation;
            $validation->set_rules($menu->rules());

            if ($validation->run()) {
                $menu->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $this->load->view("admin/menu/new_form");
        }

        public function edit($id = null)
        {
            $menu = $this->menuModel;
            $validation = $this->form_validation;
            $validation->set_rules($menu->rules());

            if ($validation->run()) {
                $menu->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('admin/menu');
            }

            $data["menu"] = $menu->getById($id);
            if (!$data["menu"]) show_404();

            $this->load->view("admin/menu/edit_form", $data);
        }

        public function delete($id = null)
        {
            if (!isset($id)) show_404();

            if ($this->menuModel->delete($id)) {
                redirect(site_url('admin/menu'));
            }
        }

    }
    
?>