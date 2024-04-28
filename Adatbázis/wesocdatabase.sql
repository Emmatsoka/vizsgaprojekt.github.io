-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2024. Ápr 27. 18:07
-- Kiszolgáló verziója: 10.11.6-MariaDB-0+deb12u1
-- PHP verzió: 7.2.34-45+0~20240422.94+debian12~1.gbpa9ccb2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `wesocdatabase`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `baratok`
--

CREATE TABLE `baratok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `barat_id` bigint(20) UNSIGNED NOT NULL,
  `elfogadva` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `created_at`, `updated_at`) VALUES
(93, 51, 39, 'Írj egy új hozzászólást...', '2024-04-12 04:42:57', '2024-04-12 04:42:57'),
(95, 108, 40, 'Vangúgyúzs érdekel nemlopot alik hasznalt 42000', '2024-04-12 04:49:07', '2024-04-12 04:49:07'),
(98, 109, 40, 'Mek veszem tezsvirem', '2024-04-12 05:00:05', '2024-04-12 05:00:05'),
(100, 1, 40, 'Nekm van husztki gugyám eladó 42 fortnit, nem lopot', '2024-04-12 06:25:35', '2024-04-12 06:25:35');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
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
-- Tábla szerkezet ehhez a táblához `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `szamlalo` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `szamlalo`, `created_at`, `updated_at`) VALUES
(50, 52, 35, 2, '2024-04-12 03:54:04', '2024-04-15 10:31:20'),
(54, 1, 40, 3, '2024-04-12 04:48:53', '2024-04-23 12:11:28'),
(55, 108, 40, 2, '2024-04-12 04:53:27', '2024-04-23 12:11:28'),
(56, 108, 35, 1, '2024-04-12 04:58:51', '2024-04-15 10:31:20'),
(57, 1, 39, 2, '2024-04-12 05:20:28', '2024-04-15 12:20:40'),
(59, 52, 39, 1, '2024-04-12 06:32:07', '2024-04-15 12:20:40'),
(69, 1, 35, 1, '2024-04-15 10:31:20', '2024-04-15 10:31:20'),
(78, 1, 48, 2, '2024-04-16 03:54:18', '2024-04-23 12:11:26'),
(79, 1, 50, 2, '2024-04-16 03:54:20', '2024-04-21 17:09:24'),
(82, 52, 50, 1, '2024-04-21 17:09:24', '2024-04-21 17:09:24'),
(84, 52, 56, 3, '2024-04-23 12:07:51', '2024-04-26 03:51:29'),
(85, 52, 48, 1, '2024-04-23 12:11:26', '2024-04-23 12:11:26'),
(86, 52, 40, 1, '2024-04-23 12:11:28', '2024-04-23 12:11:28'),
(87, 108, 56, 2, '2024-04-25 05:10:37', '2024-04-26 03:51:29'),
(89, 1, 58, 1, '2024-04-26 03:51:20', '2024-04-26 03:51:20'),
(90, 1, 56, 1, '2024-04-26 03:51:29', '2024-04-26 03:51:29');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(79, '2014_10_12_000000_create_users_table', 1),
(80, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(81, '2019_08_19_000000_create_failed_jobs_table', 1),
(82, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(83, '2024_02_29_094429_create_posts_table', 1),
(84, '2024_03_20_203120_create_baratok_table', 1),
(85, '2024_04_03_070344_create_sessions_table', 1),
(87, '2024_04_04_174201_create_likes_table', 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('gresugabor@gmail.com', '$2y$12$bie1FS2HiBvNLSdT84vKBOzNp5Doisb/ntTt5XaMxXtaJauYV3Ize', '2024-04-22 17:21:21');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
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
-- Tábla szerkezet ehhez a táblához `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `context` longtext NOT NULL,
  `title` varchar(255) NOT NULL,
  `filepath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `created_at`, `updated_at`, `context`, `title`, `filepath`) VALUES
(35, 1, '2024-04-11 17:57:42', '2024-04-11 17:57:42', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend molestie iaculis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ut efficitur lectus, sit amet porta massa. Etiam in lacinia orci.', 'Lorem Ipsum', NULL),
(39, 51, '2024-04-12 04:42:15', '2024-04-12 04:42:15', 'Mi jár a fejedben? ?', 'Mi legyen a címe?', NULL),
(40, 109, '2024-04-12 04:48:00', '2024-04-12 04:48:00', 'Németh Juhász faytakénne', 'Valaki tud gizsgugyát eladó?', NULL),
(48, 1, '2024-04-15 13:04:30', '2024-04-15 13:06:11', 'Teszt', 'Hang feltöltés update', 'user/file_1713193470.mp3'),
(50, 1, '2024-04-15 13:14:30', '2024-04-15 13:14:30', 'Teszt', 'Videó feltöltés update', 'user/file_1713194070.mp4'),
(56, 52, '2024-04-23 12:00:07', '2024-04-23 12:00:07', 'Beszeretném mutatni milyen szép  egy alma!', 'Az alma', 'user/file_1713880807.jpg'),
(58, 108, '2024-04-25 05:09:44', '2024-04-25 05:09:44', 'A mágnesességet már mindenki ismeri, azonban felmerült egy tudós fejében az ötlet hogy mi történne akkor, ha továbbfejlesztenék a mágnesességet. Ebből adódik, hogy kutatások sorozatát indította el annak érdekében, hogy egy erősebb, és helytakarékosabb fajtáját alakítsák ki a mágneseknek. A tudósoknak igen sok kutatómunkájába telt bele, míg egy olyan anyagot fejlesztenek ki, aminek extrém kicsi méretbe zsugorítottak bele igazán erős mágnesességet. Ezt a találmányt később szabadalmaztatták, és létrejött a páktes.\r\n\r\nÖsszehasonlításképpen egy hagyományos mágnesnek két pólusa van, és általában 1 méter széles. A mágnes piros színű pólusa az északi, míg a kék a déli pólus, középen a mágneses mező nem él.\r\nA páktesnek közepen is él a mágneses mezeje, ezenfelül negyvenszer erősebb, és kisebb a mágnesnél. A páktesnek van pozitív és negatív pólusa is az északi, és déli póluson kívül. Ezt az erős mágneses mezőt egy TIGHT-OXID nevű anyag segítségével érték el', 'A mágnes és páktes közötti különbségek', 'user/file_1714028984.png');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profilkep` varchar(255) NOT NULL DEFAULT 'felhasznalo.png',
  `boritokep` varchar(255) NOT NULL DEFAULT 'boritokep.png',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `bemutatkozas` varchar(255) NOT NULL DEFAULT 'Nincs megadva',
  `lakhely` varchar(255) NOT NULL DEFAULT 'Nincs megadva',
  `szulev` date NOT NULL DEFAULT '1979-01-01',
  `neme` varchar(255) NOT NULL DEFAULT 'Nincs megadva',
  `tema` varchar(255) NOT NULL DEFAULT 'alap-tema',
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `profilkep`, `boritokep`, `email`, `email_verified_at`, `password`, `bemutatkozas`, `lakhely`, `szulev`, `neme`, `tema`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emmatsoka', 'emmatsoka', '3vLPWygE0SmTor99jwNMXFEyZZ5epYSPLgZnkZgL.png', 'EBD7ZEgkHnRgHboC6fkd2bKQQngNRXO4mrTqpj69.webp', 'emma.szanyi.2005@gmail.com', '2024-04-08 18:59:12', '$2y$12$QDkHbClU6OrE9vZQwPHx8.MUIxsQd5hUGrfKl2U8HKaC9jU2apxca', ':333333333333', 'wawawa', '0001-01-01', 'nő', 'alap-tema', 1, 'iHYmTk1o4xrAR6K0byZvqdIQIfJjuvYEqVBFXbs2tgc7TrL9GInqKZByAAU0', '2024-04-08 14:16:43', '2024-04-27 10:49:25'),
(50, 'Lecci Mukoggy', 'leventezg', 'felhasznalo.png', 'boritokep.png', 'leventezg.zg@gmail.com', '2024-04-08 18:49:49', '$2y$12$1.FAGXzfL.BwhnVjqVGs8u.9f2pGFAc17t50Df8V5HUcmGiChVmFe', 'Nincs megadva', 'Nincs megadva', '2024-03-22', 'Nincs megadva', 'alap-tema', 0, NULL, '2024-04-08 18:49:12', '2024-04-08 18:49:49'),
(51, 'DarpyDémonCsászár', 'Darpy', '9f4lLd3PPHJEeldjklyGgUtakKsUeXkQ4OvHLYCg.jpg', '0aUFm1U3abotuzLjEA9GiLr0wD0ZcerhRQozJSv8.jpg', 'kuki420@gmail.com', NULL, '$2y$12$doc0wfdpK9EXQxnEjPHcheRp/GzQOYKxzE7Lvk1qF5NsN8JEoRJBu', 'Nincs megadva', 'Nincs megadva', '1111-11-11', 'férfi', 'lila-tema', 1, NULL, '2024-04-09 03:40:44', '2024-04-18 08:22:18'),
(52, 'Gresu Gábor', 'Gabor55', '9DYDNDGZXuURT9yWY6CrU1d5NfLpLK2DHfFZrn5Y.png', 'uZ4tVdqpRi6RKbplkNUr9ZzQLylsLVjUBcdGCMGt.jpg', 'gresugabor@gmail.com', '2024-04-09 03:51:10', '$2y$12$TVZnk94WhbtbjhYp0NyTCuksaI6FH833QH7d5WjGpFCvuYbuAhsIq', 'Dani barátja', 'Vaja', '2003-08-04', 'férfi', 'piros-tema', 1, 'tzW9ei76myMpXe8PCcIM5Jme8d4DrgYovaonZi4FjTwtfdSsP2uchubH5u6M', '2024-04-09 03:49:10', '2024-04-23 12:25:42'),
(55, 'Jóni Attila Péter', 'joniattila', 'felhasznalo.png', 'boritokep.png', 'aticsati16@gmail.com', NULL, '$2y$12$y144GtWIZ.X3sZ2zzIuefeAzFI8N6boEe12zYACd7FCCD/GXrAU4m', 'Nincs megadva', 'Nincs megadva', '2002-10-10', 'Nincs megadva', 'alap-tema', 0, NULL, '2024-04-10 07:10:30', '2024-04-10 07:10:30'),
(56, 'Leventezg', 'ujaccount', 'felhasznalo.png', 'boritokep.png', 'leventezg@gmail.com', NULL, '$2y$12$fbEP4KiYhggKpUtgEzFs2upC5sxrVEfQXAIj8KwCCwaeDS.SW99QW', 'Nincs megadva', 'Nincs megadva', '2024-04-13', 'Nincs megadva', 'alap-tema', 0, NULL, '2024-04-10 11:10:48', '2024-04-10 11:10:48'),
(57, 'lakatos chromium', 'chromium', 'felhasznalo.png', 'boritokep.png', 'chromium@airmail.cc', NULL, '$2y$12$KykiC/SXg67Oc2PmqGNAAOt25w6V07UY92qmEvHP63Eh62E5C3dja', 'Nincs megadva', 'Nincs megadva', '2001-11-09', 'Nincs megadva', 'alap-tema', 0, NULL, '2024-04-10 15:16:42', '2024-04-10 15:16:42'),
(107, 'testaccount69', 'testaccount69', 'felhasznalo.png', 'boritokep.png', 'testaccount69@example.com', NULL, '$2y$12$ENaAWghChnLEZ6fh8BFeA.mk9LzvJaSyJTHrbrlBdm2bA7EqRzYLe', 'Nincs megadva', 'Nincs megadva', '9999-09-09', 'Nincs megadva', 'alap-tema', 0, NULL, '2024-04-11 16:32:55', '2024-04-11 16:32:55'),
(108, 'Tények Adrián', 'tenyek', 'eusAV0cdUkNDsNFqgKIae78kL4WNwzNX74N4pQlf.jpg', 'vCpZnSJbz6otApqJQPBalKDBsT4NGb3MC6SrP5g1.png', 'gaaladrian1@gmail.com', '2024-04-12 04:38:13', '$2y$12$79e0f/CJxxjyYlbH0KCW9OQ1XJP2mJYi3XCMtr50jpigbpM5Hs7Du', 'Nincs megadva, és nem is lesz XD', 'Nincs megadva, és az sem lesz LOL', '2002-12-13', 'férfi', 'kek-tema', 0, 'Tf58BN68wFbA1XyMaUVaJkxJ4y3x7ooX6ijeeHLESBjW5jmq7zumc0428tsl', '2024-04-12 04:36:31', '2024-04-15 15:54:51'),
(109, 'Mr. Szakember', 'mrszakember01', 'felhasznalo.png', 'boritokep.png', 'mrszakember01@gmail.com', '2024-04-12 04:59:18', '$2y$12$itPVdxDJQVS8UVxBlPQyGuOuHGblQl3LI.gChRVTataDBfSEXFPaK', 'Nincs megadva', 'Nincs megadva', '2003-05-20', 'Nincs megadva', 'lila-tema', 0, NULL, '2024-04-12 04:45:53', '2024-04-12 05:00:18'),
(111, 'asasdasd', 'asdasdasd', 'felhasznalo.png', 'boritokep.png', 'valami@gmail.com', NULL, '$2y$12$maVTFDyNxm954j4jqtBAkurMib.6FE8zxKAaSY.5io7gU0jZNAwMW', 'Nincs megadva', 'Nincs megadva', '2024-04-08', 'Nincs megadva', 'alap-tema', 0, NULL, '2024-04-23 12:13:22', '2024-04-23 12:13:22'),
(112, 'asdasd', 'asdasd', 'felhasznalo.png', 'boritokep.png', 'asdasdw@gmai.com', NULL, '$2y$12$8tcHLP8WFesgAeS279NPE.8SzHDfPjnxoTiG5TWggA0.w2X8TdSDe', 'Nincs megadva', 'Nincs megadva', '2005-05-02', 'Nincs megadva', 'alap-tema', 0, NULL, '2024-04-25 05:45:08', '2024-04-25 05:45:08');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- A tábla indexei `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT a táblához `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT a táblához `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
