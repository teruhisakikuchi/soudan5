-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3307
-- 生成日時: 2022-02-25 02:20:44
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `soudan_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `soudan_table`
--

CREATE TABLE `soudan_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `soudan_table`
--

INSERT INTO `soudan_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(1, '菊地輝仙', 'test@test.jp', '遺産相続について', '2022-02-09 16:57:36'),
(2, '山田太郎', 'try@try.jp', '交通事故に遭ったので、今後の対応について相談したい。なるべく早い日程で相談お願いします。', '2022-02-02 00:09:33'),
(4, '所ジョージ', 'tokoro@tokoro.jp', '契約書をチェックして欲しい。', '2022-02-03 15:49:32'),
(5, '松井秀喜', 'hideki@hideki.jp', 'サッカーについて', '2022-02-09 16:58:01'),
(6, '山下次郎', 'yamashita@yamashita.jp', '離婚について相談したい。', '2022-02-09 17:03:22'),
(7, '山本三郎', 'yamamoto@yamamoto.jp', '売掛金の回収について', '2022-02-25 11:18:07');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, '菊地', 'test1', 'test1', 1, 0),
(2, '首相', 'test2', 'test2', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `soudan_table`
--
ALTER TABLE `soudan_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `soudan_table`
--
ALTER TABLE `soudan_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- テーブルの AUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
