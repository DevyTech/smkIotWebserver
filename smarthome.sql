-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2024 pada 12.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarthome`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dht11`
--

CREATE TABLE `dht11` (
  `id` int(11) NOT NULL,
  `humidity` float NOT NULL,
  `temperature` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Super Admin','Admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'David ', 'superadmin', '$2y$10$5Q/Wg.fbnEhNETPcu8RF8O9eQBTbDq4oa5J/Pae/EOqdp1/V.M4Ku', 'Super Admin'),
(9, 'Aldy Bawotong', 'aldy', '$2y$10$9UvwSvJtnV9vHMxXcbEF3usJLLE8OEZg3t.79otesfSpO6wq3GY86', 'Admin'),
(11, 'Admin Super', 'super', '$2y$10$MGzk8AP7uXs3nvgGWQdsou90pVKLzX10ydsEz/GFJDhx/Pfq.wkp2', 'Super Admin'),
(15, 'David Tondo13', 'david13', '$2y$10$Zq9VbBayIv9f2K/Pcbs9x.ltP3/63QZJLY/TvaMys4zBjmPnOf6ii', 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dht11`
--
ALTER TABLE `dht11`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dht11`
--
ALTER TABLE `dht11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
