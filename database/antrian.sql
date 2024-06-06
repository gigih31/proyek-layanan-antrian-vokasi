-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2024 pada 08.06
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
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nip` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `username`, `password`, `email`, `level`) VALUES
(123, 'admin12345', '30cd2f99101cdd52cc5fda1e996ee137', 'admin@gmail.com', 'admin'),
(223, 'Gigih Lumintang', '81dc9bdb52d04dc20036dbd8313ed055', 'gigihlumintang@gmail.com', 'admin'),
(321, 'super', '202cb962ac59075b964b07152d234b70', 'superadmin@gmail.com', 'superadmin'),
(98756, 'gigih admin', '202cb962ac59075b964b07152d234b70', 'gigihlumintang@gmail.com', 'admin'),
(1215431513, 'gigihlumintang', 'b7b45a023b74f8cbc40bc7120a8475a1', 'gigihlumintang@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_pengguna` int(255) NOT NULL,
  `layanan` int(10) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `no_antrian` int(10) NOT NULL,
  `id_jadwal` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id_pengguna`, `layanan`, `id_jenis`, `id`, `no_antrian`, `id_jadwal`, `tanggal`) VALUES
(5654, 1, 1, 1, 2, 2, '2023-12-18'),
(234, 1, 1, 6, 4, 4, '2023-12-11'),
(234, 1, 1, 12, 1, 1, '2023-12-11'),
(234, 1, 1, 13, 4, 4, '2023-12-12'),
(234, 1, 1, 14, 2, 2, '2023-12-11'),
(234, 4, 17, 15, 3, 3, '2023-12-13'),
(12345, 1, 1, 16, 3, 3, '2023-12-11'),
(12345, 3, 15, 17, 2, 2, '2023-12-11'),
(12345, 1, 1, 18, 9, 9, '2023-12-14'),
(234, 4, 18, 19, 2, 2, '2023-12-12'),
(956, 1, 1, 20, 2, 2, '2023-12-15'),
(234, 1, 1, 21, 5, 5, '2023-12-11'),
(234, 1, 1, 22, 1, 1, '2023-12-12'),
(234, 2, 12, 23, 2, 2, '2023-12-13'),
(234, 1, 1, 24, 2, 2, '2023-12-12'),
(234, 1, 1, 25, 3, 3, '2023-12-12'),
(12345, 1, 1, 26, 4, 4, '2023-12-15'),
(12345, 2, 11, 27, 4, 4, '2023-12-15'),
(234, 1, 1, 28, 5, 5, '2023-12-12'),
(1111111, 1, 2, 29, 1, 1, '2023-12-23'),
(234, 1, 1, 30, 1, 1, '2023-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(1, 'Apa Itu Antrian Layanan Vokasi ', 'Layanan Antrian Vokasi adalah sistem yang dirancang untuk membantu mahasiswa dalam mengatur dan mengakses layanan kampus secara lebih efisien melalui sistem antrian online.'),
(2, 'Bagaimana Cara Menggunakan Layanan Antrian Mahasiswa', 'Anda dapat mendaftar dan membuat antrian melalui platform ini. Pilih layanan yang diinginkan, tentukan waktu kunjungan, dan ikuti langkah-langkah yang ditampilkan untuk mengonfirmasi pendaftaran.'),
(6, 'Apa manfaat menggunakan Layanan Antrian Mahasiswa?', 'Dengan menggunakan layanan ini, Anda dapat menghindari waktu tunggu yang panjang di tempat pelayanan kampus. Anda dapat merencanakan kunjungan Anda dengan lebih baik dan mengurangi waktu yang dihabiskan untuk antri.'),
(7, 'Apakah sistem ini aman?', 'Ya, kami memprioritaskan keamanan data. Informasi pribadi Anda akan disimpan dengan aman dan hanya digunakan untuk keperluan antrian.'),
(8, 'Apakah saya dapat mendaftarkan antrian untuk teman saya?', 'Saat ini, kami hanya memungkinkan setiap mahasiswa mendaftar antrian untuk dirinya sendiri. Setiap individu harus membuat akun sendiri untuk menggunakan layanan ini.'),
(9, 'Apakah ada biaya untuk menggunakan Layanan Antrian Mahasiswa?', 'Tidak, layanan ini disediakan secara gratis untuk semua mahasiswa. Tidak ada biaya yang terkait dengan pendaftaran atau penggunaan sistem antrian.'),
(10, 'Apakah saya dapat mendaftar antrian untuk layanan selain layanan akademik?', 'Ya, kami menyediakan opsi untuk mendaftar antrian untuk berbagai layanan, termasuk layanan akademik, keuangan, kemahasiswaan dan umum.'),
(11, 'Bagaimana cara memberikan kritik & saran?', 'Jika Anda memerlukan bantuan lebih lanjut atau memiliki Kritik & Saran , silahkan kirimkan kritik & saran anda melalui menu kritik & saran yang tertera di situs web kami.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `start_time`, `end_time`) VALUES
(1, '08:00:00', '08:20:00'),
(2, '08:20:00', '08:40:00'),
(3, '08:40:00', '09:00:00'),
(4, '09:00:00', '09:20:00'),
(5, '09:20:00', '09:40:00'),
(6, '09:40:00', '10:00:00'),
(7, '10:00:00', '10:20:00'),
(8, '10:20:00', '10:40:00'),
(9, '10:40:00', '11:00:00'),
(10, '11:00:00', '11:20:00'),
(11, '11:20:00', '11:40:00'),
(12, '11:40:00', '12:00:00'),
(13, '13:00:00', '13:20:00'),
(14, '13:20:00', '13:40:00'),
(15, '13:40:00', '14:00:00'),
(16, '14:00:00', '14:20:00'),
(17, '14:20:00', '14:40:00'),
(18, '14:40:00', '15:00:00'),
(19, '15:00:00', '15:20:00'),
(20, '15:20:00', '15:40:00'),
(21, '15:40:00', '16:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_layanan`
--

