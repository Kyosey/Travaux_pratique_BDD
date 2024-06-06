CREATE DATABASE monsite DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE monsite;

/* Création de la table client */
CREATE TABLE `client` (
  `NumClient` int(10) NOT NULL,
  `NomClient` varchar(40) NOT NULL,
  `PreClient` varchar(40) NOT NULL,
  PRIMARY KEY (`NumClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Insertion des données de la table client */
INSERT INTO `client`(`NumClient`, `NomClient`, `PreClient`) VALUES
(0001, 'Froute', 'Thomas'),
(0002, 'Basset', 'Amandine'),
(0003, 'Barba', 'Damien'),
(0004, 'Kelly', 'Cedric'),
(0005, 'Green', 'Fiona'),
(0006, 'Butler', 'Hermione'),
(0007, 'Flynn', 'Quinn'),
(0008, 'Byrd', 'Paul'),
(0009, 'Liang', 'Olivia'),
(0010, 'Acosta', 'Jennifer'),
(0011, 'Mooney', 'Timothée'),
(0012, 'Marshall', 'Charles'),
(0013, 'Wilder', 'Doris'),
(0014, 'Silva', 'Michael'),
(0015, 'Baldwin', 'Serge');