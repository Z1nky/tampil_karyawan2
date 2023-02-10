-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 10 Feb 2023 pada 11.37
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intership_union`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `Id_Bank` int(11) DEFAULT NULL,
  `Nama_Bank` varchar(255) DEFAULT NULL,
  `Kode_Bank` varchar(255) DEFAULT NULL,
  `Gaji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`Id_Bank`, `Nama_Bank`, `Kode_Bank`, `Gaji`) VALUES
(1, 'Mandiri', '1-BRI', 4000000),
(2, 'BCA', '2-BCA', 6000000),
(3, 'BANK DKI', '3-DKI', 4600000),
(4, 'BTN', '4-BTN', 4500000),
(5, 'BNI', '5-BNI', 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `branch`
--

CREATE TABLE `branch` (
  `Id_Branch` int(11) DEFAULT NULL,
  `Nama_Branch` varchar(255) DEFAULT NULL,
  `Kode_Branch` varchar(255) DEFAULT NULL,
  `Alamat_Branch` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `branch`
--

INSERT INTO `branch` (`Id_Branch`, `Nama_Branch`, `Kode_Branch`, `Alamat_Branch`) VALUES
(1, 'Bandung', '1-JB', 'Jawa Barat'),
(2, 'Ciputat', '2-CPT', 'Ciputat Raya'),
(3, 'Citiis', '3-CTS', 'Jawa Barat'),
(4, 'Pusat', '4-PST', 'Jakarta Selatan'),
(5, 'Ciledug', '5-CLG', 'Jakarta Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `Id_Departemen` int(11) DEFAULT NULL,
  `Kode_Departemen` varchar(255) DEFAULT NULL,
  `Nama_Departemen` varchar(255) DEFAULT NULL,
  `Alamat_Departemen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`Id_Departemen`, `Kode_Departemen`, `Nama_Departemen`, `Alamat_Departemen`) VALUES
(2, '2-PR', 'Programmer ', 'Back Office'),
(3, '3-ADM', 'Admin', 'Front Office'),
(4, '4-ST', 'Staff', 'Front Office'),
(5, '5-PR', 'Programmer ', 'Back Office'),
(1, '1-HR', 'HRD', 'Front Office');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `Id_Karyawan` int(11) DEFAULT NULL,
  `Id_Departemen` int(11) DEFAULT NULL,
  `Id_Branch` int(11) DEFAULT NULL,
  `Id_Bank` int(11) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`Id_Karyawan`, `Id_Departemen`, `Id_Branch`, `Id_Bank`, `Nama`, `Alamat`) VALUES
(1, 1, 1, 1, 'Endang', 'Bekasi'),
(2, 2, 2, 2, 'Edi Kusnadi', 'Bogor'),
(3, 3, 3, 3, 'Adi Suparman', 'Kampung Rambutan'),
(4, 4, 4, 4, 'Egy Maulana', 'Jakarta'),
(5, 1, 5, 5, 'Siti Nuraeni', 'Cibubur'),
(6, 4, 4, 4, 'Dea', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Rakha', 'Admin', '123456'),
(2, 'Ujang', 'Admin', 'ujang123'),
(3, 'Dadang', 'Admin', 'dadang123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
