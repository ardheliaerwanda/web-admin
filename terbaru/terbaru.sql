/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50724
Source Host           : 127.0.0.1:3306
Source Database       : terbaru

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2020-12-05 20:20:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('5', '20', 'Fatma', '082260302565', 'fatma@gmail.com', 'Utankayu', 'P', '2020-10-14 05:38:49', '2020-10-14 05:38:49');
INSERT INTO `admin` VALUES ('8', '24', 'Topik', '089630206655', 'taufikismail@gmail.com', 'Bekasi', 'L', '2020-11-09 08:53:06', '2020-11-09 08:53:06');
INSERT INTO `admin` VALUES ('9', '25', 'Bondan', '087780996533', 'bondap@gmail.com', 'Bekasi', 'L', '2020-11-09 10:35:09', '2020-11-09 10:35:09');
INSERT INTO `admin` VALUES ('11', '28', 'Prima', '089645123367', 'prima@gmail.com', 'Jatiasih', 'P', '2020-11-09 11:05:45', '2020-11-09 11:05:45');
INSERT INTO `admin` VALUES ('12', '29', 'Amsal', '085644332178', 'amsal@gmail.com', 'Cipayung', 'L', '2020-11-09 11:28:41', '2020-11-09 11:28:41');
INSERT INTO `admin` VALUES ('13', '30', 'Hayu', '089956146789', 'hayu@gmail.com', 'Parung', 'L', '2020-11-09 11:29:30', '2020-11-09 11:29:30');
INSERT INTO `admin` VALUES ('14', '31', 'Bisma', '081855678899', 'bisma@gmail.com', 'Citayem', 'L', '2020-11-09 11:30:52', '2020-11-09 11:30:52');
INSERT INTO `admin` VALUES ('19', '37', 'bisa', '081978653468', 'bisa@gmail.com', 'cibinong', 'P', '2020-11-09 12:04:32', '2020-11-09 12:04:32');

-- ----------------------------
-- Table structure for catat_produk
-- ----------------------------
DROP TABLE IF EXISTS `catat_produk`;
CREATE TABLE `catat_produk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_satuan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_jual` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_produkvar` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_group` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of catat_produk
-- ----------------------------
INSERT INTO `catat_produk` VALUES ('1', 'Kemeja H&M', '149000', '1605146563_3.jpg', 'Kemeja', 'Original 100%', 'Pieces', '165000', 'safydq778', 'Color', '-', '2020-11-10 05:58:34', '2020-11-30 02:53:16');
INSERT INTO `catat_produk` VALUES ('2', 'Blouse', '149000', '1606458178_2.jpg', 'Blouse', 'ert78iokjhb', 'Pieces', '165000', 'b001', null, null, '2020-11-27 06:22:58', '2020-11-27 06:22:58');
INSERT INTO `catat_produk` VALUES ('4', 'Kemeja Olive', '149900', '1606703710_3.jpg', 'Kemeja', 'Kemeja warna Olive', 'Pieces', '165000', 'B003', 'Color', '-', '2020-11-30 02:35:10', '2020-11-30 02:35:10');

-- ----------------------------
-- Table structure for catat_produk_ojol
-- ----------------------------
DROP TABLE IF EXISTS `catat_produk_ojol`;
CREATE TABLE `catat_produk_ojol` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ojol_id` int(11) NOT NULL,
  `catat_produk_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of catat_produk_ojol
-- ----------------------------
INSERT INTO `catat_produk_ojol` VALUES ('8', '7', '1');
INSERT INTO `catat_produk_ojol` VALUES ('9', '7', '2');
INSERT INTO `catat_produk_ojol` VALUES ('12', '9', '1');
INSERT INTO `catat_produk_ojol` VALUES ('13', '9', '2');
INSERT INTO `catat_produk_ojol` VALUES ('14', '9', '4');

