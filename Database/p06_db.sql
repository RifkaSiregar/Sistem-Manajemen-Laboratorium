-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2021 pada 13.47
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

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
-- Struktur dari tabel `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `user_id`, `aktivitas`, `created_at`, `updated_at`) VALUES
(2, 1, 'Menambah Data Inventaris', '2020-12-19 00:57:51', '2020-12-19 00:57:51'),
(3, 1, 'Menambah Data Inventaris', '2020-12-19 00:58:06', '2020-12-19 00:58:06'),
(4, 1, 'Logout SIMALAB', '2020-12-19 03:03:41', '2020-12-19 03:03:41'),
(5, 3, 'Login SIMALAB', '2020-12-19 03:07:39', '2020-12-19 03:07:39'),
(6, 3, 'Menambah Data Inventaris', '2020-12-19 03:13:21', '2020-12-19 03:13:21'),
(7, 3, 'Menambah Data Inventaris', '2020-12-19 03:14:22', '2020-12-19 03:14:22'),
(8, 3, 'Menambah Data Inventaris', '2020-12-19 03:17:25', '2020-12-19 03:17:25'),
(9, 3, 'Logout SIMALAB', '2020-12-19 03:18:56', '2020-12-19 03:18:56'),
(10, 4, 'Login SIMALAB', '2020-12-19 03:20:36', '2020-12-19 03:20:36'),
(11, 4, 'Logout SIMALAB', '2020-12-19 03:35:43', '2020-12-19 03:35:43'),
(12, 1, 'Login SIMALAB', '2020-12-19 04:00:18', '2020-12-19 04:00:18'),
(13, 1, 'Menambah Data Inventaris', '2020-12-19 07:24:15', '2020-12-19 07:24:15'),
(14, 1, 'Menambah Data Inventaris', '2020-12-19 07:24:26', '2020-12-19 07:24:26'),
(15, 1, 'Login SIMALAB', '2020-12-19 08:59:04', '2020-12-19 08:59:04'),
(16, 1, 'Menambah Data Inventaris', '2020-12-19 10:55:12', '2020-12-19 10:55:12'),
(17, 1, 'Menambah Data Inventaris', '2020-12-19 11:01:44', '2020-12-19 11:01:44'),
(18, 1, 'Menambah Data Inventaris', '2020-12-19 11:03:36', '2020-12-19 11:03:36'),
(19, 1, 'Login SIMALAB', '2020-12-19 17:30:23', '2020-12-19 17:30:23'),
(20, 1, 'Menambah Data Inventaris', '2020-12-19 18:47:08', '2020-12-19 18:47:08'),
(21, 1, 'Login SIMALAB', '2020-12-19 20:38:35', '2020-12-19 20:38:35'),
(22, 1, 'Menambah Data Inventaris', '2020-12-19 20:39:26', '2020-12-19 20:39:26'),
(23, 1, 'Login SIMALAB', '2020-12-20 11:06:47', '2020-12-20 11:06:47'),
(24, 1, 'Menambah Data Inventaris', '2020-12-20 11:14:23', '2020-12-20 11:14:23'),
(25, 1, 'Menambah Data Inventaris', '2020-12-20 11:15:46', '2020-12-20 11:15:46'),
(26, 1, 'Menambah Data Inventaris', '2020-12-20 11:16:13', '2020-12-20 11:16:13'),
(27, 1, 'Menambah Data Inventaris', '2020-12-20 11:16:38', '2020-12-20 11:16:38'),
(28, 1, 'Menambah Data Inventaris', '2020-12-20 11:16:55', '2020-12-20 11:16:55'),
(29, 1, 'Menambah Data Inventaris', '2020-12-20 11:17:13', '2020-12-20 11:17:13'),
(30, 1, 'Menambah Data Inventaris', '2020-12-20 11:17:43', '2020-12-20 11:17:43'),
(31, 1, 'Menambah Data Inventaris', '2020-12-20 11:19:20', '2020-12-20 11:19:20'),
(32, 1, 'Mengubah Data Inventaris', '2020-12-20 11:26:13', '2020-12-20 11:26:13'),
(33, 1, 'Mengubah Data Inventaris', '2020-12-20 11:26:39', '2020-12-20 11:26:39'),
(34, 1, 'Mengubah Data Inventaris', '2020-12-20 11:26:59', '2020-12-20 11:26:59'),
(35, 1, 'Mengubah Data Inventaris', '2020-12-20 11:27:09', '2020-12-20 11:27:09'),
(36, 1, 'Menghapus Data Inventaris', '2020-12-20 11:30:33', '2020-12-20 11:30:33'),
(37, 1, 'Menghapus Data Inventaris', '2020-12-20 11:31:07', '2020-12-20 11:31:07'),
(38, 1, 'Menghapus Data Inventaris', '2020-12-20 11:31:35', '2020-12-20 11:31:35'),
(39, 1, 'Menghapus Data Inventaris', '2020-12-20 11:32:04', '2020-12-20 11:32:04'),
(40, 1, 'Menghapus Data Inventaris', '2020-12-20 11:32:43', '2020-12-20 11:32:43'),
(41, 1, 'Menghapus Data Inventaris', '2020-12-20 11:34:02', '2020-12-20 11:34:02'),
(42, 1, 'Login SIMALAB', '2020-12-20 11:34:54', '2020-12-20 11:34:54'),
(43, 1, 'Menghapus Data Inventaris', '2020-12-20 11:35:27', '2020-12-20 11:35:27'),
(44, 1, 'Mengubah Data Inventaris', '2020-12-20 11:36:34', '2020-12-20 11:36:34'),
(45, 1, 'Menghapus Data Inventaris', '2020-12-20 11:43:42', '2020-12-20 11:43:42'),
(46, 1, 'Menghapus Data Inventaris', '2020-12-20 11:53:25', '2020-12-20 11:53:25'),
(47, 1, 'Login SIMALAB', '2020-12-20 11:54:01', '2020-12-20 11:54:01'),
(48, 1, 'Menghapus Data Inventaris', '2020-12-20 11:54:43', '2020-12-20 11:54:43'),
(49, 1, 'Login SIMALAB', '2020-12-20 12:05:32', '2020-12-20 12:05:32'),
(50, 1, 'Mengubah Data Inventaris', '2020-12-20 12:06:38', '2020-12-20 12:06:38'),
(51, 1, 'Mengubah Data Inventaris', '2020-12-20 12:07:27', '2020-12-20 12:07:27'),
(52, 1, 'Mengubah Data Inventaris', '2020-12-20 12:08:30', '2020-12-20 12:08:30'),
(53, 1, 'Mengubah Data Inventaris', '2020-12-20 12:09:26', '2020-12-20 12:09:26'),
(54, 1, 'Login SIMALAB', '2020-12-20 12:26:46', '2020-12-20 12:26:46'),
(55, 1, 'Menghapus Data Inventaris', '2020-12-20 12:32:03', '2020-12-20 12:32:03'),
(56, 1, 'Menghapus Data Inventaris', '2020-12-20 12:32:49', '2020-12-20 12:32:49'),
(57, 1, 'Menghapus Data Inventaris', '2020-12-20 12:32:52', '2020-12-20 12:32:52'),
(58, 1, 'Mengubah Data Inventaris', '2020-12-20 12:34:58', '2020-12-20 12:34:58'),
(59, 1, 'Menghapus Data Inventaris', '2020-12-20 12:37:31', '2020-12-20 12:37:31'),
(60, 1, 'Menghapus Data Inventaris', '2020-12-20 12:37:47', '2020-12-20 12:37:47'),
(61, 1, 'Menghapus Data Inventaris', '2020-12-20 12:40:33', '2020-12-20 12:40:33'),
(62, 1, 'Menghapus Data Inventaris', '2020-12-20 12:41:22', '2020-12-20 12:41:22'),
(63, 1, 'Login SIMALAB', '2020-12-20 19:13:58', '2020-12-20 19:13:58'),
(64, 1, 'Menghapus Data Inventaris', '2020-12-20 19:16:56', '2020-12-20 19:16:56'),
(65, 1, 'Menghapus Data Inventaris', '2020-12-20 19:18:34', '2020-12-20 19:18:34'),
(66, 1, 'Mengubah Data Inventaris', '2020-12-20 19:19:30', '2020-12-20 19:19:30'),
(67, 1, 'Mengubah Data Inventaris', '2020-12-20 19:19:48', '2020-12-20 19:19:48'),
(68, 1, 'Mengubah Data Inventaris', '2020-12-20 19:20:18', '2020-12-20 19:20:18'),
(69, 1, 'Mengubah Data Inventaris', '2020-12-20 19:20:49', '2020-12-20 19:20:49'),
(70, 1, 'Mengubah Data Inventaris', '2020-12-20 19:25:19', '2020-12-20 19:25:19'),
(71, 1, 'Login SIMALAB', '2020-12-20 20:54:26', '2020-12-20 20:54:26'),
(72, 1, 'Logout SIMALAB', '2020-12-20 20:54:36', '2020-12-20 20:54:36'),
(73, 1, 'Login SIMALAB', '2020-12-20 22:46:39', '2020-12-20 22:46:39'),
(74, 1, 'Menambah Data Inventaris', '2020-12-20 22:49:04', '2020-12-20 22:49:04'),
(75, 1, 'Menambah Data Inventaris', '2020-12-20 22:50:04', '2020-12-20 22:50:04'),
(76, 1, 'Mengubah Data Inventaris', '2020-12-20 22:54:10', '2020-12-20 22:54:10'),
(77, 1, 'Mengubah Data Inventaris', '2020-12-20 22:55:08', '2020-12-20 22:55:08'),
(78, 1, 'Menghapus Data Inventaris', '2020-12-20 22:55:48', '2020-12-20 22:55:48'),
(79, 1, 'Mengubah Data Pengguna', '2020-12-20 23:10:19', '2020-12-20 23:10:19'),
(80, 1, 'Menghapus Data Pengguna', '2020-12-20 23:12:37', '2020-12-20 23:12:37'),
(81, 1, 'Login SIMALAB', '2020-12-22 20:37:00', '2020-12-22 20:37:00'),
(82, 1, 'Login SIMALAB', '2020-12-22 20:38:55', '2020-12-22 20:38:55'),
(83, 1, 'Menghapus Data Inventaris', '2020-12-22 21:05:33', '2020-12-22 21:05:33'),
(84, 1, 'Menambah Data Transaksi', '2020-12-22 21:13:30', '2020-12-22 21:13:30'),
(85, 1, 'Menambah Data Transaksi', '2020-12-22 21:32:47', '2020-12-22 21:32:47'),
(86, 1, 'Menambah Data Transaksi', '2020-12-22 21:36:40', '2020-12-22 21:36:40'),
(87, 3, 'Login SIMALAB', '2020-12-22 21:49:50', '2020-12-22 21:49:50'),
(88, 1, 'Mengubah Data Pengguna', '2020-12-23 00:04:12', '2020-12-23 00:04:12'),
(89, 1, 'Mengubah Data Pengguna', '2020-12-23 00:15:22', '2020-12-23 00:15:22'),
(90, 1, 'Menghapus Data Pengguna', '2020-12-23 00:18:42', '2020-12-23 00:18:42'),
(91, 1, 'Menambah Data Inventaris', '2020-12-23 00:45:40', '2020-12-23 00:45:40'),
(92, 1, 'Login SIMALAB', '2020-12-23 01:10:00', '2020-12-23 01:10:00'),
(93, 1, 'Menghapus Data Inventaris', '2020-12-23 01:17:52', '2020-12-23 01:17:52'),
(94, 3, 'Login SIMALAB', '2020-12-24 05:10:11', '2020-12-24 05:10:11'),
(95, 3, 'Logout SIMALAB', '2020-12-24 05:10:26', '2020-12-24 05:10:26'),
(96, 1, 'Login SIMALAB', '2020-12-24 05:10:35', '2020-12-24 05:10:35'),
(97, 1, 'Menambah Data Inventaris', '2020-12-24 05:20:03', '2020-12-24 05:20:03'),
(98, 1, 'Logout SIMALAB', '2020-12-24 05:20:12', '2020-12-24 05:20:12'),
(99, 3, 'Login SIMALAB', '2020-12-24 05:20:18', '2020-12-24 05:20:18'),
(100, 3, 'Menambah Data Inventaris', '2020-12-24 05:20:29', '2020-12-24 05:20:29'),
(101, 1, 'Login SIMALAB', '2020-12-24 11:52:32', '2020-12-24 11:52:32'),
(102, 1, 'Menambah Data Inventaris', '2020-12-24 11:52:47', '2020-12-24 11:52:47'),
(103, 1, 'Logout SIMALAB', '2020-12-24 12:05:03', '2020-12-24 12:05:03'),
(104, 1, 'Login SIMALAB', '2020-12-28 20:00:32', '2020-12-28 20:00:32'),
(105, 1, 'Menambah Data Inventaris', '2020-12-28 20:04:33', '2020-12-28 20:04:33'),
(106, 1, 'Logout SIMALAB', '2020-12-28 20:12:37', '2020-12-28 20:12:37'),
(107, 1, 'Login SIMALAB', '2020-12-28 20:18:27', '2020-12-28 20:18:27'),
(108, 1, 'Logout SIMALAB', '2020-12-28 20:37:48', '2020-12-28 20:37:48'),
(109, 1, 'Login SIMALAB', '2020-12-29 01:16:31', '2020-12-29 01:16:31'),
(110, 1, 'Login SIMALAB', '2020-12-29 01:29:54', '2020-12-29 01:29:54'),
(111, 1, 'Logout SIMALAB', '2020-12-29 01:50:48', '2020-12-29 01:50:48'),
(112, 1, 'Login SIMALAB', '2020-12-29 01:50:56', '2020-12-29 01:50:56'),
(113, 4, 'Login SIMALAB', '2020-12-29 01:52:48', '2020-12-29 01:52:48'),
(114, 4, 'Menambah Data Inventaris', '2020-12-29 01:54:40', '2020-12-29 01:54:40'),
(115, 1, 'Login SIMALAB', '2020-12-29 02:02:35', '2020-12-29 02:02:35'),
(116, 1, 'Login SIMALAB', '2020-12-30 02:36:41', '2020-12-30 02:36:41'),
(117, 1, 'Menambah Data Inventaris', '2020-12-30 02:43:37', '2020-12-30 02:43:37'),
(118, 1, 'Mengubah Data Inventaris', '2020-12-30 02:44:04', '2020-12-30 02:44:04'),
(119, 1, 'Menghapus Data Inventaris', '2020-12-30 02:44:20', '2020-12-30 02:44:20'),
(120, 1, 'Export Excel Data Inventaris', '2020-12-30 02:44:39', '2020-12-30 02:44:39'),
(121, 1, 'Export PDF Data Inventaris', '2020-12-30 02:45:27', '2020-12-30 02:45:27'),
(122, 1, 'Login SIMALAB', '2020-12-30 02:48:45', '2020-12-30 02:48:45'),
(123, 1, 'Menambah Data Inventaris', '2020-12-30 02:50:31', '2020-12-30 02:50:31'),
(124, 1, 'Mengubah Data Inventaris', '2020-12-30 02:56:28', '2020-12-30 02:56:28'),
(125, 1, 'Menghapus Data Inventaris', '2020-12-30 02:57:13', '2020-12-30 02:57:13'),
(126, 1, 'Menambah Data Inventaris', '2020-12-30 03:00:30', '2020-12-30 03:00:30'),
(127, 1, 'Menambah Data Pengguna', '2020-12-30 04:00:46', '2020-12-30 04:00:46'),
(128, 1, 'Mengubah Data Pengguna', '2020-12-30 04:03:01', '2020-12-30 04:03:01'),
(129, 1, 'Menghapus Data Pengguna', '2020-12-30 04:04:02', '2020-12-30 04:04:02'),
(130, 1, 'Menambah Data Inventaris', '2020-12-30 04:28:18', '2020-12-30 04:28:18'),
(131, 1, 'Menambah Data Forum', '2020-12-30 04:53:00', '2020-12-30 04:53:00'),
(132, 1, 'Menambah Data Forum', '2020-12-30 04:58:04', '2020-12-30 04:58:04'),
(133, 1, 'Mengubah Data Inventaris', '2020-12-30 05:05:13', '2020-12-30 05:05:13'),
(134, 1, 'Login SIMALAB', '2020-12-30 07:06:09', '2020-12-30 07:06:09'),
(135, 1, 'Menambah Data Inventaris', '2020-12-30 07:10:49', '2020-12-30 07:10:49'),
(136, 1, 'Mengubah Data Inventaris', '2020-12-30 07:11:40', '2020-12-30 07:11:40'),
(137, 1, 'Menghapus Data Inventaris', '2020-12-30 07:12:08', '2020-12-30 07:12:08'),
(138, 1, 'Export Excel Data Inventaris', '2020-12-30 07:12:27', '2020-12-30 07:12:27'),
(139, 1, 'Export PDF Data Inventaris', '2020-12-30 07:12:40', '2020-12-30 07:12:40'),
(140, 1, 'Menambah Data Inventaris', '2020-12-30 07:15:49', '2020-12-30 07:15:49'),
(141, 1, 'Menambah Data Forum', '2020-12-30 07:17:33', '2020-12-30 07:17:33'),
(142, 1, 'Menambah Data Forum', '2020-12-30 07:20:09', '2020-12-30 07:20:09'),
(143, 1, 'Login SIMALAB', '2020-12-30 08:37:40', '2020-12-30 08:37:40'),
(144, 1, 'Logout SIMALAB', '2020-12-30 08:37:46', '2020-12-30 08:37:46'),
(145, 1, 'Login SIMALAB', '2020-12-30 08:38:51', '2020-12-30 08:38:51'),
(146, 1, 'Mengubah Data Pengguna', '2020-12-30 08:39:23', '2020-12-30 08:39:23'),
(147, 1, 'Login SIMALAB', '2020-12-30 08:42:12', '2020-12-30 08:42:12'),
(148, 1, 'Login SIMALAB', '2020-12-30 08:43:45', '2020-12-30 08:43:45'),
(149, 1, 'Login SIMALAB', '2020-12-30 08:57:15', '2020-12-30 08:57:15'),
(150, 1, 'Mengubah Data Pengguna', '2020-12-30 08:57:36', '2020-12-30 08:57:36'),
(151, 1, 'Logout SIMALAB', '2020-12-30 08:57:48', '2020-12-30 08:57:48'),
(152, 1, 'Login SIMALAB', '2020-12-31 13:01:53', '2020-12-31 13:01:53'),
(153, 1, 'Menambah Data Inventaris', '2020-12-31 13:19:23', '2020-12-31 13:19:23'),
(154, 1, 'Mengubah Data Inventaris', '2020-12-31 13:25:10', '2020-12-31 13:25:10'),
(155, 1, 'Menghapus Data Inventaris', '2020-12-31 13:26:47', '2020-12-31 13:26:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id`, `judul`, `slug`, `konten`, `user_id`, `created_at`, `updated_at`) VALUES
(11, 'Keramahan Koordinator', 'http://keramahan_koordinator.com', 'keramahan koordinator sistem managemen laboratorium', 1, '2020-12-30 04:28:18', '2020-12-30 04:28:18'),
(15, 'koordinator', 'https://koordinator.com', 'koordinator', 1, '2020-12-30 07:17:33', '2020-12-30 07:17:33'),
(16, 'laboran', 'https://laboran.com', 'laboran dan data inventaris', 1, '2020-12-30 07:20:09', '2020-12-30 07:20:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_inventaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id`, `kode`, `nama_inventaris`, `jumlah`, `kondisi`, `status`, `created_at`, `updated_at`) VALUES
(1, '007S', 'SSD', 10, 'Baik', 'Tersedia', '2020-12-29 17:51:17', '2020-12-29 17:53:17'),
(2, '001C', 'Hardisk', 20, 'Baik', 'Dipinjam', '2020-12-03 01:16:58', '2020-12-03 01:16:58'),
(3, '002A', 'Mouse', 100, 'Baik', 'Dipinjam', '2020-12-03 01:19:43', '2020-12-03 01:19:43'),
(4, '003A', 'Proyektor', 30, 'Baik', 'Tersedia', '2020-12-03 01:24:20', '2020-12-03 01:24:20'),
(5, '003B', 'Lenovo Yoga 520', 1, 'Baik', 'Tersedia', '2020-12-03 01:26:10', '2020-12-03 01:26:10'),
(6, '006A', 'Keyboard', 150, 'Baik', 'Tersedia', '2020-12-03 01:26:55', '2020-12-03 01:26:55'),
(7, '006S', 'CPU', 15, 'Baik', 'Tersedia', '2020-12-03 01:27:17', '2020-12-03 01:27:17'),
(8, '007B', 'Printer', 15, ' Baik', 'Tersedia', '2020-12-29 17:51:17', '2020-12-29 17:53:17'),
(9, '007Z', 'Monitor XY', 20, 'Baik', 'Tersedia', '2020-12-03 01:28:19', '2020-12-30 05:05:13'),
(10, '007U', 'CPU', 25, 'Baik', 'Peminjaman', '2020-12-29 17:51:17', '2020-12-29 17:53:17'),
(11, '007D', 'Speaker', 50, 'Baik', 'Tersedia', '2020-12-03 01:28:54', '2020-12-03 01:28:54'),
(12, '007E', 'Headphone', 50, 'Baik', 'Tersedia', '2020-12-03 01:29:14', '2020-12-03 01:29:14'),
(13, '007F', 'Router', 70, 'Baik', 'Tersedia', '2020-12-03 01:29:30', '2020-12-03 01:29:30'),
(14, '007G', 'Power Supply', 30, 'Baik', 'Tersedia', '2020-12-03 01:30:21', '2020-12-03 01:30:21'),
(15, '007H', 'VGA Card', 20, 'Baik', 'Tersedia', '2020-12-03 01:30:39', '2020-12-03 01:30:39'),
(16, '007I', 'Motherboard', 20, 'Baik', 'Tersedia', '2020-12-03 01:31:03', '2020-12-03 01:31:03'),
(17, '007J', 'Terminal Cabang', 30, 'Baik', 'Tersedia', '2020-12-03 01:31:30', '2020-12-03 01:31:30'),
(18, '007K', 'Kabel HDMI', 50, 'Baik', 'Tersedia', '2020-12-03 01:31:49', '2020-12-03 01:31:49'),
(19, '007L', 'Memory Cooler', 25, ' Baik', 'Tersedia', '2020-12-29 17:51:17', '2020-12-29 17:53:17'),
(20, '007M', 'Kabel VGA', 50, 'Baik', 'Tersedia', '2020-12-03 01:32:50', '2020-12-03 01:32:50'),
(21, '007O', 'Kabel DVI', 50, 'Baik', 'Tersedia', '2020-12-03 01:33:14', '2020-12-03 01:33:14'),
(22, '007P', 'Kabel IDE', 50, 'Baik', 'Tersedia', '2020-12-03 01:33:39', '2020-12-03 01:33:39'),
(23, '007Q', 'Kabel SATA', 50, 'Baik', 'Tersedia', '2020-12-03 01:33:57', '2020-12-03 01:33:57'),
(24, '007R', 'Kabel Power PC', 30, 'Baik', 'Tersedia', '2020-12-03 01:34:21', '2020-12-03 01:34:21'),
(25, '007M', 'Network Device', 25, 'Baik', 'Peminjaman', '2020-12-29 17:51:17', '2020-12-29 17:53:17'),
(26, '008B', 'Mousepad', 60, 'Baik', 'Tersedia', '2020-12-03 01:35:08', '2020-12-03 01:35:08'),
(27, '008C', 'RAM', 40, 'Baik', 'Tersedia', '2020-12-03 01:35:23', '2020-12-03 01:35:23'),
(28, '010A', 'Light Pen', 10, 'Baik', 'Tersedia', '2020-12-20 22:49:04', '2020-12-20 22:49:04'),
(29, '010B', 'Card Reader', 20, 'Baik', 'Tersedia', '2020-12-20 22:50:04', '2020-12-20 22:50:04'),
(30, '0100C', 'Modem', 21, 'Baik', 'Tersedia', '2020-12-23 00:45:39', '2020-12-23 00:45:39'),
(31, '0100D', 'Kabel Power', 10, 'Baik', 'Tersedia', '2020-12-30 02:50:31', '2020-12-30 02:50:31'),
(32, '008B', 'Layar Proyektor', 10, 'Baik', 'Tersedia', '2020-12-31 13:19:23', '2020-12-31 13:19:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(12, '2020_12_13_084037_create_forum_table', 2),
(16, '2014_10_12_100000_create_password_resets_table', 3),
(17, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(18, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(20, '2016_06_01_000004_create_oauth_clients_table', 3),
(21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3),
(22, '2019_08_19_000000_create_failed_jobs_table', 3),
(23, '2020_11_23_133416_create_inventaris_table', 3),
(24, '2020_11_23_145102_create_transaksi_table', 3),
(25, '2020_11_25_130849_create_pengguna_table', 3),
(26, '2020_12_18_185504_create_users_table', 3),
(27, '2020_12_18_185900_create_aktivitas_table', 3),
(28, '2020_12_18_193118_create_forums_table', 3),
(29, '2020_12_19_065243_create_forums_table', 4),
(30, '2020_12_19_155438_create_forums_table', 5),
(31, '2020_12_19_155723_create_forums_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('071586e88074af47054cd6a523eb131c130bfa7491cf3e93e3c74979de2cd31e0efea9dac6ce7b64', 1, 1, 'MyApp', '[]', 0, '2020-12-23 01:09:59', '2020-12-23 01:09:59', '2021-12-23 08:09:59'),
('142e301dab6f31dfe32593c51d29c6d295a23869d28ef12c023678d1f7bb8805955be793b0af6455', 1, 1, 'MyApp', '[]', 0, '2020-12-19 17:30:22', '2020-12-19 17:30:22', '2021-12-20 00:30:22'),
('160d8f866de76593f5da60c934e4c7fb6f03ea0fa6a11f9d716691083ddf6070e1d39268e149f47a', 1, 1, 'MyApp', '[]', 0, '2020-12-20 22:46:39', '2020-12-20 22:46:39', '2021-12-21 05:46:39'),
('16ddf36bac32838cb10b77ce9d111a1bbb6ce6cde1103d62bd5daf78f9aee35ea914f1aa5d0defa1', 1, 1, 'MyApp', '[]', 0, '2020-12-22 20:36:59', '2020-12-22 20:36:59', '2021-12-23 03:36:59'),
('2b42c1568c5381aeb99e7b978c4677a2e00be329b51b91b0123edb06028e3dae9e5f541ff025e174', 3, 1, 'MyApp', '[]', 0, '2020-12-22 21:49:49', '2020-12-22 21:49:49', '2021-12-23 04:49:49'),
('70f95574056436af7828425ec9ab5fb21dd529edc47ea0de25bf3b36ec10fffa9a5fab65d260b943', 1, 1, 'MyApp', '[]', 0, '2020-12-20 11:06:47', '2020-12-20 11:06:47', '2021-12-20 18:06:47'),
('744ad45298efb892bcd5c8603c355441ffe6871ecff394173b10122a7dda173c059a71f3b95310dd', 1, 1, 'MyApp', '[]', 0, '2020-12-20 11:54:00', '2020-12-20 11:54:00', '2021-12-20 18:54:00'),
('7f4e78f6276baae12d3bab9741eb59f7314ef4717e4d3e726ec1329797ba829f4c7fd05d4a33be54', 1, 1, 'MyApp', '[]', 0, '2020-12-20 12:05:31', '2020-12-20 12:05:31', '2021-12-20 19:05:31'),
('8ec5533ae983e6ac95004047ca366d6a2ba9882443aa9f34a070d8988a3af6d12485ebd0a20c4c6b', 8, 1, 'MyApp', '[]', 0, '2020-12-22 21:30:07', '2020-12-22 21:30:07', '2021-12-23 04:30:07'),
('9c5a216f03f52f3a416cff82cf78d99d822ae0997210bc14a0bd0b35386ed1d7d17217bbdb9109ea', 7, 1, 'MyApp', '[]', 0, '2020-12-22 21:23:51', '2020-12-22 21:23:51', '2021-12-23 04:23:51'),
('9d5bb3c14f0f61ed474684b9c486c45acbacb8b30ded279ad5ae6a90b9c8a38e21dc6aa0e084b49e', 1, 1, 'MyApp', '[]', 0, '2020-12-20 19:13:58', '2020-12-20 19:13:58', '2021-12-21 02:13:58'),
('9e51097db674cec10468cdf400441ad74b249c284ad37d513e95f11ace02412e67bee594d181c180', 1, 1, 'MyApp', '[]', 0, '2020-12-30 02:48:45', '2020-12-30 02:48:45', '2021-12-30 09:48:45'),
('cc4ea5b8040d72e2a2e16defc626d2ffebb0f3d128068f3f71671aef23e5f5e3d8c79cd6cce62569', 1, 1, 'MyApp', '[]', 0, '2020-12-22 20:38:55', '2020-12-22 20:38:55', '2021-12-23 03:38:55'),
('d96ced4efb5612859d14fe21228d92a821f1d5a3a089882597a3795ce937234d04cab28a7beb6d07', 1, 1, 'MyApp', '[]', 0, '2020-12-29 01:29:53', '2020-12-29 01:29:53', '2021-12-29 08:29:53'),
('f9f1d7b1f7d5c288315d21caefe140ce2bf669b0930d4860d3c11f8d88bb1cf6fde55d996795d302', 1, 1, 'MyApp', '[]', 0, '2020-12-20 12:26:46', '2020-12-20 12:26:46', '2021-12-20 19:26:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'mDHERzlvTerA1CzlaizOFZYgRgrKCeHHRfGVO2cz', NULL, 'http://localhost', 1, 0, 0, '2020-12-19 17:25:20', '2020-12-19 17:25:20'),
(2, NULL, 'Laravel Password Grant Client', 'TjgwnZZspK042KW5u9QtUEDKpWJiLuc7PNw5TnfR', 'users', 'http://localhost', 0, 1, 0, '2020-12-19 17:25:20', '2020-12-19 17:25:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-19 17:25:20', '2020-12-19 17:25:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `email`, `jenis_kelamin`, `agama`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(8, 'Ulion Pardede', 'ulionpardede28@gmail.com', 'L', 'Kristen Protestan', NULL, 'fotosendiri.jpeg', NULL, '2020-12-30 08:57:36'),
(45, 'Ucok S.', 'ucok@gmail.com', 'L', 'Kristen Protestan', 'Medan', NULL, '2020-12-11 08:52:45', '2020-12-29 17:57:44'),
(56, 'Rifka Uli Siregar', 'rifka@gmail.com', 'P', 'Kristen Protestan', 'Medan', NULL, '2020-12-20 15:30:13', '2020-12-20 15:30:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode`, `tanggal`, `jumlah`, `status`, `created_at`, `updated_at`) VALUES
(1, '007A', '2020-12-01', 12, 'Tersedia', NULL, NULL),
(2, '007A', '2020-12-01', 12, 'Dipinjam', '2020-12-22 21:13:30', '2020-12-22 21:13:30'),
(3, '007B', '2020-12-01', 12, 'Dipinjam', '2020-12-22 21:32:47', '2020-12-22 21:32:47'),
(4, '007B', '2020-12-01', 12, 'Dipinjam', '2020-12-22 21:36:40', '2020-12-22 21:36:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ulion Pardede', 'ulionpardede28@gmail.com', 'koordinator', '2020-12-18 23:57:09', '$2y$10$p4bdFiAuZhPkz5GwzsRLmebvqxfHid.xrUWjIHp1VdZTsHruyOZTi', NULL, '2020-12-18 23:57:09', '2020-12-18 23:57:09'),
(3, 'Ulion', 'albertopardede.ap@gmail.com', 'koordinator', '2020-12-19 03:07:33', '$2y$10$y4qIVRiRs4Ph6H/pcsfKFuISJHHH2K9j0y0si2oVajfveoefga6LK', NULL, '2020-12-19 03:07:33', '2020-12-19 03:07:33'),
(4, 'Ulion', 'asd@gmail.com', 'laboran', '2020-12-19 03:20:27', '$2y$10$IRGG37v/v91vmAKrLRE6SOSaROjCLPgYuW96sUZ8.vN4wesn7atwy', NULL, '2020-12-19 03:20:27', '2020-12-19 03:20:27'),
(53, 'Rifka Uli Siregar', 'rifka@gmail.com', 'koordinator', NULL, '$2y$10$Xd/0sAMjQ5/mnKHABiofleXGt.b29/uWLIt4mLm521U3ToOsjrR6u', NULL, '2020-12-22 17:01:10', '2020-12-22 17:01:10'),
(54, 'Rifka Uli Siregar', 'rifkaulisiregar@gmail.com', 'koordinator', NULL, '$2y$10$ENeaEWLoDts8R.ThJ7W4YeNX5TpM5v70f4VOCI3yJxINHSieBAbWi', NULL, '2020-12-22 18:00:37', '2020-12-22 18:00:37'),
(55, 'Ucok S.', 'ucok@gmail.com', 'koordinator', '2020-12-29 17:49:53', '$2y$10$V43FAhxl1uKI2KuwESSKfueJh1erF6YealDt93U1Au9aWlhyjl1oO', NULL, '2020-12-29 17:49:53', '2020-12-29 17:49:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
