-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 01:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `menu_item_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `customer_id`, `menu_item_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 657, '2024-05-30 05:18:39', '2024-05-30 05:26:56'),
(2, 10, 5, 887, '2024-05-30 05:18:44', '2024-05-30 05:18:44'),
(3, 1, 3, 454, '2024-05-30 05:18:49', '2024-05-30 05:18:49'),
(4, 5, 2, 627, '2024-05-30 05:18:53', '2024-05-30 05:18:53'),
(5, 6, 1, 905, '2024-05-30 05:18:57', '2024-05-30 05:18:57'),
(6, 7, 2, 450, '2024-05-30 05:19:01', '2024-05-30 05:19:01'),
(7, 8, 6, 789, '2024-05-30 05:19:06', '2024-05-30 05:19:06'),
(8, 4, 9, 559, '2024-05-30 05:19:10', '2024-05-30 05:19:10'),
(9, 2, 10, 398, '2024-05-30 05:19:15', '2024-05-30 05:19:15'),
(10, 8, 9, 541, '2024-05-30 05:19:19', '2024-05-30 05:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dawn Carver', 'Omnis at id sed dol', '1717066279.jpg', '2024-05-30 04:51:19', '2024-05-30 04:51:19'),
(2, 'Judith Robertson', 'Ullamco quia consequ', '1717066289.jpg', '2024-05-30 04:51:29', '2024-05-30 04:51:29'),
(3, 'Harriet Mckee', 'Cumque fugit fugiat', '1717066299.jpg', '2024-05-30 04:51:39', '2024-05-30 04:51:39'),
(4, 'Brody Waller', 'Quia totam impedit', '1717066311.jpg', '2024-05-30 04:51:51', '2024-05-30 04:51:51'),
(5, 'Adara Lang', 'Dignissimos est reru', '1717066321.jpg', '2024-05-30 04:52:01', '2024-05-30 04:52:01'),
(6, 'April Morrison', 'Laboriosam ut qui i', '1717066342.jpg', '2024-05-30 04:52:22', '2024-05-30 04:52:22'),
(7, 'Margaret Merritt', 'Rerum mollit nulla v', '1717066351.jpg', '2024-05-30 04:52:31', '2024-05-30 04:52:31'),
(8, 'Mallory Joseph', 'Aperiam repudiandae', '1717066369.jpg', '2024-05-30 04:52:49', '2024-05-30 04:52:49'),
(9, 'Galvin Oneill', 'Nostrud qui exercita', '1717067169.jpg', '2024-05-30 05:06:09', '2024-05-30 05:06:09'),
(10, 'Yardley King', 'Aliquid voluptate qu', '1717067248.jpg', '2024-05-30 05:07:28', '2024-05-30 05:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `contact_info`, `created_at`, `updated_at`) VALUES
(1, 'Sacha Le', 'ravon@mailinator.com', 'Pa$$w0rd!', 'Ullam omnis qui ipsa', '2024-05-30 05:16:08', '2024-05-30 05:16:08'),
(2, 'Joan Nolan', 'pibafan@mailinator.com', 'Pa$$w0rd!', 'Sit labore reiciendi', '2024-05-30 05:16:13', '2024-05-30 05:16:13'),
(3, 'Derek Carrillo', 'tyxonunif@mailinator.com', 'Pa$$w0rd!', 'Eligendi vel dolorum', '2024-05-30 05:16:19', '2024-05-30 05:16:19'),
(4, 'Lillith Gregory', 'jybirone@mailinator.com', 'Pa$$w0rd!', 'Iusto aliqua Nisi i', '2024-05-30 05:16:24', '2024-05-30 05:16:24'),
(5, 'Samuel Vinson', 'vine@mailinator.com', 'Pa$$w0rd!', 'Minus ut numquam imp', '2024-05-30 05:16:29', '2024-05-30 05:16:29'),
(6, 'Alma Mcbride', 'wykezokyw@mailinator.com', 'Pa$$w0rd!', 'Voluptatem quae omn', '2024-05-30 05:16:33', '2024-05-30 05:16:33'),
(7, 'Gloria Mcpherson', 'xexahuvan@mailinator.com', 'Pa$$w0rd!', 'Consequuntur molesti', '2024-05-30 05:16:39', '2024-05-30 05:16:39'),
(8, 'Nevada Marsh', 'lyqa@mailinator.com', 'Pa$$w0rd!', 'Est voluptate velit', '2024-05-30 05:16:45', '2024-05-30 05:16:45'),
(9, 'Cailin Bray', 'nakibyx@mailinator.com', 'Pa$$w0rd!', 'Inventore et accusan', '2024-05-30 05:16:50', '2024-05-30 05:16:50'),
(10, 'Thomas Mercer', 'zokudusida@mailinator.com', 'Pa$$w0rd!', 'Quod hic omnis repre', '2024-05-30 05:16:56', '2024-05-30 05:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `restaurant_id`, `category_id`, `name`, `image`, `description`, `price`, `is_available`, `created_at`, `updated_at`) VALUES
(1, 7, 6, 'Kenyon Owen', '1717067265.jpeg', 'Mollit doloremque mo', 452.00, 1, '2024-05-30 05:07:45', '2024-05-30 05:07:45'),
(2, 3, 5, 'Fulton Ray', '1717067275.jpg', 'Vitae nostrum autem', 522.00, 1, '2024-05-30 05:07:55', '2024-05-30 05:07:55'),
(3, 9, 2, 'Ira Brooks', '1717067441.jpeg', 'Tempora facere atque', 139.00, 1, '2024-05-30 05:10:41', '2024-05-30 05:10:41'),
(4, 9, 4, 'Odette Kline', '1717067454.jpg', 'Qui quaerat non comm', 202.00, 1, '2024-05-30 05:10:54', '2024-05-30 05:10:54'),
(5, 5, 6, 'Geoffrey Blanchard', '1717067465.jpg', 'Amet architecto dol', 585.00, 1, '2024-05-30 05:11:05', '2024-05-30 05:11:05'),
(6, 7, 7, 'Gemma Ochoa', '1717067755.jpeg', 'Nisi rerum in quo am', 438.00, 1, '2024-05-30 05:11:17', '2024-05-30 05:15:55'),
(7, 5, 6, 'Petra Michael', '1717067740.jpeg', 'Adipisci amet facil', 314.00, 1, '2024-05-30 05:11:28', '2024-05-30 05:15:40'),
(8, 6, 1, 'Adena Kidd', '1717067730.jpeg', 'Dolores ullamco quae', 275.00, 1, '2024-05-30 05:11:37', '2024-05-30 05:15:30'),
(9, 4, 4, 'Nevada Buchanan', '1717067718.jpg', 'Sunt pariatur Et u', 769.00, 1, '2024-05-30 05:11:56', '2024-05-30 05:15:18'),
(10, 4, 7, 'Elliott Olsen', '1717067705.jpg', 'Numquam quod quod ni', 747.00, 1, '2024-05-30 05:12:07', '2024-05-30 05:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2024_05_29_094103_create_restaurants_table', 2),
(10, '2024_05_29_095744_create_categories_table', 3),
(11, '2024_05_29_100108_create_menu_items_table', 4),
(12, '2024_05_29_101901_create_orders_table', 5),
(13, '2024_05_29_102436_create_customers_table', 5),
(14, '2024_05_29_103023_create_order_items_table', 6),
(15, '2024_05_29_103403_create_cart_items_table', 7),
(16, '2024_05_29_172941_update_pickup_time_column_type_in_orders_table', 8),
(17, '2024_05_30_035808_update_status_default_value_in_orders_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_amount` decimal(10,2) NOT NULL,
  `delivery_address` text DEFAULT NULL,
  `pickup_time` time NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `total_amount`, `delivery_address`, `pickup_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, '1992-04-29 18:00:00', 50.00, 'Nostrum nisi dolor v', '21:23:00', '1', '2024-05-30 05:17:06', '2024-05-30 05:17:06'),
(2, 9, '1971-01-15 18:00:00', 7.00, 'Eos dolor explicabo', '07:41:00', '0', '2024-05-30 05:17:11', '2024-05-30 05:17:11'),
(3, 3, '1999-09-06 18:00:00', 14.00, 'Laudantium exercita', '03:59:00', '1', '2024-05-30 05:17:16', '2024-05-30 05:17:16'),
(4, 3, '1971-03-10 18:00:00', 3.00, 'Blanditiis elit dol', '13:28:00', '1', '2024-05-30 05:17:21', '2024-05-30 05:17:21'),
(5, 8, '1973-04-20 18:00:00', 97.00, 'Culpa eius nemo lab', '15:13:00', '1', '2024-05-30 05:17:26', '2024-05-30 05:17:26'),
(6, 3, '2001-10-09 18:00:00', 8.00, 'Quia et libero dolor', '02:08:00', '1', '2024-05-30 05:17:31', '2024-05-30 05:17:31'),
(7, 5, '1999-06-21 18:00:00', 9.00, 'Assumenda tempor con', '13:06:00', '0', '2024-05-30 05:17:35', '2024-05-30 05:17:35'),
(8, 10, '2000-11-12 18:00:00', 73.00, 'Veniam in reprehend', '00:42:00', '1', '2024-05-30 05:17:39', '2024-05-30 05:17:39'),
(9, 6, '2006-12-30 18:00:00', 17.00, 'Officia dolore labor', '06:33:00', '1', '2024-05-30 05:17:43', '2024-05-30 05:17:43'),
(10, 6, '2010-01-08 18:00:00', 27.00, 'Iure numquam nihil o', '05:35:00', '0', '2024-05-30 05:17:47', '2024-05-30 05:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `menu_item_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `menu_item_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 727, 72.00, '2024-05-30 05:17:55', '2024-05-30 05:21:38'),
(2, 7, 2, 903, 163.00, '2024-05-30 05:17:58', '2024-05-30 05:17:58'),
(3, 9, 6, 82, 422.00, '2024-05-30 05:18:03', '2024-05-30 05:18:03'),
(4, 8, 8, 466, 276.00, '2024-05-30 05:18:08', '2024-05-30 05:18:08'),
(5, 6, 6, 714, 185.00, '2024-05-30 05:18:12', '2024-05-30 05:18:12'),
(6, 2, 10, 390, 700.00, '2024-05-30 05:18:16', '2024-05-30 05:18:16'),
(7, 1, 2, 990, 563.00, '2024-05-30 05:18:20', '2024-05-30 05:18:20'),
(8, 3, 7, 646, 552.00, '2024-05-30 05:18:24', '2024-05-30 05:18:24'),
(9, 5, 2, 582, 599.00, '2024-05-30 05:18:28', '2024-05-30 05:18:28'),
(10, 7, 10, 454, 840.00, '2024-05-30 05:18:31', '2024-05-30 05:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(255) NOT NULL,
  `operating_hours` varchar(255) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `address`, `contact_info`, `operating_hours`, `is_available`, `created_at`, `updated_at`) VALUES
(1, 'Mason Bray', 'Veritatis aut id nih', 'Blanditiis blanditii', 'Sunt magni qui dele', 1, '2024-05-30 04:50:16', '2024-05-30 04:50:16'),
(2, 'Barbara Steele', 'Ratione error praese', 'Omnis quasi a laboru', 'Qui sit aperiam ut', 1, '2024-05-30 04:50:22', '2024-05-30 04:50:22'),
(3, 'Nell Cash', 'Irure aut cum deleni', 'Consectetur enim adi', 'Ut sit tenetur dolor', 1, '2024-05-30 04:50:26', '2024-05-30 04:50:26'),
(4, 'Xenos Tran', 'Enim fugiat quos re', 'Fugiat nihil volupt', 'Odio modi autem cons', 1, '2024-05-30 04:50:32', '2024-05-30 04:50:32'),
(5, 'Maxine Warren', 'Natus rerum elit od', 'In duis voluptatem c', 'Odit qui in eum temp', 1, '2024-05-30 04:50:37', '2024-05-30 04:50:37'),
(6, 'Kameko Brock', 'Adipisci et sunt dis', 'Sit enim fuga Qui s', 'Magni mollit sit as', 1, '2024-05-30 04:50:42', '2024-05-30 04:50:42'),
(7, 'Jayme Glover', 'Laboriosam neque pa', 'Quidem est maiores r', 'Aut unde quibusdam t', 1, '2024-05-30 04:50:47', '2024-05-30 04:50:47'),
(8, 'Cynthia Byrd', 'Quia aut quas omnis', 'Numquam tempore imp', 'Nemo maxime explicab', 1, '2024-05-30 04:50:51', '2024-05-30 04:50:51'),
(9, 'Angela Ward', 'Deserunt esse in rei', 'Sint est cupiditate', 'Est ut maiores dolo', 1, '2024-05-30 04:50:55', '2024-05-30 04:50:55'),
(10, 'Cairo Valenzuela', 'Odio dolorum minima', 'Totam nemo consequat', 'Qui ex rerum aliqua', 1, '2024-05-30 04:50:59', '2024-05-30 04:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MD RAFIUN ISLAM', 'asifrafiun@gmail.com', NULL, '$2y$10$Ea0Trlv6PpDpYojZjTGSfu.VNx6r/rJt71AoipG4kaB2dAIsF5TZy', NULL, '2024-05-29 02:21:00', '2024-05-29 02:21:00'),
(2, 'Nadine Kent', 'viwyduv@mailinator.com', NULL, '$2y$10$5AFu9LDIzg1gEfL19oceju8CkKBkI2kzxkGWbsHJ5UA/CQs139X6C', NULL, '2024-05-29 03:28:19', '2024-05-29 03:28:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
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
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
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
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
