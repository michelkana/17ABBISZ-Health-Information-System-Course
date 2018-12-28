-- phpMyAdmin SQL Dump
-- version 2.6.2-Debian-3sarge6
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Czas wygenerowania: 15 Gru 2013, 21:46
-- Wersja serwera: 4.1.11
-- Wersja PHP: 4.3.10-22
-- 
-- Baza danych: `dunikkat`
-- 

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `Patients`
-- 

DROP TABLE IF EXISTS `Patients`;
CREATE TABLE `Patients` (
  `patient_id` int(11) NOT NULL auto_increment,
  `patient_name` varchar(60) default NULL,
  `patient_age` int(11) default NULL,
  `patient_birth_number` int(11) default NULL,
  PRIMARY KEY  (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- 
-- Zrzut danych tabeli `Patients`
-- 

INSERT INTO `Patients` VALUES (11, 'Shepherd Ginny', 4, 872365);
INSERT INTO `Patients` VALUES (12, 'Galderman Johny', 36, 672387);
INSERT INTO `Patients` VALUES (13, 'Whitman Margaret', 52, 534523);
INSERT INTO `Patients` VALUES (14, 'Dale Gwen', 83, 345214);
INSERT INTO `Patients` VALUES (15, 'Bernhard  Rue', 74, 345635);
INSERT INTO `Patients` VALUES (16, 'Mellark Miro', 28, 234521);
INSERT INTO `Patients` VALUES (17, 'Pimplebottom Cynthia', 15, 957323);
INSERT INTO `Patients` VALUES (18, 'Collins Eric', 19, 235689);
INSERT INTO `Patients` VALUES (19, 'Robinson Will', 43, 237854);
INSERT INTO `Patients` VALUES (20, 'Bell Agnes', 17, 237654);
INSERT INTO `Patients` VALUES (21, 'Robert Rob', 75, 19381212);
INSERT INTO `Patients` VALUES (22, 'Andrzej Nocak', 3, 2147483647);

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `Visits`
-- 

DROP TABLE IF EXISTS `Visits`;
CREATE TABLE `Visits` (
  `visit_id` int(11) NOT NULL auto_increment,
  `patient_id` int(11) default NULL,
  `start_date` date default NULL,
  `end_date` date default NULL,
  `doctor_id` int(11) default NULL,
  PRIMARY KEY  (`visit_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

-- 
-- Zrzut danych tabeli `Visits`
-- 

INSERT INTO `Visits` VALUES (4, 11, '2010-10-10', '0000-00-00', 2);
INSERT INTO `Visits` VALUES (5, 12, '2008-11-12', '2009-10-10', 2);
INSERT INTO `Visits` VALUES (6, 11, '2010-10-10', '2010-10-25', 2);
INSERT INTO `Visits` VALUES (7, 11, '2008-11-12', '2008-11-16', 2);
INSERT INTO `Visits` VALUES (8, 14, '2003-12-03', '2003-12-29', 2);
INSERT INTO `Visits` VALUES (9, 17, '2001-04-05', '2001-04-12', 2);
INSERT INTO `Visits` VALUES (10, 18, '2005-06-13', '2005-06-30', 2);
INSERT INTO `Visits` VALUES (11, 17, '2004-05-19', '2004-08-19', 2);
INSERT INTO `Visits` VALUES (12, 17, '2007-05-24', '2007-06-21', 2);
INSERT INTO `Visits` VALUES (13, 13, '2011-09-22', '2011-09-28', 2);
INSERT INTO `Visits` VALUES (14, 19, '1998-02-12', '2000-02-12', 2);
INSERT INTO `Visits` VALUES (15, 18, '2004-02-12', '2004-02-25', 2);
INSERT INTO `Visits` VALUES (16, 16, '2001-03-21', '2001-05-21', 2);
INSERT INTO `Visits` VALUES (17, 15, '2002-12-02', '2002-12-14', 10);
INSERT INTO `Visits` VALUES (18, 11, '2009-02-12', '2009-03-02', 10);
INSERT INTO `Visits` VALUES (19, 12, '2010-11-23', '2010-12-01', 10);
INSERT INTO `Visits` VALUES (20, 12, '2013-12-01', NULL, 10);
INSERT INTO `Visits` VALUES (21, 13, '2012-02-12', '2012-03-12', 10);
INSERT INTO `Visits` VALUES (22, 13, '2013-03-12', '2013-03-23', 10);
INSERT INTO `Visits` VALUES (23, 14, '2013-01-10', '2013-01-20', 11);
INSERT INTO `Visits` VALUES (24, 14, '2013-03-14', '2013-03-17', 11);
INSERT INTO `Visits` VALUES (25, 14, '2013-11-24', NULL, 11);
INSERT INTO `Visits` VALUES (26, 15, '2009-05-12', '2009-08-12', 11);
INSERT INTO `Visits` VALUES (27, 16, '2011-04-02', '2011-04-12', 11);
INSERT INTO `Visits` VALUES (28, 19, '2013-04-13', '2013-04-23', 11);
INSERT INTO `Visits` VALUES (29, 15, '2013-07-08', NULL, 11);
INSERT INTO `Visits` VALUES (30, 16, '2013-06-17', '2013-07-17', 11);
INSERT INTO `Visits` VALUES (31, 17, '2013-08-20', NULL, 11);
INSERT INTO `Visits` VALUES (32, 18, '2013-10-18', '2013-10-28', 11);
INSERT INTO `Visits` VALUES (33, 19, '2013-01-23', '2013-08-23', 3);
INSERT INTO `Visits` VALUES (34, 20, '2013-01-12', '2013-01-25', 3);
INSERT INTO `Visits` VALUES (35, 20, '2013-02-15', '2013-12-04', 3);
INSERT INTO `Visits` VALUES (36, 20, '2013-05-03', '2013-09-03', 3);
INSERT INTO `Visits` VALUES (37, 14, '2013-04-15', '2013-06-15', 3);
INSERT INTO `Visits` VALUES (38, 21, '2002-12-02', '2009-10-10', 2);
INSERT INTO `Visits` VALUES (39, 22, '2013-09-11', NULL, 2);

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `department`
-- 

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `department_id` int(11) NOT NULL auto_increment,
  `department_name` varchar(60) default NULL,
  PRIMARY KEY  (`department_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Zrzut danych tabeli `department`
-- 

INSERT INTO `department` VALUES (1, 'admin');
INSERT INTO `department` VALUES (2, 'Pediatry');
INSERT INTO `department` VALUES (9, 'Radiology');
INSERT INTO `department` VALUES (10, 'Anesthesiology');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `user`
-- 

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(60) default NULL,
  `user_login` varchar(60) default NULL,
  `user_password` varchar(60) default NULL,
  `user_department_id` int(11) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Zrzut danych tabeli `user`
-- 

INSERT INTO `user` VALUES (1, 'administrator', 'admin', 'admin', 1);
INSERT INTO `user` VALUES (2, 'MUDr.Pavel Janda', 'janda', 'janda', 2);
INSERT INTO `user` VALUES (3, 'MUDr.Jana Novakova', 'novakova', 'nova123', 2);
INSERT INTO `user` VALUES (10, 'MUDr. Victor Roberts', 'roberts', 'r123', 2);
INSERT INTO `user` VALUES (11, 'MUDr. Oscar Brovn', 'oscar', 'oscar', 10);
        