-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 02:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmsfromone`
--

CREATE TABLE `cmsfromone` (
  `cms_id` int(20) NOT NULL,
  `cms_name` varchar(500) NOT NULL,
  `cms_img` text NOT NULL,
  `cms_textone` varchar(500) NOT NULL,
  `cms_texttwo` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cmsfromone`
--

INSERT INTO `cmsfromone` (`cms_id`, `cms_name`, `cms_img`, `cms_textone`, `cms_texttwo`) VALUES
(1, 'คอมพิวเตอร์', 'https://www.topreviewthailand.com/wp-content/uploads/2023/05/pexels-roberto-nickson-7238759-2048x1365.jpg', 'คอมพิวเตอร์คืออะไร', 'คอมพิวเตอร์ หรือศัพท์บัญญัติราชบัณฑิตยสภาว่า คณิตกรณ์\r\n                        เป็นเครื่องจักรแบบสั่งการได้ที่ออกแบบมาเพื่อดำเนินการกับลำดับตัวดำเนินการทางตรรกศาสตร์หรือคณิตศาสตร์\r\n                        โดยอนุกรมนี้อาจเปลี่ยนแปลงได้เมื่อพร้อม ส่งผลให้คอมพิวเตอร์สามารถแก้ปัญหาได้มากมาย\r\n\r\n                        คอมพิวเตอร์ถูกประดิษฐ์ออกมาให้ประกอบไปด้วยความจำรูปแบบต่าง ๆ เพื่อเก็บข้อมูล\r\n                        อย่างน้อยหนึ่งส่วนที่มีหน้าที่ดำเนินการคำนวณเกี่ยวกับตัวดำเนินการทางตรรกศาสตร์\r\n                        และตัวดำเนินการทางคณิตศาสตร์\r\n                        และส่วนควบคุมที่ใช้เปลี่ยนแปลงลำดับของตัวดำเนินการโดยยึดสารสนเทศที่ถูกเก็บไว้เป็นหลัก\r\n                        อุปกรณ์เหล่านี้จะยอมให้นำเข้าข้อมูลจากแหล่งภายนอก และส่งผลจากการคำนวณตัวดำเนินการออกไป\r\n\r\n                        หน่วยประมวลผลของคอมพิวเตอร์มีหน้าที่ดำเนินการกับคำสั่งต่าง ๆ ที่คอยสั่งให้อ่าน ประมวล\r\n                        และเก็บข้อมูลไว้ คำสั่งต่าง ๆ ที่มีเงื่อนไขจะแปลงชุดคำสั่งให้ระบบและสิ่งแวดล้อมรอบ ๆ\r\n                        เป็นฟังก์ชันที่สถานะปัจจุบัน คอมพิวเตอร์อิเล็กทรอนิกส์เครื่องแรกถูกพัฒนาขึ้นในช่วงกลางคริสต์ศตวรรษที่\r\n                        20 (ค.ศ. 1940 - ค.ศ. 1945) แรกเริ่มนั้น คอมพิวเตอร์มีขนาดเท่ากับห้องขนาดใหญ่\r\n                        ซึ่งใช้พลังงานมากเท่ากับเครื่องคอมพิวเตอร์ส่วนบุคคล (พีซี) สมัยใหม่หลายร้อยเครื่องรวมกัน คอมพิวเตอร์ในสมัยใหม่นี้ผลิตขึ้นโดยใช้วงจรรวม หรือวงจรไอซี\r\n                        (Integrated circuit) โดยมีความจุมากกว่าสมัยก่อนล้านถึงพันล้านเท่า\r\n                        และขนาดของตัวเครื่องใช้พื้นที่เพียงเศษส่วนเล็กน้อยเท่านั้น\r\n                        คอมพิวเตอร์อย่างง่ายมีขนาดเล็กพอที่จะถูกบรรจุไว้ในอุปกรณ์โทรศัพท์มือถือ\r\n                        และคอมพิวเตอร์มือถือนี้ใช้พลังงานจากแบตเตอรี่ขนาดเล็ก และหากจะมีคนพูดถึงคำว่า \"คอมพิวเตอร์\"\r\n                        มักจะหมายถึงคอมพิวเตอร์ส่วนบุคคลซึ่งถือเป็นสัญลักษณ์ของยุคสารสนเทศ อย่างไรก็ดี\r\n                        ยังมีคอมพิวเตอร์ชนิดฝังอีกมากมายที่พบได้ตั้งแต่ในเครื่องเล่นเอ็มพีสามจนถึงเครื่องบินบังคับ\r\n                        และของเล่นชนิดต่าง ๆ จนถึงหุ่นยนต์อุตสาหกรรม');

