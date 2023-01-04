-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 10:21 AM
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
  `tag_id` int(11) NOT NULL,
  `jenis_berita_id` int(11) NOT NULL,
  `judul_artikel` longtext NOT NULL,
  `tanggal_posting` date NOT NULL,
  `deskripsi_artikel` longtext NOT NULL,
  `gambar_artikel` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `kategori_id`, `jenis_id`, `tag_id`, `jenis_berita_id`, `judul_artikel`, `tanggal_posting`, `deskripsi_artikel`, `gambar_artikel`, `status`) VALUES
(1, 1, 2, 3, 1, 'Kecelakaan Lalulintas Ditiban Batam Kota', '2022-12-22', '<p style=\"text-align: justify; \">Sejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya </p><p style=\"text-align: justify; \">memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinar Sejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinar Sejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. </p><p style=\"text-align: justify; \">“Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,”<b> ucap Darmaningtyas</b>, dalam webinar Sejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinarSejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinarSejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran.</p><p style=\"text-align: justify; \"> “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinarSejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinarSejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat T</p><p style=\"text-align: justify; \">ransportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinarSejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinarSejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dalam webinarSejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan.&nbsp;</p>', 'gambar1.jpg', 1),
(4, 1, 4, 4, 1, 'Banyak Orang Stress Didunia Ini termasuk saya', '2022-12-28', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\">Pe<b><span style=\"font-family: &quot;Source Sans Pro&quot;;\">ngertian</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\"> stress (stres)</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\"> adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.&nbsp;</span></b></span><b><span style=\"text-align: justify; font-family: &quot;Source Sans Pro&quot;;\">Pengertian stress (stres) adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.&amp;nbsp;&nbsp;</span><span style=\"text-align: justify; font-family: &quot;Source Sans Pro&quot;;\">Pengertian stress (stres) adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.&amp;nbsp;&nbsp;</span></b></p><p><span style=\"text-align: justify; font-family: &quot;Source Sans Pro&quot;;\"><br></span></p><p><img src=\"data:image/png;base64,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\" style=\"width: 215px;\" data-filename=\"avatar5.png\"><span style=\"text-align: justify; font-family: &quot;Source Sans Pro&quot;;\"><br></span></p><p><span style=\"text-align: justify; font-family: &quot;Source Sans Pro&quot;;\">Pengertian stress (stres) adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.&amp;nbsp;&nbsp;</span><span style=\"text-align: justify; font-family: &quot;Source Sans Pro&quot;;\">Pengertian stress (stres) adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.&amp;nbsp;&nbsp;</span><span style=\"text-align: justify; font-family: &quot;Source Sans Pro&quot;;\">Pengertian stress (stres) adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.&amp;nbsp;&nbsp;</span></p><p><span style=\"text-align: justify; font-family: &quot;Source Sans Pro&quot;;\">Pengertian stress (stres) adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.&amp;nbsp;&nbsp;</span><span style=\"text-align: justify;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Pengertian stress (stres) adalah sebuah tekanan psikologis dan fisik yang bereaksi ketika menghadapi situasi yang dianggap berbahaya. Dengan kata lain, stres merupakan cara tubuh Anda menanggapi jenis tuntutan, ancaman, atau tekanan apa pun.&amp;nbs</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">p;</span></span></p>', 'Banyak Orang Stress Didunia Ini termasuk saya.jpg', 1),
(9, 2, 4, 1, 1, 'bang ogy berasal dari belkang padang bang odari belkang', '2022-12-20', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,”</span><u style=\"font-size: 1rem;\"><b> ucap Darmaningtyas,</b></u><span style=\"font-size: 1rem;\"> dalam webinarSejumlah kesalahan yang dilakukan pengendara dapat memicu terjadinya kecelakaan di jalan. Kesalahan umumnya terjadi lantaran banyak pengendara mobil maupun sepeda motor terlalu egois. Pengamat Transportasi dan Ketua Advokasi&nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Masyarakat Transportasi Indonesia Ki Darmaningtyas mengatakan, kesalahan dalam berkendara terjadi lantaran pengendara hanya memiliki pengetahuan tanpa kesadaran. “Mentang-mentang pakai kendaraan sendiri sehingga menganggap jalan juga milik sendiri,” ucap Darmaningtyas, dlam webinar</span></div>', 'bang ogy berasal dari belkang padang bang odari belkang.jpg', 0),
(16, 3, 3, 1, 2, 'Tree Internetan Lebih Murah Dan Cepat', '2022-12-30', '<p><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">Definisi&nbsp;</span><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\"><b>Kecelakaan</b></span><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\"><b>&nbsp;Lalu Lintas.</b> Kecelakaan lalu lintas adalah suatu peristiwa di jalan yang tidak diduga dan tidak disengaja melibatkan kendaraan dengan atau tanpa pengguna jalan lain yang mengakibatkan korban manusia dan/atau kerugian harta benda (Undang-undang </span><span style=\"font-family: Roboto, sans-serif; font-size: 18px; background-color: rgb(255, 255, 0);\"><font color=\"#000000\">No. 22 Tahun 2009</font></span><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\"> tentang Lalu Lintas dan Angkutan jalan).</span></p><p><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">Definisi&nbsp;</span><span style=\"font-weight: 700; color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">Kecelakaan</span><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">&nbsp;Lalu Lintas. Kecelakaan lalu lintas adalah suatu peristiwa di jalan yang tidak diduga dan tidak disengaja melibatkan kendaraan dengan atau tanpa pengguna jalan lain yang mengakibatkan korban manusia dan/atau kerugian harta benda (Undang-undang No. 22 Tahun 2009 tentang Lalu Lintas dan Angkutan jalan).</span></p><p><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">Definisi&nbsp;</span><span style=\"font-weight: 700; color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">Kecelakaan</span><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">&nbsp;Lalu Lintas. Kecelakaan lalu lintas adalah suatu peristiwa di jalan yang tidak diduga dan tidak disengaja melibatkan kendaraan dengan atau tanpa pengguna jalan lain yang mengakibatkan korban manusia dan/atau kerugian harta benda (Undang-undang No. 22 Tahun 2009 tentang Lalu Lintas dan Angkutan jalan).</span></p><p><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">Definisi&nbsp;</span><span style=\"font-weight: 700; color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">Kecelakaan</span><span style=\"color: rgb(17, 17, 17); font-family: Roboto, sans-serif; font-size: 18px;\">&nbsp;Lalu Lintas. Kecelakaan lalu lintas adalah suatu peristiwa di jalan yang tidak diduga dan tidak disengaja melibatkan kendaraan dengan atau tanpa pengguna jalan lain yang mengakibatkan korban manusia dan/atau kerugian harta benda (Undang-undang No. 22 Tahun 2009 tentang Lalu Lintas dan Angkutan jalan).</span><br></p>', 'Tree Internetan Lebih Murah Dan Cepat.jpg', 1),
(17, 1, 2, 4, 2, 'ysagasfsa sagfai fgs fasfgaigfiaugfaiufsgsgfgfaugfiagfiuagfigfu', '2023-01-04', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 102, 102); font-family: AVENIR, Helvetica, Arial, Lucida, sans-serif;\">Hallo teman teman balik lagi dengan saya Ismet Maulana kali ini saya ingin berbagi pengetahuan tentang Bagaimana&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-weight: 700;\">Menampilkan Data Yang Berstatus Aktif Menggunakan PHP &amp; MySQL,&nbsp;</span>banyak yah website website yang menampilkan data yang berstatus aktif saja, kita tidak bisa bayangkan jika semua statusnya aktif maka akan banyak sekali yang tampil di halaman website baik itu yang berguna maupun tidak sama sekali nah makanya disini kita membuatnya<span id=\"more-1616\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\"></span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 102, 102); font-family: AVENIR, Helvetica, Arial, Lucida, sans-serif;\">menggunakan status jadi hanya yang berstatus aktif saja yang akan di tampilkan di halama website, sebagai contoh seperti pada halaman komentar kita beri status agar meminimalisir komen komen yang tidak penting berikut saya akan ajarkan tentang cara pembuatannya, teman teman siapkan sebuah databases dengan fieldnya bebas ada penambahan pada fieldnya bernama status dengan type data INT(1) oke langsung saja tidak perlu berlama lama, caranya sangat amadlah mudah sekali teman teman bisa salinkan scriptnya dibawah sini :</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 102, 102); font-family: AVENIR, Helvetica, Arial, Lucida, sans-serif;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 102, 102); font-family: AVENIR, Helvetica, Arial, Lucida, sans-serif;\"><img src=\"data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QMqaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjUtYzAxNCA3OS4xNTE0ODEsIDIwMTMvMDMvMTMtMTI6MDk6MTUgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0Q2NTk5NjExRTRDMTFFNTk4MDA5NzRDOEI2NDRGMEYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0Q2NTk5NjIxRTRDMTFFNTk4MDA5NzRDOEI2NDRGMEYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDRDY1OTk1RjFFNEMxMUU1OTgwMDk3NEM4QjY0NEYwRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDRDY1OTk2MDFFNEMxMUU1OTgwMDk3NEM4QjY0NEYwRiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEB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\" style=\"width: 200px;\" data-filename=\"style-2.jpg\"></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 102, 102); font-family: AVENIR, Helvetica, Arial, Lucida, sans-serif;\"><a href=\"https://www.youtube.com/watch?v=EvcsrxjkYdY\" target=\"_blank\">YOUTUBE</a><br></p>', 'ysagasfsa sagfai fgs fasfgaigfiaugfaiufsgsgfgfaugfiagfiuagfigfu.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iklan`
--

CREATE TABLE `tbl_iklan` (
  `id_iklan` int(11) NOT NULL,
  `nama_iklan` mediumtext NOT NULL,
  `link_iklan` mediumtext NOT NULL,
  `gambar_iklan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_iklan`
--

INSERT INTO `tbl_iklan` (`id_iklan`, `nama_iklan`, `link_iklan`, `gambar_iklan`) VALUES
(1, 'Youtube', 'https://www.youtube.com/', 'Youtube.png'),
(3, 'Html', 'https://www.youtube.com/@PadangTekno', 'Html.jpg');

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
-- Table structure for table `tbl_jenis_berita`
--

CREATE TABLE `tbl_jenis_berita` (
  `id_jenis_berita` int(11) NOT NULL,
  `nama_jenis_berita` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jenis_berita`
--

INSERT INTO `tbl_jenis_berita` (`id_jenis_berita`, `nama_jenis_berita`) VALUES
(1, 'Terkini'),
(2, 'Trending');

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
(3, 'Pengetahuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(255) NOT NULL,
  `deskripsi_profil` longtext NOT NULL,
  `visi_misi` mediumtext NOT NULL,
  `gambar_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `nama_profil`, `deskripsi_profil`, `visi_misi`, `gambar_profil`) VALUES
(1, 'LalulintasBatam.com', 'lalulintasbatam.com menjadi media online terkemuka yang menyediakan informasi mengenai lalu lintas di batam.', '<div style=\"text-align: justify; \"><b>visi&nbsp; :</b></div><div style=\"text-align: justify;\">- lalulintasbatam.com menjadi media online terkemuka yang menyediakan informasi mengenai lalu lintas di batam.</div><div style=\"text-align: justify;\"><b><br></b></div><div style=\"text-align: justify;\"><b>misi :</b></div><div style=\"text-align: justify;\">- Memberikan informasi secara online berdasarkan fakta dilapangan yang ada.</div><div style=\"text-align: justify;\">- Mengembangkan basis pengetahuan masyarakat terhadap daerah</div><div style=\"text-align: justify;\">- Mengembangkan SDM dan teknologi informasi dengan menerapkan sistem yang bermutu</div>', 'LalulintasBatam.com.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `id_tag` int(11) NOT NULL,
  `nama_tag` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tag`
--

INSERT INTO `tbl_tag` (`id_tag`, `nama_tag`) VALUES
(1, '#Qatarfifaworldcup2023'),
(3, '#Viralselingkuh'),
(4, '#MalamTahunBaru2023');

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
-- Indexes for table `tbl_iklan`
--
ALTER TABLE `tbl_iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_jenis_berita`
--
ALTER TABLE `tbl_jenis_berita`
  ADD PRIMARY KEY (`id_jenis_berita`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`id_tag`);

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
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_iklan`
--
ALTER TABLE `tbl_iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_jenis_berita`
--
ALTER TABLE `tbl_jenis_berita`
  MODIFY `id_jenis_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
