-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 03:03 AM
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
-- Database: `baru3`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
('9da4eaf7-ebe4-4543-9078-59be96390eac', 'Tasyakuran Milad ke 9 tahun Rumah Sakit Islam Ar Rasyid', 'tasyakuran-milad-ke-9-tahun-rumah-sakit-islam-ar-rasyid', '1733316423.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<div><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Caption MILAD Rumah Sakit Islam Ar Rasyid Palembang Selamat Milad yang ke-9 tahun untuk Rumah Sakit Islam Ar Rasyid Palembang!&nbsp; Hari ini, kami merayakan perjalanan panjang penuh dedikasi dalam memberikan pelayanan kesehatan yang terbaik dan profesional, sekaligus menjaga nilai-nilai islami yang senantiasa kami pegang teguh. Tema Milad kali ini,&nbsp; Bersinergi dalam Membangun Rumah Sakit yang Maju, Profesional, dan Islami,&nbsp; adalah cerminan komitmen kami untuk terus berkembang dan beradaptasi dalam dunia kesehatan yang semakin dinamis, sembari tetap mengedepankan etika dan prinsip-prinsip agama yang mulia. Melalui sinergi yang solid antara tenaga medis, manajemen, dan seluruh pihak yang terlibat, Rumah Sakit Islam Ar Rasyid Palembang bertekad menjadi tempat pelayanan kesehatan yang tidak hanya mengutamakan kualitas perawatan, tetapi juga menempatkan nilai-nilai islami sebagai landasan utama. Setiap tindakan medis yang kami lakukan selalu berorientasi pada prinsip kasih sayang, kejujuran, dan integritas, sebagaimana yang diajarkan oleh agama Islam. Dalam perayaan kali ini, kami ingin mengapresiasi semua pihak yang telah bekerja keras selama ini. Tanpa kolaborasi yang kuat dari semua unsur, baik dalam aspek teknis maupun administratif, cita-cita untuk membangun rumah sakit yang maju, profesional, dan islami tidak akan terwujud. Kami percaya bahwa dengan bersinergi, kita bisa memberikan pelayanan terbaik bagi masyarakat, serta menciptakan lingkungan yang mendukung kesehatan secara holistik, baik fisik, mental, maupun spiritual. Kedepannya, Rumah Sakit Islam Ar Rasyid Palembang akan terus berinovasi dan meningkatkan kualitas layanan, baik dalam hal fasilitas maupun tenaga ahli, agar senantiasa dapat memberikan pelayanan kesehatan yang lebih baik, lebih cepat, dan lebih islami. Kami juga berkomitmen untuk terus mengembangkan riset dan pelatihan medis yang berbasis pada prinsip-prinsip agama, guna melahirkan tenaga medis yang tidak hanya kompeten, tetapi juga memiliki hati yang ikhlas dalam melayani. Mari kita terus bersinergi, memperkuat semangat kebersamaan, dan menjadikan Rumah Sakit Islam Ar Rasyid sebagai rumah sakit yang selalu mengedepankan profesionalisme dan nilai-nilai keislaman dalam setiap langkahnya.&nbsp;</span><div><br></div></div>\n', '2024-12-04 05:47:03', '2024-12-04 05:47:03'),
('9da4eb6c-2d61-4a59-b883-c572c0dbd503', 'Binwas Dinas Kesehatan Kota Palembang', 'binwas-dinas-kesehatan-kota-palembang', '1733316499.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Optimalisasi pelayanan kesehatan melalui kegiatan bimbingan dan pengawasan yang dilaksanakan oleh Dinas Kesehatan. Bersama-sama memastikan kualitas dan standar kesehatan yang terjaga demi kesejahteraan masyarakat</p>\n', '2024-12-04 05:48:19', '2024-12-04 05:48:19'),
('9da4eb9c-262b-4cbb-9698-8c51ee6324e1', 'Pelatihan APAR', 'pelatihan-apar', '1733316530.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Pelatihan APAR (Alat Pemadam Api Ringan) di Rumah Sakit Islam Ar-Rasyid bertujuan untuk meningkatkan kesiapsiagaan dan penanganan kebakaran di lingkungan rumah sakit. Melalui pelatihan ini, seluruh tenaga medis dan staf dilatih untuk mengenali jenis kebakaran dan cara menggunakan APAR secara tepat dan efektif. Dengan pengetahuan dan keterampilan ini, diharapkan dapat meminimalisir risiko kebakaran dan menjaga keselamatan pasien serta karyawan. Rumah Sakit Islam Ar-Rasyid berkomitmen untuk menciptakan lingkungan yang aman, responsif, dan siap menghadapi segala situasi darurat</p>\n', '2024-12-04 05:48:50', '2024-12-04 05:48:50'),
('9da4ebc2-a1e2-462d-8be8-3aa6236aeb64', 'Kegiatan Kerohanian : Sosialisasi Tayamum', 'kegiatan-kerohanian-sosialisasi-tayamum', '1733316555.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Sosialisasi tayamum di Rumah Sakit Islam Ar Rasyid: Sebagai bagian dari usaha memudahkan ibadah bagi pasien, Rumah Sakit Islam Ar Rasyid menyediakan fasilitas tayamum bagi mereka yang tidak dapat menggunakan air. Kegiatan ini menjadi sarana untuk tetap menjaga kebersihan diri dan kesucian meskipun dalam kondisi terbatas. Tim medis dan relawan dengan penuh perhatian membimbing pasien agar dapat menjalankan tayamum dengan benar sesuai syariat Islam. Ini bukan hanya tentang ibadah, tetapi juga memberikan kenyamanan dan kedamaian batin bagi mereka yang sedang berjuang dengan kondisi kesehatan. Semoga setiap langkah ini menjadi amal yang diterima oleh Allah SWT dan menjadi penguat iman di tengah ujian</p>\n', '2024-12-04 05:49:15', '2024-12-04 05:49:15'),
('9da4ebe8-3da9-48d3-881f-f8cf49b5fa47', 'Seminar Uropati Destruktif Rumah Sakit Islam Ar Rasyid', 'seminar-uropati-destruktif-rumah-sakit-islam-ar-rasyid', '1733316580.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Pada tanggal 16 November 2024, Rumah Sakit Islam Ar Rasyid sukses menggelar seminar tentang \"Uropati Destruktif : Dampaknya Terhadap Fungsi Ginjal dan Gagal Ginjal\" dalam rangka memperingati Milad RS Ar Rasyid yang ke-9 tahun. Seminar ini menghadirkan dua narasumber ahli di bidangnya, yaitu dr. Muhammad Firman, Sp.U, seorang dokter spesialis urologi, dan dr. Irwan Stiawan, Sp.PD-KGH, FINASIM, seorang spesialis penyakit dalam subspesilis ginjal dan hipertensi. Kegiatan ini bertujuan untuk memperdalam pemahaman para peserta mengenai penanganan uropati destruktif, suatu kondisi medis yang dapat mempengaruhi fungsi saluran kemih dan ginjal. Dengan menggunakan pendekatan ilmiah dan berbasis bukti, para narasumber memberikan wawasan terbaru terkait diagnosis, terapi, serta manajemen jangka panjang pasien dengan gangguan urologi dan ginjal.&lt;p&gt;Seminar ini diikuti oleh dokter dari seluruh fasilitas kesehatan di Kota Palembang, yang antusias untuk mendapatkan ilmu dan pengetahuan terkini di bidang kedokteran. Selain itu, acara ini juga menjadi ajang untuk mempererat tali silaturahmi antar tenaga medis di wilayah sekitar kota Palembang. Rumah Sakit Islam Ar Rasyid, yang telah berdiri selama 9 tahun, terus berkomitmen untuk meningkatkan kualitas pelayanan kesehatan dan memberikan kontribusi bagi perkembangan ilmu medis di Indonesia. Dengan berbagai seminar dan kegiatan ilmiah seperti ini, diharapkan dapat mendelv lebih jauh mengenai topik-topik medis terkini, serta meningkatkan kualitas layanan rumah sakit bagi masyarakat. Terima kasih kepada semua pihak yang telah berpartisipasi dan mendukung kesuksesan acara ini. Semoga ilmu yang didapatkan bermanfaat untuk kemajuan dunia kesehatan.</p>\n', '2024-12-04 05:49:40', '2024-12-04 05:49:40'),
('9da4ec4a-3123-4618-b699-189b8e98f891', 'Kegiatan Rekredensial BPJS Kesehatan', 'kegiatan-rekredensial-bpjs-kesehatan', '1733316644.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Pada tanggal 26 November 2024, kegiatan rekredensial BPJS Kesehatan yang dilaksanakan di Rumah Sakit Islam Ar Rasyid berlangsung dengan sukses. Acara ini dipimpin langsung oleh Ibu Fitrianti dari BPJS Kesehatan, bersama dengan dua rekan lainnya, Bapak M. Alamsyah dan Yusdiansya Putra, yang turut memberikan kontribusi penting dalam memastikan kelancaran kegiatan ini. Kegiatan rekredensial ini bertujuan untuk meningkatkan kualitas pelayanan kesehatan di rumah sakit serta memastikan bahwa standar operasional rumah sakit sesuai dengan ketentuan yang berlaku.&lt;p&gt;Selain itu, acara ini juga dihadiri oleh perwakilan dari Asosiasi Rumah Sakit Indonesia (Arsi) dan Dinas Kesehatan Kota Palembang. Kehadiran para pihak terkait ini menunjukkan komitmen bersama dalam meningkatkan kualitas layanan kesehatan kepada masyarakat, khususnya di Kota Palembang. Rumah Sakit Islam Ar Rasyid sebagai salah satu fasilitas kesehatan yang terpercaya di daerah ini, terus berupaya untuk memenuhi standar mutu pelayanan yang telah ditetapkan oleh BPJS Kesehatan.&lt;/p&gt;&lt;p&gt;Kegiatan rekredensial ini mencakup evaluasi berbagai aspek pelayanan, mulai dari kualitas medis, administratif, hingga kenyamanan pasien. Melalui proses ini, diharapkan rumah sakit dapat memperbaiki dan meningkatkan layanan yang diberikan, agar lebih optimal dalam mendukung program jaminan kesehatan nasional. Dalam kesempatan ini, para peserta juga diberikan pemahaman lebih mendalam tentang kebijakan terbaru terkait BPJS Kesehatan dan cara rumah sakit dapat beradaptasi dengan perkembangan teknologi dan kebutuhan masyarakat.&lt;/p&gt;&lt;p&gt;Dengan adanya rekredensial ini, diharapkan Rumah Sakit Islam Ar Rasyid dapat semakin memperkuat perannya dalam memberikan pelayanan kesehatan yang terbaik, serta terus berkontribusi dalam menciptakan masyarakat yang lebih sehat dan sejahtera.</p>\n', '2024-12-04 05:50:44', '2024-12-04 05:50:44'),
('9da4ec6f-9b91-45f1-8a6f-5d93199fdd0e', 'Hari Senin', 'hari-senin', '1733316669.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>sdffffffffffffffffffffffffffffffffffffffffffffffffffff</p>\n', '2024-12-04 05:51:09', '2024-12-04 05:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `desc` longtext DEFAULT NULL,
  `spesialis` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `nama`, `foto`, `desc`, `spesialis`, `created_at`, `updated_at`) VALUES