-- --------------------------------------------------------

--
-- Table structure for table `cmsfromthree`
--

CREATE TABLE `cmsfromthree` (
  `cmsthr_id` int(20) NOT NULL,
  `cmsthr_name` varchar(255) NOT NULL,
  `cmsthr_img` text NOT NULL,
  `cmsthr_textone` varchar(255) NOT NULL,
  `cmsthr_texttwo` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cmsfromthree`
--

INSERT INTO `cmsfromthree` (`cmsthr_id`, `cmsthr_name`, `cmsthr_img`, `cmsthr_textone`, `cmsthr_texttwo`) VALUES
(1, 'แรม', 'https://www.mindphp.com/images/knowledge/ram.jpg', 'แรมคืออะไร?', 'Ram (แรม) หรือหน่วยความจำ คือ หน่วยความจำที่ดึงข้อมูลจากฐานข้อมูลมาเก็บไว้ที่ตำแหน่งแรมชั่วคราว เพื่อให้ผู้ใช้หรือ user สามารถเรียกข้อมูลที่ต้องการได้อย่างรวดเร็ว และคอมพิวเตอร์จะทำงานช้าลงเมื่อพื้นที่ในแรมเริ่มเต็ม เนื่องจากเราใช้ข้อมูลการทำงานเป็นจำนวนมากเกินไป ซึ่งในสมัยก่อนนั้นการเขียนโปรแกรมหรือการทำงานต่างๆ จะต้องคำนวณเรื่องพื้นที่การใช้งานของแรม หากเราใช้งานบนพื้นที่ของแรมมากก็จะทำให้เครื่องช้าบางครั้งถึงขั้นค้างเลย แต่ในปัจจุบันแรมได้มีจำนวนมากขึ้น จนผู้คนส่วนใหญ่ไม่ค่อยสนใจว่าจะต้องคำนวณเรื่องพื้นที่ของแรม แต่หากบริษัทใดจำเป็นต้องใช้ข้อมูลเป็นจำนวนมากอยู่ ก็จำเป็นจะต้องนึกถึงพื้นที่การทำงานของแรมด้วย\r\n\r\n       ดังนั้น แรมจึงเป็นหน่วยความจำตัวหนึ่งที่ช่วยดึงข้อมูลจากฐานข้อมูลมาเก็บไว้ หรือรับข้อมูลจาก user มาเก็บไว้เพื่อส่งกลับไปยังฐานข้อมูลต่อไป ซึ่งแรมเป็นหน่วยความจำชั่วคราวเท่านั้น เมื่อมีการปิดคอมพิวเตอร์ลงไป ข้อมูลในแรมทั้งหมดก็จะหายไป');

-- --------------------------------------------------------

--
-- Table structure for table `cmsfromtwo`
--

CREATE TABLE `cmsfromtwo` (
  `cmstw_id` int(20) NOT NULL,
  `cmstw_name` varchar(255) NOT NULL,
  `cmstw_img` text NOT NULL,
  `cmstw_textone` varchar(255) NOT NULL,
  `cmstw_texttwo` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cmsfromtwo`
--

INSERT INTO `cmsfromtwo` (`cmstw_id`, `cmstw_name`, `cmstw_img`, `cmstw_textone`, `cmstw_texttwo`) VALUES
(1, 'ฮาร์ดแวร์', 'https://image.makewebeasy.net/makeweb/m_1920x0/3r7zGSbbp/Article/April2.jpg?v=202012190947', 'ฮาร์ดแวร์คืออะไร?', 'Hardware (ฮาร์ดแวร์) คืออะไร เครื่องมือ เครื่องจักร ชิ้นส่วน และอุปกรณ์ต่าง ๆ ที่สามารถมองเห็น และจับต้องได้ Hardware (ฮาร์ดแวร์) คือ เครื่องมือ เครื่องจักร ชิ้นส่วน และอุปกรณ์ต่าง ๆ ที่สามารถมองเห็น และจับต้องได้ ในระบบคอมพิวเตอร์นั้น ฮาร์ดแวร์ หมายถึง ชิ้นส่วนหรืออุปกรณ์ต่าง ๆ ที่ประกอบกันขึ้นเป็นเครื่องคอมพิวเตอร์ รวมถึงอุปกรณ์ต่อพ่วงต่าง ๆ ด้วย ตัวอย่างของฮาร์ดแวร์ เช่น CPU (ซีพียู), , Display adapter (ดิสเพล์ อแดบเตอร์), Hard disk (ฮาร์ดดิส), Chipsets (ชิบเซส), Mainboard (เมนบอร์ด), Power supply (พาวเวอร์ ซัพพลาย), จอ Monitor (มอนิเตอร์), Keyboard (คีบอร์ด), Mouse (เมาส์), Modem (โมเดม), Router (เร้าเตอร์),Hub (ฮับ), เครื่องพิมพ์, Flash drive (เฟรชไดช์), Card reader (การ์ด รีดเดอร์), Sound card (ซาวการ์ด), Air card (แอร์ การ์ด), Optical drive (ออฟติคอล ไดรซ์), USB Port (ยูเอสบี พอร์ต) และ สายต่อเชื่อมสัญญาณประเภทต่างๆ เป็นต้น สามารถแบ่งออกเป็นส่วนต่าง ๆ ตามลักษณะการทำงานได้ 4 หน่วย โดยอุปกรณ์แต่ละหน่วยมีหน้าที่การทำงานแตกต่างกัน 1. หน่วยรับข้อมูล Input Unit (อินพุต ยูนิต) 2. หน่วยประมวลผลกลาง CPU : Central Processing Unit (เซนทอล โปรเซสชิง ยูนิต) 3. หน่วยแสดงผล Output Unit(เอาร์พุต ยูนิต) 4. หน่วยเก็บข้อมูลสำรอง Secondary Storage(เซคคอนเดรี่ สตอเรส) ตัวฮาร์ดแวร์ต่าง ๆ นั้นจะไม่สามารถทำงานได้ด้วยตัวเอง แต่ต้องอาศัยชุดคำสั่ง หรือโปรแกรมต่าง ๆ ในการสั่งงาน โดยที่ชุดคำสั่งเหล่านี้อาจจะอยู่ใน ROM (รอม) ของฮาร์แวร์นั้น ๆ อาจจะเป็นชุดคำสั่งจากระบบปฏิบัติการ ชุดคำสั่งจากโปรแกรมขับเคลื่อน Driver (ไดรเวอร์) หรือชุดคำสั่งจากโปรแกรม Soft Ware (ซอฟแวร์) สำเร็จรูปก็ได้');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contextone` varchar(255) NOT NULL,
  `contexttwo` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `contextone`, `contexttwo`) VALUES
(2, 'tus@gmail.com', 'เรื่องอะไร', 'บลาบลาบลาบลาบลาบลาบลาบลาบลาบลาบลาบลาบลาบลาบลาบลา');

-- --------------------------------------------------------

--
-- Table structure for table `searching`
--

CREATE TABLE `searching` (
  `id` int(20) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `searching`
--

INSERT INTO `searching` (`id`, `name`) VALUES
(1, 'คอมพิวเตอร์คืออะไร'),
(2, 'ฮาร์ดแวร์คืออะไร'),
(3, 'แรมคืออะไร'),
(4, 'การป้องกันไวรัส'),
(5, 'ชนิดของคอมพิวเตอร์');

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`id`, `fullname`, `username`, `useremail`, `password`, `regdate`) VALUES
(1, 'สรเทพ ลำลำ', 'admin', 'tus@gmail.com', '12345', '2024-01-22 06:15:38'),
(3, 'สุจิรา แก้วม้วง', 'ืname', 'vrzovrz55@gmail.com', '54321', '2024-01-24 12:48:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmsfromone`
--
ALTER TABLE `cmsfromone`
  ADD PRIMARY KEY (`cms_id`);

--
-- Indexes for table `cmsfromthree`
--
ALTER TABLE `cmsfromthree`
  ADD PRIMARY KEY (`cmsthr_id`);

--
-- Indexes for table `cmsfromtwo`
--
ALTER TABLE `cmsfromtwo`
  ADD PRIMARY KEY (`cmstw_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searching`
--
ALTER TABLE `searching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmsfromone`
--
ALTER TABLE `cmsfromone`
  MODIFY `cms_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmsfromthree`
--
ALTER TABLE `cmsfromthree`
  MODIFY `cmsthr_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmsfromtwo`
--
ALTER TABLE `cmsfromtwo`
  MODIFY `cmstw_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `searching`
--
ALTER TABLE `searching`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
