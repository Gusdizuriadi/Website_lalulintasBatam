-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 09:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lalulintas`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `judul_artikel` longtext NOT NULL,
  `tanggal_posting` date NOT NULL,
  `deskripsi_artikel` longtext NOT NULL,
  `gambar_artikel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `kategori_id`, `jenis_id`, `judul_artikel`, `tanggal_posting`, `deskripsi_artikel`, `gambar_artikel`) VALUES
(1, 1, 4, 'Kecelakaan Lalulintas Ditiban Batam Kota', '2022-12-22', 'Sejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinar', 'gambar1.jpg'),
(4, 2, 3, 'Banyak Orang Stress Didunia Ini termasuk saya hehehe', '2022-12-23', 'Pengertian stress (stres) adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.\r\n\r\nKetika merasa terancam, sistem saraf merespons dengan melepaskan aliran hormon adrenalin dan kortisol.\r\n\r\nKedua hormon ini dapat memunculkan suatu reaksi pada tubuh Anda, antara lain jantung berdebar cepat, otot tubuh menegang, tekanan darah meningkat, dan bahkan napas jadi lebih cepat. Reaksi ini disebut “fight-or-flight” alias respons stres.\r\n\r\nDalam bentuk yang paling parahnya, tekanan psikologis serta fisik ini bisa bikin tubuh Anda menerima kekuatan tambahan untuk membela diri. Sebagai contoh, mendorong Anda untuk menginjak rem guna menghindari kecelakaan.\r\n\r\nSecara tidak langsung, tekanan psikologis dan fisik ini dapat membuat Anda berupaya menyelamatkan diri pada sesuatu yang mendesak dan berbahaya.\r\n\r\nNamun, jika kondisi tekanan psikologis ini berlangsung cukup lama dan berlangsung terus-menerus, ini bisa menyebabkan penyakit mental dan serta menyerang kesehatan fisik.\r\n\r\nSeberapa umumkah kondisi ini terjadi?\r\nStress (stres) adalah kondisi yang dihadapi semua orang dari waktu ke waktu. Bisa jadi satu kali dalam jangka pendek, bisa juga berulang kali dalam jangka panjang. Ini karena stres hadir dalam kehidupan Anda, meliputi:\r\n\r\nStres rutin terkait sekolah, stres karena lingkungan kerja yang buruk, masalah keluarga, dan tanggung jawab sehari-hari.\r\nStres terkait dengan perubahan negatif mendadak, seperti Anda atau pasangan kehilangan pekerjaan, mengalami perceraian, atau terkena penyakit tertentu.\r\nStres traumatis yang dialami akibat suatu peristiwa, seperti kecelakaan, bencana alam, atau penyerangan yang membuat seseorang berada dalam bahaya.\r\nNamun, setiap orang memiliki cara berbeda-beda dalam menghadapi stres sehingga beberapa orang bisa dengan cepat mengatasinya dan beberapa yang lain butuh waktu lama.\r\n\r\nJenis-jenis stress\r\nMenurut Medline Plus, berikut ini adalah 2 jenis utama dari stress (stres) yang umumnya diketahui:', 'gambar2.jpg'),
(9, 2, 4, 'bang ogy berasal dari belkang padang', '2022-12-26', '<p>dia anak yang baik</p>', 'bang ogy berasal dari belkang padang.jpg'),
(11, 1, 2, 'dsgsdhgsh', '2022-12-26', '<p>shshshsh</p>', 'dsgsdhgsh.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Truk'),
(2, 'Minibus'),
(3, 'Angkutan Umum'),
(4, 'Alat berat'),
(5, 'Roda dua');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Lalulintas'),
(2, 'Kesehatan'),
(3, 'Pengetahuan Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(11) NOT NULL,
  `nama_video` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `gambar_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(5) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin_lalulintasbatam@gmail.com', 'admin', NULL, '$2y$10$l6/FValNjCvtZ8g4PxpUvOAG.QDSu6MCqUucxiLlHOYDRVk1QQRQq', '1', NULL, '2022-12-08 19:04:28', '2022-12-08 19:04:28'),
(2, 'Operator', 'operator_lalulintasbatam@gmail.com', 'operator', NULL, '$2y$10$pqQn.AqxcijijnYq75mel.pqnW.abWMPBs07BGIFms9ASKcPrg8ZW', '2', NULL, '2022-12-08 19:04:28', '2022-12-08 19:04:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