-- ----------------------------
-- Table structure for cities
-- ----------------------------
DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=476 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cities
-- ----------------------------
INSERT INTO `cities` VALUES ('1', 'CILEGON');
INSERT INTO `cities` VALUES ('2', 'LEBAK');
INSERT INTO `cities` VALUES ('3', 'PANDEGLANG');
INSERT INTO `cities` VALUES ('4', 'SERANG');
INSERT INTO `cities` VALUES ('5', 'TANGERANG');
INSERT INTO `cities` VALUES ('6', 'TANGERANG SELATAN');
INSERT INTO `cities` VALUES ('7', 'JAKARTA BARAT');
INSERT INTO `cities` VALUES ('8', 'JAKARTA PUSAT');
INSERT INTO `cities` VALUES ('9', 'JAKARTA SELATAN');
INSERT INTO `cities` VALUES ('10', 'JAKARTA TIMUR');
INSERT INTO `cities` VALUES ('11', 'JAKARTA UTARA');
INSERT INTO `cities` VALUES ('12', 'KEPULAUAN SERIBU');
INSERT INTO `cities` VALUES ('13', 'BANDUNG');
INSERT INTO `cities` VALUES ('14', 'BANDUNG BARAT');
INSERT INTO `cities` VALUES ('15', 'BANJAR');
INSERT INTO `cities` VALUES ('16', 'BEKASI');
INSERT INTO `cities` VALUES ('17', 'BOGOR');
INSERT INTO `cities` VALUES ('18', 'CIAMIS');
INSERT INTO `cities` VALUES ('19', 'CIANJUR');
INSERT INTO `cities` VALUES ('20', 'CIMAHI');
INSERT INTO `cities` VALUES ('21', 'CIREBON');
INSERT INTO `cities` VALUES ('22', 'DEPOK');
INSERT INTO `cities` VALUES ('23', 'GARUT');
INSERT INTO `cities` VALUES ('24', 'INDRAMAYU');
INSERT INTO `cities` VALUES ('25', 'KARAWANG');
INSERT INTO `cities` VALUES ('26', 'KUNINGAN');
INSERT INTO `cities` VALUES ('27', 'MAJALENGKA');
INSERT INTO `cities` VALUES ('28', 'PANGANDARAN');
INSERT INTO `cities` VALUES ('29', 'PURWAKARTA');
INSERT INTO `cities` VALUES ('30', 'SUBANG');
INSERT INTO `cities` VALUES ('31', 'SUKABUMI');
INSERT INTO `cities` VALUES ('32', 'SUMEDANG');
INSERT INTO `cities` VALUES ('33', 'TASIKMALAYA');
INSERT INTO `cities` VALUES ('34', 'BANJARNEGARA');
INSERT INTO `cities` VALUES ('35', 'BANYUMAS');
INSERT INTO `cities` VALUES ('36', 'BATANG');
INSERT INTO `cities` VALUES ('37', 'BLORA');
INSERT INTO `cities` VALUES ('38', 'BOYOLALI');
INSERT INTO `cities` VALUES ('39', 'BREBES');
INSERT INTO `cities` VALUES ('40', 'CILACAP');
INSERT INTO `cities` VALUES ('41', 'DEMAK');
INSERT INTO `cities` VALUES ('42', 'GROBOGAN');
INSERT INTO `cities` VALUES ('43', 'JEPARA');
INSERT INTO `cities` VALUES ('44', 'KARANGANYAR');
INSERT INTO `cities` VALUES ('45', 'KEBUMEN');
INSERT INTO `cities` VALUES ('46', 'KENDAL');
INSERT INTO `cities` VALUES ('47', 'KLATEN');
INSERT INTO `cities` VALUES ('48', 'KUDUS');
INSERT INTO `cities` VALUES ('49', 'MAGELANG');
INSERT INTO `cities` VALUES ('50', 'PATI');
INSERT INTO `cities` VALUES ('51', 'PEKALONGAN');
INSERT INTO `cities` VALUES ('52', 'PEMALANG');
INSERT INTO `cities` VALUES ('53', 'PURBALINGGA');
INSERT INTO `cities` VALUES ('54', 'PURWOREJO');
INSERT INTO `cities` VALUES ('55', 'REMBANG');
INSERT INTO `cities` VALUES ('56', 'SALATIGA');
INSERT INTO `cities` VALUES ('57', 'SEMARANG');
INSERT INTO `cities` VALUES ('58', 'SRAGEN');
INSERT INTO `cities` VALUES ('59', 'SUKOHARJO');
INSERT INTO `cities` VALUES ('60', 'SURAKARTA (SOLO)');
INSERT INTO `cities` VALUES ('61', 'TEGAL');
INSERT INTO `cities` VALUES ('62', 'TEMANGGUNG');
INSERT INTO `cities` VALUES ('63', 'WONOGIRI');
INSERT INTO `cities` VALUES ('64', 'WONOSOBO');
INSERT INTO `cities` VALUES ('65', 'BANTUL');
INSERT INTO `cities` VALUES ('66', 'GUNUNG KIDUL');
INSERT INTO `cities` VALUES ('67', 'KULON PROGO');
INSERT INTO `cities` VALUES ('68', 'SLEMAN');
INSERT INTO `cities` VALUES ('69', 'YOGYAKARTA');
INSERT INTO `cities` VALUES ('70', 'BANGKALAN');
INSERT INTO `cities` VALUES ('71', 'BANYUWANGI');
INSERT INTO `cities` VALUES ('72', 'BATU');
INSERT INTO `cities` VALUES ('73', 'BLITAR');
INSERT INTO `cities` VALUES ('74', 'BOJONEGORO');
INSERT INTO `cities` VALUES ('75', 'BONDOWOSO');
INSERT INTO `cities` VALUES ('76', 'GRESIK');
INSERT INTO `cities` VALUES ('77', 'JEMBER');
INSERT INTO `cities` VALUES ('78', 'JOMBANG');
INSERT INTO `cities` VALUES ('79', 'KEDIRI');
INSERT INTO `cities` VALUES ('80', 'LAMONGAN');
INSERT INTO `cities` VALUES ('81', 'LUMAJANG');
INSERT INTO `cities` VALUES ('82', 'MADIUN');
INSERT INTO `cities` VALUES ('83', 'MAGETAN');
INSERT INTO `cities` VALUES ('84', 'MALANG');
INSERT INTO `cities` VALUES ('85', 'MOJOKERTO');
INSERT INTO `cities` VALUES ('86', 'NGANJUK');
INSERT INTO `cities` VALUES ('87', 'NGAWI');
INSERT INTO `cities` VALUES ('88', 'PACITAN');
INSERT INTO `cities` VALUES ('89', 'PAMEKASAN');
INSERT INTO `cities` VALUES ('90', 'PASURUAN');
INSERT INTO `cities` VALUES ('91', 'PONOROGO');
INSERT INTO `cities` VALUES ('92', 'PROBOLINGGO');
INSERT INTO `cities` VALUES ('93', 'SAMPANG');
INSERT INTO `cities` VALUES ('94', 'SIDOARJO');
INSERT INTO `cities` VALUES ('95', 'SITUBONDO');
INSERT INTO `cities` VALUES ('96', 'SUMENEP');
INSERT INTO `cities` VALUES ('97', 'SURABAYA');
INSERT INTO `cities` VALUES ('98', 'TRENGGALEK');
INSERT INTO `cities` VALUES ('99', 'TUBAN');
INSERT INTO `cities` VALUES ('100', 'TULUNGAGUNG');
INSERT INTO `cities` VALUES ('101', 'BADUNG');
INSERT INTO `cities` VALUES ('102', 'BANGLI');
INSERT INTO `cities` VALUES ('103', 'BULELENG');
INSERT INTO `cities` VALUES ('104', 'DENPASAR');
INSERT INTO `cities` VALUES ('105', 'GIANYAR');
INSERT INTO `cities` VALUES ('106', 'JEMBRANA');
INSERT INTO `cities` VALUES ('107', 'KARANGASEM');
INSERT INTO `cities` VALUES ('108', 'KLUNGKUNG');
INSERT INTO `cities` VALUES ('109', 'TABANAN');
INSERT INTO `cities` VALUES ('110', 'ACEH BARAT');
INSERT INTO `cities` VALUES ('111', 'ACEH BARAT DAYA');
INSERT INTO `cities` VALUES ('112', 'ACEH BESAR');
INSERT INTO `cities` VALUES ('113', 'ACEH JAYA');
INSERT INTO `cities` VALUES ('114', 'ACEH SELATAN');
INSERT INTO `cities` VALUES ('115', 'ACEH SINGKIL');
INSERT INTO `cities` VALUES ('116', 'ACEH TAMIANG');
INSERT INTO `cities` VALUES ('117', 'ACEH TENGAH');
INSERT INTO `cities` VALUES ('118', 'ACEH TENGGARA');
INSERT INTO `cities` VALUES ('119', 'ACEH TIMUR');
INSERT INTO `cities` VALUES ('120', 'ACEH UTARA');
INSERT INTO `cities` VALUES ('121', 'BANDA ACEH');
INSERT INTO `cities` VALUES ('122', 'BENER MERIAH');
INSERT INTO `cities` VALUES ('123', 'BIREUEN');
INSERT INTO `cities` VALUES ('124', 'GAYO LUES');
INSERT INTO `cities` VALUES ('125', 'LANGSA');
INSERT INTO `cities` VALUES ('126', 'LHOKSEUMAWE');
INSERT INTO `cities` VALUES ('127', 'NAGAN RAYA');
INSERT INTO `cities` VALUES ('128', 'PIDIE');
INSERT INTO `cities` VALUES ('129', 'PIDIE JAYA');
INSERT INTO `cities` VALUES ('130', 'SABANG');
INSERT INTO `cities` VALUES ('131', 'SIMEULUE');
INSERT INTO `cities` VALUES ('132', 'SUBULUSSALAM');
INSERT INTO `cities` VALUES ('133', 'ASAHAN');
INSERT INTO `cities` VALUES ('134', 'BATU BARA');
INSERT INTO `cities` VALUES ('135', 'BINJAI');
INSERT INTO `cities` VALUES ('136', 'DAIRI');
INSERT INTO `cities` VALUES ('137', 'DELI SERDANG');
INSERT INTO `cities` VALUES ('138', 'GUNUNGSITOLI');
INSERT INTO `cities` VALUES ('139', 'HUMBANG HASUNDUTAN');
INSERT INTO `cities` VALUES ('140', 'KARO');
INSERT INTO `cities` VALUES ('141', 'LABUHAN BATU');
INSERT INTO `cities` VALUES ('142', 'LABUHAN BATU SELATAN');
INSERT INTO `cities` VALUES ('143', 'LABUHAN BATU UTARA');
INSERT INTO `cities` VALUES ('144', 'LANGKAT');
INSERT INTO `cities` VALUES ('145', 'MANDAILING NATAL');
INSERT INTO `cities` VALUES ('146', 'MEDAN');
INSERT INTO `cities` VALUES ('147', 'NIAS');
INSERT INTO `cities` VALUES ('148', 'NIAS BARAT');
INSERT INTO `cities` VALUES ('149', 'NIAS SELATAN');
INSERT INTO `cities` VALUES ('150', 'NIAS UTARA');
INSERT INTO `cities` VALUES ('151', 'PADANG LAWAS');
INSERT INTO `cities` VALUES ('152', 'PADANG LAWAS UTARA');
INSERT INTO `cities` VALUES ('153', 'PADANG SIDEMPUAN');
INSERT INTO `cities` VALUES ('154', 'PAKPAK BHARAT');
INSERT INTO `cities` VALUES ('155', 'PEMATANG SIANTAR');
INSERT INTO `cities` VALUES ('156', 'SAMOSIR');
INSERT INTO `cities` VALUES ('157', 'SERDANG BEDAGAI');
INSERT INTO `cities` VALUES ('158', 'SIBOLGA');
INSERT INTO `cities` VALUES ('159', 'SIMALUNGUN');
INSERT INTO `cities` VALUES ('160', 'TANJUNG BALAI');
INSERT INTO `cities` VALUES ('161', 'TAPANULI SELATAN');
INSERT INTO `cities` VALUES ('162', 'TAPANULI TENGAH');
INSERT INTO `cities` VALUES ('163', 'TAPANULI UTARA');
INSERT INTO `cities` VALUES ('164', 'TEBING TINGGI');
INSERT INTO `cities` VALUES ('165', 'TOBA SAMOSIR');
INSERT INTO `cities` VALUES ('166', 'AGAM');
INSERT INTO `cities` VALUES ('167', 'BUKITTINGGI');
INSERT INTO `cities` VALUES ('168', 'DHARMASRAYA');
INSERT INTO `cities` VALUES ('169', 'KEPULAUAN MENTAWAI');
INSERT INTO `cities` VALUES ('170', 'LIMA PULUH KOTO/KOTA');
INSERT INTO `cities` VALUES ('171', 'PADANG');
INSERT INTO `cities` VALUES ('172', 'PADANG PANJANG');
INSERT INTO `cities` VALUES ('173', 'PADANG PARIAMAN');
INSERT INTO `cities` VALUES ('174', 'PARIAMAN');
INSERT INTO `cities` VALUES ('175', 'PASAMAN');
INSERT INTO `cities` VALUES ('176', 'PASAMAN BARAT');
INSERT INTO `cities` VALUES ('177', 'PAYAKUMBUH');
INSERT INTO `cities` VALUES ('178', 'PESISIR SELATAN');
INSERT INTO `cities` VALUES ('179', 'SAWAH LUNTO');
INSERT INTO `cities` VALUES ('180', 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)');
INSERT INTO `cities` VALUES ('181', 'SOLOK');
INSERT INTO `cities` VALUES ('182', 'SOLOK SELATAN');
INSERT INTO `cities` VALUES ('183', 'TANAH DATAR');
INSERT INTO `cities` VALUES ('184', 'BENGKALIS');
INSERT INTO `cities` VALUES ('185', 'DUMAI');
INSERT INTO `cities` VALUES ('186', 'INDRAGIRI HILIR');
INSERT INTO `cities` VALUES ('187', 'INDRAGIRI HULU');
INSERT INTO `cities` VALUES ('188', 'KAMPAR');
INSERT INTO `cities` VALUES ('189', 'KEPULAUAN MERANTI');
INSERT INTO `cities` VALUES ('190', 'KUANTAN SINGINGI');
INSERT INTO `cities` VALUES ('191', 'PEKANBARU');
INSERT INTO `cities` VALUES ('192', 'PELALAWAN');
INSERT INTO `cities` VALUES ('193', 'ROKAN HILIR');
INSERT INTO `cities` VALUES ('194', 'ROKAN HULU');
INSERT INTO `cities` VALUES ('195', 'SIAK');
INSERT INTO `cities` VALUES ('196', 'BATAM');
INSERT INTO `cities` VALUES ('197', 'BINTAN');
INSERT INTO `cities` VALUES ('198', 'KARIMUN');
INSERT INTO `cities` VALUES ('199', 'KEPULAUAN ANAMBAS');
INSERT INTO `cities` VALUES ('200', 'LINGGA');
INSERT INTO `cities` VALUES ('201', 'NATUNA');
INSERT INTO `cities` VALUES ('202', 'TANJUNG PINANG');
INSERT INTO `cities` VALUES ('203', 'BATANG HARI');
INSERT INTO `cities` VALUES ('204', 'BUNGO');
INSERT INTO `cities` VALUES ('205', 'JAMBI');
INSERT INTO `cities` VALUES ('206', 'KERINCI');
INSERT INTO `cities` VALUES ('207', 'MERANGIN');
INSERT INTO `cities` VALUES ('208', 'MUARO JAMBI');
INSERT INTO `cities` VALUES ('209', 'SAROLANGUN');
INSERT INTO `cities` VALUES ('210', 'SUNGAIPENUH');
INSERT INTO `cities` VALUES ('211', 'TANJUNG JABUNG BARAT');
INSERT INTO `cities` VALUES ('212', 'TANJUNG JABUNG TIMUR');
INSERT INTO `cities` VALUES ('213', 'TEBO');
INSERT INTO `cities` VALUES ('214', 'BENGKULU');
INSERT INTO `cities` VALUES ('215', 'BENGKULU SELATAN');
INSERT INTO `cities` VALUES ('216', 'BENGKULU TENGAH');
INSERT INTO `cities` VALUES ('217', 'BENGKULU UTARA');
INSERT INTO `cities` VALUES ('218', 'KAUR');
INSERT INTO `cities` VALUES ('219', 'KEPAHIANG');
INSERT INTO `cities` VALUES ('220', 'LEBONG');
INSERT INTO `cities` VALUES ('221', 'MUKO MUKO');
INSERT INTO `cities` VALUES ('222', 'REJANG LEBONG');
INSERT INTO `cities` VALUES ('223', 'SELUMA');
INSERT INTO `cities` VALUES ('224', 'BANYUASIN');
INSERT INTO `cities` VALUES ('225', 'EMPAT LAWANG');
INSERT INTO `cities` VALUES ('226', 'LAHAT');
INSERT INTO `cities` VALUES ('227', 'LUBUK LINGGAU');
INSERT INTO `cities` VALUES ('228', 'MUARA ENIM');
INSERT INTO `cities` VALUES ('229', 'MUSI BANYUASIN');
INSERT INTO `cities` VALUES ('230', 'MUSI RAWAS');
INSERT INTO `cities` VALUES ('231', 'OGAN ILIR');
INSERT INTO `cities` VALUES ('232', 'OGAN KOMERING ILIR');
INSERT INTO `cities` VALUES ('233', 'OGAN KOMERING ULU');
INSERT INTO `cities` VALUES ('234', 'OGAN KOMERING ULU SELATAN');
INSERT INTO `cities` VALUES ('235', 'OGAN KOMERING ULU TIMUR');
INSERT INTO `cities` VALUES ('236', 'PAGAR ALAM');
INSERT INTO `cities` VALUES ('237', 'PALEMBANG');
INSERT INTO `cities` VALUES ('238', 'PRABUMULIH');
INSERT INTO `cities` VALUES ('239', 'BANGKA');
INSERT INTO `cities` VALUES ('240', 'BANGKA BARAT');
INSERT INTO `cities` VALUES ('241', 'BANGKA SELATAN');
INSERT INTO `cities` VALUES ('242', 'BANGKA TENGAH');
INSERT INTO `cities` VALUES ('243', 'BELITUNG');
INSERT INTO `cities` VALUES ('244', 'BELITUNG TIMUR');
INSERT INTO `cities` VALUES ('245', 'PANGKAL PINANG');
INSERT INTO `cities` VALUES ('246', 'BANDAR LAMPUNG');
INSERT INTO `cities` VALUES ('247', 'LAMPUNG BARAT');
INSERT INTO `cities` VALUES ('248', 'LAMPUNG SELATAN');
INSERT INTO `cities` VALUES ('249', 'LAMPUNG TENGAH');
INSERT INTO `cities` VALUES ('250', 'LAMPUNG TIMUR');
INSERT INTO `cities` VALUES ('251', 'LAMPUNG UTARA');
INSERT INTO `cities` VALUES ('252', 'MESUJI');
INSERT INTO `cities` VALUES ('253', 'METRO');
INSERT INTO `cities` VALUES ('254', 'PESAWARAN');
INSERT INTO `cities` VALUES ('255', 'PESISIR BARAT');
INSERT INTO `cities` VALUES ('256', 'PRINGSEWU');
INSERT INTO `cities` VALUES ('257', 'TANGGAMUS');
INSERT INTO `cities` VALUES ('258', 'TULANG BAWANG');
INSERT INTO `cities` VALUES ('259', 'TULANG BAWANG BARAT');
INSERT INTO `cities` VALUES ('260', 'WAY KANAN');
INSERT INTO `cities` VALUES ('261', 'BENGKAYANG');
INSERT INTO `cities` VALUES ('262', 'KAPUAS HULU');
INSERT INTO `cities` VALUES ('263', 'KAYONG UTARA');
INSERT INTO `cities` VALUES ('264', 'KETAPANG');
INSERT INTO `cities` VALUES ('265', 'KUBU RAYA');
INSERT INTO `cities` VALUES ('266', 'LANDAK');
INSERT INTO `cities` VALUES ('267', 'MELAWI');
INSERT INTO `cities` VALUES ('268', 'PONTIANAK');
INSERT INTO `cities` VALUES ('269', 'SAMBAS');
INSERT INTO `cities` VALUES ('270', 'SANGGAU');
INSERT INTO `cities` VALUES ('271', 'SEKADAU');
INSERT INTO `cities` VALUES ('272', 'SINGKAWANG');
INSERT INTO `cities` VALUES ('273', 'SINTANG');
INSERT INTO `cities` VALUES ('274', 'BARITO SELATAN');
INSERT INTO `cities` VALUES ('275', 'BARITO TIMUR');
INSERT INTO `cities` VALUES ('276', 'BARITO UTARA');
INSERT INTO `cities` VALUES ('277', 'GUNUNG MAS');
INSERT INTO `cities` VALUES ('278', 'KAPUAS');
INSERT INTO `cities` VALUES ('279', 'KATINGAN');
INSERT INTO `cities` VALUES ('280', 'KOTAWARINGIN BARAT');
INSERT INTO `cities` VALUES ('281', 'KOTAWARINGIN TIMUR');
INSERT INTO `cities` VALUES ('282', 'LAMANDAU');
INSERT INTO `cities` VALUES ('283', 'MURUNG RAYA');
INSERT INTO `cities` VALUES ('284', 'PALANGKA RAYA');
INSERT INTO `cities` VALUES ('285', 'PULANG PISAU');
INSERT INTO `cities` VALUES ('286', 'SERUYAN');
INSERT INTO `cities` VALUES ('287', 'SUKAMARA');
INSERT INTO `cities` VALUES ('288', 'BALANGAN');
INSERT INTO `cities` VALUES ('289', 'BANJAR');
INSERT INTO `cities` VALUES ('290', 'BANJARBARU');
INSERT INTO `cities` VALUES ('291', 'BANJARMASIN');
INSERT INTO `cities` VALUES ('292', 'BARITO KUALA');
INSERT INTO `cities` VALUES ('293', 'HULU SUNGAI SELATAN');
INSERT INTO `cities` VALUES ('294', 'HULU SUNGAI TENGAH');
INSERT INTO `cities` VALUES ('295', 'HULU SUNGAI UTARA');
INSERT INTO `cities` VALUES ('296', 'KOTABARU');
INSERT INTO `cities` VALUES ('297', 'TABALONG');
INSERT INTO `cities` VALUES ('298', 'TANAH BUMBU');
INSERT INTO `cities` VALUES ('299', 'TANAH LAUT');
INSERT INTO `cities` VALUES ('300', 'TAPIN');
INSERT INTO `cities` VALUES ('301', 'BALIKPAPAN');
INSERT INTO `cities` VALUES ('302', 'BERAU');
INSERT INTO `cities` VALUES ('303', 'BONTANG');
INSERT INTO `cities` VALUES ('304', 'KUTAI BARAT');
INSERT INTO `cities` VALUES ('305', 'KUTAI KARTANEGARA');
INSERT INTO `cities` VALUES ('306', 'KUTAI TIMUR');
INSERT INTO `cities` VALUES ('307', 'PASER');
INSERT INTO `cities` VALUES ('308', 'PENAJAM PASER UTARA');
INSERT INTO `cities` VALUES ('309', 'SAMARINDA');
INSERT INTO `cities` VALUES ('310', 'BULUNGAN (BULONGAN)');
INSERT INTO `cities` VALUES ('311', 'MALINAU');
INSERT INTO `cities` VALUES ('312', 'NUNUKAN');
INSERT INTO `cities` VALUES ('313', 'TANA TIDUNG');
INSERT INTO `cities` VALUES ('314', 'TARAKAN');
INSERT INTO `cities` VALUES ('315', 'MAJENE');
INSERT INTO `cities` VALUES ('316', 'MAMASA');
INSERT INTO `cities` VALUES ('317', 'MAMUJU');
INSERT INTO `cities` VALUES ('318', 'MAMUJU UTARA');
INSERT INTO `cities` VALUES ('319', 'POLEWALI MANDAR');
INSERT INTO `cities` VALUES ('320', 'BANTAENG');
INSERT INTO `cities` VALUES ('321', 'BARRU');
INSERT INTO `cities` VALUES ('322', 'BONE');
INSERT INTO `cities` VALUES ('323', 'BULUKUMBA');
INSERT INTO `cities` VALUES ('324', 'ENREKANG');
INSERT INTO `cities` VALUES ('325', 'GOWA');
INSERT INTO `cities` VALUES ('326', 'JENEPONTO');
INSERT INTO `cities` VALUES ('327', 'LUWU');
INSERT INTO `cities` VALUES ('328', 'LUWU TIMUR');
INSERT INTO `cities` VALUES ('329', 'LUWU UTARA');
INSERT INTO `cities` VALUES ('330', 'MAKASSAR');
INSERT INTO `cities` VALUES ('331', 'MAROS');
INSERT INTO `cities` VALUES ('332', 'PALOPO');
INSERT INTO `cities` VALUES ('333', 'PANGKAJENE KEPULAUAN');
INSERT INTO `cities` VALUES ('334', 'PAREPARE');
INSERT INTO `cities` VALUES ('335', 'PINRANG');
INSERT INTO `cities` VALUES ('336', 'SELAYAR (KEPULAUAN SELAYAR)');
INSERT INTO `cities` VALUES ('337', 'SIDENRENG RAPPANG/RAPANG');
INSERT INTO `cities` VALUES ('338', 'SINJAI');
INSERT INTO `cities` VALUES ('339', 'SOPPENG');
INSERT INTO `cities` VALUES ('340', 'TAKALAR');
INSERT INTO `cities` VALUES ('341', 'TANA TORAJA');
INSERT INTO `cities` VALUES ('342', 'TORAJA UTARA');
INSERT INTO `cities` VALUES ('343', 'WAJO');
INSERT INTO `cities` VALUES ('344', 'BAU-BAU');
INSERT INTO `cities` VALUES ('345', 'BOMBANA');
INSERT INTO `cities` VALUES ('346', 'BUTON');
INSERT INTO `cities` VALUES ('347', 'BUTON UTARA');
INSERT INTO `cities` VALUES ('348', 'KENDARI');
INSERT INTO `cities` VALUES ('349', 'KOLAKA');
INSERT INTO `cities` VALUES ('350', 'KOLAKA UTARA');
INSERT INTO `cities` VALUES ('351', 'KONAWE');
INSERT INTO `cities` VALUES ('352', 'KONAWE SELATAN');
INSERT INTO `cities` VALUES ('353', 'KONAWE UTARA');
INSERT INTO `cities` VALUES ('354', 'MUNA');
INSERT INTO `cities` VALUES ('355', 'WAKATOBI');
INSERT INTO `cities` VALUES ('356', 'BANGGAI');
INSERT INTO `cities` VALUES ('357', 'BANGGAI KEPULAUAN');
INSERT INTO `cities` VALUES ('358', 'BUOL');
INSERT INTO `cities` VALUES ('359', 'DONGGALA');
INSERT INTO `cities` VALUES ('360', 'MOROWALI');
INSERT INTO `cities` VALUES ('361', 'PALU');
INSERT INTO `cities` VALUES ('362', 'PARIGI MOUTONG');
INSERT INTO `cities` VALUES ('363', 'POSO');
INSERT INTO `cities` VALUES ('364', 'SIGI');
INSERT INTO `cities` VALUES ('365', 'TOJO UNA-UNA');
INSERT INTO `cities` VALUES ('366', 'TOLI-TOLI');
INSERT INTO `cities` VALUES ('367', 'BOALEMO');
INSERT INTO `cities` VALUES ('368', 'BONE BOLANGO');
INSERT INTO `cities` VALUES ('369', 'GORONTALO');
INSERT INTO `cities` VALUES ('370', 'GORONTALO UTARA');
INSERT INTO `cities` VALUES ('371', 'POHUWATO');
INSERT INTO `cities` VALUES ('372', 'BITUNG');
INSERT INTO `cities` VALUES ('373', 'BOLAANG MONGONDOW (BOLMONG)');
INSERT INTO `cities` VALUES ('374', 'BOLAANG MONGONDOW SELATAN');
INSERT INTO `cities` VALUES ('375', 'BOLAANG MONGONDOW TIMUR');
INSERT INTO `cities` VALUES ('376', 'BOLAANG MONGONDOW UTARA');
INSERT INTO `cities` VALUES ('377', 'KEPULAUAN SANGIHE');
INSERT INTO `cities` VALUES ('378', 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)');
INSERT INTO `cities` VALUES ('379', 'KEPULAUAN TALAUD');
INSERT INTO `cities` VALUES ('380', 'KOTAMOBAGU');
INSERT INTO `cities` VALUES ('381', 'MANADO');
INSERT INTO `cities` VALUES ('382', 'MINAHASA');
INSERT INTO `cities` VALUES ('383', 'MINAHASA SELATAN');
INSERT INTO `cities` VALUES ('384', 'MINAHASA TENGGARA');
INSERT INTO `cities` VALUES ('385', 'MINAHASA UTARA');
INSERT INTO `cities` VALUES ('386', 'TOMOHON');
INSERT INTO `cities` VALUES ('387', 'AMBON');
INSERT INTO `cities` VALUES ('388', 'BURU');
INSERT INTO `cities` VALUES ('389', 'BURU SELATAN');
INSERT INTO `cities` VALUES ('390', 'KEPULAUAN ARU');
INSERT INTO `cities` VALUES ('391', 'MALUKU BARAT DAYA');
INSERT INTO `cities` VALUES ('392', 'MALUKU TENGAH');
INSERT INTO `cities` VALUES ('393', 'MALUKU TENGGARA');
INSERT INTO `cities` VALUES ('394', 'MALUKU TENGGARA BARAT');
INSERT INTO `cities` VALUES ('395', 'SERAM BAGIAN BARAT');
INSERT INTO `cities` VALUES ('396', 'SERAM BAGIAN TIMUR');
INSERT INTO `cities` VALUES ('397', 'TUAL');
INSERT INTO `cities` VALUES ('398', 'HALMAHERA BARAT');
INSERT INTO `cities` VALUES ('399', 'HALMAHERA SELATAN');
INSERT INTO `cities` VALUES ('400', 'HALMAHERA TENGAH');
INSERT INTO `cities` VALUES ('401', 'HALMAHERA TIMUR');
INSERT INTO `cities` VALUES ('402', 'HALMAHERA UTARA');
INSERT INTO `cities` VALUES ('403', 'KEPULAUAN SULA');
INSERT INTO `cities` VALUES ('404', 'PULAU MOROTAI');
INSERT INTO `cities` VALUES ('405', 'TERNATE');
INSERT INTO `cities` VALUES ('406', 'TIDORE KEPULAUAN');
INSERT INTO `cities` VALUES ('407', 'BIMA');
INSERT INTO `cities` VALUES ('408', 'DOMPU');
INSERT INTO `cities` VALUES ('409', 'LOMBOK BARAT');
INSERT INTO `cities` VALUES ('410', 'LOMBOK TENGAH');
INSERT INTO `cities` VALUES ('411', 'LOMBOK TIMUR');
INSERT INTO `cities` VALUES ('412', 'LOMBOK UTARA');
INSERT INTO `cities` VALUES ('413', 'MATARAM');
INSERT INTO `cities` VALUES ('414', 'SUMBAWA');
INSERT INTO `cities` VALUES ('415', 'SUMBAWA BARAT');
INSERT INTO `cities` VALUES ('416', 'ALOR');
INSERT INTO `cities` VALUES ('417', 'BELU');
INSERT INTO `cities` VALUES ('418', 'ENDE');
INSERT INTO `cities` VALUES ('419', 'FLORES TIMUR');
INSERT INTO `cities` VALUES ('420', 'KUPANG');
INSERT INTO `cities` VALUES ('421', 'LEMBATA');
INSERT INTO `cities` VALUES ('422', 'MANGGARAI');
INSERT INTO `cities` VALUES ('423', 'MANGGARAI BARAT');
INSERT INTO `cities` VALUES ('424', 'MANGGARAI TIMUR');
INSERT INTO `cities` VALUES ('425', 'NAGEKEO');
INSERT INTO `cities` VALUES ('426', 'NGADA');
INSERT INTO `cities` VALUES ('427', 'ROTE NDAO');
INSERT INTO `cities` VALUES ('428', 'SABU RAIJUA');
INSERT INTO `cities` VALUES ('429', 'SIKKA');
INSERT INTO `cities` VALUES ('430', 'SUMBA BARAT');
INSERT INTO `cities` VALUES ('431', 'SUMBA BARAT DAYA');
INSERT INTO `cities` VALUES ('432', 'SUMBA TENGAH');
INSERT INTO `cities` VALUES ('433', 'SUMBA TIMUR');
INSERT INTO `cities` VALUES ('434', 'TIMOR TENGAH SELATAN');
INSERT INTO `cities` VALUES ('435', 'TIMOR TENGAH UTARA');
INSERT INTO `cities` VALUES ('436', 'FAKFAK');
INSERT INTO `cities` VALUES ('437', 'KAIMANA');
INSERT INTO `cities` VALUES ('438', 'MANOKWARI');
INSERT INTO `cities` VALUES ('439', 'MANOKWARI SELATAN');
INSERT INTO `cities` VALUES ('440', 'MAYBRAT');
INSERT INTO `cities` VALUES ('441', 'PEGUNUNGAN ARFAK');
INSERT INTO `cities` VALUES ('442', 'RAJA AMPAT');
INSERT INTO `cities` VALUES ('443', 'SORONG');
INSERT INTO `cities` VALUES ('444', 'SORONG SELATAN');
INSERT INTO `cities` VALUES ('445', 'TAMBRAUW');
INSERT INTO `cities` VALUES ('446', 'TELUK BINTUNI');
INSERT INTO `cities` VALUES ('447', 'TELUK WONDAMA');
INSERT INTO `cities` VALUES ('448', 'ASMAT');
INSERT INTO `cities` VALUES ('449', 'BIAK NUMFOR');
INSERT INTO `cities` VALUES ('450', 'BOVEN DIGOEL');
INSERT INTO `cities` VALUES ('451', 'DEIYAI (DELIYAI)');
INSERT INTO `cities` VALUES ('452', 'DOGIYAI');
INSERT INTO `cities` VALUES ('453', 'INTAN JAYA');
INSERT INTO `cities` VALUES ('454', 'JAYAPURA');
INSERT INTO `cities` VALUES ('455', 'JAYAWIJAYA');
INSERT INTO `cities` VALUES ('456', 'KEEROM');
INSERT INTO `cities` VALUES ('457', 'KEPULAUAN YAPEN (YAPEN WAROPEN)');
INSERT INTO `cities` VALUES ('458', 'LANNY JAYA');
INSERT INTO `cities` VALUES ('459', 'MAMBERAMO RAYA');
INSERT INTO `cities` VALUES ('460', 'MAMBERAMO TENGAH');
INSERT INTO `cities` VALUES ('461', 'MAPPI');
INSERT INTO `cities` VALUES ('462', 'MERAUKE');
INSERT INTO `cities` VALUES ('463', 'MIMIKA');
INSERT INTO `cities` VALUES ('464', 'NABIRE');
INSERT INTO `cities` VALUES ('465', 'NDUGA');
INSERT INTO `cities` VALUES ('466', 'PANIAI');
INSERT INTO `cities` VALUES ('467', 'PEGUNUNGAN BINTANG');
INSERT INTO `cities` VALUES ('468', 'PUNCAK');
INSERT INTO `cities` VALUES ('469', 'PUNCAK JAYA');
INSERT INTO `cities` VALUES ('470', 'SARMI');
INSERT INTO `cities` VALUES ('471', 'SUPIORI');
INSERT INTO `cities` VALUES ('472', 'TOLIKARA');
INSERT INTO `cities` VALUES ('473', 'WAROPEN');
INSERT INTO `cities` VALUES ('474', 'YAHUKIMO');
INSERT INTO `cities` VALUES ('475', 'YALIMO');

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('1', 'Hayyu', '087873772373', 'Jl. Dadali no 21', 'hayyu@gmail.com', '2020-11-26 11:55:48', '2020-11-26 11:55:48');
INSERT INTO `customers` VALUES ('2', 'Cakra', '087873772373', 'Jl. Bulao', 'cakra@gmail.com', '2020-11-26 11:56:58', '2020-11-26 11:56:58');

