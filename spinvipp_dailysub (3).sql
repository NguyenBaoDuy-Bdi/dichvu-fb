-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th2 15, 2024 lúc 11:14 PM
-- Phiên bản máy phục vụ: 10.3.39-MariaDB-cll-lve
-- Phiên bản PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `spinvipp_dailysub`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_recharges`
--

CREATE TABLE `account_recharges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `qr_code` longtext DEFAULT NULL,
  `logo` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `activities`
--

INSERT INTO `activities` (`id`, `name`, `content`, `status`, `created_at`, `updated_at`, `domain`) VALUES
(1, 'hello các bạn', 'hi', 'info', '2024-02-15 15:58:14', '2024-02-15 15:58:14', 'dailysub.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activitiessystem`
--

CREATE TABLE `activitiessystem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `activitiessystem`
--

INSERT INTO `activitiessystem` (`id`, `name`, `content`, `status`, `created_at`, `updated_at`, `domain`) VALUES
(1, 'LUMCODE.NET', 'BÁN CODE VIP', 'info', '2024-02-15 16:02:22', '2024-02-15 16:02:22', 'dailysub.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_histories`
--

CREATE TABLE `data_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `data` longtext DEFAULT NULL,
  `old_data` longtext DEFAULT NULL,
  `new_data` longtext DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `linkorder` longtext DEFAULT NULL,
  `maychu` varchar(255) DEFAULT NULL,
  `soluong` longtext DEFAULT NULL,
  `dongia` longtext DEFAULT NULL,
  `data_json` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_cards`
--

CREATE TABLE `history_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `card_amount` varchar(255) DEFAULT NULL,
  `card_code` varchar(255) DEFAULT NULL,
  `card_serial` varchar(255) DEFAULT NULL,
  `card_real_amount` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `tranid` varchar(255) DEFAULT NULL,
  `promotion` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_login`
--

CREATE TABLE `history_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangnhap` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `history_login`
--

INSERT INTO `history_login` (`id`, `username`, `action`, `dangnhap`, `ip`, `data_json`, `created_at`, `updated_at`, `domain`) VALUES
(1, 'Hoangnguyen', 'Đăng nhập tài khoản', 'Đăng nhập tài khoản địa chỉ ip 14.234.110.184', NULL, NULL, '2024-02-15 15:52:09', '2024-02-15 15:52:09', 'dailysub.vn'),
(2, 'Hoangnguyen', 'Đăng nhập tài khoản', 'Đăng nhập tài khoản địa chỉ ip 14.234.110.184', NULL, NULL, '2024-02-15 15:55:15', '2024-02-15 15:55:15', 'dailysub.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_order`
--

CREATE TABLE `history_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taodon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thaydoi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soduhientai` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dongia` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dichvu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donhang` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkorder` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maychu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_recharges`
--

CREATE TABLE `history_recharges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name_bank` varchar(255) DEFAULT NULL,
  `type_bank` varchar(255) DEFAULT NULL,
  `tranid` longtext DEFAULT NULL,
  `amount` longtext DEFAULT NULL,
  `promotion` longtext DEFAULT NULL,
  `real_amount` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newsannouncement`
--

CREATE TABLE `newsannouncement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) NOT NULL DEFAULT '127.0.0.1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `content`, `class`, `created_at`, `updated_at`, `domain`) VALUES
(1, 'LUMCODE.NET', '<p><strong>HELLO C&Aacute;C BẠN NHOA</strong></p>', 'info', '2024-02-15 15:58:58', '2024-02-15 15:58:58', 'dailysub.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `service_id` varchar(255) DEFAULT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `server_service` varchar(255) DEFAULT NULL,
  `price` longtext DEFAULT NULL,
  `quantity` longtext DEFAULT NULL,
  `total_payment` longtext DEFAULT NULL,
  `order_link` longtext DEFAULT NULL,
  `start` longtext DEFAULT NULL,
  `buff` longtext DEFAULT NULL,
  `actual_service` longtext DEFAULT NULL,
  `actual_path` longtext DEFAULT NULL,
  `actual_server` longtext DEFAULT NULL,
  `status` longtext DEFAULT NULL,
  `action` longtext DEFAULT NULL,
  `dataJson` longtext DEFAULT NULL,
  `error` varchar(255) DEFAULT NULL,
  `isShow` longtext DEFAULT NULL,
  `history` longtext DEFAULT NULL,
  `refund` longtext DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `proxy` text DEFAULT NULL,
  `host` text DEFAULT NULL,
  `port` text DEFAULT NULL,
  `ipv6` text DEFAULT NULL,
  `pass` text DEFAULT NULL,
  `loai` text DEFAULT NULL,
  `quocgia` text DEFAULT NULL,
  `timebuy` text DEFAULT NULL,
  `timeend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `timestart` date DEFAULT NULL,
  `name` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `speed` text DEFAULT NULL,
  `user` text DEFAULT NULL,
  `order_code` longtext DEFAULT NULL,
  `proxy_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `server_services`
--

CREATE TABLE `server_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `social_id` varchar(255) DEFAULT NULL,
  `service_id` varchar(255) DEFAULT NULL,
  `socialll` varchar(255) DEFAULT NULL,
  `server` varchar(255) DEFAULT NULL,
  `price` longtext DEFAULT NULL,
  `price_collaborator` longtext DEFAULT NULL,
  `price_agency` longtext DEFAULT NULL,
  `price_distributor` longtext DEFAULT NULL,
  `min` longtext DEFAULT NULL,
  `max` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `actual_service` varchar(255) DEFAULT NULL,
  `actual_server` varchar(255) DEFAULT NULL,
  `actual_path` varchar(255) DEFAULT NULL,
  `actual_price` varchar(255) DEFAULT NULL,
  `action` varchar(999) DEFAULT NULL,
  `order_type` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `service_social` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_socials`
--

CREATE TABLE `service_socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `site_cons`
--

CREATE TABLE `site_cons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `domain_name` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `zone_id` varchar(255) DEFAULT NULL,
  `status_cloudflare` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `site_data`
--

CREATE TABLE `site_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namesite` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `partner1` longtext DEFAULT NULL,
  `partner2` longtext DEFAULT NULL,
  `partner3` longtext DEFAULT NULL,
  `landing` varchar(255) DEFAULT '0',
  `logo_mini` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `keyword` longtext DEFAULT NULL,
  `image_seo` longtext DEFAULT NULL,
  `notice` longtext DEFAULT NULL,
  `collaborator` int(11) NOT NULL DEFAULT 0,
  `agency` int(11) NOT NULL DEFAULT 0,
  `distributor` int(11) NOT NULL DEFAULT 0,
  `code_tranfer` varchar(255) DEFAULT 'naptien',
  `facebook` varchar(255) DEFAULT NULL,
  `zalo` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `card_discount` int(11) NOT NULL DEFAULT 0,
  `min_recharge` int(11) NOT NULL DEFAULT 10000,
  `recharge_promotion` int(11) NOT NULL DEFAULT 0,
  `show_promotion` varchar(255) DEFAULT 'hide',
  `start_promotion` varchar(255) DEFAULT NULL,
  `end_promotion` varchar(255) DEFAULT NULL,
  `partner_id` varchar(255) DEFAULT NULL,
  `partner_key` varchar(255) DEFAULT NULL,
  `mail_host` varchar(255) DEFAULT NULL,
  `mail_port` varchar(255) DEFAULT NULL,
  `mail_username` varchar(255) DEFAULT NULL,
  `mail_password` varchar(255) DEFAULT NULL,
  `google_client_id` varchar(255) DEFAULT NULL,
  `google_client_secret` varchar(255) DEFAULT NULL,
  `google_redirect` varchar(255) DEFAULT NULL,
  `facebook_client_id` varchar(255) DEFAULT NULL,
  `facebook_client_secret` varchar(255) DEFAULT NULL,
  `facebook_redirect` varchar(255) DEFAULT NULL,
  `balance_telegram` varchar(999) DEFAULT NULL,
  `telegram_bot` varchar(999) DEFAULT NULL,
  `telegram_token` varchar(999) DEFAULT NULL,
  `telegram_chat_id` varchar(999) DEFAULT NULL,
  `telegram_callback` varchar(999) DEFAULT NULL,
  `notice_order` varchar(255) NOT NULL DEFAULT 'off',
  `notice_login` varchar(255) NOT NULL DEFAULT 'off',
  `script_header` longtext DEFAULT NULL,
  `script_footer` longtext DEFAULT NULL,
  `is_admin` text DEFAULT NULL,
  `token_web` longtext DEFAULT NULL,
  `username_web` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `subgiare` text DEFAULT NULL,
  `hacklike17` text DEFAULT NULL,
  `trumsubre` text DEFAULT NULL,
  `twomxh` text DEFAULT NULL,
  `onedg` text DEFAULT NULL,
  `submeta` text DEFAULT NULL,
  `muafl` text DEFAULT NULL,
  `sain` text DEFAULT NULL,
  `passwordtds` text DEFAULT NULL,
  `usenametds` text DEFAULT NULL,
  `trumvip` text DEFAULT NULL,
  `tuongtacsale` text DEFAULT NULL,
  `alosmm` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `site_key` text DEFAULT NULL,
  `secret_key` text DEFAULT NULL,
  `telegram_token_tb` text DEFAULT NULL,
  `nameadmin` text DEFAULT NULL,
  `idpage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `site_data`
--

INSERT INTO `site_data` (`id`, `namesite`, `logo`, `partner1`, `partner2`, `partner3`, `landing`, `logo_mini`, `favicon`, `title`, `description`, `keyword`, `image_seo`, `notice`, `collaborator`, `agency`, `distributor`, `code_tranfer`, `facebook`, `zalo`, `youtube`, `telegram`, `phone`, `email`, `card_discount`, `min_recharge`, `recharge_promotion`, `show_promotion`, `start_promotion`, `end_promotion`, `partner_id`, `partner_key`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `google_client_id`, `google_client_secret`, `google_redirect`, `facebook_client_id`, `facebook_client_secret`, `facebook_redirect`, `balance_telegram`, `telegram_bot`, `telegram_token`, `telegram_chat_id`, `telegram_callback`, `notice_order`, `notice_login`, `script_header`, `script_footer`, `is_admin`, `token_web`, `username_web`, `status`, `created_at`, `updated_at`, `domain`, `subgiare`, `hacklike17`, `trumsubre`, `twomxh`, `onedg`, `submeta`, `muafl`, `sain`, `passwordtds`, `usenametds`, `trumvip`, `tuongtacsale`, `alosmm`, `content`, `site_key`, `secret_key`, `telegram_token_tb`, `nameadmin`, `idpage`) VALUES
(1, 'dailysub.vn', 'https://i.imgur.com/j5hTaMU.png', NULL, NULL, NULL, '0', 'https://i.imgur.com/j5hTaMU.png', 'https://i.imgur.com/j5hTaMU.png', NULL, NULL, NULL, 'https://i.imgur.com/j5hTaMU.png', NULL, 0, 0, 0, 'naptien', NULL, NULL, NULL, NULL, NULL, NULL, 0, 10000, 0, 'hide', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'off', 'off', NULL, NULL, '{\"id\":1,\"name\":\"Hoangnguyen\",\"username\":\"Hoangnguyen\",\"email\":\"mabuhoang9@gmail.com\",\"position\":\"admin\",\"api_token\":\"Xciz2QmaEJrCk0IoZRe07X0BL2lOzvKkI5jPpc9E0Zk7YC4vEXLWhCszHWObZzobqoZnLWXHyj6APLwo\",\"domain\":\"dailysub.vn\"}', 'Xciz2QmaEJrCk0IoZRe07X0BL2lOzvKkI5jPpc9E0Zk7YC4vEXLWhCszHWObZzobqoZnLWXHyj6APLwo', 'Hoangnguyen', 'Active', '2024-02-15 15:51:47', '2024-02-15 15:54:26', 'dailysub.vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supports`
--

CREATE TABLE `supports` (
  `id` int(11) NOT NULL,
  `text` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `reply` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_recharge` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_deduct` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `api_token` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(999) DEFAULT '/dist/images/profile/user-1.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_chat_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `email_verified` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telegram_verified` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `telegram_notice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_link` varchar(255) DEFAULT NULL,
  `referral_money` longtext DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '2023-07-29 15:31:56',
  `last_login` timestamp NULL DEFAULT '2023-07-29 15:31:50',
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `balance`, `total_recharge`, `total_deduct`, `level`, `api_token`, `ip`, `avatar`, `created_at`, `domain`, `telegram_chat_id`, `facebook`, `status`, `email_verified`, `email_verified_at`, `telegram_verified`, `telegram_notice`, `remember_token`, `referral_link`, `referral_money`, `updated_at`, `last_login`, `position`) VALUES
(1, 'Hoangnguyen', '123456@gmail.com', 'Hoangnguyen', '$2y$10$YvFM4zUCCKtC7GuAFPClTOrrHU4yHrkBPXd5ymAOfqs6osP8T5Xba', '0', '0', '0', '1', 'Xciz2QmaEJrCk0IoZRe07X0BL2lOzvKkI5jPpc9E0Zk7YC4vEXLWhCszHWObZzobqoZnLWXHyj6APLwo', '14.234.110.184', 'https://ui-avatars.com/api/?background=random&name=Hoangnguyen', '2024-02-15 15:51:47', 'dailysub.vn', NULL, NULL, 'active', 'no', NULL, 'no', 'no', 'W75IT7CVPpiQjs6F14mNJ58fe3HUn9ngQ3YfFsCpn2zeinulNRaA4plWIlaX', NULL, '0', '2024-02-15 16:04:46', '2024-02-15 15:55:14', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `website_traffic`
--

CREATE TABLE `website_traffic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account_recharges`
--
ALTER TABLE `account_recharges`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `activitiessystem`
--
ALTER TABLE `activitiessystem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `data_histories`
--
ALTER TABLE `data_histories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `history_cards`
--
ALTER TABLE `history_cards`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_login`
--
ALTER TABLE `history_login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_order`
--
ALTER TABLE `history_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_recharges`
--
ALTER TABLE `history_recharges`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `newsannouncement`
--
ALTER TABLE `newsannouncement`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `server_services`
--
ALTER TABLE `server_services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service_socials`
--
ALTER TABLE `service_socials`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `site_cons`
--
ALTER TABLE `site_cons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_cons_domain_name_unique` (`domain_name`);

--
-- Chỉ mục cho bảng `site_data`
--
ALTER TABLE `site_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `website_traffic`
--
ALTER TABLE `website_traffic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account_recharges`
--
ALTER TABLE `account_recharges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `activitiessystem`
--
ALTER TABLE `activitiessystem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `data_histories`
--
ALTER TABLE `data_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `history_cards`
--
ALTER TABLE `history_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `history_login`
--
ALTER TABLE `history_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `history_order`
--
ALTER TABLE `history_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `history_recharges`
--
ALTER TABLE `history_recharges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `newsannouncement`
--
ALTER TABLE `newsannouncement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `server_services`
--
ALTER TABLE `server_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `service_socials`
--
ALTER TABLE `service_socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `site_cons`
--
ALTER TABLE `site_cons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `site_data`
--
ALTER TABLE `site_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `supports`
--
ALTER TABLE `supports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `website_traffic`
--
ALTER TABLE `website_traffic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
