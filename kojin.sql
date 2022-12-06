-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022-12-06 05:22:15
-- サーバのバージョン： 10.4.25-MariaDB
-- PHP のバージョン: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `shop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kojin`
--

CREATE TABLE `kojin` (
  `ID` int(11) NOT NULL,
  `simei` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hurigana` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `yubinbangou` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `jushou` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `denwabangou` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `emeiru` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kojin`
--

INSERT INTO `kojin` (`ID`, `simei`, `hurigana`, `yubinbangou`, `jushou`, `denwabangou`, `emeiru`) VALUES
(0, '不明', 'おうみ', '000000', '不明', '不明', '220348@jc-21.jp'),
(0, '不明', 'おうみ', '000000', '不明', '不明', '220348@jc-21.jp'),
(0, '不明', 'おうみ', '000000', '不明', '不明', '220348@jc-21.jp'),
(0, '不明', 'おうみ', '000000', '不明', '不明', '220348@jc-21.jp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
