-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Jan 2017 pada 04.12
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_view`
--
CREATE TABLE `invoice_view` (
`TRH_id` int(11)
,`date_now` varchar(10)
,`date_book` varchar(10)
,`username` varchar(200)
,`class_id` varchar(20)
,`nama_kelas` varchar(20)
,`nama_slot` varchar(20)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` varchar(20) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`) VALUES
('B501', 'Lab PTM'),
('B502', 'Lab Algoritma'),
('B503', 'Lab Fisika'),
('B504', 'Lab Apple'),
('B505', 'Lab SAP'),
('B506', 'Lab Oracle'),
('B507', 'Lab Audit'),
('B508', 'Lab Cisco'),
('B509', 'Lab Akuntansi'),
('B510', 'Lab Umum'),
('B511', 'Lab Sisdig'),
('B512', 'SeLF'),
('B513', 'Bengkel FTI'),
('B514', 'Dept IT'),
('B515', 'Smart Lab'),
('B516', 'Lab Elektro'),
('B517', 'Lab Arsitektur'),
('B518', 'Lab Animasi'),
('B519', 'Lab Mobile'),
('B520', 'Lab CEH');

-- --------------------------------------------------------

--
-- Stand-in structure for view `list_booked_class`
--
CREATE TABLE `list_booked_class` (
`TRH_id` int(11)
,`date_book` varchar(10)
,`class_id` varchar(20)
,`nama_kelas` varchar(20)
,`slot_id` varchar(20)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slot`
--