-- ----------------------------
-- Table structure for departemen
-- ----------------------------
DROP TABLE IF EXISTS `departemen`;
CREATE TABLE `departemen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_departemen` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) NOT NULL,
  `jumlah_kategori` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama` (`nama_departemen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of departemen
-- ----------------------------
INSERT INTO `departemen` VALUES ('1', 'Pull and Bear', '1', '0', null, '2020-11-26 04:45:56');
INSERT INTO `departemen` VALUES ('2', 'Centro', '2', null, '2020-11-19 06:49:54', '2020-11-19 06:49:54');
INSERT INTO `departemen` VALUES ('3', 'Uniqlo', '3', null, '2020-11-24 05:32:27', '2020-11-24 05:32:27');

-- ----------------------------
-- Table structure for deposit
-- ----------------------------
DROP TABLE IF EXISTS `deposit`;
CREATE TABLE `deposit` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_outlet` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal_deposit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_produk` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_outlet` (`nama_outlet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of deposit
-- ----------------------------
INSERT INTO `deposit` VALUES ('1', 'Slimily', 'Coba', '50000', '1bulan', '1606568420_2.jpg', '50000', 'aktif', 'Kemeja H&M', '2020-11-28 13:00:20', '2020-11-30 08:03:46');
INSERT INTO `deposit` VALUES ('2', 'Slimily', 'Test', '100000', '1bulan', '1606613286_2.jpg', '100000', 'aktif', null, '2020-11-29 01:28:06', '2020-11-29 02:28:21');
INSERT INTO `deposit` VALUES ('3', 'Slimily', 'Tester', '20000', '1bulan', '1606613478_5.jpg', '10000', 'off', null, '2020-11-29 01:31:18', '2020-11-29 02:28:30');
INSERT INTO `deposit` VALUES ('4', 'Slimily', 'b1', '50000', '1bulan', '1606613590_5.jpg', '50000', 'off', null, '2020-11-29 01:33:10', '2020-11-29 02:28:40');

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `harga_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('5', 'gojekin', 'inaktif', 'ayam', '1', '5', '5', '2020-11-24 13:23:19', '2020-11-24 13:23:19');
INSERT INTO `group` VALUES ('6', 'hore car holi', 'inaktif', 'rental mobil', '2', '6', '5', '2020-11-25 14:35:43', '2020-11-25 14:42:01');
INSERT INTO `group` VALUES ('7', 'bajugrosir', 'aktif', 'jual', '3', '6', '5', '2020-11-29 07:19:10', '2020-11-29 07:19:10');

-- ----------------------------
-- Table structure for harga
-- ----------------------------
DROP TABLE IF EXISTS `harga`;
CREATE TABLE `harga` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of harga
-- ----------------------------
INSERT INTO `harga` VALUES ('5', 'inaktif', 'sarung gajah duduk', 'sarung', '6', '1', '2020-11-24 12:50:46', '2020-11-30 05:44:36');
INSERT INTO `harga` VALUES ('6', 'aktif', 'bantal', 'good', '5', '1', '2020-11-25 03:57:33', '2020-11-25 03:57:33');
INSERT INTO `harga` VALUES ('7', 'aktif', 'baju', 'ok', '7', '1', '2020-11-30 03:55:16', '2020-11-30 03:55:16');

-- ----------------------------
-- Table structure for invoices
-- ----------------------------
DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `terbayar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoices_customer_id_foreign` (`customer_id`),
  CONSTRAINT `invoices_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of invoices
