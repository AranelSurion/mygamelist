SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game` text COLLATE utf8_turkish_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `platform` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `priority` tinyint(4) NOT NULL,
  `genre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `medium` enum('Retail','Steam','Digital','Other') COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=22 ;

INSERT INTO `collection` (`id`, `game`, `status`, `platform`, `rating`, `priority`, `genre`, `medium`) VALUES
(1, 'Titanfall', 'Playing', 'PC', 9, 3, 'FPS', 'Digital'),
(2, 'Add yours!', 'On Hold', 'PC', 7, 0, 'Other', 'Steam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
