-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2026 pada 01.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_biodata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `universitas`, `program_studi`, `angkatan`, `pengalaman`, `foto`) VALUES
(1, 'Siti Adhylah Umihany Polanunu', 'V066221014', 'Universitas Hasanuddin', 'Terapi Gigi', 2022, 'Mahasiswa Terapi Gigi Universitas Hasanuddin yang aktif dalam kegiatan akademik dan praktik keterampilan klinik yang membantu mengembangkan kemampuan komunikasi, keterampilan klinis, dan pelayanan kepada pasien.', '1771774781.jpeg'),
(3, 'Radina Amaliah Ramli', 'V066221038', 'Universitas Hasanuddin', 'Terapi Gigi', 2022, 'Mahasiswa Terapi Gigi 2022 Universitas Hasanuddin. Aktif di himpunan mahasiswa dan berpengalaman magang di beberapa RSGM Makassar, dengan fokus pada pelayanan asuhan kesehatan gigi.', '1771776121.jpeg'),
(4, 'Musaril', 'V066221052', 'Universitas Hasanuddin', 'Terapi Gigi', 2022, 'Mahasiswa semester 8 yang sedang fokus menyelesaikan studi pada tahun 2026. Selain aktif dalam kegiatan akademik, saya juga terlibat dalam berbagai organisasi kemahasiswaan seperti UKM Protokoler, BEM Fakultas Vokasi Universitas Hasanuddin, serta Himpunan', '1771776229.jpeg'),
(5, 'Andi Zaskiya Ilham', 'V066221020', 'Universitas Hasanuddin', 'Terapi Gigi', 2022, 'Mahasiswa Terapi Gigi Unhas 2022. Aktif di himpunan & berpengalaman klinis melalui magang di 2 RSGM dan Klinik Makassar. Fokus pada pelayanan asuhan kesehatan gigi, komunikasi terapeutik, dan pengembangan relasi profesional.', '1771776368.jpeg'),
(6, 'Wesly Sirenden', 'V066221012', 'Universitas Hasanuddin', 'Terapi Gigi', 2022, 'Mahasiswa Terapi Gigi angkatan 2022 di Universitas Hasanuddin, memiliki pengalaman organisasi baik di dalam maupun luar kampus, serta telah mengikuti magang di beberapa RSGM untuk mengasah keterampilan klinis dan profesionalisme dalam pelayanan kesehatan ', '1771776450.jpeg'),
(7, 'Aqelah Resty Amaliah', 'V066221011', 'Universitas Hasanuddin', 'Terapi Gigi', 2022, 'Mahasiswi Terapi Gigi Unhas , berpengalaman sebagai Ketua UKM Seni Tari dan memiliki pengalaman magang di RSGM-UH selama satu tahun.  Keterampilan lainnya yakni skill komunikasi, negosiasi dan public speaking.', '1771776573.jpeg'),
(8, 'Thomas Kwaito', 'V066221032', 'Universitas Hasanuddin', 'Terapi Gigi', 2022, 'Mahasiswa Terapi Gigi yang pernah magang di RSGMP Unhas dan RSKD Prov. Sulsel, terbiasa membantu tindakan klinis dasar, edukasi pasien, sterilisasi alat, serta bekerja dalam tim dengan komunikasi yang baik.', '1771776984.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
