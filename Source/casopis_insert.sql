-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 05. pro 2023, 22:54
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `rsp`
--

--
-- Vypisuji data pro tabulku `casopis`
--

INSERT INTO `casopis` (`id_casopisu`, `rok`, `rocnik`, `cislo`) VALUES
(1, 2020, 1, 1),
(2, 2020, 1, 2),
(3, 2020, 1, 3),
(4, 2021, 2, 1),
(5, 2021, 2, 2),
(6, 2022, 2, 3),
(7, 2022, 3, 1),
(8, 2022, 3, 2),
(9, 2022, 3, 4),
(10, 2023, 4, 1),
(11, 2023, 4, 2),
(12, 2023, 4, 3),
(13, 2023, 4, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
