-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3307
-- 產生時間： 
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bookstore1`
--

-- --------------------------------------------------------

--
-- 資料表結構 `author`
--

CREATE TABLE `author` (
  `Aid` int(10) NOT NULL,
  `authorName` varchar(255) NOT NULL,
  `authorAddress` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `author`
--

INSERT INTO `author` (`Aid`, `authorName`, `authorAddress`, `gender`) VALUES
(1, '白白', '台南', '女'),
(2, '筆仙', '台中', '男'),
(3, '蔡10', '台北', '女'),
(4, '說書人', '台北', '男'),
(5, '霞雲', '南投', '女'),
(700003, '作者放這', '新竹', '女'),
(700004, '七把刀', '台北', '男'),
(700006, '我的', '苗栗', '男');

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `bookISBN` varchar(255) NOT NULL,
  `publisherName` varchar(255) NOT NULL,
  `authorName` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`bookISBN`, `publisherName`, `authorName`, `year`, `title`, `price`) VALUES
('22233509', '準備出版社', '蔡10', 2010, '歌手生涯紀錄', 200),
('50941441', '準備出版社', '霞雲', 2019, '是在哈囉', 87),
('55566003', '完美出版社', '筆仙', 1964, '毛筆教學', 700),
('55566665', '完美出版社', '白白', 2020, '新白白', 200),
('55668822', '完美出版社', '七把刀', 2019, '女孩', 300),
('55668823', '準備出版社', '七把刀', 2015, '女孩2', 350),
('56789876', '完美出版社', '霞雲', 2019, '毛筆彩繪本', 350),
('77777770', '完美出版社', '白白', 2010, '白色相簿', 300),
('82579001', '準備出版社', '說書人', 2010, '品味書', 1000),
('89432001', '完美出版社', '白白', 2001, '美麗日記', 500);

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `cId` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `customer`
--

INSERT INTO `customer` (`cId`, `email`, `cName`, `phone`, `address`) VALUES
(10001, 'a2266@mail.com', '王小明', '0212345678', '新北'),
(10002, 'a8899@mail.com', '吳美美', '0298765434', '屏東'),
(10003, 'e8888@mail.com', '林小青', '0926758462', '南投');

-- --------------------------------------------------------

--
-- 資料表結構 `logistic`
--

CREATE TABLE `logistic` (
  `LogisticName` varchar(255) NOT NULL,
  `LogisticEmail` varchar(255) NOT NULL,
  `LogisticPhone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `logistic`
--

INSERT INTO `logistic` (`LogisticName`, `LogisticEmail`, `LogisticPhone`) VALUES
('新竹物流', 'YYY@mail.com', '0800264789'),
('黑貓物流', 'cat@mail.com', '0800556556');

-- --------------------------------------------------------

--
-- 資料表結構 `publisher`
--

