-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Nov 2019 pada 09.03
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'marcom', 'Marketing Commucation'),
(3, 'members', 'Publish News'),
(7, 'finance', 'Finance'),
(8, 'keuangan', 'Keuangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hakakses`
--

CREATE TABLE `hakakses` (
  `id_menu` int(11) DEFAULT NULL,
  `id_menu_detail` int(11) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hakakses`
--

INSERT INTO `hakakses` (`id_menu`, `id_menu_detail`, `id_group`, `id_website`) VALUES
(1, 1, 1, 'mySite'),
(1, 2, 1, 'mySite'),
(4, 3, 1, 'mySite'),
(3, 4, 1, 'mySite'),
(2, 5, 1, 'mySite'),
(3, 20, 1, 'mySite'),
(4, 7, 1, 'mySite'),
(4, 8, 1, 'mySite'),
(5, 9, 1, 'mySite'),
(6, 10, 1, 'mySite'),
(6, 11, 1, 'mySite'),
(2, 12, 1, 'mySite'),
(7, 14, 1, 'mySite'),
(3, 18, 1, 'mySite'),
(1, 2, 2, 'mySite'),
(3, 19, 1, 'mySite'),
(1, 1, 2, 'mySite'),
(4, 3, 2, 'mySite'),
(7, 13, 1, 'mySite'),
(1, 1, 3, 'mySite'),
(2, 6, 1, 'mySite'),
(7, 21, 1, 'mySite'),
(5, 9, 7, 'mySite'),
(1, 1, 7, 'mySite'),
(5, 9, 2, 'mySite'),
(5, 9, 8, 'mySite'),
(0, 1, 1, NULL),
(0, 22, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_system`
--

CREATE TABLE `log_system` (
  `idlog` int(11) NOT NULL,
  `namatabel` varchar(225) DEFAULT NULL,
  `isian` longtext,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `log_system`
--

INSERT INTO `log_system` (`idlog`, `namatabel`, `isian`, `tanggal`) VALUES
(1, 'news_content', '160 || 8 || TEst Berita || 2017-05-23 || <p>sdgsdgsd<br></p> || test-berita || 1 || 4dbe37dadfcc6e77bdf170941fdf4753.jpg || 2017-05-23 05:00:32 ||  || 1 ||  || 1', '2017-05-23 05:05:58'),
(2, 'news_content', '156 || 4 || 27 Tahun SERA Arungi Gelombang Ekonomi Indonesia || 2017-03-31 || <p></p><p>Toyota dan Daihatsu adalah nama yang kerap kali disebut\r\ndi Indonesia ketika bicara mengenai jual-beli mobil. Kepercayaan masyarakat terhadap\r\nnama-nama tersebut tetap terlihat hingga kini, seperti ditunjukkan dalam data\r\nGabungan Industri Kendaraan Bermotor Indonesia (Gaikindo). Toyota dan Daihatsu dalam\r\ndata Januari-Februari 2017 masuk dalam jajaran sepuluh mobil terlaris di Tanah\r\nAir, dengan Avanza, Calya, Kijang Innova di tiga teratas, lalu Daihatsu Sigra dan\r\nAyla juga dalam daftar tersebut. </p>\r\n<p>Kepercayaan itu pula yang disuguhkan melalui kendaraan\r\nsewa PT Serasi Autoraya sejak tahun 1990 ketika nama tersebut dikukuhkan seusai\r\nberganti dari PT Sinar Inti Telaga sejak 1986. &nbsp;PT Serasi Autoraya, yang memperkenalkan “Toyota\r\nRent a Car”, kemudian pada tahun yang sama, bulan Oktober, berubah menjadi “TRAC-Astra\r\nRent a Car”.</p>\r\n<p>Tahun 1990-an sendiri bagi PT Serasi Autoraya dibayangi\r\nkondisi ekonomi global. Perang Teluk antara Irak dan Kuwait turut berpengaruh\r\npada harga-harga, khususnya minyak. Kondisi itu dilanjutkan dengan krisis\r\nekonomi di Indonesia tahun 1998 yang puncaknya pada 22 Januari 1998 menyebabkan\r\nrupiah melemah Rp 17.000 per dollar AS atau turun sangat jauh dari Rp 3.845 per\r\ndollar AS pada Oktober 1997, seperti dikutip dari harian Kompas, Selasa, 30\r\nJuni 1998.</p>\r\n<p>Namun, gelombang ekonomi di Indonesia yang terus bergulir\r\ntetap diarungi PT Serasi Autoraya. Bisnis sewa kendaraan terus berlanjut. Pada\r\n2001, PT Serasi Autoraya, dikutip dari&nbsp;\r\nKompas, Sabtu, 06 Oktober 2001, memiliki 5.500 mobil dan 1.500 pengemudi\r\ndengan sekitar 10.000 pelanggan. Pada tahun itu, PT Serasi Autoraya (SERA) memperoleh\r\npemasukan Rp 250 miliar.</p>\r\n<p>Tujuh tahun setelahnya, TMS atau Transportation\r\nManagement System dibentuk untuk mengoptimalkan solusi transportasi dari TRAC\r\nkepada pelanggan.</p>\r\n<p>Pemulihan ekonomi memungkinkan SERA pada 2003 melengkapi\r\nlayanannya dengan membuat unit Driver Services. Lalu pada 26 Agustus 2004,\r\nlahirlah TREMO TRAC-Motorental sebagai bagian dari solusi yang ditawarkan TRAC\r\nkepada pelanggan perusahaan untuk menyewa sepeda motor.</p>\r\n<p>Pasar taksi dan bus menjadi hal baru di keluarga SERA.\r\nPada 25 Oktober 2005, lahirlah TRACO-RENZ Taxi yang diluncurkan untuk wilayah Surabaya.\r\nLalu tujuh tahun kemudian, SERA merambah bisnis penyewaan bus yang pada 4 April\r\n2012 meluncurkan TRAC Bus Services.</p>\r\n<p>Bisnis SERA di bidang transportasi darat lantas\r\nberkembang ke arah penjualan mobil bekas yang memberikan jaminan. Pada 1 Mei\r\n2006, mobil88 yang beroperasi dalam penjualan mobil bekas bergabung dengan SERA.\r\nKelak, pada 21 Juni 2010,&nbsp; PT Serasi\r\nMitra Mobil berdiri sebagai entitas legal untuk mobil88. </p>\r\n<p>Perkembangan bisnis di sektor mobil bekas pun diperluas dengan\r\nmenghadirkan balai lelang.</p>\r\n\r\n<p>Sebuah balai lelang IBID berdiri pada 3 April 2007,&nbsp; dan menggelar lelang pertamanya pada 7\r\nAgustus di tahun itu. </p>\r\n<p><b>SERA bertahan dan\r\nberkembang</b></p>\r\n<p>Memasuki tahun 2008, ekonomi dunia sedang diguncang\r\nkarena kondisi di Amerika. Kerugian terlalu besar terjadi di negeri tersebut\r\nakibat surat berharga beragun aset kredit perumahan yang berisiko tinggi. </p>\r\n\r\n<p>Perusahaan keuangan raksasa Amerika Serikat terus\r\nberguguran, termasuk Lehman Brothers, yang menyatakan diri bangkrut, dan\r\nMerrill Lynch yang siap diakuisisi Bank of America, menurut catatan harian\r\nKompas, Selasa, 16 September 2008. </p>\r\n<p>Nilai tukar rupiah terhadap dollar AS kembali melemah\r\nmengingat Amerika adalah negara tujuan ekspor. Mereka pun menarik investasi\r\ndari negara-negara berkembang, termasuk Indonesia.</p>\r\n<p>“Kurs kenapa turun? Ini karena pemodal, <em>fund-fund</em>\r\n<em>manager\r\n</em>asing, uangnya ditarik ke negerinya,” ujar Jusuf Kalla, yang saat\r\nitu merupakan mantan Presiden RI periode 2004-2009, seperti dikutip dari <a href=\"http://nasional.kompas.com/read/2010/01/14/1128322/Kalla.Krisis.2008.Beda.dengan.Krisis.1997-1998\">Kompas.com</a></p>\r\n<p>Walau demikian, SERA tidak gentar. Tahun 2009 justru\r\nmenjadi tahun bagi SERA untuk masuk ke bidang logistik. Pada 2 Februari di\r\ntahun tersebut, Freight Forwarder Harmoni Mitra Utama bersama dengan United\r\nTractors merilis pengiriman pertamanya, dilanjutkan dengan berdirinya SELOG\r\npada 25 Februari 2009 sebagai merek dagang di lini bisnis jasa pengelolaan\r\nlogistik.</p>\r\n<p>Pada tahun yang sama juga, tepatnya pada 7 Desember, TRAC\r\nmeluncurkan perusahaan perkapalan dengan merek dagang Toyofuji Serasi Indonesia\r\n(TFSI) yang juga menjadi cikal bakal bisnis logistik SERA. </p>\r\n<p>Kemudian pada 2010, PT Serasi Shipping Indonesia resmi\r\ndiluncurkan untuk melengkapi portfolio SELOG, dan pada 2014, sebuah unit bisnis\r\ndi bidang <i>trucking</i> berdiri sebagai\r\nbagian dari SERA Logistics Services.</p>\r\n<p>Setahun setelahnya, 29 Oktober 2015, SERA menandatangani\r\nperjanjian pembelian 34,91 persen saham PT Intertel Nusaperdana di PT Toyofuji\r\nSerasi Logistics Indonesia.</p>\r\n<p>Era digital pun tidak luput menjadi bagian SERA. Pada usianya yang ke-27 tahun ini, bukan hanya\r\nmenawarkan situs layanan, SERA juga melakukan perbaikan dan perubahan proses dari\r\nyang sebelumnya banyak dilakukan secara manual, menjadi serba otomatis sehingga\r\nmenyederhanakan proses kerja dan efisiensi waktu.</p>\r\n\r\n<p>SERA juga melakukan <span>penyesuaian produk dan layanan sesuai era digital saat ini untuk\r\nmempermudah pelanggan dalam mendapatkan juga merasakan produk ataupun layanan\r\nyang ditawarkan. Untuk itulah, pada perayaan ke-27 tahun ini, SERA menggenggam\r\ntema <i>“A Journey to Digital Transformation”.</i></span></p><br><p></p> || 27-tahun-sera-arungi-gelombang-ekonomi-indonesia || 1 || c72d933e04b879bb388b8b53b56cf611.jpg || 2017-03-31 06:15:30 || 2017-04-06 08:08:47 || 1 || 1 || 1', '2017-05-23 05:06:08'),
(3, 'news_content', '121 || 4 || Peresmian Kantor Cabang mobil88 Depok || 2017-03-20 || <p><p>Salah satu anak usaha SERA di lini\r\nbisnis penjualan kendaraan bekas, mobil88 meresmikan cabang baru pertama di\r\ntahun 2017. mobil88 perluas jangkauan pelayanan di wilayah Depok, Rabu, 8 Maret\r\n2017, kantor cabang yang berlokasi di Jalan Margonda Raya nomor 121, telah di\r\nresmikan beroperasional.</p>\r\n\r\n<p>Seremonial\r\nperesmian kantor yang berlangsung sederhana di resmikan oleh Presiden Direktur\r\nSERA</p>\r\n\r\n<p>Yosafat\r\nSiregar, Chief Operating Officer mobil88, Fischer Lumbantoruan dan dihadiri\r\njuga oleh jajaran manajemen SERA serta perwakilan manajemen mobil88.</p>\r\n\r\n<p>Depok\r\nmerupakan wilayah <i>sub urban</i> yang\r\nperkembangannya sangat pesat. Dan juga telah menjadi salah satu pilihan\r\nmasyarakat untuk tempat hunian, dimana sebagian besar masyarakatnya berkerja\r\ndan beraktivitas di Jakarta, yang tentunya memiliki kebutuhan yang tinggi akan\r\nalat transportasi. Oleh karena itu, mobil88 optimis kota Depok merupakan pasar\r\nyang potensial untuk digarap.</p><br></p> || peresmian-kantor-cabang-mobil88-depok || 1 || 3ce0984a96ea109019ddeba19886ccac.jpg || 2017-03-20 02:08:55 || 2017-03-21 06:22:06 || 1 || 1 || 1', '2017-05-23 05:14:24'),
(4, 'news_content', '116 || 9 || TRAC-Astra Rent a Car || 2017-03-17 || <p>TRAC-Astra Rent a Car<br></p> || trac-astra-rent-a-car || 1 || 27021497668ed71fadcbb566e6d30b19.jpg || 2017-03-17 07:52:01 ||  || 1 ||  || 1', '2017-05-23 05:14:29'),
(5, 'news_content', '155 || 5 || Peran Logistik dan Tol Laut di Balik BBM Murah Papua || 2017-03-27 || <p><p>Alat transportasi punya\r\nfungsi yang sangat vital terutama jika dikaitkan dengan fungsinya dalam\r\nmengantarkan kebutuhan di kawasan yang jauh dari sentral. Fungsi ini\r\ntergambarkan pada bagaimana harga bahan bakar minyak (BBM) kendaraan bermotor\r\nyang tercatat di Papua.</p>\r\n<p>Di wilayah ujung timur di\r\nIndonesia itu, seperti dikutip dari <a href=\"http://regional.kompas.com/read/2017/02/24/16211291/cerita.jokowi.mengenai.harga.bbm.di.papua.dari.rp.60.000.jadi.rp.6.450\">Kompas.com</a>,\r\nharga BBM di sejumlah kabupaten terpencil berubah drastis dari semula Rp\r\n60.000-Rp 100.000 menjadi sama dengan Pulau Jawa, yakni Rp 6.450 per liter.</p>\r\n<p>Salah satu cara pemerintah\r\nmenurunkan harga BBM di Papua adalah dengan memanfaatkan pesawat angkut BBM\r\nyang dibeli oleh Pertamina dengan biaya sekitar Rp 800 miliar. Melalui cara\r\nitu, BBM yang selama ini disalurkan lewat jalur darat dan laut bisa disalurkan\r\nmelalui udara.</p>\r\n<p>Biaya pembelian pesawat Rp\r\n800 miliar saja menurut Presiden Jokowi dipastikan tidak membuat Pertamina\r\nrugi. </p>\r\n<p>\"Tahun ini justru\r\nsaya perkiraan untungnya berlipat, lebih dari Rp 40 triliun,\" ucap Jokowi\r\ndi Jakarta, seperti dikutip dari <a href=\"http://nasional.kompas.com/read/2016/12/21/22580091/jokowi.banyak.yang.tidak.senang.bensin.di.papua.murah\">Kompas.com</a>,\r\nRabu (21/12/2016).</p>\r\n<p>Melihat kondisi di atas,\r\nbiaya transportasi logistik tentu bisa lebih ditekan jika tol laut kelak\r\nterwujud pada 2019, mengingat kapal laut dan alat transportasi darat bersifat\r\nsebagai alat transportasi dengan daya angkut massal.</p>\r\n<p><b>Apa Itu Tol Laut? </b></p>\r\n<p>Tol laut adalah jalur\r\nkapal-kapal besar akan berlayar menghubungkan pelabuhan-pelabuhan utama\r\nIndonesia. Kapal-kapal ini berlayar secara rutin dengan rute masing-masing,\r\nyang terjajar dari Sumatera hingga Papua, lalu kembali. </p>\r\n<p>Pergerakan kapal yang\r\nbersifat rutin dan titik-titik pelabuhan yang sudah ditentukan itulah yang akan\r\nmembuat transportasi logistik ibarat menggunakan jalan tol.</p>\r\n<p>Kapal pun tidak kembali\r\ndengan kosong usai mengantar. Menteri Perhubungan Budi Karya Sumadi mengatakan\r\nakan mendorong pelaku usaha pertanian di daerah Timur Indonesia untuk\r\nmeningkatkan produktivitasnya. </p>\r\n<p>\"Kami juga akan\r\nmendobrak pelaku usaha pertanian dari wilayah timur untuk menghasilkan barang\r\nproduktif yang bisa dibawa ke barat,\" ujar Budi Karya seperti dikutip dari\r\nKompas.com di Kempinski Ballroom Hotel Indonesia, Jakarta, Rabu (9/11/2016).</p>\r\n<p>Menurut <a href=\"http://dephub.go.id/berita/baca/pembangunan-tol-laut-libatkan-24-pelabuhan/?cat=QmVyaXRhfA==\">Kementerian\r\nPerhubungan</a>, akan ada 24 pelabuhan yang terlibat dalam proyek tol laut. Lima\r\npelabuhan di antaranya akan menjadi hub (pengumpul), yaitu Pelabuhan\r\nBelawan/Kuala Tanjung, Pelabuhan Tanjung Priok/Kalibaru, Pelabuhan Tanjung\r\nPerak, Pelabuhan Makassar, dan Pelabuhan Bitung.</p>\r\n<p>Sementara itu, 19\r\npelabuhan lainnya berfungsi sebagai feeder (pengumpan) bagi pelabuhan hub\r\nadalah Pelabuhan Malahayati, Batam, Jambi (Talang Duku), Palembang, Panjang,\r\nTeluk Bayur, Tanjung Emas, Pontianak, Banjarmasin, Sampit, Balikpapan/Kanangau,\r\nSamarinda/Palaran, Tanau/Kupang, Pantoloan, Ternate, Kendari, Sorong, Ambon,\r\ndan Jayapura. </p>\r\n<p>Kapal yang digunakan\r\nsendiri terbagi dalam tiga kategori. Kategori pertama adalah kapal berbobot\r\nmati 15.000-40.000 deadweight tonnage (DWT). Kapal pengangkut kontainer itu pun\r\nberkapasitas angkut 1.000-3.000 twenty foot equivalent unit (TEUs). </p>\r\n<p>Kategori kedua adalah\r\nkapal barang perintis setara 208 TEUs. Sementara itu, kategori ketiga adalah\r\nkapal pelayaran rakyat.</p>\r\n<p>Soal jumlah kapal, pada periode\r\n2015-2019, kapal kategori 1.000 TEUs diharapkan terwujud sebanyak 46 unit,\r\nkategori 3.000 TEUs (37 unit), dan kategori kapal barang perintis (26 unit).\r\nSelain itu, akan ada pula 500 kapal pelayaran rakyat hingga 2019.</p>\r\nDengan adanya langkah ini,\r\ntransportasi logistik terutama untuk jalur laut tentu diharapkan tidak hanya\r\nmembuat harga BBM di Papua menjadi setara Pulau Jawa, tetapi juga memengaruhi\r\nharga kebutuhan-kebutuhan lainnya di daerah-daerah.<br></p> || peran-logistik-dan-tol-laut-di-balik-bbm-murah-papua || 1 || e07b4aabb71f80d06e3071028b606666.jpg || 2017-03-27 03:38:57 ||  || 1 ||  || 1', '2017-05-23 05:14:33'),
(6, 'news_content', '169 || 20 || Judul Berita 1 ID || 2017-08-18 || <p>begitu berita yang akan ditampilkan</p><p><p><img style=\"\" src=\"../../../../seraweb/uploads/news/contentdb7cd6c58793dd5c9dd57555c8d07270.jpg\"></p>ini gambarnya<br></p> || judul-berita-1-id || 1 || 32a0ae60faec04ed31ddcc8bf53e34de.jpg || 2017-08-18 04:16:55 ||  || 1 ||  || 1', '2017-12-04 06:23:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_category`
--

CREATE TABLE `master_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `slugkategori` varchar(255) DEFAULT NULL,
  `relasi` int(11) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_category`
--

INSERT INTO `master_category` (`category_id`, `category_name`, `status`, `create_user`, `update_user`, `create_date`, `update_date`, `language_id`, `slugkategori`, `relasi`, `id_website`) VALUES
(20, 'News', 1, 1, NULL, '2017-07-28 07:06:41', NULL, 1, 'news', 0, NULL),
(21, 'Esdm', 1, 1, NULL, '2017-07-28 07:09:01', NULL, 1, 'esdm', 20, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_language`
--

CREATE TABLE `master_language` (
  `language_id` int(11) NOT NULL,
  `language_name` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_language`
--

INSERT INTO `master_language` (`language_id`, `language_name`, `status`, `create_user`, `update_user`, `create_date`, `update_date`) VALUES
(1, 'ID', 1, NULL, NULL, NULL, NULL),
(2, 'EN', 1, NULL, NULL, NULL, NULL),
(3, 'FR', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_menu_admin`
--

CREATE TABLE `master_menu_admin` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) DEFAULT NULL,
  `iconmenu` varchar(20) DEFAULT NULL,
  `posisi` int(11) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_menu_admin`
--

INSERT INTO `master_menu_admin` (`id_menu`, `nama_menu`, `iconmenu`, `posisi`, `id_website`) VALUES
(0, 'News', 'ti-pencil-alt', NULL, NULL),
(2, 'User Management', 'ti-user', 5, 'mySite'),
(4, 'Menu', 'ti-layers-alt', 2, 'mySite'),
(13, 'Sitemap', NULL, 7, 'mySite');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_menu_detail_admin`
--

CREATE TABLE `master_menu_detail_admin` (
  `id_menu_detail` int(11) NOT NULL,
  `nama_menu_detail` varchar(100) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `link_menu_detail` varchar(255) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_menu_detail_admin`
--

INSERT INTO `master_menu_detail_admin` (`id_menu_detail`, `nama_menu_detail`, `id_menu`, `link_menu_detail`, `active`, `id_website`) VALUES
(1, 'Post', 1, 'back/news', NULL, 'mySite'),
(2, 'Category', 1, 'back/category', NULL, 'mySite'),
(3, 'Menu Editor', 4, 'back/menu', NULL, 'mySite'),
(4, 'Google Analitycs', 3, 'back/setting/ga', NULL, 'mySite'),
(5, 'Users', 2, 'back/auth', NULL, 'mySite'),
(6, 'Groups', 2, 'back/auth/groups', NULL, 'mySite'),
(7, 'Submenu Editor', 4, 'back/menu_detail', NULL, 'mySite'),
(8, 'Content Editor', 4, 'back/menu_content', NULL, 'mySite'),
(9, 'Investor Report', 5, 'back/investor', NULL, 'mySite'),
(10, 'Menu Admin', 6, 'back/menu_admin', NULL, 'mySite'),
(11, 'Detail Menu Admin', 6, 'back/menu_detail_admin', NULL, 'mySite'),
(12, 'User Privileges', 2, 'back/hak_akses', '', 'mySite'),
(13, 'Grup Kantor', 7, 'back/kantor/grup', NULL, 'mySite'),
(14, 'Setting Kantor', 7, 'back/kantor', NULL, 'mySite'),
(18, 'Logo Website', 3, 'back/menu_content/edit/22', NULL, 'mySite'),
(19, 'Logo 1 Indonesia', 3, 'back/menu_content/edit/23', NULL, 'mySite'),
(20, 'Setting Sosmed', 3, 'back/setting/sosmed', NULL, 'mySite'),
(21, 'Contact Form', 7, 'back/kantor/contact_form', NULL, 'mySite'),
(22, 'Category', 0, 'back/category', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(30) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `position`, `status`, `create_user`, `update_user`, `create_date`, `update_date`, `language_id`, `id_website`) VALUES
(1, 'Beranda', 1, 1, 1, NULL, '2019-11-17 00:18:51', NULL, 1, NULL),
(1, 'Home', 1, 1, 1, NULL, '2019-11-17 00:18:51', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_content`
--

CREATE TABLE `menu_content` (
  `content_id` int(11) NOT NULL,
  `menu_detail_id` int(11) DEFAULT NULL,
  `content` longtext,
  `photo` varchar(225) DEFAULT NULL,
  `photo_litle` varchar(225) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` longtext,
  `slug` varchar(225) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `url_video` varchar(200) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_content`
--

INSERT INTO `menu_content` (`content_id`, `menu_detail_id`, `content`, `photo`, `photo_litle`, `title`, `subtitle`, `slug`, `position`, `status`, `create_user`, `update_user`, `create_date`, `update_date`, `language_id`, `url_video`, `id_website`) VALUES
(1, 1, '<p>Kantor Pengacara Jakarta (KPJ) hadir untuk membantu Anda menemukan SOLUSI masalah Hukum Keluarga.</p>\r\n', '1573925131_sTCAPj0tgx.jpg', NULL, 'Kami Pengacara Jakarta', '', 'kami-pengacara-jakarta', 101, 1, 1, 1, '2019-11-17 00:25:31', '2019-11-17 00:26:07', 1, '', NULL),
(1, 1, '<p>Kantor Pengacara Jakarta (KPJ) present to help you to find solutions about Family&#39;s Law.</p>\r\n', '1573925131_sTCAPj0tgx.jpg', NULL, 'We are Jakarta\'s Lawyer', '', 'we-are-jakarta-s-lawyer', 101, 1, 1, 1, '2019-11-17 00:25:31', '2019-11-17 00:26:07', 2, '', NULL),
(2, 1, '<p>Kantor Pengacara Jakarta (KPJ) hadir untuk membantu Anda menemukan SOLUSI masalah Hukum Keluarga.</p>\r\n', '1574245353_EFpra7Unfo.jpg', NULL, 'Kami Pengacara Jakarta Slide2', '', 'kami-pengacara-jakarta-slide2', 102, 1, 1, NULL, '2019-11-20 17:22:33', NULL, 1, '', NULL),
(2, 1, '<p>Kantor Pengacara Jakarta (KPJ) present to help you to find solutions about Family&#39;s Law.</p>\r\n', '1574245353_EFpra7Unfo.jpg', NULL, 'e are Jakarta\'s Lawyer Slide 2', '', 'e-are-jakarta-s-lawyer-slide-2', 102, 1, 1, NULL, '2019-11-20 17:22:33', NULL, 2, '', NULL),
(3, 1, '<p>disini tulisan hak asuh anak</p>\r\n', '1574247465_naq68YvzU2.png', NULL, 'Hukum Hak Asuh Anak', '', 'hukum-hak-asuh-anak', 201, 1, 1, NULL, '2019-11-20 17:57:45', NULL, 1, '', NULL),
(3, 1, '<p>disini untuk yang english</p>\r\n', '1574247465_naq68YvzU2.png', NULL, 'Law of Child Custody', '', 'law-of-child-custody', 201, 1, 1, NULL, '2019-11-20 17:57:45', NULL, 2, '', NULL),
(4, 1, '<p>disini tulisan hukum harta bersama</p>\r\n', '1574249866_rRpStQy6aF.jpg', NULL, 'Hukum Harta Bersama', '', 'hukum-harta-bersama', 202, 1, 1, NULL, '2019-11-20 18:37:46', NULL, 1, '', NULL),
(4, 1, '<p>disini tulisan hukum harta bersama</p>\r\n', '1574249866_rRpStQy6aF.jpg', NULL, 'Hukum Harta Bersama EN', '', 'hukum-harta-bersama-en', 202, 1, 1, NULL, '2019-11-20 18:37:46', NULL, 2, '', NULL),
(5, 1, '<p>komentar customer pertama</p>\r\n', '1574253521_R4hIGZoi6K.jpg', NULL, 'Pelanggan 1', '', 'pelanggan-1', 501, 1, 1, NULL, '2019-11-20 19:38:41', NULL, 1, '', NULL),
(5, 1, '<p>first customer&#39;s comment</p>\r\n', '1574253521_R4hIGZoi6K.jpg', NULL, 'Customer 1', '', 'customer-1', 501, 1, 1, NULL, '2019-11-20 19:38:41', NULL, 2, '', NULL),
(6, 1, '<p>disini tentang blog</p>\r\n', NULL, NULL, 'Blog Posts', '', 'blog-posts', 600, 1, 1, NULL, '2019-11-20 19:42:54', NULL, 1, '', NULL),
(6, 1, '<p>here about our blog</p>\r\n', NULL, NULL, 'Blog Posts', '', 'blog-posts', 600, 1, 1, NULL, '2019-11-20 19:42:54', NULL, 2, '', NULL),
(7, 1, '<p>Prakata keuntungan</p>\r\n', NULL, NULL, 'Keuntungan Bersama Kami', '', 'blog-posts', 300, 1, 1, 1, '2019-11-20 19:42:54', '2019-11-20 20:04:50', 1, '', NULL),
(7, 1, '<p>abstaksi keuntungan</p>\r\n', NULL, NULL, 'Benefit with us', '', 'blog-posts', 300, 1, 1, 1, '2019-11-20 19:42:54', '2019-11-20 20:04:50', 2, '', NULL),
(8, 1, '<p>kata-kata awal tentang ramah</p>\r\n', NULL, NULL, 'Ramah', 'ion-leaf', 'ramah', 301, 1, 1, NULL, '2019-11-20 20:07:19', NULL, 1, '', NULL),
(8, 1, '<p>kata-kata awal tentang ramah</p>\r\n', NULL, NULL, 'Friendly', 'ion-leaf', 'friendly', 301, 1, 1, NULL, '2019-11-20 20:07:19', NULL, 2, '', NULL),
(9, 1, '<p>kata-kata rahasia terjaga</p>\r\n', NULL, NULL, 'Rahasia Terjaga', 'ion-alert-circled', 'rahasia-terjaga', 302, 1, 1, NULL, '2019-11-20 20:08:08', NULL, 1, '', NULL),
(9, 1, '<p>kata-kata rahasia terjaga</p>\r\n', NULL, NULL, 'Rahasia Terjaga', 'ion-alert-circled', 'rahasia-terjaga', 302, 1, 1, NULL, '2019-11-20 20:08:08', NULL, 2, '', NULL),
(10, 1, '<p>kata-kata solusi terbaik</p>\r\n', NULL, NULL, 'Solusi Terbaik', 'ion-android-bulb', 'solusi-terbaik', 303, 1, 1, NULL, '2019-11-20 20:09:03', NULL, 1, '', NULL),
(10, 1, '<p>kata-kata solusi terbaik</p>\r\n', NULL, NULL, 'Best Solution', 'ion-android-bulb', 'best-solution', 303, 1, 1, NULL, '2019-11-20 20:09:03', NULL, 2, '', NULL),
(11, 1, '<p>Misi kami adalah menyediakan solusi terbaik untuk dapat membantu semua orang. Jika Anda ingin menemukan solusi masalah Anda, segera menghubungi di Nomor 0816 1920 335 (telpon atau whatsapp) atau mengunjungi kantor kami yang beralamatkan sesuai informasi di bawah ini. Semoga hari Anda menyenangkan! Anda dapat menemukan solusi</p>\r\n', '1574256569_zg6qbpoK9J.jpg', NULL, 'Konsultasi Gratis', '', 'konsultasi-gratis', 400, 1, 1, NULL, '2019-11-20 20:29:29', NULL, 1, '', NULL),
(11, 1, '<p>Misi kami adalah menyediakan solusi terbaik untuk dapat membantu semua orang. Jika Anda ingin menemukan solusi masalah Anda, segera menghubungi di Nomor 0816 1920 335 (telpon atau whatsapp) atau mengunjungi kantor kami yang beralamatkan sesuai informasi di bawah ini. Semoga hari Anda menyenangkan! Anda dapat menemukan solusi</p>\r\n', '1574256569_zg6qbpoK9J.jpg', NULL, 'Free Consultation', '', 'free-consultation', 400, 1, 1, NULL, '2019-11-20 20:29:29', NULL, 2, '', NULL),
(12, 1, '<p>disini tulisan hukum perceraian</p>\r\n', '1574301379_mQyzO5etBc.png', NULL, 'Hukum Perceraian', '', 'hukum-perceraian', 203, 1, 1, NULL, '2019-11-21 08:56:19', NULL, 1, '', NULL),
(12, 1, '<p>disini tulisan hukum perceraian</p>\r\n', '1574301379_mQyzO5etBc.png', NULL, 'Divorce Law', '', 'divorce-law', 203, 1, 1, NULL, '2019-11-21 08:56:19', NULL, 2, '', NULL),
(13, 1, '<p>disini tulisan hukum waris</p>\r\n', '1574301423_AxsRvDg28N.png', NULL, 'Hukum Warisan', '', 'hukum-warisan', 204, 1, 1, NULL, '2019-11-21 08:57:03', NULL, 1, '', NULL),
(13, 1, '<p>disini tulisan hukum warisan</p>\r\n', '1574301423_AxsRvDg28N.png', NULL, 'Hukum Warisan', '', 'hukum-warisan', 204, 1, 1, NULL, '2019-11-21 08:57:03', NULL, 2, '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_detail`
--

CREATE TABLE `menu_detail` (
  `menu_detail_id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `menu_detail_name` varchar(100) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_detail`
--

INSERT INTO `menu_detail` (`menu_detail_id`, `menu_id`, `menu_detail_name`, `title`, `slug`, `position`, `status`, `create_user`, `update_user`, `create_date`, `update_date`, `language_id`, `id_website`) VALUES
(1, 1, 'Beranda Konten', 'Beranda', '/', 1, 1, 1, 1, '2019-11-17 00:19:27', '2019-11-20 18:38:23', 1, NULL),
(1, 1, 'Home Content', 'Beranda', '/', 1, 1, 1, 1, '2019-11-17 00:19:27', '2019-11-20 18:38:23', 2, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_content`
--

CREATE TABLE `news_content` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `datepost` date DEFAULT NULL,
  `content` longtext,
  `slug` varchar(225) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `gambar` varchar(225) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL COMMENT 'untuk upload gambar',
  `update_date` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `id_bu` int(11) DEFAULT NULL,
  `tagberita` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news_content`
--

INSERT INTO `news_content` (`id`, `category_id`, `title`, `datepost`, `content`, `slug`, `status`, `gambar`, `create_date`, `update_date`, `create_user`, `update_user`, `language_id`, `id_bu`, `tagberita`, `parent_id`, `id_website`) VALUES
(166, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '2017-07-28', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-sed-do-eiusmods', 1, 'a67c1e366e420d4dcd7f1aebef597f0e.jpg', '2017-07-28 07:08:05', '2017-07-28 07:12:31', 1, 1, 1, NULL, 'esdm , minyak , indonesia', 21, NULL),
(166, 20, '0', '2017-07-28', '0', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-sed-do-eiusmods', 1, 'a67c1e366e420d4dcd7f1aebef597f0e.jpg', '2017-07-28 07:08:05', '2017-07-28 07:12:31', 1, 1, 2, NULL, 'esdm , minyak , indonesia', 21, NULL),
(168, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '2017-07-28', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-sed-do-eiusmod', 1, 'b1505db95c1a0aeceaef15ebb429cecc.jpg', '2017-07-28 07:13:04', NULL, 1, NULL, 1, NULL, 'esdm , minyak , indonesia , migas', 21, NULL),
(168, 20, '0', '2017-07-28', '0', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-sed-do-eiusmod', 1, 'b1505db95c1a0aeceaef15ebb429cecc.jpg', '2017-07-28 07:13:04', NULL, 1, NULL, 2, NULL, 'esdm , minyak , indonesia , migas', 21, NULL),
(170, 20, 'Gempa Lombok Tidak Menyebabkan Peningkatan Aktivitas Gunung Rinjani', '2017-12-04', '<p><p></p><div><div><div><div><div>JAKARTA - Gempa 6,4 Skala Richter (SR) yang mengguncang Lombok dan sekitar pada hari Minggu (29/7) lalu dilaporkan Tim Tanggap Darurat (TTD) Pusat Vulkanologi Dan Mitigasi Bencana Geologi (PVMBG), Badan Geologi Kementerian Energi Dan Sumber Daya Mineral (ESDM) tidak menyebabkan peningkatan aktivitas Gunung Rinjani. Pasokan listrik dan bahan bakar minyak (BBM) tidak mengalami gangguan. Di smaping itu, kebutuhan air bersih para pengungsi saat ini disuplai melalui tangki air.&nbsp;<br><br>\"Dari hasil pemantaun di Pos PGA di Sembalun, belum ada peningkatan aktivitas vulkanik Gunung Rinjani akibat gempa Lombok. Namun terjadi kerusakan di bangunan Pos Pengamatan Gunung Api Rinjani. Paska terjadinya gempa utama 6.4 SR pada hari Minggu 29 Juli 2018, sampai saat ini telah diikuti sedikitnya 303 gempa susulan dengan magnitude yang semakin mengecil. Jumlah korban jiwa 17 meninggal,\" demikian dilaporkan Kepala PVMBG, Kasbani dari Lombok.<br><br>Sebagaimana diberitakan sebelumnya, paska terjadinya gempa bumi yang mengguncang Lombok dan sekitarnya, Kementerian ESDM segera mengirimkan tim tanggap darurat untuk melakukan koordinasi dengan Badan Nasional Penaggulangan Bencana (BNPB), Badan Penanggulangan Bencana Daerah (BPBD) serta Pemerintah Daerah setempat. Tim juga melakukan penyelidikan kerusakan geologi akibat gempa di beberapa tempat.&nbsp;<br><br>Tim tanggap darurat yang diterjunkan terdiri dari ahli-ahli gempa bumi dari PVMBG, Badan Geologi dan dipimpin secara langsung Kepala PVMBG. Untuk melengkapi tim yang sudah ada, hari ini, Selasa (31/7) akan bergabung tim tanggap darurat gerakan tanah untuk melakukan penyelidikan gerakan tanah di jalur pendakian.<br><br>\"Posko utama Tim TTD berada di Desa Madayin, Kecamatan Sambalia, Lombok Timur. Selain melakukan penyelidikan akibat gempa, Tim PVMBG Badan Geologi juga akan melanjutkan pemetaan kerusakan geologi dan pengukuran mikrotremor serta sosialisasi mitigasi bencana kepada masyarakat dan instansi terkait,\" jelas Kasbani.<br><br>Menurut Kasbani, berdasarkan Peta Kawasan Rawan Bencana (KRB) Gempa bumi yang diterbitkan oleh PVMBG-Badan Geologi, daerah Lombok Utara dan Lombok Timur termasuk KRB Gempa bumi Menengah, dengan potensi terjadi gempa bumi dengan intensitas MMI VII-VIII yang berpotensi menimbulkan kerusakan.<br><br><i>Penulis : Safii</i><p></p></div></div><p></p><div><br></div></div></div></div></p>', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-magna-aliqua-ut-enim-ad-minim-veniam', 1, '5d280c37bfe74ee88c4b42e1c926aaed.jpg', '2017-12-04 06:24:40', '2018-07-31 07:31:37', 1, 1, 1, NULL, 'esdm', 21, NULL),
(170, 20, '0', '2017-12-04', '0', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-magna-aliqua-ut-enim-ad-minim-veniam', 1, '5d280c37bfe74ee88c4b42e1c926aaed.jpg', '2017-12-04 06:24:40', '2018-07-31 07:31:37', 1, 1, 2, NULL, 'esdm', 21, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `idberita` int(11) DEFAULT NULL COMMENT 'untuk increment id berita',
  `idkat` int(11) DEFAULT NULL,
  `ga` longtext,
  `sosmed_in` varchar(255) DEFAULT NULL,
  `sosmed_fb` varchar(255) DEFAULT NULL,
  `sosmed_twitter` varchar(255) DEFAULT NULL,
  `sosmed_google` varchar(255) DEFAULT NULL,
  `id_website` varchar(50) DEFAULT NULL,
  `namaweb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`idberita`, `idkat`, `ga`, `sosmed_in`, `sosmed_fb`, `sosmed_twitter`, `sosmed_google`, `id_website`, `namaweb`) VALUES
(172, 21, ' /*\r\n\r\n*/', '0', '0', '0', '0', 'mySite', 'SERA Web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) NOT NULL,
  `last_login` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$1.tcq1uphz8X8ayrZVYki.JjfGnpapM0a1N4dY42sFfjWQ3jW3RiO', '', 'admin@admin.com', '', NULL, NULL, '/ovXmfmQRfX9DQOyyYICh.', 1487341480, 1574301296, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(1004, 2, 2),
(1006, 1003, 3),
(2008, 2003, 1),
(2011, 2004, 8);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_category`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_category` (
`category_id` int(11)
,`category_name` varchar(100)
,`relasi` varchar(100)
,`status` int(11)
,`create_user` int(11)
,`update_user` int(11)
,`create_date` datetime
,`update_date` datetime
,`language_id` int(11)
,`namadepan1` varchar(50)
,`namabelakang1` varchar(50)
,`namadepan2` varchar(50)
,`namabelakang2` varchar(50)
,`id_website` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_hakakses_detail`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_hakakses_detail` (
`id_menu` int(11)
,`id_menu_detail` int(11)
,`id_group` int(11)
,`name` varchar(20)
,`description` varchar(100)
,`nama_menu` varchar(100)
,`nama_menu_detail` varchar(100)
,`link_menu_detail` varchar(255)
,`active` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_hakakses_grup`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_hakakses_grup` (
`id_group` int(11)
,`hitung` bigint(21)
,`name` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_menu` (
`menu_id` int(11)
,`menuName` varchar(30)
,`position` int(11)
,`status` int(11)
,`create_date` datetime
,`update_date` datetime
,`namadepan1` varchar(50)
,`namabelakang1` varchar(50)
,`namadepan2` varchar(50)
,`namabelakang2` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu_content`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_menu_content` (
`content_id` int(11)
,`menu_detail_id` int(11)
,`content` longtext
,`photo` varchar(225)
,`photo_litle` varchar(225)
,`title` varchar(100)
,`subtitle` longtext
,`slug` varchar(225)
,`position` int(11)
,`status` int(11)
,`create_user` int(11)
,`update_user` int(11)
,`create_date` datetime
,`update_date` datetime
,`language_id` int(11)
,`url_video` varchar(200)
,`id_website` varchar(50)
,`menuDetailName` varchar(100)
,`menuName` varchar(30)
,`namadepan1` varchar(50)
,`namabelakang1` varchar(50)
,`namadepan2` varchar(50)
,`namabelakang2` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu_detail`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_menu_detail` (
`menu_detail_id` int(11)
,`menu_id` int(11)
,`menu_detail_name` varchar(100)
,`title` varchar(225)
,`slug` varchar(225)
,`position` int(11)
,`status` int(11)
,`create_user` int(11)
,`update_user` int(11)
,`create_date` datetime
,`update_date` datetime
,`language_id` int(11)
,`id_website` varchar(50)
,`menuDetailName` varchar(100)
,`menuName` varchar(30)
,`namadepan1` varchar(50)
,`namabelakang1` varchar(50)
,`namadepan2` varchar(50)
,`namabelakang2` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu_detail_admin`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_menu_detail_admin` (
`id_menu_detail` int(11)
,`nama_menu` varchar(100)
,`nama_menu_detail` varchar(100)
,`id_menu` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_news`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_news` (
`id` int(11)
,`status` int(11)
,`gambar` varchar(225)
,`category_id` int(11)
,`datepost` date
,`category_name` varchar(100)
,`slug` varchar(225)
,`relasi` varchar(100)
,`judul` varchar(100)
,`namadepan1` varchar(50)
,`namabelakang1` varchar(50)
,`create_date` datetime
,`namadepan2` varchar(50)
,`namabelakang2` varchar(50)
,`update_date` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_not_in_hakakses`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_not_in_hakakses` (
`id_menu` int(11)
,`nama_menu` varchar(100)
,`id_menu_detail` int(11)
,`nama_menu_detail` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_category`
--
DROP TABLE IF EXISTS `view_category`;

CREATE  VIEW `view_category`  AS  select `a`.`category_id` AS `category_id`,`a`.`category_name` AS `category_name`,`d`.`category_name` AS `relasi`,`a`.`status` AS `status`,`a`.`create_user` AS `create_user`,`a`.`update_user` AS `update_user`,`a`.`create_date` AS `create_date`,`a`.`update_date` AS `update_date`,`a`.`language_id` AS `language_id`,`b`.`first_name` AS `namadepan1`,`b`.`last_name` AS `namabelakang1`,`c`.`first_name` AS `namadepan2`,`c`.`last_name` AS `namabelakang2`,`a`.`id_website` AS `id_website` from (((`master_category` `a` left join `users` `b` on((`b`.`id` = `a`.`create_user`))) left join `users` `c` on((`c`.`id` = `a`.`update_user`))) left join `master_category` `d` on((`a`.`relasi` = `d`.`category_id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_hakakses_detail`
--
DROP TABLE IF EXISTS `view_hakakses_detail`;

CREATE  VIEW `view_hakakses_detail`  AS  select `a`.`id_menu` AS `id_menu`,`a`.`id_menu_detail` AS `id_menu_detail`,`a`.`id_group` AS `id_group`,`b`.`name` AS `name`,`b`.`description` AS `description`,`c`.`nama_menu` AS `nama_menu`,`d`.`nama_menu_detail` AS `nama_menu_detail`,`d`.`link_menu_detail` AS `link_menu_detail`,`d`.`active` AS `active` from (((`hakakses` `a` join `groups` `b` on((`a`.`id_group` = `b`.`id`))) join `master_menu_admin` `c` on((`c`.`id_menu` = `a`.`id_menu`))) join `master_menu_detail_admin` `d` on((`d`.`id_menu_detail` = `a`.`id_menu_detail`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_hakakses_grup`
--
DROP TABLE IF EXISTS `view_hakakses_grup`;

CREATE  VIEW `view_hakakses_grup`  AS  select `b`.`id` AS `id_group`,count(`a`.`id_group`) AS `hitung`,`b`.`name` AS `name` from (`groups` `b` left join `hakakses` `a` on((`a`.`id_group` = `b`.`id`))) group by `b`.`id`,`b`.`name` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_menu`
--
DROP TABLE IF EXISTS `view_menu`;

CREATE  VIEW `view_menu`  AS  select `m`.`menu_id` AS `menu_id`,`m`.`menu_name` AS `menuName`,`m`.`position` AS `position`,`m`.`status` AS `status`,`m`.`create_date` AS `create_date`,`m`.`update_date` AS `update_date`,`u`.`first_name` AS `namadepan1`,`u`.`last_name` AS `namabelakang1`,`s`.`first_name` AS `namadepan2`,`s`.`last_name` AS `namabelakang2` from ((`menu` `m` left join `users` `u` on((`u`.`id` = `m`.`create_user`))) left join `users` `s` on((`s`.`id` = `m`.`update_user`))) group by `m`.`menu_id` order by `m`.`menu_id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_menu_content`
--
DROP TABLE IF EXISTS `view_menu_content`;

CREATE  VIEW `view_menu_content`  AS  select `mc`.`content_id` AS `content_id`,`mc`.`menu_detail_id` AS `menu_detail_id`,`mc`.`content` AS `content`,`mc`.`photo` AS `photo`,`mc`.`photo_litle` AS `photo_litle`,`mc`.`title` AS `title`,`mc`.`subtitle` AS `subtitle`,`mc`.`slug` AS `slug`,`mc`.`position` AS `position`,`mc`.`status` AS `status`,`mc`.`create_user` AS `create_user`,`mc`.`update_user` AS `update_user`,`mc`.`create_date` AS `create_date`,`mc`.`update_date` AS `update_date`,`mc`.`language_id` AS `language_id`,`mc`.`url_video` AS `url_video`,`mc`.`id_website` AS `id_website`,`md`.`menu_detail_name` AS `menuDetailName`,`m`.`menu_name` AS `menuName`,`u`.`first_name` AS `namadepan1`,`u`.`last_name` AS `namabelakang1`,`s`.`first_name` AS `namadepan2`,`s`.`last_name` AS `namabelakang2` from ((((`menu_content` `mc` left join `menu_detail` `md` on((`md`.`menu_detail_id` = `mc`.`menu_detail_id`))) left join `menu` `m` on((`m`.`menu_id` = `md`.`menu_id`))) left join `users` `u` on((`u`.`id` = `mc`.`create_user`))) left join `users` `s` on((`s`.`id` = `mc`.`update_user`))) where (`mc`.`language_id` = 1) group by `mc`.`content_id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_menu_detail`
--
DROP TABLE IF EXISTS `view_menu_detail`;

CREATE  VIEW `view_menu_detail`  AS  select `md`.`menu_detail_id` AS `menu_detail_id`,`md`.`menu_id` AS `menu_id`,`md`.`menu_detail_name` AS `menu_detail_name`,`md`.`title` AS `title`,`md`.`slug` AS `slug`,`md`.`position` AS `position`,`md`.`status` AS `status`,`md`.`create_user` AS `create_user`,`md`.`update_user` AS `update_user`,`md`.`create_date` AS `create_date`,`md`.`update_date` AS `update_date`,`md`.`language_id` AS `language_id`,`md`.`id_website` AS `id_website`,`md`.`menu_detail_name` AS `menuDetailName`,`m`.`menu_name` AS `menuName`,`u`.`first_name` AS `namadepan1`,`u`.`last_name` AS `namabelakang1`,`s`.`first_name` AS `namadepan2`,`s`.`last_name` AS `namabelakang2` from (((`menu_detail` `md` left join `menu` `m` on((`m`.`menu_id` = `md`.`menu_id`))) left join `users` `u` on((`u`.`id` = `md`.`create_user`))) left join `users` `s` on((`s`.`id` = `md`.`update_user`))) where (`md`.`language_id` = 2) group by `md`.`menu_detail_id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_menu_detail_admin`
--
DROP TABLE IF EXISTS `view_menu_detail_admin`;

CREATE  VIEW `view_menu_detail_admin`  AS  select `a`.`id_menu_detail` AS `id_menu_detail`,`b`.`nama_menu` AS `nama_menu`,`a`.`nama_menu_detail` AS `nama_menu_detail`,`a`.`id_menu` AS `id_menu` from (`master_menu_detail_admin` `a` join `master_menu_admin` `b` on((`a`.`id_menu` = `b`.`id_menu`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_news`
--
DROP TABLE IF EXISTS `view_news`;

CREATE  VIEW `view_news`  AS  select `a`.`id` AS `id`,`a`.`status` AS `status`,`a`.`gambar` AS `gambar`,`a`.`category_id` AS `category_id`,`a`.`datepost` AS `datepost`,`d`.`category_name` AS `category_name`,`a`.`slug` AS `slug`,`e`.`category_name` AS `relasi`,`a`.`title` AS `judul`,`b`.`first_name` AS `namadepan1`,`b`.`last_name` AS `namabelakang1`,`a`.`create_date` AS `create_date`,`c`.`first_name` AS `namadepan2`,`c`.`last_name` AS `namabelakang2`,`a`.`update_date` AS `update_date` from ((((`news_content` `a` left join `master_category` `d` on((`a`.`category_id` = `d`.`category_id`))) left join `master_category` `e` on((`a`.`parent_id` = `e`.`category_id`))) left join `users` `b` on((`b`.`id` = `a`.`create_user`))) left join `users` `c` on((`c`.`id` = `a`.`update_user`))) where (`a`.`language_id` = 1) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_not_in_hakakses`
--
DROP TABLE IF EXISTS `view_not_in_hakakses`;

CREATE  VIEW `view_not_in_hakakses`  AS  select `a`.`id_menu` AS `id_menu`,`a`.`nama_menu` AS `nama_menu`,`b`.`id_menu_detail` AS `id_menu_detail`,`b`.`nama_menu_detail` AS `nama_menu_detail` from (`master_menu_admin` `a` join `master_menu_detail_admin` `b` on((`a`.`id_menu` = `b`.`id_menu`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_system`
--
ALTER TABLE `log_system`
  ADD PRIMARY KEY (`idlog`);

--
-- Indexes for table `master_category`
--
ALTER TABLE `master_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `master_language`
--
ALTER TABLE `master_language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `master_menu_admin`
--
ALTER TABLE `master_menu_admin`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `master_menu_detail_admin`
--
ALTER TABLE `master_menu_detail_admin`
  ADD PRIMARY KEY (`id_menu_detail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_system`
--
ALTER TABLE `log_system`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `master_menu_detail_admin`
--
ALTER TABLE `master_menu_detail_admin`
  MODIFY `id_menu_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
