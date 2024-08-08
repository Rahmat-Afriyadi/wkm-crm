CREATE TABLE `transaksi` (
  `no_mesin` varchar(20) NOT NULL,
  `no_tt` varchar(20) NOT NULL,
  `alamat` mediumtext NOT NULL,
  `nama_cs` varchar(100) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `kel` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `no_yg_dihub` varchar(13) NOT NULL,
  `nm_mtr` varchar(50) NOT NULL,
  `tgl_ver` date NOT NULL,
  `tgl_expired` date DEFAULT NULL,
  `card_1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `card_2` varchar(20) DEFAULT NULL,
  `nama_pt` varchar(30) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alamat_ktr` mediumtext NOT NULL,
  `kode_pos` varchar(7) NOT NULL,
  `rt_ktr` varchar(10) DEFAULT NULL,
  `rw_ktr` varchar(10) DEFAULT NULL,
  `kota_ktr` varchar(30) NOT NULL,
  `alamat_bantuan` varchar(100) NOT NULL,
  `kode_kurir` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jns_kartu` varchar(10) NOT NULL,
  `sts_bayar` varchar(2) NOT NULL,
  `tgl_byr` date DEFAULT NULL,
  `kirim_ke` varchar(2) NOT NULL,
  `alsn_blm_byr` varchar(50) NOT NULL,
  `tgl_byr_cs` date DEFAULT NULL,
  `sts_kartu` int(11) NOT NULL,
  `alasan_check_2` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_mesin`);


-- DROP TABLE IF EXISTS `kurir`;
-- CREATE TABLE `kurir` (
--   `kode_kurir` varchar(2) CHARACTER set utf8mb4 NOT NULL,
--   `nama_kurir` varchar(45) CHARACTER set utf8mb4 DEFAULT NULL,
--   PRIMARY KEY (`kode_kurir`)
-- );

-- DROP TABLE IF EXISTS `stock_card`;
-- CREATE TABLE `stock_card` (
--   `no_kartu` varchar(19) CHARACTER SET utf8mb4 NOT NULL,
--   `tgl_expired` date DEFAULT NULL,
--   `status` int DEFAULT '0',
--   `tgl_cetak` date DEFAULT NULL,
--   PRIMARY KEY (`no_kartu`)
-- ) 


