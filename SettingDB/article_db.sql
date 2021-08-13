-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 13 2021 г., 13:41
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `article_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `Id` int(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`Id`, `Name`, `Subject`, `Text`) VALUES
(1, 'Red', 'Color', 'The adjective \" red \" in the color meaning of the Slavic languages is peculiar only to Russian. In the original meaning, it occurs only in phraseological phrases such as: \"the debt is red with payment\", \"for the sake of a red word\", \"red price\", \"red fish\", \"red girl\", \"for peace and death is red\"'),
(2, 'Blue', 'Color', 'The name of the color group. The spectral blue color is felt by a person under the influence of electromagnetic radiation with wavelengths in the range of 440-485 nm. One of the main colors in the KZS system.'),
(3, 'Green', 'Colors', 'One of the three primary colors, along with red and blue, green is considered the color of visible electromagnetic radiation (light) with wavelengths lying in the range of approximately 510-550 nm[1]'),
(4, 'BMW', 'Cars', 'In Russian, the name \"BMW\" is pronounced \"be-em-ve\", which is close to the German pronunciation; occasionally there is a spelling \"BMW\".'),
(5, 'Honda', 'Cars', 'Honda was the first Japanese car manufacturer to release a special luxury brand — Acura in 1986. In addition to the main automobile and motorcycle business, Honda also produces garden equipment, boat engines, jet skis and generators, as well as other products'),
(6, 'Ferrari', 'Cars', 'The racing team, called\" Scuderia Ferrari \" (Scuderia Ferrari) was founded by Enzo Ferrari in 1929. It began to produce vehicles only in 1947[1].');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
