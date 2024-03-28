-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 01:12 PM
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
-- Database: `mt`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uri` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `post_desc` varchar(255) DEFAULT NULL,
  `mainImg` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `uri`, `title`, `post_desc`, `mainImg`, `content`, `sort`, `created_at`, `updated_at`) VALUES
(2, 'in-the-better-world', 'in-the-better-world', 'in-the-better-world', 'uploads/books/2024-03-26/2024-03-26-jurJ.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 04:18:13', '2024-03-26 04:18:13'),
(3, 'in-the-better-world', 'in-the-better-world', 'in-the-better-world', 'uploads/books/2024-03-26/2024-03-26-hNJS.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 04:18:36', '2024-03-26 04:18:36'),
(4, 'in-the-better-world', 'in-the-better-world', 'in-the-better-world', 'uploads/books/2024-03-26/2024-03-26-qudU.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 04:19:27', '2024-03-26 04:19:27'),
(5, 'in-the-better-world', 'in-the-better-world', 'in-the-better-world', 'uploads/books/2024-03-26/2024-03-26-cFAq.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 04:19:51', '2024-03-26 04:19:51'),
(6, 'in-the-better-world', 'in-the-better-world', 'in-the-better-world', 'uploads/books/2024-03-26/2024-03-26-sqyR.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 04:19:51', '2024-03-26 04:19:51'),
(7, 'in-the-better-world', 'in-the-better-world', 'in-the-better-world', 'uploads/books/2024-03-26/2024-03-26-oUje.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 04:20:15', '2024-03-26 04:20:15');

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
-- Table structure for table `healths`
--

CREATE TABLE `healths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uri` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `post_desc` varchar(255) DEFAULT NULL,
  `mainImg` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_26_095244_create_pages_table', 1),
(6, '2024_03_23_084122_create_newsletters_table', 1),
(7, '2024_03_23_084524_create_healths_table', 1),
(8, '2024_03_23_090819_create_thirteens_table', 1),
(9, '2024_03_26_051215_create_movies_table', 1),
(10, '2024_03_26_095125_create_books_table', 1),
(11, '2024_03_26_112815_create_podcasts_table', 1),
(12, '2024_03_27_134250_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uri` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `post_desc` varchar(255) DEFAULT NULL,
  `mainImg` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `uri`, `title`, `post_desc`, `mainImg`, `content`, `sort`, `created_at`, `updated_at`) VALUES
