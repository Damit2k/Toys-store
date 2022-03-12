-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 04, 2021 lúc 11:34 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbphpsearch`
--
CREATE DATABASE IF NOT EXISTS `dbphpsearch` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbphpsearch`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

CREATE TABLE `article` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_link` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `a_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`a_id`, `a_title`, `a_link`, `a_text`, `a_date`) VALUES
(1, 'Google', 'https://www.google.com.vn/', 'Nghệ thuật và văn hóa · Google Ads · Podcasts · Sản phẩm khác của Google. Google. BÁO CÁO THÔNG TIN NÀY. HỦY. OK. XÓA. Cài đặtCài đặt tìm kiếmTìm', '2020-08-26 06:41:12'),
(2, 'Bing - Search History', 'https://www.bing.com/profile/history', 'Keep showing your new searches on this page and use them in search suggestions Clear your search history This will clear your Bing search history on this device.', '2020-08-26 06:41:15'),
(4, 'Facebook - đăng nhập hoặc đăng ký', 'https://www.facebook.com/', 'Tạo một tài khoản để đăng nhập Facebook. Kết nối với bạn bè, gia đình và những người mà bạn biết. Chia sẻ ảnh và video, gửi tin nhắn và nhận cập nhật.', '2020-08-27 10:04:27'),
(5, 'Instagram', 'https://www.instagram.com/', 'Tạo một tài khoản hoặc đăng nhập Instagram - Một cách đơn giản, thú vị và sáng tạo để ghi lại, chỉnh sửa và chia sẻ ảnh, video và tin nhắn với bạn bè và gia đình ...', '2020-08-27 10:04:27'),
(6, 'Yelp: Restaurants, Dentists, Bars, Beauty Salons, Doctors', 'https://www.yelp.com/', 'User Reviews and Recommendations of Best Restaurants, Shopping, Nightlife, Food, Entertainment, Things to Do, Services and More at Yelp.', '2020-08-27 10:04:27'),
(7, 'Yahoo Việt Nam | Tin tức, Tài chính và Giải trí', 'https://vn.yahoo.com/', 'Nhận tin tức mới nhất, thông tin về lối sống và Nội dung giải trí mới mỗi ngày.', '2020-08-27 10:04:27'),
(8, 'Tương hợp. Trò chuyện. Hẹn hò. - Tinder', 'https://tinder.com/?lang=vi', 'Với 43 tỷ lượt tương hợp cho đến nay, Tinder® là nhịp cầu kết nối thành công hơn hết thảy các ứng dụng hẹn hò khác trên thế giới.', '2020-08-27 10:04:27'),
(9, 'Twitter. Đó là điều đang diễn ra.', 'https://twitter.com/?lang=vi', 'Tham gia Twitter ngay hôm nay. Đăng ký Đăng nhập. Created with Sketch. Theo dõi những sở thích của bạn. Nghe nội dung mọi người đang bàn luận.', '2020-08-27 10:04:27'),
(10, 'Skype | Communication tool for free calls and chat', 'https://www.skype.com/en/', 'Stay in touch! Free online calls, messaging, affordable international calling to mobiles or landlines and instant online meetings on Skype.', '2020-08-27 10:04:27'),
(11, 'FaceTime on the App Store', 'https://apps.apple.com/au/app/facetime/id1110145091', 'Connect with family and friends around the world with FaceTime. Make audio and video calls from your iPhone, iPad and iPod touch to other iOS devices or ...', '2020-08-27 10:04:27'),
(12, 'Tin chính - BBC News Tiếng Việt', 'https://www.bbc.com/vietnamese', 'BBC Tiếng Việt đem lại tin tức trung thực, khách quan về thế giới và Việt Nam.', '2020-08-27 10:04:27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Cơ sở dữ liệu: `kollector`
--
CREATE DATABASE IF NOT EXISTS `kollector` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kollector`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `dm_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `dm_name`) VALUES
(1, 'Mô Hình One Piece'),
(2, 'Mô Hình Marvel'),
(3, 'Đồ Chơi Công Nghệ'),
(4, 'Mô Hình DC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp`
--

CREATE TABLE `sp` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_link` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `daban` int(11) DEFAULT NULL,
  `tonkho` int(11) DEFAULT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sp`
--

INSERT INTO `sp` (`id`, `name`, `img_link`, `price`, `content`, `status`, `daban`, `tonkho`, `id_dm`) VALUES
(1, 'Găng Tay Thanos - Infinity Gauntlet', './view/img/gangtay.jpg ./view/img/gangtay2.jpg', 535000, '', 'moi', 2, 10, 2),
(2, 'Mô Hình Luffy 20 - Bandai\r\n', './view/img/luffy.jpg ./view/img/luffy2.jpg ./view/img/luffy3.jpg ./view/img/luffy4.jpg', 270000, 'Mô hình tĩnh Luffy với chiều cao hơn 20cm mang phong cách thiết kế đặc trưng tới từ thương hiệu Bandai chắc chắn luôn luôn là một sản phẩm cực kì ấn tượng và đã mắt cho bộ sưu tập của bạn !\r\n\r\nKollector Vietnam cam kết chỉ sử dụng hình ảnh thật của sản phẩm', 'moi', 0, 0, 1),
(3, 'Mô Hình Sabo 20 - Bandai', './view/img/sabo.jpg', 270000, '', 'moi', 3, 2, 1),
(5, 'Mô Hình Superman - Justice Edition\r\n', './view/img/superman.jpeg', 369000, 'Mô Hình Superman - Justice Edition\r\n', 'moi', 5, 1, 4),
(6, 'Mô Hình Ace 20 - Bandai\r\n', './view/img/ace.jpg', 270000, 'Mô hình tĩnh Ace với chiều cao hơn 20cm mang phong cách thiết kế đặc trưng tới từ thương hiệu Bandai chắc chắn luôn luôn là một sản phẩm cực kì ấn tượng và đã mắt cho bộ sưu tập của bạn !\r\n\r\nKollector Vietnam cam kết chỉ sử dụng hình ảnh thật của sản phẩm', 'moi', 0, 0, 1),
(7, 'Tượng Hulkbuster Polystone 31', './view/img/hulkbuster.jpeg', 1178000, 'Tượng Hulkbuster Tĩnh 31cm 🔥<br>\r\n\r\nGiá : 1.990.000đ<br>\r\n\r\nMô tả : Sản phẩm cao 31cm , nặng 5kg đi kèm chân đế rời ,  chất liệu Polystone cực kì chắc chắn !', 'banchay', 0, 0, 2),
(8, 'Mô hình Spider Man Tĩnh 21cm\r\n', './view/img/spidermantinh.jpeg', 565000, 'Mô Hình Tĩnh Spider Man - Iron Suit 21 🔥\r\n\r\nMô tả: Sản phẩm cao khoảng 21cm, Fullbox đi kèm phụ kiện lưng .', 'banchay', NULL, NULL, 2),
(9, 'Mô Hình Black Panther Tĩnh 24cm', './view/img/blackpanthertinh.jpg', 565000, 'Mô Hình Tĩnh Black Panther 24cm 🔥\r\n\r\nPrice: 650.000đ\r\n\r\nMô tả : Sản phẩm tĩnh đi kèm chân đế có thể tháo rời , chiều ngang 24cm , cao 15cm !', 'banchay', NULL, NULL, 2),
(10, 'Loa Đĩa Than Bluetooth - Hồng', './view/img/loadiathanhong.jpg ./view/img/loadiathanhong2.jpeg ./view/img/loadiathanhong3.jpeg ./view/img/loadiathanhong4.jpg', 600000, '', 'banchay', NULL, NULL, 3),
(11, 'Tượng bán thân Iron man 17cm - Bạc', './view/img/banthanironman.jpeg', 420000, '', 'banchay', NULL, NULL, 2),
(12, 'Cosbaby A3 - Spider Man Bản Iron Suit', './view/img/spidermannano.jpeg', 350000, 'Cosbaby Spider Man - Iron Ver. 🔥\r\n\r\nPrice : 350.000đ\r\n\r\nMô tả : Dòng mô hình Cosbaby nổi tiếng cao 14cm , đi kèm phụ kiện đế tháo rời', 'banchay2', NULL, NULL, 2),
(13, 'Đèn Decor Silicon Chú Gà Con', './view/img/gacon.jpeg ./view/img/gacon2.jpeg ./view/img/gacon3.jpeg ./view/img/gacon4.jpeg', 420000, 'Đèn Cảm Biến Silicon Chú Gà | Chicken Night Lamp<br>\r\n\r\nKích thước: 10,4x10,4x11,8cm<br>\r\n\r\nChú gà con xinh xắn này sẵn sàng đồng hành cùng bạn trong mỗi giấc ngủ với ánh sáng vàng dịu siêu dễ chịu, độ sáng điều chỉnh theo ý thích và thời gian chiếu sáng lên đến tối đa 15h/lần sạc !<br>\r\n\r\nGhé Kollector VN nếu có thời gian để trải nghiệm tốt nhất sản phẩm nha !<br>', 'banchay2', NULL, NULL, 3),
(14, 'Đèn Cảm Biến Silicon Chú Cún', './view/img/cun.jpeg ./view/img/cun2.jpeg ./view/img/cun3.jpeg ./view/img/cun4.jpeg', 450000, 'Đèn Cảm Biến Silicon Chú Cún | Puppy Night Lamp<br>\r\n\r\nKích thước: 16x9x7,6cm\r\n\r\nChú cún con này là một trong những sản phẩm được ưa thích nhất tại Kollector vì độ xinh xắn cũng như tiện dụng của em nó, sản phẩm hỗ trợ chiếu sáng tổng cộng tới 2000h với nhiều mức độ sáng khác nhau, vị trí cảm biến cực nhạy và thú vị. Chắc chắn chiếc đèn Puppy Night Lamp sẽ là một món quà cực kì ấn tượng để dành tặng người thân và bạn bè !<br>\r\n\r\nGhé Kollector VN nếu có thời gian để trải nghiệm tốt nhất sản phẩm nha !', 'banchay2', NULL, NULL, 3),
(15, 'Đèn Silicon Ốc Sên', './view/img/ocsen.jpg ./view/img/ocsen2.jpg ./view/img/ocsen3.jpg ./view/img/ocsen4.jpeg', 450000, 'Đèn Cảm Biến Silicon Ốc Sên | Slug Night Lamp<br>\r\n\r\nKích thước: 10,2x12,5x12,8cm<br>\r\n\r\nChú ốc sên xinh xắn này sẵn sàng đồng hành cùng bạn trong mỗi giấc ngủ với ánh sáng vàng dịu siêu dễ chịu, độ sáng điều chỉnh theo ý thích và thời gian chiếu sáng lên đến tối đa 15h/lần sạc !<br>\r\n\r\nGhé Kollector VN nếu có thời gian để trải nghiệm tốt nhất sản phẩm nha !', 'banchay2', NULL, NULL, 3),
(16, 'Máy Phun Tạo Ẩm Meow - Trắng', './view/img/mayphunmeoamtrang.jpeg ./view/img/mayphunmeoamtrang2.jpeg ./view/img/mayphunmeoamtrang3.jpg ./view/img/mayphunmeoamtrang4.jpg', 350000, '[ New Product ] Máy Phun Sương Meow <br>\r\n\r\nKích thước: 9x9x15cm, Dung tích 300ml.<br>\r\n\r\nTậu ngay một chiếc máy phun sương xinh xắn cho bản thân hoặc bạn bè với rất nhiều chức năng hữu dụng như: Tạo ẩm, làm mát và trong lành không khí, giảm tải bụi, thắp sáng... chưa kể đến ngoại hình cực kỳ đáng iu của em nó ạ 😚 Sản phẩm có sẵn màu Trắng và Hồng tại Kollector VN.', 'banchay2', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(18) NOT NULL,
  `pass` varchar(18) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `gioitinh` varchar(15) NOT NULL,
  `sinhnhat` date DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `ngaytao` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `name`, `username`, `pass`, `email`, `sdt`, `gioitinh`, `sinhnhat`, `role`, `ngaytao`, `diachi`) VALUES
(1, 'Trần Phương Nam', 'tranphuongnam', '12345678', 'traaa@gmail.com', '0123123231', 'Nam', NULL, '', '', 'Số 1 Bạch Mai,Hai Bà Trưng, Hà Nội'),
(27, '', 'admin', 'admin', '', '', '', NULL, '', '', ''),
(60, 'Nguyễn Lâm', 'Damit2kwow', '123123123', 'mynamecookies@gmail.com', '0344712006', 'nu', '2000-02-20', '', '', '3213213'),
(61, 'Nguyễn Lâm', '1', '123123123', 'mynamecokies@yahoo.com', '0344712006', 'nu', '2222-03-23', '', '', '3213213'),
(62, 'Nguyễn Lâm', '2', '123123123', 'mynamecoookies@gmail.com', '0344712006', 'nu', '3222-02-23', '', '', '321321'),
(63, 'Nguyễn Lâm', '3', '123123123', 'iiii@gmail.com', '0344712006', 'nam', '3222-02-23', '', '', '321321'),
(64, 'Nguyễn Lâm', '4', '123123123', 'mynamecooookies@gmail.com', '0344712006', 'nam', '3222-02-23', '', '', '21321'),
(65, 'Nguyễn Lâm', '5', '123123', 'mynamewqewqecookies@yahoo.com', '0344712006', 'nam', '0000-00-00', '', '', '123123'),
(66, 'ewqewq', '32', '123123', 'mynamecưeqookies@yahoo.com', '0344712006', 'nam', '2222-02-23', '', '', '321321'),
(67, 'ewqewq', '323', '123123123', 'mynamecưesaqookies@yahoo.com', '0344712006', 'nam', '2222-02-23', '', '', '321321'),
(68, 'ewqewq', '3234', '123123123', 'mynaaqookies@gmail.com', '0344712006', 'nam', '2222-02-23', '', '', '321321'),
(69, 'ewqewq', '3234lll', '123123123', 'l;pl@gmail.com', '0344712006', 'nam', '2222-02-23', '', '', '321321'),
(70, '', '', '', '', '', '', '0000-00-00', '', '', ''),
(71, '', '', '', '', '', '', '0000-00-00', '', '', ''),
(72, '', '', '', '', '', '', '0000-00-00', '', '', ''),
(73, '', '', '', '', '', '', '0000-00-00', '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sp`
--
ALTER TABLE `sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sp`
--
ALTER TABLE `sp`
  ADD CONSTRAINT `sp_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Cơ sở dữ liệu: `phpblog`
--
CREATE DATABASE IF NOT EXISTS `phpblog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phpblog`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `created_at`) VALUES
(1, 'Post One', 'This is my very first Post', 'Nguyen Quyet', '2020-08-20 13:09:46'),
(2, 'Post Two', 'This is my second post', 'Nguyen Quyet', '2020-08-20 13:09:46');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Cơ sở dữ liệu: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

--
-- Đang đổ dữ liệu cho bảng `pma__central_columns`
--

INSERT INTO `pma__central_columns` (`db_name`, `col_name`, `col_type`, `col_length`, `col_collation`, `col_isNull`, `col_extra`, `col_default`) VALUES
('kollector', 'name', 'varchar', '100', 'utf8mb4_general_ci', 0, ',', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Đang đổ dữ liệu cho bảng `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"kollector\",\"table\":\"danhmuc\"},{\"db\":\"kollector\",\"table\":\"sp\"},{\"db\":\"kollector\",\"table\":\"taikhoan\"},{\"db\":\"kollector\",\"table\":\"khachhang\"},{\"db\":\"kollector\",\"table\":\"spmoi\"},{\"db\":\"kollector\",\"table\":\"spbanchay\"},{\"db\":\"pro_banhang\",\"table\":\"product\"},{\"db\":\"test\",\"table\":\"ql_kho\"},{\"db\":\"dbphpsearch\",\"table\":\"article\"},{\"db\":\"phpblog\",\"table\":\"posts\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('kollector', 'danhmuc', 'dm_name'),
('kollector', 'sp', 'name');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Đang đổ dữ liệu cho bảng `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'kollector', 'danhmuc', '[]', '2021-07-10 11:02:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-08-04 09:33:32', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"vi\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Chỉ mục cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Chỉ mục cho bảng `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Chỉ mục cho bảng `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Chỉ mục cho bảng `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Chỉ mục cho bảng `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Chỉ mục cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Chỉ mục cho bảng `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Chỉ mục cho bảng `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Chỉ mục cho bảng `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Chỉ mục cho bảng `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Cơ sở dữ liệu: `pro_banhang`
--
CREATE DATABASE IF NOT EXISTS `pro_banhang` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pro_banhang`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `img_link`, `price`, `content`) VALUES
(1, 'IPHONE 11 PRO', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12-pro-max_1__7.jpg', 12000, 'điện thoại đẹp'),
(2, 'IPHONE 12', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12-pro-max_1__7.jpg', 15000, 'điện thoại đẹppp'),
(3, 'IPHONE 13 PROMAX', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12-pro-max_1__7.jpg', 18000, 'điện thoại đẹpp'),
(4, 'IPHONE 15 MAX', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12-pro-max_1__7.jpg', 20000, 'điện thoại đẹpppp');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
