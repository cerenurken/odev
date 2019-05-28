-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 28 May 2019, 05:05:34
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `organick`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `indirim`
--

DROP TABLE IF EXISTS `indirim`;
CREATE TABLE IF NOT EXISTS `indirim` (
  `indirim_id` int(3) NOT NULL AUTO_INCREMENT,
  `stok_mik` int(4) DEFAULT NULL,
  `urun_id` int(255) DEFAULT NULL,
  `indirim_bas` date DEFAULT NULL,
  `indirim_son` date DEFAULT NULL,
  `guncel_fiyat` float DEFAULT NULL,
  PRIMARY KEY (`indirim_id`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `indirim`
--

INSERT INTO `indirim` (`indirim_id`, `stok_mik`, `urun_id`, `indirim_bas`, `indirim_son`, `guncel_fiyat`) VALUES
(29, 5, 29, '2019-06-12', '2018-06-14', 4),
(30, 4, 28, '2019-05-13', '2019-05-14', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_adi`) VALUES
(1, 'sebze'),
(2, 'yesillik'),
(3, 'meyve'),
(4, 'kuru_bakliyat');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_kayit`
--

DROP TABLE IF EXISTS `kullanici_kayit`;
CREATE TABLE IF NOT EXISTS `kullanici_kayit` (
  `musteri_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `e_posta` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogum_tarihi` date DEFAULT NULL,
  `parola` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `cinsiyet` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`musteri_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici_kayit`
--

INSERT INTO `kullanici_kayit` (`musteri_id`, `ad_soyad`, `telefon`, `e_posta`, `adres`, `dogum_tarihi`, `parola`, `cinsiyet`) VALUES
(12, 'ceren ürken', '2356778', 'crnurkn@gmail.com', 'görece cumhuriyet mahallesi ahmet kackınoglu cad.no :7', '2019-04-30', '11', 'Kadın'),
(25, 'darya ataalp', '5374327865', 'dry@gmail.com', 'menderes mahallesi rıfat bey caddesi no :19', '1998-02-23', 'dartya', 'Kadın'),
(34, 'semih yarar', '5465432321', 'kuzu@gmail.com', 'hürriyet mahallesi  yavuzsultan selim caddesi no :10', '1997-07-30', 'boo', 'Erkek'),
(35, 'hükümran çelik', '5463231234', 'hkmrn@gmail.com', 'buca mahallesi  kanuni  caddesi no :10', '1995-01-16', '123456', 'Erkek'),
(36, 'esra börek', '5432133423', 'borek@gmail.com', 'selanil mahallesi  burasıyok  caddesi no :10', '1997-01-01', '234', 'Kadın'),
(37, 'behlül kacak', '5463231234', 'bb@bb.com', 'hürriyet mahallesi  yavuzsultan selim caddesi no :10', '1995-02-12', '334', 'Erkek'),
(38, 'aliye farms', '54632312347', 'kuzu@gmail.com', 'hürriyet mahallesi  yavuzsultan selim caddesi no :10', '1993-04-12', 'cxsd', 'Kadın'),
(39, 'yüşra senem', '345564332', 'yanmistoprak@yusra.com', 'yanmıslar mah.yüşralar.cad. no 62', '1997-02-23', 'yusra', 'Kadın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemeler`
--

DROP TABLE IF EXISTS `odemeler`;
CREATE TABLE IF NOT EXISTS `odemeler` (
  `odeme_id` int(11) NOT NULL AUTO_INCREMENT,
  `fatura` int(5) DEFAULT NULL,
  `calisan` int(5) DEFAULT NULL,
  `arac` int(5) DEFAULT NULL,
  `ofis` int(5) DEFAULT NULL,
  `ilaclama` int(5) DEFAULT NULL,
  `odeme_tarihi` date DEFAULT NULL,
  `toplam` int(10) DEFAULT NULL,
  PRIMARY KEY (`odeme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odemeler`
--

INSERT INTO `odemeler` (`odeme_id`, `fatura`, `calisan`, `arac`, `ofis`, `ilaclama`, `odeme_tarihi`, `toplam`) VALUES
(15, 100, 30, 20, 30, 50, '2019-01-28', 230),
(16, 120, 30, 50, 0, 80, '2019-02-28', 280),
(17, 80, 0, 0, 0, 20, '2019-03-28', 100),
(19, 120, 50, 20, 0, 100, '2019-04-27', 290),
(20, 50, 30, 0, 50, 50, '2019-05-24', 180);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `silinen_urunler`
--

DROP TABLE IF EXISTS `silinen_urunler`;
CREATE TABLE IF NOT EXISTS `silinen_urunler` (
  `urun_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` float NOT NULL,
  `tarih` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `silinen_urunler`
--

INSERT INTO `silinen_urunler` (`urun_ad`, `fiyat`, `tarih`) VALUES
('kabak', 5, '2019-05-19'),
('nohut', 10, '2019-05-19'),
('maydonoz', 3, '2019-05-19'),
('krokan', 65, '2019-05-20'),
('ıspanak', 3, '2019-05-20'),
('lahana', 4, '2019-05-20'),
('nar', 8, '2019-05-27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE IF NOT EXISTS `siparisler` (
  `siparis_id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `miktar` float NOT NULL,
  `birim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `birim_fiyat` decimal(15,2) NOT NULL,
  `ekleme_tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`siparis_id`),
  KEY `musteri_id` (`musteri_id`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`siparis_id`, `musteri_id`, `urun_id`, `miktar`, `birim`, `birim_fiyat`, `ekleme_tarih`) VALUES
(49, 12, 38, 7.5, 'kg', '7.00', '2019-01-02 13:49:34'),
(50, 35, 40, 6, 'adet', '5.00', '2019-01-10 15:40:33'),
(56, 25, 43, 12, 'kg', '6.00', '2019-01-11 09:43:23'),
(57, 38, 43, 9, 'kg', '6.00', '2019-01-11 14:56:24'),
(58, 39, 42, 15, 'adet', '0.30', '2019-01-18 12:43:44'),
(59, 38, 41, 7.5, 'kg', '4.00', '2019-01-21 11:53:18'),
(60, 34, 36, 4.5, 'kg', '3.00', '2019-01-22 10:51:42'),
(61, 36, 28, 1, 'kg', '7.00', '2019-01-23 08:37:36'),
(62, 35, 28, 1, 'kg', '7.00', '2019-01-23 13:16:30'),
(64, 37, 40, 1, 'adet', '5.00', '2019-02-02 10:46:56'),
(65, 12, 41, 1, 'kg', '4.00', '2019-02-02 11:37:48'),
(67, 37, 29, 1, 'kg', '15.00', '2019-02-07 12:18:33'),
(69, 34, 36, 4.5, 'kg', '3.00', '2019-02-07 12:22:05'),
(70, 12, 38, 3.5, 'kg', '7.00', '2019-02-08 12:24:32'),
(72, 37, 38, 3.5, 'kg', '7.00', '2019-02-10 12:27:20'),
(100, 38, 28, 2, 'kg', '7.00', '2019-02-12 13:44:02'),
(101, 36, 38, 1, 'kg', '7.00', '2019-02-12 13:44:02'),
(102, 38, 28, 2, 'kg', '7.00', '2019-02-18 13:44:31'),
(103, 25, 38, 1, 'kg', '7.00', '2019-02-20 13:44:31'),
(113, 34, 39, 1, 'kg', '17.00', '2019-02-20 13:51:00'),
(114, 39, 40, 2, 'adet', '5.00', '2019-02-20 13:51:00'),
(115, 35, 39, 1, 'kg', '17.00', '2019-02-22 13:52:07'),
(116, 36, 40, 2, 'adet', '5.00', '2019-02-28 13:52:07'),
(117, 39, 28, 1, 'kg', '7.00', '2019-02-28 13:53:23'),
(118, 37, 28, 1, 'kg', '7.00', '2019-02-28 13:54:59'),
(119, 39, 29, 1, 'kg', '15.00', '2019-02-28 14:01:08'),
(120, 39, 28, 1, 'kg', '7.00', '2019-03-01 14:01:08'),
(121, 38, 29, 2.5, 'kg', '15.00', '2019-03-01 14:02:27'),
(122, 39, 28, 1.5, 'kg', '7.00', '2019-03-01 14:02:28'),
(123, 34, 41, 1, 'kg', '4.00', '2019-03-03 07:40:40'),
(124, 37, 40, 2, 'adet', '5.00', '2019-03-05 07:40:40'),
(125, 39, 46, 1, 'kg', '17.00', '2019-03-10 10:02:07'),
(127, 37, 47, 1, 'kg', '8.00', '2019-03-10 14:42:31'),
(128, 36, 44, 8, 'adet', '0.25', '2019-03-10 14:42:31'),
(129, 39, 38, 1, 'kg', '7.00', '2019-03-10 15:07:26'),
(130, 25, 45, 2, 'kg', '20.00', '2019-03-13 15:08:15'),
(131, 35, 44, 3, 'adet', '0.25', '2019-03-13 15:11:28'),
(132, 38, 38, 2, 'kg', '7.00', '2019-03-20 08:28:19'),
(133, 12, 36, 4, 'kg', '3.00', '2019-04-01 09:36:32'),
(134, 39, 40, 2, 'adet', '2.25', '2019-04-01 08:02:00'),
(135, 35, 39, 1, 'kg', '17.00', '2019-04-10 15:02:00'),
(136, 25, 47, 3, 'kg', '8.00', '2019-04-11 11:56:31'),
(137, 25, 44, 2, 'adet', '0.25', '2019-04-12 13:21:31'),
(138, 36, 36, 2, 'kg', '3.00', '2019-04-17 15:31:58'),
(139, 36, 29, 4, 'kg', '8.00', '2019-04-19 20:04:58'),
(140, 25, 47, 3, 'kg', '8.00', '2019-04-27 09:06:01'),
(141, 37, 41, 5, 'kg', '8.00', '2019-04-27 13:45:04'),
(142, 34, 47, 7, 'kg', '8.00', '2019-04-29 20:11:06'),
(143, 25, 45, 5, 'kg', '20.00', '2019-05-27 20:11:06'),
(144, 12, 45, 8, 'kg', '20.00', '2019-05-27 20:11:43'),
(145, 36, 28, 5, 'kg', '7.00', '2019-05-27 20:12:06'),
(146, 38, 28, 4, 'kg', '7.00', '2019-05-27 20:12:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_guncelleme`
--

DROP TABLE IF EXISTS `urun_guncelleme`;
CREATE TABLE IF NOT EXISTS `urun_guncelleme` (
  `urun_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` float NOT NULL,
  `stok_miktari` int(11) NOT NULL,
  `tarih` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_guncelleme`
--

INSERT INTO `urun_guncelleme` (`urun_ad`, `fiyat`, `stok_miktari`, `tarih`) VALUES
('nar', 12, 10, '2019-05-19'),
('domates', 12, 5, '2019-05-19'),
('kiraz', 10, 100, '2019-05-19'),
('erik', 12, 6, '2019-05-27'),
('kuru fasulye', 12, 30, '2019-05-27'),
('sogan', 5, 60, '2019-05-27'),
('marul', 5, 11, '2019-05-27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_kayit`
--

DROP TABLE IF EXISTS `urun_kayit`;
CREATE TABLE IF NOT EXISTS `urun_kayit` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_ad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `birim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `stok_miktari` int(11) DEFAULT NULL,
  PRIMARY KEY (`urun_id`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_kayit`
--

INSERT INTO `urun_kayit` (`urun_id`, `urun_ad`, `kategori_id`, `fiyat`, `birim`, `stok_miktari`) VALUES
(28, 'biber', 1, 7, 'kg', 48),
(29, 'erik', 3, 8, 'kg', 6),
(36, 'domates', 1, 3, 'kg', 16),
(38, 'kiraz', 3, 7, 'kg', 4),
(39, 'nohut', 4, 17, 'kg', 20),
(40, 'marul', 2, 2.25, 'adet', 11),
(41, 'kabak', 1, 4, 'kg', 67),
(42, 'maydonoz', 2, 0.3, 'adet', 8),
(43, 'muz', 3, 6, 'kg', 57),
(44, 'dere otu', 1, 0.25, 'adet', 50),
(45, 'kuru fasulye', 4, 20, 'kg', 30),
(46, 'nar', 3, 17, 'kg', 12),
(47, 'sogan', 1, 8, 'kg', 60);

--
-- Tetikleyiciler `urun_kayit`
--
DROP TRIGGER IF EXISTS `silinen_urunler`;
DELIMITER $$
CREATE TRIGGER `silinen_urunler` BEFORE DELETE ON `urun_kayit` FOR EACH ROW INSERT INTO `silinen_urunler`(`urun_ad`, `fiyat`, `tarih`) VALUES (old.urun_ad,old.fiyat,now())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `urun_guncelleme`;
DELIMITER $$
CREATE TRIGGER `urun_guncelleme` BEFORE UPDATE ON `urun_kayit` FOR EACH ROW INSERT INTO `urun_guncelleme`(`urun_ad`, `fiyat`, `stok_miktari`, `tarih`) VALUES (old.urun_ad,old.fiyat,old.stok_miktari,now())
$$
DELIMITER ;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `indirim`
--
ALTER TABLE `indirim`
  ADD CONSTRAINT `rsyh` FOREIGN KEY (`urun_id`) REFERENCES `urun_kayit` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `siparisler`
--
ALTER TABLE `siparisler`
  ADD CONSTRAINT `lşgs` FOREIGN KEY (`urun_id`) REFERENCES `urun_kayit` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lşgsgfg` FOREIGN KEY (`musteri_id`) REFERENCES `kullanici_kayit` (`musteri_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urun_kayit`
--
ALTER TABLE `urun_kayit`
  ADD CONSTRAINT `xzv` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
