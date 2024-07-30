-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 30, 2024 lúc 05:42 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ht_toyota`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `productid`, `product_name`, `price`, `image`, `date`) VALUES
(56, 1, 'VIOS', 570, 'anh1.jpg', '2024-07-04 09:15:20'),
(57, 1, 'VIOS', 570, 'anh1.jpg', '2024-07-04 14:16:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenum` int(11) NOT NULL,
  `content` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `phonenum`, `content`, `date`) VALUES
(1, '', '', '22h1120116@ut.edu.vn', 784674876, 'Web hay ', '2024-06-25 11:30:31'),
(2, 'ji', 'jo', 'tranhuyhoang2k4hh@gmail.com', 909990909, 'hihi', '2024-07-02 09:16:58'),
(11, 'bt', 'ôn', 'tranhuyhoang2k4hh@gmail.com', 784674876, 'kjbk', '2024-07-04 09:18:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `productid` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `userid`, `productid`, `email`, `date`, `content`) VALUES
(3, 2948, 2, '22h1120116@ut.edu.vn', '2024-06-30 11:36:01', 'Xe hay và trải nghiệm đáng nhớ'),
(4, 2948, 3, '22h1120116@ut.edu.vn', '2024-06-30 11:42:30', 'Xe hay và trải nghiệm đáng nhớ'),
(5, 2948, 4, '22h1120116@ut.edu.vn', '2024-07-01 14:53:25', 'Xe hay và trải nghiệm đáng nhớ'),
(6, 2948, 1, '22h1120116@ut.edu.vn', '2024-07-03 15:15:35', 'Xe hay và trải nghiệm đáng nhớ'),
(11, 2948, 1, '22h1120116@ut.edu.vn', '2024-07-04 07:58:02', 'công ngheej cao'),
(12, 2948, 1, '22h1120116@ut.edu.vn', '2024-07-04 09:15:47', 'công ngheej cao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `detail` varchar(400) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `productid`, `product_name`, `detail`, `price`, `image`) VALUES
(1, 1, 'VIOS', 'Về thiết kế, Toyota Vios mới được thiết kế lại phần đầu cân đối, vuông vức hơn. Đèn pha LED trở thành trang bị tiêu chuẩn, tạo hình khoẻ khoắn. Cản trước và mặt ca-lăng cũng được thiết kế lại nhưng khá rối so với bản cũ.So với bản đời tiền nhiệm, hãng thay đổi thiết kế la-zăng, trong khi kích thước vẫn giữ 15 inch. Không có khác biệt nào về đèn hậu trên bản mới.', 570, 'anh1.jpg'),
(2, 2, 'CAMRY', 'Toyota Camry ra mắt tại thị trường Việt Nam với 4 phiên bản: Camry 2.0G, Camry 2.0Q, Camry 2.5Q và Camry 2.5HV. Với thiết kế trẻ trung, thanh lịch, không gian nội thất sang trọng, tiện nghi cao cấp cùng nhiều tính năng an toàn, Toyota Camry được nhiều người dùng lựa chọn để khẳng định phong cách.', 1000, 'anh2.jpg'),
(3, 3, 'CORROLA ALTIS', 'Toyota Corolla Altis dần mất đi sức hút bởi những đối thủ cạnh tranh gay gắt, để lấy lại thị phần của mình, năm 2022 Toyota đã cho ra mắt phiên bản mới, với nhiều sự đổi mới. Điển hình là trong lối thiết kế hiện đại, khoang nội thất rộng rãi cùng nhiều tiện nghi, động cơ vận hành mạnh mẽ và tiết kiệm nhiên liệu.', 754, 'anh3.jpg'),
(4, 4, 'WIGO', 'Sở hữu ưu thế về kích thước nhỏ gọn, thiết kế năng động cá tính, nội thất rộng thoáng, cùng khả năng vận hành êm ái và nhiều tính năng an toàn hiện đại, Toyota Wigo 2023 được đánh giá là lựa chọn hàng đầu trong phân khúc xe cỡ nhỏ giá rẻ tại Việt Nam.', 360, 'anh4.jpg'),
(5, 5, 'INNOVA', 'Toyota Innova 2021 được làm mới kiểu dáng thiết kế đầu xe, bổ sung thêm một số trang bị tính năng mới cho cả 4 phiên bản và điều chỉnh giá bán phù hợp hơn, giúp xe thu hút khách hàng tìm kiếm một chiếc xe 7-8 chỗ ngồi rộng rãi cho gia đình và công việc kinh doanh. ', 755, 'anh5.jpg'),
(6, 6, 'INNOVA CROSS ', 'Toyota Innova Cross 2023 sở hữu diện mạo lai SUV mạnh mẽ, trẻ trung, năng động. Xe nổi bật với lưới tản nhiệt hình lục giác nối liền hệ thống đèn trước full-LED; la-zăng hợp kim 18 inch, 5 chấu kép, mạ bạc; đèn hậu LED mỏng, kéo dài theo chiều ngang.', 990, 'anh7.jpg'),
(7, 7, 'INNOVA  CROSS CVT TOP', 'Toyota Innova Cross 2023 sở hữu diện mạo lai SUV mạnh mẽ, trẻ trung, năng động. Xe nổi bật với lưới tản nhiệt hình lục giác nối liền hệ thống đèn trước full-LED; la-zăng hợp kim 18 inch, 5 chấu kép, mạ bạc; đèn hậu LED mỏng, kéo dài theo chiều ngang.', 810, 'anh6.jpg'),
(8, 8, 'VELOZ CROSS CVT ', 'Mô tả Toyota Veloz Cross CVT Top 2022 - Xe 1 chủ từ mới, cam kết không tai nan, không ngập nước, máy số nguyên rin - Hỗ trợ trả góp lên đến 80% giá trị xe, lãi suất ưu đãi\r\nFuel Type: Xăng', 660, 'anh8.jpg'),
(9, 9, 'AVANZA PREMIO CVT ', ' Động cơ 2NR-VE 1.5L, 4 xy lanh thẳng hàng với dung tích 1496cc, đạt tiêu chuẩn khí thải Euro 5, với công suất cực đại đạt 105Hp tại vòng tua 6000rpm mang lại cảm giác vận hành mạnh mẽ. - Hộp số tự động vô cấp (CVT) được trang bị trên phiên bản Avanza Premio CVT mang lại trải nghiệm vận hành mượt mà, tiết kiệm nhiên liệu.', 598, 'anh9.jpg'),
(10, 10, 'YARIS CROSS', 'Theo đuổi ngôn ngữ thiết kế “Mạnh mẽ và Năng động”, Toyota Yaris Cross tạo cảm giác khỏe khoắn với lưới tản nhiệt và phần cản trước dạng hình thang. Những đường nét góc cạnh của cụm đèn trước và đèn sương mù, mang đến hình ảnh năng động của 1 chiếc SUV hiện đại.', 760, 'anh10.jpg'),
(11, 11, 'COROLLA CROSS', 'Toyota Corolla Cross năm 2023 ra mắt tại thị trường Việt Nam với 3 phiên bản, bao gồm: Toyota Corolla Cross 1.8G, Toyota Corolla Cross 1.8V và Toyota Corolla Cross 1.8 HEV. Với thiết kế nổi bật, sang trọng, không gian nội thất rộng rãi cùng nhiều tính năng an toàn, mẫu xe này đang được rất nhiều người tiêu dùng ưa chuộng.', 820, 'anh11.jpg'),
(12, 12, 'RAIZE', 'Toyota Raize là mẫu xe nằm trong phân khúc SUV đô thị cỡ nhỏ với ngoại thất được thiết kế theo phong cách năng động, trẻ trung và cá tính. Bên cạnh đó, không gian nội thất rộng rãi được bố trí thông minh, khả năng vận hành linh hoạt cùng các tính năng an toàn được trang bị trên Toyota Raize sẽ mang lại cảm giác lái thú vị hơn cho người dùng.', 498, 'anh12.jpg'),
(13, 13, 'FORTUNER', 'Toyota Fortuner (còn được gọi là Toyota SW4) là mẫu SUV 7 chỗ, cỡ trung được sản xuất bởi hãng xe Toyota, Nhật Bản. Fortuner ra mắt lần đầu tiên vào năm 2004, sử dụng chung nền tảng khung gầm với Toyota Hilux, có hệ dẫn động cầu sau (RWD) hoặc 4 bánh chủ động (AWD).', 1022, 'anh13.jpg'),
(14, 14, 'HILUX', 'HILUX mở ra kỷ nguyên mới cho dòng xe bán tải hiện đại, phong cách, uy lực và đa năng. Với từng chi tiết được thiết kế mạnh mẽ và đầy cảm xúc, chỉ HILUX mới có thể đem đến những cuộc chinh phục xứng tầm.', 706, 'anh14.jpg'),
(15, 15, 'LAND CRUISER ', 'Toyota Land Cruiser 300 là một trong những mẫu xe SUV hạng sang và đa dụng nhất trên thị trường hiện nay. Với thiết kế ngoại hình mạnh mẽ, nội thất sang trọng và động cơ mạnh mẽ, Toyota Land Cruiser mang đến cho người dùng trải nghiệm lái xe tuyệt vời trên mọi địa hình.', 4650, 'anh15.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sign_up`
--

CREATE TABLE `sign_up` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(460) NOT NULL,
  `password` varchar(460) NOT NULL,
  `nationality` varchar(400) NOT NULL,
  `birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sign_up`
--

INSERT INTO `sign_up` (`id`, `userid`, `username`, `email`, `password`, `nationality`, `birth`) VALUES
(29, 92233113, 'MinhTan', '22h1120116@ut.edu.vn', '27092004', 'Viet Nam', '2004-09-27'),
(30, 2948, 'tan2709', 'tantran2709vn@gmail.com', '20042109', 'Italy', '1021-02-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `test`
--

INSERT INTO `test` (`id`, `username`, `email`, `date`, `location`) VALUES
(2, 'haha', '22h1120116@ut.edu.vn', '1212-12-12', 'Hà Nội'),
(3, 'haha', '22h1120116@ut.edu.vn', '2013-03-13', 'Lâm Đồng'),
(4, 'hihi', 'tantran2709vn@gmail.com', '2124-02-01', 'Huế'),
(5, 'hihi', 'tantran2709vn@gmail.com', '2222-02-22', 'Huế');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`,`product_name`,`price`,`image`),
  ADD KEY `date` (`date`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`,`email`,`birth`),
  ADD KEY `username` (`username`(768)),
  ADD KEY `Quôc tịch` (`nationality`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
