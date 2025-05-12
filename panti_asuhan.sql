-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Bulan Mei 2025 pada 17.29
-- Versi server: 8.0.30
-- Versi PHP: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panti_asuhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id` int NOT NULL,
  `anak` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'utama',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `heroes`
--

INSERT INTO `heroes` (`id`, `category`, `title`, `description`, `image`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(2, 'utama', 'Mari Kita Berbagi Dengan Sesama', 'Salurkan dana dan donasi anda kepada kami, insyaallah kami akan menyalurkan dan donasi anda menjadi shodaqoh jariyah yang terus bermanfaat.', 'utama.png', 'Donasi Sekarang', '/donasi', '2025-03-12 08:01:31', '2025-03-12 08:01:31'),
(3, 'donasi', 'Program Donasi', NULL, 'program-donasi.jpg', NULL, NULL, '2025-03-12 08:01:31', '2025-03-12 08:01:31'),
(4, 'kegiatan', 'Kegiatan Anak Darul Ihsan', NULL, NULL, NULL, NULL, '2025-03-12 08:01:31', '2025-03-12 08:01:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_sections`
--

CREATE TABLE `home_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `home_sections`
--

INSERT INTO `home_sections` (`id`, `name`, `title`, `subtitle`, `description`, `image`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Mari Kita Berbagi Dengan Sesama', NULL, 'Salurkan dana dan donasi anda kepada kami, insyaallah kami akan menyalurkan dan donasi anda menjadi shodaqoh jariyah yang terus bermanfaat.', 'hero.jpg', 'Donasi Sekarang', '/donasi', '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(2, 'tentang', 'Tentang Kami', 'YAYASAN YATIM PIATU DAN ANAK DHUAFA DARUL IHSAN', 'Yayasan Yatim Piatu dan Anak Dhuafa Darul Ihsan adalah salah satu lembaga sosial anak di Jepara yang mengasuh anak-anak yatim, piatu, fakir miskin, dan dhuafa. Semangat utama dari yayasan ini adalah untuk meringankan beban serta memberikan santunan agar mereka bisa mendapatkan kehidupan yang lebih baik.', 'tentang.jpg', 'Baca Selengkapnya', '/tentang', '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(3, 'kegiatan', 'Kegiatan Anak', 'KEGIATAN ANAK DARUL IHSAN', 'Anak-anak Darul Ihsan aktif dalam berbagai kegiatan.', NULL, NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(4, 'donasi', 'Program Donasi', 'DARUL IHSAN DONATION PROGRAM', 'DARUL IHSAN DONATION PROGRAM', 'program-donasi.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_section_items`
--

