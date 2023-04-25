-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 25 2023 г., 21:26
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `session` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `lname`, `password`, `login`, `session`) VALUES
(1, 'Admin', 'System', 'admin', 'admin', '4568');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` blob NOT NULL,
  `att` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `desc`, `att`) VALUES
(4, 'Бургеры', 0xd0a1d0b0d0bcd18bd0b520d181d0bed187d0bdd18bd0b520d0b1d183d180d0b3d0b5d180d18b2020d182d0bed0bbd18cd0bad0be20d18320d0bdd0b0d18121, ''),
(7, 'Напитки', 0xd0a5d0bed0bbd0bed0b4d0bdd18bd0b520d0b820d0b3d0bed180d18fd187d0b8d0b520d0bdd0b0d0bfd0b8d182d0bad0b820d0bdd0b020d0b2d0b0d18820d0b2d0bad183d18121, '\r\n'),
(9, 'Пицца', 0xd09bd18ed0b1d0b8d182d0b520d0b8d182d0b0d0bbd18cd18fd0bdd181d0bad183d18e20d0bad183d185d0bdd18e3f20d0a320d0bdd0b0d18120d0b5d181d182d18c20d0b2d0b0d0bc20d0bad0bed0b520d187d182d0be21, '\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `data` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `name`, `data`) VALUES
(1, 'contacs', 0x3828373737292d3132372d39392d3030),
(2, 'address', 0xd09cd0b8d0bad180d0bed180d0b0d0b9d0bed0bd20d09cd0b0d0bcd18bd1802d312034203139372c20d090d0bbd0bcd0b0d182d18b20303530303336),
(3, 'links', 0x66756e6e7940726573746f2e636f6d2c204076696c6b615f6361666565),
(4, 'org', 0x56696c6b61),
(5, 'about_us_text', 0xd0a0d0b5d181d182d0bed180d0b0d0bd20c2ab526573746fc2bb20d0bfd180d0b8d0b3d0bbd0b0d188d0b0d0b5d18220d0b2d0b0d18120d0bfd180d0b8d18fd182d0bdd0be20d0bfd180d0bed0b2d0b5d181d182d0b820d0b2d0b5d187d0b5d1802e20d094d0bbd18f20d0b2d0b0d1813a20d0b8d182d0b0d0bbd18cd18fd0bdd181d0bad0b0d18f2c20d184d180d0b0d0bdd186d183d0b7d181d0bad0b0d18f20d0b820d180d183d181d181d0bad0b0d18f20d0bad183d185d0bdd18f2c20d0b6d0b8d0b2d0b0d18f20d0bcd183d0b7d18bd0bad0b020d0b820d188d0bed1832dd0bfd180d0bed0b3d180d0b0d0bcd0bcd0b02e20d09020d182d0b0d0bad0b6d0b520d0b1d0b5d181d0bfd0bbd0b0d182d0bdd0b0d18f20d0b4d0bed181d182d0b0d0b2d0bad0b020d0b5d0b4d18b20d0bfd0be20d09cd0bed181d0bad0b2d0b52e20d096d183d0bad0bed0b2d181d0bad0bed0b3d0be2c2033342ed0a2d0b5d0bbd0b5d184d0bed0bd3a203828373737292d3132372d39392d30302e),
(6, 'jcs', ''),
(7, 'seo', 0x526573746f2c206a63732c206361666665652c20666f6f64),
(8, 'follow', 0x31),
(9, 'res', 0x31),
(10, 'lang', 0x7275);

-- --------------------------------------------------------

--
-- Структура таблицы `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `input` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `followers`
--

INSERT INTO `followers` (`id`, `input`) VALUES
(1, '87771279904'),
(3, 'adil_booooooooo');

-- --------------------------------------------------------

