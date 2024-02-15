-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Lut 2024, 09:54
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `3pir_2_pracownicy_w_kolorze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `color` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `first_name`, `last_name`, `email`, `gender`, `ip_address`, `color`) VALUES
(1, 'Allissa', 'Phelips', 'aphelips0@archive.org', 'Cisgender Male', '49.23.91.194', '#32c8da'),
(2, 'Monty', 'Episcopio', 'mepiscopio1@google.nl', 'FTM', '172.193.219.190', '#14449c'),
(3, 'Ariana', 'Ockendon', 'aockendon2@51.la', 'Neither', '185.63.140.242', '#3dcac1'),
(4, 'Reinold', 'Tribe', 'rtribe3@prnewswire.com', 'Gender Variant', '17.65.78.237', '#883b88'),
(5, 'Lauralee', 'McAmish', 'lmcamish4@unicef.org', 'Transgender Man', '253.254.73.21', '#1e56fe'),
(6, 'Finn', 'Masse', 'fmasse5@berkeley.edu', 'Transsexual Male', '233.107.161.41', '#5a36e0'),
(7, 'Brady', 'Buey', 'bbuey6@chronoengine.com', 'Gender Questioning', '44.89.212.196', '#4d4795'),
(8, 'Laurie', 'MacKeeg', 'lmackeeg7@columbia.edu', 'Non-binary', '76.204.251.8', '#aa0361'),
(9, 'Francoise', 'Stollenwerck', 'fstollenwerck8@cafepress.com', 'Androgynous', '108.175.33.0', '#1c6670'),
(10, 'Amanda', 'Stuehmeier', 'astuehmeier9@phpbb.com', 'Male to Female', '81.111.214.134', '#25760a'),
(11, 'Aloysia', 'Frend', 'afrenda@hao123.com', 'Non-binary', '66.95.42.52', '#398d97'),
(12, 'Licha', 'Arkow', 'larkowb@ox.ac.uk', 'Androgynous', '210.234.196.73', '#e3ac91'),
(13, 'Lucio', 'Margett', 'lmargettc@squidoo.com', 'Transgender Female', '88.198.253.10', '#14f85e'),
(14, 'Sargent', 'Widocks', 'swidocksd@list-manage.com', 'Gender Fluid', '38.118.57.173', '#194c7c'),
(15, 'Charmaine', 'Boldry', 'cboldrye@blogspot.com', 'Transgender', '112.162.8.180', '#baded9'),
(16, 'Andrei', 'Badder', 'abadderf@tmall.com', 'Trans Female', '27.135.130.135', '#e11865'),
(17, 'Penni', 'Dargan', 'pdargang@ning.com', 'Cis Woman', '101.10.26.16', '#a0700a'),
(18, 'Carey', 'Setchell', 'csetchellh@weibo.com', 'Transgender Woman', '62.33.247.139', '#101d6b'),
(19, 'Cesaro', 'McReedy', 'cmcreedyi@oaic.gov.au', 'Cisgender Female', '53.216.57.245', '#74da32'),
(20, 'Keane', 'Belasco', 'kbelascoj@sohu.com', 'Non-binary', '236.109.198.232', '#08f27d'),
(21, 'Pier', 'Balaison', 'pbalaisonk@unesco.org', 'Transsexual Female', '84.198.53.247', '#b92460'),
(22, 'Ricki', 'Moine', 'rmoinel@infoseek.co.jp', 'MTF', '146.136.255.113', '#7c3dc5'),
(23, 'Cindee', 'Dunnett', 'cdunnettm@ocn.ne.jp', 'Transsexual', '221.233.100.131', '#db9de7'),
(24, 'Devonna', 'Tothe', 'dtothen@twitpic.com', 'Transsexual Man', '33.40.70.191', '#3cdd0e'),
(25, 'Bridget', 'Perrett', 'bperretto@hao123.com', 'Cisgender Woman', '119.255.37.143', '#834d01'),
(26, 'Maiga', 'Cradock', 'mcradockp@apple.com', 'Trans Woman', '97.183.93.84', '#c80f60'),
(27, 'Doug', 'Sirkett', 'dsirkettq@vimeo.com', 'MTF', '64.90.171.190', '#2d4e81'),
(28, 'Brady', 'Rogez', 'brogezr@macromedia.com', 'Transgender Male', '199.249.243.34', '#41c82a'),
(29, 'Jacky', 'Jancic', 'jjancics@linkedin.com', 'Transgender', '198.179.225.178', '#34331d'),
(30, 'Romain', 'Itzkovitch', 'ritzkovitcht@wordpress.org', 'Trans Female', '159.191.63.127', '#7e9dfb'),
(31, 'Pepita', 'Tremmil', 'ptremmilu@ustream.tv', 'Transgender Man', '57.6.3.70', '#c9e983'),
(32, 'Dorrie', 'De Pietri', 'ddepietriv@theatlantic.com', 'Cis Man', '108.163.136.74', '#9d9d3f'),
(33, 'Yance', 'Rycroft', 'yrycroftw@arstechnica.com', 'Trans Man', '243.244.113.192', '#666a12'),
(34, 'Pia', 'Balharrie', 'pbalharriex@shareasale.com', 'Pangender', '134.131.36.174', '#f1ad34'),
(35, 'Angele', 'Po', 'apoy@google.ru', 'Trans Female', '31.152.73.239', '#a349e2'),
(36, 'Zita', 'Dunks', 'zdunksz@stumbleupon.com', 'Transgender Man', '39.209.85.222', '#a4f3da'),
(37, 'Linus', 'Rossbrook', 'lrossbrook10@geocities.com', 'Transgender', '181.57.30.85', '#bfae46'),
(38, 'Udell', 'Venables', 'uvenables11@vimeo.com', 'Female to Male', '152.87.170.197', '#9b2a81'),
(39, 'Mathias', 'Freschi', 'mfreschi12@printfriendly.com', 'Neutrois', '46.53.10.94', '#5097c6'),
(40, 'Marji', 'Keerl', 'mkeerl13@globo.com', 'Cis Male', '185.186.206.116', '#c0ee74'),
(41, 'Elberta', 'Padbery', 'epadbery14@pen.io', 'Trans', '0.201.248.17', '#973e58'),
(42, 'Mikol', 'Glasson', 'mglasson15@mapy.cz', 'Androgyne', '255.59.52.195', '#53cb9b'),
(43, 'Regen', 'Palluschek', 'rpalluschek16@blog.com', 'Trans Man', '70.67.178.118', '#38eee0'),
(44, 'Boote', 'Klima', 'bklima17@stanford.edu', 'Transsexual Woman', '113.169.93.51', '#b301a2'),
(45, 'Netti', 'Keeble', 'nkeeble18@ihg.com', 'Cis', '189.231.154.20', '#06f795'),
(46, 'Adrianne', 'Osselton', 'aosselton19@jalbum.net', 'Transmasculine', '18.153.170.134', '#880357'),
(47, 'Verile', 'Loxton', 'vloxton1a@about.me', 'Cisgender Woman', '114.202.46.146', '#1203de'),
(48, 'Kiri', 'Southworth', 'ksouthworth1b@hhs.gov', 'Cis Woman', '70.88.124.240', '#14dca4'),
(49, 'Luciana', 'Hubber', 'lhubber1c@imgur.com', 'Pangender', '6.20.91.218', '#940fa9'),
(50, 'Rodger', 'Moulton', 'rmoulton1d@deliciousdays.com', 'Cis Female', '63.42.214.137', '#bacf9f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
