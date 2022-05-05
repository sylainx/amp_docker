
CREATE DATABASE IF NOT EXISTS `inuka_4emeannee_projet_amp_docker` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `inuka_4emeannee_projet_amp_docker`;

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `codepostal` varchar(15) NOT NULL,
  `longitude` varchar(40) DEFAULT NULL,
  `latitude` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `address` (`id`, `adresse`, `city`, `country`, `codepostal`, `longitude`, `latitude`) VALUES
(1, '55 Rue Jean Jacques Dessalines', 'Thomassique', 'Haiti', 'HT5420', NULL, NULL),
(2, '5 Rue Innovation', 'Tabarre', 'Haiti', 'HT6040', NULL, NULL),
(3, 'heii', 'hinche', 'haiti', 'dt399', '', ''),
(4, 'stenio vincent', 'hinche', 'haiti', 'ht03283', '', ''),
(5, 'village-créole', 'hinche', 'haiti', 'ht-4928', '', ''),
(6, 'village-créole', 'hinche', 'haiti', 'ht-4928', '', ''),
(7, 'village-créole', 'hinche', 'haiti', 'ht-4928', '', ''),
(8, 'djjd', '', '', '', '', ''),
(9, 'ddjj', 'jdjd', 'jjdjd', '', '', ''),
(10, 'Boulevard 18 octobre', 'petion-ville', 'Haiti', 'ht-6141', '', ''),
(11, 'Fermathe 45', 'Kenskoff', 'Haiti', 'HT-1667', '', ''),
(12, 'Impasse civil tabarre 44', 'tabarre', 'haiti', 'ht-3842', '', ''),
(13, 'santo', 'c-d-q', 'haiti', 'ht-3882', '', '');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `nameUser` varchar(100) NOT NULL,
  `codeUser` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `email`, `nameUser`, `codeUser`, `password`) VALUES
(5, 'berno@gmail.com', 'Joberno', 'user-455', '$2y$10$..h/jMefWE2xpCOYVcDAcuu4gNZ1cObAxlQafgNlY/t'),
(6, 'da@gmail.com', 'Dadensky', 'user-860', '$2y$10$43VY6bG5HEWNntajR6G2u.EalQ8xEStx1w9YAElRafU'),
(7, 'test@dff.com', 'Heguel', 'user-279', '$2y$10$xjT./pMrbIozz3vOuiJ/HeoWbPkzxuugERHVHF8dSr.'),
(8, 'lulu@gmail.com', 'ludens', 'user-568', '$2y$10$KT6MJwYaehogRuMSViKhuOfS9sqjura.k/ScdYbKwAp'),
(9, 'hello@gmail.com', 'Test user', 'user-369', '$2y$10$fCs9kc2azL2.ysbVHIMAne.hstRHIjMX9RPYgJp90MI'),
(11, 'hi2@gmail.com', 'john', 'user-379', '$2y$10$CzKleyB8YIU.MjsA6db0/uDuOhJNdLFyZY3otmIFvFC'),
(12, 'ss@ff.dd', 'fffffq', 'user-1080', '$2y$10$DQRdUTLoN0yPXwB6BcTWzetCt6wiODrzqMmJtCBH7CF'),
(13, 'ss@ff.ff', 'fffffq', 'user-850', '$2y$10$Aeh3mqZiSuF5uTdhi2rYUOjIFiXrtBKNcsb1tSFLqkE'),
(14, 'ddd@ssd.df', 'sss', 'user-190', '$2y$10$AvV3YSfqY8TTHY58G2sAquurbe4fJWCf9EOnKGBZe9jYn8i4bydBa'),
(15, 'ww@ww.wd', 'sss', 'user-858', '$2y$10$1nFKTwAH.EVaEIe4NJdSFu.UdgdOjNWyqCe2Q5mN42xG0bTlRBPn2');
COMMIT;
