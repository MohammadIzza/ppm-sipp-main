-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+focal2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2024 at 03:28 PM
-- Server version: 8.0.40-0ubuntu0.20.04.1
-- PHP Version: 8.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipp`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `iddepartemen` int NOT NULL,
  `namadepartemen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`iddepartemen`, `namadepartemen`) VALUES
(1, 'Biologi'),
(2, 'Fisika'),
(3, 'Ilmu Komputer/Informatika'),
(4, 'Kimia'),
(5, 'Matematika'),
(6, 'Statistika');

-- --------------------------------------------------------

--
-- Table structure for table `jenisfile`
--

CREATE TABLE `jenisfile` (
  `idjenis` int NOT NULL,
  `namafile` varchar(500) NOT NULL,
  `kategori` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisfile`
--

INSERT INTO `jenisfile` (`idjenis`, `namafile`, `kategori`) VALUES
(1, 'Proposal', 'laporan'),
(2, 'Laporan Kemajuan', 'laporan'),
(3, 'Laporan Akhir', 'laporan'),
(4, 'Laporan Penggunaan Dana', 'laporan'),
(5, 'Publikasi Jurnal', 'luaran'),
(6, 'Proceeding (Pemakalah Forum Ilmiah)', 'luaran'),
(7, 'Buku', 'luaran'),
(8, 'Modul Pelatihan', 'luaran'),
(9, 'Teknologi Tepat Guna', 'luaran'),
(10, 'Luaran Lain (Model | Prototype | Karya Seni/Desain/Kriya/Bangunan dan Arsitektur | Rekayasa Sosial)', 'luaran'),
(11, 'Publikasi di Media Massa', 'luaran'),
(12, 'Produk Terstandarisasi', 'luaran'),
(13, 'Produk Tersertifikasi', 'luaran'),
(14, 'Mitra Berbadan Hukum', 'luaran');

-- --------------------------------------------------------

--
-- Table structure for table `peneliti`
--

CREATE TABLE `peneliti` (
  `nipnim` varchar(22) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gelardepan` varchar(100) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `gelarblkg` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `idprodi` int NOT NULL,
  `iduser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peneliti`
--

INSERT INTO `peneliti` (`nipnim`, `gelardepan`, `namalengkap`, `gelarblkg`, `status`, `idprodi`, `iduser`) VALUES
('11000117120127', '', 'Hanjar S', 'S.Kom', 'Mahasiswa', 6, 7),
('11000117120129', '', 'Adhy', '', 'Mahasiswa', 3, 202),
('12345678909876', '', 'Dian ajeng', '', 'Mahasiswa', 1, 2),
('195406081986032001', 'Dr.Dra.', 'Enny Yusuf Wachidah Yuniwarti', 'MP', 'Dosen', 1, 65),
('195412191980031003', 'Drs.', 'Djalal Er Riyanto', 'M.IKom.', 'Dosen', 3, 130),
('195504071983031003', 'Drs.', 'Suhartono', 'M.IKom', 'Dosen', 3, 77),
('195505281980031002', 'Prof. Drs.', 'Mustafid', 'M.Eng., Ph.D.', 'Dosen', 6, 217),
('195605191984032001', 'Dr', 'ERRY WIRYANI', 'M.S', 'Dosen', 1, 157),
('195607301981092001', 'Dra.', 'M.G. Isworo Rukmi', 'M.Kes', 'Dosen', 1, 139),
('195705181986022001', 'Dra', 'Nies Suci Mulyani', 'M.S', 'Dosen', 4, 140),
('195707041986031003', 'Dr. Drs.', 'Udi Tarwotjo', 'M.P.', 'Dosen', 1, 224),
('195708071987032001', 'Dra.', 'Dewi Kusrini', 'M.Si.', 'Dosen', 4, 143),
('195709141986032001', 'Dra.', 'Dwi Ispriyanti', 'M.Si', 'Dosen', 6, 71),
('195711261990011001', 'Prof. Dr.', 'Muhammad Nur', 'DEA', 'Dosen', 2, 47),
('195806151985031002', 'Prof.Dr.', 'Wahyu Setia Budi', 'M.S.', 'Dosen', 2, 179),
('195809011986032002', 'Prof. Dr. Dra.', 'Sunarsih', 'M.Si', 'Dosen', 5, 173),
('195809051987031002', 'Dr.', 'Dwi Purwantoro Sasongko', 'M.Si.', 'Dosen', 2, 125),
('195810141986032002', 'Dr.', 'Munifatul Izzati', 'M.Sc', 'Dosen', 1, 132),
('195902111989032001', 'Dra', 'ARNELLI', 'M.Si', 'Dosen', 4, 196),
('195905031985032001', 'Dra.', 'MURNINGSIH', 'M.Si', 'Dosen', 1, 150),
('195905141987032001', 'Dra', 'SRI HARYANTI', 'M.Si', 'Dosen', 1, 106),
('195907041987032001', 'Dr. Ir.', 'Ainie Khuriati Riza Sulistiati', 'DEA.', 'Dosen', 2, 178),
('195911261988102001', 'Dr.', 'Endang Kusdiyantini', 'DEA', 'Dosen', 1, 225),
('195912261986031003', 'Drs.', 'Sarjana Parman', 'M.Si', 'Dosen', 1, 166),
('196001081987031002', 'Dr.Drs.', 'Mochamad Hadi', 'M.Si.', 'Dosen', 1, 148),
('196005101989032001', 'Prof. Dr. Dra.', 'Meiny Suzery', 'M.S.', 'Dosen', 4, 95),
('196009211987032001', 'Dr.', 'Sri Utami', 'M.S', 'Dosen', 1, 188),
('196102211987102001', 'Dr.', 'Rini Budihastuti', 'M.Si.', 'Dosen', 1, 223),
('196103101988032001', 'Dr.', 'Sumariyah', 'M.Si', 'Dosen', 2, 46),
('196103211987032003', 'Dra.', 'Riche Hariyati', 'M.Si', 'Dosen', 1, 133),
('196104231987032001', 'Dra.', 'SILVANA TANA', 'M.Si.', 'Dosen', 1, 80),
('196105051986032003', 'Prof. Dr. Dra.', 'Endah Dwi Hastuti', 'M.Si.', 'Dosen', 1, 104),
('196109201987031001', 'Drs.', 'AGUNG SUPRIHADI', 'M.Si', 'Dosen', 1, 153),
('196109281986032002', 'Dr. Dra.', 'Tatik Widiharih', 'M.Si.', 'Dosen', 6, 172),
('196110241987032002', 'Dra', 'ENNY FACHRIYAH', 'M.Si', 'Dosen', 4, 128),
('196211231988101001', '', 'MUHAMMAD ANWAR DJAELANI', 'M.Kes', 'Dosen', 1, 154),
('196301291991031003', 'Drs.', 'Abdul Haris', 'M.Si', 'Dosen', 4, 44),
('196303161988101001', 'Dr.', 'Bambang Cahyono', '', 'Dosen', 4, 94),
('196304301994032001', 'Drs.', 'Siti Muflichatun Mardiati', 'M.Kes.', 'Dosen', 1, 221),
('196306051992031003', 'Drs.', 'Budi Raharjo', 'M.Si.', 'Dosen', 1, 57),
('196307061991021001', 'Dr.', 'Tarno', 'M.Si', 'Dosen', 6, 67),
('196308251990031003', 'Drs.', 'Kartono', 'M.Si', 'Dosen', 5, 127),
('196310131992021001', 'Drs.', 'Suhartana', 'M.Si.', 'Dosen', 4, 88),
('196311041989032001', 'Dr.', 'Tyas Rini Saraswati', 'M.Kes', 'Dosen', 1, 61),
('196311051988031001', 'Drs.', 'Bayu Surarso', 'M.Sc., Ph.D', 'Dosen', 5, 175),
('196311301988122001', 'Dr. Dra.', 'Susiana Purwantisari', 'M.Si', 'Dosen', 1, 162),
('196312071991021001', 'Drs.', 'Pratama Jujur Wibawa', 'M.Si., Ph.D', 'Dosen', 4, 82),
('196401151993032002', 'Dra.', 'Linda Suyati', 'M.Si', 'Dosen', 4, 146),
('196402231991022001', 'Dr.', 'Titi Udjiani SRRM', 'M.Si', 'Dosen', 5, 90),
('196403251990031001', 'Dr.', 'Jafron Wasiq Hidayat', 'M.Sc.', 'Dosen', 1, 220),
('196403271990011001', 'Dr.', 'Sutimin', 'M.Si', 'Dosen', 5, 164),
('196404241990011001', 'Dr.', 'Parsaoran Siahaan', 'M.S.', 'Dosen', 4, 232),
('196404291989032001', 'Prof. Dr.', 'Tri Retnaningsih Soeprobowati', 'M.App.Sc.', 'Dosen', 1, 218),
('196405181992031002', 'Dr. Drs', 'CATUR EDI WIDODO', 'M.T', 'Dosen', 2, 170),
('196407091992011001', 'Drs', 'SUDARNO', 'M.Si', 'Dosen', 6, 74),
('196407191993031002', 'Drs.', 'Tony Yulianto', 'M.T', 'Dosen', 2, 103),
('196408131990011001', 'Drs.', 'Agus Rusgiyono', 'M.Si.', 'Dosen', 6, 66),
('196408181990031001', 'Dr.', 'Ahmad Suseno', 'M.Si', 'Dosen', 4, 189),
('196408251991031001', 'Drs.', 'Gunawan', 'M.Si., Ph.D.', 'Dosen', 4, 43),
('196408291991021001', 'Drs.', 'Isnain Gunadi', 'M.Si', 'Dosen', 2, 210),
('196409181993031002', 'Drs.', 'Yusephus Decupertino Sumanto', 'M.Si.', 'Dosen', 5, 233),
('196410091990012001', 'Dr.', 'Nurhayati', 'M.Si', 'Dosen', 1, 167),
('196501211992031003', 'Drs. M.', 'Irham Nurwidyanto', 'M.T', 'Dosen', 2, 49),
('196502251992011001', 'Dr.', 'Rukun Santoso', 'M.Si', 'Dosen', 6, 83),
('196506221989032001', 'Prof. Dr. Dra.', 'Dwi Hudiyanti', 'M.Sc', 'Dosen', 4, 138),
('196509131990032001', 'Dra.', 'Suparti', 'M.Si.', 'Dosen', 6, 63),
('196510181991031002', 'DR. Drs.', 'Wijanarka', 'MSi', 'Dosen', 1, 33),
('196511071992031003', 'Drs.', 'Eko Adi Sarwoko', 'M.Kom', 'Dosen', 3, 168),
('196511231994031003', 'Dr.', 'Rahmat Gernowo', 'M.Si', 'Dosen', 2, 96),
('196608031992031003', 'Drs.', 'Indras Marhaendrajaya', 'M.Si', 'Dosen', 2, 55),
('196612261994031008', 'Prof. Drs.', 'Sapto P. Putro', 'M.Si., Ph.D.', 'Dosen', 1, 144),
('196701231991032001', 'Dra.', 'Agung Janika Sitasiwi', 'M.Si', 'Dosen', 1, 152),
('196702201992031002', 'Drs.', 'Ketut Sofjan Firdausi', 'M.Sc.', 'Dosen', 2, 136),
('196703111993031005', 'Dr.', 'Priyono', 'M.Si', 'Dosen', 2, 51),
('196707261994031002', 'Dr.', 'Jumari', 'S.Si, M.Si', 'Dosen', 1, 161),
('196707291994031001', '', 'Bambang Irawanto', 'S.Si, M.Si', 'Dosen', 5, 182),
('196708221993032001', 'Dr.', 'Sri Darmanti', 'M.Si.', 'Dosen', 1, 105),
('196709081993032001', 'Dr.', 'ENDANG SAPTININGSIH', 'M.Si', 'Dosen', 1, 156),
('196802191991032001', 'Dr.', 'Erma Prihastanti', 'M.Si', 'Dosen', 1, 62),
('196806181994032002', 'Dr.', 'Arina Tri Lunggani', 'M.Si.', 'Dosen', 1, 155),
('196807141994031004', '', 'Suryoto', 'S.Si., M.Si.', 'Dosen', 5, 235),
('196810231995031001', 'Dr.', 'Sri Isdadiyanto', 'S.Si., M.Si.', 'Dosen', 1, 39),
('196811041994031002', 'Dr.', 'KHAIRUL ANAM', 'M.Si', 'Dosen', 4, 142),
('196902051994032002', 'Dra', 'SRIYANTI', 'M.Si', 'Dosen', 4, 115),
('196902141994032002', 'Prof. Dr.', 'Widowati', 'S. Si, M. Si', 'Dosen', 5, 112),
('196903211994031007', '', 'Much. Azam', 'S.Si, M.Si', 'Dosen', 2, 149),
('196903301994032001', 'Dr.', 'Lilih Khotimperwati', 'S.Si., M.Si', 'Dosen', 1, 185),
('196906201999031002', '', 'Ngadiwiyana', 'S.Si., M.Si', 'Dosen', 4, 119),
('196910111997021001', '', 'Ismiyarto', 'S.Si., M.Si., Ph.D', 'Dosen', 4, 124),
('196912291999032002', 'Dr.', 'Iis Nurhasanah', '', 'Dosen', 2, 97),
('197002081994032001', 'Prof.Dr.', 'Hermin Pancasakti Kusumaningrum', 'S.Si., M.Si', 'Dosen', 1, 141),
('197005191998022001', '', 'Yuciana Wilandari', 'S.Si, M.Si', 'Dosen', 6, 116),
('197005211999031001', '', 'Didik Setiyo Widodo', 'S.Si., M.Si.', 'Dosen', 4, 87),
('197007021996031004', 'Prof. Dr.', 'M. Cholid Djunaidi', 'S.Si., M.Si', 'Dosen', 4, 176),
('197007051997021001', '', 'Priyo Sidik Sasongko', 'S.Si, M.Kom', 'Dosen', 3, 102),
('197008011999032001', 'Dr.', 'Agustina Lulustyaningati Nurul Aminin', 'M.Si', 'Dosen', 4, 131),
('197012021997022001', 'Dr.', 'Retno Ariadi Lusiana', 'M.Si', 'Dosen', 4, 38),
('197103151997022001', '', 'Sriatun Sriatun', '', 'Dosen', 4, 48),
('197104091997021002', 'Dr.', 'Karyadi Baskoro', 'S.Si., M.Si.', 'Dosen', 1, 212),
('197105211998021001', 'Dr.', 'RAHMAD NURYANTO', 'S.Si,M.Si', 'Dosen', 4, 195),
('197105221997021001', '', 'V. Gunawan Slamet Kadarisman', 'S.Si., M.Si., Ph.D.', 'Dosen', 2, 137),
('197106231998021001', 'Dr.', 'Mukhammad Asy\'ari', 'S.Si., M.Si', 'Dosen', 4, 99),
('197106271998022001', '', 'Lucia Ratnasari', 'S.Si., M.Si.', 'Dosen', 5, 234),
('197107111998022001', 'Dr.', 'YULITA NURCHAYATI', 'S.Si, M.Si', 'Dosen', 1, 187),
('197108031998022001', 'Dr.', 'Siti Nur Jannah', 'S.Si, M.Si', 'Dosen', 1, 75),
('197108101999031001', 'Dr. Eng.', 'Udi Harmoko', 'M.Si', 'Dosen', 2, 52),
('197108111997021004', '', 'Aris Sugiharto', 'S.Si., M.Kom', 'Dosen', 3, 84),
('197108131995121001', 'Dr.', 'Agus Subagio', 'S.Si., M.Si', 'Dosen', 2, 160),
('197109061998032001', '', 'Triastuti Wuryandari', 'S.Si, M.Si', 'Dosen', 6, 36),
('197110011997022001', '', 'Evi Setiawati', 'S.Si,M.Si ', 'Dosen', 2, 121),
('197110021997021001', 'Dr.', 'ASEP YOYO WARDAYA', 'M.Si', 'Dosen', 2, 159),
('197112021998022001', 'Dr.', 'Choiril Azmiyawati', 'S.Si., M.Si.', 'Dosen', 4, 145),
('197201021998032001', 'Dr.', 'RINA DWI INDRIANA', 'S.Si, M.Si.', 'Dosen', 2, 109),
('197202022008011018', '', 'ABDUL HOYYI', 'S.Si, M.Si', 'Dosen', 6, 37),
('197202031998021001', '', 'Robertus Heri Soelistyo Utomo', 'M.Si', 'Dosen', 5, 134),
('197203121997021001', '', 'PARDOYO', 'S.Si, M.Si', 'Dosen', 4, 184),
('197203171998021001', 'Prof. Dr.', 'Kusworo Adi', 'S.Si., M.T.', 'Dosen', 2, 101),
('197207022000031001', '', 'Rully Rahadian', 'M.Si., Ph.D', 'Dosen', 1, 76),
('197207121997021001', 'Dr.', 'Gatot Yuliyanto', 'M.Si', 'Dosen', 2, 86),
('197208181999032001', 'Dr.', 'Rejeki Siti ferniah', 'S.Si., M.Si', 'Dosen', 1, 126),
('197211211998021001', 'Dr.', 'Jatmiko Endro Suseno', 'M.Si', 'Dosen', 2, 107),
('197301031998021001', 'Dr. Eng.', 'Eko Hidayanto', 'S.Si., M.Si.', 'Dosen', 2, 56),
('197301132000031002', 'Dr.', 'Sri Pujiyanto', 'S.Si, M.Si', 'Dosen', 1, 50),
('197302012000031001', 'Dr.', 'Sri Widodo Agung Suedy', 'S.Si., M.Si.', 'Dosen', 1, 222),
('197302282000032001', '', 'Tri Windarti', 'S.Si, M.Si', 'Dosen', 4, 120),
('197303141999032002', '', 'Purbowatiningrum Ria Sardjono', 'S.Si, M.Si', 'Dosen', 4, 123),
('197305221998021001', '', 'Khabibi', 'S.Si., M.Si', 'Dosen', 4, 193),
('197306171999031003', 'Dr.', 'Fuad Muhammad', 'S.Si., M.Si.', 'Dosen', 1, 213),
('197306301998021001', 'Prof. Dr.', 'Suryono', 'S.Si., M.Si.', 'Dosen', 2, 228),
('197307111997022001', 'Dr.', 'DI ASIH I MARUDDANI', 'S.Si., M.Si.', 'Dosen', 6, 34),
('197308251999031002', 'Dr. Eng.', 'Agus Setyawan', 'S.Si, M.Si', 'Dosen', 2, 42),
('197308291998022001', '', 'BETA NORANITA', 'S.Si., M.Kom', 'Dosen', 3, 169),
('197309161997021001', 'Dr. rer. nat.', 'Anto Budiharjo', 'S.Si., M.Biotech', 'Dosen', 1, 58),
('197309221998021001', 'Dr.', 'Sunarno', 'S.Si, M.Si', 'Dosen', 1, 68),
('197310031999031001', '', 'Teguh Suprihatin', 'S.Si., M.Si.', 'Dosen', 1, 151),
('197311211997021001', '', 'Adi Darmawan', 'Ph.D', 'Dosen', 4, 114),
('197312202000121001', '', 'Farikhin', 'S.Si., M.Si., Ph.D', 'Dosen', 5, 122),
('197404011999031002', 'Dr.', 'Aris Puji Widodo', 'MT.', 'Dosen', 3, 78),
('197404122003122001', 'Dr.', 'NINTYA SETIARI', 'S.Si, M.Si', 'Dosen', 1, 186),
('197405082000032001', 'Dr.', 'Ngurah Ayu Ketut Umiati', 'S.Si, M.Si.', 'Dosen', 2, 129),
('197407172000121001', 'Dr.', 'Redemtus Heru Tjahjana', 'S.Si, M.Si', 'Dosen', 5, 113),
('197410142000121001', 'Dr.', 'Susilo Hariyanto', 'S.Si., M.Si.', 'Dosen', 5, 174),
('197502151998021001', 'Prof. Dr.', 'Heri Sutanto', 'S.Si., M.Si.', 'Dosen', 2, 41),
('197508241999031003', 'Dr.', 'BUDI WARSITO', 'S.Si, M.Si', 'Dosen', 6, 35),
('197510082003122001', '', 'Diah Safitri', 'S.Si, M.Si', 'Dosen', 6, 117),
('197601102009122002', '', 'DINAR M K NUGRAHENI', 'S.T, M.Info Tech (Comp), PhD', 'Dosen', 3, 171),
('197610192005011001', '', 'Sugito', 'S.Si, M.Si', 'Dosen', 6, 70),
('197705102008121001', '', 'ZAENAL ARIFIN', 'S.Si., M.Si', 'Dosen', 2, 81),
('197705262005012001', 'Dr.', 'KASIYATI', 'S.Si, M.Si', 'Dosen', 1, 177),
('197805022005012002', '', 'Sukmawati Nur Endah', 'S.Si, M.Kom', 'Dosen', 3, 59),
('197805162003121001', '', 'Helmie Arif Wibawa', 'S.Si, M.Cs', 'Dosen', 3, 79),
('197806082003121001', '', 'Zaenul Muhlisin', 'M.Si.', 'Dosen', 2, 89),
('197808172005011001', '', 'Moch. Abdul Mukid', 'S.Si, M.Si.', 'Dosen', 6, 54),
('197901042006041001', 'Dr.', 'CHOIRUL ANAM', 'S.Si, M.Si', 'Dosen', 2, 183),
('197902122008121002', '', 'Indra Waspada', 'ST, MTI', 'Dosen', 3, 64),
('197905242009121003', '', 'Sutikno', 'S.T, M.Cs', 'Dosen', 3, 69),
('197907202003121002', '', 'Nurdin Bahtiar', 'S.Si, M.T', 'Dosen', 3, 92),
('197910182006042001', '', 'Siti Khabibah', 'S.Si, M.Sc', 'Dosen', 5, 118),
('198009102005012002', '', 'Rita Rahmawati', 'S.Si., M.Si.', 'Dosen', 6, 73),
('198009142006041002', '', 'Edy Suharto', 'S.T., M.Kom', 'Dosen', 3, 214),
('198010072005011002', '', 'Heri Sugito', 'S.Si., M.Sc', 'Dosen', 2, 135),
('198010212005011003', '', 'Ragil Saputra', 'S.Si, M.Cs', 'Dosen', 3, 72),
('198012272015041002', '', 'Guruh Aryotejo', 'S.Kom., M.Sc.', 'Dosen', 3, 216),
('198101272006041002', '', 'Pandji Triadyaksa', 'S.Si., M.Sc.', 'Dosen', 2, 215),
('198104202005012001', 'Dr.', 'Retno Kusumaningrum', 'S.Si., M.Kom.', 'Dosen', 3, 45),
('198104212008121002', '', 'Panji Wisnu Wirawan', 'ST, MT', 'Dosen', 3, 100),
('198106202015041002', '', 'Muhammad Malik Hakim', 'S.T., M.T.I.', 'Dosen', 3, 229),
('198112022005011002', '', 'Nor Basid Adiwibawa Prasetya', 'S.Si., M.Sc., Ph.D.', 'Dosen', 4, 165),
('198203092006041002', 'Dr.Eng.', 'Adi Wibowo', 'S.Si, M.Kom', 'Dosen', 3, 60),
('198207152008012011', '', 'Iut Tri Utami', 'S.Si., M.Si.', 'Dosen', 6, 237),
('198209182006042001', '', 'Yayuk Astuti', 'S.Si, Ph.D', 'Dosen', 4, 85),
('198212172006041003', '', 'HASBI YASIN', 'S.Si., M.Si.', 'Dosen', 6, 40),
('198302032006041002-', '', 'Satriyo Adhy', 'S.Si, M.T', 'Dosen', 3, 32),
('198308072014041001', 'Dr', 'ALI KHUMAENI', 'S.Si, M.E', 'Dosen', 2, 158),
('198404112019031009', '', 'Fajar Agung Nugroho', 'S.Kom., M.Cs.', 'Dosen', 3, 230),
('198502062015041003', '', 'Abdul Aziz', 'S.Si., M.Sc.', 'Dosen', 5, 197),
('198506302012121001', '', 'Solikhin', 'S.Si., M.Sc.', 'Dosen', 5, 111),
('198511252018032001', '', 'Rismiyati', 'B.Eng, M.Cs', 'Dosen', 3, 180),
('198603142012121006', '', 'Qidir Maulana Binu Soesanto', 'S.Si., M.Sc., Ph.D.', 'Dosen', 2, 191),
('198604132009122007', '', 'Nikken Prima Puspita', 'S.Si., M.Sc', 'Dosen', 5, 91),
('198609012014041003', '', 'Sutrisno', 'S.Si, M.Sc', 'Dosen', 5, 110),
('198803222020121010', '', 'Prajanto Wahyu Adi', 'M.Kom.', 'Dosen', 3, 231),
('198804212014041002', '', 'ALAN PRAHUTAMA', 'S.Si, M.Si', 'Dosen', 6, 53),
('198903032015042002', '', 'Khadijah', 'S.Kom, M.Cs', 'Dosen', 3, 163),
('199105212019032021', '', 'Puspita Kartikasari', 'S.Si., M.Si.', 'Dosen', 6, 192),
('199305232019032021', '', 'Anindita Henindya Permatasari', 'S.Si., M.Mat', 'Dosen', 5, 190),
('199307302018031001', '', 'Arief Rachman Hakim', 'S.Si, M.Si', 'Dosen', 6, 181),
('199311042017072002', 'Dr.', 'Hanjar Setyowati', 'M.Kom', 'Dosen', 2, 1),
('199504212019031014', '', 'Damar Nurwahyu Bima', 'S.Si, M.SI', 'Dosen', 4, 194),
('24010118100047', '', 'Andriana Vian', '', 'Mahasiswa', 6, 30),
('24050118130087', '', 'Liliana Eka', '', 'Mahasiswa', 1, 31),
('24060117120009', '', 'Sisca Ayu Febrianti', '', 'Mahasiswa', 3, 209),
('24060117120033', '', 'Haris Fadilah', '', 'Mahasiswa', 3, 204),
('24060117120034', '', 'Haris F', '', 'Mahasiswa', 3, 205),
('24060118130135', '', 'Safira Rahma Dewi', '', 'Mahasiswa', 3, 203),
('24060119140120', '', 'Affan Noviananda Putra', '', 'Mahasiswa', 3, 238),
('24060121120033', 'sr', 'Nafis Mufadhal', '', 'Mahasiswa', 3, 240),
('24060121140040', '', 'Azra Muhammad Bhaskarogra', '', 'Mahasiswa', 3, 241),
('24061118120034', '', 'Adam Sukmana', '', 'Mahasiswa', 3, 206),
('H.7.196411242019092001', '', 'Ratna Herdiana', 'M.Sc., Ph.D.', 'Dosen', 5, 236),
('H.7.198608012021041001', '', 'Fajar Arianto', 'S.Si., M.Si.', 'Dosen', 2, 229),
('H.7.1993110420180720', 'Dr.', 'Ariana', '', 'Dosen', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `idpengumuman` int NOT NULL,
  `judul` varchar(500) NOT NULL,
  `tglpos` datetime NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`idpengumuman`, `judul`, `tglpos`, `isi`) VALUES
(1, 'Penerimaan Proposal Sumber Dana Selain APBN Fakultas Sains dan Matematika Undip Tahun 2022', '2022-06-13 12:52:18', '<p>Penerimaan Proposal Sumber Dana Selain APBN Fakultas Sains dan Matematika Undip Tahun 2022. Beberapa panduan dapat diunduh pada lampiran dibawah ini.</p><p>Group WA Ketua Peneliti FSM : <a href=\"https://bit.ly/wagPenelitiFSM\">https://bit.ly/wagPenelitiFSM</a>&nbsp;</p><p>Panduan penggunaan aplikasi PPM-FSM : <a href=\"https://bit.ly/uploadPPMFSM\">https://bit.ly/uploadPPMFSM</a>&nbsp;</p><p>Panduan input data Mahasiswa (email mahasiswa menggunakan @students.undip.ac.id) : <a href=\"https://bit.ly/inputMahasiswa\">https://bit.ly/inputMahasiswa</a>&nbsp;</p><p>Informasi akun login dapat diperiksa email @lecturer.undip.ac.id masing-masing Bpk/Ibu Dosen, apabila terdapat kendala dapat menghubungi Contak Person Teknis.</p><p>Contact Person Teknis :</p><ul><li>Okky : +6285641988109</li><li>Alik M : +628112991385</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `pengumumanlampiran`
--

CREATE TABLE `pengumumanlampiran` (
  `id` int NOT NULL,
  `idpengumuman` int NOT NULL,
  `namalampiran` varchar(500) NOT NULL,
  `lampiran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumumanlampiran`
--

INSERT INTO `pengumumanlampiran` (`id`, `idpengumuman`, `namalampiran`, `lampiran`) VALUES
(2, 1, 'Pengumuman Pengumpulan Prop Penelitian dan Pengabdian Masyarakat', './uploads/pengumuman/ID-1_Pengumpulan_Prop_Penelitian_dan_Pengabdian_Masyarakat_2022_Dosen.pdf'),
(3, 1, 'Buku Panduan Penelitian & Pengabdian Kepada Masyarakat FSM 2022 - Dosen', './uploads/pengumuman/ID-1_Buku_Panduan_PEN_PKM_FSM_2022.pdf'),
(4, 1, 'Buku Panduan Penelitian & Pengabdian Kepada Masyarakat FSM 2022 - Mahasiswa', './uploads/pengumuman/ID-1_Panduan_Penelitian_dan_PPM_FSM_UNDIP_Tahun_2022_Mahasiswa.pdf'),
(5, 1, 'Panduan Laporan Pertanggungjawaban Keuangan PPM FSM 2022', './uploads/pengumuman/ID-1_Panduan_Laporan_Pertanggungjawaban_Keuangan_PPM_FSM_2022.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `idperiode` int NOT NULL,
  `nama` varchar(250) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `end_laporan` date DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`idperiode`, `nama`, `start`, `end`, `end_laporan`) VALUES
(1, '2021-1', '2021-08-12', '2021-09-30', '2021-12-31'),
(2, '2021-2', '2021-07-01', '2022-02-09', '2022-01-10'),
(5, '2022-1', '2022-08-31', '2025-03-04', '2025-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `idprodi` int NOT NULL,
  `iddepartemen` int NOT NULL,
  `namaprodi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`idprodi`, `iddepartemen`, `namaprodi`) VALUES
(1, 1, 'Biologi'),
(2, 2, 'Fisika'),
(3, 3, 'Informatika'),
(4, 4, 'Kimia'),
(5, 5, 'Matematika'),
(6, 6, 'Statistika'),
(7, 1, 'Bioteknologi');

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `idsk` int NOT NULL,
  `idperiode` int NOT NULL,
  `idtemplate` int NOT NULL,
  `nosk` varchar(50) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `sumberdana` varchar(250) NOT NULL,
  `tanggalmulai` date NOT NULL,
  `tanggalakhir` date NOT NULL,
  `tanggalpenetapan` date NOT NULL,
  `namadekan` varchar(200) NOT NULL,
  `nipdekan` varchar(25) NOT NULL,
  `generatedate` date NOT NULL,
  `fileloc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`idsk`, `idperiode`, `idtemplate`, `nosk`, `judul`, `sumberdana`, `tanggalmulai`, `tanggalakhir`, `tanggalpenetapan`, `namadekan`, `nipdekan`, `generatedate`, `fileloc`) VALUES
(1, 1, 1, '902/UN7.5.8.2/HK/2021', 'ALOKASI DANA PENELITIAN DI LINGKUNGAN FAKULTAS SAINS DAN MATEMATIKA UNIVERSITAS DIPONEGORO', 'DPA FSM Undip Tahun 2021', '2021-03-03', '2021-10-31', '2021-03-08', 'PROF. DR. WIDOWATI, S.SI., M.SI.', '196902141994032002', '2021-10-07', './uploads/sk/902_UN7582_HK_2021.docx'),
(3, 1, 2, '901/UN7.5.8.2/HK/2021', 'ALOKASI DANA PENGABDIAN KEPADA MASYARAKAT (SEMESTER GENAP TA 2020/2021) DI LINGKUNGAN FAKULTAS SAINS DAN MATEMATIKA UNIVERSITAS DIPONEGORO ', 'DPA FSM Undip Tahun 2021', '2021-03-08', '2021-06-30', '2021-03-08', 'PROF. DR. WIDOWATI, S.SI., M.SI.', '196902141994032002', '2021-10-07', './uploads/sk/901_UN7582_HK_2021.docx'),
(5, 1, 4, '1242/UN7.5.8.2/HK/2021', 'ALOKASI DANA PENELITIAN MAHASISWA DI LINGKUNGAN FAKULTAS SAINS DAN MATEMATIKA UNIVERSITAS DIPONEGORO', 'DPA FSM Undip Tahun 2021', '2021-04-01', '2021-08-31', '2021-04-01', 'PROF. DR. WIDOWATI, S.SI., M.SI.', '196902141994032002', '2021-10-07', './uploads/sk/1242_UN7582_HK_2021.docx'),
(6, 1, 5, '1244/UN7.5.8.2/HK/2021', 'ALOKASI DANA PENGABDIAN MASYARAKAT (SEMESTER GENAP TA 2020/2021) MAHASISWA DI LINGKUNGAN FAKULTAS SAINS DAN MATEMATIKA UNIVERSITAS DIPONEGORO ', 'DPA FSM Undip Tahun 2021', '2021-04-01', '2021-06-30', '2021-04-01', 'PROF. DR. WIDOWATI, S.SI., M.SI.', '196902141994032002', '2021-10-07', './uploads/sk/1244_UN7582_HK_2021.docx'),
(7, 2, 1, '904/UN7.5.8.2/HK/2021', 'ALOKASI DANA PENELITIAN PENGEMBANGAN TEKNOLOGI INFORMASI FSM UNDIP 2021', 'Non-APBN FSM 2021', '2021-04-08', '2021-10-30', '2021-04-08', 'PROF. DR. WIDOWATI, S.SI, M.SI', '196902141994032002', '2021-12-24', './uploads/sk/904_UN7582_HK_2021(1).docx');

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE `skema` (
  `idskema` int NOT NULL,
  `idtemplate` int NOT NULL,
  `namaskema` varchar(250) NOT NULL,
  `program` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`idskema`, `idtemplate`, `namaskema`, `program`, `status`, `keterangan`) VALUES
(1, 6, 'Riset Utama A', 'Penelitian', 'aktif', ''),
(2, 6, 'Riset Utama B', 'Penelitian', 'aktif', ''),
(3, 1, 'Riset Utama', 'penelitian', 'aktif', ''),
(4, 2, 'Pengabdian Wajib Dosen', 'pengabdian', 'nonaktif', ''),
(5, 4, 'Penelitian Mahasiswa', 'penelitian', 'nonaktif', ''),
(6, 5, 'Pengabdian Mahasiswa', 'pengabdian', 'nonaktif', ''),
(7, 0, 'Penelitian Wajib Dosen', 'penelitian', 'nonaktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `idtemplate` int NOT NULL,
  `namatemplate` varchar(500) NOT NULL,
  `fileloc` varchar(500) NOT NULL,
  `keterangan` text NOT NULL,
  `tglunggah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`idtemplate`, `namatemplate`, `fileloc`, `keterangan`, `tglunggah`) VALUES
(1, 'Template Penelitian Dosen', './uploads/template/Template_Penelitian_Dosen.docx', '-', '2021-09-23'),
(2, 'Template Pengabdian Dosen', './uploads/template/Template_Pengabdian_Dosen.docx', '-', '2021-09-23'),
(4, 'Template Penelitian Mahasiswa', './uploads/template/Template_Penelitian_Mahasiswa.docx', '--', '2021-09-19'),
(5, 'Template PKM Mahasiswa', './uploads/template/Template_PKM_Mahasiswa.docx', '-', '2021-09-19'),
(6, 'tes', './uploads/template/tes.docx', 'tes', '2024-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `previledges` varchar(255) NOT NULL,
  `idprodiadmin` int DEFAULT NULL,
  `verifcode` varchar(255) NOT NULL,
  `aktivasi` varchar(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  `avatar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `namalengkap`, `previledges`, `idprodiadmin`, `verifcode`, `aktivasi`, `token`, `avatar`) VALUES
(1, 'sella.online57@gmail.com', '$2y$12$riGvg2LR5SoOP8NDsumrV.qV1P0SXzc5Xin/QFVvFDfHN1Bafokqi', 'Hanjar Setyowati', 'peneliti', NULL, '', 'true', '648159', ''),
(2, 'hanjar@student.undip.ac.id', '$2y$12$mJQy6khHX.xLG37S10NPIel3yvM2iRLKBsS4DFozDL5T.Sv5JKSIC', 'Dian ajeng', 'peneliti', NULL, '', 'true', '', ''),
(3, 'setyowatihanjar@staff.undip.ac.id', '$2y$12$xEjlSnrD5IUYGwFawdbqwuDCKxBdcJBlbSAJqczVUcMdRPkZvQHYG', 'Hanjar Setyowati', 'admin fakultas', NULL, '', 'true', '', ''),
(7, 'setyowati.hanjar@gmail.com', '$2y$12$1GZLckKmlFxFwz3KYvmZ8ujbjDfl/iCi0y7VcnaaP9ioPbr3Hogiq', 'Hanjar S', 'peneliti', NULL, '', 'true', '', ''),
(8, 'ariana@lecturer.undip.ac.id', '$2y$12$nkIrq.uE78HF/0XrwLgsTeClRhKmNArGY92uVgbChGTVN6OA/zt0u', 'Ariana', 'peneliti', NULL, '', 'true', '', ''),
(27, 'dianajeng@staff.undip.ac.id', '$2y$12$0AaEBN6gl9UMZEi.NrK.1O7/XzbwZXPOcIkIj/m.v/XlyvFOY9RDW', 'Dian ajeng', 'admin prodi', 6, '', 'true', '', ''),
(30, 'vian_a@student.undip.ac.id', '$2y$12$E2WH0BKhtQxZrB.kNywmu.GeDhRElIrZCb.CQynnGKDdmUIwVrT7C', 'Andriana Vian', 'peneliti', NULL, '', 'true', '', ''),
(31, 'lilianaeka@student.undip.ac.id', '$2y$12$GG.EG2b2g3kgzs4ysf2eju3rXxUB1FyfX5.Jqz5pNVKMJu.cdlJLq', 'Liliana Eka', 'peneliti', NULL, '', 'true', '', ''),
(32, 'satriyo@lecturer.undip.ac.id', '$2y$12$gvOkeqEAn0MoOvd30CQOa.O4OmushyPs6xvRoJ8rDooUSUgnH6JgK', 'Satriyo Adhy', 'peneliti', NULL, 'ElQbWIc12BUM', 'true', '', ''),
(33, 'wijanarka@lecturer.undip.ac.id', '$2y$12$gxffGqDUUaffHblfJSl.eebViLNjCz94aY/vFSsW59QYrGtIatOnu', 'Wijanarka', 'peneliti', NULL, '', 'true', '', ''),
(34, 'maruddani@lecturer.undip.ac.id', '$2y$12$QIzaRYcYVBI0rctVT7WjK.6.rVt3Us/nVokP0JR2UJ170/1D27nu6', 'DI ASIH I MARUDDANI', 'peneliti', NULL, '', 'true', '', ''),
(35, 'budiwarsito@lecturer.undip.ac.id', '$2y$12$CCsU/cFxGQqL86RUHo6mTeVPMGAy7r8uua07vqk6BTkKfvWR2dX1m', 'BUDI WARSITO', 'peneliti', NULL, '', 'true', '', ''),
(36, 'triastutiwuryandari@lecturer.undip.ac.id', '$2y$12$UWPIELKatd.PVuXxF8ZZ7uALpn7C8iyTGICnpoAwInKeFf2R3mbHC', 'Triastuti Wuryandari', 'peneliti', NULL, '', 'true', '', ''),
(37, 'abdulhoyyi@lecturer.undip.ac.id', '$2y$12$Z/FzbJZJKj0pnwrCksYMCefkK80/AaQz8jtJpTGcK2B0w7dwS02j2', 'ABDUL HOYYI', 'peneliti', NULL, '', 'true', '', ''),
(38, 'retno.lusiana@lecturer.undip.ac.id', '$2y$12$Om.o5Eoqq3/ynP8ZqENg8eb8g007869KzH51x9Mot4FHCV7UGqFtG', 'Retno Ariadi Lusiana', 'peneliti', NULL, '', 'true', '', ''),
(39, 'sriisdadiyanto@lecturer.undip.ac.id', '$2y$12$IO3SEX9vKiZti6UiRrJFjeMLy4L5Nrkfqz6lJ8dcsy9mR3iwMV7o2', 'Sri Isdadiyanto', 'peneliti', NULL, '', 'true', '', ''),
(40, 'hasbiyasin@lecturer.undip.ac.id', '$2y$12$8apuFW3Uc3Z/jklLcdzvO.TXMpq/mw3EL0d0bP.7Iemv85fzXvsX.', 'HASBI YASIN', 'peneliti', NULL, '', 'true', '', ''),
(41, 'herisutanto@lecturer.undip.ac.id', '$2y$12$FxH/Wsh4Mm4ni8b9w0KKU.Y4QvhPIwoOjBBzj1ECXHDiGxxM5HR7e', 'Heri Sutanto', 'peneliti', NULL, '', 'true', '', ''),
(42, 'agussetyawan@lecturer.undip.ac.id', '$2y$12$ZyCvpGGfWFQMhGQS5G.A7ud9vwTCBZQnxppvbT59hrIP3qZ7QxcTe', 'Agus Setyawan', 'peneliti', NULL, '', 'true', '', ''),
(43, 'gunawan@lecturer.undip.ac.id', '$2y$12$TxZD7UettOheC7rHooEdqepGKH5rDNYolVOmxP3xdtxxLbu9koRfu', 'Gunawan', 'peneliti', NULL, '', 'true', '', ''),
(44, 'a.haris@lecturer.undip.ac.id', '$2y$12$CFSn21JmeGV.DiV8q5jprevKLsgYpCuforuQ4ywzA36zrBh4U/OAe', 'Abdul Haris', 'peneliti', NULL, '', 'true', '', ''),
(45, 'retno@lecturer.undip.ac.id', '$2y$12$.h5BMZ0BJcQv7eA0UocCz.tH.D9esH25DpiVONu8FvFVtBHzDwrSy', 'Retno Kusumaningrum', 'peneliti', NULL, '', 'true', '', ''),
(46, 'sumariyah@lecturer.undip.ac.id', '$2y$12$q63GZcWLg0rx1IknoXdaK.8NB3.zzYBUJono8YM75SiJSKfW/tmm.', 'Sumariyah', 'peneliti', NULL, '', 'true', '', ''),
(47, 'mnur@lecturer.undip.ac.id', '$2y$12$XSSSBykdJ.ymjFjFw1yGTO/FCI9ogYE76cX.kASu4CJi7uJSDHgZS', 'Muhammad Nur', 'peneliti', NULL, '', 'true', '', ''),
(48, 'sriatun@lecturer.undip.ac.id', '$2y$12$RJyaxriCKrdpjHkpoUtU.O7AcxnDQl8bOPWqAz2zw7sOFq3eHyqbm', 'Sriatun Sriatun', 'peneliti', NULL, '', 'true', '', ''),
(49, 'irhammn@lecturer.undip.ac.id', '$2y$12$YiUlTaQSODLPYMIVPpgTse5D9iV4DaMPMbh3gkYRoxKgWMVL1bKLq', 'Irham Nurwidyanto', 'peneliti', NULL, '', 'true', '', ''),
(50, 'spujiyanto@lecturer.undip.ac.id', '$2y$12$UaVfb32GkkwCwUmzp.tuHuKmevaCUWK.NMebR1jlWFU/pZC1/6oSO', 'Sri Pujiyanto', 'peneliti', NULL, '', 'true', '', ''),
(51, 'priyono@lecturer.undip.ac.id', '$2y$12$fLbobNdlJ/3FyToLEVvuVuxsRqQG1Ohpn60RL4ssW211WTFG7wNq2', 'Priyono', 'peneliti', NULL, '', 'true', '', ''),
(52, 'udiharmoko@lecturer.undip.ac.id', '$2y$12$55anmwuSRQcGf.YXuGHJ7uiVjcrF.1pa7IFjFQ1GWCCDlq99V0.hG', 'Udi Harmoko', 'peneliti', NULL, '', 'true', '', ''),
(53, 'alanprahutama@lecturer.undip.ac.id', '$2y$12$0Sd2I0cSreBh5UC7SUsLlOcn0CT2NPTQYYSLW0EDEZnE5j0D4JSiG', 'ALAN PRAHUTAMA', 'peneliti', NULL, '', 'true', '', ''),
(54, 'mochabdulmukid@lecturer.undip.ac.id', '$2y$12$cHdMMxgDBVkMZtjpvGm0qutPvg.MUXmDBIP9tQiO1NHHJ5taLyNDK', 'Moch. Abdul Mukid', 'peneliti', NULL, '', 'true', '', ''),
(55, 'indrasmarhaendrajaya@lecturer.undip.ac.id', '$2y$12$7sCAEHupyXj/P5qH72rbC.SBoGw0pIGeYMKzRPNEZRD8Ru227fooC', 'Indras Marhaendrajaya', 'peneliti', NULL, '', 'true', '', ''),
(56, 'ekohidayanto@lecturer.undip.ac.id', '$2y$12$mQuj0lP/V5XOAPIc7Xd69.zqGSMgJKzLPToxpz9h3Zsv1.S7mJDRy', 'Eko Hidayanto', 'peneliti', NULL, '', 'true', '', ''),
(57, 'braharjo@lecturer.undip.ac.id', '$2y$12$UYd66FyCgQq.rVhQ4/1Jg.CuR8GGd7ZpKhw.GrpgQik/ib//QxvXq', 'Budi Raharjo', 'peneliti', NULL, '', 'true', '', ''),
(58, 'antobudiharjo@lecturer.undip.ac.id', '$2y$12$OZyecKpOrKmN3CCiu3fWfODq99RpjHGbKJBn2W2d.4Zl9LxO5WPjK', 'Anto Budiharjo', 'peneliti', NULL, '', 'false', '', ''),
(59, 'sukmane@lecturer.undip.ac.id', '$2y$12$m1V7wWrGnYzvSXkcTf.Wj.xewMm9rCzvc628z8cPl3JNAWFPLpJQm', 'Sukmawati Nur Endah', 'peneliti', NULL, '', 'true', '', ''),
(60, 'adiwibowo@lecturer.undip.ac.id', '$2y$12$XiJ8jRwFjDM6tXziNnH9au5LRws.Y657onmfG3q3eFpU0Ulb9QYLS', 'Adi Wibowo', 'peneliti', NULL, '', 'true', '', ''),
(61, 'tyasrinisaraswati@lecturer.undip.ac.id', '$2y$12$DNiuCEp7Yic8D.JgvN6xo.nqSJmJXBxBYVnlAAOBG628TslN.V8uq', 'Tyas Rini Saraswati', 'peneliti', NULL, '', 'true', '', ''),
(62, 'ermaprihastanti@lecturer.undip.ac.id', '$2y$12$w2TwJI2SDrlJfd9ACenb.uM5hFrlgVTgKv4X.CTnE2tdAieYbAXmC', 'Erma Prihastanti', 'peneliti', NULL, '', 'true', '', ''),
(63, 'suparti@lecturer.undip.ac.id', '$2y$12$ar4YYjG90cIKq787RNXODe1/HW31srdannf9MNUowfAdAVVfCI3cu', 'Suparti', 'peneliti', NULL, '', 'true', '', ''),
(64, 'indrawaspada@lecturer.undip.ac.id', '$2y$12$MJiSofkpOqj5NXm9Eru.DOAI79rxw0QbqbxXYtcXALUnSUIiTtpnS', 'Indra Waspada', 'peneliti', NULL, '', 'true', '', ''),
(65, 'ennyyusufwachidahyun@lecturer.undip.ac.id', '$2y$12$58nFeZ0ELBqEqQuDH03Tie1LbsEXYsAmb8yxVcFwBmtQ5V5dV4r/S', 'Enny Yusuf Wachidah Yuniwarti', 'peneliti', NULL, '', 'true', '', ''),
(66, 'agusrusgiyono@lecturer.undip.ac.id', '$2y$12$uo52eT0O2baRgBSrfiyUAeO19z33IGcHVXBUdcLOCAIEdCgJOan5K', 'Agus Rusgiyono', 'peneliti', NULL, '', 'true', '', ''),
(67, 'tarno@lecturer.undip.ac.id', '$2y$12$3PCwNFNOyUNNfAEuHvlEaeTvjgPtCiaLPeUzKAYEIG8OjI9m1Y8pu', 'Tarno', 'peneliti', NULL, '', 'true', '', ''),
(68, 'sunarno@lecturer.undip.ac.id', '$2y$12$ZI9wFAPx8ohUqEdaY6Mq8O6t/h3OfOsWz8OoASNBhPE8ZAMDbdHO6', 'Sunarno', 'peneliti', NULL, '', 'true', '', ''),
(69, 'sutikno@lecturer.undip.ac.id', '$2y$12$u09p0BsXoAj/LNSD6/P98ekwFvqmiNTyOY7aKL5dIeMZd3szNjD7m', 'Sutikno', 'peneliti', NULL, '', 'true', '', ''),
(70, 'sugito@lecturer.undip.ac.id', '$2y$12$QYt/cFjKjv.V.w2NQCd9AueBaQMtwGvpcxGkRGdLZrAEq15M9qgT2', 'Sugito', 'peneliti', NULL, '', 'true', '', ''),
(71, 'dwiispriyanti@lecturer.undip.ac.id', '$2y$12$yygn48/bFJ8CX1HtYmv6H.I4S4N4tLFQSaLQih7ggdzfAe6MIYk4q', 'Dwi Ispriyanti', 'peneliti', NULL, '', 'true', '', ''),
(72, 'ragilsaputra@lecturer.undip.ac.id', '$2y$12$6NKvlSDY6hJtxOAoZlO9P.NtnSVs7SsWNQTQA6Jy1NaJSieUpRJo6', 'Ragil Saputra', 'peneliti', NULL, '', 'true', '', ''),
(73, 'ritarahmawati@lecturer.undip.ac.id', '$2y$12$JbxYxLaq5FKHhZIPqjWZHulvSP5UEgjqaNNcD6kx6Gcnoijfx2ooK', 'Rita Rahmawati', 'peneliti', NULL, '', 'true', '', ''),
(74, 'sudarnoghani@lecturer.undip.ac.id', '$2y$12$L07w4m/ph7nYEeqM3R6hRe17imzTlcJha48.v80SuICuhGUuM7Nn2', 'SUDARNO', 'peneliti', NULL, '', 'true', '', ''),
(75, 'sitinurjannah@lecturer.undip.ac.id', '$2y$12$9rJG/fxgeHDmbsOZm8q7mu/ccEDVFjUDr2DYlWdwG40cV8kbfZ4X2', 'Siti Nur Jannah', 'peneliti', NULL, '', 'true', '', ''),
(76, 'rully@lecturer.undip.ac.id', '$2y$12$xxAU2397sMNNTLNEy.vypeDeevPtas3nqh5QtWMgDINebILEep7Ui', 'Rully Rahadian', 'peneliti', NULL, '', 'true', '', ''),
(77, 'suhartonosumarjo@lecturer.undip.ac.id', '$2y$12$2V5kjCYyw.hsYZ9.k6rT..8idnIzDkUH6XwisgE/yHOdxt4bjhf42', 'Suhartono', 'peneliti', NULL, '', 'true', '', ''),
(78, 'arispw@lecturer.undip.ac.id', '$2y$12$h0bd547IYEvVdjPo5s5gRu4g.LuhtDIYvaeVHx2evA/jEoYBmrG2e', 'Aris Puji Widodo', 'peneliti', NULL, '', 'true', '', ''),
(79, 'helmie@lecturer.undip.ac.id', '$2y$12$PrCH/Saatuc28sZrUWDoueWBOtMUUw.d4XHXWDyFB9A8VAH.zA39C', 'Helmie Arif Wibawa', 'peneliti', NULL, '', 'true', '', ''),
(80, 'silvanatana@lecturer.undip.ac.id', '$2y$12$KmPCKk8hkGHD/mSSstjOW.l6fYCaj0agsJAbcGrN.4jeIClpRt4Dy', 'SILVANA TANA', 'peneliti', NULL, '', 'true', '', ''),
(81, 'zaenalarifin@lecturer.undip.ac.id', '$2y$12$NUzawDwHGImZRVrS25.WHudBrZz7BMKyMVaAzD15NreDxrUTZ94IG', 'ZAENAL ARIFIN', 'peneliti', NULL, '', 'true', '', ''),
(82, 'pratamajujurwibowa@lecturer.undip.ac.id', '$2y$12$neL3T041uxuV4ZYvSzLZVOBOAJ1l69c/iSEbYCsn27OE8BvMjAUHG', 'Pratama Jujur Wibawa', 'peneliti', NULL, '', 'true', '', ''),
(83, 'rukunsantoso@lecturer.undip.ac.id', '$2y$12$MU2QSKwTBZr30OAnYWqs8Ouv/gbgRaIDgm6QnMPcRJTOqPjkoFGX6', 'Rukun Santoso', 'peneliti', NULL, '', 'true', '', ''),
(84, 'arissugiharto@lecturer.undip.ac.id', '$2y$12$gmmid1itMW1S2l9nqEMetOo6GyT29uidNMywQXxztPfguYEvt0GrO', 'Aris Sugiharto', 'peneliti', NULL, '', 'true', '', ''),
(85, 'yayuk.astuti@lecturer.undip.ac.id', '$2y$12$T1zhUYybe/h13G.TopJwoe.ut0ZKApQefqhDGx/6NBSGc8oOWUhAi', 'Yayuk Astuti', 'peneliti', NULL, '', 'true', '', ''),
(86, 'gatotyuliyanto@lecturer.undip.ac.id', '$2y$12$Y6ig4xr5jZNvaapZ20uXX.vTevBI151FM42aQCRHKiqtmBFF7A1yO', 'Gatot Yuliyanto', 'peneliti', NULL, '', 'true', '', ''),
(87, 'widodo.ds@lecturer.undip.ac.id', '$2y$12$kCLyUj4a3zKgRulnT1B/PeQInBqXnBOq8tf7qmr1IWoO2YDRe8y2a', 'Didik Setiyo Widodo', 'peneliti', NULL, '', 'true', '', ''),
(88, 'suhartana@lecturer.undip.ac.id', '$2y$12$ZeT.F4lh74AXE51yrX/rHuXtqRB.gVbz6ZFlNdl8blo4f48sSTnTq', 'Suhartana', 'peneliti', NULL, '', 'true', '', ''),
(89, 'muhlisin@lecturer.undip.ac.id', '$2y$12$FUCVj1PBZjlnyA.tpIMyDuPlB2XnwlNeevCN7RvI19rfiWRTV5wpO', 'Zaenul Muhlisin', 'peneliti', NULL, '', 'true', '', ''),
(90, 'udjianititi@lecturer.undip.ac.id', '$2y$12$lLpTNiOC.v8hahJqXZEM.Opl3.sNuBKuxudGx.PUrMmuw1fzS.zjO', 'Titi Udjiani SRRM', 'peneliti', NULL, '', 'true', '', ''),
(91, 'nikkenprima@lecturer.undip.ac.id', '$2y$12$LPxbBXC7W6wtmZ/jAWRzF.Mh3psw3UVzZbxMf/bFyA7FBG8Yk2tjG', 'Nikken Prima Puspita', 'peneliti', NULL, '', 'true', '', ''),
(92, 'nurdinbahtiar@lecturer.undip.ac.id', '$2y$12$3nRsgLu52Zi7Ze9IHrFZsO1.ZdgSsmd1lkgQvPNgqAIDIB2RYS7gW', 'Nurdin Bahtiar', 'peneliti', NULL, '', 'true', '', ''),
(94, 'cahyono@lecturer.undip.ac.id', '$2y$12$SNYMYsUmVPczAPu30902wOC025RIXnJLRACDOx2ijR1H3QGdN9JPe', 'Bambang Cahyono', 'peneliti', NULL, '', 'true', '', ''),
(95, 'meiny.suzery@lecturer.undip.ac.id', '$2y$12$RNqvObK6cWH/OLQh1Gqg0uiIjyQ.ZYCwqnjWjLDW7fTWBZByG3ZPq', 'Meiny Suzery', 'peneliti', NULL, '', 'true', '', ''),
(96, 'rahmatgernowo@lecturer.undip.ac.id', '$2y$12$87TupsG7ye0fLsF/K6mHn.qfR6Fh8WfwcCEojGnEGH3OTVd5EmF2W', 'Rahmat Gernowo', 'peneliti', NULL, '', 'true', '', ''),
(97, 'nurhasanah@lecturer.undip.ac.id', '$2y$12$W1b862otfgxJfZd6vtZ81u6zhm9TjAhqu7imVtp8nwtKlsGn4GEXG', 'Iis Nurhasanah', 'peneliti', NULL, '', 'true', '', ''),
(99, 'asyari@lecturer.undip.ac.id', '$2y$12$I1yooX4EuAvXSUkuJqg8H.howdcDIAViQvOVq3EfQ/RjoVlZM4oua', 'Mukhammad Asy\'ari', 'peneliti', NULL, '', 'true', '', ''),
(100, 'panji@lecturer.undip.ac.id', '$2y$12$6dZ3lKvwlTuEHQFdp7JlJ.KVNtTm9wGyEZ0VNPSDWfR5dbxB7qdr.', 'Panji Wisnu Wirawan', 'peneliti', NULL, '', 'true', '', ''),
(101, 'kusworoadi@lecturer.undip.ac.id', '$2y$12$M2F6VLyxjDJTAO5rcwENU.so/QZIC49qpHWojtrcqZ0Mng4ZzyBOC', 'Kusworo Adi', 'peneliti', NULL, '', 'true', '', ''),
(102, 'priyosidiksasongko@lecturer.undip.ac.id', '$2y$12$Otzdbj469Lo3qht9ZHzl0ua4URYh3LvG./TL6ZzgOfnjBzOAcAQti', 'Priyo Sidik Sasongko', 'peneliti', NULL, '', 'true', '', ''),
(103, 'tonyyulianto@lecturer.undip.ac.id', '$2y$12$l8kTCfI48XHKmYxhqJBOYOwtkbcny5M.lcxwYxB7bF7JS9Xx.nXO.', 'Tony Yulianto', 'peneliti', NULL, '', 'true', '', ''),
(104, 'endahdwihastuti@lecturer.undip.ac.id', '$2y$12$lPVTiZ1UI8Ev5VAUm8im0.WQJzkXdsPuH3da64MQnUDHHHKrcShq.', 'Endah Dwi Hastuti', 'peneliti', NULL, '', 'true', '', ''),
(105, 'sridarmanti@lecturer.undip.ac.id', '$2y$12$JzGFXivTXG5/Fq3ARR5eAOU6dtEAHp6p9jCj3zcN1JCFbl9n5o7qS', 'Sri Darmanti', 'peneliti', NULL, '', 'true', '', ''),
(106, 'sriharyanti@lecturer.undip.ac.id', '$2y$12$GLStMPrILDSMq/ujkP62KOMZZ3SAEVmuFeg8xI9NYDbrC6L3bV/ja', 'SRI HARYANTI', 'peneliti', NULL, '', 'true', '', ''),
(107, 'jatmikoendro@lecturer.undip.ac.id', '$2y$12$3r3yFtTzFun97s7qJFMts.40jCbSzkaqNN1t9yrEcpeAG2PUH/ppu', 'Jatmiko Endro Suseno', 'peneliti', NULL, '', 'true', '', ''),
(109, 'rinadwiindriana@lecturer.undip.ac.id', '$2y$12$v7wHzHNTAzLOX2T6I8k2xu68kY4hmJliC1fNpaqGyabB/N1mgGzgu', 'RINA DWI INDRIANA', 'peneliti', NULL, '', 'true', '', ''),
(110, 'tresnomath@lecturer.undip.ac.id', '$2y$12$2eupUo4uh8fOf3oxjnu5Q.6rPGSRFLpiqwQ1rtUS/7Ipqwqm9DiQO', 'Sutrisno', 'peneliti', NULL, '', 'true', '', ''),
(111, 'solikhin@lecturer.undip.ac.id', '$2y$12$1Lh4BtuhZMdL9lpjrS0jl.X.E95XfY5zgd3Q6.mDS38tWsE.ggdl6', 'Solikhin', 'peneliti', NULL, '', 'true', '', ''),
(112, 'widowati@lecturer.undip.ac.id', '$2y$12$1gZEn8eTKyxgtWmmYgpYxOdLuihBPtSCmaB/zgpOsDZIp4LkogydO', 'Widowati', 'peneliti', NULL, '', 'true', '', ''),
(113, 'redemtusherutjahjana@lecturer.undip.ac.id', '$2y$12$f6TuQQ1W6MFuX3sDB05mbu8uvP4gDjt74D68efI0gqlVwVLy.ClJq', 'Redemtus Heru Tjahjana', 'peneliti', NULL, '', 'true', '', ''),
(114, 'adidarmawan@lecturer.undip.ac.id', '$2y$12$Wek.9nPQF09IN.kqdUAAved8cXj/jJEYUdFGvQMe/EJR0zCdGSeJa', 'Adi Darmawan', 'peneliti', NULL, '', 'true', '', ''),
(115, 'sriyanti@lecturer.undip.ac.id', '$2y$12$.pE4LIj2HthgL4h38ZDZk.wSQ5tX9xVuETZVvCclIXVTxhSMSC1KW', 'SRIYANTI', 'peneliti', NULL, '', 'true', '', ''),
(116, 'yucianawilandari@lecturer.undip.ac.id', '$2y$12$j50xyw1gK6C.Ys1SlowrzuQ.4Iw1ijNijE9PKh.EP2Gsbz8LbA4lG', 'Yuciana Wilandari', 'peneliti', NULL, '', 'true', '', ''),
(117, 'diahsafitri@lecturer.undip.ac.id', '$2y$12$ykCWYYD8HgrzMSTCmn2uyeqrAIyClGeD6p1Twjf5LEIWODg264Ywm', 'Diah Safitri', 'peneliti', NULL, '', 'true', '', ''),
(118, 'sitikhabibah@lecturer.undip.ac.id', '$2y$12$i66bWOlzWsK2TsuFumNiNOm1jUoVkIHrpqI6Aow255s9B8G3BdjSa', 'Siti Khabibah', 'peneliti', NULL, '', 'true', '', ''),
(119, 'ngadiwiyana@lecturer.undip.ac.id', '$2y$12$vIt0nLVdEi0Ux3bRQKORouloifL16Smqvf0rlSD685KlIk67.W9Ii', 'Ngadiwiyana', 'peneliti', NULL, '', 'true', '', ''),
(120, 'tri.windarti@lecturer.undip.ac.id', '$2y$12$eBqokpDVyJJt8/9WFAs5h.RFwWa/yMlG7ADnOqYaAbukiQBLj1h4.', 'Tri Windarti', 'peneliti', NULL, '', 'true', '', ''),
(121, 'evisetiawati@lecturer.undip.ac.id', '$2y$12$Sc.yPVcxECS35cEanaP/FOyqoqU7WhcsjDnKdBtIk/INvCnKZAie2', 'Evi Setiawati', 'peneliti', NULL, '', 'true', '', ''),
(122, 'farikhin@lecturer.undip.ac.id', '$2y$12$VYQGiWc1Ye0MpE/GcruCJOCGoaBhJCRapZxdQsx.m0TvAC7NfCr5.', 'Farikhin', 'peneliti', NULL, '', 'true', '', ''),
(123, 'purbowatining@lecturer.undip.ac.id', '$2y$12$4N8TbF73d2uW8uMl/iHyweOHqw0aNunrT/uVrT62suxlG67HZLntC', 'Purbowatiningrum Ria Sardjono', 'peneliti', NULL, '', 'true', '', ''),
(124, 'ismiyarto@lecturer.undip.ac.id', '$2y$12$54aL8IJcw570UKg58Lg70ug4/8Re.EmMe3ELe7RQascjJqDi3vYp6', 'Ismiyarto', 'peneliti', NULL, '', 'true', '', ''),
(125, 'dwipsasongko@lecturer.undip.ac.id', '$2y$12$xXBIpHBlFjR5y7Gz5FxKN.P0nJIDTaTKa9U8oVFIzB0DpgmMYiP1a', 'Dwi Purwantoro Sasongko', 'peneliti', NULL, '', 'true', '', ''),
(126, 'ferniah@lecturer.undip.ac.id', '$2y$12$wqfNoTsBoxNCDCGVYV6qiO61JsAHXmfeIaoGpOnbd952JvlFm.E3a', 'Rejeki Siti ferniah', 'peneliti', NULL, '', 'true', '', ''),
(127, 'kartono@lecturer.undip.ac.id', '$2y$12$jr9DUKpVqo8/BaGT2QL20eZYwg3mUPwSzbyh9xyAxJR8Wk.dLB4nu', 'Kartono', 'peneliti', NULL, '', 'true', '', ''),
(128, 'enny.fachriyah@lecturer.undip.ac.id', '$2y$12$9Fu67Q6tEbdpDKYo11fwCuyz7F0sVCUIkATMjwZMmEnF4ZtGZD1G2', 'ENNY FACHRIYAH', 'peneliti', NULL, '', 'true', '', ''),
(129, 'ngurahayuketutumiati@lecturer.undip.ac.id', '$2y$12$wrsb0QHxfL7z2QlGRL5qQemRO1es4R5vbt9hJd68mBn.IqaCvfyB6', 'Ngurah Ayu Ketut Umiati', 'peneliti', NULL, '', 'true', '', ''),
(130, 'erriyanto@lecturer.undip.ac.id', '$2y$12$06IWqVFSyhV/a.GFzr0dmOgW1ou43caH5XLVCq5PEbY.elnmADjhC', 'Djalal Er Riyanto', 'peneliti', NULL, '', 'true', '', ''),
(131, 'agustina.aminin@lecturer.undip.ac.id', '$2y$12$nlusOxNcZdisfv.cPGAjr.YKk3hbxc0O44SlZGOh73FeDzxW935NC', 'Agustina Lulustyaningati Nurul Aminin', 'peneliti', NULL, '', 'true', '', ''),
(132, 'munifatulizzati@lecturer.undip.ac.id', '$2y$12$GwyQ5SZbq5woO0ehbx4k3OZ80aEyQ2/5RFoENXb/RJ08KYHKRQ95K', 'Munifatul Izzati', 'peneliti', NULL, '', 'true', '', ''),
(133, 'richehariyati@lecturer.undip.ac.id', '$2y$12$x3glLoqbXtbRDnjT33nTiet1RZSP/qoId6unlv3X/liyGKARmqok.', 'Riche Hariyati', 'peneliti', NULL, '', 'true', '', ''),
(134, 'robertusherisoelisty@lecturer.undip.ac.id', '$2y$12$am9EyautJoAZ3gMDzTXb9ehEz2YTSzFz89z0Bt4mndzwwJHUNx3cG', 'Robertus Heri Soelistyo Utomo', 'peneliti', NULL, '', 'true', '', ''),
(135, 'herisugito@lecturer.undip.ac.id', '$2y$12$XwkkQkgeX59yYvi1F8xn3u4mX03Y8rxoccTdzpsoU02vVptkCfRRq', 'Heri Sugito', 'peneliti', NULL, '', 'true', '', ''),
(136, 'firdausi@lecturer.undip.ac.id', '$2y$12$hf5Suxka1bDBhY1x9ESJhescYklXiAgySBPoo5qVKR2qX11EzpC.u', 'Ketut Sofjan Firdausi', 'peneliti', NULL, '', 'true', '', ''),
(137, 'goenangie@lecturer.undip.ac.id', '$2y$12$GErxlbkm7BtLkrWdlyaQ9ukQ20hkCiWW.FlOTpEr2eKRWT/nB.Nzq', 'V. Gunawan Slamet Kadarisman', 'peneliti', NULL, '', 'true', '', ''),
(138, 'dwi.hudiyanti@lecturer.undip.ac.id', '$2y$12$5ccTZMI4EaanSfeIh7halOUOImQfNK.ZEVeYvu22m33zYj7Zo4A8u', 'Dwi Hudiyanti', 'peneliti', NULL, '', 'true', '', ''),
(139, 'mgiswororukmi@lecturer.undip.ac.id', '$2y$12$dAXFnZNrK/NfidOMf8KYYOBai2UoZARNgyDfQdGRKTS.T.MpOrNyW', 'M.G. Isworo Rukmi', 'peneliti', NULL, '', 'true', '', ''),
(140, 'niessuci@lecturer.undip.ac.id', '$2y$12$n.UgtWighIGrq1rZ44IU3uq1xZg5xy.WSktl0sLkKminAA7l7NiH6', 'Nies Suci Mulyani', 'peneliti', NULL, '', 'true', '', ''),
(141, 'herminpancasaktik@lecturer.undip.ac.id', '$2y$12$NcBQcpRxTC9/hGood9xwjOLQgut9fLbS7GMpXsr9uSsqhCwtoaLNq', 'Hermin Pancasakti Kusumaningrum', 'peneliti', NULL, '', 'true', '', ''),
(142, 'k.anam@lecturer.undip.ac.id', '$2y$12$zEjlNbx6yDcC6XYQxHOE9uvlSX911qSD8vbdGy/c7Y0AA4cqhKT2u', 'KHAIRUL ANAM', 'peneliti', NULL, '', 'true', '', ''),
(143, 'dewi.kusrini@lecturer.undip.ac.id', '$2y$12$N.ISSEFb1f4Xsd7LVlThCe1uit8GfCXOzPvhevzitEj1xgex0wdWe', 'Dewi Kusrini', 'peneliti', NULL, '', 'true', '', ''),
(144, 'saptoputro@lecturer.undip.ac.id', '$2y$12$W4T1lcE.tAupjGMJqdNpFueBFmT73zrSfxVzTG10I.kd7LjtFY2PS', 'Sapto P. Putro', 'peneliti', NULL, '', 'true', '', ''),
(145, 'choiril.azmiyawati@lecturer.undip.ac.id', '$2y$12$jupt3fzrDs0UKAd/2wCbh.ZSc.fXHVNwdqw1jGwvtlV/HSGaJZLiu', 'Choiril Azmiyawati', 'peneliti', NULL, '', 'true', '', ''),
(146, 'linda_suyati@lecturer.undip.ac.id', '$2y$12$KoEHpA5zjpFS8WALtIiAXe/45px2GfFkyCbYj9mY0SrgEiykMHIV2', 'Linda Suyati', 'peneliti', NULL, '', 'true', '', ''),
(148, 'mochamadhadi@lecturer.undip.ac.id', '$2y$12$QcvcLQP0bafqSbRfrLgw3OWu3Yz8mpSy/5TjrEPHex1lTl0/mrQqC', 'Mochamad Hadi', 'peneliti', NULL, '', 'true', '', ''),
(149, 'azam@lecturer.undip.ac.id', '$2y$12$40/ZOmnUlS65WaPqgYqv5.OM16rPP9EPxAW7bERXkElvpdj08hjZa', 'Much. Azam', 'peneliti', NULL, '', 'true', '', ''),
(150, 'murningsih@lecturer.undip.ac.id', '$2y$12$YuTidw8iiVpibhz6dWryVu.jrt8U0S.es.6Qa8UVa8M5ZFYmL6CQi', 'MURNINGSIH', 'peneliti', NULL, '', 'true', '', ''),
(151, 'teguhsuprihatin@lecturer.undip.ac.id', '$2y$12$kNUXlnOFiQup5YexcDH4fuhOpopcNRoYfMYCw5p.GzZ8aTBQz9gfi', 'Teguh Suprihatin', 'peneliti', NULL, '', 'true', '', ''),
(152, 'agungjanikasitasiwi@lecturer.undip.ac.id', '$2y$12$IAlKKx6IvBf.k351WwgHBec0d2oo2cFrYpiRG1gKTHPtPxayUxgvm', 'Agung Janika Sitasiwi', 'peneliti', NULL, '', 'true', '', ''),
(153, 'agungsuprihadi@lecturer.undip.ac.id', '$2y$12$IwAhtnncbx9XNgdXgqjO.e5fGYnCu1A7jMJkbjgXDYUPDYpk3M/R.', 'AGUNG SUPRIHADI', 'peneliti', NULL, '', 'true', '', ''),
(154, 'manwardjaelani@lecturer.undip.ac.id', '$2y$12$bRS3TLr4jN25OcFZXLuecOZ/by/8SUNMs0j55tA7oWafwPYT4MVC2', 'MUHAMMAD ANWAR DJAELANI', 'peneliti', NULL, '', 'true', '', ''),
(155, 'arinatrilunggani@lecturer.undip.ac.id', '$2y$12$jYZR0m2Nd1r6Em2/XsC.OeZRjKjfmBd2ZNB7pq4xywUV5ITmDbvn2', 'Arina Tri Lunggani', 'peneliti', NULL, '', 'true', '', ''),
(156, 'endangsaptiningsih@lecturer.undip.ac.id', '$2y$12$NOI87W5qrYWxfwBgGamt8elBN1X8CRyLyJ0N8jb8ajaN5rb4oQZP6', 'ENDANG SAPTININGSIH', 'peneliti', NULL, '', 'true', '', ''),
(157, 'errywiryani@lecturer.undip.ac.id', '$2y$12$5RVKpaJnZFWaSYu3yv5ftOuP0YEi9OIkAcmd1jkI7scpXHc1uigCu', 'ERRY WIRYANI', 'peneliti', NULL, '', 'true', '', ''),
(158, 'alikhumaeni@lecturer.undip.ac.id', '$2y$12$Jzc6jlCvZ627uApGdEMjn.sAl8Gh1qcOl22GT2PqSpKnoS0Zjpd1G', 'ALI KHUMAENI', 'peneliti', NULL, '', 'true', '', ''),
(159, 'asepyoyowardaya@lecturer.undip.ac.id', '$2y$12$YneAZQpjBaQhmmb3GUcPVuVQist4rlTHcMgdsuYGPpxu7wn7Ibx1K', 'ASEP YOYO WARDAYA', 'peneliti', NULL, '', 'true', '', ''),
(160, 'agussubagio@lecturer.undip.ac.id', '$2y$12$oPcIL.MiSRIQcU4HT2bl9.dl0owm9y0MrKgv1TfAmsqgzBwDq7Qzq', 'Agus Subagio', 'peneliti', NULL, '', 'true', '', ''),
(161, 'jumariafif@lecturer.undip.ac.id', '$2y$12$tsuicq3zaQ8TZHwvR8vQHezuGH9dQc6aT9oIZiwrHqeJQUsfZiF9O', 'Jumari', 'peneliti', NULL, '', 'true', '', ''),
(162, 'susianapurwantisari@lecturer.undip.ac.id', '$2y$12$Iu7UVqEb5lOtA.bllRxTeusfWBppG/Yzxtf1KJH/YGB6g15kP28IK', 'Susiana Purwantisari', 'peneliti', NULL, '', 'true', '', ''),
(163, 'khadijah@lecturer.undip.ac.id', '$2y$12$HxA4YIdegLrl1OKdz7K/qOziS9Jdg6NAcnb/MnSzMyOviRemvBg.G', 'Khadijah', 'peneliti', NULL, '', 'true', '', ''),
(164, 'sutimin@lecturer.undip.ac.id', '$2y$12$lDRuhJDG97nUBDxAVStNieJe114dqynzTNz6O.RQMNtctRRJgtAMG', 'Sutimin', 'peneliti', NULL, '', 'true', '', ''),
(165, 'nor.basid.prasetya@lecturer.undip.ac.id', '$2y$12$rW18E9WNT3d.O5Hx3bWRc.Lj0z6rncAM575g96mn3u3zxJ7Hk9FOi', 'Nor Basid Adiwibawa Prasetya', 'peneliti', NULL, '', 'true', '', ''),
(166, 'sparman@lecturer.undip.ac.id', '$2y$12$53l10ZETpkTlIpEX3Ultx.Q/mOocMwWIBHiio0AfKFKiDje.D2JCO', 'Sarjana Parman', 'peneliti', NULL, '', 'true', '', ''),
(167, 'hayatinur@lecturer.undip.ac.id', '$2y$12$WWHUBsZgJEVqwuQ5rqDOiuQ12XOHRdy27EPC4K6w5Kvy8kjcEfAIS', 'Nurhayati', 'peneliti', NULL, '', 'true', '', ''),
(168, 'ekoadisarwoko@lecturer.undip.ac.id', '$2y$12$6K3dUp62Voie1BLrlsYttOzoysUsPGFM0Eyz0CnvjIbRoJzlv1vuy', 'Eko Adi Sarwoko', 'peneliti', NULL, '', 'true', '', ''),
(169, 'betanoranita@lecturer.undip.ac.id', '$2y$12$0G39nWEsMv3A.sarHTYd2uvfhb1AhjWEcp.SFu.Ph3ckhBvsczlH2', 'BETA NORANITA', 'peneliti', NULL, '', 'true', '', ''),
(170, 'caturediwidodo@lecturer.undip.ac.id', '$2y$12$8KLUvFeBQoWSlIz4mw1m.O04oLMqlUL2xNywjTD.tdgGKKWKKSw3e', 'CATUR EDI WIDODO', 'peneliti', NULL, '', 'true', '', ''),
(171, 'dinarmutiara@lecturer.undip.ac.id', '$2y$12$tKaarl913AaH7Zm33TyY8OhHi5uQotKPjTjB.khbi4.2FyoJRJxB2', 'DINAR M K NUGRAHENI', 'peneliti', NULL, '', 'true', '', ''),
(172, 'tatikwidiharih@lecturer.undip.ac.id', '$2y$12$j9tiy4.IR1I8RFseLM1/NO3UZUZlqot/VXsYx4dp9PAu2P/h1AB3e', 'Tatik Widiharih', 'peneliti', NULL, '', 'true', '', ''),
(173, 'sunarsih@lecturer.undip.ac.id', '$2y$12$mhRXx2BBkCB7Ei3Ve/iLsOGtZ/qBeYtxVsDH6nEkWQ/UJlI3gSX9O', 'Sunarsih', 'peneliti', NULL, '', 'true', '', ''),
(174, 'susilohariyanto@lecturer.undip.ac.id', '$2y$12$aepkThwsyjE.W7VpEIE4MOaGLJ5ZK.xp/DywBshGaoQrOLEVGVfUe', 'Susilo Hariyanto', 'peneliti', NULL, '', 'true', '', ''),
(175, 'bayus@lecturer.undip.ac.id', '$2y$12$tXjSIkVjbVFt1/bHQpEjAusgf495pPoDUJpmshCOSHI/8iMoL5uBO', 'Bayu Surarso', 'peneliti', NULL, '', 'true', '', ''),
(176, 'choliddjunaidi@lecturer.undip.ac.id', '$2y$12$7fhj5IBLGukVMFQEOtHTcenrXFu6aSkn6nSEqqS/NSyitOm9SzMvq', 'M. Cholid Djunaidi', 'peneliti', NULL, '', 'true', '', ''),
(177, 'kasiyati@lecturer.undip.ac.id', '$2y$12$xzJVTQaFHIx.0OCDJu0kreD8VEpGPRIkxn8AkH0BI0CQtnoGNBHJ.', 'KASIYATI', 'peneliti', NULL, '', 'true', '', ''),
(178, 'ainiekhuriati@lecturer.undip.ac.id', '$2y$12$Soa28.gAfOqQi4A4TTJomOTerJuglrp7MwRxTYhffTiRKTXV.sD3C', 'Ainie Khuriati Riza Sulistiati', 'peneliti', NULL, '', 'true', '', ''),
(179, 'wahyusetiabudi@lecturer.undip.ac.id', '$2y$12$Fi/S/B4LWmvtk8Alv6yUAeeOWzSe7J8c0MiBI74Qd3gTTbLovtBvS', 'Wahyu Setia Budi', 'peneliti', NULL, '', 'true', '', ''),
(180, 'rismiyati@lecturer.undip.ac.id', '$2y$12$zX5KdSLHhEEZupZuDHUi2eIsCGo/TD52wsdBfs2iz9DM8Y5FF8MN6', 'Rismiyati', 'peneliti', NULL, '', 'true', '', ''),
(181, 'ariefrachmanhakim@lecturer.undip.ac.id', '$2y$12$AZ9tBnzD0Wyag8IQiez0K.hVK.kXtyqYnQPpbXln.7vVi52uRHuHC', 'Arief Rachman Hakim', 'peneliti', NULL, '', 'true', '', ''),
(182, 'bair@lecturer.undip.ac.id', '$2y$12$8Wy.teRAkxPHZxrej84fvODkAvJYL.k44AGdy963YErIn4TTXwQui', 'Bambang Irawanto', 'peneliti', NULL, '', 'true', '', ''),
(183, 'anam@lecturer.undip.ac.id', '$2y$12$fUAuDk5KIB9pX.sHn.hGHe7oDwLbRfertRxO2a1o3U8aO33B4TusW', 'CHOIRUL ANAM', 'peneliti', NULL, '', 'true', '', ''),
(184, 'pardoyoku@lecturer.undip.ac.id', '$2y$12$YeJcGhXTHLl5aZyaSHJj7eFW39poV9hyNLt.oIGFX0vLYGLUl1Zpi', 'PARDOYO', 'peneliti', NULL, '', 'true', '', ''),
(185, 'lilihkhotimperwati@lecturer.undip.ac.id', '$2y$12$/wLGFPJzWULaIO10oBAIe.TSHpMiis/1nJbo2DUrnAQOK0jUhGgD.', 'Lilih Khotimperwati', 'peneliti', NULL, '', 'true', '', ''),
(186, 'nintyasetiari@lecturer.undip.ac.id', '$2y$12$UapH01J2W0z4oBf42BBCWuYDGyCPrLwkWTRXk6ZvC2NDPF3F0qqWe', 'NINTYA SETIARI', 'peneliti', NULL, '', 'true', '', ''),
(187, 'yulitanurchayati@lecturer.undip.ac.id', '$2y$12$SENkcKuuiRBeDSgqXM.cjuw5VjfNrrKfMfffD6JahLw6dFTg3VahW', 'YULITA NURCHAYATI', 'peneliti', NULL, '', 'true', '', ''),
(188, 'sriutami2109@lecturer.undip.ac.id', '$2y$12$axgAwJuHNXtTMAKzB3MSkueuDydhWPsegVXhBqD6V78hJJsPj9FAa', 'Sri Utami', 'peneliti', NULL, '', 'true', '', ''),
(189, 'suseno@lecturer.undip.ac.id', '$2y$12$.hG0aBhicQTLzoikVeq6rOxi63vZy/t2vr/jZsH1BoJ7U15PCIrwO', 'Ahmad Suseno', 'peneliti', NULL, '', 'true', '', ''),
(190, 'aninditahenindya@lecturer.undip.ac.id', '$2y$12$d6sqbdAECdQyF8Fx78AAPOPJTNUtuj7FQb3FYHDC.jhXeoJKtLQxe', 'Anindita Henindya Permatasari', 'peneliti', NULL, '', 'true', '', ''),
(191, 'qidirbinu@lecturer.undip.ac.id', '$2y$12$TTx9gUw1b/1xCWTtDpU27O9YXJxX5PEsdb./1K04GoFi8yxYWEpji', 'Qidir Maulana Binu Soesanto', 'peneliti', NULL, '', 'true', '', ''),
(192, 'puspitakartikasari@lecturer.undip.ac.id', '$2y$12$BfAEcT3AzntlM3m9Id0rHut16zaUKb/PUr01SVm8DNxkk20HAOzou', 'Puspita Kartikasari', 'peneliti', NULL, '', 'true', '', ''),
(193, 'khabibi@lecturer.undip.ac.id', '$2y$12$wkMLmy6/slqO7Kef0BfYI.LsYitZCBITmOBf.1wRPpQcKwaRZyYNm', 'Khabibi', 'peneliti', NULL, '', 'true', '', ''),
(194, 'damarnurwahyubima@lecturer.undip.ac.id', '$2y$12$Lz1lw72ic4pb32jCSmY.xOifx1TjlN58Davn4JFtAodPVwIlrPHJ.', 'Damar Nurwahyu Bima', 'peneliti', NULL, '', 'true', '', ''),
(195, 'nuryantorahmad@lecturer.undip.ac.id', '$2y$12$iZSeHMt0mii3wv.uQTJErOhWRhSBIrtYO5yitF8G9smkBZhvAd7em', 'RAHMAD NURYANTO', 'peneliti', NULL, '', 'true', '', ''),
(196, 'arnelli@lecturer.undip.ac.id', '$2y$12$48ZbjejZBYbOk9P.yYrrBOZ4WV5MeZ7aSdbSLRYyOqztEN.OrUPtO', 'ARNELLI', 'peneliti', NULL, '', 'true', '', ''),
(197, 'abdulaziz@lecturer.undip.ac.id', '$2y$12$ACFVLD8RE4ah4j2EBW1qZuj9vp29btpjofoBkC8U08vEFOQvLFlWm', 'Abdul Aziz', 'peneliti', NULL, '', 'true', '', ''),
(198, 'anang@staff.undip.ac.id', '$2y$12$gvOkeqEAn0MoOvd30CQOa.O4OmushyPs6xvRoJ8rDooUSUgnH6JgK', 'Anang', 'admin prodi', 3, 'EUyHoOzPXBge', 'true', '', ''),
(199, 'adminfakultas', '$2y$12$gvOkeqEAn0MoOvd30CQOa.O4OmushyPs6xvRoJ8rDooUSUgnH6JgK', 'Admin Fakultas', 'admin fakultas', NULL, 'EUyHoOzPXBge', 'true', 'z', 'z'),
(200, 'okkywa@staff.undip.ac.id', '$2y$12$qLM9.1yJFnAb94ERexcdqeWOe2sw0RpXTuXgcB3s8Otj7jwSBzo/S', 'Okky Widya Arditya', 'admin prodi', 5, '7BYb12LE8Kqm', 'true', '', ''),
(202, 'satriyo@gmail.com', '$2y$12$z5WpI/tldw.HxvXA1oLgnenn2q7jqjcWTiO8Ltuc9jYYcl1MvKb.G', 'Adhy', 'peneliti', NULL, '', 'true', '', ''),
(203, 'safirarahmadewi@students.undip.ac.id', '$2y$12$ShokVfOcVQOKE.4AcwCBm.50BDpo37hbbNxMjSoplUWChJOmx0C/y', 'Safira Rahma Dewi', 'peneliti', NULL, 'FxnWN1JY5dOr', 'false', '', ''),
(204, 'harisfadilah@students.undip.ac.id', '$2y$12$f3A/932gpk4.XIRosybFVu2DNoCJpbnCjh4LTShWSLiVK8FKnrICa', 'Haris Fadilah', 'peneliti', NULL, 'xYmlzMIAjHJq', 'false', '', ''),
(205, 'haris@students.undip.ac.id', '$2y$12$koP7sIv7BK9A8aFFSXkO4uI4N6GcTMa/zp/RP3kTPWMpahGoZVGu.', 'Haris F', 'peneliti', NULL, '6TkA3GrNJZWt', 'false', '', ''),
(206, 'adam@gmail.com', '$2y$12$u5YSUzEXW/USnPJdCbzwmurCMlclrXkkJ9snNMCmjmc9mNegbE0fC', 'Adam Sukmana', 'peneliti', NULL, '', 'true', '', ''),
(209, 'siscaayufebrianti@students.undip.ac.id', '$2y$12$lQYJJ33JuZCVR/LxPqZZ4uGXp38cZ6xHcdcJXqii6B3BLkIbWt8gi', 'Sisca Ayu Febrianti', 'peneliti', NULL, '1zvkZ9MXuRd2', 'false', '', ''),
(210, 'isnaingunadi@lecturer.undip.ac.id', '$2y$12$ZP6v33tRHLXr4qeB37lrXOYrtH47MI.QMfl97SbFjeMOe/z9.pihW', 'Isnain Gunadi', 'peneliti', NULL, '', 'true', '', ''),
(212, 'baskoro@lecturer.undip.ac.id', '$2y$12$zpynhlMA.1QGy1EMQriRL.Ny8ecGthCESLmgvaHmIIqCF6BtPmNxG', 'Karyadi Baskoro', 'peneliti', NULL, '', 'true', '', ''),
(213, 'fuadmuhammad@lecturer.undip.ac.id', '$2y$12$paC5R82MiQR6PF1MtACh2OE5gYdem53HTEYAc/4xKWwoNftKORJxG', 'Fuad Muhammad', 'peneliti', NULL, '', 'true', '', ''),
(214, 'edys@lecturer.undip.ac.id', '$2y$12$/ACERU3zIQbv8eS7Am5n/e/fNE7/39kYT7FpMPMOMBQ5by/.Voy22', 'Edy Suharto', 'peneliti', NULL, '', 'true', '', ''),
(215, 'triadyaksa@lecturer.undip.ac.id', '$2y$12$8RDSUTLi1juMuWgcjjm3..2yqByMnqUX2OR9cUivrqIZCGV.uORE6', 'Pandji Triadyaksa', 'peneliti', NULL, '', 'true', '', ''),
(216, 'guruh@lecturer.undip.ac.id', '$2y$12$64rlUf/SgltNTggyEwDFCewvsMEFOHypmkcOAjyE53BogU515JxXC', 'Guruh Aryotejo', 'peneliti', NULL, '', 'true', '', ''),
(217, 'mustafid@lecturer.undip.ac.id', '$2y$12$nVJWhWgeUFTLH2E9hB/iN.1/ZPQEVlmIblm/RVbFKfBNKRZ4wPrGe', 'Mustafid', 'peneliti', NULL, '', 'true', '', ''),
(218, 'trsoeprobowati@lecturer.undip.ac.id', '$2y$12$0F3v7iGtfRRnNfCk8dI3GuzalTIhTBNWK.FXnJo80IV6MdJnHXu9i', 'Tri Retnaningsih Soeprobowati', 'peneliti', NULL, '', 'true', '', ''),
(220, 'jafronwasiq@lecturer.undip.ac.id', '$2y$12$.w45jmCJ7.b1KlvdKGKPkepCMW1ARo.CBNM4TCyCCW0vD0k9MgEUG', 'Jafron Wasiq Hidayat', 'peneliti', NULL, '', 'true', '', ''),
(221, 'sitimuflichatun@lecturer.undip.ac.id', '$2y$12$pfVBeaEvfjz7WDF8ll/Fp.40EgcAm8SO7bnKBEMVzRjR6xIhVnDF.', 'Siti Muflichatun Mardiati', 'peneliti', NULL, '', 'true', '', ''),
(222, 'sriwidodoagungsuedy@lecturer.undip.ac.id', '$2y$12$yrMBVBUJu.a37lKaxFWC2Oc5umi4deBAdbqc4IV4Wt/19WOLRrtCS', 'Sri Widodo Agung Suedy', 'peneliti', NULL, '', 'true', '', ''),
(223, 'rinibudihastuti@lecturer.undip.ac.id', '$2y$12$oHM2YRWcDga7j2Mc/3340eS5O4cguuLIs6gbR/m9dpHMlmuE4WgKq', 'Rini Budihastuti', 'peneliti', NULL, '', 'true', '', ''),
(224, 'uditarwotjo@lecturer.undip.ac.id', '$2y$12$Okiy3jjnRrznsh3c4NO37.EJ0SJXi0S.2Qyxb84wpKIvK1x8bH0R2', 'Udi Tarwotjo', 'peneliti', NULL, '', 'true', '', ''),
(225, 'endangkusdiyantini@lecturer.undip.ac.id', '$2y$12$8TShQ/T9sEu8yLPlBW8HP.QscOyIFDTC19hf3dsTayYJsa/rmA67W', 'Endang Kusdiyantini', 'peneliti', NULL, '', 'true', '', ''),
(228, 'suryono@lecturer.undip.ac.id', '$2y$12$NLIipH7KcwiTrUdKE84rK.81Q/VdGWcYTVaWiB9M1LdCDCtRcpZK6', 'Suryono', 'peneliti', NULL, '', 'true', '', ''),
(229, 'fajarariantofisika@lecturer.undip.ac.id', '$2y$12$ZoirrxX/I2.WVoqN/iNBnO7.lBIx4Obud6XTEDTZqiEfXKRiY4SNK', 'Fajar Arianto', 'peneliti', NULL, '', 'true', '', ''),
(230, 'fajar@lecturer.undip.ac.id', '$2y$12$zbRCcCHBV5avfJuJrc7pPeVSMvgukwhrMmuHo.ky4wg/ZkdKM0lz2', 'Fajar Agung Nugroho', 'peneliti', NULL, '', 'true', '', ''),
(231, 'prajanto@lecturer.undip.ac.id', '$2y$12$ffnG0ZZG6QPOD3fEIJ0O/.KCs0wSI70HoSKCSnERyY8YSFfyhS.q6', 'Prajanto Wahyu Adi', 'peneliti', NULL, '', 'true', '', ''),
(232, 'siahaan.parsaoran@lecturer.undip.ac.id', '$2y$12$zfGEV1LvfaD4KHgdR6Pe8uBQENBO6sB0yuz8i3LAA6Olma/d1ALRa', 'Parsaoran Siahaan', 'peneliti', NULL, '', 'true', '', ''),
(233, 'ydsumanto@lecturer.undip.ac.id', '$2y$12$uaMOMty8pdgC6aEdouotBeJpJeKJ6TKcWMW1ZN2WFj5cdcR0oJ3EK', 'Yusephus Decupertino Sumanto', 'peneliti', NULL, '', 'true', '', ''),
(234, 'luciaratnasari@lecturer.undip.ac.id', '$2y$12$Qyh8JXYGNWubpZmPo0ICXOP1hi3.j3nw2ZUy7rYxUfaPDknwKMulq', 'Lucia Ratnasari', 'peneliti', NULL, '', 'true', '', ''),
(235, 'suryoto@lecturer.undip.ac.id', '$2y$12$OZSdkPF6DDR61agQzrAM8Oc.pPdFhf9YaQ/EKgkfCsIq1uySeP7R2', 'Suryoto', 'peneliti', NULL, '', 'true', '', ''),
(236, 'ratnaherdiana@lecturer.undip.ac.id', '$2y$12$uXupE8LR6q/5MdoyQnEePO8UTmhgR78Rr.MtwPxigMkPOV5znnl1y', 'Ratna Herdiana', 'peneliti', NULL, '', 'true', '', ''),
(237, 'iuttriutami@lecturer.undip.ac.id', '$2y$12$od024DaBdUu4JWSKbzpBje6y1wKjHxxZPk7.f9wpAJPUr03c6GZJK', 'Iut Tri Utami', 'peneliti', NULL, '', 'true', '', ''),
(238, '24060119140120@students.undip.ac.id', '$2y$12$uTZ09E27EDE0t2bg5Wu41eQijZAFpsU0kyctucRqMJdVwhlDMGBjm', 'Affan Noviananda Putra', 'peneliti', NULL, 'RptHSWVK5exw', 'false', '', ''),
(240, 'nafismufadhal@students.undip.ac.id', '$2y$12$o2oGbLz4R8wmpO1LUkl4k.Oa2YweayWiNLYNd0ifOa9Qd6ebncFIG', 'Nafis Mufadhal', 'peneliti', NULL, 'DhdAi1nYTFu5', 'true', '', ''),
(241, 'muhammadbhaska@students.undip.ac.id', '$2y$12$T1I9tR.QH1SZuWWYR2lxGe4k61dNRjUmY0TPmZ341bVMDK6UkaA66', 'Azra Muhammad Bhaskarogra', 'peneliti', NULL, '7eZ4EaGOFPqu', 'false', '', ''),
(245, 'ariellagiovanniwahyu@staff.undip.ac.id', '$2y$12$4T96rRPqjKAeGJx.t7fNqOpYVVUDCno99CVsZ/jFXvqbcZFWaJw4O', 'Ariella', 'admin prodi', 3, 'uyb2xohdzMCZ', 'false', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usulan`
--

CREATE TABLE `usulan` (
  `idusulan` int NOT NULL,
  `idperiode` int NOT NULL,
  `idskema` int NOT NULL,
  `judul` varchar(500) NOT NULL,
  `dana` int NOT NULL,
  `danadisetujui` int NOT NULL,
  `statususulan` varchar(100) NOT NULL,
  `statusproposal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulan`
--

INSERT INTO `usulan` (`idusulan`, `idperiode`, `idskema`, `judul`, `dana`, `danadisetujui`, `statususulan`, `statusproposal`) VALUES
(1, 1, 1, 'Water Quality  Characteristic of Phyllophorus sp (Echinodermata; Holothuroidea; Phyllophoridae) Habitat on the Kenjeran Waters, Surabaya', 10000000, 10000000, 'Didanai', 'f4'),
(2, 1, 6, 'The Growth Model of Eucheuma cottonii Cultivated in Karimunjawa Islands, Indonesia', 5000000, 5000000, 'Didanai', 'f4'),
(3, 1, 6, 'Organic matter, chlorophyll, and grain size features of the sediment in the culture sea pens of  Holothuria atra  (Holothuroidea, Echinodermata)', 20000000, 5000000, 'Didanai', 'f3'),
(5, 1, 6, 'Patin (Pangasius hypophthalmus) fish protein concentrate alters IGF-1 and IGF binding protein (IGFBP)-3 level of Sprague Dawley baby rats-induced malnutrition  ', 10000000, 10000000, 'Didanai', 'f3'),
(6, 1, 6, 'The effect of Patin (Pangasius hypophthalmus) fish protein concentrate in albumin level and immunity status of malnutrition Sprague Dawley baby rats', 10000000, 5000000, 'Didanai', 'f3'),
(7, 1, 7, 'Water Quality  Characteristic of Phyllophorus sp (Echinodermata; Holothuroidea; Phyllophoridae) Habitat on the Kenjeran Waters, Surabaya...', 15000000, 0, 'Didanai', 'f4'),
(11, 2, 2, 'Ini Judul saya untuk Riset Madya', 50000000, 0, 'Final', 'f4'),
(12, 2, 2, 'Pengembangan Aplikasi Manajemen Penelitian dan Pengabdian Kepada Masyarakat Fakultas Sains dan Matematika', 20000000, 20000000, 'Didanai', 'f4'),
(13, 2, 1, 'kkakakak', 10, 50000000, 'Didanai', 'f3'),
(14, 2, 1, 'Judul Penelitian Baru', 50000000, 40000000, 'Didanai', 'f4'),
(15, 2, 1, '--', 10000000, 0, 'Baru', 'f3'),
(17, 5, 2, 'Smart Home Sebagai Wadah Pengelolaan Energi Rumah Tangga Berbasis IoT', 30000000, 0, 'Didanai', 'f4'),
(18, 5, 7, '--', 1000000, 0, 'Baru', 'f3'),
(22, 5, 2, 'Pengembangan Aplikasi Manajemen Monitoring Pengajuan PAK Fakultas Sains dan Matematika', 20000000, 0, 'Didanai', 'f4'),
(23, 5, 5, 'sfsfssssds', 21232141, 0, 'Didanai', 'f4');

-- --------------------------------------------------------

--
-- Table structure for table `usulananggota`
--

CREATE TABLE `usulananggota` (
  `idanggota` int NOT NULL,
  `idusulan` int NOT NULL,
  `nipnim` varchar(20) NOT NULL,
  `posisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulananggota`
--

INSERT INTO `usulananggota` (`idanggota`, `idusulan`, `nipnim`, `posisi`) VALUES
(1, 1, 'H.7.1993110420180720', 'Ketua'),
(8, 1, '199311042017072002', 'Anggota'),
(12, 2, '12345678909876', 'Ketua'),
(13, 2, '199311042017072002', 'Anggota'),
(14, 3, '24010118100047', 'Ketua'),
(16, 3, '199311042017072002', 'Anggota'),
(18, 5, '11000117120127', 'Ketua'),
(19, 5, '199311042017072002', 'Anggota'),
(20, 6, '11000117120127', 'Ketua'),
(21, 6, '199311042017072002', 'Anggota'),
(22, 7, '11000117120127', 'Ketua'),
(23, 7, '199311042017072002', 'Anggota'),
(24, 3, '24050118130087', 'Anggota'),
(28, 1, '24010118100047', 'anggota'),
(29, 5, 'H.7.1993110420180720', 'Anggota'),
(30, 5, '24010118100047', 'Anggota'),
(31, 5, '24050118130087', 'Anggota'),
(32, 2, '24050118130087', 'Anggota'),
(34, 11, '198302032006041002', 'Ketua'),
(36, 12, '198302032006041002-', 'Ketua'),
(37, 12, '198104212008121002', 'Anggota'),
(38, 13, '197203171998021001', 'Ketua'),
(39, 14, '198104212008121002', 'Ketua'),
(40, 14, '196109201987031001', 'Anggota'),
(41, 14, '197312202000121001', 'Anggota'),
(43, 11, '199311042017072002', 'Anggota'),
(44, 15, 'H.7.1993110420180720', 'Ketua'),
(45, 15, '12345678909876', 'Anggota'),
(48, 17, '198302032006041002-', 'Ketua'),
(58, 18, '199311042017072002', 'Ketua'),
(59, 18, '199311042017072002', 'Anggota'),
(60, 18, '11000117120127', 'Anggota'),
(62, 17, '197308291998022001', 'Anggota'),
(63, 17, '197601102009122002', 'Anggota'),
(64, 17, '24060117120033', 'Anggota'),
(65, 17, '24060118130135', 'Anggota'),
(66, 17, '12345678909876', 'Anggota'),
(84, 22, '198302032006041002-', 'Ketua'),
(85, 22, '198104212008121002', 'Anggota'),
(86, 22, '24060119140120', 'Anggota'),
(87, 23, '24060121120033', 'Ketua'),
(88, 23, '196511071992031003', 'Anggota'),
(89, 23, '197404011999031002', 'Anggota'),
(90, 23, '24060119140120', 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `usulananggotaluar`
--

CREATE TABLE `usulananggotaluar` (
  `idanggotaluar` int NOT NULL,
  `idusulan` int NOT NULL,
  `gelardepan` varchar(100) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `gelarblkg` varchar(100) NOT NULL,
  `institusi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulananggotaluar`
--

INSERT INTO `usulananggotaluar` (`idanggotaluar`, `idusulan`, `gelardepan`, `namalengkap`, `gelarblkg`, `institusi`) VALUES
(3, 10, '', 'Hanjar Setyowati', 'S.Kom', 'Universitas Sebelas Maret Surakarta'),
(4, 15, '', 'Ucik Idayati', 'S.Pt', 'Universitas Sebelas Maret Surakarta'),
(6, 16, '', 'Muhammad', '', 'Rahmatan Lilalamin University of Mecca, SA'),
(8, 18, 'Dr.', 'Lala Andarista', 'M.T', 'Universitas Indonesia'),
(10, 17, 'Prof. Dr.', 'Adam Sukmana', 'M.Si', 'Institut Teknologi Bandung'),
(12, 20, 'Dr.', 'alex komang', 'M.Si', 'UI'),
(13, 21, 'Prof. Dr.', 'Adam Sukmana', 'S.Si, M.T', 'Institut Teknologi Bandung'),
(14, 22, 'Prof. Dr.', 'Adam Sukmana', 'S.Si, M.T', 'Institut Teknologi Bandung'),
(15, 23, 'H.', 'arriella', 'S.Pd, M.Kom.', 'Eka Garage');

-- --------------------------------------------------------

--
-- Table structure for table `usulanfile`
--

CREATE TABLE `usulanfile` (
  `idfile` int NOT NULL,
  `idusulan` int NOT NULL,
  `idjenis` int NOT NULL,
  `fileloc` varchar(500) NOT NULL,
  `tglunggah` date NOT NULL,
  `judulluaran` varchar(500) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulanfile`
--

INSERT INTO `usulanfile` (`idfile`, `idusulan`, `idjenis`, `fileloc`, `tglunggah`, `judulluaran`, `keterangan`) VALUES
(3, 1, 1, './uploads/proposal/Hanjar_Setyowati_S_Riset_Pembinaan_ID-1_proposal3.pdf', '2021-08-10', '', ''),
(4, 2, 1, './uploads/proposal/Hanjar_Setyowati_Penelitian_Mahasiswa_ID-2_proposal1.pdf', '2021-08-10', '', ''),
(5, 3, 1, './uploads/proposal/Hanjar_S_Riset_Utama_ID-3_proposal.pdf', '2021-08-13', '', ''),
(6, 5, 1, './uploads/proposal/Hanjar_S_Pengabdian_Wajib_Dosen_ID-5_proposal.pdf', '2021-08-14', '', ''),
(7, 6, 1, './uploads/proposal/Hanjar_Setyowati_Riset_Utama_ID-6_proposal.pdf', '2021-08-11', '', ''),
(10, 1, 2, './uploads/laporan/Hanjar_S_Riset_Pembinaan_ID-1_Laporan_Kemajuan1.pdf', '2021-08-16', '', ''),
(11, 1, 3, './uploads/laporan/Hanjar_S_Riset_Pembinaan_ID-1_Laporan_Akhir.pdf', '2021-08-16', '', ''),
(12, 1, 4, './uploads/laporan/Hanjar_S_Riset_Pembinaan_ID-1_Laporan_Penggunaan_Dana.pdf', '2021-08-16', '', ''),
(13, 2, 2, './uploads/laporan/Hanjar_S_Penelitian_Mahasiswa_ID-2_Laporan_Kemajuan.pdf', '2021-08-16', '', ''),
(14, 2, 3, './uploads/laporan/Hanjar_S_Penelitian_Mahasiswa_ID-2_Laporan_Akhir1.pdf', '2021-08-16', '', ''),
(18, 1, 10, './uploads/luaran/Ariana_Riset_Pembinaan_ID-1_Luaran_Lain1.pdf', '2021-10-07', 'judul luaran edit !!!', 'deskripsi ini edit dong'),
(19, 3, 8, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Modul_Pelatihan1.pdf', '2021-10-07', 'judul modul 2', 'deskripsi modul 2'),
(20, 6, 11, './uploads/luaran/Hanjar_Setyowati_PKM_Mahasiswa_ID-6_Publikasi_di_Media_Massa1.pdf', '2021-10-07', 'Publikasi koran Tempo', 'Terbit tgl 17 agustus'),
(21, 6, 11, './uploads/luaran/Hanjar_Setyowati_PKM_Mahasiswa_ID-6_Publikasi_di_Media_Massa.pdf', '2021-10-07', '........', '...............'),
(22, 7, 14, './uploads/luaran/__ID-7_Mitra_Berbadan_Hukum.pdf', '2021-10-07', '--edit', '--edit'),
(23, 5, 13, './uploads/luaran/Hanjar_Setyowati_PKM_Mahasiswa_ID-5_Produk_Tersertifikasi.pdf', '2021-10-07', 'PT', 'PT'),
(24, 7, 1, './uploads/proposal/Hanjar_Veronika_Riset_Madya_ID-7_proposal.pdf', '2021-08-18', '', ''),
(25, 2, 4, './uploads/laporan/Hanjar_Setyowati_Penelitian_Mahasiswa_ID-2_Laporan_Penggunaan_Dana1.pdf', '2021-08-31', '', ''),
(27, 3, 2, './uploads/laporan/Hanjar_Setyowati_Riset_Utama_ID-3_Laporan_Kemajuan.pdf', '2021-08-22', '', ''),
(28, 3, 3, './uploads/laporan/Hanjar_Setyowati_Riset_Utama_ID-3_Laporan_Akhir.pdf', '2021-08-22', '', ''),
(29, 1, 10, './uploads/luaran/Ariana_Riset_Pembinaan_ID-1_Luaran_Lain.pdf', '2021-10-07', 'Luaran Lain - Prototype', '--'),
(30, 3, 5, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Publikasi_Jurnal1.pdf', '2021-10-07', '5', '5'),
(31, 3, 6, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Proceeding_(Pemakalah_Forum_Ilmiah).pdf', '2021-10-07', '6', '6'),
(32, 3, 7, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Buku.pdf', '2021-10-07', '7', '7'),
(33, 3, 8, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Modul_Pelatihan.pdf', '2021-10-07', '8', '8'),
(34, 3, 9, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Teknologi_Tepat_Guna.pdf', '2021-10-07', '9', '9'),
(36, 3, 11, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Publikasi_di_Media_Massa.pdf', '2021-10-07', '11', '11'),
(37, 3, 12, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Produk_Terstandarisasi.pdf', '2021-10-07', '12', '-----?'),
(39, 3, 10, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Luaran_Lain.pdf', '2021-10-07', '14 >> 10 ...', '14'),
(40, 2, 7, './uploads/luaran/Dian_ajeng_PKM_Mahasiswa_ID-2_Buku.pdf', '2021-10-07', 'Buku Ajar XXXZ', 'ISBN : ............................ Jumlah Halaman : 203'),
(41, 3, 5, './uploads/luaran/SIP3mu_PKM_Mahasiswa_ID-3_Publikasi_Jurnal.pdf', '2021-10-07', 'Judul publikasi jurnal', 'Jurnal ...... Halaman 188-198 Vol 2 No 1'),
(43, 11, 1, './uploads/proposal/Satriyo_Adhy_Riset_Madya_ID-11_proposal.pdf', '2021-10-28', '', ''),
(44, 12, 1, './uploads/proposal/Satriyo_Adhy_Riset_Madya_ID-12_proposal.pdf', '2021-12-14', '', ''),
(45, 12, 2, './uploads/laporan/Satriyo_Adhy_Riset_Madya_ID-12_Laporan_Kemajuan.pdf', '2021-12-22', '', ''),
(46, 12, 3, './uploads/laporan/Satriyo_Adhy_Riset_Madya_ID-12_Laporan_Akhir.pdf', '2021-12-22', '', ''),
(47, 12, 4, './uploads/laporan/Satriyo_Adhy_Riset_Madya_ID-12_Laporan_Penggunaan_Dana.pdf', '2021-12-22', '', ''),
(48, 12, 7, './uploads/luaran/Satriyo_Adhy_Riset_Madya_ID-12_Buku.pdf', '2021-12-22', 'HKI Software Aplikasi PPM FSM', 'HKI draft'),
(49, 14, 1, './uploads/proposal/Panji_Wisnu_Wirawan_Riset_Pembinaan_ID-14_proposal.pdf', '2021-12-28', '', ''),
(51, 17, 1, './uploads/proposal/Satriyo_Adhy_Penelitian_Wajib_Dosen_ID-17_proposal2.pdf', '2022-02-14', '', ''),
(54, 2, 7, './uploads/luaran/Dian_ajeng_Pengabdian_Mahasiswa_ID-2_Buku.pdf', '2022-05-12', 'coba input buku 4', '--'),
(56, 22, 1, './uploads/proposal/Satriyo_Adhy_Riset_Madya_ID-22_proposal.pdf', '2022-06-13', '', ''),
(57, 23, 1, './uploads/proposal/Nafis_Mufadhal_Penelitian_Mahasiswa_ID-23_proposal.pdf', '2024-12-03', '', ''),
(58, 23, 8, './uploads/luaran/Nafis_Mufadhal_Penelitian_Mahasiswa_ID-23_Modul_Pelatihan.pdf', '2024-12-03', 'sdads', 'fssdaa'),
(59, 23, 4, './uploads/laporan/Nafis_Mufadhal_Penelitian_Mahasiswa_ID-23_Laporan_Penggunaan_Dana.pdf', '2024-12-03', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`iddepartemen`);

--
-- Indexes for table `jenisfile`
--
ALTER TABLE `jenisfile`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `peneliti`
--
ALTER TABLE `peneliti`
  ADD PRIMARY KEY (`nipnim`) USING BTREE;

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`idpengumuman`);

--
-- Indexes for table `pengumumanlampiran`
--
ALTER TABLE `pengumumanlampiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`idperiode`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`idprodi`);

--
-- Indexes for table `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`idsk`);

--
-- Indexes for table `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`idskema`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`idtemplate`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`idusulan`);

--
-- Indexes for table `usulananggota`
--
ALTER TABLE `usulananggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `usulananggotaluar`
--
ALTER TABLE `usulananggotaluar`
  ADD PRIMARY KEY (`idanggotaluar`);

--
-- Indexes for table `usulanfile`
--
ALTER TABLE `usulanfile`
  ADD PRIMARY KEY (`idfile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `iddepartemen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenisfile`
--
ALTER TABLE `jenisfile`
  MODIFY `idjenis` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `idpengumuman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumumanlampiran`
--
ALTER TABLE `pengumumanlampiran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `idperiode` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `idprodi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sk`
--
ALTER TABLE `sk`
  MODIFY `idsk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `skema`
--
ALTER TABLE `skema`
  MODIFY `idskema` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `idtemplate` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `usulan`
--
ALTER TABLE `usulan`
  MODIFY `idusulan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usulananggota`
--
ALTER TABLE `usulananggota`
  MODIFY `idanggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `usulananggotaluar`
--
ALTER TABLE `usulananggotaluar`
  MODIFY `idanggotaluar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usulanfile`
--
ALTER TABLE `usulanfile`
  MODIFY `idfile` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
