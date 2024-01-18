-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 07:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajasthantour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `hotel_pic` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `hotel_rating` int(11) DEFAULT NULL,
  `no_of_rooms` tinyint(2) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `title`, `hotel_pic`, `description`, `location`, `address`, `phone`, `hotel_rating`, `no_of_rooms`, `price`, `created_at`) VALUES
(10, 'AMANBAGH', '10.jpg', 'Ajabgarh, Rajasthan 301027, India', 'Ajabgarh Forest Range', 'Ajabgarh, Rajasthan 301027, India', '+91 1465 223 333', 5, 127, 500, '0000-00-00 00:00:00'),
(11, 'TAJ LAKE PALACE', '11.jpg', 'Taj Lake Palace is one of Ampersand\'s Top 10 Hotels in Rajasthan, Top 10 Romantic Retreats and Top 10 Venues for a Wedding or Party. A 273-year-old white marble palace, floating like a mirage in the centre of the serene and glassy Lake Pichola… Enchanting, iconic and with a fantastic sense of location, the Taj Lake Palace is possibly India’s most romantic hotel, and one of our favourites in Rajasthan. For those who are only in Udaipur for a short time then this is exactly where you need to be - it is the cherry on the cake for a tailor-made itinerary to Udaipur.', 'Lake Pichola', 'Pichola, Udaipur, Rajasthan 313001, India', '+91 294 242 8800', 5, 10, 1000, '0000-00-00 00:00:00'),
(12, 'RAMBAGH PALACE', '12.jpg', 'Rambagh Palace is one of Ampersand\'s Top Ten Hotels in Rajasthan and Top 10 Venues for a Wedding or Party. Dating back to 1835 and formerly the residence of the Maharaja Sawai Man Singh II and his queen, Rambagh Palace offers a luxurious stay in a soft, relaxing environment away from the bustling city centre of Jaipur. Peacocks strut across the lawns and Indian classical musicians play on the verandas at this wistfully romantic hotel. Over the years, it has played gracious host to several illustrious guests, including Lord Louis Mountbatten, Prince Charles and Jackie Kennedy.', 'near Hawa Mahal', 'Bhawani Singh Rd, Rambagh, Jaipur, Rajasthan 302005, India', '+91 141 238 5700', 5, 50, 900, '0000-00-00 00:00:00'),
(13, 'RAAS JODHPUR', '13.jpg', 'RAAS is one of Ampersand\'s Top 10 Boutique Hotels and Top 10 Hotels in Rajasthan. RAAS Jodhpur is an awesome little hotel designed to reflect the buzzing character of the old Blue City of Jodhpur, combining modern blue and rose sandstone blocks within an aged haveli. Brothers Nikhilendra and Dhananajaya Singh transformed what was once a family residence into Jodhpur’s first (and, in our opinion, finest) boutique hotel, comprising the four original 18th century havelis plus three more buildings which they constructed. It is one of India’s coolest heritage conversions, maintaining the character of the old haveli while creating a fresh, stylish retreat for guests to truly relax and absorb the surroundings. Another jaw-dropping hotel by RAAS, complementing their incredible sister hotel, RAAS Devigarh in Delwar, RAAS Jodhpur is perfect for a grittier and more authentic taste of Jodhpur.', 'Jodhpur', 'Tunwar ji ka Jhalra, Makrana Mohalla, Gulab Sagar Rd, Sagrar, Jodhpur, Rajasthan 342001, India', '+91 291 263 6455', 5, 20, 780, '0000-00-00 00:00:00'),
(14, 'AMAN-I-KHAS', '14.jpg', 'Aman-i-Khas is one of Ampersand\'s Top 10 Hotels in Rajasthan and Top 10 Safari Lodges in Asia. Aman-i-Khás is an exclusive wilderness camp set in rugged countryside on the outskirts of Ranthambore National Park, surrounded by the starkly beautiful Aravalli Hills.', 'near Ranthambore National Park', 'Village- Sherpur Khiljipur, near Ranthambore National Park, Sawai Madhopur, Rajasthan 322001, India', '+91 7462 252 052', 5, 25, 670, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bookings`
--

CREATE TABLE `hotel_bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `no_of_rooms` int(11) NOT NULL DEFAULT 0,
  `checkin_date` date DEFAULT NULL,
  `checkout_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_bookings`
--

INSERT INTO `hotel_bookings` (`id`, `user_id`, `hotel_id`, `no_of_rooms`, `checkin_date`, `checkout_date`) VALUES
(1, 8, 10, 4, '2023-03-25', '2023-04-02'),
(3, 8, 12, 2, '2023-03-30', '2023-04-01'),
(4, 8, 10, 5, '2023-03-24', '2023-03-30'),
(6, 8, 10, 3, '2023-03-22', '2023-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_type` tinyint(2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_type`, `email`, `password`, `created_at`) VALUES
(1, 'Admin', 'User', 1, 'admin@admin.com', '12345678', '2023-03-11 16:00:10'),
(2, 'Kapil', 'Kumar', 2, 'kaps.logic@gmail.com', '12345678', '2023-03-12 03:50:34'),
(3, 'Deepak', 'Kumar', 2, 'deepak@gmail.com', '12345678', '2023-03-12 03:51:00'),
(4, 'Sanjeev', 'Kumar', 2, 'sanjeev@gmail.com', '12345678', '2023-03-19 00:00:00'),
(8, 'Deepika', 'Padukone', 2, 'deepika@gmail.com', '12345678', '2023-03-22 08:11:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
