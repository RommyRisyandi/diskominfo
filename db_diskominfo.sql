-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2023 pada 07.24
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diskominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_petugas`, `judul`, `jenis`, `isi`, `gambar`, `tanggal_post`) VALUES
(1, 1, 'Profil Dinas Komunikasi dan Informatika Kota Singkawang', 'Berita', '<p>asdas das dasda sdasdasda sdasd asdasda sdas dasda sdasd</p>\r\n', 'WhatsApp_Image_2023-01-31_at_10_58_06.jpeg', '2023-02-03 02:45:22'),
(3, 1, 'Selamat Hari Raya Imlek 2023', 'Infografis', '<p>asffnsdlf sdkfsdjlfsdjfs lkdfjsdlfjslfjsdfkl sjdfsofjwierjtwe ioruweorwfkjdsfklsdjflsdfjsdlfjsldfkjsfklmxnzcf.,mvxcv.,msf ;lgkwjrpwerop[ wkfl&#39;;sdkfsdp;fkwepofkpeofksd;lfksd;fksdflskf/lxmc,v/xc ,.v&#39;;slkdfp&#39;sifkpwirepwkf;lsadfks;dfks;dlfksd;lfk spofikr;etlk s;lgfkdfls;gk;dslfs dl;fs;lfksdf</p>\r\n', 'IMLEK_2023_-_Web_MC-01-min.png', '2023-02-03 02:42:25'),
(4, 1, 'PJ Walikota Menghapuskan PPKM di Tahun 2023', 'Siaran Pers', '<p>asdadakl;djakljasd lajsdlkajsdalksdj akldjaldkajsdlkajsdlkajdas lkdjasldajsdl aksjdl asdjalsdkajsdlk ajsdklasd jlaksdjlaskjas kldjasdkljasldk ajsdlk asjdlaksdjalskd jaslkdjasdlka sjdlaskdja sdliasjdkl asdjakl sdajlskdjas ldkasjdlaiksjdlak sjdlak sdjaskldj asld;ajskdasd</p>\r\n', 'WhatsApp_Image_2023-01-30_at_09_46_59_(1).jpeg', '2023-02-03 02:42:45'),
(5, 1, 'Selamat Natal 2022 & Tahun Baru 2023', 'Siaran Pers', '<p>asdasd; asdjkas;ldaksd l;asd;lakd;alsdk ;asldka;sldkasl;daks;d lasdaskd;l akd;asdkals;dakl; dakl;sdlkasd;lad ka;sdkal;sdka; lsda</p>\r\n', 'Boarder_Web_NATARU2.png', '2023-02-03 02:45:43'),
(6, 1, 'Informasi mengenai Covid-19 di Kota Singkawang', 'Siaran Pers', '<p>asdfasj da;skdjaskjda dklajsdlaksjdal skdjasl dkajs dlaks djalks djaslkdajsdlkasjdl kasdjals kdjasldka jsdlkasdjalksdjalsdkjasd lkasjdalksdjalskd jaslkdja lkajsldkj asldkjasldk ajsdlkasjdaskldjal kdjasldkajsdlaksdjalks djaslkdjasl ja lsdjasd</p>\r\n\r\n<p>asdjask ldjaslkd asjldk;ajs dlkajsdlaksjdlak;sdj als;doiqrwhujaljfnsef renqwofh eoi feqhf  oiahfqe iofja sl;kdjsldja sldjka  sld kajd lsd</p>\r\n', '13_agustus_2021.jpg', '2023-02-03 02:44:26'),
(7, 1, 'Potensi Cuaca Extreme di saat pergantian Tahun ', 'Siaran Pers', '<p>askdaskl;dajsldk;ajdlakjdaklsdjlaksdjalskdjaslkdjaslkdajslasd</p>\r\n\r\n<p>asdjas djasdkajsda sdlak;sdja sldka jsdl;kajsdl;kaj sdlaksdjalskdjakls djas kldja sl dkajsdl aksdjalskdjas kldjasldk ajsdlka sjdalksdjalda ksjdlaksdjal sdkjasldkajskldjalksdjalskdjalsdkjasldk;ajsd als kdjaskld jaslkdjaskl daskldjasldk ajsld kaj sdlak sjdlaksdjalsk djqoiweruqowie ujqwioequwo ieqwueoiq uweoiqw ueoqwaiejdalsdn mzx.kcnsl fasdkfnsdkfdsfl  sdjfls kdfjs odlfjhsp;df</p>\r\n', 'WhatsApp_Image_2023-01-30_at_09_46_59.jpeg', '2023-02-03 02:44:55'),
(8, 1, 'Jaga Kesehatan Jantung anda', 'Berita', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae varius nunc, vitae efficitur orci. Nulla quam ipsum, condimentum eget elementum ut, mattis at nisi. Sed in tortor rutrum, imperdiet mauris pulvinar, convallis diam. Sed egestas augue sed enim facilisis, ut viverra orci tempor. Integer viverra nisi id tempus consectetur. Morbi facilisis ut justo eu facilisis. Integer mollis pulvinar faucibus. Nam suscipit nulla sit amet lectus pulvinar, non pellentesque lectus pulvinar. Fusce sed sapien blandit, luctus lacus sed, rutrum nunc. Vivamus sollicitudin, felis a efficitur iaculis, massa mauris finibus nunc, non auctor lacus dolor at turpis. Mauris ultrices urna sit amet consectetur suscipit. Aenean pulvinar velit ac cursus pretium.</p>\r\n', 'WhatsApp_Image_2023-01-31_at_12_39_44.jpeg', '2023-02-03 03:00:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `esakip`
--

CREATE TABLE `esakip` (
  `id_esakip` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `esakip`
--

INSERT INTO `esakip` (`id_esakip`, `judul`, `file`, `tanggal_post`) VALUES
(1, 'CALK 2021', 'CALK_2021.pdf', '2023-02-02 00:21:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `email`, `username`, `password`, `akses_level`, `gambar`, `tanggal_update`) VALUES
(1, 'petugas', 'petugas@gmail.com', 'petugas', '31ca16a12c9cf5ba41865f5c048dda19376cdc3f', 'petugas', '', '2023-01-24 08:58:04'),
(2, 'Adira', 'adira@gmail.com', 'Adiras', '896deed081b3d2330f0198e5e84f3a771e12b5b4', 'petugas', 'user.jpg', '2023-02-02 01:27:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slider` varchar(255) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `slider`, `tanggal_post`) VALUES
(1, 'slider', NULL, '2023-02-05 07:27:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `esakip`
--
ALTER TABLE `esakip`
  ADD PRIMARY KEY (`id_esakip`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `esakip`
--
ALTER TABLE `esakip`
  MODIFY `id_esakip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
