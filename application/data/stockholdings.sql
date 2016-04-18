
CREATE TABLE `holdings` (
  `id` int(11) NOT NULL,
  `stock` varchar(40) NOT NULL,
  `player` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 

INSERT INTO `holdings` (`id`, `stock`, `player`, `quantity`, `username`) VALUES
(1, 'BOND', 'Donald', 100, ''),
(3, 'TECH', 'Donald', 100, ''),
(7, 'GOLD', 'Henry', 1000, ''),
(9, 'OIL', 'George', 600, ''),
(10, 'IND', 'George', 100, '');