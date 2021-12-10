-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2021 at 10:18 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE `bencana` (
  `id` int(11) NOT NULL,
  `judul_bencana` varchar(255) NOT NULL,
  `jenis_bencana_id` int(11) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `deskripsi_bencana` text NOT NULL,
  `photo_bencana` text NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id`, `judul_bencana`, `jenis_bencana_id`, `latitude`, `longitude`, `deskripsi_bencana`, `photo_bencana`, `tanggal_kejadian`, `alamat`) VALUES
(2, 'Tanah Longsor', 9, '4.924452', '97.785654', 'Tanah Longsor', 'photo.jpg', '2021-12-09', 'WQFP+P7R, Menunasah Jeumpa, East Idi, East Aceh Regency, Aceh 24454, Indonesia'),
(3, 'POHON TUMBANG MOENGKO', 7, '5.889736', '95.31938', 'POHON TUMBANG MOENGKO', 'photo.jpg', '2020-01-01', 'V8Q9+RHX, Kuta Barat, Sukakarya, Sabang City, Aceh, Indonesia'),
(4, 'Kondisi Membahayakan Jiwa Manusia', 10, '5.43746', '95.71528', 'Kondisi Membahayakan Jiwa Manusia', 'photo.jpg', '2019-11-17', 'CPP8+X4 Suka Damai, Aceh Besar Regency, Aceh, Indonesia'),
(5, 'Tanah longsor Desa Dukuhturi Kec. Bumiayu', 5, '5.6704', '95.12485', 'Tanah longsor Desa Dukuhturi Kec. Bumiayu', 'photo.jpg', '2021-09-25', 'M4CF+6WR, Lampuyang, Pulo Aceh, Aceh Besar Regency, Aceh, Indonesia'),
(6, 'Perahu Nelayan Tenggelam', 4, '1.09933', '99.7504', 'Perahu Nelayan Tenggelam', 'photo.jpg', '2021-05-28', '3PXX+7WQ, Pasar Latong, Lubuk Barumun, Padang Lawas Regency, North Sumatra 22763, Indonesia'),
(7, 'Pemantauan gelombang pasang air laut di Pantai Lengkong', 8, '2.152389', '98.47425', 'Pemantauan gelombang pasang air laut di Pantai Lengkong', 'photo.jpg', '2019-06-10', 'Jl. Sisingamangaraja No.29, Pakkat Hauagong, Pakkat, Kabupaten Humbang Hasundutan, Sumatera Utara 22455, Indonesia'),
(8, 'Bencana angin puting beliung', 4, '2.9543', '98.851', 'Bencana angin puting beliung', 'photo.jpg', '2019-04-01', 'XV32+P9 Sondi Raya, Simalungun Regency, North Sumatra, Indonesia'),
(9, 'Banjir Rob1', 4, '1.08456', '100.02178', 'Banjir Rob1', 'photo.jpg', '2019-12-02', '32MC+RP Sibodak Sosa Jae, Padang Lawas Regency, North Sumatra, Indonesia'),
(10, 'Kemarin ada banjir aja', 1, '1.82352', '100.0142', 'Pohon Tumbang', 'photo.jpg', '2021-07-04', 'R2F7+CM Mampang, South Labuhan Batu Regency, North Sumatra, Indonesia'),
(11, 'Kemarin ada banjir aja', 2, '3.297133', '99.37202', 'Angin Kencang', 'photo.jpg', '2021-01-09', '79WC+WCF, Indrapura, Air Putih, Batu Bara Regency, North Sumatra 21257, Indonesia'),
(12, 'POHON TUMBANG', 8, '-0.1966', '99.99694', 'POHON TUMBANG', 'photo.jpg', '2020-12-12', 'RX3W+8Q6, Bawan, IV Nagari, Agam Regency, West Sumatra 26161, Indonesia'),
(13, 'TANAH LONGSOR', 8, '-0.135245', '100.547546', 'TANAH LONGSOR', 'photo.jpg', '2021-07-11', 'VG7X+G7Q, Guguak VIII Koto, Guguak, Lima Puluh Kota Regency, West Sumatra 26253, Indonesia'),
(14, 'Tanah Longsor Desa Ciputih Kec. Salem', 8, '0.124304', '99.868561', 'Tanah Longsor Desa Ciputih Kec. Salem', 'photo.jpg', '2019-02-13', '4VF9+PC Aua Kuniang, West Pasaman Regency, West Sumatra, Indonesia'),
(15, 'TANAH LONGSOR Desa Karangpari Kecamatan Bantarkawung', 6, '-0.54585', '100.2985', 'TANAH LONGSOR Desa Karangpari Kecamatan Bantarkawung', 'photo.jpg', '2020-12-14', 'Jl. Raya Padang Bukittinggi KM 51 Sicincin, Kapalo Hilalang, Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman, Sumatera Barat 25584, Indonesia'),
(16, 'BANJIR Dk. Kebandungan, Desa kebandungan, kec. Bantarkawung', 2, '-0.20094', '100.3281', 'BANJIR Dk. Kebandungan, Desa kebandungan, kec. Bantarkawung', 'photo.jpg', '2020-07-27', 'Q8XH+J6 Koto Rantang, Agam Regency, West Sumatra, Indonesia'),
(17, 'TANAH LONGSOR Blok Cadassawah desa Terlaya Kecamatan Bantarkawung', 3, '-2.194636', '103.7539', 'TANAH LONGSOR Blok Cadassawah desa Terlaya Kecamatan Bantarkawung', 'photo.jpg', '2021-12-06', 'RQ43+4G7, Sindang Marga, Bayung Lencir, Musi Banyuasin Regency, South Sumatra 30756, Indonesia'),
(18, 'TANAH LONGSOR RT 03 RW 01 desa Telaga Kecamatan Bantarkawung', 9, '-2.859353', '104.3568', 'TANAH LONGSOR RT 03 RW 01 desa Telaga Kecamatan Bantarkawung', 'photo.jpg', '2020-09-08', '49R4+7P Sukaraja Baru, Banyuasin Regency, South Sumatra, Indonesia'),
(19, 'Tanah Longsor Jln Provinsi Salem - Bumiayu, Desa Gunung Larang, Kecamatan Salem', 4, '-3.202146', '105.098844', 'Tanah Longsor Jln Provinsi Salem - Bumiayu, Desa Gunung Larang, Kecamatan Salem', 'photo.jpg', '2021-07-14', 'Q3XX+4G Pangkalan Lampam, Ogan Komering Ilir Regency, South Sumatra, Indonesia'),
(20, 'Bencana gelombang air pasang', 8, '-3.629162', '103.046417', 'Bencana gelombang air pasang', 'photo.jpg', '2021-01-16', '92CW+7H4, Terusan Baru, Tebing Tinggi Sub-District, Empat Lawang Regency, South Sumatra 31453, Indonesia'),
(27, 'DUA NELAYAN HILANG SAAT MELAUT', 7, '-0.663637', '102.278824', 'DUA NELAYAN HILANG SAAT MELAUT', 'photo.jpg', '2019-03-14', '87PH+HFX, Aur Cina, Batang Cenaku, Indragiri Hulu Regency, Riau 29371, Indonesia'),
(28, 'Kebakaran Rumah', 10, '0.960321', '102.072948', 'Kebakaran Rumah', 'photo.jpg', '2019-12-20', 'X36F+4FF, Bunga Raya, Siak Regency, Riau 28662, Indonesia'),
(29, 'Bencana Lainnya Desa Tembongraja Kec. Salem', 9, '-1.454972', '102.1046', 'Bencana Lainnya Desa Tembongraja Kec. Salem', 'photo.jpg', '2019-10-09', 'G4W3+2R Purwo Bakti, Bungo Regency, Jambi, Indonesia'),
(30, 'Kebakaran rumah', 5, '-2.514652', '102.668109', 'Kebakaran rumah', 'photo.jpg', '2020-08-06', 'FMP9+46 Sungai Benteng, Sarolangun Regency, Jambi, Indonesia'),
(37, 'Kebakaran Rumah Hunian', 5, '-3.485916', '102.6526', 'Kebakaran Rumah Hunian', 'photo.jpg', '2021-01-24', 'GM73+J2 Air Dingin, Rejang Lebong Regency, Bengkulu, Indonesia'),
(38, 'Kebakaran Pemukiman', 10, '-4.759099', '103.3500848', 'Kebakaran Pemukiman', 'photo.jpg', '2019-07-06', 'Unnamed Road, Kepahyang, Tetap, Kabupaten Kaur, Bengkulu 38963, Indonesia'),
(39, 'Latihan banjir1', 9, '-4.08383', '102.5534', 'Latihan banjir1', 'photo.jpg', '2020-09-02', 'WH83+553, Padang Rambun, South Seluma, Seluma Regency, Bengkulu 38878, Indonesia'),
(40, 'Banjir Rob Desa Randusanga Kulon Kec. Brebes', 3, '-3.774363889', '102.3908861', 'Banjir Rob Desa Randusanga Kulon Kec. Brebes', 'photo.jpg', '2019-11-14', '69GR+6C6, Taba Terunjam, Karang Tinggi, Central Bengkulu Regency, Bengkulu 38382, Indonesia'),
(41, 'Banjir Rob Desa Prapag Lor Kec. Losari', 1, '-3.139963', '102.2441', 'Banjir Rob Desa Prapag Lor Kec. Losari', 'photo.jpg', '2019-08-10', '#ERROR!'),
(42, 'Bencana Lainnya Desa Kalilangkap Kec. Bumiayu', 6, '-4.846744', '104.9106', 'Bencana Lainnya Desa Kalilangkap Kec. Bumiayu', 'photo.jpg', '2021-11-04', 'Jl. Alamsyah RPN No.131, Klp. Tujuh, Kec. Kotabumi Sel., Kabupaten Lampung Utara, Lampung 34514, Indonesia'),
(43, 'banjir', 4, '-5.065671', '105.359242', 'banjir', 'photo.jpg', '2021-01-04', 'W9M5+PM Tulus Rejo, East Lampung Regency, Lampung, Indonesia'),
(44, 'Orang tersambar petir', 6, '-5.071868', '105.1347', 'Orang tersambar petir', 'photo.jpg', '2021-05-19', 'W4HM+7V Sinar Banten/Bekri, Central Lampung Regency, Lampung, Indonesia'),
(45, 'ANGIN PUTING BELIUNG KEL. BONESOMPE', 1, '-5.316695', '104.017503', 'ANGIN PUTING BELIUNG KEL. BONESOMPE', 'photo.jpg', '2021-05-14', 'M2M8+2P9, Biha, South Pesisir, West Lampung Regency, Lampung 34875, Indonesia'),
(46, 'BANJIR DESA PANJO', 1, '-5.36304', '105.311723', 'BANJIR DESA PANJO', 'photo.jpg', '2020-12-16', 'Unnamed Road, Sabah Balau, Tanjung Bintang, South Lampung Regency, Lampung 35365, Indonesia'),
(48, 'Banjir Luapan', 3, '-5.090944', '104.182892', 'Banjir Luapan', 'photo.jpg', '2019-02-11', 'W55M+J5 Sukabumi, West Lampung Regency, Lampung, Indonesia'),
(49, 'Puting Beliung', 10, '-5.101203', '104.680367', 'Puting Beliung', 'photo.jpg', '2021-09-20', 'VMXJ+G4 Marga Jaya, Central Lampung Regency, Lampung, Indonesia'),
(50, 'Monitoring dan Evaluasi Penanganan Tanggul Jebul Sungai Cikawung di Desa Padangsari Kecamatan Majenang', 8, '-4.47', '105', 'Monitoring dan Evaluasi Penanganan Tanggul Jebul Sungai Cikawung di Desa Padangsari Kecamatan Majenang', 'photo.jpg', '2020-05-12', 'G2J2+22 Gedung Ratu, West Tulang Bawang Regency, Lampung, Indonesia'),
(51, 'POHON TUMBANG MENIMPA RUMAH', 5, '-1.889633', '105.7009', 'POHON TUMBANG MENIMPA RUMAH', 'photo.jpg', '2020-08-18', '4P62+49 Kelapa, West Bangka Regency, Bangka Belitung Islands, Indonesia'),
(52, 'tanggul jebol', 1, '-1.924949', '106.026982', 'tanggul jebol', 'photo.jpg', '2021-09-13', '32GG+3WV, Air Duren, Pemali, Bangka Regency, Bangka Belitung Islands 33255, Indonesia'),
(53, 'longsor', 2, '-2.136', '106.087', 'longsor', 'photo.jpg', '2019-05-03', 'Jl. Mentok No.4, Kace Tim., Mendo Bar., Kabupaten Bangka, Kepulauan Bangka Belitung 33134, Indonesia'),
(54, 'lomgsor', 2, '-2.17', '106.13', 'lomgsor', 'photo.jpg', '2019-01-08', '#ERROR!'),
(55, 'KEBAKARAN PERMUKIMAN', 8, '0.853556', '104.5409', 'KEBAKARAN PERMUKIMAN', 'photo.jpg', '2021-05-26', 'Unnamed Road, Gn. Lengkuas, Bintan Tim., Kabupaten Bintan, Kepulauan Riau 29151, Indonesia'),
(57, 'Longsor', 3, '-6.131808', '106.957408', 'Longsor', 'photo.jpg', '2019-07-28', 'VX94+7X Rorotan, North Jakarta City, Jakarta, Indonesia'),
(58, 'Angin Puting Beliung Desa Prapag Kidul Kec. Losari', 5, '-6.166699', '106.78', 'Angin Puting Beliung Desa Prapag Kidul Kec. Losari', 'photo.jpg', '2020-03-27', 'Gedung Bank Mandiri Cabang Prapatan, Jl. Prapatan No.30 AB, RT.5/RW.1, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11510, Indonesia'),
(59, 'Sosialisasi Penyebarluasan Informasi Kebencanaan kepada Ketua RT dan RW di Desa Bulusari Kecamatan Gandrungmangu', 6, '-6.26248', '106.8971', 'Sosialisasi Penyebarluasan Informasi Kebencanaan kepada Ketua RT dan RW di Desa Bulusari Kecamatan Gandrungmangu', 'photo.jpg', '2020-03-19', 'PVQW+2R Halim Perdana Kusumah, East Jakarta City, Jakarta, Indonesia'),
(60, 'KEBAKARAN LAHAN', 1, '-6.155415', '106.842308', 'KEBAKARAN LAHAN', 'photo.jpg', '2019-12-24', 'RRVV+R2G, RW.10, Gn. Sahari Sel., Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610, Indonesia'),
(67, 'BANJIR', 1, '-6.124898', '107.063268', 'BANJIR', 'photo.jpg', '2020-04-17', 'V3F7+V2F, Muarabakti, Babelan, Bekasi Regency, West Java 17620, Indonesia'),
(68, 'BANJIR DESA OWINI', 2, '-6.553259', '106.7428', 'BANJIR DESA OWINI', 'photo.jpg', '2021-01-28', 'Jl. Cilubang Mekar No.8, RT.01/RW.08, Situgede, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16115, Indonesia'),
(69, 'dampak banjir', 6, '-7.22199', '107.54115', 'dampak banjir', 'photo.jpg', '2021-11-17', 'QGHR+49X, Margaluyu, Pangalengan, Bandung Regency, West Java 40378, Indonesia'),
(70, 'Kebakaran Rumah di Desa Kodokan Kecamatan Kunduran', 7, '-7.098653', '107.434188', 'Kebakaran Rumah di Desa Kodokan Kecamatan Kunduran', 'photo.jpg', '2021-05-25', 'Jl. Ciwidey - Cibeber No.75, Lebakmuncang, Kec. Ciwidey, Kabupaten Bandung, Jawa Barat 40973, Indonesia'),
(81, 'TERCEBUR SUMUR', 8, '-7.295843', '108.7581', 'TERCEBUR SUMUR', 'photo.jpg', '2021-03-24', 'Jl. Anggur No.2, RT.4/RW.6, Pisangan, Jenang, Kec. Majenang, Kabupaten Cilacap, Jawa Tengah 53257, Indonesia'),
(82, 'Tanggul Longsor', 5, '-6.66625', '110.9047', 'Tanggul Longsor', 'photo.jpg', '2020-08-01', '8WJ4+X4R, Colo, Dawe, Kudus Regency, Central Java 59353, Indonesia'),
(94, 'Bencana Lainnya Adisana Kec. Bumiayu', 4, '-6.860138', '111.403998', 'Bencana Lainnya Adisana Kec. Bumiayu', 'photo.jpg', '2021-11-10', '#ERROR!'),
(95, 'Orang Tenggelam', 5, '-6.896817', '109.4613', 'Orang Tenggelam', 'photo.jpg', '2019-08-19', 'Jalan Raya Petarukan, Petarukan, Pemalang, Petarukan, Kec. Petarukan, Kabupaten Pemalang, Jawa Tengah 52362, Indonesia'),
(96, 'Talud longsor', 9, '-6.95', '110.41817', 'Talud longsor', 'photo.jpg', '2021-10-23', 'Jl. Yos Sudarso No.57, Bandarharjo, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50174, Indonesia'),
(106, 'TANAH LONGSOR DI DSN. CIAGRU RT 04 RW 01 DS. CIBEUNYING KEC. MAJENANG KAB. CILACAP', 3, '-8.172', '113.0043', 'TANAH LONGSOR DI DSN. CIAGRU RT 04 RW 01 DS. CIBEUNYING KEC. MAJENANG KAB. CILACAP', 'photo.jpg', '2021-11-21', 'R2H3+6P Supiturang, Lumajang Regency, East Java, Indonesia'),
(107, 'Tanah Longsor Desa Pagentan Telan Korban Jiwa', 3, '-7.775617', '113.6844', 'Tanah Longsor Desa Pagentan Telan Korban Jiwa', 'photo.jpg', '2020-12-16', '#ERROR!'),
(108, 'Longsor Pondasi', 10, '-8.37876', '112.6787', 'Longsor Pondasi', 'photo.jpg', '2019-02-18', 'Jalan Raya Sitiarjo Rt/Rw 07/02 Sumbermanjing, Sitiarjo, Sumbermanjing, Kabupaten Malang, Jawa Timur 65176, Indonesia'),
(109, 'Kejadian Pohon Tumbang di Desa Kalikudi Kecamatan Adipala Kab. Cilacap', 4, '-7.604084', '111.4136', 'Kejadian Pohon Tumbang di Desa Kalikudi Kecamatan Adipala Kab. Cilacap', 'photo.jpg', '2020-11-14', '9CW7+9C Sugihwaras, Magetan Regency, East Java, Indonesia'),
(110, 'Tanah Longsor Ragatunjung Kec. Paguyangan', 6, '-7.952767', '113.93789', 'Tanah Longsor Ragatunjung Kec. Paguyangan', 'photo.jpg', '2019-02-06', '2WWQ+X52, Krajan Selatan, Pecalongan, Sukosari, Kabupaten Bondowoso, Jawa Timur 68287, Indonesia'),
(111, 'Tanah Longsor Wonoroto Watumalang 3 Titik Dalam Sehari', 4, '-7.91098', '111.48375', 'Tanah Longsor Wonoroto Watumalang 3 Titik Dalam Sehari', 'photo.jpg', '2019-08-03', '#ERROR!'),
(112, 'Tanah Longsor Susulan Ketinggring1', 7, '-8.06078', '112.0605', 'Tanah Longsor Susulan Ketinggring1', 'photo.jpg', '2019-08-22', 'W3Q6+J65, Srengat II, Srengat, Kec. Srengat, Kabupaten Blitar, Jawa Timur 66152, Indonesia'),
(113, 'Tanah Longsor Kedung Oleng Kec. Paguyangan', 5, '-7.16603', '111.8903', 'Tanah Longsor Kedung Oleng Kec. Paguyangan', 'photo.jpg', '2021-12-01', 'Jl. Basuki Rahmat No.4A, Jambean, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115, Indonesia'),
(114, 'Tanah Longsor Kalibening Sukoharjo', 1, '-7.921339', '113.1204', 'Tanah Longsor Kalibening Sukoharjo', 'photo.jpg', '2021-02-19', 'Unnamed Road, Sumber, Probolinggo Regency, East Java 67263, Indonesia'),
(115, 'longsor ini sepanjang 80 meter dan dieperkirakan karena curah hujan yang tinggi menyebabkan longsor ini.', 9, '-7.5869889', '111.9046556', 'longsor ini sepanjang 80 meter dan dieperkirakan karena curah hujan yang tinggi menyebabkan longsor ini.', 'photo.jpg', '2021-10-21', 'CW73+6R4, Begadung Barat, Begadung, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64413, Indonesia'),
(116, 'Tanah longsor Siwadas Watumalang1', 2, '-6.897139', '113.807139', 'Tanah longsor Siwadas Watumalang1', 'photo.jpg', '2021-10-10', '4R34+4V West Kerta, Sumenep Regency, East Java, Indonesia'),
(117, 'Tebing Longsor', 9, '-7.719446756', '111.3046982', 'Tebing Longsor', 'photo.jpg', '2020-07-26', '78J3+6V Selotinatah, Magetan Regency, East Java, Indonesia'),
(118, 'Apel Gelar Pasukan Kesiapsiagaan Menghadapi Bencana di Kecamatan Nusawungu Kab. Cilacap', 8, '-7.85592', '113.7515', 'Apel Gelar Pasukan Kesiapsiagaan Menghadapi Bencana di Kecamatan Nusawungu Kab. Cilacap', 'photo.jpg', '2019-12-28', '4QV2+JHM, Barat Sungai, Patemon, Pakem, Kabupaten Bondowoso, Jawa Timur 68253, Indonesia'),
(119, 'Kebakaran kios pasar', 3, '-7.96165', '113.401', 'Kebakaran kios pasar', 'photo.jpg', '2021-02-04', '2CQ2+89Q, Timur Sungai, Tiris, Kabupaten Probolinggo, Jawa Timur 67287, Indonesia'),
(120, 'BANJIR DI 4 DESA ( PADANGSARI, MULYASARI, MULYADADI, PAHONJEAN ) DI KECAMATAN MAJENANG', 1, '-7.09397', '112.3298', 'BANJIR DI 4 DESA ( PADANGSARI, MULYASARI, MULYADADI, PAHONJEAN ) DI KECAMATAN MAJENANG', 'photo.jpg', '2021-04-06', 'Jl. Raya Gresik - Babat No.25, Sukodadi, Kec. Sukodadi, Kabupaten Lamongan, Jawa Timur 62253, Indonesia'),
(121, 'Kejadian Tanah Longsor di Desa Bengbulang Kecamatan Karangpucung', 7, '-7.2630549', '112.6432174', 'Kejadian Tanah Longsor di Desa Bengbulang Kecamatan Karangpucung', 'photo.jpg', '2019-02-12', 'Jl. Alas Malang No.11, RW.03, Bringin, Kec. Sambikerep, Kota SBY, Jawa Timur 60218, Indonesia'),
(122, 'kebakaran toko sembako', 8, '-7.687097', '112.895266', 'kebakaran toko sembako', 'photo.jpg', '2020-02-01', '8V7W+84R, Bajangan Barat, Bajangan, Kec. Gondang Wetan, Pasuruan, Jawa Timur 67174, Indonesia'),
(126, 'Atap rumah roboh', 2, '-7.81665', '110.29481', 'Atap rumah roboh', 'photo.jpg', '2019-07-13', '57MV+7RH, Jatisawit, Balecatur, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55295, Indonesia'),
(127, 'Apel Gelar Pasukan Kesiapsiagaan Menghadapi Bencana di Kecamatan Cipari Kab. Cilacap', 5, '-7.905279', '110.152711', 'Apel Gelar Pasukan Kesiapsiagaan Menghadapi Bencana di Kecamatan Cipari Kab. Cilacap', 'photo.jpg', '2020-01-02', 'Jl. Ki Hadi Sugito No.17, Tayuban, Wates, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55651, Indonesia'),
(128, 'Sosialisasi Mitigasi Bencana Alam di Desa Cimrutu Kecamatan Patimuan Kab. Cilacap', 4, '-8.00472', '110.7336', 'Sosialisasi Mitigasi Bencana Alam di Desa Cimrutu Kecamatan Patimuan Kab. Cilacap', 'photo.jpg', '2020-06-21', 'XPWM+4C Karangasem, Gunung Kidul Regency, Special Region of Yogyakarta, Indonesia'),
(129, 'Pohon Tumbang ke Jalan Raya Wonolelo Jogoyitnan', 1, '-7.66714', '110.419', 'Pohon Tumbang ke Jalan Raya Wonolelo Jogoyitnan', 'photo.jpg', '2020-12-10', 'Jl. Kaliurang No.17, RW.17, Sanggrahan, Pakembinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582, Indonesia'),
(139, 'Angin Puting Beliung Laren Kec. Bumiayu', 5, '-8.575805', '118.9933', 'Angin Puting Beliung Laren Kec. Bumiayu', 'photo.jpg', '2021-02-16', '#ERROR!'),
(140, 'Apel Gelar Pasukan Kesiapsiagaan Menghadapi Bencana di Kecamatan Binangun Kab. Cilacap', 4, '-8.774194444', '116.4770472', 'Apel Gelar Pasukan Kesiapsiagaan Menghadapi Bencana di Kecamatan Binangun Kab. Cilacap', 'photo.jpg', '2019-08-22', '6FGG+5Q2, Jerowaru, East Lombok Regency, West Nusa Tenggara 83672, Indonesia'),
(141, 'TANAH LONGSOR MENUTUP JALAN DESA DI DSN. CIBUBUAY, BANTARPANJANG, KEC. CIMANGGU, KAB. CILACAP', 4, '-8.636967', '116.426475', 'TANAH LONGSOR MENUTUP JALAN DESA DI DSN. CIBUBUAY, BANTARPANJANG, KEC. CIMANGGU, KAB. CILACAP', 'photo.jpg', '2021-02-10', 'Montong Baan, Sikur, Montongbaan, Sikur, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83662, Indonesia'),
(142, 'Atap Rumah Roboh', 2, '-8.4793', '118.8', 'Atap Rumah Roboh', 'photo.jpg', '2021-02-28', 'GRC2+63P, Nungga, East Rasanae, Bima Regency, West Nusa Tenggara 84113, Indonesia'),
(143, 'Tanah longsor Bentarsari Kec. Salem', 1, '-8.75591', '116.8542', 'Tanah longsor Bentarsari Kec. Salem', 'photo.jpg', '2021-06-10', '6VV3+MHX, Kuang, Taliwang, West Sumbawa Regency, West Nusa Tenggara 84455, Indonesia'),
(144, 'TANAH LONGSOR MENUTUP JALAN DESA DI DSN.PANDEUY, DS. PANULISAN BARAT, KEC. DAYEUHLUHUR, KAB. CILACAP', 10, '-8.625306', '117.6172', 'TANAH LONGSOR MENUTUP JALAN DESA DI DSN.PANDEUY, DS. PANULISAN BARAT, KEC. DAYEUHLUHUR, KAB. CILACAP', 'photo.jpg', '2021-07-10', '9JF8+VV Lape, Sumbawa Regency, West Nusa Tenggara, Indonesia'),
(145, 'TANAH LONGSOR 4 TITIK DI DSN. PANUSUPAN. DS. CIMANGGU, KEC. CIMANGGU, KAB. CILACAP', 1, '-9.62411', '119.3912', 'TANAH LONGSOR 4 TITIK DI DSN. PANUSUPAN. DS. CIMANGGU, KEC. CIMANGGU, KAB. CILACAP', 'photo.jpg', '2021-06-17', '99GR+99G, Pada Eweta, Waikabubak City, West Sumba Regency, East Nusa Tenggara, Indonesia'),
(146, 'Hujan Deras', 4, '-10.62745', '123.2195', 'Hujan Deras', 'photo.jpg', '2021-01-19', '96F9+2Q Olafulihaa, Rote Ndao Regency, East Nusa Tenggara, Indonesia'),
(147, 'Kejadian Pohon Tumbang di Desa Karangtengah Kec. Sampang Kab. Cilacap', 4, '-9.701377', '119.860939', 'Kejadian Pohon Tumbang di Desa Karangtengah Kec. Sampang Kab. Cilacap', 'photo.jpg', '2019-06-16', '7VX6+C9 Kambata Wundut, East Sumba Regency, East Nusa Tenggara, Indonesia'),
(148, 'Pondasi rumah ambrol', 7, '-8.62', '120.46', 'Pondasi rumah ambrol', 'photo.jpg', '2019-06-27', 'Jl. Mongosidi No.29, Waso, Langke Rembong, Kabupaten Manggarai, Nusa Tenggara Tim., Indonesia'),
(149, 'Talud Longsor', 8, '-9.133113', '124.893683', 'Talud Longsor', 'photo.jpg', '2021-04-12', 'VV8V+84F, Fatukbot, South Atambua, Belu Regency, East Nusa Tenggara, Indonesia'),
(150, 'Kebakaran Rumah Huni Tegeswetan Kepil', 3, '-9.759', '124.267', 'Kebakaran Rumah Huni Tegeswetan Kepil', 'photo.jpg', '2019-03-13', '67R8+9Q Oelbubuk, South Timor Tengah Regency, East Nusa Tenggara, Indonesia'),
(151, 'BANJIR DESA BETALEMBA', 1, '-8.597674', '120.47712', 'BANJIR DESA BETALEMBA', 'photo.jpg', '2020-10-10', 'CF2H+Q48, Tenda, Langke Rembong, Manggarai Regency, East Nusa Tenggara, Indonesia'),
(152, 'BANJIR DESA BEGA', 4, '0.005', '110.95361', 'BANJIR DESA BEGA', 'photo.jpg', '2020-11-06', '#ERROR!'),
(153, 'Kebakaran Rumah Desa Bambalemo', 8, '0.01716', '110.01177', 'Kebakaran Rumah Desa Bambalemo', 'photo.jpg', '2019-12-19', '#ERROR!'),
(154, 'Droping air bersih untuk Warga yg Terimbas Kebakaran Kilang Minyak Pertamina Cilacap', 8, '1.040768', '111.906248', 'Droping air bersih untuk Warga yg Terimbas Kebakaran Kilang Minyak Pertamina Cilacap', 'photo.jpg', '2019-07-06', '#ERROR!'),
(155, 'Pembersihan/Pemotongan Pohon Tumbang', 5, '-2.516241', '110.2169', 'Pembersihan/Pemotongan Pohon Tumbang', 'photo.jpg', '2021-09-25', 'F6M8+GQ Kendawangan Kiri, Ketapang Regency, West Kalimantan, Indonesia'),
(168, 'Tanah longsor Lancar Wadaslintang', 4, '-3.4149', '115.735891', 'Tanah longsor Lancar Wadaslintang', 'photo.jpg', '2021-07-09', 'HPMP+R5H, Tibarau Panjang, Kusan Hulu, Tanah Bumbu Regency, South Kalimantan 72272, Indonesia'),
(169, 'Tanah Longsor Kalikarung', 8, '-2.34604', '116.01155', 'Tanah Longsor Kalikarung', 'photo.jpg', '2019-06-17', 'M236+HJ Sengayam, Kotabaru Regency, South Kalimantan, Indonesia'),
(171, 'Tanah Longsor Mengenai 2 Rumah di Besani', 9, '-3.52222', '116.2381', 'Tanah Longsor Mengenai 2 Rumah di Besani', 'photo.jpg', '2021-01-19', 'F6HQ+46 Bekambit Asri, Kotabaru Regency, South Kalimantan, Indonesia'),
(176, 'Tanah Longsor Menimbun Rumah dan Bengkel Ketinggring Kalianget3', 6, '-0.374094', '117.253718', 'Tanah Longsor Menimbun Rumah dan Bengkel Ketinggring Kalianget3', 'photo.jpg', '2019-09-12', 'J7G3+9F Siring River, Samarinda City, East Kalimantan, Indonesia'),
(177, 'Kebakaran Pabrik Kayu', 2, '3.579415', '117.00225', 'Kebakaran Pabrik Kayu', 'photo.jpg', '2021-08-19', 'H2H2+JWW, Sesayap, Sesayap Hilir, Tana Tidung Regency, North Kalimantan 77152, Indonesia'),
(178, 'Rumah Ambrol Mojosari', 7, '2.148109', '117.433877', 'Rumah Ambrol Mojosari', 'photo.jpg', '2020-09-22', 'Kalimarau Airport, Tlk. Bayur, Kabupaten Berau, Kalimantan Timur 77315, Indonesia'),
(179, 'Banjir Dusun Semparong Desa Bukit Serayang', 4, '1.429855', '124.9675', 'Banjir Dusun Semparong Desa Bukit Serayang', 'photo.jpg', '2019-09-06', 'CXH8+VV7, Rap-Rap, Airmadidi, North Minahasa Regency, North Sulawesi, Indonesia'),
(180, 'Tanah Longsor Menutup Jalan Banyumudal', 1, '0.9130949', '123.126', 'Tanah Longsor Menutup Jalan Banyumudal', 'photo.jpg', '2019-06-10', 'W47G+69 Tombulang, North Bolaang Mongondow Regency, North Sulawesi, Indonesia'),
(181, 'Talud sungai longsor', 1, '1.58355', '124.873', 'Talud sungai longsor', 'photo.jpg', '2020-11-19', 'HVMF+C5 Wori, North Minahasa Regency, North Sulawesi, Indonesia'),
(182, 'Upacara Penutupan Pelatihan Penanggulangan Bencana Alam di LANAL Cilacap', 7, '4.006', '126.6747', 'Upacara Penutupan Pelatihan Penanggulangan Bencana Alam di LANAL Cilacap', 'photo.jpg', '2021-03-08', 'Bandar Udara Melonguane, Melonguane, Kepulauan Talaud, Kabupaten Kepulauan Talaud, Sulawesi Utara, Indonesia'),
(204, 'banjir rob ancol', 5, '-6.695978810998866', '106.43554687500001', 'asaasasa', '6c3d532a0fe6893d8bcebb329df7a2c8.png', '2021-12-06', 'jln ancol selatan, tanjung priuk');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bencana`
--

CREATE TABLE `jenis_bencana` (
  `id` int(11) NOT NULL,
  `jenis_bencana` varchar(255) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `color` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_bencana`
--

INSERT INTO `jenis_bencana` (`id`, `jenis_bencana`, `icon`, `color`) VALUES
(1, 'Banjir', 'wi-flood', 'danger'),
(2, 'Puting Beliung', 'wi-tornado', 'primary'),
(3, 'Gelombang Pasang', 'wi-sandstorm', 'info'),
(4, 'Tsunami', 'wi-tsunami', 'warning'),
(5, 'Letusan GunungApi', 'wi-volcano', 'success'),
(6, 'Tanah Longsor', 'wi-dust', 'dark'),
(7, 'Kebakaran', 'wi-fire', 'danger'),
(8, 'Karhutla', 'wi-fire', 'danger'),
(9, 'Gempa Bumi', 'wi-earthquake', 'success'),
(10, 'Kekeringan', 'wi-storm-warning', 'warning');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'sulkhi', 'sulkhi25@gmail.com', '52c2da67304398e17c26226a3f462df1'),
(2, 'Agus Maksum', 'agus@mail.com', 'a9f018d6b8f4d0ab61b6479dd9dc6fdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id`,`jenis_bencana_id`),
  ADD KEY `jenis_bencana_id` (`jenis_bencana_id`);

--
-- Indexes for table `jenis_bencana`
--
ALTER TABLE `jenis_bencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `jenis_bencana`
--
ALTER TABLE `jenis_bencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bencana`
--
ALTER TABLE `bencana`
  ADD CONSTRAINT `bencana_ibfk_1` FOREIGN KEY (`jenis_bencana_id`) REFERENCES `jenis_bencana` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
