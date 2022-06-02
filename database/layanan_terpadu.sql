--
-- Database: `layanan_terpadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `kode_unit` varchar(50) NOT NULL,
  `nama_unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dumping data for table `users`
--

INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES (1, 'SISNAS', 'Kedeputian Sistem Nasional');
INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES (2, 'POLSTRA', 'Kedeputian Politik dan Strategi');
INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES (3, 'BANG', 'Kedeputian Pengembangan');
INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES (4, 'JIANDRA', 'Kedeputian Pengkajian dan Penginderaan');
INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES (5, 'UMUM', 'Biro Umum');
INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES (6, 'POK', 'Biro Perencanaan, Organisasi, dan Keuangan');
INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES (7, 'PSP', 'Biro Persidangan, Sistem Informasi, dan Pengawasan Internal');
