-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 02:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `roll` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `work` varchar(111) NOT NULL,
  `place` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `roll`, `email`, `work`, `place`, `password`) VALUES
(5, 'SUJAL', 'Admin', 'rana@gmail.com', 'Amazon', 'Ahmedabad', 'sujal');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `a_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `area_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`a_id`, `s_id`, `c_id`, `area_name`) VALUES
(8, 4, 5, 'Station'),
(9, 4, 6, 'C.G road');

-- --------------------------------------------------------

--
-- Table structure for table `billingaddress`
--

CREATE TABLE `billingaddress` (
  `address_id` int(11) NOT NULL,
  `fname` varchar(222) NOT NULL,
  `lname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billingaddress`
--

INSERT INTO `billingaddress` (`address_id`, `fname`, `lname`, `email`, `contact`, `address`, `city`, `state`, `country`, `customer_id`, `order_id`) VALUES
(24, 'Asha', 'D', 'asha@gmail.com', '', 'A23,Royal Soc', 'Surat', 'Gujarat', 'India', 14, 41),
(25, 'Asha', 'D', 'asha@gmail.com', '', 'A23,Royal Soc', 'Surat', 'Gujarat', 'India', 14, 42),
(26, 'Vraj', 'shah', 'shah@gmail.com', '', 'isanpur', 'Ahmedabad', 'Gujarat', 'India', 15, 43);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(123) NOT NULL,
  `qty` varchar(123) NOT NULL,
  `pimg` varchar(156) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `price`, `qty`, `pimg`, `customer_id`) VALUES
(100, 47, '23', '1', 'pazzta-mushroom-instant-maggi-original-imag3sjztzeqtnrj.jpeg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`) VALUES
(24, 'Snacks & Beverages'),
(25, 'Packaged Food'),
(26, 'Staples');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `city` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `s_id`, `city`) VALUES
(5, 4, 'Surat'),
(6, 4, 'Ahmedabad'),
(7, 5, 'Kalbadevi'),
(8, 5, 'Fort'),
(9, 6, 'valpoi');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `lname` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `email`, `contact`, `password`, `address`, `city`, `state`, `country`) VALUES
(14, 'Asha', 'D', 'asha@gmail.com', '8765432222', 'asha', 'A23,Royal Soc', 'Surat', 'Gujarat', 'India'),
(15, 'Vraj', 'shah', 'shah@gmail.com', '9876799073', 'vraj', 'isanpur', 'Ahmedabad', 'Gujarat', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customerid` varchar(111) NOT NULL,
  `message` varchar(111) NOT NULL,
  `date` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `message` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `date`, `customer_id`, `total_amount`, `status`) VALUES
(41, '2022-01-31', 14, '340', 'completed'),
(42, '2022-01-31', 14, '20', 'completed'),
(43, '2022-02-10', 15, '20', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_items_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_items_id`, `product_id`, `quantity`, `order_id`, `pname`, `price`, `image`) VALUES
(79, 47, 9, 41, 'Maggi Mushroom Pasta  (64 g)', '23.00', 'pazzta-mushroom-instant-maggi-original-imag3sjztzeqtnrj.jpeg'),
(80, 51, 1, 41, 'MADHUR Pure and Hygienic Sugar  (1 kg)', '133.00', '1-pure-and-hygenic-sugar-pouch-refined-sugar-madhur-crystal-original-imafu76x45yhsyga.jpeg'),
(81, 46, 1, 42, 'DORITOS Sweet Chilli Flavour Nachos  (44 g)', '20.00', 'sweet-chilli-flavour-doritos-original-imag7cd9hkbu3zak.jpeg'),
(82, 46, 1, 43, 'DORITOS Sweet Chilli Flavour Nachos  (44 g)', '20.00', 'sweet-chilli-flavour-doritos-original-imag7cd9hkbu3zak.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL,
  `price` varchar(111) NOT NULL,
  `company` varchar(111) NOT NULL,
  `cat` int(11) NOT NULL,
  `subcat` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `description`, `price`, `company`, `cat`, `subcat`, `img`) VALUES
