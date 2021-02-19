-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< Updated upstream
-- Waktu pembuatan: 30 Okt 2020 pada 11.18
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10
=======
-- Generation Time: Oct 31, 2020 at 10:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10
>>>>>>> Stashed changes

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p06_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cek_kondisi`
--

CREATE TABLE `cek_kondisi` (
  `ID` char(10) NOT NULL,
  `Nama Inventaris` char(100) NOT NULL,
  `Kondisi` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cek_kondisi`
--

INSERT INTO `cek_kondisi` (`ID`, `Nama Inventaris`, `Kondisi`) VALUES
('003B', 'Lenovo Yoga 520', ' Baik'),
('002A', 'Mouse', ' Baik'),
('001C', 'Hardisk', ' Baik'),
('002A', 'Mouse', ' Baik'),
('003A', 'Proyektor', ' Baik'),
('003B', 'Lenovo Yoga 520', ' Baik'),
('006A', 'Keyboard', ' Baik'),
('006S', 'CPU', ' Baik'),
('007A', 'Monitor', ' Baik'),
('007B', 'Printer', ' Baik'),
('007C', 'Stabilizer', ' Baik'),
('007D', 'Speaker', ' Baik'),
('007E', 'Headhphone', ' Baik'),
('007F', 'Router', ' Baik'),
('007G', 'Hardisk', ' Baik'),
('007H', 'Power Supply', ' Baik'),
('007I', 'VGA Card', ' Baik'),
('007J', 'Motherboard', ' Baik'),
('007K', 'Terminal Cabang', ' Baik'),
('007L', 'Kabel HDMI', ' Baik'),
('007M', 'Kabel LAN', ' Baik'),
('007O', 'Kabel VGA', ' Baik'),
('007P', 'Kabel DVI', ' Baik'),
('007Q', 'Kabel IDE', ' Baik'),
('007R', 'Kabel SATA', ' Baik'),
('007S', 'SSD', ' Baik'),
('007T', 'Kabel Power PC', ' Baik'),
('008A', 'Stop Kontak Cabang', ' Baik'),
('008B', 'Mousepad', ' Baik'),
('008C', 'RAN', ' Baik'),
('008D', 'UPS', ' Baik'),
('008E', 'Lightpen', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_informasi`
--

CREATE TABLE `data_informasi` (
  `ID` char(10) NOT NULL,
  `Nama Inventaris` char(100) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `Kondisi` char(10) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_informasi`
--


INSERT INTO `data_informasi` (`ID`, `Nama Inventaris`, `Jumlah`, `Kondisi`, `Status`) VALUES

('001C', 'Hardisk', 20, 'Baik', 'Dipinjam(12)'),
('002A', 'Mouse', 100, 'Baik', 'Dipinjam(4)'),
('003A', 'Proyektor', 30, 'Baik', 'Tersedia'),
('003B', 'Lenovo Yoga 520', 1, 'Baik', 'Tersedia'),
('006A', 'Keyboard', 150, 'Baik', 'Tersedia'),
('006S', 'CPU', 15, 'Baik', 'Tersedia'),
('007A', 'Monitor', 20, 'Baik', 'Tersedia'),
('007B', 'Printer', 15, ' Baik', 'Tersedia'),
('007C', 'Stabilizer', 20, 'Baik', 'Tersedia'),
('007D', 'Speake', 50, 'Baik', ' Tersedia'),
('007E', ' Headphone', 50, 'Baik', 'Tersedia'),
('007F', 'Router', 30, 'Baik', 'Tersedia'),
('007G', 'Hardisk', 20, 'Baik', 'Tersedia'),
('007H', 'Power Supply', 30, 'Baik', ' Tersedia'),
('007I', 'VGA Card', 20, 'Baik', 'Tersedia'),
('007J', 'Motherboard', 20, 'Baik', 'Tersedia '),
('007K', 'Terminal Cabang', 30, 'Baik', 'Tersedia'),
('007L', 'Kabel HDMI', 50, 'Baik', 'Tersedia'),
('007M', 'Kabel LAN', 50, 'Baik', 'Tersedia'),
('007O', 'Kabel VGA', 50, 'Baik', 'Tersedia'),
('007P', 'Kabel DVI', 50, 'Baik', 'Tersedia'),
('007Q', 'Kabel IDE', 50, 'Baik', 'Tersedia'),
('007R', 'Kabel SATA', 50, 'Baik', 'Tersedia'),
('007T', 'Kabel Power PC', 30, 'Baik', 'Tersedia'),
('008A', 'Stop Kontak Cabang', 33, 'Baik', 'Tersedia'),
('008B', 'Mousepad', 60, 'Baik', ' Tersedia'),
('008C', 'RAM', 40, 'Baik', 'Tersedia'),
('008D', 'UPS', 23, 'Baik', 'Tersedia'),
('008E', 'Lightpen', 30, 'Baik', 'Tersedia ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `search`
--
CREATE TABLE `tracker` (
  `nama` varchar(64) DEFAULT NULL,
  `page` varchar(64) DEFAULT NULL,
  `IP` varchar(64) DEFAULT NULL,
  `date_auto` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `search` (
  `No` int(8) NOT NULL,
  `ID` varchar(4) NOT NULL,
  `Nama Inventaris` varchar(35) NOT NULL,
  `Kondisi` varchar(35) NOT NULL,
  `Jumlah` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `search`
--

INSERT INTO `search` (`No`, `ID`, `Nama Inventaris`, `Kondisi`, `Jumlah`) VALUES
(1, '001C', 'Hardisk', 'Baik', 20),
(2, '002A', 'Mouse', 'Baik', 100),
(3, '003A', 'Proyektor', 'Baik', 30),
(4, '003B', 'Lenovo Yoga 520', 'Baik', 1),
(5, '006A', 'Keyboard', 'Baik', 150),
(6, '006S', 'CPU', 'Baik', 15);
=======
('006S', 'CPU', 15, 'Baik', 'Tersedia');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `Kode` char(10) NOT NULL,
  `ID` char(10) NOT NULL,
  `Tanggal` char(15) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `Status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`Kode`, `ID`, `Tanggal`, `Jumlah`, `Status`) VALUES
('001', '002A', '2020-04-15', 4, 'Peminjaman'),
('002', '003B', '2020-04-16', 1, 'Pengembalian'),
('003', '002C', '2020-04-16', 2, 'Peminjaman'),
('004', '003C', '2020-04-16', 1, 'Pengembalian'),
('005', '002D', '2020-04-17', 2, 'Pengembalian'),
('006', '006E', '2020-04-30', 5, 'Peminjaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Laboran','Koordinator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id`, `username`, `nama_lengkap`, `password`, `level`) VALUES
(1, 'Ucok', 'Ucok', '6685f00d07945ccaef2097ce44b9c0d4', 'Laboran'),
(2, 'Feri', 'Feri', '6620a171fdf7ec04d322421994858c21', 'Koordinator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `update_data_inventaris`
--

CREATE TABLE `update_data_inventaris` (
  `ID` char(10) NOT NULL,
  `Nama Inventaris` char(100) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `Kondisi` char(20) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `update_data_inventaris`
--

INSERT INTO `update_data_inventaris` (`ID`, `Nama Inventaris`, `Jumlah`, `Kondisi`, `Status`) VALUES
(' 007S', 'SSD', 25, 'Baik', 'Tersedia '),
('001C', 'Hardisk', 20, 'Baik', 'Dipinjam(12)'),
('002A', 'Mouse', 100, 'Baik', 'Dipinjam(4)'),
('003A', 'Proyektor', 30, 'Baik', 'Tersedia'),
('003B', 'Lenovo Yoga 520', 1, 'Baik', 'Tersedia'),
('006A', 'Keyboard', 150, 'Baik', 'Tersedia'),
('006S', 'CPU', 15, 'Baik', 'Tersedia'),
('007A', 'Monitor', 20, 'Baik', 'Tersedia'),
('007B', 'Printer', 15, ' Baik', 'Tersedia'),
('007C', 'Stabilizer', 20, 'Baik', 'Tersedia'),
('007D', 'Speake', 50, 'Baik', ' Tersedia'),
('007E', ' Headphone', 50, 'Baik', 'Tersedia'),
('007F', 'Router', 30, 'Baik', 'Tersedia'),
('007G', 'Hardisk', 20, 'Baik', 'Tersedia'),
('007H', 'Power Supply', 30, 'Baik', ' Tersedia'),
('007I', 'VGA Card', 20, 'Baik', 'Tersedia'),
('007J', 'Motherboard', 20, 'Baik', 'Tersedia '),
('007K', 'Terminal Cabang', 30, 'Baik', 'Tersedia'),
('007L', 'Kabel HDMI', 50, 'Baik', 'Tersedia'),
('007M', 'Kabel LAN', 50, 'Baik', 'Tersedia'),
('007O', 'Kabel VGA', 50, 'Baik', 'Tersedia'),
('007P', 'Kabel DVI', 50, 'Baik', 'Tersedia'),
('007Q', 'Kabel IDE', 50, 'Baik', 'Tersedia'),
('007R', 'Kabel SATA', 50, 'Baik', 'Tersedia'),
('007T', 'Kabel Power PC', 30, 'Baik', 'Tersedia'),
('008A', 'Stop Kontak Cabang', 33, 'Baik', 'Tersedia'),
('008B', 'Mousepad', 60, 'Baik', ' Tersedia'),
('008C', 'RAM', 40, 'Baik', 'Tersedia'),
('008D', 'UPS', 23, 'Baik', 'Tersedia'),
('008E', 'Lightpen', 30, 'Baik', 'Tersedia ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cek_kondisi`
--
ALTER TABLE `cek_kondisi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `data_informasi`
--
ALTER TABLE `data_informasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `transaksi`

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--
-- Indeks untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `update_data_inventaris`
--
ALTER TABLE `update_data_inventaris`
  ADD PRIMARY KEY (`ID`);
CREATE TABLE `user_log` (
  `id` char(10) NOT NULL,
  `nama_lengkap` char(100) NOT NULL,
  `level` enum('Laboran','Koordinator') NOT NULL,
  `action` char(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `nama_lengkap`, `level`, `action`, `created_at`, `updated_at`) VALUES
('1', 'Ucok', 'Laboran', 'Login', '2020-10-31 14:30:59', '2020-10-31 17:50:59'),
('2', 'Feri', 'Koordinator', 'akses data inventaris', '2020-10-31 14:50:59', '2020-10-31 18:50:59'),
('1', 'Ucok', 'Laboran', 'Logout', '2020-10-31 17:51:00', '2020-10-31 17:51:02'),
('1', 'Ucok', 'Laboran', 'Akses halaman utama', '2020-10-30 08:00:00', '2020-10-30 08:02:00'),
('1', 'Ucok', 'Laboran', 'Akses fitur cek kondisi', '2020-10-30 08:03:00', '2020-10-30 08:05:00'),
('1', 'Ucok', 'Laboran', 'Akses fitur transaksi', '2020-10-30 08:07:00', '2020-10-30 08:10:00'),
('1', 'Ucok', 'Laboran', 'Eksport data inventaris', '2020-10-30 08:11:00', '2020-10-30 08:13:00'),
('1', 'Ucok', 'Laboran', 'Akses data inventaris', '2020-10-30 08:10:30', '2020-10-30 08:10:29'),
('1', 'Ucok', 'Laboran', 'Logout', '2020-10-30 08:15:00', '2020-10-30 08:15:02'),
('2', 'Feri', 'Koordinator', 'Login', '2020-10-30 09:00:00', '2020-10-30 10:00:00'),
('2', 'Feri', 'Koordinator', 'Akses halaman utama', '2020-10-30 09:01:00', '2020-10-30 09:05:00'),
('2', 'Feri', 'Koordinator', 'Akses cek kondisi', '2020-10-30 09:06:00', '2020-10-30 09:10:00'),
('2', 'Feri', 'Koordinator', 'akses data inventaris', '2020-10-30 09:10:00', '2020-10-30 09:12:00'),
('2', 'Feri', 'Koordinator', 'Eksport data inventaris', '2020-10-30 09:13:00', '2020-10-30 09:15:00'),
('2', 'Feri', 'Koordinator', 'Akses transaksi', '2020-10-30 09:15:00', '2020-10-30 09:20:00'),
('2', 'Feri', 'Koordinator', 'Akses cek kondisi', '2020-10-30 09:21:00', '2020-10-30 09:25:00'),
('1', 'Ucok', 'Laboran', 'Login', '2020-10-29 14:30:59', '2020-10-31 17:50:59'),
('2', 'Feri', 'Koordinator', 'akses data inventaris', '2020-10-29 14:50:59', '2020-10-31 18:50:59'),
('1', 'Ucok', 'Laboran', 'Logout', '2020-10-29 17:51:00', '2020-10-31 17:51:02'),
('1', 'Ucok', 'Laboran', 'Akses halaman utama', '2020-10-28 08:00:00', '2020-10-28 08:02:00'),
('1', 'Ucok', 'Laboran', 'Akses fitur cek kondisi', '2020-10-28 08:03:00', '2020-10-28 08:05:00'),
('1', 'Ucok', 'Laboran', 'Akses fitur transaksi', '2020-10-28 08:07:00', '2020-10-28 08:10:00'),
('1', 'Ucok', 'Laboran', 'Eksport data inventaris', '2020-10-28 08:11:00', '2020-10-28 08:13:00'),
('1', 'Ucok', 'Laboran', 'Akses data inventaris', '2020-10-28 08:10:30', '2020-10-28 08:10:29'),
('1', 'Ucok', 'Laboran', 'Logout', '2020-10-28 08:15:00', '2020-10-28 08:15:02'),
('2', 'Feri', 'Koordinator', 'Login', '2020-10-28 09:00:00', '2020-10-28 10:00:00'),
('2', 'Feri', 'Koordinator', 'Akses halaman utama', '2020-10-28 09:01:00', '2020-10-28 09:05:00'),
('2', 'Feri', 'Koordinator', 'Akses cek kondisi', '2020-10-28 09:06:00', '2020-10-28 09:10:00'),
('2', 'Feri', 'Koordinator', 'akses data inventaris', '2020-10-28 09:10:00', '2020-10-28 09:12:00'),
('2', 'Feri', 'Koordinator', 'Eksport data inventaris', '2020-10-28 09:13:00', '2020-10-28 09:15:00'),
('2', 'Feri', 'Koordinator', 'Akses transaksi', '2020-10-28 09:15:00', '2020-10-28 09:20:00'),
('2', 'Feri', 'Koordinator', 'Akses cek kondisi', '2020-10-28 09:21:00', '2020-10-28 09:25:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
