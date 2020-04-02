<?php

    class overviewModel extends CI_Model
    {

        private $_customer  = "customer";
        private $_pesanan   = "pesanan";
        private $_transaksi = "transaksi";
    
        public function pemasukanBulan()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga FROM transaksi WHERE MONTH(created_at) = MONTH(CURRENT_DATE())")->result();
        }

        public function pemasukanTahun()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga FROM transaksi WHERE YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function transaksiBelumLunas()
        {
            return $this->db->query("SELECT COUNT(idTransaksi) as idTransaksi FROM transaksi WHERE statusTransaksi = 'BELUM LUNAS'")->result();
        }

        public function pemasukanJan()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-01-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanFeb()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-02-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanMar()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-03-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanApr()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-04-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanMay()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-05-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanJun()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-06-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanJul()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-07-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanAug()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-08-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanSep()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-09-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanOct()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-10-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanNov()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-11-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

        public function pemasukanDec()
        {
            return $this->db->query("SELECT SUM(totalHarga) as totalHarga 
                                     FROM transaksi 
                                     WHERE MONTH(created_at) = MONTH('0000-12-00') AND YEAR(created_at) = YEAR(CURRENT_DATE())")->result();
        }

    }

?>
