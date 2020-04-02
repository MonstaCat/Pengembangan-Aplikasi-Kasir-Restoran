<?php

    class customerModel extends CI_Model
    {

        private $_table = "customer";
        private $__table = "pesanan";
        private $__table_ = "transaksi";

        public $idCustomer;
        public $namaCustomer;

        public function getAll()
        {
            return $this->db->get($this->_table)->result();
        }

        public function getById($id)
        {
            return $this->db->get_where($this->_table, ["idCustomer" => $id])->row();
        }

        public function sumTotal()
        {
            return $this->db->query("SELECT SUM(totalHarga) as total FROM view_pesanan");
        }

        public function save()
        { 
            $post = $this->input->post();

            $dataCustomer = array(
                "idCustomer" => uniqid(),
                "namaCustomer" => $post['namaCustomer']
            );
            
            $this->db->insert($this->_table, $dataCustomer);
            
            $lastID = $this->db->insert_id();
            
            $queryID = $this->db->query("SELECT idCustomer FROM {$this->_table} WHERE idCust = {$lastID}");
            if ($queryID->num_rows() > 0) {
                
                $hasil = $queryID->row();
                
                $kodePesanan = uniqid();
                $idMenu = $post['idMenu'];
                $idCustomer = $hasil->idCustomer;
                $jumlahPesanan = $post['jumlahPesanan'];
                $nomorMeja = $post['nomorMeja'];
            }

            for ($i = 0; $i < count($post['idMenu']); $i++) {

                $dataPesanan = array(
                    "kodePesanan" => $kodePesanan,
                    "idMenu" => $idMenu[$i],
                    "idCustomer" => $idCustomer,
                    "jumlahPesanan" => $jumlahPesanan[$i],
                    "nomorMeja" => $nomorMeja
                );

                $this->db->insert($this->__table, $dataPesanan);
            }
            
            $lastID = $this->db->insert_id();
            $queryID = $this->db->query("SELECT kodePesanan FROM {$this->__table} WHERE idPesanan = {$lastID}");

            if ($queryID->num_rows() > 0) {

                $hasil = $queryID->row();

                $idCustomer = $hasil->kodePesanan;
            }

            $this->db->select_sum('totalHarga');
            $query = $this->db->get('view_pesanan');
            $result = $query->result();

            $sumTotal = $result[0]->totalHarga;

            $dataTransaksi = array(
                "idTransaksi" => $idCustomer,
                "totalHarga" => $sumTotal
            );

            $this->db->insert($this->__table_, $dataTransaksi);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->idCustomer = $post["id"];
            $this->namaCustomer = $post["namaCustomer"];
            $this->db->update($this->_table, $this, array('idCustomer' => $post['id']));
        }

        public function delete($id)
        {
            return $this->db->delete($this->_table, array("idCustomer" => $id));
        }

    }