-- CREATE TABLE `transaksi` (
--   `no_mesin` varchar(20) NOT NULL,
--   `no_tt` varchar(20) NOT NULL,
--   `alamat` mediumtext NOT NULL,
--   `nama_cs` varchar(100) NOT NULL,
--   `rt` varchar(10) NOT NULL,
--   `rw` varchar(10) NOT NULL,
--   `kel` varchar(20) NOT NULL,
--   `kota` varchar(30) NOT NULL,
--   `no_tlp` varchar(13) NOT NULL,
--   `no_hp` varchar(13) NOT NULL,
--   `no_yg_dihub` varchar(13) NOT NULL,
--   `nm_mtr` varchar(50) NOT NULL,
--   `tgl_ver` date NOT NULL,
--   `tgl_expired` date DEFAULT NULL,
--   `card_1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
--   `card_2` varchar(20) DEFAULT NULL,
--   `nama_pt` varchar(30) NOT NULL,
--   `pekerjaan` varchar(20) NOT NULL,
--   `jabatan` varchar(20) NOT NULL,
--   `alamat_ktr` mediumtext NOT NULL,
--   `kode_pos` varchar(7) NOT NULL,
--   `rt_ktr` varchar(10) DEFAULT NULL,
--   `rw_ktr` varchar(10) DEFAULT NULL,
--   `kota_ktr` varchar(30) NOT NULL,
--   `alamat_bantuan` varchar(100) NOT NULL,
--   `kode_kurir` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
--   `jns_kartu` varchar(10) NOT NULL,
--   `sts_bayar` varchar(2) NOT NULL,
--   `tgl_byr` date DEFAULT NULL,
--   `kirim_ke` varchar(2) NOT NULL,
--   `alsn_blm_byr` varchar(50) DEFAULT NULL,
--   `tgl_byr_cs` date DEFAULT NULL,
--   `sts_kartu` int NOT NULL,
--   `alasan_check_2` mediumtext,
--    PRIMARY KEY (`no_mesin`),
--    KEY `card_1` (`card_1`),
-- 	KEY `kode_kurir` (`kode_kurir`)
--   );

-- DROP TABLE IF EXISTS `transaksi`;
-- CREATE TABLE `transaksi` (
--   `no_mesin` varchar(20) NOT NULL,
--   `no_tt` varchar(20) NOT NULL,
--   `alamat` mediumtext NOT NULL,
--   `nama_cs` varchar(100) NOT NULL,
--   `rt` varchar(10) NOT NULL,
--   `rw` varchar(10) NOT NULL,
--   `kel` varchar(20) NOT NULL,
--   `kota` varchar(30) NOT NULL,
--   `no_tlp` varchar(13) NOT NULL,
--   `no_hp` varchar(13) NOT NULL,
--   `no_yg_dihub` varchar(13) NOT NULL,
--   `nm_mtr` varchar(50) NOT NULL,
--   `tgl_ver` date NOT NULL,
--   `tgl_expired` date DEFAULT NULL,
--   `card_1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
--   `card_2` varchar(20) DEFAULT NULL,
--   `nama_pt` varchar(30) NOT NULL,
--   `pekerjaan` varchar(20) NOT NULL,
--   `jabatan` varchar(20) NOT NULL,
--   `alamat_ktr` mediumtext NOT NULL,
--   `kode_pos` varchar(7) NOT NULL,
--   `rt_ktr` varchar(10) DEFAULT NULL,
--   `rw_ktr` varchar(10) DEFAULT NULL,
--   `kota_ktr` varchar(30) NOT NULL,
--   `alamat_bantuan` varchar(100) NOT NULL,
--   `kode_kurir` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
--   `jns_kartu` varchar(10) NOT NULL,
--   `sts_bayar` varchar(2) NOT NULL,
--   `tgl_byr` date DEFAULT NULL,
--   `kirim_ke` varchar(2) NOT NULL,
--   `alsn_blm_byr` varchar(50) DEFAULT NULL,
--   `tgl_byr_cs` date DEFAULT NULL,
--   `sts_kartu` int NOT NULL,
--   `alasan_check_2` mediumtext,
--   `transaksicol` varchar(45) DEFAULT NULL,
--   PRIMARY KEY (`no_mesin`),
--   KEY `card_1` (`card_1`),
--   KEY `kode_kurir` (`kode_kurir`),
--   CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`card_1`) REFERENCES `stock_card` (`no_kartu`) ON DELETE SET NULL ON UPDATE SET NULL,
--   CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_kurir`) REFERENCES `kurir` (`kode_kurir`) ON DELETE SET NULL ON UPDATE SET NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- CREATE TABLE `transaksi` (
--   `no_mesin` varchar(20) CHARACTER set utf8mb4 NOT NULL,
--   `no_tt` varchar(20) CHARACTER set utf8mb4 NOT NULL,
--   `alamat` mediumtext CHARACTER set utf8mb4 NOT NULL,
--   `nama_cs` varchar(100) CHARACTER set utf8mb4 NOT NULL,
--   `rt` varchar(10) CHARACTER set utf8mb4 NOT NULL,
--   `rw` varchar(10) CHARACTER set utf8mb4 NOT NULL,
--   `kel` varchar(20) CHARACTER set utf8mb4 NOT NULL,
--   `kota` varchar(30) CHARACTER set utf8mb4 NOT NULL,
--   `no_tlp` varchar(13) CHARACTER set utf8mb4 NOT NULL,
--   `no_hp` varchar(13) CHARACTER set utf8mb4 NOT NULL,
--   `no_yg_dihub` varchar(13) CHARACTER set utf8mb4 NOT NULL,
--   `nm_mtr` varchar(50) CHARACTER set utf8mb4 NOT NULL,
--   `tgl_ver` date NOT NULL,
--   `tgl_expired` date DEFAULT NULL,
--   `card_1` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
--   `card_2` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
--   `nama_pt` varchar(30) CHARACTER set utf8mb4 NOT NULL,
--   `pekerjaan` varchar(20) CHARACTER set utf8mb4 NOT NULL,
--   `jabatan` varchar(20) CHARACTER set utf8mb4 NOT NULL,
--   `alamat_ktr` mediumtext CHARACTER SET utf8mb4 NOT NULL,
--   `kode_pos` varchar(7) CHARACTER set utf8mb4 NOT NULL,
--   `rt_ktr` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
--   `rw_ktr` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
--   `kota_ktr` varchar(30) CHARACTER set utf8mb4 NOT NULL,
--   `alamat_bantuan` varchar(100) CHARACTER set utf8mb4 NOT NULL,
--   `kode_kurir` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
--   `jns_kartu` varchar(10) CHARACTER set utf8mb4 NOT NULL,
--   `sts_bayar` varchar(2) CHARACTER set utf8mb4 NOT NULL,
--   `tgl_byr` date DEFAULT NULL,
--   `kirim_ke` varchar(2) CHARACTER set utf8mb4 NOT NULL,
--   `alsn_blm_byr` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
--   `tgl_byr_cs` date DEFAULT NULL,
--   `sts_kartu` int NOT NULL,
--   `alasan_check_2` mediumtext,
--   `transaksicol` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
--   PRIMARY KEY (`no_mesin`),
--   KEY `card_1` (`card_1`),
--   KEY `kode_kurir` (`kode_kurir`),
--   CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`card_1`) REFERENCES `stock_card` (`no_kartu`) ON DELETE SET  NULL ON UPDATE SET NULL,
--   CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_kurir`) REFERENCES `kurir` (`kode_kurir`) ON DELETE SET NULL ON UPDATE SET NULL
-- )

