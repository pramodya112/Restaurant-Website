-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 01:40 PM
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
-- Database: `thegallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123'),
(3, 'adminname@gmail.com', 'admin123'),
(4, 'adminmail@gmail.com', 'adminpswrd');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `description`, `price`, `category`, `image`) VALUES
(18, 'Milk rice', 'With fish ambul thiyal', '400', 'srilankan.php', 'milkrice.jpg'),
(19, 'Hoppers ', 'With dhal curry and sambal', '300', 'srilankan.php', 'hoppers.jpg'),
(21, 'String Hoppers', 'With dhal curry and sambal', '300', 'srilankan.php', 'stringhoppers-3.jpg'),
(22, 'Plain Paratha', 'With potato curry', '400', 'srilankan.php', 'Plain Paratha.jpg'),
(23, 'Fruit Platter', 'Seasonal fruits', '800', 'srilankan.php', 'fruits.jpg'),
(24, 'Rice and Curry Platter', 'Choice of chicken, fish, or vegetarian', '0.6', 'srilankan.php', 'ricencurry.jpg'),
(25, 'Fried Rice', 'With chicken or seafood', '500', 'srilankan.php', 'friedrice.jpg'),
(26, 'Lamprice', 'with curries on your choice', '850', 'srilankan.php', 'lamprais.jpg'),
(27, 'Aloo Gobi ', 'Potato and cauliflower curry.', '850', 'indian.php', 'Aloo Gobi.jpg'),
(28, 'Aloo Paratha', 'Stuffed bread with spiced potato filling.', '400', 'indian.php', 'Aloo Paratha.jpg'),
(29, 'Banana Fritters', 'Stuffed bread with spiced potato filling.', '600', 'chinese.php', 'bananafritters.jpg'),
(30, 'BBQ Pork Ribs', 'Tender, succulent pork ribs glazed with a tangy and sweet barbecue sauce.', '1200', 'chinese.php', 'BBQ Pork Ribs.jpg'),
(31, 'Beef with Broccoli', 'Tender beef stir-fried with crisp broccoli in a savory sauce.', '1200', 'chinese.php', 'Beef with Broccoli.jpg'),
(32, 'Butter Chicken', '\\Tender chicken pieces simmered in a creamy, spiced tomato sauce.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '1300', 'indian.php', 'Butter Chicken.jpeg'),
(33, 'Chicken Satay (4 skewers) ', 'Grilled chicken skewers marinated in spices and served with a rich peanut sauce.', '1800', 'chinese.php', 'Chicken Satay.jpg'),
(34, 'Chicken dishe', 'Chicken dishes in a Sri Lankan restaurant typically range from Rs. 500 to Rs. 750, depending on the preparation and accompaniments.', '1800', 'srilankan.php', 'chicken.jpg'),
(35, 'Chicken Biriyani', 'A fragrant and flavorful spiced rice dish featuring tender pieces of chicken, cooked with aromatic spices and herbs.', '2200', 'indian.php', 'chickenbiriyani.jpg'),
(36, 'Chicken Tikka', 'Marinated chicken pieces grilled to perfection, offering a smoky flavor with a blend of spices.', '1300', 'indian.php', 'chickentikka.jpg'),
(37, 'Chinese Egg Tarts', 'A flaky pastry filled with a creamy, sweet egg custard.', '550', 'chinese.php', 'Chinese Egg Tarts.jpg'),
(38, ' pancakes', 'A delightful treat of fluffy pancakes topped with a sweet coconut syrup.', '300', 'srilankan.php', 'cocopancake.jpg'),
(39, 'Curd', 'Fresh and creamy yogurt, perfect as a side or dessert.', '600', 'srilankan.php', 'curd.jpg'),
(40, 'Fishamritsari', 'Crispy, spiced fish fillets deep-fried to perfection, offering a flavorful and crunchy bite.', '1200', 'indian.php', 'fishamritsari.jpg'),
(41, 'Fortune Cookies', 'Crispy cookies with a hidden fortune inside.', '400', 'chinese.php', 'Fortune Cookies.jpg'),
(42, 'Fried Ice Cream', 'Crispy on the outside and creamy on the inside, this dessert features a scoop of ice cream enveloped in a crispy, golden shell.', '1300', 'chinese.php', 'Fried Ice Cream.jpg'),
(43, 'Fried Wontons', 'Crispy wontons filled with minced pork and vegetables, served with a tangy dipping sauce.', '1200', 'chinese.php', 'Fried Wontons.jpg'),
(45, 'Gulab Jamun', 'Delicious deep-fried dough balls soaked in a fragrant sugar syrup.', '300', 'indian.php', 'Gulab Jamun.jpg'),
(46, 'Hot and Sour Soup', 'A tangy and spicy soup with tofu, mushrooms, and vegetables, delivering a perfect balance of flavors.', '1200', 'chinese.php', 'Hot and Sour Soup.jpg'),
(47, 'Jalebi', 'Crispy, spiral-shaped sweet treats soaked in fragrant saffron syrup.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '400', 'indian.php', 'Jalebi.jpg'),
(48, 'Lychee Ice Cream', 'A creamy and refreshing ice cream with a delicate lychee flavor.', '1300', 'chinese.php', 'Lychee Ice Cream.jpg'),
(49, 'Mango Lassi', 'A creamy and refreshing yogurt drink blended with ripe mangoes.', '1200', 'chinese.php', 'Mango Lassi.jpg'),
(50, 'Mango Pudding', 'A creamy, mango-flavored dessert that is both refreshing and rich.', '1800', 'chinese.php', 'Mango Pudding.jpg'),
(51, 'Moose', 'A creamy, light dessert made with fresh mango puree and whipped cream, offering a delightful tropical flavor.', '1300', 'chinese.php', 'moose.jpeg'),
(52, 'Omlette', 'An omelette is a versatile dish made from beaten eggs cooked until set and often filled with ingredients like cheese, vegetables, and meats.', '1200', 'srilankan.php', 'omlette.jpg'),
(53, 'Palak Paneer', 'Creamy spinach curry with chunks of paneer (cottage cheese), seasoned with aromatic spices.', '1300', 'indian.php', 'Palak Paneer.jpg'),
(54, 'Pork Fried Rice', 'Savory fried rice stir-fried with tender pork, vegetables, and a blend of aromatic spices.', '2300', 'chinese.php', 'Pork Fried Rice.jpg'),
(55, 'Prawn Crackers', 'Crispy, light crackers flavored with prawns, perfect as a savory snack or accompaniment.', '600', 'chinese.php', 'Prawn Crackers.jpg'),
(56, 'Prawnpuri', 'Spicy prawns served with puffed, crispy bread.', '800', 'indian.php', 'prawnpuri.jpg'),
(57, 'Pudding', 'A smooth, creamy dessert often made with milk or cream, sweetened and flavored with ingredients like chocolate, vanilla, or fruit.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '1500', 'srilankan.php', 'pudding.jpg'),
(59, 'Ras Malai', ' soft cheese patties soaked in sweetened milk.', '800', 'indian.php', 'Ras Malai.jpg'),
(60, 'Rice and Curry', 'with many curries', '1200', 'srilankan.php', 'ricencurry.jpg'),
(61, 'Samosa', 'Crispy pastry filled with a spiced mix of potatoes and peas.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '150', 'srilankan.php', 'samosa.jpg'),
(62, 'Sesame Balls', 'Crispy deep-fried rice balls coated with sesame seeds and filled with a sweet red bean paste.', '400', 'indian.php', 'Sesame Balls.jpg'),
(63, 'Spring Rolls', 'Crispy rolls filled with a savory mix of vegetables or meat.', '400', 'indian.php', 'Spring Rolls.jpg'),
(64, 'Steamed Basmati Rice', 'Fragrant, fluffy basmati rice steamed to perfection.', '1300', 'indian.php', 'Steamed Basmati Rice.jpg'),
(65, 'Steamed Custard Buns', 'Soft and fluffy buns filled with creamy custard, steamed to perfection.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '450', 'chinese.php', 'Steamed Custard Buns.jpg'),
(66, 'Sweet and Sour Chicken', 'Tender chicken pieces are coated in a tangy and sweet sauce, perfectly balanced with vibrant vegetables.', '1800', 'chinese.php', 'Sweet and Sour Chicken.jpg'),
(67, 'Szechuan Chicken Wings', 'Spicy chicken wings coated in a bold Szechuan sauce with a perfect balance of heat and flavor', '1800', 'chinese.php', 'Szechuan Chicken Wings.jpg'),
(68, 'Vegetable Chow Mein', 'Stir-fried noodles with a mix of fresh vegetables and a savory sauce.', '2200', 'chinese.php', 'Vegetable Chow Mein.jpg'),
(69, 'Vegetable Spring Rolls', 'Crispy rolls filled with a savory mix of vegetables and spices.', '400', 'chinese.php', 'Vegetable Spring Rolls.jpg'),
(70, 'Vegetable Pakora', 'Crispy fritters made with mixed vegetables dipped in a spiced chickpea flour batter.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '1600', 'indian.php', 'vegetablepakora.jpg'),
(74, 'Roti', 'with lunumiris\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '150', 'srilankan.php', 'roti.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `total_price`, `order_date`, `status`) VALUES
(2, 'order_66b1d4ed24bd5', 300.00, '2024-08-06 07:46:53', 'Confirmed'),
(3, 'order_66b1d50f2fd0a', 300.00, '2024-08-06 07:47:27', 'Confirmed'),
(6, 'order_66b1d67160369', 100.00, '2024-08-06 07:53:21', 'Confirmed'),
(7, '66b1d82795a5a', 300.00, '2024-08-06 04:30:39', 'Pending'),
(8, '66b228bbac414', 600.00, '2024-08-06 10:14:27', 'Pending'),
(9, '66b26e8722d10', 1600.00, '2024-08-06 18:42:15', 'Pending'),
(10, '66b26ee8a03b0', 400.00, '2024-08-06 18:43:52', 'Pending'),
(11, '0', 300.00, '2024-08-06 18:47:00', 'Pending'),
(13, NULL, 0.00, '2024-08-07 03:55:05', 'Pending'),
(14, NULL, 0.00, '2024-08-07 03:56:29', 'Pending'),
(15, NULL, 0.00, '2024-08-07 03:57:51', 'Pending'),
(16, NULL, 0.00, '2024-08-07 03:57:55', 'Pending'),
(17, NULL, 200.00, '2024-08-07 03:58:01', 'Pending'),
(18, NULL, 300.00, '2024-08-07 03:58:23', 'Confirmed'),
(19, NULL, 100.00, '2024-08-07 04:55:06', 'Pending'),
(20, NULL, 100.00, '2024-08-07 04:59:22', 'Pending'),
(21, NULL, 200.00, '2024-08-07 05:00:52', 'Pending'),
(22, NULL, 100.00, '2024-08-07 05:02:46', 'Pending'),
(23, NULL, 100.00, '2024-08-07 05:04:41', 'Pending'),
(24, NULL, 100.00, '2024-08-07 05:07:47', 'Pending'),
(25, NULL, 100.00, '2024-08-07 05:10:12', 'Pending'),
(26, NULL, 300.00, '2024-08-07 05:13:04', 'Pending'),
(27, NULL, 100.00, '2024-08-07 05:15:40', 'Pending'),
(28, '3', 700.00, '2024-08-07 18:03:48', 'Pending'),
(29, '5', 300.00, '2024-08-07 18:04:38', 'Confirmed'),
(41, '17230803925998', 200.00, '2024-08-08 01:26:32', 'Pending'),
(42, '17230804401527', 500.00, '2024-08-08 01:27:20', 'Pending'),
(43, '17230806354829', 100.00, '2024-08-08 01:30:35', 'Pending'),
(44, 'ORD66b41fdd5b087', 0.00, '2024-08-08 01:31:09', 'Pending'),
(45, 'ORD66b41fef32d19', 100.00, '2024-08-08 01:31:27', 'Pending'),
(46, 'ORD66b4208d99f38', 0.00, '2024-08-08 01:34:05', 'Pending'),
(47, 'ORD66b420d716f65', 0.00, '2024-08-08 01:35:19', 'Pending'),
(48, 'ORD66b420da3f0c0', 0.00, '2024-08-08 01:35:22', 'Pending'),
(49, 'ORD66b420f9bb011', 100.00, '2024-08-08 01:35:53', 'Confirmed'),
(50, 'ORD66b421c716417', 0.00, '2024-08-08 01:39:19', 'Pending'),
(51, 'ORD66b421ddcbd6a', 500.00, '2024-08-08 01:39:41', 'Pending'),
(52, 'ORD66b422089276e', 0.00, '2024-08-08 01:40:24', 'Pending'),
(53, 'ORD66b4222c8976b', 100.00, '2024-08-08 01:41:00', 'Pending'),
(54, 'ORD66b436f52cc7d', 100.00, '2024-08-08 03:09:41', 'Confirmed'),
(55, 'ORD66b4609787945', 100.00, '2024-08-08 06:07:19', 'Pending'),
(56, 'ORD66b471e56fec2', 100.00, '2024-08-08 07:21:09', 'Pending'),
(57, 'ORD66b478bfeaaa4', 100.00, '2024-08-08 07:50:23', 'Pending'),
(58, 'ORD66b479dc7effa', 100.00, '2024-08-08 07:55:08', 'Pending'),
(59, 'ORD66b4f44541eeb', 400.00, '2024-08-08 16:37:25', 'Pending'),
(60, 'ORD66b4f4975c0af', 850.00, '2024-08-08 16:38:47', 'Pending'),
(61, 'ORD66b4f4c2c96e7', 1200.00, '2024-08-08 16:39:30', 'Pending'),
(62, 'ORD66b4f4e286903', 400.00, '2024-08-08 16:40:02', 'Pending'),
(63, 'ORD66b4f4f1283eb', 2050.00, '2024-08-08 16:40:17', 'Pending'),
(64, 'ORD66b4fe2f7b4eb', 400.00, '2024-08-08 17:19:43', 'Pending'),
(65, 'ORD66b4fe3937c37', 850.00, '2024-08-08 17:19:53', 'Pending'),
(66, 'ORD66b53629ab9ba', 400.00, '2024-08-08 21:18:33', 'Confirmed'),
(67, 'ORD66b55e8e95238', 400.00, '2024-08-09 00:10:54', 'Pending'),
(71, 'ORD66b6acde7bf9d', 400.00, '2024-08-09 23:57:18', 'Confirmed'),
(72, 'ORD66b6afb71524d', 800.00, '2024-08-10 00:09:27', 'Pending'),
(73, 'ORD66b6b03ab771d', 1700.00, '2024-08-10 00:11:38', 'Confirmed'),
(74, 'ORD66b6b10209e79', 900.00, '2024-08-10 00:14:58', 'Pending'),
(75, 'ORD66b6dfbde5019', 400.00, '2024-08-10 03:34:21', 'Confirmed'),
(76, 'ORD66b733de6030d', 300.00, '2024-08-10 09:33:18', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_name`, `item_price`, `quantity`) VALUES
(2, 2, 'String Hoppers', 300.00, 1),
(3, 3, 'String Hoppers', 300.00, 1),
(6, 6, 'hoppers', 100.00, 1),
(7, 7, 'String Hoppers', 300.00, 1),
(8, 8, 'String Hoppers', 300.00, 2),
(9, 9, 'Gulab Jab', 200.00, 5),
(10, 9, 'hoppers', 100.00, 6),
(11, 10, 'hoppers', 100.00, 2),
(12, 10, 'Gulab Jab', 200.00, 1),
(13, 11, 'Gulab Jab', 200.00, 1),
(14, 11, 'hoppers', 100.00, 1),
(15, 13, 'hoppers', 100.00, 1),
(16, 14, 'hoppers', 100.00, 1),
(17, 14, 'Gulab Jab', 200.00, 1),
(18, 17, 'Gulab Jab', 200.00, 1),
(19, 18, 'hoppers', 100.00, 1),
(20, 18, 'Gulab Jab', 200.00, 1),
(21, 19, 'hoppers', 100.00, 1),
(22, 20, 'hoppers', 100.00, 1),
(23, 21, 'Gulab Jab', 200.00, 1),
(24, 22, 'hoppers', 100.00, 1),
(25, 23, 'hoppers', 100.00, 1),
(26, 24, 'hoppers', 100.00, 1),
(27, 25, 'hoppers', 100.00, 1),
(28, 26, 'Gulab Jab', 200.00, 1),
(29, 26, 'hoppers', 100.00, 1),
(30, 27, 'hoppers', 100.00, 1),
(31, 28, 'hoppers', 100.00, 1),
(32, 28, 'Gulab Jab', 200.00, 2),
(33, 28, 'cheese', 200.00, 1),
(34, 29, 'hoppers', 100.00, 1),
(35, 29, 'Gulab Jab', 200.00, 1),
(36, 41, 'hoppers', 100.00, 2),
(37, 42, 'hoppers', 100.00, 1),
(38, 42, 'Gulab Jab', 200.00, 1),
(39, 42, 'cheese', 200.00, 1),
(40, 43, 'hoppers', 100.00, 1),
(41, 45, 'hoppers', 100.00, 1),
(42, 49, 'hoppers', 100.00, 1),
(43, 51, 'hoppers', 100.00, 1),
(44, 51, 'Gulab Jab', 200.00, 1),
(45, 51, 'cheese', 200.00, 1),
(46, 53, 'hoppers', 100.00, 1),
(47, 54, 'hoppers', 100.00, 1),
(48, 55, 'hoppers', 100.00, 1),
(49, 56, 'hoppers', 100.00, 1),
(50, 57, 'hoppers', 100.00, 1),
(51, 58, 'hoppers', 100.00, 1),
(52, 59, 'Milk rice', 400.00, 1),
(53, 60, 'Aloo Gobi ', 850.00, 1),
(54, 61, 'BBQ Pork Ribs', 1200.00, 1),
(55, 62, 'Milk rice', 400.00, 1),
(56, 63, 'Aloo Gobi ', 850.00, 1),
(57, 63, 'BBQ Pork Ribs', 1200.00, 1),
(58, 64, 'Milk rice', 400.00, 1),
(59, 65, 'Aloo Gobi ', 850.00, 1),
(60, 66, 'Milk rice', 400.00, 1),
(61, 67, 'Milk rice', 400.00, 1),
(64, 71, 'Milk rice', 400.00, 1),
(65, 72, 'Milk rice', 400.00, 2),
(66, 73, 'Milk rice', 400.00, 1),
(67, 73, 'Butter Chicken', 1300.00, 1),
(68, 74, 'Hoppers ', 300.00, 1),
(69, 74, 'Banana Fritters', 600.00, 1),
(70, 75, 'Milk rice', 400.00, 1),
(71, 76, 'String Hoppers', 300.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parking_spaces`
--

CREATE TABLE `parking_spaces` (
  `id` int(11) NOT NULL,
  `space_number` varchar(10) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parking_spaces`
--

INSERT INTO `parking_spaces` (`id`, `space_number`, `is_available`, `last_updated`) VALUES
(1, 'A1', 1, '2024-08-08 22:30:28'),
(2, 'A2', 1, '2024-08-08 22:30:28'),
(3, 'B1', 1, '2024-08-08 22:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `title`, `description`, `price`, `image`) VALUES
(1, 'happy hour', 'Discounts on drinks and appetizers during specific hours.', 3000.00, 'pr1.jpg'),
(3, 'Two-for-One Deals', 'Buy one, get one free offers on certain items', 4000.00, 'two.jpg'),
(4, 'Meal Combo', 'Specially priced combinations of entrees, sides, and drinks.', 5000.00, 'combos.jpg'),
(5, 'Early Bird Specials', 'Discounts for diners who come in early, usually before the dinner rush.', 4500.00, 'early.jpg'),
(6, 'Loyalty Programs', 'Rewards for frequent customers, such as points for each visit that can be redeemed for discounts or free items.', 5500.00, 'loyalty.jpg'),
(7, 'Seasonal Menus', 'Limited-time offers featuring seasonal ingredients or holiday-themed dishes.', 4000.00, 'seasonal.png'),
(8, 'Birthday Specials', 'Free meals or discounts for customers celebrating their birthdays.', 5000.00, 'birthday.jpg'),
(9, 'Family Packs', 'Special deals on larger portions designed for families', 7000.00, 'packs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `people` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `status` enum('Pending','Confirmed') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `Name`, `Email`, `datetime`, `people`, `message`, `status`) VALUES
(1, 'nirosh', 'icbt123@gmail.com', '2024-08-06 16:46:00', 3, 'o[ki]]]o]o', 'Confirmed'),
(2, 'nirosh', 'icbt123@gmail.com', '2024-08-06 15:47:00', 3, 'ugggtoyo', 'Confirmed'),
(3, 'elsa', 'elsa@gmail.com', '2024-08-09 20:24:00', 2, 'should be comfortable', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'sandwich', 'rohith@gmail.com', 'hdueihheqhfheqh', 'ie03i=ri3=]i', '2024-08-08 05:28:20'),
(3, 'kamal', 'rohith@gmail.com', 'hdueihheqhfheqh', 'ioopoii;oii', '2024-08-08 05:53:07'),
(4, 'kamal', 'rohith@gmail.com', 'hdueihheqhfheqh', 'jdwjfj[oiw[p', '2024-08-08 05:53:25'),
(5, 'kamal', 'rohith@gmail.com', 'hdueihheqhfheqhfewfg', 'mjyky', '2024-08-08 05:55:17'),
(6, 'kamal', 'rohith@gmail.com', 'hdueihheqhfheqh', 'dwdwdw', '2024-08-08 05:58:20'),
(8, 'kamal', 'rohith@gmail.com', 'about the service', 'jrpkfkpow[o', '2024-08-09 17:18:02'),
(9, 'kamal', 'rohith@gmail.com', 'about the service', 'jrpkfkpow[o', '2024-08-09 17:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `password`) VALUES
(1, 'nirosh', 'nirosh234@gmail.com', '$2y$10$b2IgEC5zA.Q5y0GBOQjf5er9i9/kVGaPt93z.3W/wXK48g0MdLB3e'),
(2, 'rohith', 'rohitha456@gmail.com', '$2y$10$NcpEQoiEuflHjB3B/t5Buu/cqGY1.4IDNE8kne6NIa7ADBBssU7Zu'),
(3, 'john', 'hohn@gmail.com', '$2y$10$evHvzRFScpdV6aqXhlg91Oq6iPFlG14SZ9DHrL/E3w9xTu5iXIMnS'),
(4, 'man', 'man@gmail.com', '$2y$10$c5fSILB.Zp7F9D/pvleQgu0GYGgKIR2diXkyoN9/QJEcrvIbIfoqa'),
(5, 'elsa', 'elsa@gmail.com', '$2y$10$qhpzTQzu81di9hUUqbSGo.cRZ4WAJR1LrIHFv9AbiTov8SEQh6qze'),
(6, 'jane', 'jane@gmail.com', '$2y$10$v.EDFkRtJ4tYvKjOaIYHl.Vb8gf12UxxbJXTwj.zDj.23j1m7kqIi');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `table_number` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` enum('Available','Reserved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_number`, `capacity`, `status`) VALUES
(1, 1, 2, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`) VALUES
(1, 'Roshini', 'Rupasingha', '2345678987', 'elsa@gmail.com', 'elasa123'),
(3, 'roshith', 'Roshan', '2345678987', 'rohith@gmail.com', 'rohith123'),
(5, 'frozen', 'elsa', '0777777777', 'frozen@gmail.com', '$2y$10$i7Nqmiymg9quzV.rKx8lfe2Ip4TD0ztB6bVB7qhPZiK8RYntAd8YW'),
(6, 'moana', 'moana', '2345678987', 'moana@gmail.com', '$2y$10$86iKnKmGi1kREZHE1Cwl7OaJTBiVKdM.8R2Yur17oHzJe.iXqmcFu'),
(8, 'Roshini', 'Fernando', '07125673654', 'roshini@gmail.com', '$2y$10$CKewzk2mvP8YdpCqeqbFuubZwreBlCeSD0FSHzJtF6ajpBZ7EQMUe'),
(9, 'madu', 'rashmi', '09876543', 'madu@gmail.com', '$2y$10$zZKvm127AqWJOj2L7Bglw.SUvFmeCQYC9bVqjXPmXDz54DQlxRvWK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number` (`order_number`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_ibfk_1` (`order_id`);

--
-- Indexes for table `parking_spaces`
--
ALTER TABLE `parking_spaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
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
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `parking_spaces`
--
ALTER TABLE `parking_spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
