-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 02:19 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitetintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) NOT NULL,
  `vnđ` varchar(255) NOT NULL,
  `usdt` varchar(255) NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Tin tức', 'Tin-tuc', 1, '2021-10-22 08:24:14', '2021-10-22 08:24:14'),
(3, 'Kiến thức', 'kien-thuc', 1, '2021-10-22 08:24:14', '2021-10-22 08:24:14'),
(9, 'Nổi bật', 'noi-bat', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `subcategories_id` bigint(20) NOT NULL,
  `hot` int(11) NOT NULL,
  `highlights` int(11) NOT NULL,
  `new_posts` int(20) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `key_words` text NOT NULL,
  `posittion` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `content`, `image`, `subcategories_id`, `hot`, `highlights`, `new_posts`, `active`, `key_words`, `posittion`, `created_at`, `updated_at`) VALUES
(9, 'So sánh Fiahub và Remitano', NULL, '<pre>\r\nSo sánh Fiahub và Remitano</pre>', '<p>So sánh Fiahub và Remitano</p>', 'uploads/post/Litecoin.jpg', 4, 0, 1, 0, 1, 'So sánh Fiahub và Remitano', '0', NULL, NULL),
(11, 'Cùng CoinEx tìm hiểu về các giải pháp an toàn trong thị trường  tiền điện tử', NULL, '<p>Cùng CoinEx tìm hiểu về các giải pháp an toàn trong thị trường &nbsp;tiền điện tử</p>', NULL, 'uploads/post/Litecoin.jpg', 1, 0, 1, 0, 1, 'Cùng CoinEx', '', NULL, NULL),
(14, 'Ai sẽ là những khách hàng tiềm năng của NFT?', NULL, '<pre>\r\nAi sẽ là những khách hàng tiềm năng của NFT?</pre>', NULL, 'uploads/post/Litecoin.jpg', 5, 0, 1, 0, 1, 'Ai sẽ là những khách hàng tiềm năng của NFT?', '', NULL, NULL),
(15, 'Mech Master (MECH) - game mecha chiến lược đầu tiên trên blockchain...', NULL, '<pre>\r\nMech Master là trò chơi blockchain 3D Mecha đầu tiên trên thế giới</pre>', NULL, 'uploads/post/Litecoin.jpg', 13, 0, 0, 0, 1, '1', '', NULL, NULL),
(16, 'Binance tiếp tục lập kỉ lục với lần đốt BNB thứ 17', NULL, '<pre>\r\nSự kiện đốt coin thứ 17 của Binance đã chứng kiến lượng 1.335.888 BNB, trị giá </pre>\r\n\r\n<pre>\r\nhơn 639 triệu USD, bị thiêu hủy.</pre>', NULL, 'uploads/post/Litecoin.jpg', 13, 0, 0, 0, 1, 'BNB', '', NULL, NULL),
(17, 'Nền tảng giao dịch SnapEx chính thức hoạt động trở lại , giảm 90% phí...', NULL, '<pre>\r\nSnapEx là nền tảng giao dịch hợp đồng mã hóa đang phát triển nhanh chóng</pre>', NULL, 'uploads/post/Litecoin.jpg', 13, 0, 0, 0, 1, 'Nền tảng giao dịch SnapEx', '', NULL, NULL),
(18, 'Ancient8 khởi tranh giải đấu Axie Infility VN Championship với tổng giải...', NULL, '<pre>\r\nAncient8 tự hào là đơn vị tổ chức giải đấu Axie Infility VN </pre>\r\n\r\n<pre>\r\nChampionship</pre>', NULL, 'uploads/post/Litecoin.jpg', 13, 0, 0, 0, 1, '1', '', NULL, NULL),
(19, 'Báo cáo Thị trường Tiền mã hóa Quý 3/2021 - Kyros Ventures', NULL, '<p>Báo cáo Thị trường Tiền mã hóa Quý 3/2021 - Kyros Ventures&nbsp;</p>', NULL, 'uploads/post/Litecoin.jpg', 8, 0, 0, 0, 1, 'Báo cáo Thị trường', '', NULL, NULL),
(20, 'Coin68-Portal Google Maps cho thị trường tiền mã hoá', NULL, '<p>Coin68-Portal Google Maps cho thị trường tiền mã hoá</p>', NULL, 'uploads/post/Litecoin.jpg', 8, 0, 0, 0, 1, 'Coin68-Portal', '', NULL, NULL),
(21, 'MicroStrategy đã đạt được những gì?', NULL, '<p>MicroStrategy đã đạt được những gì?</p>', NULL, 'uploads/post/Litecoin.jpg', 8, 0, 0, 0, 1, 'MicroStrategy', '', NULL, NULL),
(22, 'Báo cáo Thị trường Tiền mã hóa Quý 3/2021 - Kyros Ventures', NULL, '<p>Báo cáo Thị trường Tiền mã hóa Quý 3/2021 - Kyros Ventures</p>', NULL, 'uploads/post/Litecoin.jpg', 16, 0, 0, 0, 1, 'Báo cáo Thị trường', '', NULL, NULL),
(23, 'Coin68-Portal Google Maps cho thị trường tiền mã hoá', NULL, '<p>Coin68-Portal Google Maps cho thị trường tiền mã hoá</p>', NULL, 'uploads/post/Litecoin.jpg', 16, 0, 0, 0, 1, 'Coin68-Portal Google Maps', '', NULL, NULL),
(24, 'Báo cáo Thị trường Tiền mã hóa Quý 3/2021 - Kyros Ventures', NULL, '<p>Báo cáo Thị trường Tiền mã hóa Quý 3/2021 - Kyros Ventures</p>', NULL, 'uploads/post/Litecoin.jpg', 9, 0, 0, 0, 1, 'Báo cáo Thị trường', '', NULL, NULL),
(25, 'Coin68-Portal Google Maps cho thị trường tiền mã hoá', NULL, '<p>Coin68-Portal Google Maps cho thị trường tiền mã hoá</p>', NULL, 'uploads/post/Litecoin.jpg', 9, 0, 0, 0, 1, 'Coin68', '', NULL, NULL),
(26, 'Liệu Carado (ADA)  đã bùng nổ như tuyên bố của Charles HosKinSon', NULL, '<p>Liệu Carado (ADA) &nbsp;đã bùng nổ như tuyên bố của Charles HosKinSon</p>', NULL, 'uploads/post/Litecoin.jpg', 8, 0, 0, 0, 1, 'Liệu Carado (ADA)', '', NULL, NULL),
(27, 'MicroStrategy đã đạt được những gì?', NULL, '<p>MicroStrategy đã đạt được những gì?</p>', NULL, 'uploads/post/Litecoin.jpg', 16, 0, 0, 0, 1, 'MicroStrategy', '', NULL, NULL),
(28, 'Liệu Carado (ADA) đã bùng nổ như tuyên bố của Charles HosKinSon', NULL, '<p>Liệu Carado (ADA) đã bùng nổ như tuyên bố của Charles HosKinSon</p>', NULL, 'uploads/post/Litecoin.jpg', 16, 0, 0, 0, 1, 'Liệu Carado (ADA)', '', NULL, NULL),
(31, 'MicroStrategy đã đạt được những gì?', NULL, '<p>MicroStrategy đã đạt được những gì?</p>', NULL, 'uploads/post/Litecoin.jpg', 9, 0, 0, 0, 1, 'MicroStrategy', '', NULL, NULL),
(32, 'Liệu Carado (ADA) đã bùng nổ như tuyên bố của Charles HosKinSon', NULL, '<p>Liệu Carado (ADA) đã bùng nổ như tuyên bố của Charles HosKinSon</p>', NULL, 'uploads/post/Litecoin.jpg', 9, 0, 0, 0, 1, 'Liệu Carado (ADA)', '', NULL, NULL),
(33, 'Tỷ phú Mark Cuban tuyên bố không đầu tư và ETF Bitcoin, thích mua BTC trực tiếp hơn', NULL, '<pre>\r\nTỷ phú Mark Cuban đã nói không với việc đầu tư vào quỹ ETF</pre>', NULL, 'uploads/post/Litecoin.jpg', 1, 0, 0, 0, 1, 'Tỷ phú Mark Cuban', '', NULL, NULL),
(34, 'Nhà sáng lập Polkadot(DOT) Gavin Wood công bố quỹ phát triển trị giá 774 triệu USD cho DeFi', NULL, '<pre>\r\nSau sự tăng trưởng mạnh mẽ cảu Polkadot(DOT) vào tuần trước</pre>', 'Nhà sáng lập Polkadot(DOT) Gavin Wood công bố quỹ phát triển trị giá 774 triệu USD cho DeFi', 'uploads/post/Litecoin.jpg', 4, 0, 0, 0, 1, 'Nhà sáng lập Polkadot(DOT)', '', NULL, NULL),
(35, 'Mech Master (MECH) - game', NULL, '<pre>\r\nMech Master là trò chơi blockchain 3D Mecha đầu tiên trên thế giới</pre>', NULL, 'uploads/post/Litecoin.jpg', 2, 0, 0, 0, 1, 'Mech', '', NULL, NULL),
(36, 'Mech Master (MECH) - game', NULL, '<pre>\r\nMech Master là trò chơi blockchain 3D Mecha đầu tiên trên thế giới</pre>', NULL, 'uploads/post/Litecoin.jpg', 3, 0, 0, 0, 1, 'Mech', '', NULL, NULL),
(37, 'Nền tảng giao dịch  SNapEX chính thức', NULL, '<p>SNapEX&nbsp; là một nền tảng giao dịch hợp đồng mã hoá đangphát triển</p>', NULL, 'uploads/post/Litecoin.jpg', 9, 0, 0, 0, 1, 'Nền tảng', '', NULL, NULL),
(38, 'Nền tảng giao dịch SNapEX chính thức của Ex', NULL, '<p>Nền tảng giao dịch SNapEX chính thức của Ex</p>', NULL, 'uploads/post/Litecoin.jpg', 9, 0, 0, 0, 1, 'SNapEX', '', NULL, NULL),
(39, 'ANCIENT 8 khởi đầu giải đấu', NULL, '<p>ANCIENT 8 khởi đầu giải đấu</p>', NULL, 'uploads/post/Litecoin.jpg', 9, 0, 0, 0, 1, 'ANCIEMT 8', '', NULL, NULL),
(40, 'ANCIENT 8 khởi đầu giải đấu 2', NULL, '<p>ANCIENT 8 khởi đầu giải đấu 2</p>', NULL, 'uploads/post/Litecoin.jpg', 9, 0, 0, 0, 1, 'ANCIENT', '', NULL, NULL),
(41, 'Forcepoint 2018 Security Predictions', NULL, '<p>Subject matter experts across our global Security Labs, Innovation Labs</p>', NULL, 'uploads/post/Litecoin.jpg', 1, 1, 0, 0, 1, 'Forcepoint', '', NULL, NULL),
(42, 'Bitcoin and other cryptocurrencies', NULL, '<p>Bitcoin and other cryptocurrencies</p>', NULL, 'uploads/post/Litecoin.jpg', 1, 1, 0, 0, 1, 'Bitcoin', '', NULL, NULL),
(43, 'Bitcoin and other cryptocurrencies 3', NULL, '<p>Bitcoin and other cryptocurrencies 3</p>', NULL, 'uploads/post/Litecoin.jpg', 1, 1, 0, 0, 1, 'Bitcoin', '', NULL, NULL),
(44, 'Bitcoin and other cryptocurrencies 4', NULL, '<p>Bitcoin and other cryptocurrencies 4</p>', NULL, 'uploads/post/Litecoin.jpg', 1, 1, 0, 0, 1, 'Bitcoin', '', NULL, NULL),
(45, 'Forcepoint 2018 Security Predictions', NULL, '<p>Subject matter experts across our global Security Labs, Innovation Labs, CTO and CISO teams have pooled their collective insights to give you an accurate insight into the landscape of the future.&nbsp;</p>', NULL, 'uploads/post/Litecoin.jpg', 14, 0, 0, 0, 1, 'Doi nhom', '', NULL, NULL),
(46, 'Forcepoint 2018 Security Predictions 2', NULL, '<h1>Forcepoint 2018 Security Predictions</h1>', NULL, 'uploads/post/Litecoin.jpg', 14, 0, 0, 0, 1, 'Doi nhom', '', NULL, NULL),
(47, 'Forcepoint 2018 Security Predictions 3', NULL, '<h1>Forcepoint 2018 Security Predictions</h1>', NULL, 'uploads/post/Litecoin.jpg', 14, 0, 0, 0, 1, 'DOi nhom', '', NULL, NULL),
(48, 'Forcepoint 2018 Security Predictions 4', NULL, '<h1>Forcepoint 2018 Security Predictions</h1>', NULL, 'uploads/post/Litecoin.jpg', 14, 0, 0, 0, 1, 'Doi nhom4', '', NULL, NULL),
(49, 'Quỹ ETF Bitcoin đầu tiên tại Mỹ sẽ niêm yết Sàn chứng khoán New York vào ngày 19/10', NULL, '<p>Quỹ ETF Bitcoin đầu tiên tại Mỹ sẽ niêm yết Sàn chứng khoán New York vào ngày 19/10</p>', NULL, 'uploads/post/Litecoin.jpg', 1, 0, 1, 0, 1, 'Quỹ ETF Bitcoin', '', NULL, NULL),
(50, 'Báo cáo Thị trường Tiền mã hóa Quý 3/2021 - Kryros Ventures', NULL, '<pre>\r\nSau ba tháng của Quý 3/2021, thị trường tiền mã hóa đã có sự thay đổi rõ rệt so\r\n    với giai đoạn trước đó. Nhiều xu hướng tiềm năng mới xuất hiện khiến cho thị\r\n    trường trở nên đa dạng hơn và kéo theo đó là đà tăng trưởng mạnh mẽ. Hãy cùng\r\n    KyrOS Ventures nhìn lại thị trường tiền mã hóa trongQuý 3 với bài báo cáo này\r\n    nhé.</pre>', NULL, 'uploads/post/Litecoin.jpg', 5, 0, 0, 0, 1, 'Kiến thức', '', NULL, NULL),
(51, '1 năm sau lần mua Bitcoin đầu tiên, MicroStrategy đã đạt được những gì?', NULL, '<pre>\r\nVào ngày 11/8/2020, Microstrategy thông báo mua 21.454 BTC với giá 250 triệu USD.\r\n    Cùng lúc, công ty này cho biết sẽ xem BTC là tài sản dự trữ. Đây đánh dấu một</pre>', NULL, 'uploads/post/Litecoin.jpg', 5, 0, 0, 0, 1, 'Kiến thức', '', NULL, NULL),
(52, 'DeFi bùng nổ, cơ hội nào cho thị trường ví tiền mã hoá?', NULL, '<pre>\r\nTrong thời gian thị trường uptrend, hầu hết các token đều đã x10, 20, đặc biệt là\r\n    các token AMM, Vậy, khi mà cơn sốt DeFi đang có dấu hiệu dần bão hoà, đếm đến\r\n    nào có thể được coi là tiềm năng trong thời gian tới. Hãy cùng lướt qua một lựa\r\n    chọn rất đáng quan tâm và vô cùng tiềm năng, đó chính là thị trường tiền mã hoá\r\n    (crypto wallet) nhé.</pre>', NULL, 'uploads/post/Litecoin.jpg', 5, 0, 0, 0, 1, 'Kiến thức', '', NULL, NULL),
(53, 'Lớp giao dịch 101: Chiến thuật đầu tư thông minh không phải là “bắt                                         đáy”', NULL, '<pre>\r\nThị trường tiền điện tử có thể giảm so với mức cao nhất mọi thời đại, nhưng tinh\r\n    trung bình theo chi phí đô la DCA) vẫn là cách tốt nhất để xây dựng lợi nhuận\r\n    dài hạn.</pre>', NULL, 'uploads/post/Litecoin.jpg', 5, 0, 0, 0, 1, 'Kiến thức', '', NULL, NULL),
(54, 'Quỹ ETF Bitcoin đầu tiên tại Mỹ sẽ niêm yết sàn chứng khoán New York', NULL, '<p>Quỹ ETF Bitcoin đầu tiên tại Mỹ sẽ niêm yết sàn chứng khoán New York</p>', NULL, 'uploads/post/Litecoin.jpg', 15, 0, 0, 0, 1, 'Bitcoin', '', NULL, NULL),
(55, 'Quỹ ETF Bitcoin đầu tiên tại Mỹ sẽ niêm yết sàn chứng khoán New York', NULL, '<p>Quỹ ETF Bitcoin đầu tiên tại Mỹ sẽ niêm yết sàn chứng khoán New York</p>', NULL, 'uploads/post/Litecoin.jpg', 1, 0, 0, 0, 1, 'Quỹ ETF Bitcoin', '1', NULL, NULL),
(56, 'KyRos Kompass #5:Bitcoin và Defi cú hích nào cho cả 2', NULL, '<p>KyRos Kompass #5:Bitcoin và Defi cú hích nào cho cả 2</p>', NULL, 'uploads/post/Litecoin.jpg', 1, 0, 0, 1, 1, 'Kompass ', '1', NULL, NULL),
(57, 'Những dự án nào có khả năng chiến thắng đấu giá parachain của Polkadot', NULL, '<p>Những dự án nào có khả năng chiến thắng đấu giá parachain của Polkadot</p>', NULL, 'uploads/post/Litecoin.jpg', 3, 0, 0, 1, 1, 'Polkadot', '1', NULL, NULL),
(58, 'Đánh gia dự án SuperRare - Thông tin và update mới nhất về dự án', NULL, '<p>Đánh gia dự án SuperRare - Thông tin và update mới nhất về dự án</p>', NULL, 'uploads/post/Litecoin.jpg', 2, 0, 0, 1, 1, 'SuperRare', '1', NULL, NULL),
(66, '3 Bước Để Kết Nối Metamask Với Binance Smart Chain (BSC)', NULL, '<h1>3 Bước Để Kết Nối Metamask Với Binance Smart Chain (BSC)</h1>', NULL, 'uploads/post/Litecoin.jpg', 5, 0, 0, 0, 1, '3 Bước Để Kết Nối Metamask Với Binance Smart Chain (BSC)', '0', NULL, NULL),
(67, 'Coin98 chạm mốc 1 tỷ USD vốn hóa', NULL, '<p>Coin98 chạm mốc 1 tỷ USD vốn hóa</p>', '<p>Đồng tiền điện tử của Việt Nam phát triển, mới đây vừa đạt mức cao nhất tại 5.9 USD trên Binance. Đà tăng giúp nâng vốn hóa thị trường của C98 chạm mức 1 tỷ USD.</p>\r\n\r\n<p>Đáng nói C98 mới niêm yết trên&nbsp;&nbsp;được 1 tháng, x80 lần so với giá private sale và lọt vào top 98 Market Cap.</p>', 'uploads/post/Litecoin.jpg', 6, 0, 0, 0, 1, 'Coin98', '0', NULL, NULL),
(68, 'KuCoin là gì? Hướng dẫn sử dụng và đăng ký sàn Kucoin mới nhất', NULL, '<p>KuCoin là gì? Hướng dẫn sử dụng và đăng ký sàn Kucoin mới nhất</p>', '<p>KuCoin là gì? Hướng dẫn sử dụng và đăng ký sàn Kucoin mới nhất</p>', 'uploads/post/Litecoin.jpg', 15, 0, 0, 0, 1, 'Bitcoin', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `categories_id` bigint(20) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `categories_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', 'bitcoin', 1, 1, NULL, NULL),
(2, 'Ethereum', 'ethereum', 1, 1, NULL, NULL),
(3, 'Altcoin', 'altcoin', 1, 1, NULL, NULL),
(4, 'Defi', 'defi', 1, 1, NULL, NULL),
(5, 'Kiến thức coin', 'kien-thuc-coin', 3, 1, NULL, NULL),
(6, 'Hướng dẫn người mới', 'huong-dan-nguoi-moi', 3, 1, NULL, NULL),
(7, 'Dự án', 'du-an', 3, 1, NULL, NULL),
(8, 'Kiến thức Crypto', 'kien-thuc-Crypto', 3, 1, NULL, NULL),
(9, 'Kiến thức bên lề', 'kien-thuc-ben-le', 3, 1, NULL, NULL),
(11, 'CoinNFT', '', 3, 0, NULL, NULL),
(13, 'Crypto', '', 1, 1, NULL, NULL),
(14, 'Đội nhóm LTC', '', 1, 1, NULL, NULL),
(15, 'LTC TV', '', 1, 1, NULL, NULL),
(16, 'Dành cho người mới', '', 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ngọc Hương', 'huongnguyen08.cv@gmail.com', '$2y$10$vHUEwu3/.TvFEQbTlthzH.Hct4oUG2SbtKwsXgI.oOzOKADlYC6dK', 'https://toigingiuvedep.vn/wp-content/uploads/2021/06/hinh-anh-nen-cuc-chat.jpg', '2016-06-09 03:05:09', '2021-11-26 05:15:01'),
(17, 'Hồng Hà', 'nguyenngocnam2700@gmail.com', '$2y$10$ol4wCEFSXjIOCbHAXwleZ.28vEExKDGJUjWyiOare6tMElHFE5CDa', 'https://toigingiuvedep.vn/wp-content/uploads/2021/06/hinh-anh-nen-cuc-chat.jpg', '2021-11-26 04:30:03', '2021-11-26 18:43:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_id` (`subcategories_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`subcategories_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `FK_subcategories_categories` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
