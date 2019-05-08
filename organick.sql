-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 08 May 2019, 09:04:45
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
  `orani` int(2) DEFAULT NULL,
  `indirim_bas` date DEFAULT NULL,
  `indirim_son` date DEFAULT NULL,
  `guncel_fiyat` float DEFAULT NULL,
  PRIMARY KEY (`indirim_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `indirim`
--

INSERT INTO `indirim` (`indirim_id`, `stok_mik`, `orani`, `indirim_bas`, `indirim_son`, `guncel_fiyat`) VALUES
(1, 20, 10, '2019-04-30', '2019-04-03', 11),
(2, 30, 5, '2019-04-30', '2019-05-05', 5),
(3, 5, 2, '2019-04-30', '2015-05-01', 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_adi`) VALUES
(1, 'sebze'),
(2, 'yesillik'),
(3, 'meyve'),
(4, 'salca_sirke'),
(5, 'kuru_bakliyat');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_kayit`
--

DROP TABLE IF EXISTS `kullanici_kayit`;
CREATE TABLE IF NOT EXISTS `kullanici_kayit` (
  `kullanici_id` int(3) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `e_posta` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogum_tarihi` date DEFAULT NULL,
  `parola` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `cinsiyet` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  `role_id` int(1) DEFAULT NULL,
  PRIMARY KEY (`kullanici_id`),
  KEY `kayit_tur` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici_kayit`
--

INSERT INTO `kullanici_kayit` (`kullanici_id`, `ad_soyad`, `telefon`, `e_posta`, `dogum_tarihi`, `parola`, `cinsiyet`, `role_id`) VALUES
(12, 'ceren', '2356778', 'crnurkn@gmail.com', '2019-04-30', '11', 'Kadın', 3),
(25, 'darya ataalp', '5374327865', 'dry@gmail.com', '1998-02-23', 'dartya', 'Kadın', 3),
(26, 'esra börek', '4567865432', 'borek@gmail.com', '1998-08-30', 'esra', 'Kadın', 2),
(27, 'can aydın', '5394508754', 'canaydinn@gmail.com', '1988-11-28', 'canaydın', 'Erkek', 3),
(28, 'yusra senem', '2334532', 'senem@gmail.com', '1992-04-30', '12wqqe', 'Kadın', 3),
(29, 'semih yarar', '5463231234', 'kuzu@gmail.com', '1997-07-30', 'kuzu', 'Erkek', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_siparis`
--

DROP TABLE IF EXISTS `kullanici_siparis`;
CREATE TABLE IF NOT EXISTS `kullanici_siparis` (
  `kullanici_id` int(3) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  KEY `kullanici_id` (`kullanici_id`),
  KEY `siparis_id` (`siparis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici_siparis`
--

INSERT INTO `kullanici_siparis` (`kullanici_id`, `siparis_id`) VALUES
(12, 6);

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
  `toplam_odeme` int(5) DEFAULT NULL,
  PRIMARY KEY (`odeme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odemeler`
--

INSERT INTO `odemeler` (`odeme_id`, `fatura`, `calisan`, `arac`, `ofis`, `ilaclama`, `toplam_odeme`) VALUES
(1, 100, 75, 80, 0, 70, 325);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(1) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gorev` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`role_id`, `kullanici`, `gorev`, `tarih`) VALUES
(1, 'super_admin', 'super_admin_giris', '2019-04-25'),
(2, 'admin', 'admin_giris', '2019-04-25'),
(3, 'musteri', 'msteri_giris', '2019-04-25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE IF NOT EXISTS `siparisler` (
  `siparis_id` int(11) NOT NULL AUTO_INCREMENT,
  `siparis_kilo` int(3) DEFAULT NULL,
  `toplam_fiyat` int(4) DEFAULT NULL,
  `siparis_tarihi` date DEFAULT NULL,
  `tedarik_durumu` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`siparis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`siparis_id`, `siparis_kilo`, `toplam_fiyat`, `siparis_tarihi`, `tedarik_durumu`) VALUES
(6, 3, 24, '2019-05-06', 'onay');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_indirim`
--

DROP TABLE IF EXISTS `urun_indirim`;
CREATE TABLE IF NOT EXISTS `urun_indirim` (
  `urun_id` int(255) DEFAULT NULL,
  `indirim_id` int(3) DEFAULT NULL,
  KEY `urun_id` (`urun_id`),
  KEY `indirim_id` (`indirim_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_indirim`
--

INSERT INTO `urun_indirim` (`urun_id`, `indirim_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_kayit`
--

DROP TABLE IF EXISTS `urun_kayit`;
CREATE TABLE IF NOT EXISTS `urun_kayit` (
  `urun_id` int(225) NOT NULL AUTO_INCREMENT,
  `urun_ad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `fiyat` int(11) DEFAULT NULL,
  `stok_miktari` int(11) DEFAULT NULL,
  PRIMARY KEY (`urun_id`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_kayit`
--

INSERT INTO `urun_kayit` (`urun_id`, `urun_ad`, `kategori_id`, `fiyat`, `stok_miktari`) VALUES
(1, 'domates', 1, 12, 100),
(2, 'çilek', 3, 20, 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_siparis`
--

DROP TABLE IF EXISTS `urun_siparis`;
CREATE TABLE IF NOT EXISTS `urun_siparis` (
  `urun_id` int(255) DEFAULT NULL,
  `siparis_id` int(11) DEFAULT NULL,
  KEY `siparis_id` (`siparis_id`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_siparis`
--

INSERT INTO `urun_siparis` (`urun_id`, `siparis_id`) VALUES
(1, 6);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kullanici_kayit`
--
ALTER TABLE `kullanici_kayit`
  ADD CONSTRAINT `sss` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `kullanici_siparis`
--
ALTER TABLE `kullanici_siparis`
  ADD CONSTRAINT `swd` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici_kayit` (`kullanici_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wrw` FOREIGN KEY (`siparis_id`) REFERENCES `siparisler` (`siparis_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urun_indirim`
--
ALTER TABLE `urun_indirim`
  ADD CONSTRAINT `sdgfh` FOREIGN KEY (`urun_id`) REFERENCES `urun_kayit` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `srh` FOREIGN KEY (`indirim_id`) REFERENCES `indirim` (`indirim_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urun_kayit`
--
ALTER TABLE `urun_kayit`
  ADD CONSTRAINT `xzv` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urun_siparis`
--
ALTER TABLE `urun_siparis`
  ADD CONSTRAINT `adöd` FOREIGN KEY (`urun_id`) REFERENCES `urun_kayit` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adödfef` FOREIGN KEY (`siparis_id`) REFERENCES `siparisler` (`siparis_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