-- ----------------------------
INSERT INTO `invoices` VALUES ('1', '2', '0', null, '100000', '0', '2020-11-26 12:02:44', '2020-11-27 04:35:15');
INSERT INTO `invoices` VALUES ('2', '1', '0', null, '170000', '0', '2020-11-27 04:49:41', '2020-11-27 04:49:55');
INSERT INTO `invoices` VALUES ('5', '1', '0', null, '200000', '0', '2020-11-27 08:18:11', '2020-11-27 08:18:21');

-- ----------------------------
-- Table structure for invoice_details
-- ----------------------------
DROP TABLE IF EXISTS `invoice_details`;
CREATE TABLE `invoice_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoice_details_invoice_id_foreign` (`invoice_id`),
  KEY `invoice_details_product_id_foreign` (`product_id`),
  CONSTRAINT `invoice_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `invoice_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of invoice_details
-- ----------------------------
INSERT INTO `invoice_details` VALUES ('1', '1', '3', '100000', '1', '2020-11-27 04:35:14', '2020-11-27 04:35:14');
INSERT INTO `invoice_details` VALUES ('2', '2', '2', '35000', '2', '2020-11-27 04:49:47', '2020-11-27 04:49:47');
INSERT INTO `invoice_details` VALUES ('3', '2', '3', '100000', '1', '2020-11-27 04:49:55', '2020-11-27 04:49:55');
INSERT INTO `invoice_details` VALUES ('4', '5', '3', '100000', '2', '2020-11-27 08:18:21', '2020-11-27 08:18:21');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_outlet` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) NOT NULL,
  `jumlah_produk` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_departemen` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_departemen` (`nama_departemen`),
  KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'Slimily', 'Kemeja', '1', '', 'Uniqlo', null, '2020-11-24 14:04:18', '2020-11-28 12:18:02');
INSERT INTO `kategori` VALUES ('2', null, 'Blouse', '2', null, 'Uniqlo', null, '2020-11-25 04:26:06', '2020-11-25 04:26:06');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2020_10_13_061906_create_table_admin', '2');
INSERT INTO `migrations` VALUES ('4', '2020_11_10_054309_create_catat_produk_table', '3');
INSERT INTO `migrations` VALUES ('5', '2019_04_09_133004_create_customers_table', '4');
INSERT INTO `migrations` VALUES ('6', '2019_04_09_133023_create_products_table', '4');
INSERT INTO `migrations` VALUES ('7', '2019_04_09_133038_create_invoices_table', '4');
INSERT INTO `migrations` VALUES ('8', '2019_04_09_133106_create_invoice_details_table', '4');
INSERT INTO `migrations` VALUES ('9', '2019_04_09_135548_add_relationships_to_invoices_table', '4');
INSERT INTO `migrations` VALUES ('10', '2019_04_09_135843_add_relationships_to_invoice_details_table', '4');

-- ----------------------------
-- Table structure for ojol
-- ----------------------------
DROP TABLE IF EXISTS `ojol`;
CREATE TABLE `ojol` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_outlet` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ojol
-- ----------------------------
INSERT INTO `ojol` VALUES ('1', 'Slimily', 'Non-Aktif', 'Uber', 'testerr', null, '2020-11-29 09:46:21', '2020-11-29 03:14:04');
INSERT INTO `ojol` VALUES ('2', 'Slimily', 'Aktif', 'Grab', 'Punya Grab', 'Kemeja H&M', '2020-11-29 03:02:22', '2020-11-30 08:12:00');
INSERT INTO `ojol` VALUES ('3', 'Slimily', 'Aktif', 'Gojek', 'Punya Gojek', null, '2020-11-29 03:13:57', '2020-11-29 03:13:57');
INSERT INTO `ojol` VALUES ('7', 'Slimily', 'Aktif', 'Ojek ONLEN', 'tes synczz', null, '2020-12-05 09:56:19', '2020-12-05 10:42:22');
INSERT INTO `ojol` VALUES ('9', 'Slimily', 'Aktif', 'TES BARU', 'TES`', null, '2020-12-05 10:47:54', '2020-12-05 10:47:54');