CREATE TABLE `home_section_items` (
  `id` bigint UNSIGNED NOT NULL,
  `home_section_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `home_section_items`
--

INSERT INTO `home_section_items` (`id`, `home_section_id`, `title`, `description`, `image`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 3, 'Sholat Berjama\'ah', 'Melatih persatuan terutama dalam hal beragama.', 'kegiatan/sholat.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(2, 3, 'Sekolah Formal', 'Mengembangkan kemampuan dan kepribadian.', 'kegiatan/sekolah.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(3, 3, 'Bermain', 'Kebahagiaan di waktu kecil harus ditanamkan.', 'kegiatan/bermain.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(4, 3, 'Bermain', 'Kebahagiaan di waktu kecil harus ditanamkan.', 'kegiatan/bermain.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(5, 3, 'Bermain', 'Kebahagiaan di waktu kecil harus ditanamkan.', 'kegiatan/bermain.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(6, 3, 'Bermain', 'Kebahagiaan di waktu kecil harus ditanamkan.', 'kegiatan/bermain.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(7, 4, 'Program Pendidikan', 'Program pembiayaan sekolah untuk anak yatim.', 'program/pendidikan.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(8, 4, 'Program Orang Tua Asuh', 'Bantuan biaya kuliah bagi anak yatim.', 'program/orangtua.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04'),
(9, 4, 'Program Orang Tua Asuh', 'Bantuan biaya kuliah bagi anak yatim.', 'program/orangtua.jpg', NULL, NULL, '2025-03-19 05:05:04', '2025-03-19 05:05:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `title`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sholat Berjama\'ah', 'Melatih persatuan terutama dalam hal beragama.', 'kegiatan/sholat.jpg', '2025-03-12 05:27:21', '2025-03-12 05:27:21'),
(2, 'Sekolah Formal', 'Mengembangkan kemampuan dan kepribadian mereka lewat pendidikan formal.', 'kegiatan/sekolah.jpg', '2025-03-12 05:27:21', '2025-03-12 05:27:21'),
(3, 'Bermain', 'Kebahagiaan di waktu kecil harus ditanamkan dalam hati agar kelak mereka tahu pentingnya membahagiakan orang lain.', 'kegiatan/bermain.jpg', '2025-03-12 05:27:21', '2025-03-12 05:27:21'),
(4, 'Pendidikan Agama', 'Pendidikan agama sangat diperlukan untuk membentun insan yang berakhlaqul karimah', 'kegiatan/pendidikan_agama.jpg', '2025-03-12 05:27:21', '2025-03-12 05:27:21'),
(5, 'Belajar Mandiri', 'Kemandirian sangat diperlukan agar mereka dapat berjuang dalam hidup', 'kegiatan/belajar.jpg', '2025-03-12 05:27:21', '2025-03-12 05:27:21'),
(6, 'Mengaji Al-Qur\'an', 'Landasan hidup umat islam sudah seharusnya dibaca setiap hari agar hidup penuh denga berkah.', 'kegiatan/mengaji.jpg', '2025-03-12 12:46:36', '2025-03-12 12:46:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2025_03_12_062638_create_tentang_table', 2),
(29, '0001_01_01_000000_create_users_table', 3),
(30, '0001_01_01_000001_create_cache_table', 3),
(31, '0001_01_01_000002_create_jobs_table', 3),
(32, '2025_03_07_100545_create_profil_pantis_table', 3),
(33, '2025_03_12_062637_create_heroes_table', 3),
(34, '2025_03_12_062638_create_kegiatan_table', 3),
(35, '2025_03_12_062638_create_tentangs_table', 3),
(36, '2025_03_12_062639_create_program_donasi_table', 3),
(37, '2025_03_12_120745_create_kegiatans_table', 4),
(38, '2025_03_12_120745_create_program_donasis_table', 4),
(39, '2025_03_12_144226_add_category_to_heroes_table', 5),
(40, '2025_03_12_144337_modify_description_nullable_in_heroes_table', 5),
(41, '2025_03_13_034050_create_home_sections_table', 6),
(42, '2025_03_19_065138_create_home_sections_table', 7),
(48, '2025_03_19_070459_create_home_sections_table', 8),
(49, '2025_03_19_070500_create_home_section_items_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_pantis`
--

CREATE TABLE `profil_pantis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_panti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_buka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_donasis`
--

CREATE TABLE `program_donasis` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program_donasis`
--

INSERT INTO `program_donasis` (`id`, `title`, `deskripsi`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Program Pendidikan', 'Program pembiayaan sekolah untuk anak yatim piatu dan dhuafa untuk menuntut ilmu disekolah dasar, Sekolah Menengah Pertama(SMP, Mts, dan lain-lain), Sekolah Menengah Atas(SMA, SMK dan lain-lain).', 'ri-line-chart-line', '2025-03-12 05:27:22', '2025-03-12 05:27:22'),
(2, 'Program Pembangunan', 'Pebangunan Gedung Darul Ihsan. Gedung ini nantinya berkapasitas kurang lebih 100 orang, serta digunakan sebagai tempat kegiatan dan operasioal LKSA.', 'ri-stack-line', '2025-03-12 05:27:22', '2025-03-12 05:27:22'),
(3, 'Program Orang Tua Asuh', 'Program pembiayaan kuliah untuk anak-anak yatim piatu dan anak dhuafa\' yang telah lulus SMA atau sederajat dan telah dinyatakan lulus loyalitas,moral, budi pekerti, dan mengikuti Hafalan Al Qur\'an.\r\n\r\n', 'ri-brush-4-line', '2025-03-12 05:27:22', '2025-03-12 05:27:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3PnjENVkqTo0d3NDnTw5J0kLarcVQFxJLKbP7GZb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidXlnRzJlYkpiZklwYVlNejVuUXFLYmR1dFVHbXc5ajR2WktVaVVOdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1746454981),
('5VW1kKQDPPxj0oXdfTxjwyaFu8wDmykRTOdHNWoB', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieHJOUWsxNVJmZXpUV0ROcVQ4WTRtaFh6eFZubWU4VFpIdjVTOGtObyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjI6e2k6MDtzOjEzOiJsb2dpbl9zdWNjZXNzIjtpOjE7czoxMzoibG9naW5fc3VjY2VzcyI7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjEzOiJsb2dpbl9zdWNjZXNzIjtzOjI4OiJTZWxhbWF0IGRhdGFuZywgU3VwZXIgQWRtaW4hIjt9', 1745437378),
('EboWwDYx2437VfjjYLfQaIhrXsMOzT6d0DYF1Dqi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWlIa3h0NURhVE1odklJOTBLZzFTZG9wRFM3UXJ0c1dWVndSd2dOUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745437350),
('FiyggH4gbQwmdpoHSmdeWHJ3pOl6ZGbBbDOrOJw6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3JKOVJaSUxFTmFjQVJKbFYzbTdiY3pqU2ZyckJkT21hMjdvQ2NwTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1746396900),
('LXIYRjJX31nLXAd6gNIdHVveomCkbxLUTFvfE21y', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVTBoS3JZbW83Uk1RUGp1aWNIQVRvRkVURGRWZkZmSmxjY1JFOUxhMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvc3VwZXJhZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1745437412),
('VmAEKSWorJy3fiTvJSII7sxa863rP0Cx14HQFpAQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlNiY3J6Sm9vRHhTaGJCdmZld2F0Qjd4S25QWk9wRE9YeVQ4V0tQWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747070900),
('yxpEx9FpZokt9vlLLIr2OCRj2ur1OSivCJkwZEyn', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibjdUZ2JlWWpNeE5Wam44NFdMNk1zMkYxMk5jUGNJRGRFQnFvV2ltYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXBlcmFkbWluL2hvbWUtc2VjdGlvbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1746397207);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentangs`
--

CREATE TABLE `tentangs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tentangs`
--

INSERT INTO `tentangs` (`id`, `title`, `subtitle`, `description`, `image`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Kami', 'YAYASAN YATIM PIATU DAN ANAK DHUAFA DARUL IHSAN', 'Yayasan Yatim Piatu dan Anak Dhuafa Darul Ihsan adalah salah satu lembaga sosial anak di Jepara yang mengasuh anak-anak yatim, piatu, fakir miskin, dan dhuafa. Semangat utama dari yayasan ini adalah untuk meringankan beban serta memberikan santunan agar mereka bisa mendapatkan kehidupan yang lebih baik.', 'tentang.jpg', '/tentang', '2025-03-12 00:32:44', '2025-03-12 00:32:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('superadmin','admin','donatur') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'donatur',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@panti.com', NULL, '$2y$12$3EQBmcI2CIwSFq67DBcmTeo10pQ98nznX92DVfG71SZ/x2dUKqqqi', 'superadmin', 1, NULL, '2025-03-12 01:08:23', '2025-03-12 01:08:23'),
(2, 'Admin', 'admin@panti.com', NULL, '$2y$12$86zL6M5rjGpoaPKwIawWPOwk9r6F.LPZzgO1RYf2tegVnLqPdnriO', 'admin', 1, NULL, '2025-03-12 01:08:23', '2025-03-12 01:08:23'),
(3, 'Donatur', 'donatur@panti.com', NULL, '$2y$12$UOHaWvsVpjZzgm2RHDMu/OcsnTLAqPLR7IcVHon8DmmkmNpUtX8jy', 'donatur', 1, NULL, '2025-03-12 01:08:23', '2025-03-12 01:08:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_sections`
--
ALTER TABLE `home_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `home_sections_name_unique` (`name`);

--
-- Indeks untuk tabel `home_section_items`
--
ALTER TABLE `home_section_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_section_items_home_section_id_foreign` (`home_section_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `profil_pantis`
--
ALTER TABLE `profil_pantis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profil_pantis_email_unique` (`email`);

--
-- Indeks untuk tabel `program_donasis`
--
ALTER TABLE `program_donasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `tentangs`
--
ALTER TABLE `tentangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `home_sections`
--
ALTER TABLE `home_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `home_section_items`
--
ALTER TABLE `home_section_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `profil_pantis`
--
ALTER TABLE `profil_pantis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `program_donasis`
--
ALTER TABLE `program_donasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tentangs`
--
ALTER TABLE `tentangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `home_section_items`
--
ALTER TABLE `home_section_items`
  ADD CONSTRAINT `home_section_items_home_section_id_foreign` FOREIGN KEY (`home_section_id`) REFERENCES `home_sections` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
