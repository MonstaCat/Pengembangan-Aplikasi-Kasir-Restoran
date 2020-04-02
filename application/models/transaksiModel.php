<?php

    class transaksiModel extends CI_Model
    {

        private $_table = "transaksi";
        private $_pesanan = "pesanan";

        public $idTransaksi;
        public $totalHarga;
        public $totalBayar;
        public $totalKembalian;
        public $created_at;
        public $statusTransaksi;

        public function getAll()
        {
            return $this->db->get($this->_table)->result();
        }

        public function getAllBelumLunas()
        {
            return $this->db->get_where($this->_table, ["statusTransaksi" => "BELUM LUNAS"])->result();
        }

        public function getById($id)
        {
            return $this->db->get_where($this->_table, ["idTransaksi" => $id])->row();
        }

        public function sumTotal()
        {
            return $this->db->query("SELECT SUM(totalHarga) as total FROM view_pesanan");
        }

        public function save()
        {
            $post = $this->input->post();

            $totalHarga = $this->transaksiModel->sumTotal()->result();

            $dataTransaksi = array(
                "idTransaksi" => $post['kodePesanan'],
                "totalHarga" => $totalHarga                
            );

            $this->db->insert($this->__table, $dataTransaksi);
        }

        public function update()
        {
            $post = $this->input->post();

            $idTransaksi = $post["id"];;
            $totalHarga = $post["totalHarga"];;
            $totalBayar = $post["totalBayar"];;
            $totalKembalian = ($totalBayar - $totalHarga);
            $created_at = $post["created_at"];
            $statusTransaksi = $post["statusTransaksi"];
            
            if ($totalBayar >= $totalHarga) {
                $statusTransaksi = "LUNAS";
                $statusPesanan = "LUNAS";
            } else {
                $statusTransaksi = "BELUM LUNAS";
                $statusPesanan = "BELUM LUNAS";
            }

            if ($totalBayar < $totalHarga) {
                $totalHarga = ($totalHarga - $totalBayar);
                $totalKembalian = 0;
            }

            $updateTransaksi = array(
                "idTransaksi" => $idTransaksi,
                "totalHarga" => $totalHarga,
                "totalBayar" => $totalBayar,
                "totalKembalian" => $totalKembalian,
                "created_at" => $created_at,
                "statusTransaksi" => $statusTransaksi
            );

            $this->db->set('statusPesanan', $statusPesanan);
            $this->db->where('kodePesanan', $idTransaksi);
            $this->db->update('pesanan');

            $this->db->update($this->_table, $updateTransaksi, array('idTransaksi' => $post['id']));
        }

    }

?>