CREATE TABLE `slot` (
  `id` varchar(20) NOT NULL,
  `nama_slot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slot`
--

INSERT INTO `slot` (`id`, `nama_slot`) VALUES
('10to12', '10.00 - 12.00'),
('13to15', '13.00 - 15.00'),
('15to17', '15.00 - 17.00'),
('8to10', '08.00 - 10.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trd`
--

CREATE TABLE `trd` (
  `TRD_id` int(11) NOT NULL,
  `TRH_id` int(11) NOT NULL,
  `slot_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trd`
--

INSERT INTO `trd` (`TRD_id`, `TRH_id`, `slot_id`) VALUES
(1, 1, '8to10'),
(2, 1, '10to12'),
(3, 1, '15to17'),
(4, 2, '13to15'),
(5, 2, '15to17'),
(6, 3, '10to12'),
(7, 3, '8to10'),
(8, 4, '13to15'),
(9, 4, '15to17'),
(10, 5, '8to10'),
(11, 6, '8to10'),
(12, 6, '10to12'),
(13, 6, '13to15'),
(14, 6, '15to17'),
(15, 7, '8to10'),
(16, 7, '10to12'),
(17, 8, '13to15'),
(18, 8, '15to17'),
(19, 9, '10to12'),
(20, 10, '13to15'),
(21, 10, '15to17'),
(22, 11, '8to10'),
(23, 11, '10to12'),
(24, 11, '13to15'),
(25, 12, '10to12'),
(26, 12, '13to15'),
(27, 13, '15to17'),
(28, 14, '8to10'),
(29, 14, '10to12'),
(30, 15, '10to12'),
(31, 15, '13to15'),
(32, 16, '8to10'),
(33, 16, '10to12'),
(34, 17, '13to15'),
(35, 18, '8to10'),
(36, 19, '15to17'),
(37, 20, '8to10'),
(38, 20, '10to12'),
(39, 20, '13to15'),
(40, 21, '13to15'),
(41, 22, '13to15'),
(42, 21, '15to17'),
(43, 22, '10to12'),
(44, 23, '13to15'),
(45, 23, '15to17'),
(46, 13, '10to12'),
(47, 13, '13to15'),
(48, 13, '15to17'),
(49, 14, '8to10'),
(50, 14, '15to17'),
(51, 15, '10to12'),
(52, 15, '13to15'),
(53, 16, '8to10'),
(54, 16, '13to15'),
(55, 16, '15to17'),
(56, 17, '10to12'),
(57, 17, '13to15'),
(58, 18, '13to15'),
(59, 18, '15to17'),
(60, 19, '8to10'),
(61, 19, '10to12'),
(62, 19, '13to15'),
(63, 19, '15to17'),
(64, 20, '10to12'),
(65, 21, '15to17'),
(66, 22, '10to12'),
(67, 22, '15to17'),
(68, 23, '8to10'),
(69, 23, '15to17'),
(70, 24, '10to12'),
(71, 24, '15to17'),
(72, 25, '10to12'),
(73, 26, '13to15'),
(74, 27, '8to10'),
(75, 27, '10to12'),
(76, 27, '15to17'),
(77, 28, '15to17'),
(78, 29, '10to12'),
(79, 30, '10to12'),
(80, 31, '10to12'),
(81, 32, '13to15'),
(82, 32, '15to17'),
(83, 33, '8to10'),
(84, 33, '10to12'),
(85, 33, '15to17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trh`
--

CREATE TABLE `trh` (
  `TRH_id` int(11) NOT NULL,
  `date_now` date NOT NULL,
  `date_book` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_id` varchar(20) NOT NULL,
  `booker_name` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trh`
--

INSERT INTO `trh` (`TRH_id`, `date_now`, `date_book`, `user_id`, `class_id`, `booker_name`, `purpose`) VALUES
(1, '2016-12-27', '2017-01-16', 1, 'B501', 'Contoh', 'Contoh'),
(2, '2016-12-27', '2017-01-16', 1, 'B502', 'Contoh', 'Contoh'),
(3, '2016-12-27', '2017-01-16', 1, 'B504', 'Contoh', 'Contoh'),
(4, '2016-12-27', '2017-01-16', 1, 'B507', 'Contoh', 'Contoh'),
(5, '2016-12-27', '2017-01-16', 1, 'B514', 'Contoh', 'Contoh'),
(6, '2016-12-27', '2017-01-16', 1, 'B519', 'Contoh', 'Contoh'),
(7, '2016-12-27', '2017-01-16', 1, 'B520', 'Contoh', 'Contoh'),
(8, '2016-12-27', '2017-01-17', 1, 'B513', 'Contoh', 'Contoh'),
(9, '2016-12-27', '2017-01-17', 2, 'B506', 'Contoh', 'Contoh'),
(10, '2016-12-27', '2017-01-17', 2, 'B511', 'Contoh', 'Contoh'),
(11, '2016-12-27', '2017-01-17', 2, 'B503', 'Contoh', 'Contoh'),
(12, '2016-12-27', '2017-01-17', 2, 'B501', 'Contoh', 'Contoh'),
(13, '2016-12-27', '2017-01-17', 2, 'B507', 'Contoh', 'Contoh'),
(14, '2016-12-27', '2016-12-17', 2, 'B509', 'Contoh', 'Contoh'),
(15, '2016-12-27', '2017-01-17', 2, 'B515', 'Contoh', 'Contoh'),
(16, '2016-12-27', '2017-01-18', 2, 'B505', 'Contoh', 'Contoh'),
(17, '2016-12-27', '2017-01-18', 2, 'B511', 'Contoh', 'Contoh'),
(18, '2016-12-27', '2017-01-18', 1, 'B508', 'Contoh', 'Contoh'),
(19, '2016-12-27', '2017-01-18', 1, 'B516', 'Contoh', 'Contoh'),
(20, '2016-12-27', '2017-01-18', 1, 'B504', 'Contoh', 'Contoh'),
(21, '2016-12-27', '2017-01-18', 2, 'B509', 'Contoh', 'Contoh'),
(22, '2016-12-27', '2017-01-18', 1, 'B503', 'Contoh', 'Contoh'),
(23, '2016-12-27', '2017-01-18', 2, 'B520', 'Contoh', 'Contoh'),
(24, '2017-01-05', '2017-01-18', 2, 'B520', 'Contoh', 'Contoh'),
(25, '2017-01-05', '2017-01-18', 2, 'B517', 'Contoh', 'Contoh'),
(26, '2017-01-05', '2017-01-18', 2, 'B513', 'Contoh', 'Contoh'),
(27, '2017-01-18', '2017-01-18', 1, 'B509', 'Contoh', 'Contoh'),
(28, '2017-01-05', '2017-01-18', 1, 'B504', 'Contoh', 'Contoh'),
(29, '2017-01-05', '2017-01-18', 1, 'B510', 'Contoh', 'Contoh'),
(30, '2017-01-05', '2017-01-18', 1, 'B512', 'Contoh', 'Contoh'),
(31, '2017-01-05', '2017-01-18', 2, 'B501', 'Contoh', 'Contoh'),
(32, '2017-01-05', '2017-01-18', 1, 'B516', 'Contoh', 'Contoh'),
(33, '2017-01-05', '2017-01-18', 2, 'B505', 'Contoh', 'Contoh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin1', '$2y$10$dR.lUUGHDvxRtnqnogJxV.4iBXUM.alTv4PUUmegxGb/Zx83xBGjy'),
(2, 'admin2', '$2y$10$zRs4E6qR6YHrQ5xF7KSjR.8fawt.zWGaNzoAD85991bxXnfsdGL0W');

-- --------------------------------------------------------

--
-- Struktur untuk view `invoice_view`
--
DROP TABLE IF EXISTS `invoice_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_view`  AS  select `trh`.`TRH_id` AS `TRH_id`,date_format(`trh`.`date_now`,'%d/%m/%Y') AS `date_now`,date_format(`trh`.`date_book`,'%d/%m/%Y') AS `date_book`,`user`.`username` AS `username`,`trh`.`class_id` AS `class_id`,`kelas`.`nama_kelas` AS `nama_kelas`,`slot`.`nama_slot` AS `nama_slot` from ((((`trh` join `user`) join `kelas`) join `trd`) join `slot`) where ((`trh`.`user_id` = `user`.`id`) and (`trh`.`class_id` = `kelas`.`id`) and (`trh`.`TRH_id` = `trd`.`TRH_id`) and (`trd`.`slot_id` = `slot`.`id`)) order by `trh`.`TRH_id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `list_booked_class`
--
DROP TABLE IF EXISTS `list_booked_class`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_booked_class`  AS  select `trh`.`TRH_id` AS `TRH_id`,date_format(`trh`.`date_book`,'%d/%m/%Y') AS `date_book`,`trh`.`class_id` AS `class_id`,`kelas`.`nama_kelas` AS `nama_kelas`,`trd`.`slot_id` AS `slot_id` from ((`trh` join `kelas`) join `trd`) where ((`trh`.`class_id` = `kelas`.`id`) and (`trh`.`TRH_id` = `trd`.`TRH_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trd`
--
ALTER TABLE `trd`
  ADD PRIMARY KEY (`TRD_id`),
  ADD KEY `TRH_id` (`TRH_id`),
  ADD KEY `slot_id` (`slot_id`);

--
-- Indexes for table `trh`
--
ALTER TABLE `trh`
  ADD PRIMARY KEY (`TRH_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trd`
--
ALTER TABLE `trd`
  MODIFY `TRD_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `trh`
--
ALTER TABLE `trh`
  MODIFY `TRH_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `trd`
--
ALTER TABLE `trd`
  ADD CONSTRAINT `trd_ibfk_1` FOREIGN KEY (`slot_id`) REFERENCES `slot` (`id`),
  ADD CONSTRAINT `trd_ibfk_2` FOREIGN KEY (`TRH_id`) REFERENCES `trh` (`TRH_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `trh`
--
ALTER TABLE `trh`
  ADD CONSTRAINT `trh_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `trh_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `kelas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