-- ----------------------------
-- Table structure for outlet
-- ----------------------------
DROP TABLE IF EXISTS `outlet`;
CREATE TABLE `outlet` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_outlet` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_outlet` (`nama_outlet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of outlet
-- ----------------------------
INSERT INTO `outlet` VALUES ('1', 'Slimily', '2020-11-28 19:00:34', '2020-11-28 19:00:34');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_pelanggan` int(11) DEFAULT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `Alamat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pelanggan_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('4', '1', 'rania', '2020-11-03', 'rania@gmail.com', '9282288', '1', '5', 'Kepulauan Seribu', 'P', '2020-11-23 06:52:41', '2020-11-25 14:32:06');
INSERT INTO `pelanggan` VALUES ('6', '3', 'ardhelia', '2020-11-02', 'ardel@gmail.com', '0867898762', '15', '5', 'banjar', 'P', '2020-11-24 14:19:13', '2020-11-24 14:19:13');
INSERT INTO `pelanggan` VALUES ('7', '4', 'kuee', '2020-11-04', 'kuee@gmail.com', '08678987', '13', '5', 'bandung', 'P', '2020-11-26 05:52:47', '2020-11-26 05:52:47');
INSERT INTO `pelanggan` VALUES ('8', '5', 'burger', '2020-11-10', 'burge@gmail.com', '087654678', '1', '5', 'banyumas', 'L', '2020-11-26 05:55:44', '2020-11-26 05:56:06');
INSERT INTO `pelanggan` VALUES ('9', '6', 'benten', '2020-11-10', 'benita@gmail.com', '43454566', '1', '6', 'garut', 'P', '2020-11-29 07:15:53', '2020-12-01 15:25:41');
INSERT INTO `pelanggan` VALUES ('10', null, 'danang', '2020-11-04', 'danang@gmail.com', '0813234', '55', '6', 'banten', 'L', '2020-12-01 17:35:22', '2020-12-01 17:35:22');

-- ----------------------------
-- Table structure for pengirimans
-- ----------------------------
DROP TABLE IF EXISTS `pengirimans`;
CREATE TABLE `pengirimans` (
  `id` int(10) unsigned NOT NULL,
  `id_pesanan` int(10) unsigned NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `catatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pesanan` (`id_pesanan`),
  CONSTRAINT `pengirimans_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengirimans
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('2', 'Kaos Polos', 'Kaos oblong', '35000', '24', '2020-11-26 11:57:34', '2020-11-26 11:57:34');
INSERT INTO `products` VALUES ('3', 'Jaket Hoodie', 'Jaket kupluk', '100000', '12', '2020-11-26 11:58:06', '2020-11-26 11:58:06');
INSERT INTO `products` VALUES ('4', 'jaket', 'dd1', '100000', '21', '2020-11-27 08:17:57', '2020-11-27 08:17:57');

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of produk
-- ----------------------------

-- ----------------------------
-- Table structure for produkvar_table
-- ----------------------------
DROP TABLE IF EXISTS `produkvar_table`;
CREATE TABLE `produkvar_table` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_produkvar` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carapilih` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihanvar` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_modal` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_produkvar` (`nama_produkvar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of produkvar_table
-- ----------------------------
INSERT INTO `produkvar_table` VALUES ('1', 'Color', 'pilihbanyak', 'White', '1000', '2000', '2020-11-28 02:25:30', '2020-11-28 11:55:14');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'administrator', '2020-11-09 14:33:11');
INSERT INTO `roles` VALUES ('2', 'staff', '2020-11-09 14:33:11');
INSERT INTO `roles` VALUES ('3', 'finance', '2020-11-09 14:33:11');
INSERT INTO `roles` VALUES ('4', 'karyawan', '2020-11-09 14:33:11');

