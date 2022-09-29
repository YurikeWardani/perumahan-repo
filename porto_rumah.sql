-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2022 pada 17.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto_rumah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `admin_username` varchar(128) NOT NULL,
  `admin_password` varchar(128) NOT NULL,
  `admin_view_password` varchar(128) NOT NULL,
  `admin_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_username`, `admin_password`, `admin_view_password`, `admin_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mainmenu`
--

CREATE TABLE `mainmenu` (
  `seq` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `active_menu` varchar(50) NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  `link_menu` varchar(50) NOT NULL,
  `menu_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entry_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mainmenu`
--

INSERT INTO `mainmenu` (`seq`, `idmenu`, `nama_menu`, `active_menu`, `icon_class`, `link_menu`, `menu_akses`, `entry_date`, `entry_user`) VALUES
(9, 9, 'Beranda', '', 'fas fa-home fa-2x', 'C_beranda', '', '2018-12-28 06:56:31', NULL),
(11, 11, 'Produk', '', 'fas fa-th-large fa-2x', 'C_produk', '', '2020-04-08 11:33:47', NULL),
(28, 28, 'Kontak', '', 'fa fa-phone fa-2x', 'Kontak', '', '2020-03-13 15:02:06', NULL),
(27, 27, 'Setting Ukuran', '', 'fas fa-cogs fa-2x', 'Setting_ukuran', '', '2020-03-13 13:53:59', NULL),
(21, 21, 'Setting Title', '', 'fas fa-wrench fa-2x', 'Setting_title', '', '2020-03-13 13:51:06', NULL),
(22, 22, 'Setting User', '', 'fas fa-user fa-2x', 'setting_user', '', '2020-03-13 13:51:10', NULL),
(12, 12, 'Perumahan', '', 'fas fa-location-arrow fa-2x', 'C_perumahan', '', '2020-04-08 11:33:41', NULL),
(13, 13, 'Marketing', '', 'fas fa-comments-dollar fa-2x', 'C_marketing', '', '2020-04-08 11:33:31', NULL),
(10, 10, 'Slider', '', 'fas fa-sliders-h fa-2x', 'C_slider', '', '2020-04-08 11:33:22', NULL),
(14, 14, 'Sosmed', '', 'fas fa-user-friends fa-2x', 'C_sosmed', '', '2020-04-08 11:32:45', NULL),
(15, 15, 'Pemesanan', '', 'fa fa-archive fa-2x', 'C_pesanan', '', '2022-09-26 16:25:09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `meta_beranda`
--

CREATE TABLE `meta_beranda` (
  `id_meta_beranda` int(11) NOT NULL,
  `title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `link_canonical` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meta_beranda`
--

INSERT INTO `meta_beranda` (`id_meta_beranda`, `title`, `meta_keyword`, `meta_description`, `link_canonical`) VALUES
(1, 'Berandae', 'keyworde', 'desce', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meta_kontak`
--

CREATE TABLE `meta_kontak` (
  `id_meta_kontak` int(11) NOT NULL,
  `title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `link_canonical` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meta_kontak`
--

INSERT INTO `meta_kontak` (`id_meta_kontak`, `title`, `meta_keyword`, `meta_description`, `link_canonical`) VALUES
(1, 'Kontake', 'keyworde', 'yryee', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meta_produk`
--

CREATE TABLE `meta_produk` (
  `id_meta_produk` int(11) NOT NULL,
  `title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `link_canonical` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meta_produk`
--

INSERT INTO `meta_produk` (`id_meta_produk`, `title`, `meta_keyword`, `meta_description`, `link_canonical`) VALUES
(1, 'Produke', 'keyworde', 'oooooe', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meta_struktur`
--

CREATE TABLE `meta_struktur` (
  `id_meta_struktur` int(11) NOT NULL,
  `title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `link_canonical` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meta_struktur`
--

INSERT INTO `meta_struktur` (`id_meta_struktur`, `title`, `meta_keyword`, `meta_description`, `link_canonical`) VALUES
(1, 'Strukture', 'keyworde', 'alale', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_ukuran`
--

CREATE TABLE `setting_ukuran` (
  `id_setting_ukuran` int(11) NOT NULL,
  `ukuran_foto_slider` char(15) NOT NULL,
  `ukuran_foto_tentang` char(15) NOT NULL,
  `ukuran_foto_produk` char(15) NOT NULL,
  `ukuran_foto_galeri` char(15) NOT NULL,
  `footer` char(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting_ukuran`
--

INSERT INTO `setting_ukuran` (`id_setting_ukuran`, `ukuran_foto_slider`, `ukuran_foto_tentang`, `ukuran_foto_produk`, `ukuran_foto_galeri`, `footer`) VALUES
(1, '1000x500', '1000x1000', '2000x2000', '400x500', '200x200');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id_sub` int(11) NOT NULL,
  `nama_sub` varchar(50) NOT NULL,
  `mainmenu_idmenu` int(11) NOT NULL,
  `active_sub` varchar(20) NOT NULL,
  `icon_class` varchar(100) NOT NULL,
  `link_sub` varchar(50) NOT NULL,
  `sub_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entry_user` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id_sub`, `nama_sub`, `mainmenu_idmenu`, `active_sub`, `icon_class`, `link_sub`, `sub_akses`, `entry_date`, `entry_user`) VALUES
(1, 'Entry User', 8, '', '', 'User', '', '2017-10-18 14:28:25', NULL),
(2, 'Kategori Produk', 4, '', '', 'Produk', '', '2017-10-18 14:34:17', NULL),
(3, 'Produk', 4, '', '', 'Produk/detail', '', '2017-10-18 14:34:26', NULL),
(4, 'Album', 5, '', '', 'Gallery', '', '2017-10-18 14:34:34', NULL),
(5, 'Foto', 5, '', '', 'Gallery/foto', '', '2017-10-18 14:34:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_akses_mainmenu`
--

CREATE TABLE `tab_akses_mainmenu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT 0,
  `r` int(11) DEFAULT 0,
  `u` int(11) DEFAULT 0,
  `d` int(11) DEFAULT 0,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entry_user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_akses_mainmenu`
--

INSERT INTO `tab_akses_mainmenu` (`id`, `id_menu`, `id_level`, `c`, `r`, `u`, `d`, `entry_date`, `entry_user`) VALUES
(1, 1, 1, NULL, 1, NULL, NULL, '2017-09-26 13:49:01', 'direktur'),
(8, 7, 1, 0, 1, 0, 0, '2017-10-27 17:52:10', ''),
(9, 9, 1, 0, 1, 0, 0, '2018-01-20 19:05:57', ''),
(10, 10, 1, 0, 1, 0, 0, '2018-12-28 01:29:38', ''),
(11, 11, 1, 0, 1, 0, 0, '2018-12-28 01:29:38', ''),
(12, 12, 1, 0, 1, 0, 0, '2018-12-28 01:29:38', ''),
(13, 13, 1, 0, 1, 0, 0, '2019-01-09 02:27:14', ''),
(14, 14, 1, 0, 1, 0, 0, '2019-01-10 01:43:47', ''),
(15, 15, 1, 0, 1, 0, 0, '2019-01-10 05:59:44', ''),
(23, 16, 1, 0, 1, 0, 0, '2019-02-08 01:00:02', ''),
(24, 17, 1, 0, 1, 0, 0, '2020-01-23 16:30:13', ''),
(25, 18, 1, 0, 1, 0, 0, '2020-01-23 16:30:13', ''),
(26, 19, 1, 0, 1, 0, 0, '2020-03-13 13:46:38', ''),
(27, 25, 1, 0, 1, 0, 0, '2020-02-24 03:49:48', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_akses_submenu`
--

CREATE TABLE `tab_akses_submenu` (
  `id` int(11) NOT NULL,
  `id_sub_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT 0,
  `r` int(11) DEFAULT 0,
  `u` int(11) DEFAULT 0,
  `d` int(11) DEFAULT 0,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entry_user` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_akses_submenu`
--

INSERT INTO `tab_akses_submenu` (`id`, `id_sub_menu`, `id_level`, `c`, `r`, `u`, `d`, `entry_date`, `entry_user`) VALUES
(1, 1, 1, 0, 1, 0, 0, '2017-10-14 14:45:40', ''),
(2, 2, 1, 0, 1, 0, 0, '2017-10-16 19:59:02', ''),
(3, 3, 1, 0, 0, 0, 0, '2017-10-19 01:12:32', ''),
(4, 4, 1, 0, 1, 0, 0, '2017-10-16 19:59:16', ''),
(5, 5, 1, 0, 0, 0, 0, '2017-10-19 01:12:33', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beranda`
--

CREATE TABLE `tb_beranda` (
  `id_beranda` int(11) NOT NULL,
  `file_slider1` text NOT NULL,
  `file_slider2` text NOT NULL,
  `file_slider3` text NOT NULL,
  `file_slider4` text NOT NULL,
  `keyword` text NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `judul_tentang` text NOT NULL,
  `deskripsi_tentang` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_beranda`
--

INSERT INTO `tb_beranda` (`id_beranda`, `file_slider1`, `file_slider2`, `file_slider3`, `file_slider4`, `keyword`, `jumlah_produk`, `judul_tentang`, `deskripsi_tentang`) VALUES
(1, 'spada.jpg', 'bergabung.jpg', 'materi.jpg', '1.jpg', 'Aptisi', 0, 'Selamat Datang Di SPADA APTISI JATIM', '<p>Official Site APTISI Pusat merupakan website utama dari Asosiasi Perguruan Tinggi Swasta Indonesia. Tidak berbeda dengan official site lainnya untuk menyajikan informasi berupa sebuah berita maupun artikel, official site APTISI Pusat memiliki sebuah artikel, dan saat ini sudah tercatat bahwa terdapat 360 postingan dengan total view mencapai 147238 views dalam official site APTISI Pusat. User yang sering aktif posting berita yaitu Resti Rahmawati dengan total posting sebanyak 117 Post. Terbukti pula bahwa official site APTISI sudah dikenal oleh seluruh anggota, mahasiswa maupun masyarakat luas. Mengapa tidak, subscriber official site APTISI saat ini tercatat sebanyak 288 subscriber. Dalam official site ini tidak hanya untuk melihat berita atau artikel tetapi bisa berkomunkasi dengan sesama pengguna lain dan terbukti dengan adanya 310 comment. Mari kita tingkatkan kualitas official site APTISI Pusat dengan menjadi subscriber dan memberikan feedback berupa comment pada setiap artikel yang ada</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_marketing`
--

CREATE TABLE `tb_marketing` (
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `foto_marketing` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_marketing` text COLLATE utf8_unicode_ci NOT NULL,
  `alamat_marketing` text COLLATE utf8_unicode_ci NOT NULL,
  `nohp_marketing` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email_marketing` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_marketing`
--

INSERT INTO `tb_marketing` (`username`, `password`, `foto_marketing`, `nama_marketing`, `alamat_marketing`, `nohp_marketing`, `email_marketing`) VALUES
('marketing', 'marketing', NULL, 'Marketing 1', '<p>Jl. Nakula No.53, Polehan, Blimbing, Malang - jawa Timur&nbsp;</p>', '0895639446864', 'marketing@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(56) NOT NULL,
  `nama_marketing` varchar(256) NOT NULL,
  `nama_pembeli` varchar(256) NOT NULL,
  `no_ktp` int(56) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `perumahan` varchar(256) NOT NULL,
  `tipe` varchar(256) NOT NULL,
  `no_blok` varchar(256) NOT NULL,
  `skema_pembayaran` varchar(256) NOT NULL,
  `tanggal_itj` date NOT NULL,
  `sbg_berikut` text NOT NULL,
  `tgl_input` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `nama_marketing`, `nama_pembeli`, `no_ktp`, `alamat_lengkap`, `no_hp`, `perumahan`, `tipe`, `no_blok`, `skema_pembayaran`, `tanggal_itj`, `sbg_berikut`, `tgl_input`, `status`) VALUES
(17, 'marketing', 'Yurike Wardani', 1234567890, 'Jl. Sadewa No. 42, Polehan, Blimbing, Malang - Jawa Timur', '0895639446864', '1', '21', '12', 'Inhouse', '2022-10-21', 'DP 20jt', '2022-09-28', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perumahan`
--

CREATE TABLE `tb_perumahan` (
  `id_perumahan` int(11) NOT NULL,
  `nama_perumahan` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_perumahan` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `long` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_perumahan`
--

INSERT INTO `tb_perumahan` (`id_perumahan`, `nama_perumahan`, `alamat_perumahan`, `lat`, `long`) VALUES
(1, 'Sekarsari Residence', '<p><span>Jl. Sekar Sari No.2, Tlogowaru, Kec. Kedungkandang, Kota Malang - Jawa Timur</span></p>', '-8.03987', '112.650612'),
(2, 'Austinville Residence Malang', '<address>Jl. Puncak Mandala 36, <span>Pisang Candi, Kec. Sukun, Kota Malang&nbsp;</span>- Jawa Timur</address>', '-7.964521', '112.602894');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `harga_produk` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gambar_produk` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `slider1` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `slider2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `slider3` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `kamar_tidur` int(12) NOT NULL,
  `kamar_mandi` int(12) NOT NULL,
  `pondasi` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sanitasi` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `daun_pintu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rangka_atap` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `plafon` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `carpot` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lantai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `pagar` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `listrik` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `kusen` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tipe` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dinding` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `id_perumahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `harga_produk`, `gambar_produk`, `slider1`, `slider2`, `slider3`, `kamar_tidur`, `kamar_mandi`, `pondasi`, `sanitasi`, `daun_pintu`, `rangka_atap`, `plafon`, `carpot`, `lantai`, `pagar`, `listrik`, `kusen`, `tipe`, `dinding`, `id_perumahan`) VALUES
(1, '2000000', 'd67b2bb962f0201d0afc3242ab8d1c6e.jpg', 'c701213c2be197fbf4b5e4d2d28b8660.jpg', '8cb659dc261713ef665dae8973dec066.jpg', 'fefa1c1d85f42e9b0c4e4c956c73632b.jpg', 4, 2, 'Dangkal Menerus', 'Air dan Pengolahan Sampah', '9', 'Baja Ringan', 'Gypsum', 'Keramik Carport Batu Sikat', '1', 'Beton', '1700 watt', 'Aluminium', '45', 'Batako', 1),
(2, '900000', 'ab8e7a670071341cd714fb572f145c3d.jpg', 'db5772822da0cc319c83874380db9380.jpg', '326c682ec243b1c75d77331435e6e6a0.jpg', 'd2abacc9a2d5bf7ce71b52da3c3ea61a.jpg', 3, 1, 'Dangkal Setempat', 'Air', '6', 'Kayu', 'Triplek', 'Keramik Carport Grass Brick', '1', 'Minimalis Baja Ringan', '1300 watt', 'Kayu', '21', 'Batu Bata', 2),
(3, '100000000', '652e23aea79eb1a8c7cbb0852e66a9f7.jpg', 'cb607990e05ea62d5612e9aa53dc87f6.jpg', 'a2e28baef5ea6a3e87d963a0a7ce0254.jpg', '731a0cdfab749d79d5d1949414b09cbb.jpg', 6, 3, 'Dalam Sumuran', 'Air, Pengolahan Sampah, Makanan', '13', 'Beton Bertulang', 'Kayu atau Lambersering', 'Carport Beton Cetak', '2', 'Perpaduan Beton dan Kayu', '2500 watt', 'Fiberglass', '60', 'Glassfibre Reinforced Concrete (GRC)', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `nama_slider` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `nama_slider`) VALUES
(1, '38d233c676866ecf1d2bb420285e7ec6.jpg'),
(2, '15424d43ebb797fc91623da4af4c7593.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id_sosmed` int(11) NOT NULL,
  `logo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `nama_sosmed` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_sosmed`
--

INSERT INTO `tb_sosmed` (`id_sosmed`, `logo`, `nama_sosmed`, `link`) VALUES
(1, 'instagram.png', 'Instagram', 'https://instagram.com/'),
(2, 'tokopedia.png', 'Tokopedia', 'https://tokopedia.com/'),
(3, 'lazada.png', 'Lazada', 'https://lazada.co.id/');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`seq`);

--
-- Indeks untuk tabel `meta_beranda`
--
ALTER TABLE `meta_beranda`
  ADD PRIMARY KEY (`id_meta_beranda`);

--
-- Indeks untuk tabel `meta_kontak`
--
ALTER TABLE `meta_kontak`
  ADD PRIMARY KEY (`id_meta_kontak`);

--
-- Indeks untuk tabel `meta_produk`
--
ALTER TABLE `meta_produk`
  ADD PRIMARY KEY (`id_meta_produk`);

--
-- Indeks untuk tabel `meta_struktur`
--
ALTER TABLE `meta_struktur`
  ADD PRIMARY KEY (`id_meta_struktur`);

--
-- Indeks untuk tabel `setting_ukuran`
--
ALTER TABLE `setting_ukuran`
  ADD PRIMARY KEY (`id_setting_ukuran`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indeks untuk tabel `tab_akses_mainmenu`
--
ALTER TABLE `tab_akses_mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_akses_submenu`
--
ALTER TABLE `tab_akses_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_beranda`
--
ALTER TABLE `tb_beranda`
  ADD PRIMARY KEY (`id_beranda`);

--
-- Indeks untuk tabel `tb_marketing`
--
ALTER TABLE `tb_marketing`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `tb_perumahan`
--
ALTER TABLE `tb_perumahan`
  ADD PRIMARY KEY (`id_perumahan`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_perumahan`
--
ALTER TABLE `tb_perumahan`
  MODIFY `id_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
