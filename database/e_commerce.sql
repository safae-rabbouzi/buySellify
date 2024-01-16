-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 06:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `date_t` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `comment_text`, `star`, `date_t`) VALUES
(1, 1, 1, 'i love it', 5, '2023-05-14 00:30:58'),
(2, 3, 9, 'Amazing pack', 4, '2023-05-14 00:31:31'),
(3, 1, 7, 'I love it', 4, '2023-05-14 00:31:55'),
(4, 4, 2, 'Amazing ', 5, '2023-06-10 09:21:16'),
(5, 2, 1, 'Awesome', 5, '2023-06-10 09:30:55'),
(6, 1, NULL, 'new comments', 4, '2023-06-10 14:43:12'),
(7, 1, NULL, 'new comments', 4, '2023-06-10 14:45:02'),
(10, 1, 2, 'awsome', 3, '2023-06-10 14:48:56'),
(11, 1, 2, 'awsome', 3, '2023-06-10 14:49:04'),
(12, 1, 7, 'Amazing', 5, '2023-06-10 14:50:09'),
(13, 1, 7, 'Amazing', 5, '2023-06-10 14:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `join_email`
--

CREATE TABLE `join_email` (
  `email` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `join_email`
--

INSERT INTO `join_email` (`email`, `id`) VALUES
('zineb.zineb.zouzou@gmail.com', 1),
('zineb.zineb.zouzou@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `confirmed` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `confirmed`) VALUES
(2, 4, 6, 1),
(15, 1, 2, 0),
(16, NULL, 3, 0),
(17, NULL, 3, 0),
(18, NULL, NULL, 0),
(19, NULL, NULL, 0),
(20, NULL, NULL, 0),
(21, NULL, NULL, 0),
(22, NULL, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `categories` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `img`, `price`, `categories`) VALUES
(1, 'Women\'s Classic Zip-Up Jacket for Everyday Style\r\n', '<p>\r\nThis women\'s jacket is a stylish and versatile addition to any wardrobe. Made from high-quality materials, it is designed to keep you warm and comfortable in colder weather. \r\n<p>The jacket features a classic cut with a flattering fit that accentuates your silhouette. It has a front zipper closure and two side pockets that provide ample storage for your essentials. \r\n</p>\r\n<p>The jacket is available in a range of colors and sizes, making it easy to find the perfect fit for you.\r\n</p>', 'https://i.ibb.co/3RYNRTC/cl-7.jpg', 405.7, 'women'),
(2, 'Jeans and T-Shirt', '<p>\r\nThis classic blue denim jeans and black cotton t-shirt combo is perfect for a comfortable and casual day out.\r\n</p>\r\n<p> Pair it with some white sneakers and simple accessories for a laid-back yet put-together look. A perfect go-to outfit for any casual occasion.\r\n</p>', 'https://i.ibb.co/nMx12nW/cl-4.jpg', 350.09, 'women'),
(3, 'Skirt Dress', '<p>For a more casual date with friends, you can wear a flowy and comfortable shirt and skirt combo. \r\n<p>The top is a lightweight white blouse with a relaxed fit and a fun pattern that adds some personality to your outfit. The skirt is a comfortable and playful knee-length denim skirt that matches well with the blouse. </p>\r\n<p>\r\nPair it with some flats and the cross-body bag from the pack, and you\'ll be ready for a fun day out with friends!\r\n<p>', 'https://i.ibb.co/Wxr0McY/cl-1.jpg', 500.04, 'women'),
(4, 'complete outfit', '<p>This package includes a complete outfit suitable for a work day, with professional attire and accessories.</p>\r\n<p> Additionally, it contains two thoughtful gifts that are relevant to the recipient\'s interests and needs. The outfit and gifts show attention to detail and professionalism, making it an ideal choice for a workplace occasion or gift-giving event.</p>', 'https://i.ibb.co/kQ36H6F/cl-5.jpg', 300.4, 'women'),
(5, 'versatile outfit', '<p>Stay stylish and comfortable with this versatile outfit featuring a white cotton hoodie, classic blue jeans, and white canvas sneakers.</p>\r\n<p> Perfect for casual occasions, this effortless look is a must-have for any wardrobe\r\n</p>', 'https://i.ibb.co/T1CFd6h/cl-3.jpg', 200.2, 'women'),
(6, 'business-casual look', '<p>For a casual or business-casual look, a complete outfit for men can include a well-fitted t-shirt and clean jeans, paired with comfortable sneakers or dress shoes. </p>\r\n<p>Stylish glasses can add a touch of sophistication, and accessorizing with a watch or belt can enhance the overall look. Suitable for a variety of casual or semi-formal settings.</p>', 'https://i.ibb.co/Xj13JGP/cl-6.jpg', 700.9, 'Men'),
(7, 'Gold Heart Necklace', '<p>This stunning gold necklace is the perfect way to show someone you care. The pendant is crafted in the shape of a heart, symbolizing love and affection.\r\n</p>\r\n<p> It is made from high-quality gold and features a polished finish that catches the light beautifully. The necklace chain is delicate and adds to the overall elegance of the piece. </p>\r\n<p>This necklace is perfect for adding a touch of sophistication to any outfit, making it a great addition to any jewelry collection.<p>', 'https://i.ibb.co/VMFCxmc/jw-5.jpg', 1050.99, 'Jewelery'),
(8, 'Earrings\r\n', 'Earrings are a classic accessory that add a touch of elegance to any outfit. They come in a variety of styles, including stud, hoop, and dangle, and can be made from a range of materials, such as gold, silver, and gemstones. Choose the perfect pair to match your personal style and dress up any look.\"', 'https://i.ibb.co/RzNtFVw/jw-4.jpg', 700, 'Jewelery'),
(9, 'comfortable pack of men', '<p>A casual and comfortable pack of men\'s clothing, perfect for everyday wear. Includes a soft and breathable t-shirt, lightweight and durable pants, and supportive trainers. Mix and match to create a variety of looks.\r\n</p>', 'https://i.ibb.co/yqq9GFV/cl-8.jpg', 459.9, 'Men'),
(10, ' pearl necklace', '<p>\r\nA pearl necklace is a timeless and elegant accessory that adds a touch of sophistication to any outfit. The lustrous pearls can come in various sizes, shapes, and colors, and can be paired with gold or silver chains to create a classic and luxurious look. \r\n</p>\r\n<p>\r\nA perfect addition to any jewelry collection, the pearl necklace is versatile and can be worn to dress up any outfit for a special occasion or to add a touch of refinement to a casual look\r\n<p/>', 'https://i.ibb.co/Yyz2SFN/jw-2.jpg', 700.5, 'Jewelery'),
(11, ' pearl necklace', '<p>\r\nA pearl necklace is a timeless and elegant accessory that adds a touch of sophistication to any outfit. The lustrous pearls can come in various sizes, shapes, and colors, and can be paired with gold or silver chains to create a classic and luxurious look.\r\n</p>\r\n<p> A perfect addition to any jewelry collection, the pearl necklace is versatile and can be worn to dress up any outfit for a special occasion or to add a touch of refinement to a casual look.\r\n</p>', 'https://i.ibb.co/FJwqdh3/jw-3.jpg', 500.8, 'Jewelery'),
(12, 'gold necklace', '<p>\r\nThis sleek and sophisticated gold necklace and bracelet set adds a touch of luxury to any outfit. The thin gold chain and minimalist design make it perfect for formal or semi-formal occasions.\r\n</p>\r\n<p> Wear the set together or separately for a refined and elegant look. Perfect for any stylish man.\r\n</p>', 'https://i.ibb.co/WkwFbBR/jw-1.jpg', 900.5, 'Jewelery'),
(13, 'Men\'s Clothing Pack', '<p>\r\nIntroducing the \"Sleek Essentials\" Men\'s Clothing Pack. This set includes a black pant, a stylish t-shirt, and sleek sunglasses.\r\n</p>\r\n<p> It\'s the perfect combination of timeless sophistication and modern flair, ensuring you look effortlessly cool and polished in any situation.\r\n</p>', 'https://i.ibb.co/NYZpgrR/cl-2.jpg', 200.51, 'Men');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'zineb', 'zineb@gmail.com', 1234567890, 'zineb'),
(2, 'ikram', 'ikram@gmail.com', 1234567890, 'ikram'),
(3, 'mohamed', 'mohamed@gmail.com', 1234567890, 'mohamed'),
(4, 'safea', 'safae@gmail.com', 1234567890, 'safae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `join_email`
--
ALTER TABLE `join_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `join_email`
--
ALTER TABLE `join_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
