-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 03:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */; 
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_code`, `new_price`, `quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(14, 5, 'Laptop HP ZBook 15 G6-6CJ09AV (i7-9850H) (Bạc)', 'GGFS005', '52590000', 2, '', 'jOe8VlRQarrM4QARP3J1QCgx4u1CxqOW7GRkCtgc', NULL, NULL),
(15, 10, 'Laptop Asus Vivobook A412FA-EK377T (i3-8145U) (Bạc)', 'FBLS004', '12090000', 2, '', 'GVUN0d36Qet6umd29HE0vzsrvqJGmdBNpTqLMBPQ', NULL, NULL),
(16, 25, 'PC Dell AIO Inspiron 3280B (i5 8265U/4GB/1TB/MX110 2GB/Win10)', 'WFS010', '18990000', 1, '', 'GVUN0d36Qet6umd29HE0vzsrvqJGmdBNpTqLMBPQ', NULL, NULL),
(17, 18, 'Chuột máy tính Logitech B100', 'FMJ001', '75000', 1, '', 'GVUN0d36Qet6umd29HE0vzsrvqJGmdBNpTqLMBPQ', NULL, NULL),
(21, 5, 'Laptop HP ZBook 15 G6-6CJ09AV (i7-9850H) (Bạc)', 'GGFS005', '52590000', 1, 'tuongvy020998@gmail.com', 'RH73ovtVBjfIy6r693F94EjAZnYU6rjA1AXVUrxC', NULL, NULL),
(23, 20, 'Bàn phím Logitech K120', 'WCS001', '149000', 1, 'vynt@msx.vn', 'FlIxKp5cgoAPl3KOTjPCrgZiW7Ode319wbXRwo0O', NULL, NULL),
(24, 18, 'Chuột máy tính Logitech B100', 'FMJ001', '75000', 1, 'vynt@msx.vn', 'FlIxKp5cgoAPl3KOTjPCrgZiW7Ode319wbXRwo0O', NULL, NULL),
(27, 15, 'PC Asus AIO Vivo V241FA (i3 8145U/4GB/512GB SSD/Win10)', 'MCJ001', '16990000', 1, 'tuongvy020998@gmail.com', 'YiquzVmJwzOwz6oFlifzxnWxPMvVKxdklsTmuGLY', NULL, NULL),
(28, 19, 'Laptop Dell Inspiron 15 3580 (3580-70194511) (i5-8265U) (Bạc)', 'MFJ005', '13490000', 1, 'tuongvy020998@gmail.com', 'zmPgMGO2i7wHbBONC68MgHXJuALFXoklBpqSmjWP', NULL, NULL),
(29, 5, 'Laptop HP ZBook 15 G6-6CJ09AV (i7-9850H) (Bạc)', 'GGFS005', '52590000', 1, '', 'A637lExvbGMH9M3KbVbvzslXks8Me9CCGU2Ml0Do', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` double NOT NULL,
  `Parent_id` double DEFAULT NULL,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Parent_id`, `Name`, `description`, `url`, `created_at`, `updated_at`) VALUES