--
-- Структура таблицы `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `ing` blob NOT NULL,
  `stat` int(11) NOT NULL,
  `cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list`
--

INSERT INTO `list` (`id`, `name`, `price`, `ing`, `stat`, `cat`) VALUES
(7, 'Кола', 350, 0x3120d0bbd0b8d182d1802e, 1, '7'),
(8, 'Фанта', 300, 0x3120d0bbd0b8d182d1802e, 1, '7'),
(9, 'Спрайт', 320, 0x3120d0bbd0b8d182d1802e, 1, '7'),
(10, 'Кофе', 200, 0xd09ad0b0d0bfd183d187d0b8d0bdd0be2c20d0b4d0bed0bfd0bed0bbd0bdd0b8d182d0b5d0bbd18cd0bdd0be3a20d181d0bbd0b8d0b2d0bad0b82c20d181d0b0d185d0b0d1802c20d181d0b8d180d0bed0bf2c20d188d0bed0bad0bed0bbd0b0d0b42e, 1, '7'),
(11, 'Чай с лимном', 150, 0xd0a7d0b0d0b920d18120d0bbd0b8d0bcd0bed0bdd0bed0bc2c20d0b4d0bed0bfd0bed0bbd0bdd0b8d182d0b5d0bbd18cd0bdd0be3a20d0bbd0b8d0bcd0bed0bd2c20d181d0b0d185d0b0d1802c20d0bcd18fd182d0b02c20d0bad0b0d180d0b0d0bcd0b5d0bbd18c2e, 1, '7'),
(12, 'Пеперони ', 2500, 0x323520d181d0bc2c20d181d0b0d0bbd18fd0bcd0b82c20d181d18bd1802c20d0bcd0b0d186d0b0d180d0b5d0bbd0bbd0b02e, 1, '9'),
(13, 'Мачо', 3500, 0x333020d181d0bc2c20d0b0d0bdd0b0d0bdd0b0d1812c20d181d0b0d0bbd18fd0bcd0b82c20d188d0b0d0bcd0bfd0b8d0bdd0b8d0bed0bdd18b2c20d181d18bd1802c20d0b1d180d18bd0bdd0b7d18b2c20d0b1d180d0b8d0b7d0bed0bbd18c2e, 1, '9'),
(14, 'Мушром', 3000, 0x333020d181d0bc2c20d0b3d180d0b8d0b1d18b2c20d181d18bd1802c20d0b1d180d0b8d0b7d0bed0bbd18c2c20d0b1d0b0d0b7d0b8d0bbd0b8d0ba2e, 1, '9'),
(15, 'Чиз-бургер', 1300, 0xd0a1d18bd1802c20d0bad0bed182d0bbd0b5d1822c20d0b1d183d0bbd0bed187d0bad0b82c20d0bed0b3d183d180d186d18b2c20d0bfd0bed0bcd0b8d0b4d0bed1802c20d0bbd0b8d181d182d18cd18f20d181d0b0d0bbd0b0d182d0bed0b22e, 1, '4'),
(16, 'Кинг-бургер', 1200, 0x3220d09ad0bed182d0bbd0b5d1822c20d0bed0b3d183d180d186d18b2c20d0bfd0bed0bcd0b8d0b4d0bed1802c20d181d18bd1802c20d0b1d180d0b8d0b7d0bed0bbd18c2c20d0bbd0b8d181d182d18cd18f20d181d0b0d0bbd0b0d182d0bed0b22e, 1, '4'),
(17, 'Казан-бургер', 1500, 0x3220d0bad0bed182d0bbd0b5d1822c203220d181d18bd1802c203220d181d18bd1802c20d0bfd0bed0bcd0b8d0b4d0bed1802c20d0bed0b3d183d180d186d18b2c20d187d0b5d181d0bdd0bed0ba2c20d0bbd0b8d181d182d18cd18f20d181d0b0d0bbd0b0d182d0bed0b22e, 1, '4');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `msg` mediumblob NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `persons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `date`, `time`, `persons`) VALUES
(1, 'Adil Nuradil', 'adil19032004@gmail.com', '87771279904', '02/07', '13:45', 8);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
