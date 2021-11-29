-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2021 lúc 02:41 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `postId` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` char(10) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `username` char(20) NOT NULL,
  `name` char(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(10) NOT NULL,
  `phone` char(10) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`username`, `name`, `email`, `password`, `dob`, `gender`, `phone`, `avatar`) VALUES
('username', 'username', 'username@gmail.com', '12345', '2001-12-21', 'Nam', '0123456789', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREmbnZWn2Zu9YoWUnDFHMJuY5gBcdKyZD01A&usqp=CAU');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL,
  `SEOkey` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` char(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `type`, `quantity`, `description`) VALUES
(1, 'Hộp mực máy in Canon LBP 2900, 3000', 115000, 'https://salt.tikicdn.com/cache/200x200/ts/product/ef/3b/f4/5f94c0e74cd8e352ea99a5b427ee89cc.jpg.webp', 'Mực in', 10, 'ộp mực máy in Canon 2900 ,HP3050, 3055, 1319,1020 ,1010 ,1018 và máy in HP3050, 3055, 1319/Canon 2900 Mã hộp mực/ Cartridge : 12A Mẫu mã: Mới 100%, Nguyên đai, Nguyên kiện Màu sắc: Đen (Black) Loại mực : Laser Trọng lượng: 0.8 kg'),
(2, 'Hộp mực máy in 12A cho máy in Canon 2900 3000 HP 1010 1020', 115000, 'https://salt.tikicdn.com/cache/200x200/ts/product/84/9c/38/c1eeae432e40b7871c4892c6989098df.jpg.webp', 'Mực in', 10, 'Mẫu mã: Mới 100%, Nguyên đai, Nguyên kiện Hãng sản xuất : china Màu sắc: Đen (Black) Loại mực : Laser Màu mực : Đen (Black) Trọng lượng: 0.8 kg Hộp mực dùng cho máy in: Canon LBP 2900'),
(3, 'Hộp mực 12A hộp mực máy in cho Canon 2900 HPQ2612A', 115000, 'https://salt.tikicdn.com/cache/200x200/ts/product/0c/b9/c1/68a71c0dd3c0009bb61036a59713a639.jpg.webp', 'Mực in', 10, 'Hộp mực có thể sử dụng cho nhiều dòng máy in khác nhau: Canon 2900, HPQ2612A 1020 M1005 M1010 1018. Chất lượng trang in đảm bảo tiêu chí: Chữ in ra đen, đẹp, sắc nét.'),
(4, 'Hộp mực máy in 12A cho máy in Canon', 200000, 'https://salt.tikicdn.com/cache/200x200/ts/product/b5/57/20/a87b03840c02c1ae490e8fe895b41e95.jpg.webp', 'Mực in', 10, 'Hộp mực 12a giá rẻ dùng cho máy in HP 1020 ,3050, 3055, 1319,1010 ,1018 Canon 2900 Hộp mực được sản xuất  bởi công nghệ cao đảm bảo giúp bản in ra rõ nét, đều, đậm, đẹp Số trang in lên tới 2000 Trang A4 với bản in có độ phủ mực 5%'),
(5, 'Hộp mực in canon Lbp 6030/ 6030w\r\n\r\n', 120000, 'https://salt.tikicdn.com/cache/200x200/ts/product/28/4e/27/a3b114d2c70522eb810ad1cc92df2208.jpg.webp', 'Mực in', 10, 'In ấn dễ dàng và không gặp vấn đề về bản in sọc, mờ hay bị đốm mực. In hình ảnh với màu sắc trung thực và các tài liệu cho phép lưu trữ lâu dài.Tối ưu hoá khả năng hoạt động của thiết bị in ấn. '),
(6, 'Hộp mực in laser HP 107A (KHÔNG CHIP)', 268000, 'https://salt.tikicdn.com/cache/200x200/ts/product/0e/2e/bd/5bb725f3d3ff1c4e748f8648e2de9398.png.webp', 'Mực in', 10, 'Mực hộp máy in laser HP 107Acó chất lượng màu in rõ nét, ấn tượng rất lý tưởng khi in tài liệu quảng cáo, báo cáo, hồ sơ mẫu.. phù hợp với các doanh nghiệp, cá nhân, gia đình.'),
(7, 'Máy In Lazer Trắng Đen Đa Năng HP', 4700000, 'https://salt.tikicdn.com/cache/200x200/ts/product/e4/2b/c9/c3f6bfb070571283bf95da12b8ad4097.jpg.webp', 'Máy in', 10, 'Chức năng: In, sao chép, quét Công nghệ in: Laser Dùng mực HP 103A ; HP 103AD; HP 104A Kết nối: USB 2.0;Wifi 802 Bộ nhớ: 64M Các dòng mực in sử dụng: Mực in HP 103A, 103AD; 108A; 108AD; 109A; 104A'),
(8, 'Máy In Lazer Trắng Đen Đơn Năng Canon', 3630000, 'https://salt.tikicdn.com/cache/200x200/ts/product/16/a9/c9/ec0f9f08636284b3a703caa4c566b2f0.jpg.webp', 'Máy in', 10, 'Loại máy: Máy in lazer Tốc độ in: 12 trang/phút (A4) Bộ nhớ: Dùng bộ nhớ PC (bộ nhớ chuẩn 2 MB trên board) Khay giấy: 150 tờ Kết nối: USB 2.0 tốc độ cao Mực in: Cartridge 303'),
(9, 'Máy In Lazer Trắng Đen Đa Chức Năng HP 135A', 2990000, 'https://salt.tikicdn.com/cache/200x200/ts/product/9d/7c/5b/2250715a85c5215b46c3bc2ac624fabd.jpg.webp', 'Máy in', 10, 'Từ in ấn cho đến scan, photocopy, HP Laser MFP 135A đều có thể thực hiện với mức giá phải chăng, không hề thua kém thiết in ấn cao cấp nào.'),
(10, 'Máy In HP Neverstop Laser 1000A', 2690000, 'https://salt.tikicdn.com/cache/200x200/ts/product/dd/e0/c7/395c5232b3dea18097e3ec237a9991d7.png.webp', 'Máy in', 10, '- Tốc độ : 20 trang / phút khổ A4.\r\n- Khổ giấy tối đa : A4.\r\n- Độ phân giải : 600 x 600 dpi.\r\n- Bộ nhớ chuẩn : 32 MB.\r\n- Bộ xử lý CPU : 500 MHz.'),
(11, 'Máy In Laser Đa Năng Brother MFC-L2701D', 6189000, 'https://salt.tikicdn.com/cache/200x200/media/catalog/product/b/i/big_132350_may-in-laser-da-chuc-nang-brother-mfc-l2701d.jpg.webp', 'Máy in', 10, 'Máy in laser đa năng, có khả năng Scan, Copy, Fax In hai mặt tự động Kết nối mạng qua cổng Ethernet, Wifi Tốc độ in 30 trang/phút Độ phân giải: 2400 × 600 dpi'),
(12, 'Máy In HP Laser Đa Năng Jet Pro M404dn', 6500000, 'https://salt.tikicdn.com/cache/200x200/ts/product/14/05/85/684f1678db9e137fd8635f6dcd02fbf1.jpg.webp', 'Máy in', 10, 'Tính năng có sẵn: In 2 mặt tự động (duplex), in mạng Khổ giấy tối thiểu: A5 Khổ giấy tối đa: A4 Tốc độ: 38 trang/phút Bộ nhớ RAM: 256 MB Độ phân giải: 1.200 x 1.200 dpi.'),
(13, 'Máy Scan Fujitsu SV600', 19190000, 'https://shopmayvanphong.vn/wp-content/uploads/2021/02/sv600-500x500.jpg', 'Máy văn phòng', 10, 'Máy Scanner Fujitsu SV600 (Scan Book) Contactless Document Scanner, công nghệ VI technology không quét trực tiếp - contactless scanning'),
(14, 'Máy Scan Fujitsu 30F', 18340000, 'https://shopmayvanphong.vn/wp-content/uploads/2021/02/fujitsu-sp30-1-500x500.jpg', 'Máy văn phòng', 10, 'Độ phân giải :600dpi; Kiểu quét: ADF (Automatic Document Feeder) và bàn quét\r\nTốc độ quét: 30 tờ/phút = 60 ảnh/phút\r\nKhổ giấy: Lớn nhất A4, A3 (with carier sheet)'),
(15, 'Máy Hủy Tài Liệu Bonsaii', 4950000, 'https://shopmayvanphong.vn/wp-content/uploads/2020/12/3s16-1-500x500.jpg', 'Máy văn phòng', 10, '- Kiểu hủy : Sợi\r\n- Số lượng hủy : 18 tờ A4 (80gm)\r\n- Kích thước hủy : 4x35 mm'),
(16, 'Máy Hủy Tài Liệu LBA', 4150000, 'https://shopmayvanphong.vn/wp-content/uploads/2020/12/p13cd-500x500.jpg', 'Máy văn phòng', 10, 'Vụn thành mảnh 2x8mm\r\nCông suất hủy (75g A4): 8\r\nTốc độ hủy 3.0m/phút\r\nMiệng cắt rộng: 220mm\r\nThùng giấy 18L\r\n'),
(17, 'Máy In Phun Màu HP', 2690000, 'https://shopmayvanphong.vn/wp-content/uploads/2021/09/hp-115-2-500x500.jpg', 'Máy văn phòng', 10, 'Chức năng: Copy, In 1 mặt, Scan (Màu)\r\nHộp mực kèm theo in được: Khoảng 5000 trang A4 (độ phủ 5%)\r\nCông suất in khuyến nghị: 100-1000 trang/tháng'),
(18, 'Máy In Màu Đa Chức Năng', 9100000, 'https://shopmayvanphong.vn/wp-content/uploads/2021/08/canon-641-1-500x500.jpg', 'Máy văn phòng', 10, 'In trắng đen: 18 trang/phút\r\nIn màu: 18 trang/phút\r\nĐộ phân giải: 600 x 600 dpi, 1.200 × 1.200 dpi (nâng cao)'),
(19, 'Laptop HP Envy 13 ba1030TU', 30690000, 'https://cdn.tgdd.vn/Products/Images/44/230240/hp-envy-13-ba1030tu-i7-2k0b6pa-101820-091857-600x600.jpg', 'Thiết bị công nghệ', 10, 'Hiệu suất cao cho công việc\r\nThiết kế mỏng nhẹ, sang trọng'),
(20, 'Laptop Lenovo ThinkBook 15 G2', 20490000, 'https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-11-600x600.jpg', 'Thiết bị công nghệ', 10, 'Cấu hình mạnh mẽ\r\nHình ảnh sắc nét'),
(21, 'Laptop MSI Summit E16 Flip', 46990000, 'https://cdn.tgdd.vn/Products/Images/44/246950/msi-summit-e16-flip-i7-082vn-600x600.jpg', 'Thiết bị công nghệ', 10, 'Hiệu năng vượt trội\r\nTản nhiệt tối ưu, hoạt động êm ái'),
(22, 'Laptop HP EliteBook X360 830 G8', 41590000, 'https://cdn.tgdd.vn/Products/Images/44/242411/hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 'Thiết bị công nghệ', 10, 'Hiệu năng vượt trội\r\nÂm thanh sống động'),
(23, 'Laptop Lenovo Ideapad Gaming 3 15IMH05', 26990000, 'https://cdn.tgdd.vn/Products/Images/44/237312/lenovo-ideapad-gaming-3-15imh05-i7-81y4013uvn-600x600.jpg', 'Thiết bị công nghệ', 10, 'Cấu hình mạnh mẽ\r\nĐồ họa mượt mà'),
(24, 'Laptop Acer Aspire 7 Gaming A715 42G R4ST R5', 19990000, 'https://cdn.tgdd.vn/Products/Images/44/235405/acer-aspire-7-a715-42g-r4st-r5-nhqaysv004-16-600x600.jpg', 'Thiết bị công nghệ', 10, 'Đồ họa sắc nét, vượt trội\r\nÂm thanh to rõ, sống động'),
(25, 'Khay sắp xếp bàn làm việc', 480000, 'https://storage.googleapis.com/cdn.nhanh.vn/store/25583/ps/20191025/2503201950305_dronjons-desk-organiser__0669935_PE715475_S4.JPG', 'Phụ kiện văn phòng', 10, 'Giúp bạn sắp xếp mọi thứ từ bút, văn phòng phẩm đến USB và bộ sạc.\r\nCó thể sử dụng ở mọi nơi trong ngôi nhà của bạn, ngay cả những nơi ẩm ướt như phòng tắm.'),
(26, 'Set 2 giá đựng tài liệu', 340000, 'https://storage.googleapis.com/cdn.nhanh.vn/store/25583/ps/20191025/2559201945931_dronjons-letter-tray__0669942_PE715480_S4.JPG', 'Phụ kiện văn phòng', 10, 'Khay thư có 2 tầng, nơi bạn có thể tập hợp các hóa đơn và giấy tờ rời.'),
(27, 'Set 2 tập để tài liệu', 290000, 'https://storage.googleapis.com/cdn.nhanh.vn/store/25583/ps/20191025/dronjons_magazine_file__0669945_pe715483_s4.jpg', 'Phụ kiện văn phòng', 10, 'Dễ sử dụng'),
(28, 'Khay sắp xếp bàn làm việc', 450000, 'https://storage.googleapis.com/cdn.nhanh.vn/store/25583/ps/20181110/rissla_desk_organiser_black__0408850_pe569375_s4_500x500.png', 'Phụ kiện văn phòng', 10, 'Giúp bạn giữ cho bàn làm việc của mình thông thoáng khỏi những thứ nhỏ nhặt như bút, thước, điện thoại di động và USB.\r\nBề mặt có thể chịu nắng, chống trầy xước và cọ xát mà không bị mất màu.'),
(29, 'Giá 3 tầng đựng giấy tờ', 320000, 'https://storage.googleapis.com/cdn.nhanh.vn/store/25583/ps/20181110/dokument_letter_tray__250k_500x500.jpg', 'Phụ kiện văn phòng', 10, 'Bạn có thể dễ dàng lấy giấy tờ của mình'),
(30, 'Set 4 tập tài liệu FLUNS', 95000, 'https://storage.googleapis.com/cdn.nhanh.vn/store/25583/ps/20181109/fluns_magazine_file_white__0398648_pe563794_s4_500x500.png', 'Phụ kiện văn phòng', 10, 'Dễ sử dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` char(10) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `postId` (`postId`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`username`) REFERENCES `members` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