CREATE TABLE `publisher` (
  `publisherName` varchar(255) NOT NULL,
  `publisherAddress` varchar(255) NOT NULL,
  `publisherPhone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `publisher`
--

INSERT INTO `publisher` (`publisherName`, `publisherAddress`, `publisherPhone`) VALUES
('完美出版社', '台中', '09123456789'),
('準備出版社', '台北', '09987654321');

-- --------------------------------------------------------

--
-- 資料表結構 `shoppingbasket`
--

CREATE TABLE `shoppingbasket` (
  `ShoppingBasket_Id` int(11) NOT NULL,
  `cId` int(255) NOT NULL,
  `bookISBN` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `shoppingbasket`
--

INSERT INTO `shoppingbasket` (`ShoppingBasket_Id`, `cId`, `bookISBN`, `Quantity`, `account`) VALUES
(60001, 10001, '55566665', 5, ''),
(60002, 10002, '55566003', 1, ''),
(60003, 10001, '55566665', 20, ''),
(60004, 10002, '22233509', 10, ''),
(60005, 10002, '22233509', 10, '0'),
(60006, 10002, '22233509', 10, '2000');

-- --------------------------------------------------------

--
-- 資料表結構 `status`
--

CREATE TABLE `status` (
  `LogisticName` varchar(255) NOT NULL,
  `ShoppingBasket_Id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `status`
--

INSERT INTO `status` (`LogisticName`, `ShoppingBasket_Id`, `status`) VALUES
('新竹物流', 60001, '備貨中');

-- --------------------------------------------------------

--
-- 資料表結構 `warehouse`
--

CREATE TABLE `warehouse` (
  `WarehouseCode` int(11) NOT NULL,
  `WarehousePhone` varchar(255) NOT NULL,
  `WarehouseAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `warehouse`
--

INSERT INTO `warehouse` (`WarehouseCode`, `WarehousePhone`, `WarehouseAddress`) VALUES
(1, '255555555', '高雄'),
(2, '123456789', '台北');

-- --------------------------------------------------------

--
-- 資料表結構 `warehouse_book`
--

CREATE TABLE `warehouse_book` (
  `WarehouseCode` int(11) NOT NULL,
  `bookISBN` varchar(255) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `warehouse_book`
--

INSERT INTO `warehouse_book` (`WarehouseCode`, `bookISBN`, `count`) VALUES
(1, '22233509', 100),
(1, '50941441', 200),
(2, '55566003', 150),
(1, '82579001', 50),
(2, '89432001', 120);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`Aid`),
  ADD KEY `authorAddress` (`authorAddress`),
  ADD KEY `authorName` (`authorName`);

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookISBN`),
  ADD KEY `publisherName` (`publisherName`),
  ADD KEY `authorName` (`authorName`),
  ADD KEY `title` (`title`),
  ADD KEY `title_2` (`title`);

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cId`);

--
-- 資料表索引 `logistic`
--
ALTER TABLE `logistic`
  ADD PRIMARY KEY (`LogisticName`);

--
-- 資料表索引 `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherName`);

--
-- 資料表索引 `shoppingbasket`
--
ALTER TABLE `shoppingbasket`
  ADD PRIMARY KEY (`ShoppingBasket_Id`),
  ADD KEY `shoppingbasket_ibfk_1` (`cId`),
  ADD KEY `shoppingbasket_ibfk_2` (`bookISBN`);

--
-- 資料表索引 `status`
--
ALTER TABLE `status`
  ADD KEY `LogisticName` (`LogisticName`),
  ADD KEY `status_ibfk_2` (`ShoppingBasket_Id`);

--
-- 資料表索引 `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`WarehouseCode`);

--
-- 資料表索引 `warehouse_book`
--
ALTER TABLE `warehouse_book`
  ADD KEY `bookISBN` (`bookISBN`),
  ADD KEY `WarehouseCode` (`WarehouseCode`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `author`
--
ALTER TABLE `author`
  MODIFY `Aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=700007;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `customer`
--
ALTER TABLE `customer`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shoppingbasket`
--
ALTER TABLE `shoppingbasket`
  MODIFY `ShoppingBasket_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60008;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `WarehouseCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`publisherName`) REFERENCES `publisher` (`publisherName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`authorName`) REFERENCES `author` (`authorName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `shoppingbasket`
--
ALTER TABLE `shoppingbasket`
  ADD CONSTRAINT `shoppingbasket_ibfk_1` FOREIGN KEY (`cId`) REFERENCES `customer` (`cId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shoppingbasket_ibfk_2` FOREIGN KEY (`bookISBN`) REFERENCES `book` (`bookISBN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`LogisticName`) REFERENCES `logistic` (`LogisticName`),
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`ShoppingBasket_Id`) REFERENCES `shoppingbasket` (`ShoppingBasket_Id`);

--
-- 資料表的限制式 `warehouse_book`
--
ALTER TABLE `warehouse_book`
  ADD CONSTRAINT `warehouse_book_ibfk_1` FOREIGN KEY (`bookISBN`) REFERENCES `book` (`bookISBN`),
  ADD CONSTRAINT `warehouse_book_ibfk_2` FOREIGN KEY (`WarehouseCode`) REFERENCES `warehouse` (`WarehouseCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