('9da46307-2151-402e-96d3-f43e8821d71f', 'dr. Junaidah M.A. Alwirais, Sp. A', '1733293616.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Anak', '2024-12-03 23:26:56', '2024-12-03 23:26:56'),
('9da46338-b691-44fa-8a1c-9c5aedab44e4', 'Kol.CKM(P) dr. Toni Siguntang, Sp.THT.KL.,MARS', '1733293648.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'THT', '2024-12-03 23:27:28', '2024-12-03 23:27:28'),
('9da4637e-dbde-4617-9f07-ab764dbfd570', 'dr. Yovi Apriansyah, Sp. A', '1733293694.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Anak', '2024-12-03 23:28:14', '2024-12-03 23:28:14'),
('9da463a2-da65-49bc-bf21-c18a34d5527b', 'dr. Hendri Farozah, Sp. B', '1733293718.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Bedah', '2024-12-03 23:28:38', '2024-12-03 23:28:38'),
('9da463c1-7fa3-43c6-a561-91883596408c', 'dr. Sopan Setiawan, Sp. B, MARS', '1733293738.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Bedah', '2024-12-03 23:28:58', '2024-12-03 23:28:58'),
('9da463f2-ed1e-4c09-8607-0ca6620fdbab', 'dr. Jonata Pahlevi, Sp.B', '1733293770.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Bedah', '2024-12-03 23:29:30', '2024-12-03 23:29:30'),
('9da46412-bb13-40a0-82a1-11b96cc40edc', 'dr. Nirwan Firdaus, Sp. B', '1733293791.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Bedah', '2024-12-03 23:29:51', '2024-12-03 23:29:51'),
('9da46433-fe3e-485b-ba37-e6fc1b6b70fc', 'drg. Djamal Riza, Sp.BM', '1733293813.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Bedah Mulut', '2024-12-03 23:30:13', '2024-12-03 23:30:13'),
('9da4644f-63ae-4eb0-b737-a154043501d2', 'dr. Desi Harnis, Sp. DV', '1733293831.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Kulit & Kelamin', '2024-12-03 23:30:31', '2024-12-03 23:30:31'),
('9da4646b-475a-4f47-8cac-a0cb16c04ea8', 'dr. Imelda Veronica, Sp. PD', '1733293849.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Penyakit Dalam', '2024-12-03 23:30:49', '2024-12-03 23:30:49'),
('9da464a3-e466-4fae-be58-d899ba2b4ba4', 'dr. Alpian, Sp. PD', '1733293886.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Penyakit Dalam', '2024-12-03 23:31:26', '2024-12-03 23:31:26'),
('9da46506-41a9-42d0-88a6-1ec05cfa05eb', 'dr. Erni Afriani, Sp. PD, FINASIM', '1733293951.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Penyakit Dalam', '2024-12-03 23:32:31', '2024-12-03 23:32:31'),
('9da467a0-98bf-45eb-b41c-dbe2a888d500', 'dr. Sari Afiah Miyuki Rifani, Sp. PD', '1733294387.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Penyakit Dalam', '2024-12-03 23:39:47', '2024-12-03 23:39:47'),
('9da467c2-6789-493a-a0d3-70dae6fdcb13', 'dr. H. Syamsu Indra, Sp.PD, K-KV, Ph.D, FINASIM', '1733294409.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Jantung', '2024-12-03 23:40:09', '2024-12-03 23:40:09'),
('9da46817-d7b3-4fdd-952a-d2e98985217e', 'dr. Irwan Stiawan, Sp.PD-KGH, FINASIM', '1733294465.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Ginjal', '2024-12-03 23:41:05', '2024-12-03 23:41:05'),
('9da46863-abc7-482c-a7d1-5e4d2eb9b533', 'dr. Muhammad Rizky Felani, AIFO-K.,Sp.JP', '1733294515.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Jantung', '2024-12-03 23:41:55', '2024-12-03 23:41:55'),
('9da468dd-f9ec-4a9c-b1bf-ff89b5de3ae7', 'dr. Hasanuddin, Sp. M', '1733294595.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Mata', '2024-12-03 23:43:15', '2024-12-03 23:43:15'),
('9da46902-cbe5-417e-a62c-7e2b2bfbf715', 'dr. Syarif Satya Graha, Sp. M', '1733294619.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Mata', '2024-12-03 23:43:39', '2024-12-03 23:43:39'),
('9da4692a-fed8-4028-94b4-f5637fd7ed18', 'dr. Karyusi,Sp.M', '1733294646.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Mata', '2024-12-03 23:44:06', '2024-12-03 23:44:06'),
('9da4698e-8077-4a89-94df-38a840b7f486', 'dr. Kemas Abdul Mutholib Luthfi, Sp. OT.,FIPP.,CIPS.,AIFO-K', '1733294711.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Orthopedi', '2024-12-03 23:45:11', '2024-12-03 23:45:11'),
('9da469af-41d9-40eb-8446-610379cd6b3b', 'dr. Pinto Desti Ramadhoni, Sp. S (K)', '1733294732.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Saraf', '2024-12-03 23:45:32', '2024-12-03 23:45:32'),
('9da46b11-16f9-45d7-9ed7-e93aef67c0d4', 'dr. Veny, Sp. N', '1733294964.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Saraf', '2024-12-03 23:49:24', '2024-12-03 23:49:24'),
('9da49070-2497-4e9a-932f-ec0c622f2ec2', 'dr. Ashita Hulwah Adwirianny, Sp. N', '1733301232.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Saraf', '2024-12-04 01:33:55', '2024-12-04 01:33:55'),
('9da490b3-188a-456a-b9a2-120c0588b9f8', 'dr. Olivia Amanda, Sp. N', '1733301278.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-&nbsp;</p>\n', 'Saraf', '2024-12-04 01:34:38', '2024-12-04 01:34:38'),
('9da490e8-1252-4f45-9ea2-86cd159788a3', 'dr. Rian Hasni, Sp. THT-KL', '1733301313.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'THT', '2024-12-04 01:35:13', '2024-12-04 01:35:13'),
('9da49115-3c75-48ab-848f-a1dfb9cbd552', 'dr. Diana Sari, Sp. THT-KL', '1733301342.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'THT', '2024-12-04 01:35:42', '2024-12-04 01:35:42'),
('9da49151-8195-4bd7-a74b-01c7ce88e601', 'dr. Adhe Herawaty, Sp.KJ', '1733301382.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Kesehatan Jiwa', '2024-12-04 01:36:22', '2024-12-04 01:36:22'),
('9da491a7-f2b2-442c-9eaa-c5322c44aeca', 'dr. Emiruddin Sunny, Sp.OG', '1733301438.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'OBGYN', '2024-12-04 01:37:19', '2024-12-04 01:37:19'),
('9da491e4-b2b3-4d9c-ba03-cb33d81c9f20', 'dr. Irda Rina, Sp. OG', '1733301478.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'OBGYN', '2024-12-04 01:37:58', '2024-12-04 01:37:58'),
('9da49210-c2c5-48a1-bd26-757a2db96bf0', 'dr. Wahyudi, Sp. OG', '1733301507.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'OBGYN', '2024-12-04 01:38:27', '2024-12-04 01:38:27'),
('9da49240-d938-414b-a40c-e1d349e5f4a6', 'dr. Henny Luniagus Hardida, Sp.OG(K)MARS', '1733301539.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'OBGYN', '2024-12-04 01:38:59', '2024-12-04 01:38:59'),
('9da49275-8033-4e0f-9831-477c7a9513cb', 'dr. Muhammad Firman, Sp.U', '1733301573.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Urologi', '2024-12-04 01:39:33', '2024-12-04 01:39:33'),
('9da49443-5447-4972-a743-d1621a4cb8d5', 'drg. Dwi Destaria Aryani', '1733301876.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Gigi', '2024-12-04 01:44:36', '2024-12-04 01:44:36'),
('9da4959e-99f6-4ce6-8478-ae6cfe064767', 'drg. Ishlah Amanda', '1733302103.png', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Gigi', '2024-12-04 01:48:23', '2024-12-04 01:48:23'),
('9da495e9-7db7-42fd-b386-3a63d6e5b741', 'dr. Okta Hariza, Sp. K.F.R', '1733302153.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>-</p>\n', 'Rehabilitas Medik', '2024-12-04 01:49:13', '2024-12-04 01:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedules`
--

CREATE TABLE `doctor_schedules` (
  `id` char(36) NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `doctor_id` char(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2024_08_28_080000_create_pelayanans_table', 1),
(10, '2024_11_16_053612_create_sessions_table', 1),
(11, '2024_11_19_022817_add_role_to_users_table', 1);

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
  `id` char(36) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelayanans`
--

INSERT INTO `pelayanans` (`id`, `layanan`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
('01jeazyd26zs80b1sbr8a0ctxc', 'IGD', 'igd', '1733388349.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>IGD adalah init gawat darurat rumah sakit islam a</p>\n', '2024-12-05 01:45:50', '2024-12-05 01:45:50');

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
  `id` char(36) NOT NULL,
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
('01je85awbjjd1pg5bxs15bvbrj', '3', 'asd sd sadsad sa dsad', 'nopek', '08990234', '2024-12-03 23:22:18', '2024-12-03 23:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1yQWfbA3PWvZk0ZvU02m0jTcHkVtBhGvDzeSocM6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieUN0UFR1TGhNUnoySWZOeng5ejE5MFJ1bmFxemdmV3BIZVJzUWRtdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733355518),
('c89TjzrQZfpz9wGul16diJDDNEgkvXL4UcvLJXBZ', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYUc4WFpMMUtZVDhtYVBZQWFHbXNWTlBjN1U3UGxGaTNua2NqODB4RCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kb2t0ZXIiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1733450512),
('PrcUJsX4KTyzSUnDTTKdKMt7oDdZbDlx1XqRmlss', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTndUQ21DczBiWEhieGNwN3RMWkl4b2NoM3QyeERGTjlzOVhQRGJEbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iZXJpdGEiO319', 1733319349),
('rqmFhNo3nvrF2FY9nBD3yfK2veWZXAQuCnUkUObd', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRFZlVTYydmVTWGZxU0M0VFgzYm9Ybkc1c1o3c1V2ZDhQa2ZlbzhYYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sYXlhbmFuL2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1733388231),
('tCq2R3e1DZxQhAVHpeUDVFtrOZ7tkkLucmlFf7xA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGF5MHh0TG9GTm81aEpRcmgyU2w3VThVTkc4UzNqUmt0blNYZlJFZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rb250YWsiO319', 1733319545),
('Wrth4Sq6DzdoHURSRPAEDJZn1M9wagyJ3vSXGvLf', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUVhBSE93UjdDeFBCNHM2RXpjdExqVzRWVE1YWXhxcUdBWVBkaUtqRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHJvZmlsIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1733388436);

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
  `role` enum('admin','user') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'rsirasyid', 'rsirasyid@gmail.com', NULL, '$2y$10$BXoxZQYygGJgN6dpEY5xyemAGXKvimxV1Zh0Nv9VlJXTK0HghGDCG', 'admin', NULL, NULL, NULL);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD CONSTRAINT `doctor_schedules_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
