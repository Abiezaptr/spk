-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 07:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `nama`, `foto`, `akses`) VALUES
(2, 'cihuy@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'Cihuy Ulala', 'b43c267471be1578bd35dd732838004b.jpg', 'Penilai'),
(3, 'penilai@gmail.com', '9e56c9dd07ad431ba42bba6555c31667', 'Penilai', 'default.png', 'Penilai'),
(4, 'admin@gmail.com', '9e56c9dd07ad431ba42bba6555c31667', 'Super Admin', 'default.png', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(30) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `nilai4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `nilai1`, `nilai2`, `nilai3`, `nilai4`) VALUES
(1, 'Amat Baik', 1, 1, 2, 4),
(2, 'Baik', 1, 2, 3, 3),
(3, 'Cukup', 1, 3, 3, 2),
(4, 'Sedang', 3, 4, 2, 1),
(5, 'Kurang', 4, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_penempatan` int(11) DEFAULT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `aktif` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_admin`, `id_penempatan`, `nama_karyawan`, `nip`, `jabatan`, `lokasi`, `jenis_kelamin`, `pendidikan_terakhir`, `aktif`) VALUES
(31, 2, NULL, 'Abieza Syahdilla', '171021700351', 'CEO Founder', 'Head Office', 'L', 'S1', 'Y'),
(32, 2, NULL, 'Faris Maulana Hakim', '171021700352', 'CEO Founder', 'Head Office', 'L', 'SD', 'Y'),
(33, 2, NULL, 'Nabila Anjani', '171021700353', 'Supervisor II', 'Head Office', 'P', 'SD', 'Y'),
(34, 2, NULL, 'Suci Rahmadhanti', '171021700359', 'Supervisor II', 'Head Office', 'P', 'SD', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `bobot` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `jenis`, `bobot`, `keterangan`) VALUES
(1, 'C1', 'Benefit', 3, 'Menguasai karakteristik peserta didik'),
(2, 'C2', 'Benefit', 3, 'Menguasai teori belajar dan prinsip-prinsip pembelajaran yang mendidik'),
(3, 'C3', 'Benefit', 3, 'Pengembangan kurikulum'),
(4, 'C4', 'Benefit', 3, 'Kegiatan pembelajran yang mendidik'),
(5, 'C5', 'Benefit', 3, 'Pengembangan potensi peserta didik'),
(6, 'C6', 'Benefit', 3, 'Komunikasi dengan peserta didik'),
(7, 'C7', 'Benefit', 3, 'Penilaian dan evaluasi'),
(8, 'C8', 'Benefit', 3, 'Bertindak sesuai dengan norma agama, hukum, sosial dan kebudayaan'),
(9, 'C9', 'Benefit', 3, 'Menunjukan pribadi yang dewasa dan teladan'),
(10, 'C10', 'Benefit', 3, 'Etos kerja,tanggung jawab tinggi,rasa bangga menjadi pekerja'),
(11, 'C11', 'Benefit', 3, 'Bersikap Inklusif,Bertindak objektif, serta tidak diskriminatif'),
(12, 'C12', 'Benefit', 3, 'Komunikasi dengan sesama guru, tenaga kependidikan, Orang tua, Peserta didik, dan masyarakat'),
(13, 'C13', 'Benefit', 3, 'Penguasaan materi struktur konsep, dan pola pikir keilmuan yang mendukung mata pelajaran yang diampu'),
(14, 'C14', 'Benefit', 3, 'Mengembangkan keprofesian melalui tindakan reflektif');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `nilai_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_kriteria`, `id_karyawan`, `id_periode`, `nilai_karyawan`) VALUES
(702, 1, 31, 15, 4),
(703, 2, 31, 15, 4),
(704, 3, 31, 15, 4),
(705, 4, 31, 15, 4),
(706, 5, 31, 15, 4),
(707, 6, 31, 15, 4),
(708, 7, 31, 15, 4),
(709, 8, 31, 15, 4),
(710, 9, 31, 15, 4),
(711, 10, 31, 15, 4),
(712, 11, 31, 15, 4),
(713, 12, 31, 15, 4),
(714, 13, 31, 15, 4),
(715, 14, 31, 15, 4),
(716, 1, 32, 15, 3),
(717, 2, 32, 15, 3),
(718, 3, 32, 15, 3),
(719, 4, 32, 15, 3),
(720, 5, 32, 15, 3),
(721, 6, 32, 15, 3),
(722, 7, 32, 15, 2),
(723, 8, 32, 15, 2),
(724, 9, 32, 15, 2),
(725, 10, 32, 15, 2),
(726, 11, 32, 15, 2),
(727, 12, 32, 15, 2),
(728, 13, 32, 15, 1),
(729, 14, 32, 15, 1),
(730, 1, 33, 15, 2),
(731, 2, 33, 15, 3),
(732, 3, 33, 15, 2),
(733, 4, 33, 15, 2),
(734, 5, 33, 15, 1),
(735, 6, 33, 15, 3),
(736, 7, 33, 15, 4),
(737, 8, 33, 15, 4),
(738, 9, 33, 15, 4),
(739, 10, 33, 15, 4),
(740, 11, 33, 15, 2),
(741, 12, 33, 15, 2),
(742, 13, 33, 15, 3),
(743, 14, 33, 15, 3),
(744, 1, 34, 15, 4),
(745, 2, 34, 15, 3),
(746, 3, 34, 15, 4),
(747, 4, 34, 15, 3),
(748, 5, 34, 15, 4),
(749, 6, 34, 15, 4),
(750, 7, 34, 15, 4),
(751, 8, 34, 15, 3),
(752, 9, 34, 15, 3),
(753, 10, 34, 15, 4),
(754, 11, 34, 15, 4),
(755, 12, 34, 15, 4),
(756, 13, 34, 15, 3),
(757, 14, 34, 15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE `penempatan` (
  `id_penempatan` int(11) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `normalisasi` double NOT NULL,
  `terbobot` double NOT NULL,
  `nilai_akhir` double NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_nilai`, `id_alternatif`, `nilai`, `normalisasi`, `terbobot`, `nilai_akhir`, `rank`) VALUES
(1261, 702, 1, 4, 0.718, 2.154, 1, 1),
(1262, 703, 1, 4, 0.718, 2.154, 1, 1),
(1263, 704, 1, 4, 0.718, 2.154, 1, 1),
(1264, 705, 1, 4, 0.718, 2.154, 1, 1),
(1265, 706, 1, 4, 0.718, 2.154, 1, 1),
(1266, 707, 1, 4, 0.718, 2.154, 1, 1),
(1267, 708, 1, 4, 0.718, 2.154, 1, 1),
(1268, 709, 1, 4, 0.718, 2.154, 1, 1),
(1269, 710, 1, 4, 0.718, 2.154, 1, 1),
(1270, 711, 1, 4, 0.718, 2.154, 1, 1),
(1271, 712, 1, 4, 0.718, 2.154, 1, 1),
(1272, 713, 1, 4, 0.718, 2.154, 1, 1),
(1273, 714, 1, 4, 0.718, 2.154, 1, 1),
(1274, 715, 1, 4, 0.718, 2.154, 1, 1),
(1275, 702, 2, 3, 0.539, 1.617, 0.667, 1),
(1276, 703, 2, 3, 0.539, 1.617, 0.667, 1),
(1277, 704, 2, 3, 0.539, 1.617, 0.667, 1),
(1278, 705, 2, 3, 0.539, 1.617, 0.667, 1),
(1279, 706, 2, 3, 0.539, 1.617, 0.667, 1),
(1280, 707, 2, 3, 0.539, 1.617, 0.667, 1),
(1281, 708, 2, 3, 0.539, 1.617, 0.667, 1),
(1282, 709, 2, 3, 0.539, 1.617, 0.667, 1),
(1283, 710, 2, 3, 0.539, 1.617, 0.667, 1),
(1284, 711, 2, 3, 0.539, 1.617, 0.667, 1),
(1285, 712, 2, 3, 0.539, 1.617, 0.667, 1),
(1286, 713, 2, 3, 0.539, 1.617, 0.667, 1),
(1287, 714, 2, 3, 0.539, 1.617, 0.667, 1),
(1288, 715, 2, 3, 0.539, 1.617, 0.667, 1),
(1289, 702, 3, 2, 0.359, 1.077, 0.333, 1),
(1290, 703, 3, 2, 0.359, 1.077, 0.333, 1),
(1291, 704, 3, 2, 0.359, 1.077, 0.333, 1),
(1292, 705, 3, 2, 0.359, 1.077, 0.333, 1),
(1293, 706, 3, 2, 0.359, 1.077, 0.333, 1),
(1294, 707, 3, 2, 0.359, 1.077, 0.333, 1),
(1295, 708, 3, 2, 0.359, 1.077, 0.333, 1),
(1296, 709, 3, 2, 0.359, 1.077, 0.333, 1),
(1297, 710, 3, 2, 0.359, 1.077, 0.333, 1),
(1298, 711, 3, 2, 0.359, 1.077, 0.333, 1),
(1299, 712, 3, 2, 0.359, 1.077, 0.333, 1),
(1300, 713, 3, 2, 0.359, 1.077, 0.333, 1),
(1301, 714, 3, 2, 0.359, 1.077, 0.333, 1),
(1302, 715, 3, 2, 0.359, 1.077, 0.333, 1),
(1303, 702, 4, 1, 0.18, 0.54, 0, 1),
(1304, 703, 4, 1, 0.18, 0.54, 0, 1),
(1305, 704, 4, 1, 0.18, 0.54, 0, 1),
(1306, 705, 4, 1, 0.18, 0.54, 0, 1),
(1307, 706, 4, 1, 0.18, 0.54, 0, 1),
(1308, 707, 4, 1, 0.18, 0.54, 0, 1),
(1309, 708, 4, 1, 0.18, 0.54, 0, 1),
(1310, 709, 4, 1, 0.18, 0.54, 0, 1),
(1311, 710, 4, 1, 0.18, 0.54, 0, 1),
(1312, 711, 4, 1, 0.18, 0.54, 0, 1),
(1313, 712, 4, 1, 0.18, 0.54, 0, 1),
(1314, 713, 4, 1, 0.18, 0.54, 0, 1),
(1315, 714, 4, 1, 0.18, 0.54, 0, 1),
(1316, 715, 4, 1, 0.18, 0.54, 0, 1),
(1317, 702, 5, 1, 0.18, 0.54, 0, 1),
(1318, 703, 5, 1, 0.18, 0.54, 0, 1),
(1319, 704, 5, 1, 0.18, 0.54, 0, 1),
(1320, 705, 5, 1, 0.18, 0.54, 0, 1),
(1321, 706, 5, 1, 0.18, 0.54, 0, 1),
(1322, 707, 5, 1, 0.18, 0.54, 0, 1),
(1323, 708, 5, 1, 0.18, 0.54, 0, 1),
(1324, 709, 5, 1, 0.18, 0.54, 0, 1),
(1325, 710, 5, 1, 0.18, 0.54, 0, 1),
(1326, 711, 5, 1, 0.18, 0.54, 0, 1),
(1327, 712, 5, 1, 0.18, 0.54, 0, 1),
(1328, 713, 5, 1, 0.18, 0.54, 0, 1),
(1329, 714, 5, 1, 0.18, 0.54, 0, 1),
(1330, 715, 5, 1, 0.18, 0.54, 0, 1),
(1331, 716, 1, 2, 0.385, 1.155, 0.24, 4),
(1332, 717, 1, 2, 0.385, 1.155, 0.24, 4),
(1333, 718, 1, 2, 0.385, 1.155, 0.24, 4),
(1334, 719, 1, 2, 0.385, 1.155, 0.24, 4),
(1335, 720, 1, 2, 0.385, 1.155, 0.24, 4),
(1336, 721, 1, 2, 0.385, 1.155, 0.24, 4),
(1337, 722, 1, 1, 0.16, 0.48, 0.24, 4),
(1338, 723, 1, 1, 0.16, 0.48, 0.24, 4),
(1339, 724, 1, 1, 0.16, 0.48, 0.24, 4),
(1340, 725, 1, 1, 0.16, 0.48, 0.24, 4),
(1341, 726, 1, 1, 0.16, 0.48, 0.24, 4),
(1342, 727, 1, 1, 0.16, 0.48, 0.24, 4),
(1343, 728, 1, 1, 0.189, 0.567, 0.24, 4),
(1344, 729, 1, 1, 0.189, 0.567, 0.24, 4),
(1345, 716, 2, 3, 0.577, 1.731, 0.476, 4),
(1346, 717, 2, 3, 0.577, 1.731, 0.476, 4),
(1347, 718, 2, 3, 0.577, 1.731, 0.476, 4),
(1348, 719, 2, 3, 0.577, 1.731, 0.476, 4),
(1349, 720, 2, 3, 0.577, 1.731, 0.476, 4),
(1350, 721, 2, 3, 0.577, 1.731, 0.476, 4),
(1351, 722, 2, 2, 0.32, 0.96, 0.476, 4),
(1352, 723, 2, 2, 0.32, 0.96, 0.476, 4),
(1353, 724, 2, 2, 0.32, 0.96, 0.476, 4),
(1354, 725, 2, 2, 0.32, 0.96, 0.476, 4),
(1355, 726, 2, 2, 0.32, 0.96, 0.476, 4),
(1356, 727, 2, 2, 0.32, 0.96, 0.476, 4),
(1357, 728, 2, 1, 0.189, 0.567, 0.476, 4),
(1358, 729, 2, 1, 0.189, 0.567, 0.476, 4),
(1359, 716, 3, 3, 0.577, 1.731, 0.579, 4),
(1360, 717, 3, 3, 0.577, 1.731, 0.579, 4),
(1361, 718, 3, 3, 0.577, 1.731, 0.579, 4),
(1362, 719, 3, 3, 0.577, 1.731, 0.579, 4),
(1363, 720, 3, 3, 0.577, 1.731, 0.579, 4),
(1364, 721, 3, 3, 0.577, 1.731, 0.579, 4),
(1365, 722, 3, 3, 0.48, 1.44, 0.579, 4),
(1366, 723, 3, 3, 0.48, 1.44, 0.579, 4),
(1367, 724, 3, 3, 0.48, 1.44, 0.579, 4),
(1368, 725, 3, 3, 0.48, 1.44, 0.579, 4),
(1369, 726, 3, 3, 0.48, 1.44, 0.579, 4),
(1370, 727, 3, 3, 0.48, 1.44, 0.579, 4),
(1371, 728, 3, 1, 0.189, 0.567, 0.579, 4),
(1372, 729, 3, 1, 0.189, 0.567, 0.579, 4),
(1373, 716, 4, 2, 0.385, 1.155, 0.718, 4),
(1374, 717, 4, 2, 0.385, 1.155, 0.718, 4),
(1375, 718, 4, 2, 0.385, 1.155, 0.718, 4),
(1376, 719, 4, 2, 0.385, 1.155, 0.718, 4),
(1377, 720, 4, 2, 0.385, 1.155, 0.718, 4),
(1378, 721, 4, 2, 0.385, 1.155, 0.718, 4),
(1379, 722, 4, 4, 0.641, 1.923, 0.718, 4),
(1380, 723, 4, 4, 0.641, 1.923, 0.718, 4),
(1381, 724, 4, 4, 0.641, 1.923, 0.718, 4),
(1382, 725, 4, 4, 0.641, 1.923, 0.718, 4),
(1383, 726, 4, 4, 0.641, 1.923, 0.718, 4),
(1384, 727, 4, 4, 0.641, 1.923, 0.718, 4),
(1385, 728, 4, 3, 0.567, 1.701, 0.718, 4),
(1386, 729, 4, 3, 0.567, 1.701, 0.718, 4),
(1387, 716, 5, 1, 0.192, 0.576, 0.523, 4),
(1388, 717, 5, 1, 0.192, 0.576, 0.523, 4),
(1389, 718, 5, 1, 0.192, 0.576, 0.523, 4),
(1390, 719, 5, 1, 0.192, 0.576, 0.523, 4),
(1391, 720, 5, 1, 0.192, 0.576, 0.523, 4),
(1392, 721, 5, 1, 0.192, 0.576, 0.523, 4),
(1393, 722, 5, 3, 0.48, 1.44, 0.523, 4),
(1394, 723, 5, 3, 0.48, 1.44, 0.523, 4),
(1395, 724, 5, 3, 0.48, 1.44, 0.523, 4),
(1396, 725, 5, 3, 0.48, 1.44, 0.523, 4),
(1397, 726, 5, 3, 0.48, 1.44, 0.523, 4),
(1398, 727, 5, 3, 0.48, 1.44, 0.523, 4),
(1399, 728, 5, 4, 0.756, 2.268, 0.523, 4),
(1400, 729, 5, 4, 0.756, 2.268, 0.523, 4),
(1401, 730, 1, 1, 0.16, 0.48, 0.473, 2),
(1402, 731, 1, 2, 0.385, 1.155, 0.473, 2),
(1403, 732, 1, 1, 0.16, 0.48, 0.473, 2),
(1404, 733, 1, 1, 0.16, 0.48, 0.473, 2),
(1405, 734, 1, 1, 0.189, 0.567, 0.473, 2),
(1406, 735, 1, 2, 0.385, 1.155, 0.473, 2),
(1407, 736, 1, 4, 0.718, 2.154, 0.473, 2),
(1408, 737, 1, 4, 0.718, 2.154, 0.473, 2),
(1409, 738, 1, 4, 0.718, 2.154, 0.473, 2),
(1410, 739, 1, 4, 0.718, 2.154, 0.473, 2),
(1411, 740, 1, 1, 0.16, 0.48, 0.473, 2),
(1412, 741, 1, 1, 0.16, 0.48, 0.473, 2),
(1413, 742, 1, 2, 0.385, 1.155, 0.473, 2),
(1414, 743, 1, 2, 0.385, 1.155, 0.473, 2),
(1415, 730, 2, 2, 0.32, 0.96, 0.531, 2),
(1416, 731, 2, 3, 0.577, 1.731, 0.531, 2),
(1417, 732, 2, 2, 0.32, 0.96, 0.531, 2),
(1418, 733, 2, 2, 0.32, 0.96, 0.531, 2),
(1419, 734, 2, 1, 0.189, 0.567, 0.531, 2),
(1420, 735, 2, 3, 0.577, 1.731, 0.531, 2),
(1421, 736, 2, 3, 0.539, 1.617, 0.531, 2),
(1422, 737, 2, 3, 0.539, 1.617, 0.531, 2),
(1423, 738, 2, 3, 0.539, 1.617, 0.531, 2),
(1424, 739, 2, 3, 0.539, 1.617, 0.531, 2),
(1425, 740, 2, 2, 0.32, 0.96, 0.531, 2),
(1426, 741, 2, 2, 0.32, 0.96, 0.531, 2),
(1427, 742, 2, 3, 0.577, 1.731, 0.531, 2),
(1428, 743, 2, 3, 0.577, 1.731, 0.531, 2),
(1429, 730, 3, 3, 0.48, 1.44, 0.53, 2),
(1430, 731, 3, 3, 0.577, 1.731, 0.53, 2),
(1431, 732, 3, 3, 0.48, 1.44, 0.53, 2),
(1432, 733, 3, 3, 0.48, 1.44, 0.53, 2),
(1433, 734, 3, 1, 0.189, 0.567, 0.53, 2),
(1434, 735, 3, 3, 0.577, 1.731, 0.53, 2),
(1435, 736, 3, 2, 0.359, 1.077, 0.53, 2),
(1436, 737, 3, 2, 0.359, 1.077, 0.53, 2),
(1437, 738, 3, 2, 0.359, 1.077, 0.53, 2),
(1438, 739, 3, 2, 0.359, 1.077, 0.53, 2),
(1439, 740, 3, 3, 0.48, 1.44, 0.53, 2),
(1440, 741, 3, 3, 0.48, 1.44, 0.53, 2),
(1441, 742, 3, 3, 0.577, 1.731, 0.53, 2),
(1442, 743, 3, 3, 0.577, 1.731, 0.53, 2),
(1443, 730, 4, 4, 0.641, 1.923, 0.51, 2),
(1444, 731, 4, 2, 0.385, 1.155, 0.51, 2),
(1445, 732, 4, 4, 0.641, 1.923, 0.51, 2),
(1446, 733, 4, 4, 0.641, 1.923, 0.51, 2),
(1447, 734, 4, 3, 0.567, 1.701, 0.51, 2),
(1448, 735, 4, 2, 0.385, 1.155, 0.51, 2),
(1449, 736, 4, 1, 0.18, 0.54, 0.51, 2),
(1450, 737, 4, 1, 0.18, 0.54, 0.51, 2),
(1451, 738, 4, 1, 0.18, 0.54, 0.51, 2),
(1452, 739, 4, 1, 0.18, 0.54, 0.51, 2),
(1453, 740, 4, 4, 0.641, 1.923, 0.51, 2),
(1454, 741, 4, 4, 0.641, 1.923, 0.51, 2),
(1455, 742, 4, 2, 0.385, 1.155, 0.51, 2),
(1456, 743, 4, 2, 0.385, 1.155, 0.51, 2),
(1457, 730, 5, 3, 0.48, 1.44, 0.4, 2),
(1458, 731, 5, 1, 0.192, 0.576, 0.4, 2),
(1459, 732, 5, 3, 0.48, 1.44, 0.4, 2),
(1460, 733, 5, 3, 0.48, 1.44, 0.4, 2),
(1461, 734, 5, 4, 0.756, 2.268, 0.4, 2),
(1462, 735, 5, 1, 0.192, 0.576, 0.4, 2),
(1463, 736, 5, 1, 0.18, 0.54, 0.4, 2),
(1464, 737, 5, 1, 0.18, 0.54, 0.4, 2),
(1465, 738, 5, 1, 0.18, 0.54, 0.4, 2),
(1466, 739, 5, 1, 0.18, 0.54, 0.4, 2),
(1467, 740, 5, 3, 0.48, 1.44, 0.4, 2),
(1468, 741, 5, 3, 0.48, 1.44, 0.4, 2),
(1469, 742, 5, 1, 0.192, 0.576, 0.4, 2),
(1470, 743, 5, 1, 0.192, 0.576, 0.4, 2),
(1471, 744, 1, 4, 0.718, 2.154, 0.796, 1),
(1472, 745, 1, 2, 0.385, 1.155, 0.796, 1),
(1473, 746, 1, 4, 0.718, 2.154, 0.796, 1),
(1474, 747, 1, 2, 0.385, 1.155, 0.796, 1),
(1475, 748, 1, 4, 0.718, 2.154, 0.796, 1),
(1476, 749, 1, 4, 0.718, 2.154, 0.796, 1),
(1477, 750, 1, 4, 0.718, 2.154, 0.796, 1),
(1478, 751, 1, 2, 0.385, 1.155, 0.796, 1),
(1479, 752, 1, 2, 0.385, 1.155, 0.796, 1),
(1480, 753, 1, 4, 0.718, 2.154, 0.796, 1),
(1481, 754, 1, 4, 0.718, 2.154, 0.796, 1),
(1482, 755, 1, 4, 0.718, 2.154, 0.796, 1),
(1483, 756, 1, 2, 0.385, 1.155, 0.796, 1),
(1484, 757, 1, 4, 0.718, 2.154, 0.796, 1),
(1485, 744, 2, 3, 0.539, 1.617, 0.72, 1),
(1486, 745, 2, 3, 0.577, 1.731, 0.72, 1),
(1487, 746, 2, 3, 0.539, 1.617, 0.72, 1),
(1488, 747, 2, 3, 0.577, 1.731, 0.72, 1),
(1489, 748, 2, 3, 0.539, 1.617, 0.72, 1),
(1490, 749, 2, 3, 0.539, 1.617, 0.72, 1),
(1491, 750, 2, 3, 0.539, 1.617, 0.72, 1),
(1492, 751, 2, 3, 0.577, 1.731, 0.72, 1),
(1493, 752, 2, 3, 0.577, 1.731, 0.72, 1),
(1494, 753, 2, 3, 0.539, 1.617, 0.72, 1),
(1495, 754, 2, 3, 0.539, 1.617, 0.72, 1),
(1496, 755, 2, 3, 0.539, 1.617, 0.72, 1),
(1497, 756, 2, 3, 0.577, 1.731, 0.72, 1),
(1498, 757, 2, 3, 0.539, 1.617, 0.72, 1),
(1499, 744, 3, 2, 0.359, 1.077, 0.485, 1),
(1500, 745, 3, 3, 0.577, 1.731, 0.485, 1),
(1501, 746, 3, 2, 0.359, 1.077, 0.485, 1),
(1502, 747, 3, 3, 0.577, 1.731, 0.485, 1),
(1503, 748, 3, 2, 0.359, 1.077, 0.485, 1),
(1504, 749, 3, 2, 0.359, 1.077, 0.485, 1),
(1505, 750, 3, 2, 0.359, 1.077, 0.485, 1),
(1506, 751, 3, 3, 0.577, 1.731, 0.485, 1),
(1507, 752, 3, 3, 0.577, 1.731, 0.485, 1),
(1508, 753, 3, 2, 0.359, 1.077, 0.485, 1),
(1509, 754, 3, 2, 0.359, 1.077, 0.485, 1),
(1510, 755, 3, 2, 0.359, 1.077, 0.485, 1),
(1511, 756, 3, 3, 0.577, 1.731, 0.485, 1),
(1512, 757, 3, 2, 0.359, 1.077, 0.485, 1),
(1513, 744, 4, 1, 0.18, 0.54, 0.205, 1),
(1514, 745, 4, 2, 0.385, 1.155, 0.205, 1),
(1515, 746, 4, 1, 0.18, 0.54, 0.205, 1),
(1516, 747, 4, 2, 0.385, 1.155, 0.205, 1),
(1517, 748, 4, 1, 0.18, 0.54, 0.205, 1),
(1518, 749, 4, 1, 0.18, 0.54, 0.205, 1),
(1519, 750, 4, 1, 0.18, 0.54, 0.205, 1),
(1520, 751, 4, 2, 0.385, 1.155, 0.205, 1),
(1521, 752, 4, 2, 0.385, 1.155, 0.205, 1),
(1522, 753, 4, 1, 0.18, 0.54, 0.205, 1),
(1523, 754, 4, 1, 0.18, 0.54, 0.205, 1),
(1524, 755, 4, 1, 0.18, 0.54, 0.205, 1),
(1525, 756, 4, 2, 0.385, 1.155, 0.205, 1),
(1526, 757, 4, 1, 0.18, 0.54, 0.205, 1),
(1527, 744, 5, 1, 0.18, 0.54, 0, 1),
(1528, 745, 5, 1, 0.192, 0.576, 0, 1),
(1529, 746, 5, 1, 0.18, 0.54, 0, 1),
(1530, 747, 5, 1, 0.192, 0.576, 0, 1),
(1531, 748, 5, 1, 0.18, 0.54, 0, 1),
(1532, 749, 5, 1, 0.18, 0.54, 0, 1),
(1533, 750, 5, 1, 0.18, 0.54, 0, 1),
(1534, 751, 5, 1, 0.192, 0.576, 0, 1),
(1535, 752, 5, 1, 0.192, 0.576, 0, 1),
(1536, 753, 5, 1, 0.18, 0.54, 0, 1),
(1537, 754, 5, 1, 0.18, 0.54, 0, 1),
(1538, 755, 5, 1, 0.18, 0.54, 0, 1),
(1539, 756, 5, 1, 0.192, 0.576, 0, 1),
(1540, 757, 5, 1, 0.18, 0.54, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(11) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `aktif` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id_periode`, `waktu`, `aktif`) VALUES
(15, '2023', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_mapel` (`id_penempatan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_guru` (`id_karyawan`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `penempatan`
--
ALTER TABLE `penempatan`
  ADD PRIMARY KEY (`id_penempatan`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_nilai` (`id_nilai`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=758;

--
-- AUTO_INCREMENT for table `penempatan`
--
ALTER TABLE `penempatan`
  MODIFY `id_penempatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1541;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_penempatan`) REFERENCES `penempatan` (`id_penempatan`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `guru` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `periode` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `alternatif` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai` FOREIGN KEY (`id_nilai`) REFERENCES `nilai` (`id_nilai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
