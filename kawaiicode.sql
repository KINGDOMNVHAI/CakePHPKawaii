-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2020 lúc 11:14 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kawaiicode`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_url` varchar(255) NOT NULL,
  `cat_enable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_url`, `cat_enable`) VALUES
(1, 'PHP', 'php', 0),
(2, 'JavaScript', 'javascript', 0),
(3, 'HTML CSS', 'html-css', 0),
(4, 'Java', 'java', 0),
(5, 'SQL', 'sql', 0),
(6, 'Laravel', 'laravel', 0),
(7, 'CakePHP', 'cakephp', 0),
(8, 'Android', 'android', 0),
(9, 'Angular', 'angular', 0),
(10, 'PixiJS', 'pixijs', 0),
(11, 'Java Spring', 'java-spring', 0),
(12, 'Codewars', 'codewars', 0),
(13, 'hackthissite.org', 'hackthissite', 0),
(14, 'Kinh nghiệm', 'kinh-nghiem', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_url` varchar(255) NOT NULL,
  `post_present` text NOT NULL,
  `post_content` text NOT NULL,
  `post_thumbnail` varchar(255) NOT NULL,
  `post_cat_id` int(11) NOT NULL DEFAULT 0,
  `post_update_at` date NOT NULL,
  `post_home` int(1) NOT NULL DEFAULT 0,
  `post_enable` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_url`, `post_present`, `post_content`, `post_thumbnail`, `post_cat_id`, `post_update_at`, `post_home`, `post_enable`) VALUES
(1, 'Đáp án Codewars Kyu 8', 'dap-an-codewars-kyu-8', 'Level dành cho những ai mới bắt đầu vào Codewars', 'Some body text', 'codewars-kyu-8-results-thumbnail.jpg', 12, '2020-10-14', 0, 0),
(2, 'Đáp án Codewars Kyu 7', 'dap-an-codewars-kyu-7', 'Level bắt buộc phải có của sinh viên năm cuối khi chơi Codewars', 'Some body text', 'codewars-kyu-7-results-thumbnail.jpg', 12, '2020-10-14', 0, 0),
(3, 'Đáp án Codewars Kyu 6', 'dap-an-codewars-kyu-6', 'Level đạt được sẽ chứng tỏ bạn đã cứng ngôn ngữ', 'Some body text', 'codewars-kyu-6-results-thumbnail.jpg', 12, '2020-10-14', 0, 0),
(4, 'Sếp \"mới dậy thì\"', 'sep-moi-day-thi', 'Đây là giai đoạn 1 nhân viên tập trở thành sếp, cũng là lúc bạn sẽ thấy tác dụng của việc làm việc nhóm trong trường.', 'Some body text', 'sep-moi-day-thi-thumbnail.jpg', 14, '2020-10-14', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
