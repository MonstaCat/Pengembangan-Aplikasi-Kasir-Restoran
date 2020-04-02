-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jan 2020 pada 21.21
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasirrestoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `idCust` int(11) NOT NULL,
  `idCustomer` varchar(100) NOT NULL,
  `namaCustomer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`idCust`, `idCustomer`, `namaCustomer`) VALUES
(79, '5e107d258847a', 'Andika Rizki Pradana'),
(80, '5e12199d8e20a', 'Andika Rizki'),
(81, '5e121df0e97ff', 'Andika'),
(82, '5e1221f35cda0', 'Pradana Rizki Andika'),
(83, '5e123c05cd1a1', 'Andika Rizki Pradana'),
(84, '5e12476056f2e', 'Farhan Aditya'),
(85, '5e1247dfeeea5', 'Iqbal Ali'),
(86, '5e26e545cf56c', 'Dika'),
(87, '5e26e55ca8b30', 'Farras'),
(88, '5e26e571d9f75', 'Yofi'),
(89, '5e26e5940a780', 'Randi'),
(90, '5e26e5c346079', 'Andika Rizki Pradana'),
(91, '5e2c49f4cd80e', 'Dikaaa'),
(92, '5e2c4de4f2314', 'Dik'),
(93, '5e2c4eb99598d', 'Rizki'),
(94, '5e2c4ef06fc9b', 'Dika'),
(95, '5e2da83bd30bd', 'Andikaaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idMenu` varchar(100) NOT NULL,
  `namaMenu` varchar(100) NOT NULL,
  `hargaMenu` int(50) NOT NULL,
  `kategoriMenu` enum('Makanan','Minuman') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idMenu`, `namaMenu`, `hargaMenu`, `kategoriMenu`) VALUES
('5e0dd91a8ffd0', 'Torpedo', 1000, 'Minuman'),
('5e0ddfe50a50b', 'Roti Bobo', 1000, 'Makanan'),
('5e0f7cb9b4209', 'Otee', 1000, 'Minuman'),
('5e0f7cca84197', 'Kacang Goreng', 1500, 'Makanan'),
('5e0f7ebabdd62', 'Kerupuk Jari', 1000, 'Makanan'),
('5e0f7ef259dff', 'Aqua Gelas', 5000, 'Minuman'),
('5e2c49754e945', 'Teh Gelas', 1000, 'Minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` int(11) NOT NULL,
  `kodePesanan` varchar(100) NOT NULL,
  `idMenu` varchar(100) NOT NULL,
  `idCustomer` varchar(100) NOT NULL,
  `jumlahPesanan` int(11) NOT NULL,
  `nomorMeja` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusPesanan` enum('LUNAS','BELUM LUNAS') NOT NULL DEFAULT 'BELUM LUNAS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` varchar(100) NOT NULL,
  `totalHarga` int(50) NOT NULL,
  `totalBayar` int(50) NOT NULL DEFAULT '0',
  `totalKembalian` int(50) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusTransaksi` enum('LUNAS','BELUM LUNAS') NOT NULL DEFAULT 'BELUM LUNAS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `totalHarga`, `totalBayar`, `totalKembalian`, `created_at`, `statusTransaksi`) VALUES
('5e107d2589844', 15500, 20000, 4500, '2020-02-01 11:55:17', 'LUNAS'),
('5e12199d8f381', 26500, 50000, 23500, '2020-03-12 17:15:09', 'LUNAS'),
('5e121df0eb556', 13000, 20000, 7000, '2020-04-13 17:33:36', 'LUNAS'),
('5e1221f35e255', 7000, 17000, 10000, '2020-05-19 17:50:43', 'LUNAS'),
('5e123c05ce6b3', 2000, 5000, 3000, '2020-06-15 19:41:57', 'LUNAS'),
('5e1247605851d', 61500, 100000, 38500, '2020-07-08 20:30:24', 'LUNAS'),
('5e1247dff0d35', 230000, 250000, 20000, '2020-08-09 20:32:32', 'LUNAS'),
('5e26e545cffbd', 439000, 500000, 61000, '2020-09-17 11:49:25', 'LUNAS'),
('5e26e55ca989d', 450000, 500000, 50000, '2020-10-06 11:49:48', 'LUNAS'),
('5e26e571da87f', 650000, 700000, 50000, '2020-11-03 11:50:09', 'LUNAS'),
('5e26e5940b13c', 790000, 800000, 10000, '2020-12-04 11:50:44', 'LUNAS'),
('5e26e5c346c74', 1490000, 1500000, 10000, '2020-01-11 11:51:31', 'LUNAS'),
('5e2c49f4d8cbf', 2675000, 2700000, 25000, '2020-02-04 14:00:20', 'LUNAS'),
('5e2c4de4f2d69', 2675000, 2700000, 25000, '2020-03-04 14:17:08', 'LUNAS'),
('5e2c4eb99660f', 3000, 3000, 0, '2020-04-01 14:20:41', 'LUNAS'),
('5e2c4ef07058b', 1003000, 1003000, 0, '2020-05-01 14:21:36', 'LUNAS'),
('5e2da83c00496', 3000, 5000, 2000, '2020-01-26 14:54:52', 'LUNAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','kasir','waiter') NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `lastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(75) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idUser`, `username`, `password`, `role`, `email`, `fullname`, `lastLogin`, `photo`, `created_at`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'andikarizkipradanaa@gmail.com', 'Andika Rizki Pradana', '2020-01-26 14:53:14', 'user_no_image.jpg', '2019-12-26 13:05:23'),
(2, 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', 'kasir', 'andikarizkipradanaa@gmail.com', 'Andika Rizki Pradana', '2020-01-26 14:54:31', 'user_no_image.jpg', '2019-12-26 15:41:03'),
(3, 'waiter', 'bda55eb01505bf9c8d7684bcb0c1f1124f64efa9', 'waiter', 'andikarizkipradanaa@gmail.com', 'Andika Rizki Pradana', '2020-01-26 14:57:59', 'user_no_image.jpg', '2020-01-25 14:42:13');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pesanan`
--
CREATE TABLE `view_pesanan` (
`idPesanan` int(11)
,`kodePesanan` varchar(100)
,`namaCustomer` varchar(50)
,`namaMenu` varchar(100)
,`hargaMenu` int(50)
,`jumlahPesanan` int(11)
,`totalHarga` bigint(60)
,`nomorMeja` int(11)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pesanan`
--
DROP TABLE IF EXISTS `view_pesanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pesanan`  AS  select `pesanan`.`idPesanan` AS `idPesanan`,`pesanan`.`kodePesanan` AS `kodePesanan`,`customer`.`namaCustomer` AS `namaCustomer`,`menu`.`namaMenu` AS `namaMenu`,`menu`.`hargaMenu` AS `hargaMenu`,`pesanan`.`jumlahPesanan` AS `jumlahPesanan`,(select (`menu`.`hargaMenu` * `pesanan`.`jumlahPesanan`) from `menu` where (`menu`.`idMenu` = `pesanan`.`idMenu`)) AS `totalHarga`,`pesanan`.`nomorMeja` AS `nomorMeja`,`pesanan`.`created_at` AS `created_at` from ((`pesanan` join `customer` on((`customer`.`idCustomer` = `pesanan`.`idCustomer`))) join `menu` on((`menu`.`idMenu` = `pesanan`.`idMenu`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`),
  ADD UNIQUE KEY `idCust` (`idCust`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`),
  ADD KEY `idMenu` (`idMenu`),
  ADD KEY `idCustomer` (`idCustomer`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`idMenu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`idCustomer`) REFERENCES `customer` (`idCustomer`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Event
--
CREATE DEFINER=`root`@`localhost` EVENT `delete_pesanan` ON SCHEDULE EVERY 1 SECOND STARTS '2020-01-01 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM pesanan where statusPesanan = 'LUNAS'$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
