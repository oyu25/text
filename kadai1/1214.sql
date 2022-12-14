-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022-12-14 08:28:02
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
  `yubinbangou` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jushou` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `denwabangou` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emeiru` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kojin`
--

INSERT INTO `kojin` (`ID`, `simei`, `hurigana`, `yubinbangou`, `jushou`, `denwabangou`, `emeiru`) VALUES
(47, 'あああ', 'aaa', '111-111', '22222', '3333', '444@44'),
(48, '漢字', 'かんじ', 'xxx-xxx', 'xxxx', '3333', 'xxxxxxxx@xxxxx.xxxx');

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_staff`
--

CREATE TABLE `mst_staff` (
  `code` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_staff`
--

INSERT INTO `mst_staff` (`code`, `name`, `password`) VALUES
(1, 'ろくまる', '1234567890123457890123456789012'),
(2, '無名', '3691308f2a4c2f6983f2880d32e29c84'),
(3, '無名２', '4124bc0a9335c27f086f24ba207a4912'),
(4, '無名3', '4124bc0a9335c27f086f24ba207a4912'),
(6, 'スタッフ', '4124bc0a9335c27f086f24ba207a4912'),
(7, 'ほげ', '4124bc0a9335c27f086f24ba207a4912');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kojin`
--
ALTER TABLE `kojin`
  ADD PRIMARY KEY (`ID`);

--
-- テーブルのインデックス `mst_staff`
--
ALTER TABLE `mst_staff`
  ADD PRIMARY KEY (`code`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kojin`
--
ALTER TABLE `kojin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- テーブルの AUTO_INCREMENT `mst_staff`
--
ALTER TABLE `mst_staff`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
