-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2020 lúc 06:31 AM
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
(1, 'Đáp án Codewars Kyu 8', 'dap-an-codewars-kyu-8', 'Level dành cho những ai mới bắt đầu vào Codewars', 'Some body text', 'codewars-kyu-8-results-thumbnail.jpg', 12, '2020-10-20', 0, 0),
(2, 'Đáp án Codewars Kyu 7', 'dap-an-codewars-kyu-7', 'Level bắt buộc phải có của sinh viên năm cuối khi chơi Codewars', 'Some body text', 'codewars-kyu-7-results-thumbnail.jpg', 12, '2020-10-20', 0, 0),
(3, 'Đáp án Codewars Kyu 6', 'dap-an-codewars-kyu-6', 'Level đạt được sẽ chứng tỏ bạn đã cứng ngôn ngữ', 'Some body text', 'codewars-kyu-6-results-thumbnail.jpg', 12, '2020-10-20', 0, 0),
(4, 'Sếp \"mới dậy thì\"', 'sep-moi-day-thi', 'Đây là giai đoạn 1 nhân viên tập trở thành sếp, cũng là lúc bạn sẽ thấy tác dụng của việc làm việc nhóm trong trường.', '<p>Trong bất kỳ ngành nghề nào, bạn cũng sẽ có xuất phát điểm là một nhân viên. Công việc của bạn là học là làm tốt công việc của mình. Còn việc của đồng nghiệp, của sếp không bao giờ là điều khiến bạn quan tâm. Làm tốt việc của mình và hòa đồng với mọi người, đó là 2 việc mà nhân viên phải làm tốt.</p>\n\n<p>Tuy nhiên, khi thành sếp nhỏ, bạn phải tập quan tâm đến nhân viên, đàn em, người vào công ty sau bạn. Lúc này, bạn sẽ thấy tác dụng của việc làm việc nhóm trong trường: phải hỏi han, quan tâm đến nhóm, hỗ trợ, hướng dẫn người đến sau nhanh chóng hòa nhập với công việc. Bạn sẽ trở thành những người sếp mà bạn từng nói xấu là \"hỗ trợ không tốt\", \"độc đoán\", \"hướng dẫn không hiểu\"... </p>\n\n<center><img src=\"/webroot/upload/post/sep-moi-day-thi-1.jpg\" alt=\"sếp mới dậy thì\" width=\"60%\" />\n\n<p>Nhân viên chỉ cần lo việc của mình. Sếp lo việc của người khác.</p></center>\n\n<p>Lý do:</p>\n<ul>\n<li>Bạn phải vừa đảm bảo công việc của mình, vừa quan tâm đến việc của thành viên, vừa giải trí cho bản thân (nhân viên tốn nhiều thời gian giải trí, đọc báo mạng...)\n\n<li>Bạn chưa từng hướng dẫn, chỉ dạy người khác. Trong trường, bạn chưa bao giờ làm trường nhóm.\n\n<li>Bạn nóng tính, chỉ dẫn theo kiểu sơ sài và để nhân viên tự nghiên cứu. Họ làm sai, bạn cứ việc báo cáo lên cấp trên là họ sai, bạn đúng. Bạn tin chắc rằng: vị trí của mình khó bị lung lay bởi một người mới vào.\n\n<li>Bạn quan tâm đến việc làm hài lòng cấp trên hơn làm việc tốt với cấp dưới vì tư duy: mấy đứa này làm một thời gian rồi cũng nhảy việc.\n</ul>\n\n<p>Nếu bạn đang rơi vào những trường hợp trên. Xin chúc mừng! Bạn là một vị <b>sếp \"mới dậy thì\"</b></p>\n\n<p>Sếp \"mới dậy thì\" là khái niệm của KINGDOM NVHAI nghĩ ra, chỉ những người đang từ làm lính lên thành làm sếp. Bạn làm ở 1 công ty hơn 1 năm, nghĩa là bạn không còn là người mới nhưng cũng chưa đủ cứng để làm sếp. Công ty tuyển nhân sự mới và giao cho bạn hướng dẫn. Bạn chưa từng hướng dẫn ai, không biết cách nói làm sao để họ hiểu. Và thế là mâu thuẫn ngầm xảy ra, dẫn đến người mới phải đi nơi khác.</p>\n\n<center><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8nQi1WbqDbg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n\n<p>Câu chuyện về sếp \"mới dậy thì\" ở Nhật</p></center>\n\n<p>Chắc chắn sếp lớn nhìn thấy điều này. Họ sẽ dè chừng hơn khi cho bạn hướng dẫn người mới tiếp theo. Đây cũng là lúc bạn nhận ra mình thiếu kỹ năng mềm. Những người mà ai cũng thấy là không có kỹ năng làm sếp, không phải người làm lãnh đạo, không làm thầy giáo training cho nhân viên mới được sẽ chỉ làm chức trưởng nhóm, nhóm nhỏ. Các sếp lớn biết chắc, nếu cho người không có khả năng lên vị trí cao thì trước sau gì, kết quả cũng không tốt.</p>\n\n<p>Hoặc đơn giản hơn: bạn không muốn làm sếp, chỉ muốn làm nhân viên có thâm niên kỳ cựu. Thời gian rảnh rỗi lo cho gia đình hay làm những thú vui riêng. Chuyện đó không sai. Nhưng bạn vẫn cần học cách hướng dẫn người khác vì:</p>\n<ul>\n<li>Về bản thân: bạn sẽ chứng tỏ được năng lực, giữ được vị trí lâu dài.\n\n<li>Về người khác: bạn sẽ tránh việc trở thành hình mẫu \"sếp khó tính\", \"cấp trên quá quắt\" hay thấy trong vô số các bài viết trên mạng.\n\n<li>Về công ty: bạn sẽ tránh được việc mình thành nguyên nhân khiến công ty bị nói xấu.\n</ul>\n\n<p> Bạn nên nhớ: công ty càng bị nói xấu bao nhiêu, bạn làm người mới nghỉ việc nhiều bao nhiêu thì bộ phận nhân sự sẽ càng vất vả bấy nhiêu. Để tuyển dụng, HR phải đăng bài trên rất nhiều diễn đàn, có trả phí. Nhận CV về phải ngồi sàng lọc, gọi điện và mời ứng viên đến phỏng vấn.</p>\n\n<p>Vì vậy, sếp lớn sẽ không bao giờ bỏ qua vấn đề: người mới nghỉ việc sau 2 tháng thử việc. Dù lý do là người mới \"không đáp ứng được công việc\" đi nữa, việc người mới không làm việc được với bạn là điều đáng để sếp lớn lưu tâm. Sếp lớn sẽ thắc mắc cách training, cách làm việc với cấp dưới, người mới của bạn có vấn đề. Chắc chắn bạn sẽ không thể lên chức cao nếu tỉ lệ người mới làm việc với bạn không phù hợp ngày càng gia tăng.</p>\n\n<p>Riêng ngành lập trình, có rất nhiều công ty có nhân sự làm việc với thâm niên rất cao, trên 5 năm, 10 năm. Nhưng cũng có những công ty nổi tiếng với việc nhân sự ra vào liên tục đến mức họ chán, chẳng thèm bắt chuyện làm quen nhau vì biết chắc mối quan hệ không lâu dài.</p>\n\n<center><img src=\"/webroot/upload/post/KG-technology-1.jpg\" alt=\"K&G Technology\" width=\"60%\" />\n\n<p>K&G tại Phú Mỹ Hưng là công ty có nhiều nhân sự thâm niên cao nhất KINGDOM NVHAI từng biết. <br>Rất nhiều người làm 7 năm, 10 năm trở lên. Ngôn ngữ chính là PHP.</p></center>\n', 'sep-moi-day-thi-thumbnail.jpg', 14, '2020-10-20', 0, 0);

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
