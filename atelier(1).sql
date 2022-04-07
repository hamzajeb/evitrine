-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 03:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atelier`
--

-- --------------------------------------------------------

--
-- Table structure for table `bottines`
--

CREATE TABLE `bottines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bottines`
--

INSERT INTO `bottines` (`id`, `titre`, `prix`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bottine marron', '260', 'bottine bleu cute pour filles et garçons 100% Cuir', 'bottinesEnfant', 'photo_photo_kisspng-sports-shoes-boot-clothing-fashion-5b9fc7bc73b3d7.8791890115371980124739.png', '2022-04-05 04:06:24', '2022-04-05 04:12:12'),
(2, 'Bottine Bleu', '420', 'Bottine super classe avec une couleur claire et une structure unique', 'bottinesEnfant', 'photo_bottine4-removebg-preview.png', '2022-04-05 04:07:28', '2022-04-05 04:10:34'),
(3, 'Bottine rose', '260', 'Bottine Marron très chic et moderne 100% DAN', 'bottinesEnfant', 'photo_bottine1-removebg-preview.png', '2022-04-05 04:08:47', '2022-04-05 04:10:14'),
(4, 'Bottine Marron', '360', 'Bottine simple et Confortable pour votre Bébé 100% Dan', 'bottinesEnfant', 'photo_photo_pngegg__1_-removebg-preview.png', '2022-04-05 04:14:36', '2022-04-05 04:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `chaussure_hommes`
--

CREATE TABLE `chaussure_hommes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chaussure_hommes`
--

INSERT INTO `chaussure_hommes` (`id`, `titre`, `prix`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Chaussure classique', '240', 'Chaussure 100% Cuir pour homme Taille 42', 'chaussuresHomme', 'photo_chaussure3.png', '2022-04-05 02:24:24', '2022-04-05 02:24:24'),
(3, 'chaussure cuir marron', '450', 'Chaussure très confortable et médicale Taille 43', 'chaussuresHomme', 'photo_chaussure1.png', '2022-04-05 02:25:27', '2022-04-05 02:25:27'),
(4, 'Chaussure cuir noir', '360', 'Chaussure Confortable et haute qualité 100% Cuir Taille 41', 'chaussuresHomme', 'photo_chaussure6.png', '2022-04-05 02:26:19', '2022-04-05 02:26:19'),
(5, 'Chaussure marron', '470', 'Chaussure Haute qualité médicale et confortable Taille 44', 'chaussuresHomme', 'photo_chaussure5.png', '2022-04-05 02:28:39', '2022-04-05 02:32:19'),
(6, 'Chaussure Matt noir', '540', '100% Cuir, Chaussure Sport Classique Taille 43', 'chaussuresHomme', 'photo_chaussure2.png', '2022-04-05 02:29:54', '2022-04-05 02:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `escarpins`
--

CREATE TABLE `escarpins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `escarpins`
--

