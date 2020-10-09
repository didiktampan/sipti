-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2019 pada 04.25
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendakian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL DEFAULT 0,
  `penulis` varchar(250) DEFAULT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `ket_singkat` text DEFAULT NULL,
  `ket_singkat2` text DEFAULT NULL,
  `ket_lengkap` text DEFAULT NULL,
  `quotes` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_penulis`, `penulis`, `judul`, `tanggal`, `ket_singkat`, `ket_singkat2`, `ket_lengkap`, `quotes`, `gambar`) VALUES
(1, 1, 'Rariza Ragentta', 'Balita Ini Jadi Orang Termuda yang Mendaki 3 Gunung di Inggris.', '2010-08-27', 'Seorang balita, mendaki gunung pertamanya di usia dua minggu di punggung ayahnya, menjadi orang termuda yang pernah mendaki gunung tertinggi di Inggris.', '<p>Bocah tersebut bernama Jaxon Krzysik yang menerima tantangan tiga puncak gunung yang terkenal yaitu; Mount Snowdon, Scafell Pike, Ben Nevis. Ia melakukannya bersama sang ayah untuk mengumpulkan uang untuk temannya, Ralph Rowlands, yang meninggal dalam usia dua tahun setelah menderita kerusakan otak.</p><p>Dilansir dari The Telegraph, Selasa (9/7/2019), ayah si bocah bernama Cal Krzysik mengatakan, Jaxon berjalan sampai ke puncak tanpa bantuan. Tapi, dia harus menggendongnya kembali ke bawah.</p><p>\"Dia mencintai pegunungannya, dia mencintai bebatuan, dia suka memanjat di atas batu. Itu yang dia sukai,\" kata Krzysik kepada The Telegraph.</p><p>\"Aku tak akan berbohong, dia memang mengeluh. Ketika kami berada di Ben Nevis sekitar 10 menit, dia mulai lagi lalu berkata, \'Oh kakiku sakit, aku tidak bisa melakukannya,\" sambungnya.</p>', '<p>Namun, setelah itu ia kembali berjalan dan tak mengeluh lagi. Saat tiba di Ben Nevis, semua orang yang melewati mereka berteriak. \"Dan kemudian dia menoleh kepadaku dan berkata, \'lihat ayah, semua orang sangat bangga padaku\'.\"</p><p>Jaxon menyelesaikan 20 jam perjalanan, sejauh 23 mil dan total panjatan 10.052 kaki.</p><p>Teman baik Jaxon, Ralph, didiagnosis menderita celebral palsy pada usia 2 minggu setelah ibunya, Jade Smith mengalami kesulitan selama kelahiran. Ralph menderita kerusakan otak setelah kekurangan oksigen dan lumpuh total dan tak dapat berbicara. Sebelum Ralph meninggal, mereka seperti kacang polong yang sulit dipisahkan. Sejauh ini Jaxon telah mengumpulkan lebih dari 800 Pound sterling atau Rp14 juta untuk Cerebra, sebuah badan amal untuk anak-anak yang mengalami kerusakan otak.</p><p>Anak berusia tiga tahun yang luar biasa ini telah berjalan dan mendaki gunung bersama ayahnya sejak dia bisa berjalan. Krzysik mengatakan dia berharap untuk menyelesaikan Tantangan Tiga Puncak dengan putranya sebelum ulang tahunnya yang keempat pada Agustus 2019.</p>', '\"Dunia ini ibarat bayangan, jika kamu mengejarnya, kau tidak akan pernah mendapatkannya. Tetapi jika kau berpaling dan mengejar akhirat, maka dia tidak punya pilihan lain kecuali akan mengikutimu.\"', 'Bocah.jpg'),
(2, 2, 'Liputan6', 'Cerita Menegangkan Tim SAR Evakuasi 13 Pendaki di Gunung Raung.', '2019-10-20', 'Evakuasi itu berlangsung menegangkan karena dilakukan di tengah kondisi kebakaran yang masih berada di beberapa titik di jalur pendakian Gunung Raung,\" kata Koordinator Basarnas Pos SAR.', '<p>Ia menjelaskan, Search and Rescue Unit (SRU) 1 dan SRU 2 yang dikerahkan tim SAR gabungan dari Posko SAR gabungan di Pos Perizinan Kalibaru berhasil bertemu dengan 13 orang pendaki tersebut di pos pendakian 4 gunung dengan ketinggian 3.332 meter dari permukaan laut (mdpl) tersebut pada Sabtu pukul 02.36 WIB.</p><p>\"Kondisi 13 orang pendaki tersebut sangat kelelahan setelah berupaya turun di jalur pendakian Gunung Raung agar terhindar dari bahaya kebakaran,\" tuturnya seperti dilansir Antara.</p><p>\"Sekitar satu jam kemudian, tim SAR gabungan pun kembali mengerahkan satu SRU untuk membantu proses evakuasi 13 orang pendaki tersebut. SRU ketiga itu membawa tambahan makanan, minuman dan juga personel medis untuk memeriksa kondisi para pendaki,\" kata dia.</p>', '<p>Meskipun menghadapi sejumlah hambatan, seperti jalur pendakian yang ekstrem dan masih terdapat titik kebakaran, tim SAR gabungan yang di antaranya terdiri dari tim Pos SAR Jember, 851 Rescue, Serdadu Alam, BPBD Banyuwangi, SAR OPA Jember dan warga sekitar, sangat bersemangat dalam membantu evakuasi para pendaki.</p><p>\"Dalam proses evakuasi para pendaki tersebut, tim SAR gabungan didukung dengan sejumlah peralatan SAR, di antaranya peralatan vertical rescue, APD (Alat Pelindung Diri), peralatan navigasi, dan peralatan medis,\" katanya.</p><p>Setelah belasan pendaki tiba di basecamp pendakian, lalu dilakukan pemeriksaan kesehatan oleh Puskemas Kalibaru dengan hasil seluruh penyintas secara umum dalam keadaan sehat dan hanya mengalami luka ringan berupa lecet dan iritasi akibat asap.</p><p>Sebanyak 13 orang pendaki yang selamat dari kebakaran lahan di Gunung Raung yakni, Ng Hui-Lin (23/P) WNA Singapura, Kom Jun Wei (25/L) WNA Singapura, Shervon Ong (24/P) WNA Singapura, Teo Yi Xian (24/L) WNA Singapura, Pang Jia Hui (25/L) WNA Singapura, Beh Ing Tsyr (23/P) WNA Singapura, dan Chua Ying Jie (27/L) WNA Singapura.</p><p>Sedangkan pendaki lainnya asal Indonesia yakni, Widi (L) warga Kalibaru-Banyuwangi, Sam (L) warga warga Kalibaru-Banyuwangi, Sinyo Gimbal (L) warga Kalibaru-Banyuwangi, Putri (L) warga Kalibaru-Banyuwangi, Lutfi Sofian (23/L) mahasiswa asal Ajung-Jember, Felisianus Jeremy (35/L) warga Kecamatan Kelapa Gading-Jakarta Utara.</p>', '\"Terkadang apapun yang mudah untuk didapatkan akan mudah pula untuk dilepaskan. Dan apapun yang butuh perjuangan untuk mendapatkannya akan sulit untuk dilepaskan.\"', 'Sar.jpeg'),
(3, 3, 'Rizki Karianata', 'Mukjizat, 30 Pendaki Gunung Kerinci Dilaporkan Selamat dari Erupsi.', '2019-11-01', 'Petugas dari tim serbu Pos Penjagaan Pendakian Gunung Kerinci, Maryono, menyebut seluruh pendaki yang bertahan di Gunung Kerinci saat terjadi erupsi, Rabu (31/7/2019) siang, dilaporkan selamat.', '<p>\"Kami dibantu Polhut dan relawan bergerak ke atas untuk mengevakuasi di jalur pendakian, semua pendaki aman dan selamat, sekarang sedang turun ke pos,\" kata Maryono kepada Liputan6.com, Kamis sore (31/7/2019).</p><p>Saat terjadi letusan erupsi tersebut, para pendaki bertahan di ketinggian 2.700 meter dari permukaan laut (MDPL). Beruntung, para pendaki itu bertahan dari kolom abu vulkanik yang tidak mengarah ke arah selatan jalur pendakian.</p><p>\"Abu vulkanik mengarah ke arah timur dan tidak mengarah ke jalur pendakian, sehingga semua aman,\" kata dia.</P>', '<p>Selain itu, kondisi Gunung Kerinci saat puncaknya terjadi erupsi diselimuti kabut. Sehingga puncak di atas gunung tidak tampak dari pos penjagaan di R10, Desa Kersik Tuo, Kecamatan Kayu Aro, Kerinci.</p><p>Kepala Resort Pos Penjagaan Pendakian di R10 Evarizal Mirzal menyebutkan, terdapat 30 pendaki yang masih bertahan di Gunung Kerinci saat terjadi erupsi.</p><p>\"Informasi yang saya terima ada sekitar 30-an lebih pendaki yang bertahan di atas Gunung Kerinci saat terjadi erupsi itu,\" kata Evarizal.</p><p>Kepala Resort Pos Jaga Pendakian Gunung Kerinci di Kabupaten Kerinci, Evarizal Mirzal, mengatakan pihaknya mulai menutup sementara jalur pendakian di R10 Desa Kersik Tuo, Kayu Aro, Kerinci. Penutupan sementara pendakian tersebut dilakukan hingga kondisi normal kembali atau benar-benar aman.</p><p>\"Sekarang untuk pendakian juga kita setop untuk sementara hingga waktu yang belum ditentukan sesuai kondisi,\" katanya.</p>', '\"Semoga kita termasuk orang yang berhati-hati dalam menjaga hati dan tidak memberikan kepada seseorang yang tak bisa menghargai. Karena ketika diberi, dia takkan sepenuhnya kembali.\"', 'Kerinci.jpg'),
(4, 2, 'Liputan6', 'Miris, Ketika Pendaki Rampok Sesama Pendaki di Gunung Slamet.', '2019-05-11', 'Boyolali - Kejadian miris menimpa Lusiana Intan, remaja pendaki gunung berusia 17 tahun asal Ngawen, Klaten, Jawa Tengah meregang nyawa setelah menjadi korban pencurian disertai kekerasan.', '<p>Beruntung korban bisa meminta tolong kepada warga yang kemudian dilarikan ke RSUD Pandan Arang, Boyolali.</p><p>Kejadian bermula ketika keduanya bertemu untuk melakukan pendakian di Gunung Slamet, Kamis, 13 September 2018. Keduanya bertemu di base camp Komunitas Pendaki Gunung (KPG) Solo. Selanjutnya mereka berangkat dengan mengendarai sepeda motor milik korban bernomor polisi D 2522 IH.</p><p>\"Saat itu saya sudah merasa tidak enak, kenapa jalur yang dilalui berbeda. Tapi saya diam saja,\" urai Lusiana saat ditemui di RSUD Pandan Arang, Boyolali, Kamis, 20 September 2018.</p><p>Di sana, tersangka mencekik leher Lusiana dengan cukup keras hingga membekas warna biru. Tidak berhenti di situ, Bagas juga berusaha menusuk perut korban menggunakan pisau lipat tetapi tidak berhasil. Kemudian, ia mengalihkan sasaran ke tangan korban.</p><p>\"Saya mencoba membalas tetapi tidak berdaya. Saya langsung dicekik. Habis itu dipukul menggunakan tanah kering di persawahan,\" katanya.</p>', '<p>Korban sempat berusaha kabur, tetapi tersangka menyeret kakinya. Melihat korbannya tidak berdaya, tersangka langsung kabur membawa sepeda motor korban bersama perlengkapan gunung.</p><p>Korban yang tersadar langsung berusaha meminta pertolongan warga dan akhirnya dilarikan ke rumah sakit. Kejadian ini lantas dilaporkan kepada pihak kepolisian.</p><p>Setelah diselidiki, jajaran Polres Boyolali berhasil mengetahui identitas pelaku. Pelaku berhasil ditangkap di Desa Mertoyudan, Kabupaten Magelang.</p><p>\"Pelaku dijerat dengan pasal 365 KUHP yaitu pencurian dengan kekerasan. Saat ini, pelaku mendekam di sel tahanan Polres Boyolali,\" ucap Kapolsek Mojosongo AKP Joko Winarno.</p>', '\"Dalam hidup akan selalu ada yang tidak suka terhadap kita, ada 2 alasan mengapa seseorang tidak menyukai kita, kita menikmati hidup kita dan dia tidak menikmati hidupnya.\"', 'Rampok.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_berita`
--

