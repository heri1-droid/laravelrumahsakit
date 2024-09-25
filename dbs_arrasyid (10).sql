-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 05:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_arrasyid`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Hari Kemerdekaan', 'hari-senin', '1725234497.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p><span style=\"color: rgb(71, 71, 71); font-family: Arial, sans-serif;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.<br></span><span style=\"color: rgb(71, 71, 71); font-family: Arial, sans-serif;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</span><br></p>\n', '2024-08-31 21:01:38', '2024-09-01 16:48:46'),
(2, 'Promo Kemerdekaan', 'promo-kemerdekaan', '1725252271.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<span style=\"color: rgb(71, 71, 71); font-family: Arial, sans-serif;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is availabl<br><span style=\"color: rgb(71, 71, 71); font-family: Arial, sans-serif;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is availabl<br></span><span style=\"color: rgb(71, 71, 71); font-family: Arial, sans-serif;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is availabl</span><span style=\"color: rgb(71, 71, 71); font-family: Arial, sans-serif;\"><br></span></span>\n', '2024-09-01 21:44:31', '2024-09-01 21:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `spesialis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `nama`, `foto`, `desc`, `spesialis`, `created_at`, `updated_at`) VALUES
(1, 'Heriyanto', '1725234615.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Dr. Heriyanto adalah seorang dokter spesialis penyakit dalam dengan pengalaman luas dalam mendiagnosis dan mengobati berbagai kondisi medis yang melibatkan organ-organ internal tubuh. Beliau lulus dari Fakultas Kedokteran Universitas [Nama Universitas] dan menyelesaikan pendidikan spesialisasi di [Nama Rumah Sakit/Institusi].</p>\n', 'Penyakit Dalam', '2024-09-01 02:57:43', '2024-09-01 16:50:15'),
(2, 'Heri Sp.BO', '1725236197.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Lorem Ipsum</p>\n', 'Orthopedi', '2024-09-01 16:51:30', '2024-09-01 17:16:37'),
(4, 'nopek', '1725251858.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Lorem ipsum</p>\n', 'Jantung', '2024-09-01 21:37:39', '2024-09-01 21:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedules`
--

CREATE TABLE `doctor_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_schedules`
--

INSERT INTO `doctor_schedules` (`id`, `doctor_id`, `day`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(3, 1, 'Senin', '06:51:00', '07:50:00', '2024-09-01 16:50:15', '2024-09-01 16:50:15'),
(4, 1, 'Kamis', '09:50:00', '11:50:00', '2024-09-01 16:50:15', '2024-09-01 16:50:15'),
(11, 4, 'Senin', '12:38:00', '14:38:00', '2024-09-01 21:38:19', '2024-09-01 21:38:19');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_22_160806_create_beritas_table', 1),
(6, '2024_08_24_143013_create_doctors_table', 1),
(7, '2024_08_24_143302_create_doctor_schedules_table', 1),
(8, '2024_08_25_060614_create_pesans_table', 1),
(9, '2024_08_28_080000_create_pelayanans_table', 1);

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
-- Table structure for table `pelayanans`
--

CREATE TABLE `pelayanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelayanans`
--

INSERT INTO `pelayanans` (`id`, `layanan`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Non Medis', 'non-medis', '1725179087.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p><br><p style=\"text-align: justify; \">Kami juga menyediakan berbagai layanan non-medis untuk mendukung kenyamanan dan kepuasan pasien serta keluarga selama berada di rumah sakit. Layanan ini mencakup administrasi pendaftaran, layanan informasi, pengelolaan janji temu, layanan kebersihan, serta fasilitas pendukung seperti kantin, tempat ibadah, dan area parkir. Kami berkomitmen untuk menciptakan lingkungan yang nyaman, aman, dan ramah bagi setiap pasien dan pengunjung. Layanan non-medis kami dirancang untuk melengkapi pengalaman perawatan Anda dengan perhatian penuh terhadap kebutuhan Anda di luar aspek medis.</p><p><br></p><table class=\"table table-bordered\" style=\"background-color: rgb(255, 255, 255); --bs-table-color: var(--bs-body-color); --bs-table-bg: var(--bs-body-bg); --bs-table-border-color: var(--bs-border-color); --bs-table-accent-bg: transparent; --bs-table-striped-color: var(--bs-body-color); --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: var(--bs-body-color); --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: var(--bs-body-color); --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1118.4px;\"><tbody><tr style=\"border-width: var(--bs-border-width) 0;\"><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><span style=\"font-weight: 700;\"><span style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Ruang Administrasi&nbsp;</span><br></span></p><p><span style=\"font-weight: 700;\">Rumah Sakit</span></p><p><span style=\"font-weight: 700;\">Umum Ar Rasyid</span></p><ul><li>Bagian Keuangan</li><li>Bagian tata usaha dan kepegawaian</li></ul><div><br></div></td><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><img data-filename=\"Picture28.jpg\" src=\"http://127.0.0.1:8000/storage/content-layanan/2cc77e_1725179087.jpeg\" class=\"img-responsive\" style=\"height: 133.825px; width: 247.821px;\"><br></p></td></tr><tr style=\"border-width: var(--bs-border-width) 0;\"><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><span style=\"font-weight: 700;\"><span style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Ruang Verifikasi&nbsp;</span><br></span></p><p><span style=\"font-weight: 700;\">BPJS Kesehatan</span></p><ul><li>Bagian Verifikator</li><li>Bagian Coding</li><li>Bagian Entry Data</li></ul><div><br></div></td><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><img data-filename=\"Picture29.jpg\" src=\"http://127.0.0.1:8000/storage/content-layanan/512ecf_1725179087.jpeg\" class=\"img-responsive\" style=\"height: 152.607px; width: 202.775px;\"><br></p></td></tr><tr style=\"border-width: var(--bs-border-width) 0;\"><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><span style=\"font-weight: 700;\">Ruang Gizi</span></td><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><img data-filename=\"Picture30.jpg\" src=\"http://127.0.0.1:8000/storage/content-layanan/4246f2_1725179087.jpeg\" class=\"img-responsive\" style=\"height: 123.059px; width: 211.125px;\"><br></p></td></tr><tr style=\"border-width: var(--bs-border-width) 0;\"><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><span style=\"font-weight: 700; background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Ambulance</span></p><ul><li>Brankar&nbsp;</li><li>Wastafel&nbsp;</li><li>Oksigen tabung kecil</li><li>Apar&nbsp;</li><li>Lampu sirene</li></ul><div><br></div></td><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><img data-filename=\"Picture31.jpg\" src=\"http://127.0.0.1:8000/storage/content-layanan/b94921_1725179087.jpeg\" class=\"img-responsive\" style=\"height: 128.535px; width: 237.475px;\"><br></p></td></tr></tbody></table><p>\r\n\r\n                    </p></p>\n', '2024-09-01 01:24:48', '2024-09-01 01:35:34'),
(2, 'Farmasi', 'farmasi', '1725171466.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<h6 style=\"text-align: justify;\" class=\"\"><br><h6 style=\"text-align: justify;\" class=\"\">Kami menyediakan layanan farmasi yang lengkap dan terpercaya, dengan berbagai pilihan obat yang tersedia untuk memenuhi kebutuhan Anda. Didukung oleh tenaga apoteker yang berpengalaman, kami siap memberikan konsultasi dan memastikan Anda mendapatkan obat yang tepat sesuai resep dan kondisi kesehatan Anda. Komitmen kami adalah memberikan pelayanan yang cepat, aman, dan efisien untuk mendukung proses penyembuhan Anda. Percayakan kebutuhan obat Anda kepada layanan farmasi kami.</h6><p style=\"text-align: justify;\"><br></p><table class=\"table table-bordered\"><tbody><tr><td><p><img data-filename=\"Picture1.jpg\" style=\"width: 254.2px; height: 167.006px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/617d4c_1725171829.jpeg\" class=\"img-responsive\"><br></p><p><span style=\'font-size:11.0pt;line-height:115%;\r\nfont-family:\"Times New Roman\",serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\r\nminor-latin;mso-ansi-language:IN;mso-fareast-language:EN-US;mso-bidi-language:\r\nAR-SA\'>Ruang Pembelian Obat</span></p></td><td><p><img data-filename=\"Picture2.jpg\" style=\"width: 246.688px; height: 184.917px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/0295e7_1725171830.jpeg\" class=\"img-responsive\"><br></p><p>Ruang Racikan</p></td></tr></tbody></table><h6 style=\"text-align: justify;\" class=\"\"><br></h6><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><br></p></h6>\n', '2024-08-31 23:17:46', '2024-08-31 23:24:52'),
(3, 'Penunjang Medis', 'penunjang-medis', '1725172301.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>                        \r\n<div><div><br></div><div><div style=\"text-align: justify;\">Kami menyediakan berbagai layanan penunjang medis yang lengkap untuk mendukung diagnosis dan perawatan pasien secara akurat dan efisien. Dengan peralatan canggih dan tenaga ahli di bidang radiologi, laboratorium, dan diagnostik, kami berkomitmen memberikan hasil yang cepat dan terpercaya. Layanan penunjang medis kami meliputi pemeriksaan laboratorium, radiologi, ultrasonografi, dan berbagai tes diagnostik lainnya. Keakuratan dan kecepatan layanan kami membantu dokter dalam menentukan langkah pengobatan terbaik untuk Anda.</div><div><br></div><ul><li><img data-filename=\"Picture3.jpg\" src=\"http://127.0.0.1:8000/storage/content-layanan/77bb38_1725172538.jpeg\" class=\"img-responsive\" style=\"height: 282.728px; width: 242px;\"><br><br></li></ul><table class=\"table table-bordered\" style=\"background-color: rgb(255, 255, 255); --bs-table-color: var(--bs-body-color); --bs-table-bg: var(--bs-body-bg); --bs-table-border-color: var(--bs-border-color); --bs-table-accent-bg: transparent; --bs-table-striped-color: var(--bs-body-color); --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: var(--bs-body-color); --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: var(--bs-body-color); --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1118.4px;\"><tbody><tr style=\"border-width: var(--bs-border-width) 0;\"><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><span style=\'font-family: \"Times New Roman\";\'><span style=\"font-weight: 700;\">Radiologi</span></span><ul style=\"margin-bottom: 0px;\"><li><font face=\"Times New Roman\">Konvensional X-Ray&nbsp;</font></li></ul><ul style=\"margin-bottom: 0px;\"><li>Film Viewer</li></ul><ul style=\"margin-bottom: 0px;\"><li>Automatic Processing</li></ul><ul style=\"margin-bottom: 0px;\"><li>Film Maker</li></ul><ul style=\"margin-bottom: 0px;\"><li>Apron</li></ul><ul style=\"margin-bottom: 0px;\"><li>Viewing Box</li></ul><ul style=\"margin-bottom: 0px;\"><li>Komputer Set</li></ul></td><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><span style=\"font-weight: 700;\">Radiologi melayani&nbsp;</span><br>1. Thorax<br>2. Lumbosacral<br>3. Thoracolumbal<br>4. BNO<br>5. Cervical<br>6. Cranium<br>7. Pelvis&nbsp;<br>8. Extrimitas Atas<br>&nbsp;- Manus&nbsp;<br>&nbsp;- Wrist Joint<br>&nbsp;- Antebrachi<br>&nbsp;- Elbow&nbsp;<br>&nbsp;- Humerus<br>&nbsp;- Shoulder Joint<br>&nbsp;- Clavicula&nbsp;<br>&nbsp;- Scapula 9. Extrimitas Bawah<br>&nbsp;- Pedis&nbsp;<br>&nbsp;- Angkle Joint<br>&nbsp;- Calcaneus&nbsp;<br>&nbsp;- Cruris&nbsp;<br>&nbsp;- Genu<br>&nbsp;- Femur<br>&nbsp;- Hip Joint<br>10. USG<br>&nbsp;- USG Abdomen&nbsp;<br>&nbsp;- USG TUG<br></td></tr><tr style=\"border-width: var(--bs-border-width) 0;\"><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><div><font face=\"Times New Roman, serif\"><div>Laboratorium</div><div>-&nbsp; &nbsp;Sink Laboratorium</div><div>-&nbsp; &nbsp;Mikroskop</div><div>-&nbsp; &nbsp;Rak untuk perawatan</div><div>-&nbsp; &nbsp;Refrigerator</div><div>-&nbsp; &nbsp;Sentrifus</div><div>-&nbsp; &nbsp;Mikropipet</div><div>-&nbsp; &nbsp;Bunsen</div><div>-&nbsp; &nbsp;Peralatan Gelas</div><div>-&nbsp; &nbsp;Sysmex KX 21</div><div>-&nbsp; &nbsp;Peralatan LED</div><div>-&nbsp; &nbsp;Spektrofotometer</div><div>-&nbsp; &nbsp;Easylyte Plus</div><div>-&nbsp; &nbsp;Combostik R- 300</div><div><br></div></font></div></td><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><img data-filename=\"Picture4.jpg\" src=\"http://127.0.0.1:8000/storage/content-layanan/274aad_1725174284.jpeg\" class=\"img-responsive\" style=\"height: 193.153px; width: 291.837px;\"></p><p><br></p><p><br></p><p><br></p></td></tr></tbody></table></div><div><h4 style=\"text-align: center; \" class=\"\"><b><span style=\'font-family:\"Times New Roman\",serif;mso-ansi-language:IN\'>Laboratorium\r\nmelayani&nbsp;</span></b></h4><table class=\"table table-bordered\" style=\"text-align: left;\"><tbody><tr><td><p style=\"text-align: left; \"><span style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\"><b>1.Hematologi&nbsp;</b></span><br></p><p style=\"text-align: left;\">-Darah Rutin&nbsp;</p><p style=\"text-align: left;\">(Hb, Leu, Erit, LED, Hitung Jenis, Trombosit, HT, MCV, MCH, MCHC)</p><p style=\"text-align: left;\">-Gol. Darah / Rhesus</p><p style=\"text-align: left;\"><b>2.Hemostasis&nbsp;</b></p><p style=\"text-align: left;\">-Waktu Pendarahan</p><p style=\"text-align: left;\">-Waktu Pembekuan</p><p style=\"text-align: left;\"><b>3.Urinalisa&nbsp;</b></p><p style=\"text-align: left;\">-Urine Lengkap</p><p style=\"text-align: left;\">-Protein&nbsp;</p><p style=\"text-align: left;\"><b>4.Fungsi Ginjal</b></p><p style=\"text-align: left;\">-Ureum&nbsp;</p><p style=\"text-align: left;\">-Creatinine&nbsp;</p><p style=\"text-align: left;\">-Unc Acid / Asam Urat</p><p style=\"text-align: left;\"><b>5.Profil Lipid</b></p><p style=\"text-align: left;\">-Total Kolesterol</p><p style=\"text-align: left;\">-HDL Kolesterol</p><p style=\"text-align: left;\">-LDL Kolesterol</p><p style=\"text-align: left;\"><br></p><h4 class=\"\"><b>Layanan Fisioterapi</b></h4><p>- Tumbah Kembang Anak</p><p>- Fisioterapi Kesehatan Wanita</p><p>&nbsp; Fisioterapi Lanjut Usia</p><p>- Fisioterapi Olahraga</p><p>- Fisioterapi Muskuloskeletal</p></td><td><p style=\"text-align: left;\"><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); font-family: inherit;\">6.Elektrolit</b><br></p><p style=\"text-align: left;\">-Natrium&nbsp;</p><p style=\"text-align: left;\">-Kalium&nbsp;</p><p style=\"text-align: left;\">-Clorida&nbsp;</p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><b>7.Tes Gula Darah</b></p><p style=\"text-align: left;\">-Glukosa sewaktu /BSS</p><p style=\"text-align: left;\"><b>8.Serologi&nbsp;</b></p><p style=\"text-align: left;\">-Widal&nbsp;</p><p style=\"text-align: left;\">-CRP</p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><b>9.Mikrobiologi&nbsp;</b></p><p style=\"text-align: left;\">-BTA 3 X</p><p style=\"text-align: left;\">Fisioterapi</p><p style=\"text-align: left;\">-Micro Wafe Diathermy</p><p style=\"text-align: left;\">-Tens</p><p style=\"text-align: left;\">-Ultrasound</p><div style=\"text-align: left;\"><br></div><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><img data-filename=\"Picture5.jpg\" style=\"width: 368.667px; height: 254.817px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/856953_1725175057.jpeg\" class=\"img-responsive\"><br></p></td></tr></tbody></table><br><output class=\"note-status-output\" role=\"status\" aria-live=\"polite\"></output><output class=\"note-status-output\" role=\"status\" aria-live=\"polite\"></output><output class=\"note-status-output\" role=\"status\" aria-live=\"polite\"></output><output class=\"note-status-output\" role=\"status\" aria-live=\"polite\"></output><output class=\"note-status-output\" role=\"status\" aria-live=\"polite\"></output></div></div><p></p><p></p><p></p><p></p><p></p></p>\n', '2024-08-31 23:31:41', '2024-09-01 00:18:21'),
(4, 'Bedah', 'bedah', '1725176442.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<div><br><div><span style=\"text-align: justify;\">Layanan bedah kami menawarkan berbagai prosedur bedah, mulai dari bedah umum hingga bedah spesialis, dengan standar keselamatan dan kualitas tertinggi. Didukung oleh tim bedah yang berpengalaman dan fasilitas operasi yang modern, kami berkomitmen untuk memberikan perawatan terbaik dan memastikan setiap pasien mendapatkan penanganan yang optimal. Kami mengutamakan keselamatan, kenyamanan, dan kesembuhan pasien melalui prosedur bedah yang terencana dan tepat. Percayakan kebutuhan bedah Anda kepada tim ahli kami untuk hasil yang aman dan efektif.</span></div><div><br></div><p></p><p></p><table class=\"table table-bordered\"><tbody><tr><td><ul></ul><div><div><b>Kamar Bedah</b></div><div>-Section Cesaria</div><div>-Laporatomy Set</div><div>-Minor set</div><div>-Mayor set</div><div>-Kuretase set</div><div>-Mesin anastesi</div><div>-Lamp Operasi Mobile</div><div>-Lamp Operasi Dayken</div><div>-Meja Operasi Elektrik</div><div>-Meja Operasi Manual</div><div>-Auto clave basah</div><div>-Auto clave kering</div></div><div><br></div><p><br></p></td><td><p><img data-filename=\"Picture6.jpg\" style=\"width: 214.075px; height: 167.228px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/3b9cc5_1725176405.jpeg\" class=\"img-responsive\"></p><p><img data-filename=\"Picture9.jpg\" style=\"width: 215.513px; height: 170.426px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/52a5b0_1725176405.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><span style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\"><b>Kamar Bersalin (VK)</b></span><br></p><ul><li>Set partus</li><li>Set minor surgery</li><li>Doppler</li><li>Tensimeter</li><li>timbangan bayi</li><li>lampu periksa</li><li>stand infus</li><li>O2 set</li><li>infus set</li><li>gunting tali pusat</li><li>klem tali pusat</li><li>sarung tangan</li><li>celemek plastik</li><li>-kasa dan kapas</li><li>duk</li><li>stetoskop</li><li>resusitasi set bayi</li><li>Infarm Warmer</li><li>Tempat tidur bayi</li><li>Timbangan bayi</li><li>ganti popok bayi</li><li>Sterilisator</li><li>Bed Ginekologi</li></ul></td><td><p><img data-filename=\"Picture7.jpg\" style=\"width: 218.837px; height: 123.526px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/fe7a65_1725176405.jpeg\" class=\"img-responsive\"></p><p><br></p><p><br></p></td></tr><tr><td><p class=\"MsoNoSpacing\"><span style=\'font-family:\"Times New Roman\",serif;\r\nmso-ansi-language:IN\'><b>Perinatal</b></span></p><p class=\"MsoNoSpacing\"><font face=\"Times New Roman, serif\">Incubator</font></p><p class=\"MsoNoSpacing\"><font face=\"Times New Roman, serif\">Infus set</font></p><p class=\"MsoNoSpacing\"><font face=\"Times New Roman, serif\">Stetoskop</font></p><p class=\"MsoNoSpacing\"></p><p class=\"MsoNoSpacing\"><font face=\"Times New Roman, serif\">Timbangan</font></p></td><td><p><img data-filename=\"Picture8.jpg\" style=\"width: 162.6px; height: 121.761px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/759fe6_1725176405.jpeg\" class=\"img-responsive\"><br></p></td></tr></tbody></table><p>                \r\n                </p></div>\n', '2024-09-01 00:40:05', '2024-09-01 01:33:50'),
(5, 'Rawat Inap', 'rawat-inap', '1725177150.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p><p style=\"text-align: justify; \"><br></p><p style=\"text-align: justify; \">Layanan rawat inap kami&nbsp; memberikan kenyamanan dan perawatan terbaik bagi pasien selama proses penyembuhan. Dengan fasilitas kamar yang nyaman dan tim medis yang siap sedia 24 jam, kami memastikan setiap pasien mendapatkan perhatian dan perawatan yang menyeluruh. Layanan rawat inap kami mencakup pemantauan kesehatan yang intensif, dukungan medis yang berkualitas, serta pelayanan yang ramah dan profesional. Kami berkomitmen untuk mendukung kesembuhan Anda dengan lingkungan yang aman dan tenang.</p><p style=\"text-align: justify; \"><br></p><table class=\"table table-bordered\"><tbody><tr><td><p><span style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\"><b>VIP</b></span><br></p><ul><li>1 Tempat Tidur</li><li>TV LED</li><li>Lemari Pakaian&nbsp;</li><li>Sofa panjang</li><li>AC</li><li>Meja + kursi rotan</li><li>Meja makan</li><li>Dispenser</li><li>Karpet</li><li>Kaca</li><li>Jumlah Ruang VIP&nbsp;</li><li>Sebanyak 4 Bed</li></ul></td><td><p><img data-filename=\"Picture10.jpg\" style=\"width: 257.125px; height: 185.897px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/9f6953_1725177150.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Kelas I A</b><br></p><ul><li>1 Tempat Tidur</li><li>TV LED</li><li>Lemari Pakaian</li><li>Sofa putar</li><li>AC</li><li>Meja + kursi plastik</li><li>Dispenser</li><li>Karpet</li><li>Kaca</li><li><span style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Jumlah Ruang&nbsp; I A&nbsp;</span><br></li><li>Sebanyak 4 Bed</li></ul><div><br></div><p><br></p></td><td><p><img data-filename=\"Picture11.jpg\" style=\"width: 263.611px; height: 176.587px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/62cfa5_1725177150.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\'font-family: \"Times New Roman\", serif; background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\'>Kelas I B</b><br></p><ul><li><span style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:IN;mso-fareast-language:IN\'>&nbsp;2</span><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;mso-bidi-theme-font:minor-bidi;\r\nmso-fareast-language:IN\'> Tempat Tidur<p></p></span></li><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>TV LED<p></p></span></li><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>Lemari </span><span style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:IN\'>Kabinet<p></p></span></li><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>AC<p></p></span></li><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>Meja + kursi lastic<p></p></span></li><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>Kaca</span><span style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:IN\'><p></p></span></li><li><span style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:IN\'>&nbsp;</span><span style=\'font-family: \"Times New Roman\", serif; background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\'>Jumlah Ruang I B</span></li><li>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<span style=\'font-size:11.0pt;line-height:115%;font-family:\"Times New Roman\",serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-theme-font:\r\nminor-bidi;mso-ansi-language:IN;mso-fareast-language:EN-US;mso-bidi-language:\r\nAR-SA\'>Sebanyak<b> 8 Bed</b>.</span><br></li></ul></td><td><p><img data-filename=\"Picture12.jpg\" style=\"width: 267.111px; height: 176.264px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/18ff4b_1725177150.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p class=\"MsoNoSpacing\"><b><span style=\'font-family:\"Times New Roman\",serif;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:IN\'>Kelas II A<p></p></span></b></p>\r\n\r\n<ul><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>2 Tempat Tidur<p></p></span></li></ul>\r\n\r\n<ul><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>Lemari kabinet<p></p></span></li></ul>\r\n\r\n<ul><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>Kursi palstik<p></p></span></li></ul>\r\n\r\n<ul><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>Meja<p></p></span></li></ul>\r\n\r\n<ul><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>Kaca<p></p></span></li></ul>\r\n\r\n<ul><li><span lang=\"EN-US\" style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi\'>AC</span><span style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:IN\'><p></p></span></li></ul>\r\n\r\n\r\n\r\n<ul><li><span style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:IN\'>&nbsp;</span><span style=\'font-family: \"Times New Roman\", serif; background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\'>Jumlah Ruang II A</span></li><li><span style=\'font-family:\"Times New Roman\",serif;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:IN\'>Sebanyak <b>8 Bed</b>.<p></p></span></li></ul></td><td><p><img data-filename=\"Picture13.jpg\" style=\"width: 271.931px; height: 178.548px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/9bf04c_1725177151.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Kelas II B</b><br></p><ul><li>3 Tempat Tidur</li><li>Lemari kabinet</li><li>Kursi palstik</li><li>Meja</li><li>Kaca</li><li>AC</li><li>Jumlah Ruang II B</li><li>Sebanyak 12 Bed.</li></ul></td><td><p><img data-filename=\"Picture14.jpg\" style=\"width: 262.009px; height: 188.375px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/d0cff9_1725177151.jpeg\" class=\"img-responsive\"><br></p></td></tr></tbody></table><table class=\"table table-bordered\" style=\"background-color: rgb(255, 255, 255); --bs-table-color: var(--bs-body-color); --bs-table-bg: var(--bs-body-bg); --bs-table-border-color: var(--bs-border-color); --bs-table-accent-bg: transparent; --bs-table-striped-color: var(--bs-body-color); --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: var(--bs-body-color); --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: var(--bs-body-color); --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1666.22px;\"><tbody><tr style=\"border-width: var(--bs-border-width) 0;\"><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><span style=\"font-weight: 700;\">Kelas III</span></p><ul><li>2 Tempat Tidur</li><li>Lemari kabinet</li><li>Kursi palstik</li><li>Kipas</li><li>Jumlah Ruang II B</li><li>Sebanyak 16 Bed.</li></ul><p><br></p><p><br></p><p><br></p></td><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><img data-filename=\"Picture15.jpg\" style=\"width: 253.694px; height: 185.882px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/12de86_1725177151.jpeg\" class=\"img-responsive\"></p></td></tr></tbody></table><p style=\"text-align: justify; \"><br></p><p></p></p>\n', '2024-09-01 00:52:31', '2024-09-01 00:52:31'),
(6, 'Rawat Jalan', 'rawat-jalan', '1725178326.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<div style=\"text-align: justify;\"><br><div style=\"text-align: justify;\"><div><span style=\"background-color: var(--bs-card-bg); color: var(--bs-body-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Layanan rawat jalan kami menyediakan berbagai fasilitas medis untuk konsultasi, diagnosis, dan perawatan tanpa perlu menginap di rumah sakit. Dengan dukungan dokter spesialis dan tenaga medis berpengalaman, kami menawarkan layanan yang cepat, efisien, dan terfokus pada kebutuhan pasien. Rawat jalan kami mencakup berbagai poliklinik dengan jadwal fleksibel, sehingga memudahkan Anda untuk mendapatkan perawatan yang diperlukan. Kami berkomitmen untuk memberikan layanan yang nyaman dan berkualitas tinggi guna mendukung kesehatan Anda.</span></div><div><span style=\"background-color: var(--bs-card-bg); color: var(--bs-body-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><br></span></div><div><span style=\"background-color: var(--bs-card-bg); color: var(--bs-body-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><br></span></div></div><table class=\"table table-bordered\"><tbody><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli Umum</b><br></p><ul><li>Rungan Poli Umum = 4 x 4 meter</li><li>&nbsp;Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Lemari Alat</li><li>Stestoskop</li><li>Set Diagnostic</li><li>Reflek Hammer</li><li>Senter</li><li>Timbangan TB dan BB&nbsp;</li><li>Pen Light</li></ul></td><td><p><img data-filename=\"Picture16.jpg\" style=\"width: 226.862px; height: 194.631px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/6c4e96_1725178326.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli Kebidanan dan Kandungan</b><br></p><ul><li>Rungan Poli Umum = 4 x 4 meter</li><li>Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Lemari Alat</li><li>USG</li><li>Tensimeter</li><li>Stetoskop&nbsp;</li><li>Timbangan ibu</li><li>Lampu Pemeriksaan</li><li>Termometer&nbsp;</li></ul></td><td><p><img data-filename=\"Picture17.jpg\" style=\"width: 232.938px; height: 201.045px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/b74a86_1725178326.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli Mata</b><br></p><ul><li><li>Rungan Poli Umum = 4 x 4 meter</li><li>Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Lemari Alat</li><li>Slitlamp</li><li>Lensa dan kaca&nbsp;</li><li>mata coba tes</li><li>Kartu snellen</li><li>Streak retinoskopi</li><li>Tonometger schiotz</li><li>Buku ischihara 14 plate</li><li>Opyhalmoskop&nbsp;</li></ul></td><td><p><img data-filename=\"Picture18.jpg\" style=\"width: 226.938px; height: 195.867px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/faac07_1725178326.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli Bedah</b><br></p><ul><li>Rungan Poli Umum = 4 x 4 meter</li><li>Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Stetoskop</li><li>Lampu senter</li><li>Anaskopi&nbsp;</li><li>Tensimeter&nbsp;</li><li>Minor Surgery</li><li>Set Diagnostic</li><li>Set Treatment</li><li>Termometer&nbsp;</li><li>Reflek Hammer</li><li>Examination Lamp</li></ul></td><td><p><img data-filename=\"Picture19.jpg\" style=\"width: 234.212px; height: 188.963px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/ef01af_1725178326.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli Syaraf</b><br></p><ul><li>Rungan Poli Umum = 4 x 4 meter</li><li>Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Lemari Alat</li><li>Reflex Hammer</li><li>Stetoskop</li><li>Set diagnostic syaraf</li></ul><div><br></div></td><td><p><img data-filename=\"Picture20.jpg\" style=\"width: 235.587px; height: 179.874px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/f4d952_1725178326.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli Penyakit Dalam</b><br></p><ul><li>Rungan Poli Umum = 4 x 4 meter</li><li>Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Lemari Alat</li><li>Timbangan TB dan BB</li><li>Set Diagnostik</li><li>Stetoskop&nbsp;</li><li>Tensimeter&nbsp;</li><li>Termometer&nbsp;</li><li>Reflex hammer</li><li>Film viewer</li></ul><div><br></div></td><td><p><img data-filename=\"Picture21.jpg\" style=\"width: 234.662px; height: 185.041px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/774a22_1725178327.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli THT-KL</b><br></p><ul><li>Rungan Poli Umum = 4 x 4 meter</li><li>Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Lemari Alat</li><li>ENT unit</li><li>ENT Diagnostik&nbsp;</li><li>Head Light</li><li>Suction Pump</li><li>Laringoskop</li></ul><p><br></p></td><td><p><img data-filename=\"Picture22.jpg\" style=\"width: 234.938px; height: 180.382px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/7429e4_1725178327.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli Gigi</b><br></p><ul><li>Rungan Poli Umum = 4 x 4 meter</li><li>Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Lemari Alat</li></ul></td><td><p><img data-filename=\"Picture23.jpg\" style=\"width: 242.037px; height: 183.988px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/8352bf_1725178327.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><p><b style=\"background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">Poli Anak</b><br></p><ul><li>Rungan Poli Umum = 4 x 4 meter</li><li>Meja Konsultasi&nbsp;</li><li>Kursi Dokter</li><li>Kursi Hadap Pasien</li><li>Tempat Tidur</li><li>Tangga Roolstool</li><li>Lemari Alat</li><li>Nebulizer&nbsp;</li><li>Tensimeter&nbsp;</li><li>Stetoskop&nbsp;</li><li>Pen Light</li><li>Timbangan bayi</li><li>Termometer Digital</li></ul><p><br></p></td><td><p><img data-filename=\"Picture24.jpg\" style=\"width: 237.312px; height: 181.029px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/bc235c_1725178327.jpeg\" class=\"img-responsive\"><br></p></td></tr><tr><td><b><span style=\'font-size:11.0pt;line-height:115%;font-family:\"Times New Roman\",serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nIN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\'>Poliklinik PKBRS</span></b><br></td><td><p><img data-filename=\"Picture26.jpg\" style=\"width: 224.763px; height: 257.687px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/5f0e56_1725178327.jpeg\" class=\"img-responsive\"><br></p></td></tr></tbody></table></div>\n', '2024-09-01 01:12:07', '2024-09-01 01:12:07');
INSERT INTO `pelayanans` (`id`, `layanan`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(8, 'MCU', 'mcu', '1725161987.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>                        \r\n<h4 class=\"\"></h4><h6 style=\"text-align: center; \" class=\"\"><br></h6><h6 style=\"text-align: center; \" class=\"\"><br></h6><h6 style=\"text-align: center; \" class=\"\"><img data-filename=\"medical.jpg\" style=\"width: 556.539px; height: 359.625px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/976fd1_1725170385.jpeg\" class=\"img-responsive\"></h6><h5 class=\"\" style=\"text-align: center; \"><br></h5><h6 style=\"text-align: justify; margin-left: 25px;\" class=\"\">Rumah sakit kami menyediakan layanan medical check-up lengkap yang dirancang untuk memantau kesehatan Anda secara menyeluruh. Dengan teknologi terkini dan tenaga medis profesional, kami memastikan bahwa Anda menerima penilaian kesehatan yang akurat dan komprehensif. Medical check-up rutin sangat penting untuk mendeteksi dini berbagai kondisi kesehatan dan menjaga kesejahteraan Anda secara optimal. Percayakan kesehatan Anda kepada kami untuk mendapatkan hasil yang terbaik.</h6><p style=\"text-align: justify; margin-left: 25px;\"><br></p><table class=\"table table-bordered\"><tbody><tr><td><h4 class=\"\" style=\'color: rgb(33, 37, 41); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;\'><br></h4><h4 class=\"\" style=\'color: rgb(33, 37, 41); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;\'><img data-filename=\"platinum (1).png\" src=\"http://127.0.0.1:8000/storage/content-layanan/8b6950_1725163966.png\" class=\"img-responsive\" style=\"height: 172.2px; width: 172.2px;\"></h4><h4 class=\"\" style=\'color: rgb(33, 37, 41); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; margin-left: 25px;\'><br></h4><h4 class=\"\" style=\'color: rgb(33, 37, 41); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; margin-left: 25px;\'><span style=\"font-weight: 700;\"><br></span></h4><h4 class=\"\" style=\'color: rgb(33, 37, 41); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; margin-left: 25px;\'><span style=\"font-weight: 700;\">Paket Platinum - Rp.1.672.000</span></h4><ul><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\">Pemeriksaan Fisik (Dokter Hiperkes)</span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\">Pemeriksaan Thorax Photo (AP)</span></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\">Audiometri</span></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\">Spirometri</span></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Treadmill Test</span><br style=\"letter-spacing: 0.2px;\"></span></span></li><li><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-variant-ligatures: none; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Laboratorium</span></div><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Darah Rutin (HB, LEU, ERIT, Trombosit, HT, Hitung Jenis)</span></div><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Urine Rutin</span></span></span></li><li><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-variant-ligatures: none; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Gula Darah</span></div><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">BSN</span></div><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">BSPP</span></span></span></li><li><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-variant-ligatures: none; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Profil Lemak</span></div><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Cholestrol</span></div><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Trigliseride</span></span></span></li><li><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-variant-ligatures: none; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Fungsi Ginjal</span></div><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Ureum</span></div><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\"><div><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Kreatinim</span></div><span style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Asam Urat</span></span></span></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Golongan Darah</span><br style=\"letter-spacing: 0.2px;\"></span></span></li><li><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-variant-ligatures: none; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Fungsi Hati</span></div><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">SGOT</span></div><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\"><div><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">SGPT</span></div><span style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">HBSAG</span></span><span style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">AntiHbs</span></span></span></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\">Evaluasi dan Rekomendasi</span></span></li></ul></td><td><div><br></div><div><br></div><div><img data-filename=\"medal.png\" style=\"width: 205.625px; height: 205.625px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/6760af_1725166227.png\" class=\"img-responsive\"><br></div><h4 class=\"\"></h4><h4 style=\"margin-left: 25px;\" class=\"\"><span style=\"font-weight: 700; color: inherit; font-family: inherit; background-color: var(--bs-table-bg); text-align: var(--bs-body-text-align);\"><br></span></h4><h4 style=\"margin-left: 25px;\" class=\"\"><span style=\"font-weight: 700; color: inherit; font-family: inherit; background-color: var(--bs-table-bg); text-align: var(--bs-body-text-align);\">Paket Gold - Rp.1.001.000</span><br></h4><ul><li style=\"text-align: left;\"><span style=\"background-color: var(--bs-card-bg); color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; font-weight: var(--bs-body-font-weight); letter-spacing: 0.2px; text-align: var(--bs-body-text-align); white-space-collapse: preserve;\">Pemeriksaan Fisik (Dokter Hiperkes)</span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Pemeriksaan Thorax Photo (AP)</span><br style=\"letter-spacing: 0.2px;\"></span></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"font-family: Roboto, Arial, sans-serif; letter-spacing: 0.2px;\">Audiometri</span></span></li><li><div><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-variant-ligatures: none; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Laboratorium</span></div><span style=\"color: rgb(32, 33, 36); font-family: Arial; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; font-family: Roboto, Arial, sans-serif; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Darah Rutin (HB, LEU, ERIT, Trombosit, HT, Hitung Jenis)</span></span><span style=\"white-space-collapse: preserve; color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Urine Rutin</span></span></li><li><div><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Gula Darah</span></div><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">BSN</span></span><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">BSPP</span></span></li><li><div><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Profil Lemak</span></div><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Cholestrol</span></span><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Trigliseride</span></span></li><li><div><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Fungsi Ginjal</span></div><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Ureum</span></span><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Kreatinim</span></span><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Asam Urat</span></span></li><li style=\"text-align: left;\"><span style=\"white-space-collapse: preserve; color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px;\">Golongan Darah</span><br style=\"white-space-collapse: preserve; color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px;\"></li><li><div><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Fungsi Hati</span></div><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">SGOT</span></span><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve;\"><span style=\"letter-spacing: 0.2px; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">SGPT</span></span></li><li><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Evaluasi dan Rekomendas</span></li></ul></td><td><ul><li><div><br></div><div><img data-filename=\"silver-medal.png\" style=\"width: 253.625px; height: 253.625px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/066abd_1725166228.png\" class=\"img-responsive\"></div><div><span style=\"background-color: var(--bs-card-bg); font-size: 18px; font-weight: 700; text-align: var(--bs-body-text-align); color: var(--bs-body-color);\"><br></span></div><div><span style=\"background-color: var(--bs-card-bg); font-size: 18px; font-weight: 700; text-align: var(--bs-body-text-align); color: var(--bs-body-color);\">Paket Silver - Rp.792.000</span></div></li></ul><p></p><ul></ul><p></p><ul><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\">Pemeriksaan Fisik (Dokter Hiperkes)</span><br style=\"letter-spacing: 0.2px;\"></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\">Pemeriksaan Thorax Photo (AP)</span><br style=\"letter-spacing: 0.2px;\"></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\">Laboratorium</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Darah Rutin (HB, LEU, ERIT, Trombosit, HT, Hitung Jenis)</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Urine Rutin</span><br style=\"letter-spacing: 0.2px;\"></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\">Gula Darah</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">BSN</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">BSPP</span><br style=\"letter-spacing: 0.2px;\"></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\">Profil Lemak</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Cholestrol</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Trigliseride</span><br style=\"letter-spacing: 0.2px;\"></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\">Fungsi Ginjal</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Ureum</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Kreatinim</span><br style=\"letter-spacing: 0.2px;\"><span style=\"letter-spacing: 0.2px;\">Asam Urat</span></span></li><li style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\">Evaluasi dan Rekomendasi</span></span></li></ul><p style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\"><br></span></span></p><p style=\"text-align: left;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-variant-ligatures: none; letter-spacing: 0.2px; white-space-collapse: preserve; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><span style=\"letter-spacing: 0.2px;\"><br></span></span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><br></p></td></tr></tbody></table><br><p></p><ul><li><div style=\"text-align: right;\"><br></div></li></ul><p></p><p></p><p></p><p></p><p></p><p></p><p></p></p>\n', '2024-08-31 20:39:47', '2024-08-31 23:25:30'),
(9, 'IGD', 'igd', '1725178533.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p><br><p style=\"text-align: justify; \">Layanan IGD kami siap memberikan penanganan medis darurat selama 24 jam, setiap hari, untuk berbagai kondisi kritis dan kebutuhan mendesak. Dengan tim medis yang terlatih khusus dan peralatan medis canggih, kami menangani kasus-kasus gawat darurat dengan cepat dan tepat. Prioritas kami adalah keselamatan dan stabilisasi kondisi pasien dalam situasi darurat. Kami berkomitmen untuk memberikan penanganan yang responsif, profesional, dan penuh empati bagi setiap pasien yang datang ke IGD.</p><p><br></p><table class=\"table table-bordered\" style=\"--bs-table-color: var(--bs-body-color); --bs-table-bg: var(--bs-body-bg); --bs-table-border-color: var(--bs-border-color); --bs-table-accent-bg: transparent; --bs-table-striped-color: var(--bs-body-color); --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: var(--bs-body-color); --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: var(--bs-body-color); --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1118.4px;\"><tbody><tr style=\"border-width: var(--bs-border-width) 0;\"><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><span style=\"font-weight: 700; background-color: var(--bs-table-bg); color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color))); text-align: var(--bs-body-text-align);\">IGD meliputi :</span><br></p><ul><li>AED (Automated External Defibrillator)</li><li>Wastafel&nbsp;</li><li>Nasoparingeal</li><li>Laringoskop set dewasa</li><li>Nasotrakeal</li><li>Orotrakeal suction trakeostomi set</li><li>Syringe pump</li><li>Resusitasi set</li><li>Tiang infus</li><li>EKG</li><li>Irigator nebulizer</li><li>Suction&nbsp;</li><li>Oksigen medis</li><li>NGT</li><li>Jarum spinal</li><li>Film viewer</li></ul></td><td style=\"box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg))); line-height: 1.42857;\"><p><img data-filename=\"Picture27.jpg\" style=\"width: 249.556px; height: 180.425px;\" src=\"http://127.0.0.1:8000/storage/content-layanan/54983e_1725178533.jpeg\" class=\"img-responsive\"><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p></td></tr></tbody></table><p>                \r\n                </p></p>\n', '2024-09-01 01:15:33', '2024-09-01 01:15:33');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` varchar(255) NOT NULL,
  `ulasan` longtext NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `rate`, `ulasan`, `nama`, `no`, `created_at`, `updated_at`) VALUES
(1, '5', 'Wokekek', 'heriyanto', '08990234', '2024-09-01 03:07:11', '2024-09-01 03:07:11'),
(3, '3', 'goddd', 'heriyanto', '08990234', '2024-09-02 07:36:19', '2024-09-02 07:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rsirasyid', 'rsirasyid@gmail.com', NULL, '$2y$10$/W0rkIaTAWFFQKAezPgV4uZ/jn7tvBMch7HYli4.eLrkKN.wKHnyi', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_schedules_doctor_id_foreign` (`doctor_id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelayanans`
--
ALTER TABLE `pelayanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelayanans`
--
ALTER TABLE `pelayanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD CONSTRAINT `doctor_schedules_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