CREATE TABLE `jenis_layanan` (
  `id_jenis_layanan` int(10) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `id_sop` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_layanan`
--

INSERT INTO `jenis_layanan` (`id_jenis_layanan`, `id_layanan`, `jenis`, `id_sop`) VALUES
(1, 1, 'Daftar Ulang Mahasiswa Baru', 1),
(2, 1, 'Daftar Ulang Mahasiswa Lama', 2),
(3, 1, 'Pengajuan Cuti', 3),
(4, 1, 'Pengajuan Terminal', 4),
(5, 1, 'Pengajuan Pengunduran Diri', 5),
(6, 1, 'Pengajuan Surat Keterangan AKtif Kuliah', 6),
(7, 1, 'Pendaftaran Magang/MBKM', 7),
(8, 1, 'Pendaftaran Judul, Seminar Proposal, dan Sidang TA', 8),
(9, 1, 'Pendaftaran Yudisium', 9),
(10, 1, 'Pendaftaran Wisuda', 10),
(11, 2, 'Pengajuan Beasiswa', 11),
(12, 2, 'Pengajuan Kegiatan Kemahasiswaan', 12),
(13, 2, 'Pengajuan Reward Prestasi', 13),
(14, 2, 'Pengaduan Kekerasan Seksual dan Perundungan', 14),
(15, 3, 'Permohonan Bantuan UKT', 15),
(16, 3, 'Pengajuan Dana Kegiatan Bidang Kemahasiswaan Fakultas Vokasi', 16),
(17, 4, 'Peminjaman Sarana dan Prasarana', 17),
(18, 4, 'Permintaan Barang', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id_kritik` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kritiksaran`
--

INSERT INTO `kritiksaran` (`id_kritik`, `kritik`, `saran`) VALUES
(1, 'kritik', 'saran'),
(2, 'kritik', 'saran'),
(3, 'kritik 3', 'saran 3'),
(4, 'kritik ini panjang sekali agar sebagai contoh untuk melihat apakah fungsi dari sistem nya sudah benar apa belum', 'saran'),
(5, 'fnawfnwrf', 'rwgr3'),
(6, 'tes5', 'tes5'),
(7, 'apa', 'style'),
(9, 'test revisi', 'revisi'),
(10, 'aaa', 'aaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(10) NOT NULL,
  `layanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `layanan`) VALUES
