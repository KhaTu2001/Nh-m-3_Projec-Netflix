-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 08:49 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl_netflix`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Narration'),
(2, 'Comendy'),
(3, 'War'),
(4, 'Music'),
(5, 'Childrens'),
(6, 'Cartoon'),
(7, 'Mythological'),
(8, 'Documentary'),
(9, 'Action'),
(10, 'Adventure'),
(11, 'Fiction'),
(12, 'Movie Secrets'),
(13, 'Martial Arts Film'),
(14, 'Horror Movie'),
(15, 'Criminal'),
(16, 'Psychological');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dislike`
--

CREATE TABLE `dislike` (
  `dislike_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `episode`
--

CREATE TABLE `episode` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `episode_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `content` varchar(100) CHARACTER SET utf8 NOT NULL,
  `episode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `episode`
--

INSERT INTO `episode` (`id`, `film_id`, `episode_name`, `content`, `episode`) VALUES
(6, 133, '3107 full album', 'yt1s.com - Wn  3107 full album ft  titie Nâu Dươngg .mp4', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film`
--

CREATE TABLE `film` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `category_id` int(2) NOT NULL,
  `type_movie` int(20) NOT NULL,
  `nation_id` int(100) NOT NULL,
  `release_year` int(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `duration` int(5) NOT NULL,
  `link` varchar(150) NOT NULL,
  `author` varchar(30) NOT NULL,
  `num_view` int(20) NOT NULL DEFAULT 0,
  `trailer` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`id`, `name`, `status`, `director`, `actor`, `category_id`, `type_movie`, `nation_id`, `release_year`, `image`, `description`, `duration`, `link`, `author`, `num_view`, `trailer`) VALUES
(132, 'Spider-Man: No Way Home', 'Complete', ' Jon Watts', 'Tom Holland,Zendaya,Benedict Cumberbatch,Jacob Batalon,Andrew Garfield,Tobey Maguire,...', 11, 2, 1, 2001, 'no way home.jfif', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 123, 'SPIDER-MAN_ NO WAY HOME - Official Trailer (HD).mp4', 'Marvel studio', 49, 'SPIDER-MAN_ NO WAY HOME - Official Trailer (HD).mp4'),
(133, '3107', 'Complete', 'W/n ( Official Video ) ', 'Nâu, Duongg', 4, 1, 2, 2001, '3107_1.png', 'music', 123, 'yt1s.com - 3107  Wn  Official Video  ft Nâu Duongg.mp4', 'W/n', 14, 'yt1s.com - 3107  Wn  Official Video  ft Nâu Duongg.mp4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `like_action`
--

CREATE TABLE `like_action` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `my_list`
--

CREATE TABLE `my_list` (
  `list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nation`
--

CREATE TABLE `nation` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nation`
--

INSERT INTO `nation` (`id`, `name`) VALUES
(1, 'America'),
(2, 'Vietnam'),
(3, 'France'),
(4, 'Japan'),
(5, 'Korea'),
(6, 'England'),
(7, 'China'),
(8, 'India'),
(9, 'Hong Kong '),
(10, 'Thailand');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type-movie`
--

CREATE TABLE `type-movie` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `type-movie`
--

INSERT INTO `type-movie` (`id`, `name`, `handle`) VALUES
(1, 'TV Shows', 'TV Shows'),
(2, 'movies', 'movies');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `usertype` int(2) NOT NULL,
  `avata_image` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `username`, `fullname`, `email`, `password`, `phone`, `sex`, `usertype`, `avata_image`, `status`) VALUES
(17, 'admin', 'Trung Quan', 'quan@gmail.com', '$2y$10$uC7.ozCFD3JZfNmI8tX4WechZwg3gfG5G34QB1Am0P0rEaKERxEb2', '0944737093', 'Male', 10, '', 1),
(24, 'admin', 'quannhippp', 'quan27@gmail.com', '$2y$10$rKWr7mA6rJBhh9FbPdq/WegBvtyFI9/.Xt55ZjzCNlq3pDzZs38hu', '0345990207', 'male', 99, '3ca973a4680ea350fa1f1.jpg', 1),
(25, 'quanhip', 'Tran Trung Quan', 'quantrung.2k1@gmail.com', '$2y$10$ziaxD0aPpSqKiVTho1MnAuzoZGDiNUCakGJgkz74n2h1yY.5D2.OG', '0944737093', 'male', 20, '', 1),
(27, 'quanhip', 'Trung Quan', 'cun272001@gmail.com', '$2y$10$pxWTvtkg/jerMqpdF.EdSeAvOTOdMJhIL2PO95cF1e7ujlCwf994e', '0944737093', 'male', 20, '', 0),
(28, 'admin', 'Quang Minh', 'dqminh@gmail.com', '$2y$10$WEZEOzmD.av.64ODp84g6eAq0GSIT/tCqwSl7.dsd0zTEGpjP46H2', '0124721895', 'male', 99, '', 1),
(29, 'admin', 'Kha Tu', 'khatu1@gmail.com', '$2y$10$jK0sh9F.FhYDbZUTjCuzJ.ngVrKUydEF/iKVxZDIOkDuugpIbA.jK', '0944737091', 'male', 99, '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usertype`
--

CREATE TABLE `usertype` (
  `type` int(2) NOT NULL,
  `typename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `usertype`
--

INSERT INTO `usertype` (`type`, `typename`) VALUES
(10, 'administrator'),
(20, 'Member'),
(99, 'Admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `dislike`
--
ALTER TABLE `dislike`
  ADD PRIMARY KEY (`dislike_id`,`user_id`,`film_id`),
  ADD KEY `User_lk` (`user_id`),
  ADD KEY `film_lk` (`film_id`);

--
-- Chỉ mục cho bảng `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`,`film_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Chỉ mục cho bảng `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `link` (`link`),
  ADD KEY `nation_id` (`nation_id`),
  ADD KEY `category` (`category_id`),
  ADD KEY `type_movie` (`type_movie`);

--
-- Chỉ mục cho bảng `like_action`
--
ALTER TABLE `like_action`
  ADD PRIMARY KEY (`like_id`,`user_id`,`film_id`),
  ADD KEY `User_lk1` (`user_id`),
  ADD KEY `film_lk1` (`film_id`);

--
-- Chỉ mục cho bảng `my_list`
--
ALTER TABLE `my_list`
  ADD PRIMARY KEY (`list_id`,`user_id`,`film_id`),
  ADD KEY `User_lk12` (`user_id`),
  ADD KEY `film_lk12` (`film_id`);

--
-- Chỉ mục cho bảng `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type-movie`
--
ALTER TABLE `type-movie`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ibfk_1` (`usertype`);

--
-- Chỉ mục cho bảng `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dislike`
--
ALTER TABLE `dislike`
  MODIFY `dislike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `like_action`
--
ALTER TABLE `like_action`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `my_list`
--
ALTER TABLE `my_list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nation`
--
ALTER TABLE `nation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `type-movie`
--
ALTER TABLE `type-movie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dislike`
--
ALTER TABLE `dislike`
  ADD CONSTRAINT `User_lk` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `film_lk` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);

--
-- Các ràng buộc cho bảng `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);

--
-- Các ràng buộc cho bảng `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`nation_id`) REFERENCES `nation` (`id`),
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `type_movie` FOREIGN KEY (`type_movie`) REFERENCES `type-movie` (`id`);

--
-- Các ràng buộc cho bảng `like_action`
--
ALTER TABLE `like_action`
  ADD CONSTRAINT `User_lk1` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `film_lk1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);

--
-- Các ràng buộc cho bảng `my_list`
--
ALTER TABLE `my_list`
  ADD CONSTRAINT `User_lk12` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `film_lk12` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