(46, 'DORITOS Sweet Chilli Flavour Nachos  (44 g)', 'Corn, Edible Vegetable Oil (Palmolein Oil), Sugar, Spices and Condiments ', '20', 'DORITOS', 24, 28, 'sweet-chilli-flavour-doritos-original-imag7cd9hkbu3zak.jpeg'),
(47, 'Maggi Mushroom Pasta  (64 g)', 'A delightful bowl of the Maggi Pazzta Mushroom pasta can satiate your mid-meal hunger pangs with ease. It combi', '23', 'Maggi', 25, 32, 'pazzta-mushroom-instant-maggi-original-imag3sjztzeqtnrj.jpeg'),
(48, 'Saffola Honey  (20% Extra in Pack)  (250 g)', 'iscover the taste of 100% purity in every drop of Saffola Honey! Every batch of Saffola Honey is tested using t', '108', 'Saffola', 25, 33, 'honey-saffola-original-imag3ktyycqnbzdb.jpeg'),
(49, '7UP Can  (250 ml)', '\r\nYou can drink a can of lemon and lime flavoured 7UP to feel replenished and positive. You can take a sip of i', '27', '7up', 24, 30, 'na-can-7up-original-imafz4spbqk9s2vx.jpeg'),
(50, 'Bikano Raj Bhog Box  (1 kg)', 'Raj Bhog,laddu', '674', 'Bikano', 25, 34, '1-raj-bhog-laddu-bikano-original-imaffgfys4t2szde.jpeg'),
(51, 'MADHUR Pure and Hygienic Sugar  (1 kg)', 'Hygienic Sugar', '133', 'MADHUR', 26, 38, '1-pure-and-hygenic-sugar-pouch-refined-sugar-madhur-crystal-original-imafu76x45yhsyga.jpeg'),
(53, 'AASHIRVAAD Atta with Multigrains  (5 kg)', ' It is pertinent to note that, actual product packaging and materials may contain more and/or different informa', '455', 'AASHIRVAAD ', 26, 36, '1-atta-with-multigrains-1-multigrain-flour-aashirvaad-original-imafy2vzhha44kgx.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `ship_id` int(11) NOT NULL,
  `fname` varchar(222) NOT NULL,
  `lname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `zip` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`ship_id`, `fname`, `lname`, `email`, `address`, `city`, `state`, `zip`, `country`, `customer_id`, `order_id`) VALUES
(80, 'asha', 'd', 'asha@gmail.com', 'q', 'surat', 'gujarat', '395010', 'IN', 14, 41),
(81, 'a', 'a', 'a@gmail.com', 'a', 'a', 'a', 'a', 'IN', 14, 42),
(82, 'Rushabh', 'Shah', 'rusabh@gmail.com', 'Gujarat', 'Ahmedabad', 'Gujarat', '380008', 'IN', 15, 43);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `s_name`) VALUES
(4, 'Gujarat'),
(5, 'M.H'),
(6, 'GOA');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `sc` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `c`, `sc`) VALUES
(28, 24, 'chips'),
(29, 24, 'Juices'),
(30, 24, 'Soft Drinks'),
(31, 24, 'Water'),
(32, 25, 'Pasta'),
(33, 25, 'Honey'),
(34, 25, 'Sweets'),
(35, 26, 'Ghee'),
(36, 26, 'Atta'),
(37, 26, 'Rice'),
(38, 26, 'Suger');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id`, `customer_id`, `product_id`) VALUES
(9, 14, 47),
(10, 14, 51);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `billingaddress`
--
ALTER TABLE `billingaddress`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_items_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat` (`cat`),
  ADD KEY `sub-cat` (`subcat`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`ship_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c` (`c`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `billingaddress`
--
ALTER TABLE `billingaddress`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `ship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `area_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `city` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `billingaddress`
--
ALTER TABLE `billingaddress`
  ADD CONSTRAINT `billingaddress_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `billingaddress_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcat`) REFERENCES `subcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cat`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD CONSTRAINT `shipping_address_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shipping_address_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`c`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
