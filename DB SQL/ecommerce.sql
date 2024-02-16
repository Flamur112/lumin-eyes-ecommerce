-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 01:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ray Ban', 'ray-ban', 1, '2024-02-14 12:49:53', '2024-02-14 12:49:53'),
(2, 'Oakley ', 'oakley ', 1, '2024-02-14 15:24:44', '2024-02-14 15:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=visible,1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sun Glasses', 'ray-bans', 'Shield your eyes from the sun in style with our collection of sunglasses. From classic aviators to trendy oversized frames, we have a variety of styles to suit every taste. Our sunglasses are made from durable materials and feature UV protection to keep your eyes safe from harmful rays. Whether you\'re lounging by the pool, hitting the beach, or exploring the great outdoors, our sunglasses will keep you looking cool and feeling comfortable.', 'uploads/category/1707916578.jpg', 'Shop Sunglasses for Men & Women | Trendy & Affordable Styles', 'sunglasses, sunglasses for men, sunglasses for women, trendy sunglasses, affordable sunglasses', 'Shop our collection of sunglasses for men and women. Find trendy and affordable styles that protect your eyes from harmful UV rays. Free shipping on orders over $50.', 0, '2024-02-14 23:30:12', '2024-02-15 00:16:18'),
(2, 'Prescription Glasses', 'prescription-glasses', 'Prescription Eyewear', 'uploads/category/1707916640.jpg', 'Prescription Eyewear: Find the Perfect Glasses for Your Vision Needs', 'Prescription glasses, eyeglasses, prescription sunglasses, vision correction, eyewear', 'Shop our collection of prescription eyewear. Find the perfect glasses for your vision needs, including eyeglasses and prescription sunglasses. Our selection includes a variety of styles and materials to suit your preferences.', 0, '2024-02-14 23:57:05', '2024-02-15 00:17:20'),
(3, 'Non-Prescription Glassses', 'non-prescription-glasses', 'Shade Your Eyes in Style', 'uploads/category/1708036665.jpg', 'Non-Prescription Glasses: Style Without Limits', 'non-prescription glasses, fashion glasses, non-prescription sunglasses, blue light glasses, computer glasses, clear lens glasses, stylish glasses', 'Explore a diverse collection of non-prescription glasses, from fashion-forward frames to blue light and computer glasses. Find the perfect pair to elevate your style and protect your eyes from digital strain.', 0, '2024-02-16 09:37:45', '2024-02-16 09:37:45');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_02_211630_add_details_to_users_table', 1),
(7, '2024_01_16_212031_create_categories_table', 1),
(8, '2024_01_31_125640_create_brands_table', 1),
(9, '2024_01_31_144341_create_products_table', 1),
(10, '2024_01_31_145119_create_product_images_table', 1),
(11, '2024_02_01_173346_create_sliders_table', 1),
(12, '2024_02_11_174914_create_wishlists_table', 1),
(14, '2024_02_15_133502_create_carts_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `small_description` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=trending,0=not-trending',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `brand`, `small_description`, `description`, `original_price`, `selling_price`, `quantity`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ray-Ban Aviator Classic Men\'s Sunglasses', 'ray-bans', 'Ray Ban', 'Elevate your style with Ray-Ban sunglasses. Crafted with precision and style, these sunglasses offer the perfect blend of fashion and function. With a wide range of iconic designs and high-quality materials, Ray-Ban sunglasses are a must-have accessory for any wardrobe. Protect your eyes in style and make a statement with Ray-Ban sunglasses.', 'Ray-Ban sunglasses are crafted with precision and style, offering the perfect blend of fashion and function. Our sunglasses feature high-quality lenses that provide 100% UV protection, ensuring your eyes are shielded from harmful rays. The frames are made from durable materials, ensuring long-lasting wear and comfort. With a wide range of iconic designs, including the classic Aviator and Wayfarer styles, as well as modern designs like the Clubmaster and Round frames, there\'s a pair of Ray-Ban sunglasses to suit every style. Whether you\'re lounging by the pool, hitting the beach, or exploring the city, Ray-Ban sunglasses are the perfect accessory to elevate your look and protect your eyes.', 221, 177, 53, 1, 0, 'Shop Ray-Ban Sunglasses | Iconic Designs, UV Protection', 'Ray-Ban, sunglasses, fashion, UV protection, iconic designs, high-quality materials', 'Elevate your style with Ray-Ban sunglasses. Crafted with precision and style, these sunglasses offer the perfect blend of fashion and function. With a wide range of iconic designs and high-quality materials, Ray-Ban sunglasses are a must-have accessory for any wardrobe. Protect your eyes in style and make a statement with Ray-Ban sunglasses.', '2024-02-14 23:31:41', '2024-02-14 23:50:54'),
(5, 3, 'Non-prescription Glasses Frame Clear Lens Eyeglasses', 'non-prescription-glasses-frame-clear-lens-eyeglasses', NULL, 'Elevate your style with these sleek, non-prescription glasses frames. Featuring clear lenses and a modern design, they\'re perfect for any occasion.', 'These non-prescription glasses frames offer a contemporary take on eyewear. Crafted with clear lenses and a minimalist design, they provide a versatile accessory for everyday wear. Whether you\'re looking to add a touch of sophistication to your work attire or elevate your casual look, these frames deliver both style and functionality', 100, 150, 31, 1, 0, 'Non-Prescription Glasses Frame Clear Lens Eyeglasses | Stylish Eyewear', 'Non-Prescription Glasses, Clear Lens Eyeglasses, Modern Eyewear, Stylish Frames', 'Discover our collection of non-prescription glasses frames with clear lenses. Elevate your style with our modern eyewear designs. Perfect for both casual and formal occasions.', '2024-02-16 09:40:03', '2024-02-16 09:40:03'),
(6, 1, 'Ray-Ban RB3447', 'ray-ban-rb3447', NULL, 'Embrace timeless style with the Ray-Ban RB3447 sunglasses. These iconic round sunglasses feature a classic design that\'s perfect for any occasion. With their durable metal frames and comfortable fit, they\'re a must-have accessory for every wardrobe.', 'Step into the spotlight with the Ray-Ban RB3447 sunglasses. These iconic round sunglasses are a timeless accessory that adds a touch of sophistication to any look. Crafted with durable metal frames and premium lenses, they offer both style and functionality. Whether you\'re lounging by the pool or strolling through the city, these sunglasses are sure to turn heads. Choose from a range of lens and frame colors to match your personal style. With their classic design and superior quality, the Ray-Ban RB3447 sunglasses are an essential addition to your collection.', 112, 150, 39, 1, 0, 'Ray-Ban RB3447 Round Sunglasses - Iconic Style & Superior Quality', 'Ray-Ban, RB3447, Round Sunglasses, Iconic Style, Superior Quality, Fashion, Accessories, Sunglasses, Eyewear, Designer, Classic, Timeless, Premium Materials, Lens Colors, Frame Colors, Personal Style, Fashion-Forward, Trendy, Must-Have, Essential, Collection, Shop Now.', 'Elevate your style with the Ray-Ban RB3447 round sunglasses. Crafted with premium materials and featuring a timeless design, these sunglasses are a must-have accessory for any fashion-forward individual. Choose from a variety of lens and frame colors to suit your personal style. Shop now and experience the iconic look and superior quality of Ray-Ban sunglasses.', '2024-02-16 09:56:07', '2024-02-16 09:56:07'),
(7, 1, 'AVIATOR GRADIENT Sunglasses', 'aviator-gradient-sunglasses', NULL, 'Elevate your style with the timeless Aviator Gradient Sunglasses. These sunglasses feature a classic aviator design with gradient lenses, offering both style and protection. Crafted with premium materials, they provide ultimate comfort and durability. Choose from a variety of lens and frame colors to match your personal style.', 'The Aviator Gradient Sunglasses combine iconic design with modern functionality. The classic aviator silhouette is complemented by gradient lenses, creating a stylish and versatile accessory. Crafted with precision and attention to detail, these sunglasses offer ultimate comfort and durability. The gradient lenses provide protection from harmful UV rays while enhancing your vision. Choose from a range of lens and frame colors to suit your personal style. Whether you\'re hitting the beach or strolling through the city, these sunglasses are a must-have accessory for any occasion.', 130, 190, 30, 1, 0, 'Aviator Gradient Sunglasses - Classic Style & Ultimate Protection', 'Aviator, Gradient Sunglasses, Classic Style, Ultimate Protection, Fashion, Accessories, Sunglasses, Eyewear, Designer, Premium Materials, Lens Colors, Frame Colors, Personal Style, Timeless, Trendy, Must-Have, Essential, Collection, Shop Now.', 'Elevate your look with the Aviator Gradient Sunglasses. Featuring a classic aviator design and gradient lenses, these sunglasses offer both style and protection. Crafted with premium materials, they provide ultimate comfort and durability. Choose from a variety of lens and frame colors to match your personal style. Shop now and experience the timeless appeal of aviator sunglasses.', '2024-02-16 10:03:02', '2024-02-16 10:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 5, 'uploads/products/17080368031.jpg', '2024-02-16 09:40:03', '2024-02-16 09:40:03'),
(6, 6, 'uploads/products/17080377671.jpg', '2024-02-16 09:56:07', '2024-02-16 09:56:07'),
(9, 1, 'uploads/products/17080378791.jpg', '2024-02-16 09:57:59', '2024-02-16 09:57:59'),
(10, 7, 'uploads/products/17080381821.jpg', '2024-02-16 10:03:02', '2024-02-16 10:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ray-Ban: New in Stock! Elevate Your Look with Timeless Style and Modern Design', 'Discover the latest Ray-Ban sunglasses collection. With iconic designs and high-quality materials, Ray-Ban sunglasses offer timeless style and modern comfort. Elevate your look and protect your eyes with Ray-Ban.', 'uploads/slider/1707914816.jpg', 0, '2024-02-14 23:39:09', '2024-02-14 23:46:56'),
(2, '<span style=\"color:black;\"Find the perfect prescription glasses to suit your style and vision needs. </span> Our collection includes a wide range of frames and lenses, from classic to contemporary. Shop now and see the difference!', '<span> </span>', 'uploads/slider/1707926840.jpg', 0, '2024-02-15 00:19:36', '2024-02-16 09:49:33');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user,1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$xuqdyf8ui/BvWABLHwrBBe2BA/Smfj0t4.W1k2IrfUq0i6O/YBTpu', NULL, '2024-02-14 23:28:10', '2024-02-14 23:28:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