-- INSERT INTO `kurir` VALUES ('N8','ADLIAN WIGIANTONI'),('N9','PANDU LEO SIREGAR'),('NA','NA'),('NN','NN'),('O1','FADILLA GUSTIRA'),('O2','SUJITO'),('O3','RIAN HIDAYAT'),('O4','TESAR SYAFRUDIN ADE'),('O5','RAHMAT HAMZAH'),('O6','SAPTA PRAHASTA'),('O7','RIZKY DWI S'),('O8','YUDHA PERMANA'),('O9','MOHAMAD YALIS'),('P1','YUDA HERMAULANA'),('P2','BUDIONO'),('P3','HERI PRASETYO'),('P4','EKO FAJAR HARYONO'),('P5','HENDRIH'),('P6','ADI GUSTIAN'),('P7','NOPI MAULANA M');

-- INSERT INTO `stock_card` VALUES ('0101 0119 1024 6517','2025-07-01',2,'2024-08-01'),('0101 0119 1024 6518','2025-07-01',1,'2024-08-01'),('0101 0119 1024 6519','2025-07-01',3,'2024-08-01'),('0101 0119 1024 6520','2025-07-01',3,'2024-08-01'),('0101 0119 1024 6521','2025-07-01',3,'2024-08-01'),('0101 0119 1024 6522','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6523','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6524','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6525','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6526','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6527','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6528','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6529','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6530','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6531','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6532','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6533','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6534','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6535','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6536','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6537','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6538','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6539','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6540','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6541','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6542','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6543','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6544','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6545','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6546','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6547','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6548','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6549','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6550','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6551','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6552','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6553','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6554','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6555','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6556','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6557','2025-07-01',1,'2024-08-01'),('0101 0119 1024 6558','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6559','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6560','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6561','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6562','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6563','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6564','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6565','2025-07-01',0,'2024-08-01'),('0101 0119 1024 6566','2025-07-01',0,'2024-08-01'),('0103 0724 1054 3159','2025-08-01',2,'2024-07-29'),('0103 1404 1111 2222','2025-07-01',2,'2024-08-01');

