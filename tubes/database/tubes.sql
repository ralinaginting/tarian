-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2017 pada 10.54
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarian`
--

CREATE TABLE `tarian` (
  `id_tarian` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tarian`
--

INSERT INTO `tarian` (`id_tarian`, `judul`, `deskripsi`, `image`) VALUES
(4, 'Sumatera', 'Tari Tor Tor merupakan salah satu jenis tari yang berasal dari suku Batak di Pulau Sumatera.\r\n							Sejak sekitar abad ke-13, Tari Tor Tor sudah menjadi budaya suku Batak.\r\n							Perkiraan tersebut dikemukakan oleh mantan anggota anjungan Sumatera Utara 1973-2010 dan pakar Tari Tor Tor.\r\n							Di kawasan Pahae dikenal dengan tarian gembira dan lagu berpantun yang disebut tumba atau juga biasa disebut Pahae do mula ni tumba.<br><br>\r\n							Jenis-jenis tari tor yaitu Tor Tor Pangurason, Tor Tor Sipitu Cawan, Tor Tor Tunggal Panaluan.\r\n							Sekarang ini Tari Tor Tor menjadi sebuah seni budaya bukan lagi menjadi tarian yang lekat hubungannya dengan dunia roh.\r\n							Karena seiring berkembangnya zaman, Tor Tor merupakan perangkat budaya dalam setiap kehidupan adat suku Batak.<br>\r\n							Bagaimanapun juga, Tor Tor Batak adalah identitas seni budaya masyarakat Batak yang harus dilestarikan dan tidak lenyap oleh perkembangan zaman dan peradaban manusia.\r\n							Tari Tor Tor Batak mengandung nilai-nilai etika, moral dan budi pekerti yang perlu ditanamkan kepada generasi muda\r\n<br>\r\n<a href= "https://www.youtube.com/watch?v=y4SC92VTfsI2"> https://www.youtube.com/watch?v=y4SC92VTfsI2</a>', 'uploads/about_us_tor.jpg'),
(5, 'Sulawesi', 'Menurut sejarahnya, Tari Kipas Pakarena ini merupakan salah satu tarian peninggalan Kerajaan Gowa di daerah Gowa, Sulawesi Selatan. \r\n							Kerajaan Gowa ini dulunya pernah berjaya di sulawesi bagian selatan sampai berabad-abad. Namun menurut mitos masyarakat disana,\r\n							tarian ini berawal dari kisah perpisahan antara penghuni boting langi (khayangan) dan pengguni lino (bumi) pada zaman dahulu.<br><br>\r\n							Konon sebelum mereka berpisah, penghuni boting langi sempat mengajarkan bagaimana menjalani hidup\r\n							seperti bercocok tanam, beternak, dan berburu pada penghuni lino. Ajaran tersebut mereka berikan melalui gerakan-gerakan badan dan kaki.\r\n							Gerakan tersebut kemudian dipakai penghuni lino sebagai ritual adat mereka.<br>\r\n							Tari Kipas Pakarena adalah salah satu tarian tradisional yang berasal dari daerah Gowa, Sulawesi Selatan.\r\n							Tarian ini dibawakan oleh para penari wanita dengan berbusana adat dan menari dengan gerakannya yang khas serta memainkan kipas sebagai atribut menarinya.\r\n<br>\r\n<a href="https://www.youtube.com/watch?v=9svirKNGMDM">https://www.youtube.com/watch?v=9svirKNGMDM</a>\r\n', 'uploads/tari_kipas_pakarena.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nama`, `username`, `email`, `password`) VALUES
('asd', 'asd', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
('asem', 'asem', 'asem@gmail.com', '839c46a5d1272dd54e20a4d06acac519'),
('asep', 'asep', 'asep@gmail.com', 'dc855efb0dc7476760afaa1b281665f1'),
('tubes', 'tubes', 'tubes@gmail.com', 'a1534062ad2aa83f02d095a7be4dafe2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarian`
--
ALTER TABLE `tarian`
  ADD PRIMARY KEY (`id_tarian`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tarian`
--
ALTER TABLE `tarian`
  MODIFY `id_tarian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
