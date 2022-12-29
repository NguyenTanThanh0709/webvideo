SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE qlVideo;
USE qlVideo;


--
-- Cơ sở dữ liệu: `qlVideo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `fullname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`fullname`, `username`, `password`, `email`, `img`) VALUES
('Nguyễn Bá Thành', 'nguyenbathanh1', '$2y$10$Ke2PXGcLGBQt8CROEvnbZOGiraGwzKWMCpSqEsZtMYpac2mCSRm/W', 'nbt1@gmail.com', ''),
('Võ Luyện', 'voluyen2', '$2y$10$wuVO7l/dViBjzE89WJGDJ.oZVgy2jK/GQLVjjvegyvajNuROJ5GFu', 'vl2@gmail.com234', ''),
('Nguyễn Tấn Thành', 'nguyentanthanh3', '$2y$10$hXcdu03GTOVot/LDky3SSuMw03elDk6mairaoA.a76l3RPmKe6Hva', 'ntt3@gmail.com', ''),
('Lê Hải Tiến', 'lehaitien4', '$2y$10$7MJkd0uvXXEv2KIpY55jiuoS2H6EJj.JKbrmFOcyq9p5ZaFsLcXDW', 'lht4@gmail.com', ''),
('Lữ Phú', 'luphu5', '$2y$10$7MJkd0uvXXEv2KIpY55jlksjfdguoiwaFsLcXDW', 'lp5@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `namevideo` varchar(128) NOT NULL,
  `view` int(15) NOT NULL,
  `dayupload` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `mode` tinyint(1) DEFAULT NULL,
  `username` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id_video`, `namevideo`, `view`, `dayupload`, `thumbnail`, `mode`, `username`, `link`) VALUES
(11, 'Basic Python', 123345, '2022-10-27', '', 0, 'nguyenbathanh1', ' '),
(21, 'Pro PHP', 192854, '2022-10-27', '', 0, 'voluyen2', ' '),
(31, 'Learn NodeJS with TT', 23756, '2022-10-27', '', 0, 'nguyentanthanh3', ' '),
(41, 'Let Her Go', 125522, '2022-12-16', '', 0, 'nguyenbathanh1', '<iframe width="560" height="315" src="https://www.youtube.com/embed/RBumgq5yVrA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(42, 'Home', 2312456, '2022-10-27', '', 0, 'nguyentanthanh3', '<iframe width="560" height="315" src="https://www.youtube.com/embed/ZAYZmIfHEiU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(43, 'Roar', 11214, '2022-10-27', '', 0, 'nguyentanthanh3', '<iframe width="560" height="315" src="https://www.youtube.com/embed/CevxZvSJLk8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(44, 'Old Town Road', 238951, '2022-10-27', '', 0, 'nguyentanthanh3', '<iframe width="560" height="315" src="https://www.youtube.com/embed/r7qovpFAGrQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(45, 'Road So Far', 189247, '2022-10-27', '', 0, 'nguyentanthanh3', '<iframe width="560" height="315" src="https://www.youtube.com/embed/MVMIwIJtMdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(46, 'There no one at all', 2387567, '2022-10-27', '', 0, 'nguyentanthanh3', '<iframe width="560" height="315" src="https://www.youtube.com/embed/JHSRTU31T14" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(47, 'Remember me', 293857, '2022-10-27', '', 0, 'nguyentanthanh3', '<iframe width="560" height="315" src="https://www.youtube.com/embed/6Edc6xxV93M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(48, 'Hãy trao cho anh', 9238759, '2022-10-27', '', 0, 'nguyentanthanh3', '<iframe width="560" height="315" src="https://www.youtube.com/embed/knW7-x7Y7RE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(49, 'Muộn rồi mà sao còn', 237569, '2022-10-27', '', 0, 'nguyentanthanh3', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xypzmu5mMPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `username` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `id_video`, `username`) VALUES
(123, 11, 'nguyenbathanh1'),
(124, 21, 'voluyen2'),
(125, 31, 'nguyentanthanh3');

-- --------------------------------------------------------


--
-- Cấu trúc bảng cho bảng `nameplaylist`
--

CREATE TABLE `nameplaylist` (
  `id_playlist` int(11) NOT NULL,
  `name_playlist` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `playlist`
--

INSERT INTO `nameplaylist` (`id_playlist`, `name_playlist`) VALUES
(123, 'Playlist 1'),
(124, 'Playlist 2'),
(125, 'Playlist 3');

-- --------------------------------------------------------


--
-- Cấu trúc bảng cho bảng `subscribe`
--

CREATE TABLE `subscribe` (
  `registered_account` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subscribe`
--

INSERT INTO `subscribe` (`registered_account`, `username`) VALUES
('luphu5', 'nguyenbathanh1'),
('lehaitien4', 'voluyen2'),
('luphu5', 'nguyentanthanh3');

-- --------------------------------------------------------


--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `date_watch` datetime NOT NULL,
  `username` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id_history`, `id_video`, `date_watch`, `username`) VALUES
(1234, 21, '2022-10-27', 'nguyenbathanh1'),
(1235, 31, '2022-10-27', 'voluyen2'),
(1236, 11, '2022-10-27', 'nguyentanthanh3');

-- --------------------------------------------------------


--
-- Cấu trúc bảng cho bảng `liked`
--

CREATE TABLE `liked` (
  `id_video` int(11) NOT NULL,
  `username` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `liked`
--

INSERT INTO `liked` (`id_video`, `username`) VALUES
(21, 'nguyenbathanh1'),
(31, 'voluyen2'),
(11, 'nguyentanthanh3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vipham`
--

CREATE TABLE `vipham` (
  `id_vipham` int(11) NOT NULL,
  `id_video` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feature`
--

CREATE TABLE `feature` (
  `id_feature` int(11) NOT NULL,
  `id_video` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------



--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `content` varchar(128) NOT NULL,
  `id_video` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `username`, `content`, `id_video`) VALUES
(12345, 'nguyenbathanh1', 'Hay quá', 11),
(12346, 'voluyen2', 'Dở tệ', 21),
(12347, 'nguyentanthanh3', 'Bình thường', 31);

-- --------------------------------------------------------


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);


--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);  

--
-- Chỉ mục cho bảng `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`);  

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);  

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);  

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `vipham`
  ADD PRIMARY KEY (`id_vipham`);  

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id_feature`);    

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;
COMMIT;