(1, 0, 'Laptop & Macbook', 'Laptop & Macbook', 'laptop-macbook', '01/01/2020', '01/01/2020'),
(2, 1, 'Macbook', 'Macbook', 'mac-book', '01/01/2020', '01/01/2020'),
(3, 0, 'PC - Máy tính bộ', 'PC - Máy tính bộ', 'pc-ma tinh bo', '01/01/2020', '01/01/2020'),
(4, 3, 'PC ACER', 'PC - Máy tính bộ Acer', 'pc-acer', '01/01/2020', '01/01/2020'),
(5, 1, 'HP', 'Laptop HP', 'laptop-hp', '01/01/2020', '01/01/2020'),
(6, 1, 'ACER', 'Laptop Acer', 'laptop-acer', '01/01/2020', '01/01/2020'),
(7, 1, 'LENOVO', 'Laptop Lenovo', 'laptop-lenovo', '01/01/2020', '01/01/2020'),
(8, 15, 'Tai nghe', 'Tai nghe', 'tai-nghe', '01/01/2020', '01/01/2020'),
(9, 1, 'ASUS', 'Laptop Asus', 'laptop-asus', '01/01/2020', '01/01/2020'),
(10, 1, 'LG', 'Laptop LG', 'laptop-LG', '01/01/2020', '01/01/2020'),
(11, 0, 'Linh kiện', 'Linh kiện', 'linh-kien', '01/01/2020', '01/01/2020'),
(12, 11, 'Bàn phím', 'Bàn phím máy tính', 'ban-phim-may-tinh', '01/01/2020', '01/01/2020'),
(13, 1, 'DELL', 'Laptop Dell', 'laptop-dell', '01/01/2020', '01/01/2020'),
(14, 3, 'PC APPLE', 'PC - Máy tính bộ Apple', 'pc-apple', '01/01/2020', '01/01/2020'),
(15, 0, 'Phụ kiện', 'Phụ kiện', 'phu-kien', '01/01/2020', '01/01/2020'),
(16, 3, 'PC DELL', 'PC - Máy tính bộ Dell', 'pc-dell', '01/01/2020', '01/01/2020'),
(17, 3, 'PC HP', 'PC - Máy tính bộ HP', 'pc-hp', '01/01/2020', '01/01/2020'),
(18, 1, 'MSI', 'Laptop MSI', 'laptop-msi', '01/01/2020', '01/01/2020'),
(19, 11, 'RAM - Bộ nhớ', 'RAM - Bộ nhớ máy tính', 'ram-bo-nho', '01/01/2020', '01/01/2020'),
(20, 11, 'Ổ cứng', 'Ổ cứng máy tính', 'o-cung-may-tinh', '01/01/2020', '01/01/2020'),
(21, 11, 'Mainboard - Bo mạch chủ', 'Bo mạch chủ', 'bo-mach-chu', '01/01/2020', '01/01/2020'),
(22, 11, 'Tản nhiệt', 'Đế tản nhiệt máy tính', 'tan-nhiet', '01/01/2020', '01/01/2020'),
(23, 11, 'Case - Thùng máy tính', 'Thùng máy tính', 'thung-may-tinh', '01/01/2020', '01/01/2020'),
(24, 3, 'PC ASUS', 'PC - Máy tính bộ Asus', 'pc-asus', '01/01/2020', '01/01/2020'),
(25, 15, 'Chuột máy tính', 'Chuột máy tính', 'chuot-may-tinh', '01/01/2020', '01/01/2020'),
(26, 15, 'Sạc laptop', 'Dây sạc laptop', 'sac-laptop', '01/01/2020', '01/01/2020'),
(27, 15, 'Pin laptop', 'Pin laptop', 'pin-laptop', '01/01/2020', '01/01/2020'),
(28, 15, 'Balo laptop', 'Balo laptop', 'ba-lo-laptop', '01/01/2020', '01/01/2020'),
(29, 15, 'Túi chống sốc', 'Túi chống sốc laptop', 'tui-chong-soc', '01/01/2020', '01/01/2020');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AG', 'An Giang'),
(2, 'BR', 'Bà Rịa - Vũng Tàu'),
(3, 'BG', 'Bắc Giang'),
(4, 'BK', 'Bắc Kạn'),
(5, 'BL', 'Bạc Liêu'),
(6, 'BN', 'Bắc Ninh'),
(7, 'BT', 'Bến Tre'),
(8, 'BD', 'Bình Dương'),
(9, 'BD', 'Bình Định'),
(10, 'BP', 'Bình Phước'),
(11, 'BT', 'Bình Thuận'),
(12, 'CM', 'Cà Mau'),
(13, 'CT', 'Cần Thơ'),
(14, 'CB', 'Cao Bằng'),
(15, 'DN', 'Đà Nẵng'),
(16, 'DL', 'Đắk Lắk'),
(17, 'DN', 'Đắk Nông'),
(18, 'DB', 'Điện Biên'),
(19, 'DN', 'Đồng Nai'),
(20, 'DT', 'Đồng Tháp'),
(21, 'GL', 'Gia Lai'),
(22, 'HG', 'Hà Giang'),
(23, 'HN', 'Hà Nam'),
(24, 'HN', 'Hà Nội'),
(25, 'HT', 'Hà Tĩnh'),
(26, 'HD', 'Hải Dương'),
(27, 'HP', 'Hải Phòng'),
(28, 'HG', 'Hậu Giang'),
(29, 'HB', 'Hòa Bình'),
(30, 'HY', 'Hưng Yên'),
(31, 'KH', 'Khánh Hòa'),
(32, 'KG', 'Kiên Giang'),
(33, 'KT', 'Kon Tum'),
(34, 'LC', 'Lai Châu'),
(35, 'LD', 'Lâm Đồng'),
(36, 'LS', 'Lạng Sơn'),
(37, 'LC', 'Lào Cai'),
(38, 'LA', 'Long An'),
(39, 'ND', 'Nam Định'),
(40, 'NA', 'Nghệ An'),
(41, 'NB', 'Ninh Bình'),
(42, 'NT', 'Ninh Thuận'),
(43, 'PT', 'Phú Thọ'),
(44, 'PY', 'Phú Yên'),
(45, 'QB', 'Quảng Bình'),
(46, 'QN', 'Quảng Nam'),
(47, 'QN', 'Quảng Ngãi'),
(48, 'QN', 'Quảng Ninh'),
(49, 'QT', 'Quảng Trị'),
(50, 'ST', 'Sóc Trăng'),
(51, 'SL', 'Sơn La'),
(52, 'TN', 'Tây Ninh'),
(53, 'TB', 'Thái Bình'),
(54, 'TN', 'Thái Nguyên'),
(55, 'TH', 'Thanh Hóa'),
(56, 'TT', 'Thừa Thiên Huế'),
(57, 'TG', 'Tiền Giang'),
(58, 'HC', 'TP Hồ Chí Minh'),
(59, 'TV', 'Trà Vinh'),
(60, 'TQ', 'Tuyên Quang'),
(61, 'VL', 'Vĩnh Long'),
(62, 'VP', 'Vĩnh Phúc'),
(63, 'YB', 'Yên Bái');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_18_082027_create_category_table', 2),
(4, '2018_08_21_173456_create_products_table', 3),
(5, '2018_08_24_061945_create_products_attributes_table', 4),
(6, '2018_10_10_072850_create_cart_table', 5),
(7, '2018_10_20_120758_create_coupons_table', 6),
(8, '2018_12_01_114714_create_orders_table', 7),
(9, '2018_12_01_120120_create_orders_products_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charges` float NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_amount` float NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_email`, `name`, `address`, `city`, `state`, `pincode`, `country`, `mobile`, `shipping_charges`, `coupon_code`, `coupon_amount`, `order_status`, `payment_method`, `grand_total`, `created_at`, `updated_at`) VALUES
(13, 2, 'tuongvy020998@gmail.com', 'Vy', '32 Nguy?n Tri?u Lu?t', 'Tân T?o', 'Bình Tân', '71909', 'TP H? Chí Minh', '0389732828', 0, '', 0, 'New', 'paypal', 83070000, '2020-06-15 11:21:22', '2020-06-15 11:21:22'),
(14, 2, 'tuongvy020998@gmail.com', 'Vy', '32 Nguy?n Tri?u Lu?t', 'Tân T?o', 'Bình Tân', '71909', 'TP H? Chí Minh', '0389732828', 0, '', 0, 'New', 'paypal', 83070000, '2020-06-15 11:21:58', '2020-06-15 11:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` int(11) NOT NULL,
  `new_price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thuong_hieu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bao_hanh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mau_sac` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `series_laptop` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `man_hinh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CPU` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thehe_CPU` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `RAM` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chip_do_hoa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `luu_tru` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_cong_luu_tru` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cong_xuat_trinh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cong_ket_noi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ket_noi_khong_day` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ban_phim` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `he_dieu_hanh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kich_thuoc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `khoi_luong` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bao_mat` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `den_LED` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `o_dia` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_code`, `description`, `old_price`, `new_price`, `image`, `thuong_hieu`, `bao_hanh`, `mau_sac`, `series_laptop`, `man_hinh`, `CPU`, `thehe_CPU`, `RAM`, `chip_do_hoa`, `luu_tru`, `so_cong_luu_tru`, `cong_xuat_trinh`, `cong_ket_noi`, `ket_noi_khong_day`, `ban_phim`, `he_dieu_hanh`, `kich_thuoc`, `pin`, `khoi_luong`, `bao_mat`, `den_LED`, `o_dia`, `created_at`, `updated_at`) VALUES
(1, 2, 'Laptop MacBook Pro 2019 13.3\" MUHN2SA/A (Xám)', 'MAC0001', 'Hiệu năng xử lý mạnh mẽ\r\nVới bộ xử lý Intel Core mới nhất, MacBook Pro 2019 đạt đến tầm cao mới về hiệu năng tính toán. Bộ xử lý Intel Core i9 8 nhân trên phiên bản 15-inch và bộ xử lý Intel Core 4 nhân trên phiên bản 13-inch giúp giải quyết nhanh chóng những tác vụ công việc khó khăn nhất như: xử lý cấp độ như biên dịch mã, render mô hình 3D, thêm hiệu ứng đặc biệt, xếp lớp nhiều bản nhạc hoặc mã hóa video. Bạn sẽ hoàn thành công việc của mình ở mọi nơi.\r\nHiệu suất đồ họa tuyệt đỉnh\r\nMacBook Pro 2019 phiên bản 15-inch được trang bị GPU rời Radeon Pro, kết hợp sức mạnh ấn tượng với hiệu suất năng lượng vượt trội, mang lại cho bạn hiệu năng thực tế trong thời gian thực cho các tác vụ chuyên nghiệp như render các tiêu đề 3D trong Final Cut Pro X. Phiên bản 13-inch trang bị đồ họa tích hợp mạnh mẽ với 128MB DRAM được chia sẻ - gấp đôi so với thế hệ trước - giúp tăng tốc các tác vụ đồ họa.\r\n', 34900000, 34490000, 'mac011.jpg', 'APPLE', '12 tháng', 'Xám', 'MacBook Pro', '13.3\" ( 2560 x 1600 ) Quad HD (2K) IPS không cảm ứng , HD webcam', 'Intel Core i5', 'Core i5', '8GB Onboard LPDDR3 2133MHz', 'Intel Iris Plus Graphics 645', '128GB SSD /', '2', '2', '2 x Thunderbolt', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , không phím số , LED', 'macOS', '30 x 21 x 1.5 cm', '59 Wh , Pin liền', ' 1.4 kg', ' Vân tay', ' LED', 'Không', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(2, 2, 'Laptop MacBook Pro 2017 13.3\" MPXR2 (Bạc)', 'MAC0002', 'Laptop Apple Macbook Pro 2017 13.3\" MPXR2 (13.3\"/Core i5/8GB/Iris Plus 640/macOS/1.3 kg)', 33500000, 33000000, 'mac021.PNG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(3, 5, 'Laptop HP Pavilion Gaming 15-dk0003TX (7HR34PA) (i7-9750H) (Đen)', 'HP0001', 'Laptop HP Pavilion Gaming 15-dk0003TX (7HR34PA) (15\" FHD/i7-9750H/16GB/512GB SSD/1TB HDD/GTX 1660Ti/Win10/2.2 kg)', 33990000, 29790000, 'hp011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(4, 5, 'Laptop HP Pavilion 15-cs2032TU (6YZ04PA) (i3-8145U) (Xám)', 'HP0002', 'Laptop HP Pavilion 15-cs2032TU (6YZ04PA) (15\" FHD/i3-8145U/4GB/1TB HDD/UHD 620/Win10/1.8 kg)', 13290000, 12590000, 'hp021.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(5, 5, 'Laptop HP ZBook 15 G6-6CJ09AV (i7-9850H) (Bạc)', 'HP0003', 'Laptop HP ZBook 15 G6 (6CJ09AV) (15\" FHD/i7-9850H/16GB/256GB SSD/Quadro T2000/Free DOS/2.6 kg)', 53990000, 52590000, 'hp031.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(6, 5, 'Laptop HP Pavilion 14-ce3026TU (8WH93PA) (i5-1035G1) (Vàng)', 'HP0004', 'Laptop HP Pavilion 14-ce3026TU (8WH93PA) (14\" FHD/i5-1035G1/8GB/512GB SSD/Intel UHD/Win10/1.6kg)', 17190000, 16290000, 'hp041.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(7, 4, 'PC Acer AIO Aspire C22-865 (i5 8250U/4GB/1TB/128GB SSD/Win10) 21.5\" FHD (DQ.BBSSV.003)', 'PAC0001', 'PC Acer Aspire C22-865 AIO DQ.BBSSV.003 (i5-8250U/4GB/128GB SSD/1TB HDD/UHD 620/Win10)', 16990000, 16490000, 'pac011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(8, 4, 'PC Acer Aspire TC-865 (G5420/4GB/1TB/Endless) (DT.BARSV.009)', 'PAC0002', 'PC Acer Aspire TC-865 (DT.BARSV.009) (Pentium G5420/4GB/1TB HDD/UHD 610/Endless)', 8290000, 7790000, 'pac021.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(9, 4, 'PC ACER AS XC-885 (i7 8700/4GB/1TB/Endless) (DT.BAQSV.004)', 'PAC0003', 'Máy tính để bàn - PC Acer AS XC-885 DT.BAQSV.004 (i7-8700/4GB/1TB HDD/UHD 630/Endless)', 15890000, 15390000, 'pac031.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(10, 9, 'Laptop Asus Vivobook A412FA-EK377T (i3-8145U) (Bạc)', 'AS0001', 'Laptop ASUS VivoBook 14 A412FA-EK377T (14\" FHD/i3-8145U/4GB /256GB SSD/UHD 620/Win10/1.5 kg)', 13590000, 12090000, 'as011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(11, 9, 'Laptop Asus ROG Strix Scar III G531G_N-VAZ160T (i7-9750H)', 'AS0002', 'Laptop ASUS ROG Strix Scar III G531GN-VAZ160T (15\" FHD/i7-9750H/16GB/512GB SSD/RTX 2060/Win10/2.6 kg)', 49990000, 48290000, 'as021.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(12, 9, 'Laptop Asus Pro P3540FA-BR0539 (i3-8145U) (Xám)', 'AS0003', 'Laptop ASUS PRO P3540FA-BR0539 (15\" FHD/i3-8145U/4GB/1TB HDD/UHD 620/Endless/1.8kg)', 12990000, 11490000, 'as031.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(13, 10, 'Laptop LG 17Z990-V.AH75A5 (i7-8565U) (Bạc)', 'LG0001', 'Laptop LG Gram 17Z990-V.AH75A5 (17\" QHD/i7-8565U/8GB/512GB SSD/UHD 620/Win10/1.3 kg)', 39990000, 39490000, 'lg011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(14, 10, 'Laptop LG Gram 14ZD90N-V.AX53A5 (i5-1035G7) (Trắng)', 'LG0002', 'Laptop LG Gram 14ZD90N-V.AX53A5 (14\" FHD/i5-1035G7/8GB/256GB SSD/Intel Iris Plus/Free DOS/1kg)', 29000000, 27500000, 'lg021.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(15, 24, 'PC Asus AIO Vivo V241FA (i3 8145U/4GB/512GB SSD/Win10)', 'PAS0001', 'PC ASUS Vivo AiO V241FA (V241FAT-BA067T) (23.8\" FHD/i3-8145U/4GB/512GB SSD/UHD 620/Win10)', 17490000, 16990000, 'pas011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(16, 24, 'PC Asus Pro D540SA (i3 8100/4GB/1TB/Endless)', 'PAS0002', 'Máy tính để bàn - PC ASUS D540SA I38100012D (i3-8100/4GB/1TB HDD/UHD 630/Endless)', 10900000, 10490000, 'pas021.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(17, 24, 'PC Asus AIO Vivo V222UA (i3 8130U/4GB/1TB/Win 10)', 'PAS0003', 'Máy tính để bàn - PC ASUS Vivo AiO V222UA (V222UAK-BA025T) (21.5\"/i3-8130U/4GB/1TB HDD/UHD 620/Win10)', 13990000, 13490000, 'pas031.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(18, 25, 'Chuột máy tính Logitech B100', 'CMT0001', 'Chuột máy tính Logitech B100', 100000, 75000, 'cmt011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(19, 13, 'Laptop Dell Inspiron 15 3580 (3580-70194511) (i5-8265U) (Bạc)', 'DE0001', 'Laptop Dell Inspiron 3580-P75F106N80I (15\" HD/i5-8265U/4GB/1TB HDD/UHD 620/Win10/2.3 kg)', 15190000, 13490000, 'D011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(20, 12, 'Bàn phím Logitech K120', 'BP0001', 'Bàn phím Logitech K120', 200000, 149000, 'bp011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(21, 12, 'Bàn phím cơ Newmen GM819', 'BP0002', 'Bàn phím cơ Newmen GM819', 1150000, 849000, 'bp021.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(22, 12, 'Bàn phím cơ Gaming DAREU EK1280 RGB Blue D Switch (Đen)', 'BP0003', 'Bàn phím cơ Gaming DAREU EK1280 RGB Blue D Switch (Đen)', 1490000, 990000, 'bp031.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(23, 14, 'PC iMac MRQY2SA/A (2019)', 'PAP0001', 'PC Apple iMac 2019 MRQY2SA/A (27\"/Core i5/8GB/1TB HDD/Radeon Pro 575X/Mac OS)', 50900000, 47990000, 'pap011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(24, 14, 'PC iMac MRT32SA/A (2019)', 'PAP0002', 'PC Apple iMac 2019 MRT32SA/A (21.5\"/Core i3/8GB/1TB HDD/Radeon Pro 555X/Mac OS)', 34300000, 32900000, 'pap021.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(25, 16, 'PC Dell AIO Inspiron 3280B (i5 8265U/4GB/1TB/MX110 2GB/Win10)', 'PDE0001', 'PC Dell Inspiron 3280 AIO 3280B (21.5\" FHD/i5-8265U/4GB/1TB HDD/MX110/Win10)', 19490000, 18990000, 'pde011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(26, 16, 'PC Dell Inspiron N3471A SFF (i5 9400/8GB/1TB/Win10)', 'PDE0002', 'PC Dell Inspiron 3471 SFF N3471A (i5-9400/8GB/1TB HDD/UHD 630/Win10)', 14790000, 14290000, 'pde021.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(27, 17, 'PC HP AIO EliteOne 800 G5 (i5 9500/8GB/1TB/Win10Pro)', 'PHP0001', 'PC HP AIO EliteOne 800 G5 8GA59PA (23.8\" FHD/i5-9500/8GB/1TB HDD/UHD 630/Win10)', 29590000, 28990000, 'php011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(28, 19, 'Bộ nhớ DDR4 Kingston HyperX Fury Black 8GB (2666) (HX426C16FB3/8)', 'RAM0001', 'Bộ nhớ DDR4 Kingston HyperX Fury Black 8GB (2666) (HX426C16FB3/8)', 1290000, 1030000, 'ram011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(29, 20, 'Ổ cứng SSD Samsung 1TB 2.5\" T5 Portable (MU-PA1T0R/WW)', 'OC0001', 'Ổ cứng SSD Samsung 1TB 2.5\" T5 Portable (MU-PA1T0R/WW)', 5735000, 5035000, 'oc011.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-31 17:00:00', '2019-12-31 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 'hp031.jpg', '2018-12-11 13:14:59', '2020-06-16 13:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `city`, `state`, `country`, `pincode`, `mobile`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tường Vy', 'Trường Đại học Tài chính - Marketing', 'Hồ Chí Minh', '', '', '', '0389732828', 'vynguyenmy81@gmail.com', '123456', 1, '', '2019-12-31 17:00:00', '2019-12-31 17:00:00'),
(2, 'Vy', '32 Nguyễn Triệu Luật', 'Tân Tạo', 'Bình Tân', 'TP Hồ Chí Minh', '71909', '0389732828', 'tuongvy020998@gmail.com', '$2y$10$3qkRD6UDbrmUj1DwZeWanOek5YY6uzrQW38ij/w..i7s7vnvFLyuO', 1, 'pRyG956P8YINNSXacF5FkM71pecyZofbc43qh8pyvPDwfSseLstOoDt6FyvE', '2020-06-11 19:12:58', '2020-06-15 11:05:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
