-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2011 at 09:39 PM
-- Server version: 5.0.92
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `haveel_contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `haveel`
--

CREATE TABLE IF NOT EXISTS `haveel` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` text collate latin1_general_ci NOT NULL,
  `alamat` text collate latin1_general_ci NOT NULL,
  `perusahaan` text collate latin1_general_ci NOT NULL,
  `jabatan` text collate latin1_general_ci NOT NULL,
  `telepon` text collate latin1_general_ci NOT NULL,
  `hp` text collate latin1_general_ci NOT NULL,
  `fax` text collate latin1_general_ci NOT NULL,
  `email` text collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Created by phpFormGenerator' AUTO_INCREMENT=69 ;

--
-- Dumping data for table `haveel`
--

INSERT INTO `haveel` (`id`, `nama`, `alamat`, `perusahaan`, `jabatan`, `telepon`, `hp`, `fax`, `email`, `keterangan`) VALUES
(34, 'jack ruslim', 'tupai no 6', 'cv jafin multitama', 'direktur', '0411 5025858', '081524480234', '0411325884', 'ruslimjack@yahoo.com', 'km mau minta brosur dan ket tentang dimana bs mendptkan produk hpl di area mks thx'),
(32, 'abc', 'test', 'oke', 'test', '8888', '', '9999', 'sdisaf@haveel.com', 'afasfasdf'),
(25, 'Prima', 'Jl.Solo-Jogya KM.24 Klaten', 'PT.WISANKA', 'Desainer', '0272555614', '085647186365', '0272555615', 'www.desainer@indoor-teak.com', 'saya tertarik dengan produk anda..&nbsp;<br />Bisa tulung saya dikirimkan sample catakog beserta surat penawaran. Trim''s'),
(26, 'rusman tanto', 'mojopahit 50', 'haveel center', 'manager', '5683838', '081330797900', '5678051', 'rusmantanto@yahoo.com', 'testing'),
(27, 'Ruaniwati', 'Jemursari 166', 'Pelangi Grafika', 'sales', '031 8419966', '', '031 8483434', 'ruaniwati@yahoo.com', ''),
(29, 'choki soesilo', 'jl.kapt rivai palembang', 'horison hotel palembang', 'general manager', '0711-35 5000', '0815 957 3133', '0711-377 966', 'gm@horisonpalembang.com', 'Kami sdg mencari veneer untuk buffet restaurant yg akan diperbaiki.Mohon kirimkan list prouct dan harga,per ply nya.terima kasih.'),
(30, 'Ruaniwati', 'Jemursari 166', 'afvoe', 'sales', '031 8419966', '0987655443', '031 8483434', 'ruaniwati@yahoo.com', ''),
(33, 'Agung Pambudi', 'menara building Lt 3 Ruko Centra Cikarang Blok F1 - 8 Jl. Cikarang Cibarusah, Cikarang Bekasi 17550', 'D_pavilion', 'Designer Interior', '021 8911 7747', '085697971554', '021 8911 7747', 'budi_design@yahoo.com', 'bisa persentasi tentang produk ini secara detail dengan menyertakan contoh produk haveel ini.&nbsp;<br />thks'),
(35, 'jack ruslim', 'tupai no 6', 'cv jafin multitama', 'direktur', '0411 5025858', '081524480234', '0411325884', 'ruslimjack@yahoo.com', 'km mau minta brosur dan ket tentang dimana bs mendptkan produk hpl di area mks thx'),
(36, 'Jack Ruslim', 'TUPAI NO 6', 'CV JAFIN MULTITAMA', 'DIREKTUR', '0411 5020200', '0816278910', '0411 325884', 'ruslimjack@yahoo.com', 'Mau minta brosur dan agen/dealer dikota makassar atau surabaya trims'),
(37, 'a', 'a', 'a', 'a', 'a', '', '0', 'rusmantanto@yahoo.com', 'aa'),
(38, 'Maria Kristianamurti', 'Bumi Sempaja BG 52-56 Jl.PM Noor Samarinda', 'PT.Amandari Prakarsa Nimada', 'Arsitek', '+62 541 221253', '081545024654', '+62 541 221252', 'Kristianamurti@yahoo.com', 'Mohon informasi harga HPL '),
(39, 'Telly', 'Jl. Anggrek Rosliana VII No. 98-A, Slipi, Jakarta Barat', 'Indonesia Design Magazine', 'Business Relations', '+62 21 530 4866', '+62 856 88 6000 3', '+62 21 536 2115', 'telly_050882@yahoo.co.id', 'I would like to offering you to advertise in our architectural magazine.  Please kindly inform me you phone number to help me sending you the offering letter.  Thank you  for your attention.&nbsp;<br />&nbsp;<br />Regards,&nbsp;<br />Telly'),
(40, 'Yuli Fachrurrozi', 'Perum. Wika Blok D4 no.7(Perum.Tamansari Bukit Mutiara)  Balikpapan', 'CV.Arezi Rekadibumi', 'Arsitek', '0542-874701', '08125424649', '0542-874701', 'namakurozi@yahoo.com', 'Bisa minta contoh bahan atau brosur untuk hpl maupun edging? Terkait dengan adanya proyek kami dalam waktu dekat, karena perusahaan  kami juga bergerak dibidang interior. Terima kasih'),
(41, 'Agus Gunawan', 'Jaksel', 'Abadi Fitting Center', 'manager', '021-93215331', '081314655336', '4506068', 'agsgnw@yahoo.com', ''),
(42, 'Mohammad Rizal', 'Jl. Ir H Juanda No. 48', 'PT REKAMATRA', 'Arsitek', '022-4204136', '08179211231', '022-4205611', 'rizal_rl@yahoo.com', ''),
(43, 'Mohammad Rizal', 'Jl. Ir H Juanda No. 48', 'PT REKAMATRA', 'Arsitek', '022-4204136', '08179211231', '022-4205611', 'rizal_rl@yahoo.com', 'Service apa saja yang ditawarkan haveel ? Apakah hanya menjual produk saja atau bisa menerima order panel juga, misalnya pintu kabinet dapur yang lengkap (laminate & edging) terima kasih..'),
(44, 'Sagita Irawan', 'Jl. Kebo Iwa 39 Denpasar Bali', 'CV  IBAL DESIGNS', 'PPIC department', '0361-410397', '081338113175', '0361-432661', 'gedeqc@ibaldesigns.com', 'Mohon informasi mengenai spesifikasi bahan dan harga HPL '),
(45, 'Bob Purbobudoyo', 'Rukan Pejanten No. 3, jalan Pejaten Raya No. 2 jakarta Selatan 12510', 'PT. IDETAMA KRYA CARAKA', 'Senior Project Officer', '021-79195115', '', '021-79195610', 'Bob@idetama.com', 'karena kantor saya bergerak dlam bidang Interior Design oleh sebab itu Mohon dikirim kan price list HPL dan product sample ke kantor saya. terimakasih sebelumnya'),
(46, 'Davis', 'Jl. Beruang No. 45 B Bintaro', 'PT. TAP', 'Kepala Produksi', '021 734 3779', '021 702 902 39', '021 7343462', 'dave_emrd@yahoo.com', 'contoh, showrom, cr pemesanan dimana?'),
(47, 'Iskandar', 'Jl. Gading Elok Timur VI BO2 no.: 16, Kelapa gading, Jakarta-14240', 'Arsitek', 'Arsitek', '021-45842066', '021-68203176', '021-45842066', 'iskansu@gmail.com', 'Request for product sample'),
(48, 'a', 'a', 'a', 'a', '0', '0', '0', 'a@a.com', 'a'),
(49, 'Ahmad Supandi', 'Jl. Rawa Bambu Blok A No. 7D, Komp. Depkes - Pasar Minggu, Jakarta Selatan 12520', 'PT Talacipta Surya', 'Purchasing Staff', '021-7883 9667', '0817 607 1717', '021-7883 1925', 'talasury@cbn.net.id', 'Selamat siang,&nbsp;<br />Kami adalah Perusahaan Kontraktor & Interior Design yang sering menggunakan laminates untuk pembuatan furniture. Harap dikirimkan Katalog HPL & PVC Edging ke alamat tersebut diatas.&nbsp;<br />Atas perhatian & kerjasamanya saya ucapkan banyak terima kasih.'),
(50, 'hera wicaksono', 'jl. sudirman no. 76 RT 41 Balikpapan', 'pt. chakra jawara', 'Purchasing ', '0542-761762', '081346245084', '0542-761763', 'hera.wicaksono@chakrajawara.co.id', 'please submit your price/sheet and payment methode for ebony 9081'),
(51, 'andalas audi', 'e9 sungai saddang street', 'cv. aditama bangun mandiri', 'director', '0411 5051833', '08152568888', '0411325823', 'audiclub@indosat.net.id', 'sa lg cari model/type haveel buat interior yg sementara sa kerja. bisakah sa dpt contact person ? thx'),
(52, 'Roby Tandi', 'Ratulangi 137c', 'Bintang Timur', 'Direktur', '04115615222', '08124256222', '0411874072', 'rctandi@email.com', 'Kiranya kami dapat diberikan sample atau kartu warna dari produk Haveel, berikut daftar harga.'),
(53, 'tjwanbing', 'jl. supriyadi B-17', 'sumbersejati, toko', '-', '024 70407117', '0816 664958', '024 6714452', 'sumbersejati17@gmail.com', 'kita biasa ambil untuk di jual lagi dari distributor di jalan pati unus semarang.&nbsp;<br />pelayanan ok.'),
(54, 'Fauzan Hasan', 'Jl. Syiah Kuala, No.8, Banda Aceh', 'CV. Nusa Prima Kreasi', 'Pimpinan', '0651-7425151', '', '0651-31228', 'nusaprimakreasi@yahoo.co.id', 'perusahaan kami bergerak di bidang interior dan membutuhkan HPL untuk produk kami, di mana kami bisa mendapatkannya untuk daerah aceh (medan) dan apakah bisa kami memiliki katalog produk anda..trims'),
(55, 'iwan setiawan', 'JL. Raya Cukanggalih, Tgr', 'PT. Homeware', 'GM', '5984121 EXT 124', '08164819743', '5982455', 'homewaregroup@cbn.net.id', 'can you please advise the address in Jkt?'),
(56, 'ROY KAMDANI', 'JL GATOT SUBROTO IV', 'INSPIRED STUDIO', 'OWNER', '03617841156', '087861064448', '-', 'inspiredstudio@gmail.com', 'Mohon di email price list dan katalog HPL'),
(57, 'M. Irfan Nur Mukhtar', 'Jl. Khairil Anwar No. 1 Peunayong - Banda Aceh', 'Harmony Interior (CV. Harmony)', 'Pimpinan', '0651-22451', '081360695103', '0651-635420', 'nyai_devi75@yahoo.com', 'boleh nggak yaa.., kami dikirimkan sampelnya untuk lebih mengtahui HPL dan PVC edgingnya. Thanks'),
(58, 'ereck', 'jl pemuda-padang', 'plasa andalas', 'manager teknik', '0751-8255352', '08197501569', '0751-841338', 'ereck_3399@yahoo.com', 'butuh list harga'),
(59, 'arya aji p', 'jl kebagusan raya no.14A rt7/3', 'griya remiza pt', 'directoor', '0217872858', '02191269375', '0217869943', 'griya_remiza@yahoo.com', 'list harga dan contoh hpl'),
(60, 'Chandra', 'Sidempuan no.8', 'Cap', 'pimpinan', '06177157586 , 06177456987', '081375339787', '0614531627', 'Chandraarchitect@yahoo.com', 'Minta informasi perusahaan'),
(61, 'Rina Karmila Djangkaru', 'Jl. Cipinang Cempedak I No.38D - Otista Raya - Jakarta Timur', 'Gerde Interior', 'Interior Designer', '021-819 69 31', '0817-99 44 000', '021-819 69 31', 'rina_kdj@yahoo.com', 'mohon untuk dikirimkan sample dari haveel ke alamat kami di atas,thx.'),
(62, 'Wasista Wibisono, ST', 'Jl. Tengkawang Gg. Kelapa Gading 12 RT.15 Samarinda-Kaltim 75127', 'RAYA INTERIOR', 'Owner', '05417733441', '08115802191 - 081545954541', '0541765454', 'sonihelo@yahoo.co.id', 'minta diemailkan harga price listnya, tks'),
(63, 'haryadi sulistyo', 'bronggalan 19-23', 'starindo abadi', 'direksi', '5038153', '0811335878', '5030949', 'strandi.abadi@gmail.com', 'hanya hau absen saja'),
(64, 'haryadi sulistyo', 'bronggalan 19-23', 'starindo abadi', 'direksi', '5038153', '0811335878', '5030949', 'strandi.abadi@gmail.com', 'hanya hau absen saja'),
(65, 'Latief Oenny', 'Jl. T.Amir Hamzah No. 6/37 Medan', 'Anugerah Medan Pratama', 'Direktur', '061-6641078', '0899 270 2226', '061 6641178', 'medan_pratama@hotmail.com', 'Kami perlu tahu ukuran kayunya HPL dan gimana pemaangannya? Mohon informasi lebih jelas dan detil. '),
(66, 'Didik seno', 'Jl.Sapta pesona no.32 Mataram - Lombok - NTB', 'Empat Garis design', 'Director', '0370646688', '081803679069', '0370646688', 'empat_garis@yahoo.com', 'Dimana bisa membeli material HPL, di Jakarta ?'),
(67, 'ariyanto', 'Bussiness Park Jl. Meruya Ilir No. 88 Blok C1-15 Meruya Utara', 'PT. Shachia International Indonesia', 'Estimator', '021-70718669', '087877175856', '021-30061543', 'shachiainternational@gmail.com', ''),
(68, 'Rickyantara', 'Jl.Boulevard Raya RA 11 - 15 Kelapa Gading, Jakarta Utara ', 'Pribadi', 'Kontraktor Perorangan', '021-4525744', '08161382369', '021-4525744', 'rickyantara.ricky@gmail.com', 'Tolong kita dikirim brosur dan harganya beserta harga press');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