(15, 'in-the-better-world', 'in-the-better-world', 'in-the-better-world', 'uploads/movies/2024-03-26/2024-03-26-wvwK.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 01:10:48', '2024-03-26 01:10:48'),
(16, 'whale', 'whale', 'whale', 'uploads/movies/2024-03-26/2024-03-26-DZGo.jpg', '<p>whale<br></p>', NULL, '2024-03-26 01:12:01', '2024-03-26 01:12:01'),
(17, 'tar', 'tar', 'tar', 'uploads/movies/2024-03-26/2024-03-26-iLDP.jpg', '<p>tar<br></p>', NULL, '2024-03-26 01:12:38', '2024-03-26 01:12:38'),
(18, 'who\'s eating gilbert grape', 'who\'s eating gilbert grape', 'who\'s eating gilbert grape', 'uploads/movies/2024-03-26/2024-03-26-Zysg.jpg', '<p>who\'s eating gilbert grape<br></p>', NULL, '2024-03-26 01:13:06', '2024-03-26 01:13:06'),
(19, 'dune', 'dune', 'dune', 'uploads/movies/2024-03-26/2024-03-26-JHkI.jpg', '<p>dune<br></p>', NULL, '2024-03-26 01:13:32', '2024-03-26 01:13:32'),
(20, '8 mile', '8 mile', '8 mile', 'uploads/movies/2024-03-26/2024-03-26-beks.jpg', '<p>8 mile<br></p>', NULL, '2024-03-26 01:14:01', '2024-03-26 01:14:01'),
(21, '8 mile', '8 mile', '8 mile', 'uploads/movies/2024-03-26/2024-03-26-LOKm.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 01:36:46', '2024-03-26 01:36:46'),
(22, '8 mile', '8 mile', '8 mile', 'uploads/movies/2024-03-26/2024-03-26-FhQc.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 01:36:46', '2024-03-26 01:36:46'),
(23, 'in-the-better-world', 'in-the-better-world', 'in-the-better-world', 'uploads/movies/2024-03-26/2024-03-26-ghgF.jpg', '<p>in-the-better-world<br></p>', NULL, '2024-03-26 03:16:37', '2024-03-26 03:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uri` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `post_desc` varchar(255) DEFAULT NULL,
  `mainImg` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uri` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `post_desc` varchar(255) DEFAULT NULL,
  `mainImg` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `uri`, `title`, `post_desc`, `mainImg`, `content`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'چرخه حیات', 'چرخه حیات', 'چرخه حیات', NULL, '<p>چرخه حیات ، زنجیره جهانی است ،  متشکل شده از افراد و سازمان هایئ که در مسیر رسیدن به موفقیت هایشان ، کشف و خلق ارزش ها ، برایشان هدف و چشم انداز است . برای قرار گرفتن در این مدار به ما پیوندید . <br></p>', NULL, '2024-02-13 06:27:27', '2024-03-22 05:58:08'),
(2, 'صورتی محکم', 'صورتی محکم', 'صورتی محکم', NULL, '<div>«زندگی چیزی است که به دست خودت ساخته می شود.</div><div>صورتی های محکم،خارج از جنسیت،موفق هستند،</div><div>موفقیت آن ها بر پایه کشف قابلیت ها و کسب و تخصص هاست.</div><div>موفقیت آن ها با حضور ارزش ها می درخشد.</div><div>صورتی، برپایه ارزش ها و محکم ، ', NULL, '2024-02-13 06:27:55', '2024-03-22 05:38:48'),
(3, 'کشف مهارت', 'کشف مهارت', 'کشف مهارت', NULL, '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\">اینکه که قسمتی از مهارت های ما .، از dna&nbsp; ما سر چشمه میگیرد&nbsp; و با کشف آنها میتوانیم ، در مدیریت زمان مهارت هایمان پیروز باشیم ، اگاهی است که از جهان استعداد ها ، به دور نیست ...&nbsp;</div><div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\">بهتر است ، مهارت های ذاتی که از دو ژن والد به ما می رسد را به کمک متخصصان این راه ، کشف و درجاده تکامل آنها رو به جلو ، قدم برداریم . تا جاده آروزهایمان ، با امنیت و ریسک کمتری ، برای گذر ما ، ساخته شود .</div><div><br></div><div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\"></div>', NULL, '2024-02-13 06:28:16', '2024-03-25 23:59:04'),
(4, 'متاورس', 'متاورس', 'متاورس', NULL, '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: #ce9178;\">متاورس</span></div>', '1', '2024-02-13 06:28:39', '2024-02-13 06:28:39'),
(5, 'هنرهای بومی', 'هنرهای بومی', 'هنرهای بومی', NULL, '<div style=\"background-color: rgb(30, 30, 30);\" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\"><font color=\"#ce9178\">زمین های شیار نکرده .. بستری برای رفص هنر و خلق حسی به نام زندگی است و زندگی آ', NULL, '2024-02-13 06:29:09', '2024-03-22 05:44:33'),
(6, 'خلق آرزوها', 'خلق آرزوها', 'خلق آرزوها', NULL, '<div>ویژن ، چشم انداز ، آرزو ...</div><div courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\">مگر میشود بدون آنها .. کوله بار سفر،  جاده زندگی را بست و آغاز کرد ... ؟</div><div courier=\"\" new\",=\"\" mo', NULL, '2024-02-13 06:29:39', '2024-03-22 06:00:11'),
(7, 'تجارت جهانی', 'تجارت جهانی', 'تجارت جهانی', NULL, '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\"><div courier=\"\" new\",=\"\" monospace;=\"\" font-size:', NULL, '2024-02-13 06:30:07', '2024-03-22 05:50:31'),
(8, 'پژوهش جهانی', 'پژوهش جهانی', 'پژوهش جهانی', NULL, '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: #ce9178;\">پژوهش جهانی</span></div>', '1', '2024-02-13 06:30:39', '2024-02-13 06:30:39'),
(9, 'برند سازی', 'برند سازی', 'برند سازی', NULL, '<div>آیا میتوانند،  انسان ها فقط با جسم خود ... اثری بر هستی بگذارند ؟</font></div><div courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\"><font color=\"#ce9178\">مگر بدون ایجاد و تولید حس ، اثری خواهد', NULL, '2024-02-13 06:31:00', '2024-03-22 05:56:14'),
(10, 'کاشت داشت برداشت', 'کاشت داشت برداشت', 'کاشت داشت برداشت', NULL, '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\"><div courier=\"\" new\",=\"\" monospace;=\"\" font-size:', NULL, '2024-02-13 06:31:58', '2024-03-22 05:50:55'),
(11, 'نگاه جهانی', 'نگاه جهانی', 'نگاه جهانی', NULL, '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, \"Courier New\", monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: #ce9178;\">نگاه جهانی</span></div>', NULL, '2024-02-13 06:32:22', '2024-03-22 04:26:18'),
(12, 'روابط جهانی', 'روابط جهانی', 'روابط جهانی', NULL, '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: #ce9178;\">روابط جهانی</span></div>', '1', '2024-02-13 06:32:53', '2024-02-13 06:32:53'),
(13, 'سوگندنامه', 'سوگندنامه', 'سوگندنامه', NULL, '<p>&nbsp;سوگند با mt</p><p><br></p><ol><li>سوگند یاد میکنم ... قبل از شروع هر آرزوئی&nbsp; ، انتخاب کنم مسیر رسیدن به آرزوهایم را .</li><li>سوگند یاد میکنم . ... قبل از طراحی و خلق آرزوهایم ، بدون تحقیقات و اثر آن بر هستی برامانتی به نام ذهن ، به تصویر نک', NULL, '2024-03-22 05:36:44', '2024-03-22 05:36:44');

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
-- Table structure for table `podcasts`
--

CREATE TABLE `podcasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uri` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `post_desc` varchar(255) DEFAULT NULL,
  `mainImg` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thirteens`
--

CREATE TABLE `thirteens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `healths`
--
ALTER TABLE `healths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `podcasts`
--
ALTER TABLE `podcasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thirteens`
--
ALTER TABLE `thirteens`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `healths`
--
ALTER TABLE `healths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podcasts`
--
ALTER TABLE `podcasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thirteens`
--
ALTER TABLE `thirteens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
