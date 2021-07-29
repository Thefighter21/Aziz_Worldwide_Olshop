
--Copy semua yg di bawah ini lalu masuk ke phpmyadmin di table PRODUCTS paste kan di SQL --
INSERT INTO `products` (`id`, `nama`, `harga`, `is_ready`, `berat`, `gambar`, `deskripsi_produk`, `kategori_id`, `created_at`, `updated_at`) VALUES
(27, 'Guard Black Tshirt', 70000, 1, 0.25, '07685a87f8248165c4b014593a1d3c69', 'Size :XL Warna :Hitam', 2, '2021-06-28 13:35:14', '2021-06-29 23:07:22'),
(28, 'Heart Break Tshirt', 70000, 1, 0.25, '0763080d1cbf9fd4640ecda9165538d6', 'Size: XL, Warna :Hitam', 2, '2021-06-28 13:38:35', '2021-06-28 13:38:35'),
(29, 'Helly Hat', 45000, 1, 0.25, '341432adfa3c01119ca48ba34a51f1a0', 'Size:XL, Warna:Hitam', 1, '2021-06-28 13:41:34', '2021-06-28 13:41:34'),
(30, 'Alfa Hat', 45000, 1, 0.25, 'd3cec413be221864c57c17a1a16a241d', 'Warna: Hitam', 1, '2021-06-28 13:49:51', '2021-06-28 13:49:51'),
(31, 'Simone Hat', 45000, 1, 0.25, 'f014de17abfab9a33573ac57737c05fc', 'Warna: Hitam', 1, '2021-06-28 13:52:04', '2021-06-28 13:52:04'),
(32, 'GT Black Hoddie', 70000, 1, 0.25, '02e89cbea499d4698f57f9308adcd954', 'Size:XL Warna:Hitam', 3, '2021-06-28 13:54:11', '2021-06-28 13:54:11'),
(33, 'Slava Hoddie', 70000, 1, 0.25, '2ccf853252accbedd8cca23f8f64ad9c', 'Size:XL Warna:Cream', 3, '2021-06-28 13:55:30', '2021-06-28 14:07:24'),
(34, 'Guard Hoddie', 70000, 1, 0.25, 'b134f8224106626232ee007d248f2e89', 'Size:XL Warna:Hitam', 3, '2021-06-28 13:56:13', '2021-06-28 13:56:13'),
(35, 'Bold Hoddie', 70000, 1, 0.25, '04f1066375a9d3675917b86e34544d95', 'Size:XL Warna:Hitam', 3, '2021-06-28 13:56:49', '2021-06-28 13:56:49'),
(36, 'Mood Brown Crewneck', 70000, 1, 0.25, '849b7465fe6ef40769532b55df053400', 'Size:XL Warna:Orange', 4, '2021-06-28 13:57:41', '2021-06-28 13:57:41'),
(37, 'Wave Black Tshirt', 70000, 1, 0.25, 'b1c9899d42d2d62d517cc43f88426309', 'Size:XL Warna:Hitam', 2, '2021-06-28 16:47:07', '2021-06-28 16:47:07');

--Copy semua yg di bawah ini lalu masuk ke phpmyadmin di table KATEGORIS paste kan di SQL --
INSERT INTO `kategoris` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Topi', 'topi.jpg', NULL, NULL),
(2, 'T-shirt', 'kaos.jpg', NULL, NULL),
(3, 'Hoddie', 'hoddie.jpg', NULL, NULL),
(4, 'Crewneck', 'crewneck.jpg', NULL, NULL);
