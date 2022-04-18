
--
-- Database: `carpolling`
--

-- --------------------------------------------------------

--
-- Table structure for table `carpolling`
--

CREATE TABLE `carpolling` (
  `employee_id` int(10) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carpolling`
--

INSERT INTO `carpolling` (`employee_id`, `destination`, `email`, `price`) VALUES
(101, '32 block', '101@gmail.com', '1000');
COMMIT;