CREATE TABLE `gambar_berita` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_berita`
--

INSERT INTO `gambar_berita` (`id_gambar`, `gambar`) VALUES
(1, 'Farrah1.jpeg'),
(2, 'Farrah2.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Sumatra'),
(2, 'Jawa'),
(3, 'Kalimantan'),
(4, 'Sulawesi'),
(5, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `id_user`, `nama`, `isi`, `tanggal`, `gambar`) VALUES
(1, 1, 4, 'Nina Aryi NW', 'Hallo', '2019-10-20', 'Gambar24.jpg'),
(2, 1, 3, 'Intan Puja Ningrum', 'Haii juga', '2019-10-23', 'Gambar17.jpg'),
(3, 2, 3, 'Intan Puja Ningrum', 'Selamat hari sumpah pemudaaaa\r\n', '2019-10-28', 'Gambar17.jpg'),
(4, 1, 2, 'Farrah Arisqa', 'Hello all', '2019-10-28', 'Gambar25.jpg'),
(5, 1, 6, 'Nikkita Angelina Wijaya', 'Selamat malam', '2019-10-28', 'Gambar26.jpg'),
(6, 2, 6, 'Nikkita Angelina Wijaya', 'Haiii', '2019-10-29', 'Gambar26.jpg'),
(7, 4, 3, 'Intan Puja Ningrum', 'Lebih baik aku jatuh cinta kepadamu dan patah hati berjuta-juta kali, daripada harus merasakan kekosongan hati selamanya.', '2019-08-17', 'Gambar17.jpg'),
(8, 4, 2, 'Farrah Arisqa', 'Jauh di lubuk hatiku, masih terukir namamu. Jauh di dasar jiwaku, engkau masih milikku.', '2019-09-12', 'Gambar25.jpg'),
(9, 4, 4, 'Nina Aryi NW', 'Meskipun akhirnya belum tentu bahagia, setidaknya kita pernah tertawa bersama.', '2019-10-27', 'Gambar24.jpg'),
(10, 4, 6, 'Nikkita Angelina Wijaya', 'Aku mencintaimu bukan hanya karena itu kamu, tapi juga karena diriku saat bersamamu.', '2019-10-30', 'Gambar26.jpg'),
(11, 4, 2, 'Farrah Arisqa', 'Selamat Malam', '2019-10-30', 'Gambar25.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(250) DEFAULT NULL,
  `pekerjaan` varchar(250) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `tentang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `pekerjaan`, `gambar`, `tentang`) VALUES
