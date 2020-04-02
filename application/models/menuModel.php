<?php

    class menuModel extends CI_Model {

        private $_table = "menu";

        public $idMenu;
        public $namaMenu;
        public $hargaMenu;
        public $kategoriMenu;

        public function rules()
        {
            return [
                ['field' => 'namaMenu',
                 'label' => 'namaMenu',
                 'rules' => 'required'],

                ['field' => 'hargaMenu',
                 'label' => 'hargaMenu',
                 'rules' => 'numeric'],

                ['field' => 'kategoriMenu',
                 'label' => 'kategoriMenu',
                 'rules' => 'required']
            ];
        }

        public function getAll()
        {
            return $this->db->get($this->_table)->result();
        }

        public function getAllMakanan()
        {
            return $this->db->get_where($this->_table, ["kategoriMenu" => "Makanan"])->result();
        }

        public function getAllMinuman()
        {
            return $this->db->get_where($this->_table, ["kategoriMenu" => "Minuman"])->result();
        }

        public function getById($id)
        {
            return $this->db->get_where($this->_table, ["idMenu" => $id])->row();
        }

        public function save()
        {
            $post = $this->input->post();
            $this->idMenu = uniqid();
            $this->namaMenu = $post["namaMenu"];
            $this->hargaMenu = $post["hargaMenu"];
            $this->kategoriMenu = $post["kategoriMenu"];
            $this->db->insert($this->_table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->idMenu = $post["id"];
            $this->namaMenu = $post["namaMenu"];
            $this->hargaMenu = $post["hargaMenu"];
            $this->kategoriMenu = $post["kategoriMenu"];
            $this->db->update($this->_table, $this, array('idMenu' => $post['id']));
        }

        public function delete($id)
        {
            return $this->db->delete($this->_table, array("idMenu" => $id));
        }

    }
