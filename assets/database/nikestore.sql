-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 05:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `id_brg`, `id_user`, `quantity`, `created_at`) VALUES
(1, 1, 1, 0, '2023-12-21 08:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `jns_produk` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `fto_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sepatu', 'Bisa Buat Lari', 'Sepatu Super', 520000, 39, 'Air.png'),
(3, 'Jordan', 'Enak dipakai saat olahraga basket', 'Sepatu Olahraga', 790000, 800, 'jordan.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'krisna', 'jl.Budimulia ', '2023-12-19 14:56:17', '2023-12-19 14:56:17'),
(2, 'Zaki', 'Jl.pasar baru', '2023-12-19 14:56:17', '2023-12-19 14:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Sepatu', 1, 400000, 'terbaik'),
(1, 1, 1, 'Sepatu Super', 2, 540000, 'Item'),
(1, 1, 1, 'Sepatu', 1, 400000, 'terbaik'),
(1, 1, 1, 'Sepatu Super', 2, 540000, 'Item'),
(1, 1, 1, 'sepatu', 2, 300000, 'Hijau'),
(1, 1, 1, 'sepatu', 2, 300000, 'Hijau'),
(2, 2, 2, 'sepatu', 3, 602000, 'Putih'),
(2, 2, 2, 'sepatu', 3, 602000, 'Putih'),
(0, 0, 3, 'Jordan', 1, 790000, 'online'),
(0, 0, 1, 'Sepatu', 1, 520000, 'online'),
(0, 0, 3, 'Jordan', 1, 790000, 'online'),
(0, 0, 3, 'Jordan', 1, 790000, 'online'),
(0, 0, 3, 'Jordan', 1, 790000, 'online'),
(0, 0, 1, 'Sepatu', 1, 520000, 'online'),
(0, 0, 3, 'Jordan', 1, 790000, 'online'),
(0, 0, 3, 'Jordan', 1, 790000, 'online'),
(0, 0, 3, 'Jordan', 1, 790000, 'online'),
(0, 0, 3, 'Jordan', 1, 790000, 'online'),
(0, 0, 1, 'Sepatu', 1, 520000, 'online'),
(0, 0, 3, 'Jordan', 1, 790000, 'online');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `fto_produk` text NOT NULL,
  `status` enum('Proses','Dikirim','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama`, `alamat`, `no_hp`, `nm_produk`, `harga`, `subtotal`, `fto_produk`, `status`) VALUES
(13, 'Nama Pelanggan', 'Alamat Pelanggan', 'Nomor HP Pelang', 'Jordan', 790000, '0', 'jordan.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(70) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `alamat`, `no_hp`, `jk`) VALUES
(1, 'Muhammad Zaki Fahmi', 'dlwlzki', '123', '19221384@bsi.ac.id', 'Jalan Merdeka Selatan No. 45', '08141385496', 'Laki-Laki'),
(2, 'Marnala Ezra Franciscus Sihaloho', 'ezrause', '9010', '19222449@bsi.ac.id', 'Jalan Situ Babakan No. 32', '08745169876', 'Laki-Laki'),
(3, 'Krisna Aditama', 'krisna', 'krisna123\r\n', '19221385@bsi.ac.id', 'Jalan Petojo Utara No. 10', '088213842120', 'Laki-Laki'),
(4, 'Arya Irfan Saputra', 'aryairfan', 'akutampan', '19221388@bsi.ac.id', 'Jalan Kebon Nangka No. 2', '081546978662', 'Laki-Laki'),
(5, 'Maria Salome Wona Weke', 'mariasal', 'mariawona123', '19221514@bsi.ac.id', 'Jalan Rawa Buaya No. 7', '081478632549', 'Perempuan'),
(6, 'Alfonsa Metafani Yaneke Massi', 'fonsalfonsa', 'alfonsa11', '19221415@bsi.ac.id', 'Jalan Gusti Ngurah Rai No. 4', '089562374898', 'Perempuan'),
(18, 'krisna', 'krisna1', '123', 'kiki@gmail.com', 'jl.komodo', '0923423245', 'Laki-Laki'),
(19, 'krisna', 'krisna', '123', 'krisna@gmail.com', 'jl.jahhyaxo', '0863232454', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_brg` (`id_brg`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