(1, 'Rariza Ragentta', 'CEO Aladin', 'Gambar14.jpg', 'Rariza Ragentta Adalah CEO Aladin, ia merupakan seorang teman dari pemilik perusahaan ini.'),
(2, 'Liputan6', '', 'Liputan6.jpg', NULL),
(3, 'Rizki Karianata', 'Pemilik Peonpegu', 'Gambar1.jpeg', 'Rizki Karianata adalah pemilik dari perusahaan ini yaitu Peonpegu. Jangan lupa ikuti di sosial media.'),
(4, 'Briliant Ronaldo', 'Preman Kasin', 'Gambar2.jpg', 'Briliant Ronaldo adalah teman seperjuangan dari pemilik perusahaan ini. Dia merupakan orang yang mampu merubah cara berpikir Rizki Karianata'),
(5, 'Imam Solihin', 'Owner Peonpegu', 'Gambar3.jpg', 'Imam Solihin adalah pemilik perusahaan buah - buah an di Kota Malang. Ia juga merupakan teman Rizki Karianata'),
(6, 'Dewa Caravelle', 'CEO Gojek', 'Gambar4.jpg', 'Dewa Caravelle merupakan sahabat dari pemilik perusahaan ini. Ia menjalani kehidupan bersama Rizki selama waktu SMP.'),
(7, 'Yulia Ayu', 'CEO Pencari Cinta ', 'Gambar5.jpg', 'Yulia Ayu merupakan mantan dari pemilik perusahaan ini yaitu Rizki Karianata.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sementara2`
--

CREATE TABLE `sementara2` (
  `id_sementara` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_hp` varchar(250) DEFAULT NULL,
  `nama_wisata` varchar(250) DEFAULT NULL,
  `harga` varchar(250) DEFAULT NULL,
  `jumlah_pesan` int(11) DEFAULT NULL,
  `tanggal_pesan` date DEFAULT NULL,
  `total_harga` varchar(250) DEFAULT NULL,
  `status` enum('1','2','3') DEFAULT '1',
  `id_wisata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sementara2`
--

INSERT INTO `sementara2` (`id_sementara`, `id_user`, `nama_lengkap`, `email`, `no_hp`, `nama_wisata`, `harga`, `jumlah_pesan`, `tanggal_pesan`, `total_harga`, `status`, `id_wisata`) VALUES
(6, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '62895395333224', 'Gunung Bawang', '96000', 5, '2019-10-25', '480000', '1', 4),
(7, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '62895395333224', 'Gunung Bawang', '96000', 5, '2019-10-25', '480000', '1', 4),
(8, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '62895395333224', 'Gunung Bawang', '96000', 4, '2019-10-25', '384000', '1', 4),
(9, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '0896172810381', 'Gunung Bawang', '96000', 6, '2019-10-25', '576000', '1', 4),
(10, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '089638633227', 'Gunung Bawang', '96000', 2, '2019-10-26', '192000', '1', 4),
(11, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Bawang', '96000', 5, '2019-10-26', '480000', '1', 4),
(12, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Bawang', '96000', 3, '2019-10-26', '288000', '1', 4),
(13, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Bawang', '96000', 2, '2019-10-26', '192000', '1', 4),
(14, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Bawang', '96000', 3, '2019-10-26', '288000', '1', 4),
(15, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Bawang', '96000', 5, '2019-10-26', '480000', '1', 4),
(16, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Halau - Halau', '77000', 5, '2019-10-26', '385000', '1', 3),
(17, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Halau - Halau', '77000', 5, '2019-10-27', '385000', '1', 3),
(18, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Halau - Halau', '77000', 6, '2019-10-27', '462000', '1', 3),
(19, 4, 'Nina Aryi NW', 'ninaanw@gmail.com', '089716451621', 'Gunung Niut', '85000', 4, '2019-10-28', '340000', '1', 2),
(20, 4, 'Nina Aryi NW', 'ninaanw@gmail.com', '089716451621', 'Gunung Niut', '85000', 7, '2019-10-28', '595000', '1', 2),
(21, 4, 'Nina Aryi NW', 'ninaanw@gmail.com', '089716451621', 'Gunung Palung', '90000', 8, '2019-10-28', '720000', '1', 1),
(22, 6, 'Nikkita Angelina Wijaya', 'nikiaangel556@gmail.com', '081703665373', 'Gunung Halau - Halau', '77000', 7, '2019-10-28', '539000', '1', 3),
(23, 6, 'Nikkita Angelina Wijaya', 'nikiaangel556@gmail.com', '081703665373', 'Gunung Halau - Halau', '77000', 3, '2019-10-29', '231000', '1', 3),
(24, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Bromo', '94000', 10, '2019-10-29', '940000', '1', 14),
(25, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Bromo', '94000', 12, '2019-10-30', '1128000', '1', 14),
(26, 2, 'Farrah Arisqa', 'farrah12@gmail.com', '08965728123194', 'Gunung Bromo', '94000', 12, '2019-10-30', '1128000', '1', 14),
(27, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Puncak Jaya', '200000', 3, '2019-11-03', '600000', '1', 17),
(28, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Halau - Halau', '77000', 3, '2019-11-04', '231000', '1', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(250) DEFAULT NULL,
  `pekerjaan` varchar(250) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_user`, `id_wisata`, `nama_lengkap`, `pekerjaan`, `created`, `isi`) VALUES
(1, 1, 4, 'Rizki Karianata', 'Pemilik Peonpegu', '2019-10-24', 'Selamat datang di website Peonpegu. Saya selaku pemilik perusahaan ini sangat bangga bisa membantu mempermudahkan permasalahan Bapak / Ibu Semuanya.'),
(2, 2, 4, 'Farrah Arisqa', 'CEO Gudang Logistik', '2019-10-24', 'Terimakasih saya ucapkan kepada pihak Peonpegu karena dapat memudahkan saya untuk memesan pendakian gunung secara online'),
(3, 3, 4, 'Intan Puja', 'Owner Kedai Mie Setan', '2019-10-24', 'Saya sangat berterimakasih banyak kepada Peonpegu. Karena saya dapat mendaki gunung dengan mudah. Terimakasih Peonpegu.com'),
(4, 4, 4, 'Nina Aryi', 'CEO Mie Ayam Gober', '2019-10-24', 'Terimakasih saya ucapkan kepada pihak Peonpego karena telah menyediakan website yang penuh manfaat ini. Semoga tetap lancar dan sukses selalu.'),
(15, 3, 1, 'Intan Puja Ningrum', 'CEO Mie Ayam Gober', '2019-10-27', 'Hello Percobaan tok wkwkw'),
(16, 3, 1, 'Intan Puja Ningrum', 'CEO Facebook', '2019-10-27', 'Percobaan Kedua'),
(17, 6, 3, 'Nikkita Angelina Wijaya', 'Pemilik Kosmetik', '2019-10-28', 'Perkenalkan nama saya Nikita. Saya sangat bangga memiliki kakak kelas yang bisa membuat aplikasi berbasis web ini.'),
(18, 2, 14, 'Farrah Arisqa', 'CEO Logistik', '2019-10-30', 'Selamat Malam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_hp` varchar(250) DEFAULT NULL,
  `nama_wisata` varchar(250) DEFAULT NULL,
  `harga` varchar(250) DEFAULT NULL,
  `jumlah_pesan` int(11) DEFAULT NULL,
  `tanggal_pesan` date DEFAULT NULL,
  `total_harga` varchar(250) DEFAULT NULL,
  `status` enum('1','2','3') DEFAULT '1',
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_wisata`, `nama_lengkap`, `email`, `no_hp`, `nama_wisata`, `harga`, `jumlah_pesan`, `tanggal_pesan`, `total_harga`, `status`, `id_user`) VALUES
(24, 4, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '62895395333224', 'Gunung Bawang', '96000', 5, '2019-10-25', '480000', '1', 3),
(30, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Halau - Halau', '77000', 5, '2019-10-26', '385000', '2', 3),
(31, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Halau - Halau', '77000', 5, '2019-10-27', '385000', '1', 3),
(32, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Halau - Halau', '77000', 6, '2019-10-27', '462000', '1', 3),
(33, 2, 'Nina Aryi NW', 'ninaanw@gmail.com', '089716451621', 'Gunung Niut', '85000', 4, '2019-10-28', '340000', '1', 4),
(39, 1, 'Nina Aryi NW', 'ninaanw@gmail.com', '089716451621', 'Gunung Palung', '90000', 8, '2019-10-28', '720000', '1', 4),
(40, 3, 'Nikkita Angelina Wijaya', 'nikiaangel556@gmail.com', '081703665373', 'Gunung Halau - Halau', '77000', 7, '2019-10-28', '539000', '1', 6),
(41, 3, 'Nikkita Angelina Wijaya', 'nikiaangel556@gmail.com', '081703665373', 'Gunung Halau - Halau', '77000', 3, '2019-10-29', '231000', '1', 6),
(42, 14, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Bromo', '94000', 10, '2019-10-29', '940000', '1', 3),
(43, 14, 'Farrah Arisqa', 'farrah12@gmail.com', '08965728123194', 'Gunung Bromo', '94000', 12, '2019-10-30', '1128000', '1', 2),
(44, 17, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Puncak Jaya', '200000', 3, '2019-11-03', '600000', '1', 3),
(45, 3, 'Intan Puja Ningrum', 'intanpuja11@gmail.com', '081265456162', 'Gunung Halau - Halau', '77000', 3, '2019-11-04', '231000', '1', 3);

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `TG_STOK` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
	UPDATE wisata SET stok=stok-NEW.jumlah_pesan
	WHERE id_wisata=NEW.id_wisata;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nama_lengkap` varchar(250) DEFAULT NULL,
  `level` enum('admin','user') DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`, `email`, `no_hp`, `gambar`) VALUES
(1, 'RizkiKarianata', 'NIFA11102', 'Rizki Karianata', 'admin', 'natarizky884@gmail.com', '0895395333224', 'Gambar1.jpeg'),
(2, 'FarrahArisqa', 'Rizki123', 'Farrah Arisqa', 'user', 'farrah12@gmail.com', '08965728123194', 'Gambar25.jpg'),
(3, 'Intanpuja', 'Rizkinata123', 'Intan Puja Ningrum', 'user', 'intanpuja11@gmail.com', '081265456162', 'Gambar17.jpg'),
(4, 'Ninaanw', 'rizki123', 'Nina Aryi NW', 'user', 'ninaanw@gmail.com', '089716451621', 'Gambar24.jpg'),
(5, 'aziizah12', 'rizki123', 'Aziizah Bashir', 'user', 'aziizahbashir@gmail.com', '089716456172', NULL),
(6, 'Nikkiangelw', 'nikita12', 'Nikkita Angelina Wijaya', 'user', 'nikiaangel556@gmail.com', '081703665373', 'Gambar26.jpg'),
(10, 'Rangga98', 'rangga12', 'Rangga Wijaya', 'user', 'rangga12@gmail.com', '089765615245', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `provinsi` varchar(250) DEFAULT NULL,
  `nama_wisata` varchar(250) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ket_singkat` text DEFAULT NULL,
  `ket_lengkap` text DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_kategori`, `provinsi`, `nama_wisata`, `alamat`, `ket_singkat`, `ket_lengkap`, `gambar`, `harga`, `stok`) VALUES
(1, 3, 'Kalimantan Barat', 'Gunung Palung', 'Padu Banjar, Kec. Simpang Hilir, Kabupaten Ketapang, Kalimantan Barat 78857', 'Taman Nasional Gunung Palung adalah taman nasional yang terletak di Kabupaten Kayong Utara dan Kabupaten Ketapang, Kalimantan Barat.', 'Kawasan hutan ini mula-mula dilindungi pada tahun 1937 sebagai hutan cagar alam dengan luas 300 km².[1] Pada tahun 1981, luasnya jauh meningkat menjadi 900 km² dan mengalami kenaikan status menjadi suaka margasatwa, dan barulah pada tanggal 24 Maret 1990[1] berdasarkan Keputusan Menteri Kehutanan Nomor 448/Menhut-VI/1990 dengan luas ± 90.000 ha menjadi taman nasional. Kemudian taman nasional ini mengalami perluasan hingga 108.043,90 hektar, berdasarkan SK no. 4191/Menhut-VII/KUH/2014 tanggal 10 Juni 2014.[2] Taman nasion ini terbentang di Kecamatan Matan Hilir Utara, Sukadana, Simpang Hilir, Nanga Tayap, dan Sandai.', 'Gunung6.jpg', 90000, 37),
(2, 3, 'Kalimantan Barat', 'Gunung Niut', 'Kabupaten Landak, Kalimantan Barat, Indonesia', 'Gunung Niut adalah sebuah gunung yang terletak di Kabupaten Landak, Provinsi Kalimantan Barat, Indonesia. Gunung ini adalah gunung tertinggi di Provinsi Kalimantan Barat dengan ketinggian mencapai 1.701 meter diatas permukaan air laut.', 'Gunung Niut adalah sebuah gunung yang terletak di Kabupaten Landak, Provinsi Kalimantan Barat, Indonesia. Gunung ini adalah gunung tertinggi di Provinsi Kalimantan Barat dengan ketinggian mencapai 1.701 meter diatas permukaan air laut. Gunung Niut berada di bagian barat dari Pegununagn Kapuas Hilir. Beberapa puncak disekitarnya antara lain Puncak Setawi, dan Puncak Keliung. Sementara Gunung Disekitarnya diantaranya Gunung Anggah, Gunung Semedun, Gunung Panggah, Gunung Sinjang, Gunung Sekaju, Gunung Sebabak, Gunung Bengkarun, Gunung Damus, dan Gunung Seraang.', 'Gunung7.jpg', 85000, 30),
(3, 3, 'Kalimantan Selatan', 'Gunung Halau - Halau', 'Kalimantan Selatan, Indonesia', 'Gunung Halau-halau atau Gunung Besar adalah gunung yang terletak di perbatasan tiga kabupaten, yaitu Kabupaten Hulu Sungai Tengah, Kabupaten Hulu Sungai Selatan dan Kabupaten Tanah Bumbu di Provinsi Kalimantan Selatan.', 'DeskripsiGunung Halau-halau atau Gunung Besar adalah gunung yang terletak di perbatasan tiga kabupaten, yaitu Kabupaten Hulu Sungai Tengah, Kabupaten Hulu Sungai Selatan dan Kabupaten Tanah Bumbu di Provinsi Kalimantan Selatan.', 'Gunung8.jpg', 77000, 14),
(4, 3, 'Kalimantan Barat', 'Gunung Bawang', 'Desa Suka Bangun, Kalimantan Barat, Indonesia', 'Gunung Bawang merupakan sebuah gunung yang terdapat di Provinsi Kalimantan Barat, Indonesia. Gunung ini mempunyai bentuk menyerupai pegunungan ', '<p>Gunung Bawang merupakan sebuah gunung yang terdapat di Provinsi Kalimantan Barat, Indonesia. Gunung ini mempunyai bentuk menyerupai pegunungan karena memanjang sekira 18 Km mencangkup 4 kecamatan di Kabupaten Bengkayang. Gunung Bawang memiliki empat puncak runcing yang memiliki ketinggian lebih dari 1.000 Mdpl.</p><p>Dinamakan Gunung Bawang dikarenakan bentuknya berlapis hingga 7 lapis seperti bawang. Gunung Bawang memiliki cerita yang berkaitan erat dengan Suku Dayak Bengkayang, Suku Dayak Kanayatn dan Suku Dayak Lara. Gunung ini merupakan daerah yang dikeramatkan bagi Suku Dayak Bengkayan. Karena mitosnya dari tempat tersebut asal mula Suku Dayak Bengkayan. Kisah bermula dari Jubata (yang didewa-kan/di-agungkan bagi suku dayak) yang turun ke dunia dan menempati Gunung Bawang. Nama-nama Jubata yang menghuni gunung ini yakni Jubata Lupo, Jubata Barabatn Ampor, Jubata Siru dan Jubata Sulujatn Maniamas dll. Berjalan dari waktu-ke-waktu hingga jadilah Gunung Bawang sebagai tempat yang terhormat bagi para suku dayak tersebut.</p><p>Gunung Bawang adalah gunung yang terletak di Kabupaten Bengkayang, Kalimantan Barat. Wilayah pegunungan nya mencakup mencangkup 4 kecamatan yaitu Kecamatan Lembah Bawang, Kecamatan Lumar, Kecamatan Sungai Betung dan Kecamatan Bengkayang. Sementara puncak Gunung Bawang berada di perbatasan Desa Tiga Berkat, Kecamatan Lumar dengan Desa Saka Taru, Kecamatan Lembah Bawang. Gunung Bawang berjarak 184 Km berkendara dari Pontianak. Rute yang ditempuh adalah Pontianak-Bengkayang-Suka Bangun.</p><p>Gunung Bawang merupakan salah satu gunung favorite bagi pendaki di Kalimantan. Waktu tempuh pendakian untuk mencapai puncak yang cukup singkat yaitu sekitar 7-8 jam. Terdapat tiga jalur pendakian menuju puncak Gunung Bawang, namun jalur termudah dan umum digunakan yaitu melalui Desa Suka Bangun, Kecamatan Sungai Betung, Kabupaten Bengkayang.</p><p>Fauna khas di Gunung Bawang diantaranya Rusa, Orang utan, Beruang madu, Macan dahan (Borneo Leopard), Burung RuaiBurung Enggang Gading, berbagai jenis kupu-kupu dan serangga, sedangkan flora khasnya adalah Kantong Semar dan Anggrek bulananggrek ekor tikus, anggrek lurikSungai yang berhulu di Gunung Bawang diantaranya adalah Sungai Raya yang bermuara di Selakau, Sungai Plagoi dan Sungai Batu Timah, Sungai Banan.</p>', 'Gunung9.jpg', 96000, 34),
(5, 1, 'Sumatra Barat', 'Gunung Merapi', 'Sumatra Barat, Indonesia', 'Gunung Marapi (juga dikenal sebagai Merapi atau Berapi) adalah gunung berapi yang terletak di Sumatra Barat, Indonesia. Gunung ini tergolong gunung yang paling aktif di Sumatra. Terletak dalam kawasan administrasi Kabupaten Agam. Gunung ini dapat juga dilihat dari kota Bukittinggi, kota Padangpanjang dan kabupaten Tanah Datar dan memiliki ketinggian 2.891 m. Gunung Marapi sudah meletus lebih dari 50 kali sejak akhir abad 18.', '<p>Pada tanggal 8 September 1830 dilaporkan Gunung Marapi mengeluarkan awan yang berbentuk kembang kol abu-abu kehitaman dengan ketebalan 1.500 m di atas kawahnya, disertai dengan suara gemuruh.</p><p>Pada tanggal 30 April 1979, menurut laporan pers disebutkan 60 orang tewas akibat letusan Gunung Marapi dan disebutkan juga 19 orang pekerja penyelamat terperangkap oleh tanah longsor. Letusan tersebut dikatakan juga mengeluarkan batu dan lumpur yang menyebabkan kerusakan sedikitnya pada lima daerah kawasan pemukiman penduduk setempat.</p><p>Memasuki akhir tahun 2011 hingga awal tahun 2014, Gunung Marapi menampakkan peningkatan aktivitasnya melalui letusan yang menyemburkan abu dan awan hitam. Pernah diakhir tahun 2011 semburan abu terbawa angin berkilo-kilo jaraknya hingga mencapai Kabupaten Padang Pariaman.</p><p>Tanggal 26 Februari 2014, Gunung Marapi meletus pada pukul 16.15 WIB, melepaskan material pasir, tefra, dan abu vulkanik ke wilayah Kabupaten Tanah Datar dan Agam. Status gunung ditetapkan Siaga (level 2) dan radius 3 km dari pusat kawah harus dikosongkan. Tidak ada evakuasi pada letusan ini.</p>', 'Gunung1.jpg', 100000, 41),
(6, 1, 'Sumatra Utara', 'Gunung Sinabung', 'Sumatra Utara, Indonesia', 'Gunung Sinabung adalah gunung api di Dataran Tinggi Karo, Kabupaten Karo, Sumatra Utara, Indonesia. Sinabung bersama Gunung Sibayak di dekatnya adalah dua gunung berapi aktif di Sumatra Utara dan menjadi puncak tertinggi ke 2 di provinsi itu. Ketinggian gunung ini adalah 2.451 meter.', '<p>Pada 27 Agustus 2010, gunung ini mengeluarkan asap dan abu vulkanis.Pada tanggal 29 Agustus 2010 dini hari sekitar pukul 00.15 WIB (28 Agustus 2010, 17.15 UTC), gunung Sinabung mengeluarkan lava. Status gunung ini dinaikkan menjadi Awas. Dua belas ribu warga disekitarnya dievakuasi dan ditampung di 8 lokasi. Abu Gunung Sinabung cenderung meluncur dari arah barat daya menuju timur laut.[9] Sebagian Kota Medan juga terselimuti abu dari Gunung Sinabung. Bandar Udara Polonia di Kota Medan dilaporkan tidak mengalami gangguan perjalanan udara. Satu orang dilaporkan meninggal dunia karena gangguan pernapasan ketika mengungsi dari rumahnya.</p><p>Pada tanggal 3 September, terjadi 2 letusan. Letusan pertama terjadi sekitar pukul 04.45 WIB sedangkan letusan kedua terjadi sekitar pukul 18.00 WIB. Letusan pertama menyemburkan debu vuklkanis setinggi 3 kilometer.</p><p>Letuasn kedua terjadi bersamaan dengan gempa bumi vulkanis yang dapat terasa hingga 25 kilometer di sekitar gunung ini.</p><p>Pada tanggal 7 September, Gunung Sinabung kembali metelus. Ini merupakan letusan terbesar sejak gunung ini menjadi aktif pada tanggal 29 Agustus 2010. Suara letusan ini terdengar sampai jarak 8 kilometer. Debu vulkanis ini tersembur hingga 5.000 meter di udara.</p>', 'Gunung2.jpg', 93000, 30),
(7, 1, 'Sumatra Barat', 'Gunung Kerinci', 'Sumatra Barat, Indonesia', 'Gunung Kerinci adalah gunung tertinggi di Sumatra, gunung berapi tertinggi di Indonesia, dan puncak tertinggi di Indonesia di luar Papua. Gunung Kerinci terletak di Provinsi Jambi, di Pegunungan Bukit Barisan, dekat pantai barat, dan terletak sekitar 130 km sebelah selatan Padang Provinsi Sumatra Barat.', '<p>Puncak Gunung Kerinci berada pada ketinggian 3.805 mdpl, di Kabupaten Kerinci, Provinsi Jambi, di sini pengunjung dapat melihat di kejauhan membentang pemandangan indah Kota Jambi, Padang, dan Bengkulu. Bahkan Samudera Hindia yang luas dapat terlihat dengan jelas. Gunung Kerinci memiliki kawah seluas 400 x 120 meter dan berisi air yang berwarna hijau. Di sebelah timur terdapat danau Bento, rawa berair jernih tertinggi di Sumatra. Di belakangnya terdapat gunung tujuh dengan kawah yang sangat indah yang hampir tak tersentuh.</p><p>Gunung Kerinci berbentuk kerucut dengan lebar 13 km (8 mil) dan panjang 25 km (16 mil), memanjang dari utara ke selatan. Pada puncaknya di sisi timur laut terdapat kawah sedalam 600 meter (1.969 kaki) berisi air berwarna hijau. Hingga sekarang, kawah yang berukuran 400 x 120 meter ini masih berstatus aktif.</p><p>Gunung Kerinci termasuk dalam bagian dari Taman Nasional Kerinci Seblat (TNKS). TNKS adalah sebuah wilayah konservasi yang memiliki luas 1.484.650 hektare dan terletak di wilayah empat provinsi, yang mana sebagian besarnya berada di wilayah Jambi. TNKS sendiri merupakan bagian dari Pegunungan Bukit Barisan yang memanjang dari utara ke selatan di Pulau Sumatra. Gunung Kerinci merupakan gunung tipe A aktif yang berada sekitar 130 kilometer arah Selatan Kota Padang. Tipe Letusan : Tipe Hawaii Bentuk Gunung : Gunung Strato atau Kerucut Tipe Erupsi : Erupsi Eksplosif Keaktifan Gunung : Tipe A</p><p>Tumbuhan dataran rendah didominasi oleh beberapa jenis mahoni, terdapat juga tumbuhan raksasa Bunga Raflesia Rafflesia Arnoldi dan Suweg Raksasa Amorphophallus Titanum. Pohon cemara juga tumbuh di Gunung Kerinci. Dengan Taman Nasional Leuser, taman ini terhalang oleh Danau Toba dan Ngarai Sianok. Sehingga beberapa binatang yang tidak terdapat di Taman Leuser ada di sini, seperti tapir (Tapirus indicus) dan kuskus (Tarsius bancanus).</p><p>Banyak terdapat binatang khas Sumatra seperti gajah, badak sumatera, harimau, beruang madu, macan tutul, kecuali orang utan. Berbagai primata seperti siamang, gibbon, monyet ekor panjang, dan Presbytis melapophos. Terdapat juga 140 jenis burung.</p>', 'Gunung3.jpg', 76000, 24),
(8, 2, 'Jawa Timur', 'Gunung Semeru', 'Pronojiwo Candipuro, Lumajang, Indonesia', 'Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut.', '<p>Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut (mdpl). Gunung Semeru juga merupakan gunung berapi tertinggi ketiga di Indonesia setelah Gunung Kerinci di Sumatra dan Gunung Rinjani di Nusa Tenggara Barat. Kawah di puncak Gunung Semeru dikenal dengan nama Jonggring Saloko. Gunung Semeru secara administratif termasuk dalam wilayah dua kabupaten, yakni Kabupaten Malang dan Kabupaten Lumajang, Provinsi Jawa Timur. Gunung ini termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru. </p><p>Pada tahun 1913 dan 1946 Kawah Jonggring Saloka memiliki kubah dengan ketinggian 3.744,8 m hingga akhir November 1973. Di sebelah selatan, kubah ini mendobrak tepi kawah menyebabkan aliran lava mengarah ke sisi selatan meliputi daerah Pronojiwo dan Candipuro di Lumajang. Diperlukan waktu sekitar empat hari untuk mendaki puncak gunung Semeru pergi-pulang. Untuk mendaki gunung dapat ditempuh lewat kota Malang atau Lumajang. Dari terminal Kota Malang naik angkutan umum menuju desa Tumpang. Disambung lagi dengan jeep atau truk/pickup yang banyak terdapat di belakang pasar terminal Tumpang dengan biaya per orang Rp60.000,00 - Rp100.000,0 hingga Pos Ranu Pani. Sebelumnya mampir di Gubugklakah untuk memperoleh surat izin, dengan perincian, biaya surat izin Rp6.000,00 untuk maksimal 10 orang, karcis masuk taman Rp2.000,00 per orang, asuransi per orang Rp2.000,00 (perkiraan biaya sudah termasuk transportasi jip atau truk sayuran).</p><p>Dengan menggunakan truk sayuran atau jip perjalanan dimulai dari Tumpang menuju Ranu Pani, desa terakhir di kaki Semeru. Adapun dari arah Lumajang dapat dijangkau dengan menggunakan kendaraan pribadi atau naik ojek di sekitar pasar Senduro menuju ke Pos Ranu Pani. Di sini terdapat pos pemeriksaan, terdapat juga warung dan pondok penginapan. Setiap orang yang ingin melakukan pendakian dikenakan biaya Rp17.500 per orang per hari untuk hari biasa, dan Rp22.500 per orang per hari untuk hari libur. Di pos ini pun dapat mencari portir (warga lokal untuk membantu menunjukkan arah pendakian, mengangkat barang dan memasak). Pendaki juga dapat bermalam di pos penjagaan. Di pos Ranu Pani juga terdapat dua buah danau yakni Ranu Pani (1 ha) dan Ranu Regulo (0,75 ha) yang terletak pada ketinggian 2.200 mdpl. Setelah sampai di gapura \"Selamat Datang\", perjalanan berlanjut terus ke kiri ke arah bukit, tetapi jangan mengikuti jalanan yang lebar ke arah kebun penduduk. Selain jalur yang biasa dilewati para pendaki, juga ada jalur pintas yang biasa dipakai para pendaki lokal, tetapi jalur ini sangat curam.</p><p>Jalur awal landai, menyusuri lereng bukit yang didominasi dengan tumbuhan alang-alang. Tidak ada tanda penunjuk arah jalan, tetapi terdapat tanda ukuran jarak pada setiap 100 m. Banyak terdapat pohon tumbang, dan ranting-ranting di atas kepala. Setelah berjalan sekitar 5 km menyusuri lereng bukit yang banyak ditumbuhi bunga edelweis, lalu akan sampai di Watu Rejeng. Di sini terdapat batu terjal yang sangat indah. Pemandangan sangat indah ke arah lembah dan bukit-bukit, yang ditumbuhi hutan cemara dan pinus. Kadangkala dapat menyaksikan kepulan asap dari puncak Semeru. Untuk menuju Ranu Kumbolo masih harus menempuh jarak sekitar 4,5 km. Di Ranu Kumbolo dapat didirikan tenda. Juga terdapat pondok pendaki (shelter). Terdapat danau dengan air yang bersih dan memiliki pemandangan indah terutama di pagi hari dapat menyaksikan matahari terbit disela-sela bukit. Banyak terdapat ikan, kadang burung belibis liar. Ranu Kumbolo berada pada ketinggian 2.400 m dengan luas 14 ha. Dari Ranu Kumbolo sebaiknya menyiapkan air sebanyak mungkin. Meninggalkan Ranu Kumbolo kemudian mendaki bukit terjal, dengan pemandangan yang sangat indah di belakang ke arah danau. Di depan bukit terbentang padang rumput yang luas yang dinamakan oro-oro ombo. Oro-oro ombo dikelilingi bukit dan gunung dengan pemandangan yang sangat indah, padang rumput luas dengan lereng yang ditumbuhi pohon pinus seperti di Eropa. Dari balik Gn. Kepolo tampak puncak Gn. Semeru menyemburkan asap wedus gembel.</p>', 'Gunung4.jpg', 140000, 76),
(9, 2, 'Jawa Tengah', 'Gunung Sumbing', 'Kabupaten Magelang, Jawa Tengah, Indonesia', 'Gunung Sumbing adalah gunung api yang terdapat di Jawa Tengah, Indonesia., gunung Sumbing merupakan gunung tertinggi ketiga di Pulau Jawa setelah Gunung Semeru dan Gunung Slamet. Gunung ini secara administratif terletak di tiga wilayah kabupaten, yaitu Kabupaten Magelang; Kabupaten Temanggung; dan Kabupaten Wonosobo.', '<p>Gunung Sumbing adalah gunung api yang terdapat di Jawa Tengah, Indonesia. (Ketinggian puncak 3.371 mdpl), gunung Sumbing merupakan gunung tertinggi ketiga di Pulau Jawa setelah Gunung Semeru dan Gunung Slamet. Gunung ini secara administratif terletak di tiga wilayah kabupaten, yaitu Kabupaten Magelang; Kabupaten Temanggung; dan Kabupaten Wonosobo. Bersama dengan Gunung Sindoro, Gunung Sumbing membentuk bentang alam gunung kembar, seperti Gunung Merapi dan Gunung Merbabu, apabila dilihat dari arah Temanggung. Celah antara gunung ini dan Gunung Sindoro dilalui oleh jalan provinsi yang menghubungkan kota Temanggung dan kota Wonosobo. Jalan ini biasa dijuluki sebagai \"Kledung Pass\". Letusan terakhir tercatat pada tahun 1730, yang membentuk kubah lava dengan aliran lava ke arah bibir kawah terendah.</p><p>Gunung Sumbing mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan Hutan Ericaceous atau hutan gunung. Sebagian besar wilayah lereng gunung ini telah digunakan untuk lahan pertanian.</p><p>Jalur pendakian Gunung Sumbing paling populer adalah melalui pos Garung. Garung adalah sebuah desa di kaki bagian utara Gunung Sumbing, di kawasan Kledung Pass. Dekat dengan Desa Garung tersebut juga terdapat basecamp untuk pendakian ke Gunung Sindoro. Selain itu juga terdapat jalur lain seperti Bowongso, Cepit, Lamuk, Banaran, Butuh Kaliangkrik, dan Mangli Kaliangkrik.</p><p>Letak Gunung Sumbing dan Gunung Sindoro saling berhadapan. Banyak disebut oleh masyarakat bahwa gunung Sumbing-Sindoro adalah gunung kembar layaknya gunung Merapi-Merbabu. Tinggi yang tidak jauh berbeda, dan juga kondisi alam gunung yang juga hampir sama. Namun bagi para pendaki Gunung Sumbing memiliki trek yang lebih berat daripada Gunung Sindoro dikarenakan gradien kemiringan yang terjal dan rute yang lebih panjang.</p>', 'Gunung14.jpg', 98000, 40),
(10, 2, 'Jawa Tengah', 'Gunung Slamet', 'Kabupate Brebes, Jawa Tengah, Indonesia', 'Gunung Slamet adalah sebuah gunung berapi kerucut yang terdapat di Pulau Jawa, Indonesia. Gunung Slamet terletak di antara 5 kabupaten, yaitu Kabupaten Brebes, Kabupaten Banyumas, Kabupaten Purbalingga, Kabupaten Tegal, dan Kabupaten Pemalang, Provinsi Jawa Tengah.', '<p>Gunung Slamet (3.428 meter dpl.) adalah sebuah gunung berapi kerucut yang terdapat di Pulau Jawa, Indonesia. Gunung Slamet terletak di antara 5 kabupaten, yaitu Kabupaten Brebes, Kabupaten Banyumas, Kabupaten Purbalingga, Kabupaten Tegal, dan Kabupaten Pemalang, Provinsi Jawa Tengah. Gunung Slamet merupakan gunung tertinggi di Jawa Tengah serta kedua tertinggi di Pulau Jawa setelah Gunung Semeru. Kawah IV merupakan kawah terakhir yang masih aktif sampai sekarang, dan terakhir aktif hingga pada level siaga medio-2009.</p><p>Sebagaimana gunung api lainnya di Pulau Jawa, Gunung Slamet terbentuk akibat subduksi Lempeng Indo-Australia pada Lempeng Eurasia di selatan Pulau Jawa. Retakan pada lempeng membuka jalur lava ke permukaan. Catatan letusan diketahui sejak abad ke-19. Gunung ini aktif dan sering mengalami erupsi skala kecil. Aktivitas terakhir adalah pada bulan Mei 2009 dan sampai Juni masih terus mengeluarkan lava pijar.[1] Sebelumnya ia tercatat meletus pada tahun 1999.</p><p>Maret 2014 Gunung Slamet menunjukkan aktifitas dan statusnya menjadi Waspada. Berdasarkan data PVMBG, aktivitas vukanik Gunung Slamet masih fluktuatif. Setelah sempat terjadi gempa letusan hingga 171 kali pada Jumat 14 Maret 2014 dari pukul 00.00-12.00 WIB, pada durasi waktu yang sama, tercatat sebanyak 57 kali gempa letusan. Tercatat pula 51 kali embusan. Pemantauan visual, embusan asap putih tebal masih keluar dari kawah gunung ke arah timur hingga setinggi 1 km.</p><p>Sejarawan Belanda, J. Noorduyn berteori bahwa nama \"Slamet\" adalah relatif baru, yaitu setelah masuknya Islam ke Jawa (kata itu merupakan pinjaman dari bahasa Arab). Ia mengemukakan pendapat bahwa yang disebut sebagai Gunung Agung dalam naskah berbahasa Sunda mengenai petualangan Bujangga Manik adalah Gunung Slamet, berdasarkan pemaparan lokasi yang disebutkan </p>', 'Gunung10.jpg', 70000, 24),
(11, 2, 'Jawa Tengah', 'Gunung Merbabu', 'Semarang, Boyolali, Magelang (Jawa Tengah), Indonesia', 'Gunung Merbabu adalah gunung api yang bertipe Strato yang terletak secara geografis pada 7,5° LS dan 110,4° BT.', '<p>Gunung Merbabu adalah gunung api yang bertipe Strato (lihat Gunung Berapi) yang terletak secara geografis pada 7,5° LS dan 110,4° BT. Secara administratif gunung ini berada di wilayah Kabupaten Magelang di lereng sebelah barat dan Kabupaten Boyolali di lereng sebelah timur dan selatan, Kabupaten Semarang di lereng sebelah utara, Provinsi Jawa Tengah.</p><p>Gunung Merbabu dikenal melalui naskah-naskah masa pra-Islam sebagai Gunung Damalung atau Gunung Pam(a)rihan. Di lerengnya pernah terdapat pertapaan terkenal dan pernah disinggahi oleh Bujangga Manik pada abad ke-15. Menurut etimologi, \"merbabu\" berasal dari gabungan kata \"meru\" (gunung) dan \"abu\" (abu). Nama ini baru muncul pada catatan-catatan Belanda.</p><p>Gunung ini pernah meletus pada tahun 1560 dan 1797. Dilaporkan juga pada tahun 1570 pernah meletus, akan tetapi belum dilakukan konfirmasi dan penelitian lebih lanjut. Puncak gunung Merbabu berada pada ketinggian 3.145 meter di atas permukaan air laut.</p><p>Gunung Merbabu mempunyai kawasan Hutan Dipterokarp Bukit, Hutan Dipterokarp Atas, Hutan Montane, dan hutan Ericaceous atau hutan gunung.</p>', 'Gunung11.jpg', 99000, 30),
(12, 2, 'Jawa Tengah', 'Gunung Lawu', 'Perbatasan Jawa Tengah & Jawa Timur', 'Gunung Lawu terletak di Pulau Jawa, Indonesia, tepatnya di perbatasan Provinsi Jawa Tengah dan Jawa Timur. Gunung Lawu terletak di antara tiga kabupaten yaitu Kabupaten Karanganyar, Jawa Tengah, Kabupaten Ngawi, dan Kabupaten Magetan, Jawa Timur. ', '<p>Gunung Lawu (Hanacaraka: ????????? ) (3.265 MDPL) terletak di Pulau Jawa, Indonesia, tepatnya di perbatasan Provinsi Jawa Tengah dan Jawa Timur. Gunung Lawu terletak di antara tiga kabupaten yaitu Kabupaten Karanganyar, Jawa Tengah, Kabupaten Ngawi, dan Kabupaten Magetan, Jawa Timur. Status gunung ini adalah gunung api \"istirahat\" (diperkirakan terahkir meletus pada tanggal 28 November 1885) dan telah lama tidak aktif, terlihat dari rapatnya vegetasi serta puncaknya yang tererosi. Di lerengnya terdapat kepundan kecil yang masih mengeluarkan uap air (fumarol) dan belerang (solfatara). Gunung Lawu mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan hutan Ericaceous. Gunung Lawu adalah sumber inspirasi dari nama kereta api Argo Lawu, kereta api eksekutif yang melayani Solo Balapan-Gambir.</p><p>Gunung Lawu memiliki tiga puncak, Puncak Hargo Dalem, Hargo Dumiling dan Hargo Dumilah. Yang terakhir ini adalah puncak tertinggi.</p><p>Di lereng gunung ini terdapat sejumlah tempat yang populer sebagai tujuan wisata, terutama di daerah Tawangmangu, Cemorosewu, dan Sarangan. Agak ke bawah, di sisi barat terdapat dua komplek percandian dari masa akhir Majapahit: Candi Sukuh dan Candi Cetho. Di kaki gunung ini juga terletak komplek pemakaman kerabat Praja Mangkunagaran: Astana Girilayu dan Astana Mangadeg. Di dekat komplek ini terletak Astana Giribangun, mausoleum untuk keluarga presiden kedua Indonesia, Soeharto.</p><p>Gunung Lawu sangat populer untuk kegiatan pendakian. Setiap malam 1 Sura banyak orang berziarah dengan mendaki hingga ke puncak. Karena populernya, di puncak gunung bahkan dapat dijumpai pedagang makanan.</p>', 'Gunung12.jpg', 121000, 40),
(13, 2, 'Jawa Timur', 'Gunung Arjuno', 'Pasuruan, Jawa Timur, Indonesia', 'Gunung Arjuno adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia dengan ketinggian 3.339 m dpl. Gunung Arjuno secara administratif terletak di perbatasan Kota Batu, Kabupaten Malang, dan Kabupaten Pasuruan dan berada di bawah pengelolaan Taman Hutan Raya Raden Soerjo.', '<p>Gunung Arjuno (terkadang dieja Gunung Arjuna) adalah sebuah gunung berapi kerucut (istirahat) di Jawa Timur, Indonesia dengan ketinggian 3.339 m dpl. Gunung Arjuno secara administratif terletak di perbatasan Kota Batu, Kabupaten Malang, dan Kabupaten Pasuruan dan berada di bawah pengelolaan Taman Hutan Raya Raden Soerjo. Gunung Arjuno merupakan gunung tertinggi kedua di Jawa Timur setelah Gunung Semeru, serta menjadi yang tertinggi keempat di Pulau Jawa. Biasanya gunung ini dicapai dari tiga titik pendakian yang cukup dikenal yaitu dari Lawang, Tretes dan Batu. Nama Arjuno berasal dari salah satu tokoh pewayangan Mahabharata, Arjuna.</p><p>Gunung Arjuno bersebelahan dengan Gunung Welirang, Gunung Kembar I, dan Gunung Kembar II. Puncak Gunung Arjuno terletak pada satu punggungan yang sama dengan puncak gunung Welirang, sehingga kompleks ini sering disebut juga dengan Arjuno-Welirang. Kompleks Arjuno-Welirang sendiri berada di dua gunung berapi yang lebih tua, Gunung Ringgit di timur dan Gunung Lincing di selatan. Area fumarol dengan cadangan belerang ditemukan di sejumlah lokasi pegunungan ini, seperti pada puncak Gunung Welirang, puncak Gunung Kembar II, dan pada sejumlah jalur pendakian.</p><p>Gunung Arjuno merupakan salah satu tujuan pendakian. Di samping tingginya yang telah mencapai lebih dari 3000 meter, di gunung ini terdapat beberapa objek wisata. Salah satunya adalah objek wisata air terjun Kakek Bodo yang juga merupakan salah satu jalur pendakian menuju puncak Gunung Arjuno. Meskipun selain objek wisata air terjun Kakek Bodo terdapat pula air terjun lain, tetapi para wisatawan jarang yang mendatangi air terjun lainnya, mungkin karena letak dan sarana wisatanya kurang mendukung. Di kawasan lerengnya juga terdapat mata air Sungai Brantas yang berasal dari simpanan air Gunung Arjuno. Mata air Sungai Brantas terletak di Desa Sumber Brantas, Bumiaji, Kota Batu yang merupakan sungai terpanjang kedua di Pulau Jawa setelah Bengawan Solo. Beberapa destinasi wisata yang terkenal hingga ke seluruh Indonesia maupun luar negeri juga terletak di lereng Gunung Arjuno, di antaranya adalah Tretes, Kota Wisata Batu, dan Taman Safari Indonesia 2.</p><p>Gunung Arjuno dapat didaki dan berbagai arah, arah Utara (Tretes) melalui Gunung Welirang, dan arah Timur (Lawang) dan dari arah Barat (Batu-Selecta), dan arah selatan (Karangploso), juga dari Sumberawan, Singosari. Desa Sumberawan adalah desa pusat kerajinan tangan di kecamatan Singosari, Kabupaten Malang dan merupakan desa terakhir untuk mempersiapkan diri sebelum memulai pendakian. Bisa juga melewati Purwosari yang lebih gampang dilewati, karena hanya setengah jam dari jalan raya dan langsung sampai di Tambakwatu.</p>', 'Gunung13.jpg', 80000, 23),
(14, 2, 'Jawa Timur', 'Gunung Bromo', 'Kabupaten Malang, Jawa Timur, Indonesia', 'Gunung Bromo atau dalam bahasa Tengger dieja \"Brama\", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. ', '<p>Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja \"Brama\", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.</p><p>Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah ± 800 meter (utara-selatan) dan ± 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo.</p><p>Selama abad 20 dan abad 21, Gunung Bromo telah meletus sebanyak beberapa kali, dengan interval waktu yang teratur, yaitu 30 tahun. Letusan terbesar terjadi 1974, sedangkan letusan terakhir terjadi pada 2015-sekarang.</p><p>Bagi penduduk sekitar Gunung Bromo, suku Tengger, Gunung Bromo/Gunung Brahma dipercaya sebagai gunung suci. Setiap setahun sekali masyarakat Tengger mengadakan upacara Yadnya Kasada atau Kasodo. Upacara ini bertempat di sebuah pura yang berada di bawah kaki Gunung Bromo dan dilanjutkan ke puncak Bromo. Upacara diadakan pada tengah malam hingga dini hari setiap bulan purnama sekitar tanggal 14 atau 15 di bulan Kasodo (kesepuluh) menurut penanggalan Jawa.</p>', 'Gunung5.jpg', 94000, 54),
(15, 4, 'Sulawesi Selatan', 'Gunung Latimohong', 'Sulawesi Selatan, Indonesia', 'Gunung Latimojong adalah satu nama gunung di Kabupaten Enrekang, Sulawesi Selatan, Indonesia. Gunung Latimojong berada di tengah-tengah Sulawesi Selatan. Sebagian besar pengunungan ini terletak di daerah Kabupaten Enrekang.', '<p>Provinsi Sulawesi Selatan merupakan bagian dari provinsi-provinsi di Indonesia yang mempunyai gunung dengan titik tertinggi di negeri ini. Pegunungan Latimojong yang terletak di Kabupaten Enrekang merupakan bagian dari tujuh puncak tertinggi di Indonesia (Seven Summits of Indonesia). Pegunungan yang berada di utara Provinsi Sulawesi Selatan ini memiliki beberapa puncak. Titik tertinggi dari pegunungan ini dinamai Puncak Rante Mario dengan ketinggian 3.430 mdpl. Titik awal pendakian pegunungan ini dapat dimulai dari Desa Karangan.</p><p>Pegunungan Latimojong merupakan titik tertinggi di Pulau Sulawesi. Rangkaian pegunungan ini bukan merupakan gunung berapi seperti gunung-gunung lain yang tersebar di beberapa wilayah Indonesia. Wilayah dari pegunungan Latimojong dipenuhi oleh hutan tipe Montana dimana karakteristik dari hutan tipe ini adalah tumbuh di wilayah dengan ketinggian 2.000 hingga 3.000 meter dari permukaan laut. Jika beruntung, para pendaki dapat bersua dengan babi rusa dan anoa di wilayah hutan gunung ini. Pegunungan Latimojong diketahui memiliki tujuh puncak dan masing-masing puncak mempunyai namanya sendiri. Buntu Rante Mario sebagai titik tertinggi di Pulau Sulawesi, diikuti  oleh Buntu Nenemori sebagai titik tertinggi kedua, dan puncak-puncak lainnya yaitu Buntu Sinaji, Buntu Sikolong, Buntu Rante Kambola, Buntu Bajaja, dan Buntu Latimojong. Di Desa Karangan yang merupakan titik awal pendakian terdapat sebuah sungai berair jernih yang cukup besar bernama Salu Karangan. Di desa ini juga, para pendaki yang membutuhkan jasa porter dapat meminta jasa penduduk setempat.</p><p>Terdapat tujuh pos peristirahatan yang bisa digunakan para pendaki untuk beristirahat atau mendirikan tenda sebelum mencapai Puncak Rante Mario. Setelah melewati pos tujuh, vegetasi mulai berubah. Pohon-pohon tinggi mulai berkurang, sehingga pemandangan lebih jelas terlihat. Melewati pos tujuh, para pendaki akan menemui sebuah tanah lapang yang memiliki jalanan bercabang. Cabang ini mengarahkan para pendaki ke dua titik yang berbeda, yang satu menuju Puncak Rante Mario dan satunya lagi menuju Puncak Nenemori. Jika telah tiba di Puncak Rante Mario, para pendaki akan disuguhi pemandangan dari puncak-puncak lain yang menjadi bagian Pegunungan Latimojong. Sedangkan puncaknya sendiri ditandai dengan sebuah tugu triangulasi di tengah-tengah lahan yang cukup datar, bertuliskan Puncak Rante Mario.</p>', 'Gunung15.jpg', 69000, 26),
(16, 4, 'Sulawesi Utara', 'Gunung Kablat', 'Sulawesi Utara, Indonesia', 'Gunung Klabat merupakan gunung tertinggi di Provinsi Sulawesi Utara. Puncak ketinggiannya mencapai sekitar 1.995 mdpl. Gunung ini oleh masyarakat Tonsea disebut juga Gunung Tamporok. Gunung ini merupakan objek wisata alam dan dapat ditelusuri mulai dari Airmadidi. Gunung ini merupakan gunung api yang tidak aktif lagi.', '<p>Gunung Klabat merupakan gunung tertinggi di Provinsi Sulawesi Utara. Puncak ketinggiannya mencapai sekitar 1.995 mdpl. Gunung ini oleh masyarakat Tonsea (Minahasa Utara) disebut juga Gunung Tamporok. Gunung ini merupakan objek wisata alam dan dapat ditelusuri mulai dari Airmadidi (Ibu Kota Kabupaten Minahasa Utara). Gunung ini merupakan gunung api yang tidak aktif lagi. Puncak Gunung Klabat ini mempunyai kepundan berbentuk danau kecil dengan air yang sangat jernih. Mendaki gunung klabat melalui daerah air madidi ditempuh sekitar 8 jam perjalanan.</p><p>Kata Klabat diambil dari bahasa Minahasa \"Kalawat\" dialek Tonsea \"Kalabat\". Kalawat adalah nama dari sejenis satwa lokal yang juga disebut babirusa. Kata ini disebutkan oleh para pelaut Portugis \"Calabets\" sebagai nama gunung di pulau sulawesi, dari kata ini dinamakan sebagai nama pulau yang kemudian Calabes jadi Calabes = Celebes yang menjadi Sulawesi akhirnya kata ini menjadi nama pulau Sulawesi. Baca sejarah Sulawesi oleh David DS Lumoindong.</p>', 'Gunung16.jpg', 78000, 29),
(17, 5, 'Papua', 'Puncak Jaya', 'Papua, Indonesia', 'Puncak Jaya atau Piramida Carstensz ialah sebuah puncak yang menjadi bagian dari Barisan Sudirman yang terdapat di Provinsi Papua, Indonesia.', '<p>Puncak Jaya atau Carstensz Pyramid ialah sebuah puncak yang menjadi bagian dari Barisan Sudirman yang terdapat di Provinsi Papua, Indonesia. Puncak Jaya mempunyai ketinggian 4.884 m dan di sekitarnya terdapat gletser Carstensz, satu-satunya gletser tropika di Indonesia, yang kemungkinan besar segera akan lenyap akibat pemanasan global.</p><p>Dataran tinggi di sekitar puncak awalnya sudah dihuni sebelum adanya kontak dengan bangsa Eropa, dan puncaknya dikenal sebagai Nemangkawi di Amungkal. Puncak Jaya sebelumnya bernama Piramida Carstensz setelah penjelajah Belanda Jan Carstenszoon menamainya ketika pertama kali melihat gletser di puncak gunung pada hari yang cerah pada tahun 1623.</p><p>Padang salju (gletser) Puncak Jaya berhasil didaki pada awal tahun 1909 oleh seorang penjelajah Belanda, Hendrikus Albertus Lorentz dengan enam orang suku Kenyah yang direkrut dari Apau Kayan di Kalimantan Utara. Taman Nasional Lorentz yang juga meliputi Piramida Carstensz, didirikan pada tahun 1919 menyusul laporan ekspedisi ini.</p><p>Pada tahun 1936, ekspedisi Carstensz yang diprakarsai Belanda, tidak mampu menetapkan dengan pasti yang mana dari ke tiga puncak adalah yang tertinggi, memutuskan untuk berusaha mendaki masing-masing puncak. Anton Colijn, Jean Jacques Dozy, dan Frits Julius Wissel mencapai padang gletser Carstensz Timur dan Puncak Ngga Pulu pada 5 Desember. Karena gletser yang mencair, ketinggian Puncak Ngga Pulu menjadi 4.862 meter, tetapi telah diperkirakan bahwa pada tahun 1936 (ketika gletser masih tertutup puncak seluas 13 kilometer persegi), Ngga Pulu memang puncak yang tertinggi dengan ketinggian lebih dari 5.000 meter.</p>', 'Gunung17.jpg', 200000, 35),
(18, 5, 'Papua', 'Puncak Trikora', 'Papua, Indonesia', 'Puncak Trikora atau Ettiakup merupakan sebuah gunung yang terdapat di Papua Barat, Indonesia. Puncak Trikora mempunyai ketinggian setinggi 4,751 meter, menjadikannya gunung tertinggi ketiga di Indonesia setelah Puncak Jaya dan Puncak Mandala.', 'Puncak Trikora atau Ettiakup merupakan sebuah gunung yang terdapat di Papua Barat, Indonesia. Puncak Trikora mempunyai ketinggian setinggi 4,751 meter, menjadikannya gunung tertinggi ketiga di Indonesia setelah Puncak Jaya dan Puncak Mandala. Puncak Trikora mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan Hutan Ericaceous atau hutan gunung. Di zaman pemerintahan Belanda gunung ini dikenal dengan nama Wilhelminatop (Puncak Wilhelmina).', 'Gunung18.jpg', 123000, 20),
(19, 5, 'Papua', 'Puncak Mandala', 'Papua, Indonesia', 'Puncak Mandala adalah salah satu gunung di Papua, Indonesia. Dengan ketinggian 4.760 m, Puncak Mandala adalah gunung tertinggi ke-2 di Indonesia setelah Puncak Jaya. Puncak Mandala membentuk bagian Pegunungan Bintang bagian timur dan berada dekat perbatasan Papua Nugini.', 'Puncak Mandala (pada masa penjajahan Belanda dikenal sebagai Julianatop atau Puncak Juliana) adalah salah satu gunung di Papua, Indonesia. Dengan ketinggian 4.760 m, Puncak Mandala adalah gunung tertinggi ke-2 di Indonesia setelah Puncak Jaya. Puncak Mandala membentuk bagian Pegunungan Bintang bagian timur dan berada dekat perbatasan Papua Nugini.', 'Gunung19.jpg', 150000, 34);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `gambar_berita`
--
ALTER TABLE `gambar_berita`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `sementara2`
--
ALTER TABLE `sementara2`
  ADD PRIMARY KEY (`id_sementara`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gambar_berita`
--
ALTER TABLE `gambar_berita`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sementara2`
--
ALTER TABLE `sementara2`
  MODIFY `id_sementara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