(1, 'Akademik'),
(2, 'Kemahasiswaan'),
(3, 'Keuangan'),
(4, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nim` int(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `email`, `nim`, `level`, `password`) VALUES
('Gigih Lumintang', 'gigihlumintang@gmail.com', 234, 'level', '202cb962ac59075b964b07152d234b70'),
('gigih', 'gigihlumintang123@gmail.com', 452, 'user', '202cb962ac59075b964b07152d234b70'),
('abdul dudul', 'abdul@gmail', 785, 'user', '202cb962ac59075b964b07152d234b70'),
('tambah', 'test@gmail', 956, 'user', '202cb962ac59075b964b07152d234b70'),
('Gigih Lumintang', 'gigihlumintang@gmail.com', 5654, 'user', 'b7b45a023b74f8cbc40bc7120a8475a1'),
('testing', 'test@gmail', 9874, 'user', '202cb962ac59075b964b07152d234b70'),
('ahmad kasim dul kasim', 'kasim@gmail.com', 12345, 'level', '202cb962ac59075b964b07152d234b70'),
('abdul', 'user1@gmail.com', 1111111, 'user', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sop`
--

CREATE TABLE `sop` (
  `id_sop` int(10) NOT NULL,
  `namasop` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sop`
--

INSERT INTO `sop` (`id_sop`, `namasop`, `deskripsi`, `link`) VALUES
(1, 'Daftar Ulang Mahasiswa Baru', 'Layanan ini merupakan proses untuk daftar ulang bagi mahasiswa baru. Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :  123', 'https://drive.google.com/file/d/1ILIilMF91tzWQc4M8vtvgVuxEnA6ZqXq/view'),
(2, 'Daftar Ulang Mahasiswa Lama', 'Layanan ini merupakan proses untuk daftar ulang bagi mahasiswa lama. Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1Y7mEwE1hHYIH6ZZXBlall2rJFkrUTXnm/view'),
(3, 'Pengajuan Cuti', 'Layanan ini merupakan proses untuk pengajuan cuti bagi mahasiswa. Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1u7zTSQuHJ4DQrIH9ofv5NnBqs-NrKjTI/view'),
(4, 'Pengajuan Terminal', 'Layanan ini merupakan proses untuk pengajuan terminal bagi mahasiswa. Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1FcNWpIYjA4nh7hn8U0JJyiLmq9cirfpc/view'),
(5, 'Pengajuan Pengunduran Diri', 'Layanan ini merupakan proses untuk pengajuan pengunduran diri bagi mahasiswa. Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1mJ65RKC4F4mzuiNjvLr0zOPxeDlUCTJ0/view'),
(6, 'Pengajuan Surat Keterangan Aktif Kuliah', 'Layanan ini merupakan proses untuk pengajuan surat keterangan aktif kuliah bagi mahasiswa. Pengajuan surat keterangan aktif kuliah dilakukan melalui aplikasi SIVOKA Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut ', 'https://drive.google.com/file/d/1ddvUOlp501vZ1WfV-O6nXT4JZ4d5o5nF/view'),
(7, 'Pendaftaran Magang/MBKM', 'Layanan ini merupakan proses untuk pendaftaran magang/MBKM bagi mahasiswa. Pendaftaran magang/MBKM dilakukan melalui aplikasi SIVOKA Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1NAwbG59i3xemTDcfzmOEftHNpxu64Ymb/view'),
(8, 'Pendaftaran Judul, Seminar Proposal, dan Sidang TA', 'Untuk seluruh mahasiswa D3 maupun D4 Fakultas Vokasi, pendaftaran judul TA, Seminar Proposal (Khusus D4) serta sidang TA dapat melalui aplikasi SIVOKA. \r\n\r\nBeberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://sco.ub.ac.id/sivoka'),
(9, 'Pendaftaran Yudisium', 'Layanan ini merupakan proses untuk pendaftaran yudisium bagi mahasiswa. Pendaftaran yudisium  dilakukan melalui link google form. Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1fOmDlcA20R2CvYGpy7hH3z6HHXjYltOC/view'),
(10, 'Pendaftaran Wisuda', 'Layanan ini merupakan proses untuk pendaftaran wisuda bagi mahasiswa. Pendaftaran wisuda dilakukan melalui aplikasi SIUDA yang dapat diakses melalui aplikasi SIAM. Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1U3hRoLg2Xv8cOwg2PfVZxnBgMKcGVfMJ/view'),
(11, 'Pengajuan Beasiswa', 'Layanan ini merupakan proses untuk pengajuan beasiswa bagi mahasiswa. Pengajuan  dilakukan langsung ke Bagian Kemahasiswaan (Kantor Pusat Veteran Lantai 1). Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/15g31XoAwvBtkZYWj1lsKRvi6rc_5IpWl/view'),
(12, 'Pengajuan Kegiatan Kemahasiswaan', 'Layanan ini merupakan proses untuk pengajuan kegiatan bagi mahasiswa. Pengajuan  dilakukan langsung ke Bagian Kemahasiswaan (Kantor Pusat Veteran Lantai 1). Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1gg12x-EolPgSq-24YwJ-QrUqB5DjYJ7M/view'),
(13, 'Pengajuan Reward Prestasi', 'Layanan ini merupakan proses untuk pengajuan reward prestasi bagi mahasiswa. Pengajuan  dilakukan langsung ke Bagian Kemahasiswaan (Kantor Pusat Veteran Lantai 1). Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1f6hMyal25JH8XoCUZRCWfvKOLFdvvvMi/view'),
(14, 'Pengaduan Kekerasan Seksual dan Perundungan', 'Jika anda mengetahui dan atau menjadi korban kekerasan seksual dan atau perundungan dapat membuat laporan pada link tautan berikut (Link pengaduan) untuk mendapatkan penanganan dan pendampingan. Alur pengaduan dapat dilihat pada tautan berikut (Link Alur ', 'https://docs.google.com/forms/d/e/1FAIpQLSevVr-bUPwTcfh-qCVqYSbpWDB8p0e9jCdYKyLfZneL67RY7w/viewform'),
(15, 'Permohonan Bantuan UKT', 'Layanan ini merupakan proses untuk permohonan  bantuan UKT bagi mahasiswa. Permohonan dapat dilakukan melalui aplikasi SIBAKU. Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1jw9hT1isj_9QVd_EnNszDoXB-rsZqrPy/view'),
(16, 'Pengajuan Dana Kegiatan Bidang Kemahasiswaan Fakultas Vokasi', 'Layanan ini merupakan proses untuk pengajuan dana kegiatan bagi mahasiswa.  Beberapa dokumen dan tautan sistem informasi penunjang layanan ini adalah sebagai berikut :', 'https://drive.google.com/file/d/1pXCBcO5FlSLLr2dDD0E39RU2MaoHzFia/view'),
(17, 'Peminjaman sarana dan prasarana', 'Layanan ini merupakan proses untuk peminjaman sarana dan prasarana yang dimiliki Fakultas Vokasi. Proses peminjaman langsung dilakukan ke Bagian Umum Fakultas Vokasi (Kantor Pusat Veteran Lantai 5) dengan menyerahkan formulir yang sudah di isi. Beberapa d', 'https://drive.google.com/file/d/1mPiuBhgXsc2YRoUaY5JE7wxFLNO_QS90/view'),
(18, 'Permintaan Barang', 'Layanan ini merupakan proses untuk permintaan barang. Proses permintaan barang dilakukan ke Bagian Umum Fakultas Vokasi (Kantor Pusat Veteran Lantai 5) dengan menyerahkan formulir yang sudah di isi. Beberapa dokumen dan tautan sistem informasi penunjang l', 'https://drive.google.com/file/d/11X41S-u0YjVQV4tlO-5zH8JUcqmr5qeG/view');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`id_pengguna`),
  ADD KEY `layanan` (`layanan`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  ADD PRIMARY KEY (`id_jenis_layanan`),
  ADD KEY `id_sop` (`id_sop`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- Indeks untuk tabel `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id_sop`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  MODIFY `id_jenis_layanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sop`
--
ALTER TABLE `sop`
  MODIFY `id_sop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `antrian_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`nim`),
  ADD CONSTRAINT `antrian_ibfk_2` FOREIGN KEY (`layanan`) REFERENCES `layanan` (`id_layanan`),
  ADD CONSTRAINT `antrian_ibfk_3` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `antrian_ibfk_4` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_layanan` (`id_jenis_layanan`);

--
-- Ketidakleluasaan untuk tabel `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  ADD CONSTRAINT `jenis_layanan_ibfk_1` FOREIGN KEY (`id_sop`) REFERENCES `sop` (`id_sop`),
  ADD CONSTRAINT `jenis_layanan_ibfk_2` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
