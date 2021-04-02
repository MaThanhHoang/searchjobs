-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 03:19 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Database: `thithu`
--

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `CONGVIEC` (

`IDVIECLAM` varchar(100) NOT NULL,
  `TENCONGTY` varchar(100) NOT NULL,
  `Luong` varchar(1000) NOT NULL,
  `VUNGMIEN` varchar(100) NOT NULL,
  `CHEDODAINGO` varchar(1000) NOT NULL,
  `NGAYDANG` varchar(1000) NOT NULL,
  `YEUCAUCONGVIEC` varchar(1000) NOT NULL,
  `MOTACONGVIEC` varchar(1000) NOT NULL,
  `DIACHI` varchar(100) NOT NULL,
  PRIMARY KEY (`IDVIECLAM`)
);

CREATE TABLE IF NOT EXISTS `TAIKHOAN` (
`IDTK` varchar(100) NOT NULL,
  `TAIKHOAN` varchar(100) NOT NULL,
  `EMAIL` varchar(1000) NOT NULL,
  `MATKHAU` varchar(100) NOT NULL,
  PRIMARY KEY (`IDTK`)
);
CREATE TABLE IF NOT EXISTS `HOSOCANHAN` (
  `IDTK` varchar(100) NOT NULL,
  `HOVATEN` varchar(100) NOT NULL,
  `DIACHI` varchar(1000) NOT NULL,
  `NGAYSINH` DATETIME NOT NULL,
  `NGANHNGHE` varchar(100) NOT NULL, 
  `HINHTHUCLAMVIEC` varchar(100) NOT NULL, 
  `SONAMKINHNGIEM` varchar(1000) NOT NULL,
  `BANGCAP` varchar(1000) NOT NULL,
    `TINHOC` varchar(1000) NOT NULL,
	  `NGOAINGU` varchar(1000) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--
INSERT INTO `CONGVIEC` (`IDVIECLAM`, `TENCONGTY`, `Luong`, `VUNGMIEN`, `CHEDODAINGO`, `NGAYDANG`, `YEUCAUCONGVIEC`,`MOTACONGVIEC`,`DIACHI`) VALUES
('CBN-06-001', 'TMA', '1000000', 'Mi?n B?c', 'Có b?o hi?m', '10/10', 'Php','l?p trình php','Quy Nhơn'),
('CBN-06-002', 'TMA', '120000', 'Miền Nam', 'Đéo b?o hi?m', '12/10', 'FrontEND','l?p trình FrontENd','Sài gòn');





