
--
-- Base de données : `inuka_4emeannee_projet_amp_docker`
--
CREATE DATABASE IF NOT EXISTS inuka_4emeannee_projet_amp_docker;
use inuka_4emeannee_projet_amp_docker;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adresse` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `codepostal` varchar(15) NOT NULL,
  `longitude` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `latitude` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nameUser` varchar(100) NOT NULL,
  `codeUser` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
