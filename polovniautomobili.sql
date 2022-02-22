-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 07:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polovniautomobili`
--

-- --------------------------------------------------------

--
-- Table structure for table `automobil`
--

CREATE TABLE `automobil` (
  `id` int(11) NOT NULL,
  `brend` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL,
  `opis` varchar(2000) COLLATE utf8mb4_croatian_ci NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_croatian_ci NOT NULL,
  `karoserija_id` int(11) NOT NULL,
  `vlasnik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `automobil`
--

INSERT INTO `automobil` (`id`, `brend`, `model`, `opis`, `url`, `karoserija_id`, `vlasnik_id`) VALUES
(1, 'Mercedes', 'E250', 'Luksuzna limuzina, pruza veliki komfor u voznji. Elegantan iznutra, sa dva displeja, 8,4, i manjim 5 inca. Odlican izbor za biznismene i ljude sa velikom porodicom. </br></br>Cena: <em><strong>$41.999</strong></em></br>Kilometraza: <em><strong>30.454km</strong></em></br>Godiste: <em><strong>2018</strong></em>', 'https://bloximages.newyork1.vip.townnews.com/richmond.com/content/tncms/assets/v3/classifieds/b/fd/bfd8f952-2440-5362-b69f-6abaccc1044a/5e632dc7a2893.image.jpg', 1, 1),
(7, 'Porsche', 'Panamera Turbo S', 'Sa sobom nosi prepoznatljivu eleganciju porseovih automobila. Karakterise ga velika prednja strana automobila, sa upecatljivim znakom popea, i lepim i dugackim svetlima.Unutrasnjost vozila je opremljena opremom najnovije tehnologije, a sve to uz kozna sedista, pruza neponovljivo iskustvo prilikom voznje. </br></br>Cena: <em><strong>$114.999</strong></em></br>KilometraÅ¾a: <em><strong>5.433km</strong></em></br>GodiÅ¡te: <em><strong>2019.</strong></em>', 'https://www.topgear.com/sites/default/files/styles/16x9_1280w/public/images/news-article/2020/10/267665e9af13e4fe61904f32e3c4df1a/pa21p4uix0001.jpg?itok=7BAKAp7s', 1, 1),
(8, 'Audi', 'S5', 'Jedan od najlepsih, kao i najbrzih audijevih modela. Ispod haube radi motor od 5000cm3 koji proizvodi 430ks. Odlikuje ga upecatljiva audijeva elegancija, uz prelepu crvenu boju, predstavlja pravi izbor za sve ljubitelje sportskih kupea. </br> </br>Cena: <em><strong>$64.999</strong></em></br>Kilometraza: <em><strong>9.255km</strong></em></br>Godiste: <em><strong>2018.</strong></em>', 'https://media.ed.edmunds-media.com/audi/s5/2020/oem/2020_audi_s5_coupe_prestige-quattro_fq_oem_2_1600.jpg', 3, 1),
(9, 'BMW', '320i', 'Stigla je nova BMW trojka. Spoljasnjost karakterisu veoma ostre ivice, koje doprinose izgledu agresivnosti, ali i sportskog automobila. Nova trojka je nesto duza od starije verzije, ali to je ne sprecava da bude isto toliko atraktivna i sportski nastrojena. Enterijer karakterise centralni displej od 5 inÄca, kao i crna kozna sedista. </br> </br>Cena: <em><strong>$41.999</strong></em></br>Kilometraza: <em><strong>5.433km</strong></em></br>Godiste: <em><strong>2020.</strong></em>', 'https://mediacloud.carbuyer.co.uk/image/private/s--hZkf71Yq--/v1579631359/carbuyer/2018/10/p90323664_highres.jpg', 3, 1),
(13, 'Range Rover', 'Velar', 'Odlican dzip, pogodan za dugacke voznje, kako po suvim, tako i po vlaznim terenima.Dosta mesta za sedenje, ogroman prostor u gepeku. <br/> <br/>Cena: <em><strong>$54.999</strong></em><br/>Kilometraza: <em><strong>19.758km</strong></em><br/>Godiste: <em><strong>2018.</strong></em>', 'https://carsguide-res.cloudinary.com/image/upload/f_auto%2Cfl_lossy%2Cq_auto%2Ct_default/v1/editorial/2017-range-rover-Velar-se-d300-r-dynamic-suv-white-richard-berry-1200x800-%282%29.jpg', 5, 1),
(14, 'BMW', 'M2', 'Jedan od najbrzih BMW automobila. Mali kupe koji poseduje motor od 4000cm3 koji proizvodi 370ks. Sjajan spoljasnji izgled koji naglasava agresivnost i aerodinamiku. Unutrasnjost se nije nesto menjala u odnosu na starije modele, ali idalje predstavlja veoma urednu, jedinstvenu i kompaktnu celinu. </br> </br>Cena: <em><strong>$56.999</strong></em></br>Kilometraza: <em><strong>15.185km</strong></em></br>Godiste: <em><strong>2020.</strong></em>', 'https://mir-s3-cdn-cf.behance.net/project_modules/fs/fd01c094269565.5e7a8d4cc1568.jpg', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `karoserija`
--

CREATE TABLE `karoserija` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `karoserija`
--

INSERT INTO `karoserija` (`id`, `naziv`) VALUES
(1, 'limuzina'),
(2, 'karavan'),
(3, 'kupe'),
(4, 'hedzbek'),
(5, 'SUV');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `korisnicko_ime` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL,
  `lozinka` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL,
  `telefon` varchar(50) COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `korisnicko_ime`, `lozinka`, `telefon`) VALUES
(1, 'peraperic', 'peraperic', '0601234567'),
(2, 'jova', 'jova', '0652397145'),
(3, 'mika', 'mika', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobil`
--
ALTER TABLE `automobil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vlasnik` (`vlasnik_id`),
  ADD KEY `fk_karoserija` (`karoserija_id`);

--
-- Indexes for table `karoserija`
--
ALTER TABLE `karoserija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobil`
--
ALTER TABLE `automobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `karoserija`
--
ALTER TABLE `karoserija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `automobil`
--
ALTER TABLE `automobil`
  ADD CONSTRAINT `fk_karoserija` FOREIGN KEY (`karoserija_id`) REFERENCES `karoserija` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vlasnik` FOREIGN KEY (`vlasnik_id`) REFERENCES `korisnik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
