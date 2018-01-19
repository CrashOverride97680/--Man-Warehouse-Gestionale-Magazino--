-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 19, 2018 alle 17:23
-- Versione del server: 10.1.26-MariaDB
-- Versione PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `man_warehouse`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `access`
--

CREATE TABLE `access` (
  `COD_ACCESS` int(10) NOT NULL,
  `USER_ACCESS` varchar(4) NOT NULL,
  `IP_ACCESS` varchar(20) NOT NULL,
  `DATE_ACCESS` varchar(10) NOT NULL,
  `HOURS_ACCESS` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='TABLE FOR CONTROLL ACCESS, TABELLA CONTROLLO ACCESSI';

-- --------------------------------------------------------

--
-- Struttura della tabella `movements`
--

CREATE TABLE `movements` (
  `ID_MOVEMENT` varchar(4) NOT NULL,
  `TYPE` varchar(1) NOT NULL,
  `DATE_MOVEMENT` varchar(10) NOT NULL,
  `AMOUNT` int(6) NOT NULL,
  `PRICE` decimal(8,0) NOT NULL,
  `ID_PRODUCT` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='(IT)TABELLA MOVIMENTI , (EN)TABLE MOVEMENT';

-- --------------------------------------------------------

--
-- Struttura della tabella `products`
--

CREATE TABLE `products` (
  `ID_PRODUCT` varchar(4) NOT NULL,
  `DESCRIPTION` varchar(50) NOT NULL,
  `GIACENZ` int(8) NOT NULL,
  `SHUFFLE_POINT` int(8) NOT NULL,
  `STOCK_SAFETY` int(11) NOT NULL,
  `UNIT_MEASURE` varchar(2) NOT NULL,
  `POSITION` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='(IT)TABELLA PRODOTTI , (EN)TABLE PRODUCTS';

-- --------------------------------------------------------

--
-- Struttura della tabella `providers`
--

CREATE TABLE `providers` (
  `COD_SUPPLIER` int(4) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `REG_OFFICE` varchar(100) NOT NULL,
  `TYPE_OF_SUPPLY` varchar(100) NOT NULL,
  `GOODS` varchar(100) NOT NULL,
  `TELEPHONE_NUMBER` varchar(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `COMPANY` varchar(50) NOT NULL,
  `SHIPPING_TIME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='//TABLE_PROVIDERS - TABELLA FORNITORI';

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `COD_USERS` int(3) NOT NULL,
  `NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `USER` int(4) NOT NULL,
  `PASSWORD` varchar(150) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ADMINISTRATOR` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='TABLE USERS';

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`COD_ACCESS`);

--
-- Indici per le tabelle `movements`
--
ALTER TABLE `movements`
  ADD PRIMARY KEY (`ID_MOVEMENT`),
  ADD KEY `ID_PRODUCT` (`ID_PRODUCT`);

--
-- Indici per le tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID_PRODUCT`);

--
-- Indici per le tabelle `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`COD_SUPPLIER`),
  ADD UNIQUE KEY `COD_SUPPLIER` (`COD_SUPPLIER`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`COD_USERS`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `access`
--
ALTER TABLE `access`
  MODIFY `COD_ACCESS` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT per la tabella `providers`
--
ALTER TABLE `providers`
  MODIFY `COD_SUPPLIER` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `COD_USERS` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `movements`
--
ALTER TABLE `movements`
  ADD CONSTRAINT `movements_ibfk_1` FOREIGN KEY (`ID_PRODUCT`) REFERENCES `products` (`ID_PRODUCT`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
