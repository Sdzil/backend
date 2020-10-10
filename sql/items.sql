
--
-- Database: `items`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

--
-- Dumping data for table `sample_datas`
--

INSERT INTO `items` (`id`, `itemName`, `price`, `image_url`, `content`, `created_at`, `updated_at`) VALUES
(1, 'John', '101', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice pric','2019-10-11 21:39:09', '2019-10-11 21:39:09'),
(2, 'Peter', '102', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-11 21:39:09', '2019-10-11 21:39:09'),
(3, 'Larry', '1234', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-11 21:39:09', '2019-10-11 21:39:09'),
(4, 'Tabitha', '1513', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale, if you can not give me a nice price', '2019-10-11 21:39:09', '2019-10-11 21:39:09'),
(5, 'Susan', '23151', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 00:30:00', '2019-10-14 00:30:00'),
(6, 'William', '73453', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 00:30:00', '2019-10-14 00:30:00'),
(7, 'Bessie', '23462', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 00:30:00', '2019-10-14 00:30:00'),
(8, 'Eva', '235263', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 00:30:00', '2019-10-14 00:30:00'),
(9, 'Dorothy', '215235', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 03:30:00', '2019-10-14 03:30:00'),
(10, 'Nannie', '53636', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 03:30:00', '2019-10-14 03:30:00'),
(11, 'Gerald', '235634', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 04:30:00', '2019-10-14 04:30:00'),
(12, 'Judith', '12256', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 04:30:00', '2019-10-14 04:30:00'),
(13, 'Betty', '8354551', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 13:30:00', '2019-10-14 13:30:00'),
(14, 'Delores', '237474', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 13:30:00', '2019-10-14 13:30:00'),
(15, 'Gloria', '856342', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 06:30:00', '2019-10-14 06:30:00'),
(16, 'Bobbie', '12562346', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 06:30:00', '2019-10-14 06:30:00'),
(17, 'Paul', '63647', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 13:30:00', '2019-10-14 13:30:00'),
(18, 'Ryan', '15377', 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 13:30:00', '2019-10-14 13:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sample_datas`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sample_datas`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
