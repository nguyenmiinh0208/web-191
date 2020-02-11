-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 10:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zingmp3`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `urlimg` varchar(256) NOT NULL,
  `numberListen` int(10) DEFAULT NULL,
  `idCountry` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `description`, `urlimg`, `numberListen`, `idCountry`) VALUES
(50, 'Sorry', '', 'https://data.chiasenhac.com/data/cover/49/48130.jpg', 200, '2'),
(51, 'Best Close', '', 'https://data.chiasenhac.com/data/cover/113/112875.jpg', 256, '2'),
(52, 'Hãy Trao Cho Anh`', 'Em Của Ngày Hôm Qua\r\nCa sĩ: Sơn Tùng M-TP\r\nSáng tác: Sơn Tùng M-TP\r\nAlbum: Em Của Ngày Hôm Qua (Single)', 'https://data.chiasenhac.com/data/cover/46/45481.jpg', 8900, '1'),
(53, 'Đừng Nói Tôi Điên', 'Đừng Nói Tôi Điên\r\nCa sĩ: Hiền Hồ\r\nSáng tác: Phúc Bồ\r\nAlbum: Đừng Nói Tôi Điên (Single)\r\nNăm phát hành: 2018', 'https://data.chiasenhac.com/data/cover/97/96128.jpg', 2415, '1'),
(57, 'Xinh Lung Linh', 'Xinh Lung Linh\r\nCa sĩ: Ali Hoàng Dương\r\nSáng tác: Lưu Thiên Hương\r\nAlbum: Xinh Lung Linh\r\nNăm phát hành: 2019', 'https://data.chiasenhac.com/data/cover/105/104914.jpg', 2456, '1'),
(58, 'Sáng Mắt Chưa', 'Sáng Mắt Chưa\r\nCa sĩ: Trúc Nhân\r\nSáng tác: Mew Amazing\r\nAlbum: Sáng Mắt Chưa - Single\r\nNăm phát hành: 2019', 'https://data.chiasenhac.com/data/cover/108/107880.jpg', 2546, '1'),
(59, 'Cảm Giác Lúc Ấy Sẽ Ra Sao', 'Ca sĩ: Lou Hoàng\r\nSáng tác: Hưng Cacao; OnlyC\r\nAlbum: Cảm Giác Lúc Ấy Sẽ Ra Sao (Single)\r\nNăm phát hành: 2019', 'https://data.chiasenhac.com/data/cover/103/102271.jpg', 3664, '1'),
(101, 'Khó vẽ nụ cười', '', 'https://avatar-nct.nixcdn.com/song/2019/09/30/2/9/3/3/1569825708582_640.jpg', 2504, '1'),
(102, 'Xin Đừng Lặng Im', '', 'https://data.chiasenhac.com/data/cover/57/56061.jpg', 1000, '1'),
(103, 'Mưa', '', 'https://chiasenhac.vn/storage/data/artist_avatar/4/3580.jpg', 2574, '1'),
(104, 'Sóng Gió', '', 'https://chiasenhac.vn/storage/data/artist_avatar/3/2116.jpg', 1245, '1'),
(105, 'Từ Bỏ', '', 'https://data.chiasenhac.com/data/cover/71/70962.jpg', 3556, '1');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `urlimg` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `numberLike` int(11) DEFAULT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `urlimg`, `description`, `numberLike`, `country_id`) VALUES
(50, 'Justin Bieber', 'https://data.chiasenhac.com/data/cover/49/48130.jpg', '', 107, 2),
(51, 'ZiO', 'https://data.chiasenhac.com/data/cover/113/112875.jpg', '', 166, 3),
(52, 'Sơn Tùng M-TP', 'https://data.chiasenhac.com/data/cover/62/61107.jpg', 'Nguyễn Thanh Tùng hay được biết đến với nghệ danh Sơn Tùng M-TP là một nam ca sĩ, nhạc sĩ và diễn viên người Việt Nam. Các đĩa đơn năm 2012 và 2013 của anh, \"Cơn mưa ngang qua\" và \"Em của ngày hôm qua\" đã đánh dấu mốc khởi đầu cho sự nghiệp của anh. Wikipedia\r\nSinh: 5 tháng 7, 1994 (25 tuổi), Thành phố Thái Bình\r\nNăm hoạt động: 2009 – nay\r\nCông ty quản lý: Văn Production (2013 - 2015) WePro Entertainment (2015 - 2017) M-TP Entertainment (2017 - nay)\r\nNghệ danh: Sơn Tùng M-TP', 509, 1),
(53, 'Hiền Hồ', 'https://data.chiasenhac.com/data/cover/88/87532.jpg', 'Sinh: 1997 (22 tuổi), Đắk Lắk\r\nThể loại: Nhạc Pop\r\nĐề cử: Giải Làn Sóng Xanh cho Gương mặt phát hiện', 108, 1),
(54, 'AMEE', 'https://data.chiasenhac.com/data/cover/111/110656.jpg', 'Amee\r\nNghệ sĩ âm nhạc', 102, 1),
(55, 'Black Pink', 'https://data.chiasenhac.com/data/cover/96/95487.jpg', 'BLACK PINK là một nhóm nhạc nữ Hàn Quốc được thành lập và quản lý bởi công ty YG Entertainment. Nhóm gồm 4 thành viên: Jisoo, Jennie, Rosé và Lisa. Nhóm chính thức ra mắt với hai đĩa đơn \"Boombayah\" và \"Whistle\", nằm trong album đĩa đơn đầu tay mang tên Square One. Wikipedia\r\nBan đầu: Seoul, Hàn Quốc (2016)\r\nThành viên: Lisa, Roseanne Park, Jennie Kim, Kim Ji-soo\r\nGiải thưởng: Giải thưởng Âm nhạc Seoul - Giải thưởng chính, THÊM\r\nCác nhãn đĩa: YG Entertainment, Interscope Records', 568, 3),
(57, 'Ali Hoàng Dương', 'https://data.chiasenhac.com/data/cover/76/75903.jpg', 'Ali Hoàng Dương sinh ngày 14 tháng 9 năm 1996 tại Phan Thiết, Bình Thuận là ca sĩ trẻ nổi tiếng từ chương trình The Voice – Giọng hát Việt 2017. Ở mùa giải trước anh đã bị loại và rút ra được rất nhiều kinh nghiệm, mùa giải này anh đã trưởng thành hơn và đạt quán quân tại chương trình.\r\nSinh	14 tháng 9 năm 1996\r\n 	Bình Thuận, cờ việt nam Việt Nam\r\nSống	Thành phố Hồ Chí Minh\r\nNghề nghiệp	Ca sĩ\r\nChiều cao	178 cm\r\nSở trường	Ca hát, chơi guitar, sáng tác\r\nNổi tiếng vì	Giọng hát Việt 2017', 100, 1),
(58, 'Trúc Nhân', 'https://data.chiasenhac.com/data/cover/45/44982.jpg', 'Trúc Nhân tên đầy đủ là Nguyễn Trúc Nhân là một nam ca sĩ người Việt Nam. Anh được biết đến khi tham gia chương trình Giọng hát Việt mùa đầu tiên. Ngoài ra, Trúc Nhân còn là một nghệ sĩ đã giành được 5 đề cử và thắng 3 lần cho giải Cống hiến. Wikipedia\r\nSinh: 30 tháng 11, 1991 (28 tuổi), Hoài Nhơn\r\nNăm hoạt động: 2012 - nay\r\nPhim: Cô gái đến từ hôm qua\r\nGiải thưởng: Giải Âm nhạc Cống hiến cho Bài hát của năm, THÊM\r\nAlbum: Truc Nhan, Dong', 563, 1),
(59, 'Lou Hoàng', 'https://data.chiasenhac.com/data/cover/64/63313.jpg', 'Lou Hoàng tên thật là Hoàng Kim Long là một ca sĩ Việt Nam. Wikipedia\r\nSinh: 6 tháng 3, 1994 (25 tuổi), Hà Nội\r\nThể loại: Nhạc Pop\r\nĐề cử: Giải Làn Sóng Xanh cho Gương mặt Triển vọng - Nam', 182, 1),
(60, 'Quân A.P', 'https://data.chiasenhac.com/data/cover/105/104856.jpg', 'Quân A.P\r\nNghệ sĩ âm nhạc', 122, 1),
(61, 'Jack & K-ICM', 'https://data.chiasenhac.com/data/cover/103/102994.jpg', 'Tiểu sử K-ICM\r\n\r\nTên thật: Nguyễn Bảo Khánh\r\nNghệ danh: K-ICM\r\nNgày sinh: 12/07/1999\r\nQuê quán: Sóc Trăng, Việt Nam', 154, 1),
(62, 'Hoàng Dũng', 'https://data.chiasenhac.com/data/cover/95/94919.jpg', 'Hoàng Dũng\r\nNghệ sĩ âm nhạc', 365, 1),
(63, 'Celine Dion', 'https://data.chiasenhac.com/data/cover/30/29798.jpg', '', 125, 2),
(64, 'Maroon5', 'https://data.chiasenhac.com/data/cover/79/78670.jpg', '', 456, 2),
(101, 'Đạt G', 'https://chiasenhac.vn/storage/data/artist_avatar/3/2425.jpg', '', 265, 1),
(102, 'Soobin Hoàng Sơn', 'https://data.chiasenhac.com/data/cover/57/56061.jpg', '', 332, 1),
(103, 'Trung Quân', 'https://chiasenhac.vn/storage/data/artist_avatar/4/3580.jpg', '', 465, 1),
(104, 'Jack', 'https://chiasenhac.vn/storage/data/artist_avatar/3/2116.jpg', '', 556, 1),
(105, 'Erik', 'https://chiasenhac.vn/storage/data/artist_avatar/3/2116.jpg', '', 623, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `urlimg` varchar(256) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `urlimg`, `description`) VALUES
(1, 'Nhạc Mùa Đông', 'https://data.chiasenhac.com/data/cover/113/112897.jpg', ''),
(2, 'Tình Yêu', 'https://data.chiasenhac.com/data/cover/113/112896.jpg', ''),
(3, 'Nỗi Buồn', 'https://data.chiasenhac.com/data/cover/113/112894.jpg', ''),
(4, 'Nhạc Việt', 'https://data.chiasenhac.com/data/cover/75/74260.jpg', ''),
(5, 'Nhạc Âu Mĩ', 'https://data.chiasenhac.com/data/cover/88/87493.jpg', ''),
(6, 'Thư Giãn', 'https://data.chiasenhac.com/data/cover/113/112748.jpg', ''),
(7, 'Cà phê', 'https://data.chiasenhac.com/data/cover/70/69434.jpg', ''),
(8, 'K-POP', 'https://data.chiasenhac.com/data/cover/54/53532.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `charts`
--

CREATE TABLE `charts` (
  `id` int(11) NOT NULL,
  `week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Việt Nam'),
(2, 'Âu Mĩ'),
(3, 'K-POP');

-- --------------------------------------------------------

--
-- Table structure for table `songcategories`
--

CREATE TABLE `songcategories` (
  `category_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songcategories`
--

INSERT INTO `songcategories` (`category_id`, `song_id`, `id`) VALUES
(1, 4, 1),
(1, 5, 2),
(1, 6, 3),
(2, 5, 4),
(2, 6, 5),
(2, 7, 6),
(1, 4, 8),
(1, 5, 9),
(1, 6, 10),
(2, 5, 11),
(2, 6, 12),
(2, 7, 13),
(3, 9, 14),
(3, 10, 15),
(3, 11, 16),
(4, 12, 17),
(4, 13, 18),
(4, 15, 19);

-- --------------------------------------------------------

--
-- Table structure for table `songcharts`
--

CREATE TABLE `songcharts` (
  `id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  `chart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `idSingers` varchar(10) NOT NULL,
  `urlmp3` varchar(256) NOT NULL,
  `urlimg` varchar(256) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `numberlisten` int(11) DEFAULT NULL,
  `numberLiked` int(11) DEFAULT NULL,
  `lastUpdateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `name`, `idSingers`, `urlmp3`, `urlimg`, `country_id`, `album_id`, `numberlisten`, `numberLiked`, `lastUpdateTime`) VALUES
(4, 'Anh Nhà Ở Đâu Thế', '54', '/public/songs/Anh-Nha-O-Dau-The-AMEE-B-Ray.mp3', 'https://avatar-nct.nixcdn.com/song/2019/09/30/2/9/3/3/1569825708582_640.jpg', 1, 101, 1001, 11, '2019-12-04 09:38:31'),
(5, 'Bạc Phận', '61', '/public/songs/Bac-Phan-Jack-K-ICM.mp3', 'https://data.chiasenhac.com/data/cover/104/103682.jpg', 1, 101, 23, 12, '2017-12-09 09:38:31'),
(6, 'Bốn Chữ Lắm', '58', '/public/songs/BonChuLam.mp3', 'https://data.chiasenhac.com/data/cover/98/97442.jpg', 1, 101, 444, 13, '2019-02-09 09:38:31'),
(7, 'BoomBayAh', '55', '/public/songs/BoomBayAh.mp3', 'https://data.chiasenhac.com/data/cover/99/98130.jpg', 3, 101, 23, 11, '2016-12-09 09:38:31'),
(9, 'Cảm Giác Lúc Ây Sẽ Ra Sao', '59', '/public/songs/Cam-Giac-Luc-Ay-Se-Ra-Sao-Lou-Hoang.mp3', 'https://data.chiasenhac.com/data/cover/65/64657.jpg', 1, 102, 33, 12, '2018-11-09 09:38:31'),
(10, 'Chậm Một Phút', '57', '/public/songs/ChamMotPhut.mp3', 'https://data.chiasenhac.com/data/cover/75/74828.jpg', 1, 102, 423, 13, '2016-03-09 09:38:31'),
(11, 'Chẳng Nói Nên Lời', '62', '/public/songs/Chang Noi Nen Loi.mp3', 'https://data.chiasenhac.com/data/cover/75/74260.jpg', 1, 102, 23, 2, '2014-10-09 09:38:31'),
(12, 'Chạy Ngay Đi', '52', '/public/songs/ChayNgayDi.mp3', 'https://data.chiasenhac.com/data/cover/75/74260.jpg', 1, 52, 321, 31, '2018-01-09 09:38:31'),
(13, 'Chúng Ta Không Thuộc Về Nhau', '52', '/public/songs/ChungTaKhongThuocVeNhau.mp3', 'https://data.chiasenhac.com/data/cover/70/69099.jpg', 1, 52, 1234, 1287, '2018-03-09 09:38:31'),
(14, 'DduDuDduDu', '55', '/public/songs/DduDuDduDu.mp3', 'https://data.chiasenhac.com/data/cover/29/28489.jpg', 3, 103, 444, 12, '2018-04-19 09:38:31'),
(15, 'Đêm', '57', '/public/songs/Dem-AliHoangDuong-5979582.mp3', 'https://data.chiasenhac.com/data/cover/8/7889.jpg', 1, 103, 213, 123, '2017-05-29 09:38:31'),
(16, 'Đông', '58', '/public/songs/Dong-TrucNhan-2531143.mp3', 'https://data.chiasenhac.com/data/cover/60/59676.jpg', 1, 103, 33, 12, '2017-11-09 09:38:31'),
(17, 'Em Của Ngày Hôm Qua', '52', '/public/songs/Em-Cua-Ngay-Hom-Qua-Son-Tung-M-TP.mp3', 'https://data.chiasenhac.com/data/cover/104/103682.jpg', 1, 52, 3334, 3542, '2015-12-31 09:38:31'),
(18, 'Em Gì Ơi', '61', '/public/songs/Em-Gi-Oi-Jack-K-ICM.mp3', 'https://data.chiasenhac.com/data/cover/102/101421.jpg', 1, 104, 21, 22, '2019-08-02 09:38:31'),
(19, 'Ex Hate Me', '54', '/public/songs/Ex_s Hate Me.mp3', 'https://data.chiasenhac.com/data/cover/71/70962.jpg', 1, 105, 12, 23, '2017-06-15 09:38:31'),
(20, 'ForeverYoung', '55', '/public/songs/ForeverYoung.mp3', 'https://data.chiasenhac.com/data/cover/52/51739.jpg', 1, 105, 12, 23, '2017-07-21 09:38:31'),
(21, 'Ghét', '57', '/public/songs/Ghet-AliHoangDuong-5979583.mp3', 'https://data.chiasenhac.com/data/cover/56/55749.jpg', 1, 105, 321, 1, '2019-04-09 09:38:31'),
(22, 'Gọi Mưa', '103', '/public/songs/Goi-Mua-Trung-Quan-Idol.mp3', 'https://data.chiasenhac.com/data/cover/49/48130.jpg', 2, 50, 213, 1, '2018-03-31 09:38:31'),
(23, 'Hãy Trao Cho Anh', '52', '/public/songs/HayTraoChoAnh.mp3', 'https://data.chiasenhac.com/data/cover/62/61377.jpg', 1, 52, 3345, 2646, '2017-09-08 09:38:31'),
(24, 'Hồng Nhan', '61', '/public/songs/Hong-Nhan-Jack.mp3', 'https://data.chiasenhac.com/data/cover/62/61377.jpg', 2, 50, 23, 2, '2016-11-22 09:38:31'),
(25, 'I\'m just a boy', '57', '/public/songs/ImJustABoy-AliHoangDuong-5979587.mp3', 'https://data.chiasenhac.com/data/cover/64/63214.jpg', 2, 50, 23, 3, '2016-10-29 09:38:31'),
(26, 'Khó Vẽ Nụ Cười', '101', '/public/songs/Kho Ve Nu Cuoi - Dat G_ Du Uyen.mp3', 'https://data.chiasenhac.com/data/cover/113/112875.jpg', 2, 51, 12, 33, '2019-12-09 09:38:31'),
(27, 'Kill This Love', '55', '/public/songs/KillThisLove-BlackPink-5935546.mp3', 'https://data.chiasenhac.com/data/cover/113/112875.jpg', 3, 51, 11, 32, '2017-12-29 09:38:31'),
(28, 'Lạc Trôi', '52', '/public/songs/Lac-Troi.mp3', 'https://data.chiasenhac.com/data/cover/4/3473.jpg', 1, 52, 1224, 1154, '2015-10-15 09:38:31'),
(29, 'Lớn Rồi Còn Khóc Nhè', '58', 'public/songs/LonRoiConKhocNhe-TrucNhan-5947531.mp3', 'https://data.chiasenhac.com/data/cover/104/103339.jpg', 1, 58, 654, 546, '2019-12-10 21:52:43'),
(30, 'LyingDown', '63', 'public/songs/LyingDown.mp3', 'https://data.chiasenhac.com/data/cover/30/29798.jpg', 2, 51, 656, 123, '2019-12-10 21:52:43'),
(31, 'Memories', '64', '/public/songs/LyingDown.mp3', 'https://data.chiasenhac.com/data/cover/29/28216.jpg', 2, 51, 546, 662, '2019-12-10 21:52:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_artistcountries` (`country_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charts`
--
ALTER TABLE `charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songcategories`
--
ALTER TABLE `songcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categories` (`category_id`),
  ADD KEY `FK_categorysongs` (`song_id`);

--
-- Indexes for table `songcharts`
--
ALTER TABLE `songcharts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_chartsongs` (`song_id`),
  ADD KEY `FK_charts` (`chart_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_countrysongs` (`country_id`),
  ADD KEY `FK_albumsongs` (`album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `charts`
--
ALTER TABLE `charts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `songcategories`
--
ALTER TABLE `songcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `songcharts`
--
ALTER TABLE `songcharts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artists`
--
ALTER TABLE `artists`
  ADD CONSTRAINT `FK_artistcountries` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `songcategories`
--
ALTER TABLE `songcategories`
  ADD CONSTRAINT `FK_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_categorysongs` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`);

--
-- Constraints for table `songcharts`
--
ALTER TABLE `songcharts`
  ADD CONSTRAINT `FK_charts` FOREIGN KEY (`chart_id`) REFERENCES `charts` (`id`),
  ADD CONSTRAINT `FK_chartsongs` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `FK_albumsongs` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_countrysongs` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