-- ----------------------------
-- Table structure for satuan
-- ----------------------------
DROP TABLE IF EXISTS `satuan`;
CREATE TABLE `satuan` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_satuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_satuan` (`nama_satuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of satuan
-- ----------------------------
INSERT INTO `satuan` VALUES ('1', 'Batang', '2020-11-27 11:17:33', '2020-11-27 11:17:33');
INSERT INTO `satuan` VALUES ('2', 'Boks', '2020-11-27 11:22:05', '2020-11-27 11:22:05');
INSERT INTO `satuan` VALUES ('3', 'Botol', '2020-11-27 11:17:33', '2020-11-27 11:17:33');
INSERT INTO `satuan` VALUES ('4', 'Buah', '2020-11-27 11:17:33', '2020-11-27 11:17:33');
INSERT INTO `satuan` VALUES ('5', 'Pieces', '2020-11-27 11:17:33', '2020-11-27 11:17:33');
INSERT INTO `satuan` VALUES ('6', 'Lembar', '2020-11-27 11:17:33', '2020-11-27 11:17:33');

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES ('1', 'aktif', '2020-11-09 09:45:27', '2020-11-17 09:45:27');
INSERT INTO `status` VALUES ('2', 'inaktif', '2020-11-10 09:45:27', '2020-11-11 09:45:27');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'Ardhelia', 'ardhelia@gmail.com', null, '$2y$10$e6sdVpiyLzb3qaoWJS6piOowgyf6PS4jRvBm2FtTsigXwusNuo/OG', 'I6ULQTvOcmccrnA3iuMgkDwPiLm6FOVC3ffGP8OAUCEXmnb4OMUDl7k5ftSO', '2020-10-12 07:15:33', '2020-10-12 07:15:33');
INSERT INTO `users` VALUES ('20', '1', 'Fatma', 'fatma@gmail.com', null, '$2y$10$/k.r4rQJFdfLEYpNgxXH4ugAnr0Vgg2fAMz9R2wlgVcETLORuf.Dm', 'YwnI6xZfhNsiCPdbe99S4t5bgKMc4kwjIUfpm8D3BkMwhrkUrs9fMOhkoDby', '2020-10-14 05:38:49', '2020-10-14 05:38:49');
INSERT INTO `users` VALUES ('23', '1', 'Daffa Muhammad', 'daffa@gmail.com', null, '$2y$10$K96LUjizuz.9BJbu12BiOODR0G50jvFsca04YoH9lOFmrAsO8g4Te', 'fMYdUvhwCAfw1q6URMLAGLWDBGkCd4Jv7HZuXRUwDC7aIhn55eNjuV55V8uP', '2020-10-21 05:01:52', '2020-10-21 05:01:52');
INSERT INTO `users` VALUES ('24', '2', 'Topik', 'taufikismail@gmail.com', null, '$2y$10$GU/Emub6gSdACsjehetc8OgM8U7x7eLViLYSsAHO95jcjFL1IzxuS', 'QgLQQ5qPn3xOfJN8rI1SC9F4R0m65XHIIENHEPfIptyrS7kH5ylFKK98TSO5', '2020-11-09 08:53:06', '2020-11-09 08:53:06');
INSERT INTO `users` VALUES ('25', '2', 'Bondan', 'bondap@gmail.com', null, '$2y$10$fhsg4Xn8QDJNW2ue/fA8TeP3UR7GM4MBitxG5yiFCxxc7Vvyw8FB2', 'oKuPMNcb5yQc5P5XDcLV79b8hwN3I2NxxwbKXaomabpk4C44v4qLMEMaUVhC', '2020-11-09 10:35:09', '2020-11-09 10:35:09');
INSERT INTO `users` VALUES ('28', '2', 'Prima', 'prima@gmail.com', null, '$2y$10$QyDrIvub2Z1rx1QAzQdKK.qCtLQYdLJNDMgJrY1.dDxJNvboxOBAG', 'Sx3PT8LavpV4qHiRCs3VgfthlaO6H22z7vhZrvoJ4B8QhwIixYOIGMlqy93s', '2020-11-09 11:05:45', '2020-11-09 11:05:45');
INSERT INTO `users` VALUES ('29', '2', 'Amsal', 'amsal@gmail.com', null, '$2y$10$t.shjozLTPCuW36OeAG7.eFLEN3iWJLHK/ddLUHSLwq894w7IYB/S', 'FTSJUWEMAQXMUjCX81p0HtI1vVtNbPVvh2ztrbfkFPGMzxecxO9jgSynVIpK', '2020-11-09 11:28:41', '2020-11-09 11:28:41');
INSERT INTO `users` VALUES ('30', '2', 'Hayu', 'hayu@gmail.com', null, '$2y$10$k4DVmMk0aD950.wVdIk2r.Lyst4RO67cs1wEf0A84crRdCsdBXnK.', 'Q0A2SjqtAWCaRRerXGs1y2JhxpPfdJ6yDLETE0xoeqgRkX4Hc3r8zeLTadXi', '2020-11-09 11:29:30', '2020-11-09 11:29:30');
INSERT INTO `users` VALUES ('31', '3', 'Bisma', 'bisma@gmail.com', null, '$2y$10$atv/5G1UfquvLGANpV9wue5AtLvr3iPYk6eh0vWNku39QJEdpG8PS', 'kTmbHrRxViY0cm4gkRcCNNGsM6jhqPcN2ieiz4yLZQO3CVPwOjF4HowMg0aM', '2020-11-09 11:30:52', '2020-11-09 11:30:52');
INSERT INTO `users` VALUES ('37', '2', 'bisa', 'bisa@gmail.com', null, '$2y$10$w5yXSM5hvH/ouCQBb9XgIetr8tGmbj5Gn4IkBdKYuucQzRHY6YvFa', 'C7oLsg1FSLJO5VgujQEYFKlu5swc4zCsgNS6V4IjAylVVAQJzr2QLiKNw69T', '2020-11-09 12:04:32', '2020-11-09 12:04:32');