-- INSERT INTO `transaksi` VALUES ('JBK1E1836040','','PONDOK LESTARI A.5 / 10 RT 001 RW 012','BONG TJEN KIU','','','KARANG TENGAH','TANGERANG','087788504900','087788504900','','REVO FIT','2023-09-20','2020-03-31',NULL,'0101 0119 1024 6523','','Pegawai Swasta','Staff','','15157','','',' ','Slipi','O1','','','2024-08-13','1','Konsumen tidak punya uang',NULL,4,NULL,NULL),('JBK1E1870361','','JL.TAMAN ASRI LAMA NO. 3 RT 006 RW 005','ANDRYAN PRASETYO UTOMO','','','Cipadu Jaya','Tangerang','081221822700','6281221822700','','REVO FIT','2023-09-20','2020-03-31',NULL,'0101 0119 1024 6517','','Pegawai Swasta','Staff','KUNINGAN ','15155','','','JAKARTA SELATAN','PTK GG H BANTENG ,TY SJ RMH PAK ADRYAN ','P5','','','2023-09-21','1','',NULL,1,NULL,NULL),('JBK1E1870372','','KP.KETAPANG DONGKAL RT 002 RW 004','JUSTINE ANGELA TENDY','','','Cipondoh Indah','Tangerang','085888404833','0895358592193','','REVO FIT','2023-09-20','2020-03-31','0101 0119 1024 6517','','','Pegawai Swasta','Staff','GRAND LAKE CITY CBD BLOK. I / 9','15148','','','TANGERANG','','P1','','S','2024-07-31','1','','2024-08-15',3,NULL,NULL),('JBK3E1426525','','JL H MAHMUD I/35 RT 001 RW 004','AISYA RAYANA','','','Duren Tiga','Jakarta Selatan','083890970486','083890970486','','REVO X','2023-09-20','2025-08-01','0101 0119 1024 6518','','','Pegawai Swasta','Staff','','12760','','',' ','','P2','','','2024-08-01','1','',NULL,2,NULL,NULL),('JBK3E1430171','','MESS PT FASILAMINDO RT 002 RW 003','SUPARDI','','','Pasir Jaya','Tangerang','083829738377','083829738377','','REVO X','2023-09-20','2020-03-31',NULL,'0101 0119 1024 6520','','Pegawai Swasta','Staff','','15135',NULL,NULL,' ','','O7','','','2024-08-12','1',NULL,NULL,4,NULL,NULL),('JBP1E1914973','','GG. TK AR-RAHMAN RT 002 RW 004','NURMANSYAH','','','Karang Tengah','Tangerang','0881024298364','087889255809','','Supra X 125 CW MMC','2023-09-20','2020-03-31',NULL,'0101 0119 1024 6517','','Pegawai Swasta','Staff','PONDOK BETUNG','15157',NULL,NULL,'TANGERANG SELATAN','DKT GADO- GADO TNY RMH DIKA','P3','','','2023-10-02','1','Konsumen Menodongkan Senjata Tajam',NULL,4,NULL,NULL),('JBP1E1917031','','JL H KOTONG NO 44 J RT 011 RW 003','IWAN TRIROSO','','','KEBON JERUK','JAKARTA BARAT','083870356060','083870356060','','Supra X 125 CW MMC','2023-09-20','2020-03-31',NULL,'0101 0119 1024 6519','','Pegawai Swasta','Staff','','11530',NULL,NULL,' ','','P1','','','2024-07-30','1','Konsumen tidak menitipkan uang',NULL,4,NULL,NULL),('JBP1E1918304','','JL. WIRU INDAH RT 002 RW 001','SULISTYOWATI','','','Parung Serab','Tangerang','081381842529','083865622350 ','','Supra X 125 CW MMC','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','15153',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JBP1E1918323','','TAMAN ADIYASA BLOK D.26/21 RT 001 RW 007','ARTINUS NAINGGOLAN','','','Cikasungka','Kab. Tangerang','081219457977','081219457977','','Supra X 125 CW MMC','2023-09-20','2025-08-01','0103 0724 1054 3159','','','Pegawai Swasta','Staff','','15730','','',' ','','O5','','S','2024-08-09','1','','2024-08-17',3,NULL,NULL),('JBP1E1918332','','BUKIT TIARA BLK.A 4/25 RT 027 RW 005','WIDODO','','','Pasir Jaya','Kab. Tangerang','081280544222','081280544222','','Supra X 125 CW MMC','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','15710',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JBP1E1918381','','JALAN NURI RAYA BLOK A NO 56 RT 001 RW 012','RIFALDI SAPUTRA','','','Kunciran Indah','Tangerang','081291826907','081291826907','','Supra X 125 CW MMC','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','JL.MABES HANKAM','15144',NULL,NULL,'JAKARTA TIMUR','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JBP1E1918509','','GRAHA BINTARO GR.26 NO 18 RT 006 RW 002','ANGGUN PUTRI','','','Perigi Baru','Tangerang Selatan','087786559329','087786559329','','Supra X 125 CW MMC','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15228','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JFZ1E3443321','','JL. SAWAH LIO II NO. 33 RT 009 RW 008','SUKAESIH','','','Tambora','Jakarta Barat','081317962423','081317962423','081317962423','BEAT SPORTY CW MMC','2023-09-18','2020-03-31',NULL,'0101 0119 1024 6557','','Pegawai Swasta','Staff','JL. LETJEN S PARMAN NO. KAV 28 ','11250','003','005','JAKARTA BARAT','','P1','','','2023-10-03','1','Konsumen Menodongkan Senjata Tajam',NULL,4,NULL,NULL),('JM01E1233650','','KP. BUNAR RT 002 RW 003','NURYATI','','','Sukatani','Kab. Tangerang','088905187558','088905187558','','ALL NEW SCOOPY SPORTY','2023-09-20','2020-03-31',NULL,'0101 0119 1024 6517','','Pegawai Swasta','Staff','','15730','','','','','P2','','','2024-08-06','1','Konsumen Menodongkan Senjata Tajam',NULL,4,NULL,NULL),('JM01E1234477','','KP WADINAH RT 004 RW 002','ARIS SUTRISNA','','','Jeungjing','Kab. Tangerang','TIDAK ADA','085893129055','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15730','','','','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1235434','','KP KEMUNING RT 002 RW 001','ARNASIH A','','','Kemuning','Kab. Tangerang','085890046550','085890046550','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15620','','','','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1596905','','PONDOK AREN RT 004 RW 007','RUMLAH','','','Pondok Kacang Timur','Tangerang Selatan','TIDAK ADA','081316370869','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15226',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1597263','','KP. PABUARAN RT 002 RW 002','AGUS','','','Karang Tengah','Kab. Tangerang','089630568056','089630568056','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','JL. MITRAMAS RAYA NO. 10','15157',NULL,NULL,'KAB. TANGERANG','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605903','','JL H MADING NO 29 RT 007 RW 002','AHMAD IKHLASH','','','KEMBANGAN UTARA','JAKARTA BARAT','0895326189882','0895326189882','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','MERUYA','11610','','','JAKARTA BARAT','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605907','','KP DUKUH RT 008 RW 001','SUTARTI','','','SERUA','TANGERANG SELATAN','08567020140','08567020140','','ALL NEW SCOOPY SPORTY','2023-09-20','2020-03-31',NULL,'0101 0119 1024 6521','','Pegawai Swasta','Staff','KP DUKUH RT 008 RW 001','15414',NULL,NULL,'TANGERANG SELATAN','','O6','','','2024-08-16','1','Rumah Kosong',NULL,4,'Maaf tidak bisa ditelepon',NULL),('JM01E1605910','','SERPONG RT 003 RW 007','ROHMAT HIDAYAT','','','SERPONG','TANGERANG SELATAN','085773328812','085773328812','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','JL.RAYA DAAN MOGOT JAK BAR','15311',NULL,NULL,'JAKARTA BARAT','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605923','','KP. TEGALSARI RT 001 RW 003','NURBARIYAH','','','Kayu Bongkok','Kab. Tangerang','085778307665','085778307665','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','15520',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605929','','KP BAKUNG RT 004 RW 001','AULIA MELVIYANA','','','Balaraja','Kab. Tangerang','085285715998','085285715998','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15610','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605939','','KP. CANDU RT 003 RW 001','RIPA HASTUTI','','','SERDANG WETAN','KAB. TANGERANG','089652731824','089653474701','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','15820',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605947','','KP PLUIS RT 002 RW 014','SINGGEN RIDWAN','','','Grogol Utara','Jakarta Selatan','083832281816','083832281816','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','12210',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605954','','KP UTAN JATI RT 001 RW 001','IRA ARDIYANTI','','','Jati Mulya','Kab. Tangerang','087781336461','087781336461','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','KEDAUNG BARAT','15520','','','KAB. TANGERANG','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605966','','KP UWUNG GIRANG RT 004 RW 011','NUR ASIAH','','','Uwung Jaya','Tangerang','081297994824','081297994824','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15138','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605971','','KP. PASIRAWI RT 015 RW 005','ANDA','','','MEKAR WANGI','KAB. TANGERANG','085798440901','085798440901','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','KP PASIRAWI','15340','','','KAB. TANGERANG','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1605972','','KP. KEBANTENAN NO.67 RT 003 RW 009','INDAH DAMAYANTI PUTRI','','','Pondok Aren','Tangerang Selatan','08881644099','08881644099 ','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15424','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1610480','','GG. LISTRIK V DLM NO 25 RT 009 RW 006','MARIYANI','','','KWITANG','JAKARTA PUSAT','085711994880','085711994880','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','10420','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1610576','','JL. BEKASI TIMUR II / 6  A RT 013 RW 004','IQRIMA PUTRI','','','RAWA BUNGA','JAKARTA TIMUR','08119880188','08119880188','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','13350','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1615047','','JL. AMD XII NO. 24 RT 004 RW 002','MUHAMAD AJIE PANGESTU','','','Makasar','Jakarta Timur','089655811537','089655811537','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','13570','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1615172','','KP. BARU RT 007 RW 005','NURHASANAH','','','Sukabumi Selatan','Jakarta Barat','089627285932','089627285932','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','11560',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1616478','','JL. KANWIL BELAWAN NO. 11 RT 009 RW 005','KINANTI KHAIRUNNISA IMANI','','','PONDOK BAMBU','JAKARTA TIMUR','081380999157','081380999157','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','13430','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1616923','','JL. MAWAR III RT 006 RW 013','TRIXI ANNISA CAHYATI','','','Bintaro','Jakarta Selatan','089602990503','089602990503','','ALL NEW SCOOPY SPORTY','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','12330','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617416','','KALIDERES RT 011 RW 001','MUHAMMAD RAFLI SYAIFUDIN','','','Kalideres','Jakarta Barat','081335574612','081335574612','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','JL UTAN JATI  PEGADUNGAN JAKBAR','11840','','','JAKARTA BARAT','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617449','','JL.MANGGA BLOK D GG III/1 RT 006 RW 010','RINI PRIHATINI','','','Lagoa','Jakarta Utara','085959402525','085959402525','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','14270','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617451','','JL UTAN PANJANG III RT 002 RW 006','NICKEN OKTAVIANI','','','Utan Panjang','Jakarta Pusat','087774740698','087774740698','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','10650','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617452','','JL BETING FLAMBOYAN 9A RT 017 RW 008','IMAS ROHANAH','','','Semper Barat','Jakarta Utara','085883415376','085883415376','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','14130',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617469','','PRAPATAN KAMAL RT 001 RW 001','SITI DAUMI','','','Kamal','Jakarta Barat','085741921389','085741921389','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','11810',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617520','','JL H SELONG RT 001 RW 013','SAFITRI','','','Duri Kosambi','Jakarta Barat','087748331092','087748331092','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','11750',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617598','','JL PERMATA BLOK C 7 RT 006 RW 015','DESSY KURNIANTI','','','TEGAL ALUR','JAKARTA BARAT','081311055299','089655366248','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','11820','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617880','','JLN. BHAKTI RT 005 RW 009','TANTRA ARI PRATAMA','','','Cilincing','Jakarta Utara','081280378108','081280378108','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','14120',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617925','','KP PETUKANGAN RT 003 RW 005','ADELLIA AGUSTINAH','','','Rawa Terate','Jakarta Timur','089530637526','089530637526','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','13920','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1617999','','PEKAYON JAKARTA TIMUR RT 010 RW 010','RANI RIYADUL JANNAH','','','Pekayon','Jakarta Timur','08990276617','628990276617','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','13710','','','','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1618003','','JL.TEGAL PARANG SELATAN /25 RT 002 RW 005','NUR CHOLISH MAZID','','','TEGAL PARANG','JAKARTA SELATAN','081311201073','081311201073','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','12790',NULL,NULL,' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1618022','','JL.S.KAMPAR XI UJUNG RT 018 RW 001','AGUS SALIM','','','Semper Barat','Jakarta Utara','085717590971','085717590971','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','14130','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1618027','','KP TANAH TINGGI RT 005 RW 006','SURTI HARTANTI','','','Semanan','Jakarta Barat','089531000939','089531000939','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,NULL,'','Pegawai Swasta','Staff','','11850','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1618032','','KP SERUA RT 004 RW 003','ANDRI DWI RAMADHAN','','','Sawah Baru','Tangerang Selatan','088213078913','088213078913','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15413','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1618057','','KEBANTENAN V RT 009 RW 006','ILHAM NUSYA PUTRA','','','Semper Timur','Jakarta Utara','085715329952','085715329952','','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','14130','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM01E1618066','','DARUSSALAM SELATAN II RT 002 RW 004','AGUNG SETIAWAN','','','BATUSARI','TANGERANG','087883597995','087883597995','088224026646','ALL NEW SCOOPY FASHION','2023-09-20',NULL,NULL,'','','Pegawai Swasta','Staff','','15121','','',' ','',NULL,'','',NULL,'1','',NULL,1,NULL,NULL),('JM41E1883412','T001229152','JL. BENTENG MAS III NO.39A RT 011 RW 006','AGUSTONO','','','Tanjung Priok','Jakarta Utara','081282305873','081282305873','081282305873','VARIO 125 CBS NEW MMC','2023-09-18','2025-06-01','0103 1404 1111 2222','','','Pegawai Swasta','Staff','MENARA THAMRIN, JL MH TAMRIN KAV 3','14350','002','001','JAKARTA PUSAT','menara thamrin ,lsg dgn pak agustono bertemu di lobby.wa sdh sampai lokasi,','P4','','S','2024-07-04','1','','2024-07-15',3,NULL,NULL),('JM81E2006805','T001228318','TOMANG PULO GG. IV A RT 004 RW 006','SITI RAHMATANG','','','Pal Merah','Jakarta Barat','081218674744','081218674744','081218674744','BEAT SPORTY CBS MMC','2023-09-11',NULL,NULL,'','','Pegawai Swasta','Staff','JL. JATI PETAMBURAN 1 ','11430','001','001','JAKARTA PUSAT','KNF BERTEMU IBU RAHMA',NULL,'','','2023-09-13','2','',NULL,1,NULL,NULL),('KF71E1300201','T001229538','KP BOJONG RENGED RT 009 RW 003','MIFTAHUL HAMDI','','','Teluknaga','Kab. Tangerang','087786484493','087786484493','087786484493','NEW PCX 160 CBS','2023-09-13',NULL,NULL,'','','Pegawai Swasta','Staff','JL. LAMDA RAYA CIMONE PERMAI','15510','005','005','TANGERANG','BILANG AJA MAU KTMU BPK HAMDI/DARI 7-SET4',NULL,'','','2023-08-30','2','',NULL,1,NULL,NULL),('KFA1E1089789','','KP. CIPEDAK RT 006 RW 009','DEDE SURYADI','','','JAGAKARSA','JAKARTA SELATAN','082111177704','082111177704','082111177704','VARIO 160 ABS','2023-09-14',NULL,NULL,'','','Pegawai Swasta','Staff','JL. KRESEK-BALARAJA KM,8','12640','001','002','KAB. TANGERANG','BPK DEDE SURYADI/KLO TDK KTMU BSA HUB AJA',NULL,'','','2023-09-15','3','',NULL,1,NULL,NULL);
