-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Jan 16. 02:12
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `italok_test`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `product`
--

CREATE TABLE `product` (
  `name` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `alcohol` varchar(100) NOT NULL,
  `temperature` varchar(100) NOT NULL,
  `prod_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `product`
--

INSERT INTO `product` (`name`, `path`, `alcohol`, `temperature`, `prod_type`) VALUES
('Cherry Ripe', 'pic/cherry_ripe.png', '1', '0', 'Drinks'),
('Barackos-Chiás Bellini', 'pic/barackos_chias_bellini.png', '1', '0', 'Drinks'),
('Jeges-Vegyes Gyümölcsös Sangria', 'pic/jeges_vegyes_gyumolcsos_sangria.jpg', '1', '0', 'Drinks'),
('Epres Caipivodka', 'pic/epres_caipivodka.jpg', '1', '0', 'Drinks'),
('Cappuccino', 'pic/02CAPP3SUB-jumbo.jpg', '0', '1', 'Drinks'),
('Sajtos Lays', 'pic/ShotType1_540x540.jpg', '2', '2', 'Snack'),
('Sajtos Hagymás Lays Max', 'pic/5900259097682.jpg', '2', '2', 'Snack'),
('Kefires Fekete Áfonya Ital', 'pic/Tropicky-cucoriedkovy-smoothie-napoj.jpg', '0', '0', 'Drinks'),
('Jamaica Gyöngye', 'pic/depositphotos_5691816-stock-photo-banana-orange-smoothie.jpg', '0', '0', 'Drinks'),
('Trópusi Ananászital', 'pic/tropical-pineapple-slushie.jpg', '0', '0', 'Drinks'),
('Coco Banana', 'pic/pineapple-coconut-banana-smoothie.jpg', '0', '0', 'Drinks'),
('Janika Itala', 'pic/123466_zoldturmix03.jpg', '0', '0', 'Drinks'),
('Sós Pálcika', 'pic/20140923sos-palcika-ropi29.jpg', '2', '2', 'Snack'),
('Sajtos Popcorn', 'pic/k_Photo_Recipe Ramp Up_2022-02-Cheese-Popcorn_cheese-popcorn-2.jpg', '2', '2', 'Snack'),
('Sós Popcorn', 'pic/shutterstock_288476828.jpg', '2', '2', 'Snack'),
('Sárgabarack Krémleves', 'pic/28270377_4ba1a7919786fc23baee7a476bad4dc9_wm.jpg', '2', '0', 'Food'),
('Hagyományos Gulyásleves', 'pic/1580294768-dsK50Aofj_md.jpg', '2', '1', 'Food'),
('Marhapörkölt Galuskával', 'pic/2015-11-25_13_21_42.jpg', '2', '1', 'Food'),
('Birkapörkölt Burgonyával', 'pic/20933_vorosboros_birkaporkolt_n-201510170456.jpg', '2', '1', 'Food'),
('Melegszendvics', 'pic/crop_201701231337_melegszendvics.jpg', '2', '1', 'Food'),
('Pizza', 'pic/lead_Social_pizzateszta-tomoritett.jpg', '2', '1', 'Food'),
('Görögsaláta', 'pic/lead_Social_eredeti-gorog-salata.jpg', '2', '0', 'Food'),
('Uborkasaláta', 'pic/photo.jpg', '2', '0', 'Food'),
('Kaszinótojás', 'pic/29686331_4598683d7a941f1c95204be16df2c1b4_wm.jpg', '2', '0', 'Food'),
('Sushi', 'pic/20200731sushi-abc-kezdoknek1.jpg', '2', '0', 'Food'),
('Macchiato', 'pic/nespresso-recipes-Iced-Lungo-Macchiato.jpg', '0', '1', 'Drinks'),
('Jegeskávé', 'pic/21667-easy-iced-coffee-ddmfs-4x3-0093-7becf3932bd64ed7b594d46c02d0889f.jpg', '0', '0', 'Drinks'),
('Americano', 'pic/Americano-Coffee-thmbnail-500x375.jpg', '0', '1', 'Drinks'),
('Latte', 'pic/how-to-make-a-latte-at-home.jpg', '0', '1', 'Drinks'),
('Bloody Mary', 'pic/bloody-mary-a2983ba.jpg', '1', '0', 'Drinks');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
