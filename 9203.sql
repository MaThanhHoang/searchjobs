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

`IDVIECLAM` NVARCHAR(100)  ,
`IDCONGTY` NVARCHAR(100),
  `TENCONGTY` NVARCHAR(100)   ,
  `LUONG` NVARCHAR(1000)  ,
  `VUNGMIEN` NVARCHAR(100) ,	
  `CHEDODAINGO` NVARCHAR(1000)   ,
  `NGAYDANG` NVARCHAR(1000)   ,
  `YEUCAUCONGVIEC` NVARCHAR(1000)   ,
  `MOTACONGVIEC` NVARCHAR(1000)  ,
  `DIACHI` NVARCHAR(100)  ,
  PRIMARY KEY (IDVIECLAM)

);

CREATE TABLE IF NOT EXISTS `QUANLYCONGVIEC` (
`IDCONGTY` NVARCHAR(100),
`SOVIECLAMDADANG` INT,
`THOIGIANDANG` DATETIME,
`CHIPHIPHAITRACHOCONGVIECDADANG` FLOAT,
`CHEDODAINGOCHOCTY` NVARCHAR(100)
);

CREATE TABLE IF NOT EXISTS `TAIKHOAN` (
`IDTK` varchar(100)  ,
  `TAIKHOAN` varchar(100)  ,
  `EMAIL` varchar(1000)  ,
  `MATKHAU` varchar(100)  ,
  PRIMARY KEY (`IDTK`)
);
CREATE TABLE IF NOT EXISTS `HOSOCANHAN` (
   `IDTK` NVARCHAR(100)  ,
 `HOVATEN` NVARCHAR(100)   ,
  `DIACHI` NVARCHAR(1000)   ,
  `NGAYSINH` NVARCHAR(100)   ,
  `NGANHNGHE` NVARCHAR(100)   , 
  `DIEMMANHCONGVIEC` NVARCHAR(100),
  `HINHTHUCLAMVIEC` NVARCHAR(100)   , 
  `SONAMKINHNGIEM` NVARCHAR(1000)   ,
  `BANGCAP` NVARCHAR(1000)   ,
    `TINHOC` NVARCHAR(1000)   ,
	  `TIENGANH` NVARCHAR(1000)   ,
	  	  `TIENGNHAT` NVARCHAR(1000)   ,
		  	  `TIENGKHAC` NVARCHAR(1000)  ,
	  `NANGKHIEU` NVARCHAR(100)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--
INSERT INTO `CONGVIEC` (`IDCONGTY`,`IDVIECLAM`, `TENCONGTY`, `Luong`, `VUNGMIEN`, `CHEDODAINGO`, `NGAYDANG`, `YEUCAUCONGVIEC`,`MOTACONGVIEC`,`DIACHI`) VALUES
('CT-001','CBN-06-001', 'TMA', '1000000', 'Miền Bắc', 'Có bảo hiểm', '2021-10-10', 'Php','lập trình php','Quy Nhơn'),
('CT-002','CBN-06-002', 'FPT', '1200000', 'Miền Nam', 'Các hoạt động dã ngoại. ...', '2021-12-10', 'FrontEND','lập trình FrontENd','Sài gòn'),
('CT-003','CBN-06-003', 'VNG', '1400000', 'Miền Nam', 'Không giới hạn ngày nghỉ phép có lương. ...', '2021-22-10', 'Lập trình Android','Làm game','Sài gòn'),
('CT-004','CBN-06-004', 'Công ty xây dựng Hoà Bình', '10000000', 'Miền Trung', 'Các chương trình đào tạo nâng cao chuyên môn. ...', '2021-14-10', 'Giám sát','Giám sát công trình','Quảng Ninh'),
('CT-005','CBN-06-005', 'Công ty thép Hoà Phát', '90000', 'Miền Trung', 'Thưởng theo lợi nhuận, bảo hiểm', '2021-1-12', 'Kĩ thuật viên cơ khí','Sản xuất thép','Quảng Ngãi');






INSERT INTO `HOSOCANHAN`(`IDTK`, `HOVATEN`, `DIACHI`, `NGAYSINH`, `NGANHNGHE`, `DIEMMANHCONGVIEC`, `HINHTHUCLAMVIEC`, `SONAMKINHNGIEM`, `BANGCAP`, `TINHOC`, `TIENGANH`, `TIENGNHAT`, `TIENGKHAC`, `NANGKHIEU`) VALUES
 ('TK-001','Nguyễn Văn Hoá', 'Miền Bắc', '1-1-1999', 'IT', 'php', 'Part time', '4','đại học','thành thạo THVP','IELTS','','Tiếng Hàn','Thể thao điện tử'),
('TK-002','Nguyễn Trung Thành ', 'Miền Trung', '1-1-2000', 'IT', 'php', 'Part time', '4','đại học','thành thạo Tin học văn phòng','IELTS','N2','','Đá bóng'),
('Tk-003','Thi Mlo', 'Miền Nam', '22-6-2000', 'IT', 'php', 'Part time', '4','đại học','thành thạo THVP','Toiec','','','Đá bóng'),
('Tk-004','Ma Thanh Hoàng', 'Miền Trung', '23-6-2000', 'IT', 'AI', 'Full time', '5','đại học','thành thạo THVP','Toiec','','HSK5','Bóng chuyền'),
('Tk-005','Trần Tuấn Phát', 'Miền Bắc', '21-1-2000', 'Xây dựng', 'Giám sát công trình', 'Full time', '2','Cao đẳng','CAD 3D','B1','','','Bóng chuyền');



