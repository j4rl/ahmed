-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 19 okt 2018 kl 09:39
-- Serverversion: 10.1.35-MariaDB
-- PHP-version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `ahmed`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `tbl_cases`
--

CREATE TABLE `tbl_cases` (
  `caseID` int(11) NOT NULL,
  `started` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Case file start time',
  `case_responder` int(11) NOT NULL COMMENT 'Who received this case',
  `case_happened` varchar(50) NOT NULL COMMENT 'When did it happen',
  `local_department` varchar(50) NOT NULL COMMENT 'Local department',
  `case_manager` int(11) NOT NULL COMMENT 'Name, adress, phone, email',
  `case_client` int(11) NOT NULL COMMENT 'Name, adress, phone, email',
  `case_poi` int(11) NOT NULL COMMENT 'Persons of intrest in this case, name, adress, phone, email',
  `current_contract` varchar(255) NOT NULL,
  `client_what-happened` text NOT NULL,
  `background` text NOT NULL,
  `current_situation` text NOT NULL,
  `contractors_comment` text NOT NULL,
  `union_comment` text NOT NULL,
  `student_perspective` text NOT NULL,
  `other_comment` text NOT NULL,
  `timeframe` varchar(255) NOT NULL,
  `local_agreements` varchar(255) NOT NULL,
  `practice` varchar(255) NOT NULL,
  `policys` varchar(255) NOT NULL,
  `are_there_regulations_in_laws-or-contracts` varchar(255) NOT NULL,
  `mediator_contacted_at` varchar(255) NOT NULL,
  `what_do_client_want` text NOT NULL,
  `union_practice` text NOT NULL,
  `what_do_contractor_want` varchar(255) NOT NULL,
  `who_can_decide` varchar(255) NOT NULL,
  `considerations` text NOT NULL,
  `what_do_we_do_now` text NOT NULL,
  `who_does_what_and_when` text NOT NULL,
  `who_do_we_contact` text NOT NULL,
  `negotiation_request` text NOT NULL,
  `arguments` text NOT NULL,
  `recruitment_steps` text NOT NULL,
  `own_reflection` text NOT NULL,
  `feedback_to_client` text NOT NULL,
  `result` text NOT NULL,
  `analyses` text NOT NULL,
  `recruitment_communication` text NOT NULL,
  `feedback_to_mediator` text NOT NULL,
  `case_knowledge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(8) NOT NULL,
  `Town` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `userlevel` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1-client, 2-collegue, 3-management, 4-contractor, 5-other intressents, 8- union representative, 9- mediator'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `tbl_cases`
--
ALTER TABLE `tbl_cases`
  ADD PRIMARY KEY (`caseID`),
  ADD KEY `case_responder` (`case_responder`,`case_manager`,`case_client`,`case_poi`),
  ADD KEY `case_manager` (`case_manager`),
  ADD KEY `case_client` (`case_client`),
  ADD KEY `case_poi` (`case_poi`);

--
-- Index för tabell `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `tbl_cases`
--
ALTER TABLE `tbl_cases`
  MODIFY `caseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `tbl_cases`
--
ALTER TABLE `tbl_cases`
  ADD CONSTRAINT `tbl_cases_ibfk_1` FOREIGN KEY (`case_responder`) REFERENCES `tbl_users` (`userID`),
  ADD CONSTRAINT `tbl_cases_ibfk_2` FOREIGN KEY (`case_manager`) REFERENCES `tbl_users` (`userID`),
  ADD CONSTRAINT `tbl_cases_ibfk_3` FOREIGN KEY (`case_client`) REFERENCES `tbl_users` (`userID`),
  ADD CONSTRAINT `tbl_cases_ibfk_4` FOREIGN KEY (`case_poi`) REFERENCES `tbl_users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
