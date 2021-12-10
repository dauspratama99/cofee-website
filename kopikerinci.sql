-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2021 at 09:34 PM
-- Server version: 5.7.36-log
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteeco_kopikerinci`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `isi_about` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `isi_about`) VALUES
(1, '<p><span style=\"color:#000000\">One type of coffee that is currently in great demand by young people is robusta coffee. This type of coffee is a derivative of the Coffea canephora species. This type of coffee grows in the lowlands, but the best location for cultivating this plant is at an altitude of 400-800 meters above sea level.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Arabica coffee is known to have a distinctive aroma and strong taste. This type of coffee, which comes from the mountains of Ethiopia, is a plant that grows under the canopy of a lush tropical forest. Usually, Arabica coffee grows above an altitude of 500 meters above sea level The most suitable environmental temperature for this coffee plant is around 15-24? C.&nbsp;</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$AsQm.AH7mhWFEE4Q9tWXAuuLY3UsDE7522ST3AFxPOhSzCSlmndqK'),
(2, 'anu', '$2y$10$iW2y2zWniH55f2z86rEw9OK1ll7J/OsA.wQeH5v1xPPZWN5iBL08O');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `desc` text,
  `upload_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `tgl_upload`, `judul`, `desc`, `upload_by`) VALUES
(3, '163791166321.jpeg', '2021-11-17', 'coffee bean drying', 'Dry the sorted coffee cherries on the drying floor evenly. The thickness of the dried coffee should be no more than 4 cm. Do the reversal at least 2 times in one day. The drying process usually takes about 2 weeks and will produce dry coffee cherries with a moisture content of 15%.', 'admin'),
(6, '1637569049163729648022.jpeg', '2021-11-30', 'fertilizer application process', 'Fertilizer is given 2 times a year, namely at the beginning of the rainy season and the end of the rainy season. In addition, its application is adjusted to the spacing of the plants. The following are the rules for applying fertilizer to coffee plants.', 'admin'),
(8, '16376352831637569453163756486419.jpeg', '2021-11-18', 'coffee maintenance process', 'The coffee that will be used as seeds to be picked is coffee that is physiologically ripe or red.\r\nNext, separate the skin from the seeds, then the seeds are washed and air-dried not exposed to sunlight to do nursery or seed germination for about 2.5 months using soil and sand media. The size of the seedling media is about 10x120x35 cm and is covered or shaded with dry straw or reeds.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `website` varchar(200) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(16) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `wa` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `website`, `facebook`, `instagram`, `alamat`, `telepon`, `email`, `wa`) VALUES
(1, 'https://mediatamaweb.co.id/', '', '', 'Jalan Bakti Abri No.27 Pegambiran Ampalu, Kota Padang.', '+6281380825399', 'abdidharma35@gmail.com', '+6281380825399');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `foto_galery` varchar(200) NOT NULL,
  `nama_galery` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `foto_galery`, `nama_galery`) VALUES
(3, '163791139219.jpeg', 'The picture above shows the process of roasting coffee beans at Cantee Coffe Kerinci.'),
(4, '1637568140163729647020.jpeg', ' the process of planting coffee beans at Cantee Coffee Kerinci.'),
(5, '1637568234163729648022.jpeg', 'the process of selecting coffee beans carried out by Cantee Coffe Kerinci employees.'),
(6, '1637568299163756486419.jpeg', 'the process of harvesting ripe coffee beans by Canter Coffe Kerinci employees.'),
(7, '1637568340163756487521.jpeg', 'the drying process of ripe coffee beans by Canter Coffe Kerinci employees.');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kepala` varchar(200) DEFAULT NULL,
  `isi_pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nama`, `email`, `kepala`, `isi_pesan`) VALUES
(1, 'aku', 'aku@gmail.com', 'aku salah', 'aku yang salah kepadamu'),
(2, 'anu', 'ani@gmail.com', 'ani yang salah', 'ani salah ma'),
(3, 'anjum', 'anjum@gmail.com', 'ani yang salah', 'anjuma'),
(8, 'Jack Cooper', 'jackcooper.online@gmail.com', 'Question about your website', 'Hey,\r\n\r\nYour website&#039;s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I&#039;ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you&#039;ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results. Would you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt&#039;s a relatively simple fix. If this is a priority.\r\n\r\nPlease share your “Phone Number&quot; and a suitable time to talk, so I can help you in that.\r\n\r\n\r\nRegards,\r\nJack Cooper\r\nDigital Marketing Expert');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `foto_produk` varchar(100) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` int(100) DEFAULT NULL,
  `jumlah` int(50) DEFAULT NULL,
  `desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `foto_produk`, `nama_produk`, `harga`, `jumlah`, `desc`) VALUES
(3, '1637910994kopi_arabica.jpg', 'Arabica Coffee', 78000, 100, 'Arabica coffee (Coffea arabica), also known as Arabic coffee, Arabic bush coffee, or mountain coffee, is a species of the genus Coffea. This species is believed to be the first coffee species to be cultivated, and is the dominant cultivar, representing about 60% of global coffee production.'),
(4, '1637911005kopi_robusta.jpg', 'Robusta Coffee', 45000, 100, 'Robusta comes from the word \'robust\' which means strong, according to the description of the posture (body) or the level of its strong viscosity. Robusta coffee is not a species because this type is derived from the Coffea canephora species.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `nama_web` varchar(100) DEFAULT NULL,
  `desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `nama_web`, `desc`) VALUES
(1, '16377662961637132187gambar_biji.JPG', 'If it wasn\'t for coffee, I\'d have no discernible personality at all And', ' Coffee is always a good idea.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
