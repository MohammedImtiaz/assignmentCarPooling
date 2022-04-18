--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(70) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `image`, `category`, `price`) VALUES
(1, 'Car1', 'car.jpg', 'Car', 1000),
(2, 'Car2', 'car.jpg', 'Car', 2000),
(3, 'Car3', 'car.jpg', 'Car', 3000),
(4, 'Car4', 'car.jpg', 'Car', 4000),
(5, 'Car5', 'car.jpg', 'Car', 5000),
(6, 'Car6', 'car.jpg', 'Car', 5500),
(7, 'Car7', 'car.jpg', 'Car', 8000),
(8, 'Car8', 'car.jpg', 'Car', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