INSERT INTO `escarpins` (`id`, `titre`, `prix`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Escarpin Blanc', '240', 'Escarpin chic très haute qualité confortable et médicale Taille 38', 'escarpinsFemme', 'photo_escarpin1-removebg-preview.png', '2022-04-05 03:12:58', '2022-04-05 03:12:58'),
(2, 'Escarpin Mortadella', '480', 'Escarpin chic et confortable Couleur : Mortadella Taille 39', 'escarpinsFemme', 'photo_escarpin2-removebg-preview.png', '2022-04-05 03:22:51', '2022-04-05 03:22:51'),
(3, 'Escarpin Bleu-Ciel', '240', 'Escarpin Bleu Ciel Chic et unique Taille 36', 'escarpinsFemme', 'photo_escarpin3-removebg-preview.png', '2022-04-05 03:24:50', '2022-04-05 03:24:50'),
(4, 'Escarpin Blanc', '390', 'Escarpin pour les soirées et les moments spéciales Taille 40', 'escarpinsFemme', 'photo_escarpin1-removebg-preview.png', '2022-04-05 03:26:12', '2022-04-05 03:33:24'),
(5, 'Escarpin Noir', '190', 'Escarpin Noir très chic et confortable Taille 37', 'escarpinsFemme', 'photo_escarpin5-removebg-preview.png', '2022-04-05 03:27:34', '2022-04-05 03:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `espadrille_enfants`
--

CREATE TABLE `espadrille_enfants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `espadrille_enfants`
--

INSERT INTO `espadrille_enfants` (`id`, `titre`, `prix`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Espadrille Converse', '180', 'Espadrille super bon et confortable pour le bien être de votre Bébé', 'spadrillesEnfant', 'photo_espadrilleEnf4-removebg-preview.png', '2022-04-05 04:20:49', '2022-04-05 04:23:06'),
(2, 'Espardrille Grise', '340', 'Basket super confortable Classique et sport au même temps', 'spadrillesEnfant', 'photo_espadrilleEnf5-removebg-preview.png', '2022-04-05 04:24:44', '2022-04-05 04:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `espadrille_hommes`
--

CREATE TABLE `espadrille_hommes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `espadrille_hommes`
--

INSERT INTO `espadrille_hommes` (`id`, `titre`, `prix`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Espadrille Noir', '340', 'Espadrille Sport classique Confortable de très haute qualité Taille 42', 'espadrillesHomme', 'photo_espadrille2-removebg-preview.png', '2022-04-05 03:00:33', '2022-04-05 03:00:33'),
(2, 'Espadrille Blanche', '250', 'Espadrille blache unie médicale Taille 43', 'espadrillesHomme', 'photo_espadrille1-removebg-preview.png', '2022-04-05 03:01:31', '2022-04-05 03:01:31'),
(3, 'Espaddrille Classique', '520', 'Espadrille très haute qualité Confortable et medicale Taille 44', 'espadrillesHomme', 'photo_espadrille4-removebg-preview.png', '2022-04-05 03:02:47', '2022-04-05 03:02:47'),
(4, 'Espadrille Sporte', '420', 'Espadrille Confortable et chic Blanche/Noir Taille 44', 'espadrillesHomme', 'photo_espadrille3-removebg-preview.png', '2022-04-05 03:04:03', '2022-04-05 03:04:03'),
(5, 'Espadrille Noir', '640', 'Espadrille super Confortable, Couleur Noir unie Taille 42', 'espadrillesHomme', 'photo_espadrille5-removebg-preview.png', '2022-04-05 03:05:27', '2022-04-05 03:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_03_27_183152_create_paniers_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2022_03_26_230724_create_espadrille_hommes_table', 2),
(7, '2022_03_27_150844_create_chaussure_hommes_table', 2),
(8, '2022_03_27_234106_create_escarpins_table', 2),
(9, '2022_03_28_000522_create_sandales_table', 2),
(10, '2022_03_28_005806_create_bottines_table', 2),
(11, '2022_03_28_013951_create_espadrille_enfants_table', 2),
(12, '2022_03_29_233017_create_roles_table', 2),
(13, '2022_03_29_233252_create_role_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `paniers`
--

CREATE TABLE `paniers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paniers`
--

INSERT INTO `paniers` (`id`, `titre`, `prix`, `image`, `quantite`, `id_user`, `created_at`, `updated_at`) VALUES
(13, 'Espadrille Sporte', 420, 'photo_espadrille3-removebg-preview.png', 1, 2, NULL, NULL),
(14, 'Chaussure marron', 470, 'photo_chaussure5.png', 1, 2, NULL, NULL),
(15, 'Espaddrille Classique', 520, 'photo_espadrille4-removebg-preview.png', 5, 2, NULL, NULL),
(16, 'Escarpin Blanc', 240, 'photo_escarpin1-removebg-preview.png', 2, 2, NULL, NULL),
(17, 'Sandale Noir', 150, 'photo_sandale3-removebg-preview.png', 1, 2, NULL, NULL),
(18, 'Sandale Dorée', 240, 'photo_sandale1-removebg-preview.png', 4, 2, NULL, NULL),
(19, 'Sandale Marron', 420, 'photo_photo_sandale5-removebg-preview.png', 2, 2, NULL, NULL),
(20, 'Bottine Marron', 360, 'photo_photo_pngegg__1_-removebg-preview.png', 4, 2, NULL, NULL),
(22, 'Escarpin Blanc', 390, 'photo_escarpin1-removebg-preview.png', 4, 3, NULL, NULL),
(23, 'Espaddrille Classique', 520, 'photo_espadrille4-removebg-preview.png', 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'utilisateur', 'is_not_admin', '2022-04-04 15:47:49', '2022-04-04 15:47:49'),
(2, 'admin', 'is_admin', '2022-04-04 15:47:49', '2022-04-04 15:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 2, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sandales`
--

CREATE TABLE `sandales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sandales`
--

INSERT INTO `sandales` (`id`, `titre`, `prix`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sandale Noir', '150', 'Sandale plate noir très bonne qualité et Confortable taille 39', 'sandalesFemme', 'photo_sandale3-removebg-preview.png', '2022-04-05 03:38:25', '2022-04-05 03:38:25'),
(3, 'Sandale Dorée', '240', 'Sandale super Chic, Confortable et médicale Taille 37', 'sandalesFemme', 'photo_sandale1-removebg-preview.png', '2022-04-05 03:44:34', '2022-04-05 03:44:34'),
(4, 'Sandale Argentée', '160', 'Sandale argentée simple, magnifique et Confortable Taille 39', 'sandalesFemme', 'photo_sandale-removebg-preview.png', '2022-04-05 03:46:16', '2022-04-05 03:46:16'),
(5, 'Sandale Marron', '420', 'Sandale 100% Cuir avec une couverture médicale Taille 40', 'sandalesFemme', 'photo_photo_sandale5-removebg-preview.png', '2022-04-05 03:48:05', '2022-04-05 04:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$I8cFasrUCd5P9fHm/L1TNOFb/nABV7VHxBDfpYebuCsqdoysBWFvW', NULL, '2022-04-04 15:49:10', '2022-04-04 15:49:10'),
(2, 'israe', 'israe@gmail.com', NULL, '$2y$10$a/G.CoUTS7xnspXBzj2IpO/Je04vu2UpfMN0R/JN3VpxMoycYR6pm', NULL, '2022-04-04 15:50:43', '2022-04-04 15:50:43'),
(3, 'hamza', 'hamza@gmail.com', NULL, '$2y$10$pVDXASuYk/aOVmARPWfHk.tSSPxrtlfKsU6xXS2JTOYcbqXXt.hEy', NULL, '2022-04-05 13:24:08', '2022-04-05 13:24:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bottines`
--
ALTER TABLE `bottines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chaussure_hommes`
--
ALTER TABLE `chaussure_hommes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escarpins`
--
ALTER TABLE `escarpins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `espadrille_enfants`
--
ALTER TABLE `espadrille_enfants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `espadrille_hommes`
--
ALTER TABLE `espadrille_hommes`
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
-- Indexes for table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sandales`
--
ALTER TABLE `sandales`
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
-- AUTO_INCREMENT for table `bottines`
--
ALTER TABLE `bottines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chaussure_hommes`
--
ALTER TABLE `chaussure_hommes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `escarpins`
--
ALTER TABLE `escarpins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `espadrille_enfants`
--
ALTER TABLE `espadrille_enfants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `espadrille_hommes`
--
ALTER TABLE `espadrille_hommes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sandales`
--
ALTER TABLE `sandales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
