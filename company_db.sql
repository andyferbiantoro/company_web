-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 11:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dewan`
--

CREATE TABLE `dewan` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image_layanan`
--

CREATE TABLE `image_layanan` (
  `id` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `indeks` int(11) NOT NULL DEFAULT 1,
  `image` varchar(225) NOT NULL,
  `path` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komitmen`
--

CREATE TABLE `komitmen` (
  `id` int(11) NOT NULL,
  `sertifikat` varchar(225) NOT NULL,
  `tata_kelola` text NOT NULL,
  `tanggung_jawab` text NOT NULL,
  `image_tata_kelola` varchar(225) NOT NULL,
  `image_tanggung_jawab` varchar(225) NOT NULL,
  `path` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komitmen`
--

INSERT INTO `komitmen` (`id`, `sertifikat`, `tata_kelola`, `tanggung_jawab`, `image_tata_kelola`, `image_tanggung_jawab`, `path`, `created_at`, `updated_at`) VALUES
(1, 'sertifikat.jpg', 'isikan tata kelola perusahaan', 'isikan tanggung jawab sosial', 'eskavator.jpeg', 'alat_berat2.jpg', 'public/uploads/komitmen_kami/D6h1nQGe3gXgycGLzYRKY2mZUTDrIVaJc64eURrK.jpg', '2022-03-06 02:46:27', '2022-03-28 09:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(225) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil_perusahaan`
--

CREATE TABLE `profil_perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `didirikan` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `luas_lahan` varchar(100) NOT NULL,
  `luas_bangunan` varchar(100) NOT NULL,
  `modal` bigint(30) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_perusahaan`
--

INSERT INTO `profil_perusahaan` (`id`, `nama_perusahaan`, `deskripsi`, `didirikan`, `lokasi`, `luas_lahan`, `luas_bangunan`, `modal`, `no_telp`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PT. Mahakarya Tata Alam', 'ini adalah PT yang berdiri pada tanggal 8 maret 2020 serta bergerak di bidang penyewaan alat berat serta untuk pembukaan lahan pertanian serta melakukan penjualan material bangunan berskala besar', '08 Maret 2020', 'Jl. Utama No. 5, Kec Tualang, Siak, Provinsi Riau', '20.000 M', '400 M', 10000000000, '+6285271786999', 'ptmahakaryatataalam@gmail.com', 'construction.webp', '2022-03-03 09:03:20', '2022-03-28 08:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$sQGoioeR7X/7CBffNnq/huw7w4U.Yq8tCOZ7uY6FrJyC82O5pNuHK', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(6, 'Silahkan isikan visi disini', 'silahkan isikan misi disini', '2022-03-02 02:51:46', '2022-03-07 01:44:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dewan`
--
ALTER TABLE `dewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_layanan`
--
ALTER TABLE `image_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komitmen`
--
ALTER TABLE `komitmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dewan`
--
ALTER TABLE `dewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_layanan`
--
ALTER TABLE `image_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `komitmen`
--
ALTER TABLE `komitmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
