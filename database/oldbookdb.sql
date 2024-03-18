
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `oldbookdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng của `book_info`
--

CREATE TABLE `book_info` (
  `bid` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` decimal(8,3) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Kết xuất dữ liệu cho bảng `book_info`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng của `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `book_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(8,3) NOT NULL,
  `image` varchar(30) NOT NULL,
  `quantity` int(25) NOT NULL,
  `total` decimal(8,3) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Kết xuất dữ liệu cho bảng `cart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng của `confirm_order`
--

CREATE TABLE `confirm_order` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(12) NOT NULL,
  `address` varchar(500) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `total_books` varchar(500) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'Chưa giải quyết',
  `date` varchar(20) NOT NULL,
  `total_price` decimal(8,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Kết xuất dữ liệu cho bảng `confirm_order`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng của `msg`
--

CREATE TABLE `msg` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(20) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Kết xuất dữ liệu cho bảng `msg`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng của `orders`
--

CREATE TABLE `orders` (
  `id` int(225) NOT NULL,
  `user_id` int(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `book` varchar(50) NOT NULL,
  `unit_price` decimal(8,3) NOT NULL,
  `quantity` int(10) NOT NULL,
  `sub_total` decimal(8,3) NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'Chưa giải quyết'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Kết xuất dữ liệu cho bảng `orders`
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng của `users_info`
--

CREATE TABLE `users_info` (
  `Id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Kết xuất dữ liệu cho bảng `users_info`
--

INSERT INTO `users_info` (`Id`, `name`, `surname`, `email`, `password`, `user_type`) VALUES
(01, 'khang', 'khang', 'khang@gmail.com', 'khang', 'User'),
(02, 'admin', 'admin', 'admin@gmail.com', 'admin', 'Admin'),
(03, 'admin2', 'admin2', 'admin2@gmail.com', 'admin', 'Admin');

--
-- Khoá chính cho các bảng
--

--
-- Khóa chính cho bảng `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`bid`);

--
-- Khóa chính cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Khóa chính cho bảng `confirm_order`
--
ALTER TABLE `confirm_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Khóa chính cho bảng `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Khóa chính cho bảng `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT cho bảng `book_info`
--
ALTER TABLE `book_info`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT cho bảng `confirm_order`
--
ALTER TABLE `confirm_order`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users_info`
--
ALTER TABLE `users_info`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;
