<?php

    class pesananModel extends CI_Model
    {
        private $_table = "pesanan";
        private $_view = "view_pesanan";

        // viewQuery = CREATE VIEW view_pesanan AS
        //             SELECT pesanan.idPesanan AS idPesanan, 
        //             pesanan.kodePesanan AS kodePesanan, 
        //             customer.namaCustomer AS namaCustomer, 
        //             menu.namaMenu AS namaMenu,
        //             menu.hargaMenu AS hargaMenu,
        //             pesanan.jumlahPesanan AS jumlahPesanan, 
        //             (SELECT (menu.hargaMenu * pesanan.jumlahPesanan) FROM menu WHERE (menu.idMenu = pesanan.idMenu)) AS totalHarga,
        //             pesanan.nomorMeja AS nomorMeja,
        //             pesanan.created_at AS created_at FROM ((pesanan join customer on((customer.idCustomer = pesanan.idCustomer))) join menu on((menu.idMenu = pesanan.idMenu)))

        public $idPesanan;
        public $kodePesanan;
        public $idMenu;
        public $idCustomer;
        public $jumlahPesanan;
        public $nomorMeja;

        public function getAll()
        {
            return $this->db->get($this->_view)->result();
        }

        public function getById($id)
        {
            return $this->db->get_where($this->_table, ["idPesanan" => $id])->row();
        }

        public function ViewgetById($id)
        {
            return $this->db->get_where($this->_view, ["idPesanan" => $id])->row();
        }

        public function TransgetById($id)
        {
            return $this->db->get_where($this->_view, ["kodePesanan" => $id])->row();
        }

        public function update()
        {
            $post = $this->input->post();
            $this->idPesanan = $post["id"];
            $this->kodePesanan = $post["kodePesanan"];
            $this->idMenu = $post["idMenu"];
            $this->idCustomer = $post["idCustomer"];
            $this->jumlahPesanan = $post["jumlahPesanan"];
            $this->nomorMeja = $post["nomorMeja"];
            $this->created_at = $post["created_at"];
            $this->db->update($this->_table, $this, array('idPesanan' => $post['id']));
        }

        public function delete($id)
        {
            return $this->db->delete($this->_table, array("idPesanan" => $id));
        }

    }

?>