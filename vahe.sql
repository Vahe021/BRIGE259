-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 10 2022 г., 03:42
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vahe`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `ip` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_surname` varchar(255) NOT NULL,
  `admin_mail` varchar(255) NOT NULL,
  `admin_pwd` varchar(255) NOT NULL,
  `admin_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`ip`, `admin_name`, `admin_surname`, `admin_mail`, `admin_pwd`, `admin_key`) VALUES
(2, 'vahe', 'gevorgyan', 'aa@aaa.aa', '1111', '');

-- --------------------------------------------------------

--
-- Структура таблицы `admin1`
--

CREATE TABLE `admin1` (
  `id` int(11) NOT NULL,
  `admin_log` varchar(256) NOT NULL,
  `admin_mail` varchar(256) NOT NULL,
  `admin_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin1`
--

INSERT INTO `admin1` (`id`, `admin_log`, `admin_mail`, `admin_pwd`) VALUES
(1, 'vahe', 'vahe@mail.ru', '123456');

-- --------------------------------------------------------

--
-- Структура таблицы `beer`
--

CREATE TABLE `beer` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(256) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_ing` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `beer`
--

INSERT INTO `beer` (`id`, `prod_name`, `prod_price`, `prod_ing`) VALUES
(1, 'Yuengling Lager', 19, 'Captain Morgan spiced rum, pineaple'),
(2, 'London Fields', 19, 'Captain Morgan spiced rum, pineaple'),
(3, 'Southern Star', 14, 'Tequila, orange juice, grenadine'),
(4, 'The Rare Barell', 14, 'Tequila, orange juice, grenadine'),
(5, 'Ranch Imperial', 22, 'Dark rum, fresh lime, Coke'),
(6, 'Whitewater', 22, 'Dark rum, fresh lime, Coke');

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `user_id` int(11) NOT NULL,
  `user_marka` varchar(256) NOT NULL,
  `user_model` varchar(256) NOT NULL,
  `user_tiv` varchar(256) NOT NULL,
  `user_dziauj` varchar(256) NOT NULL,
  `user_guyn` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`user_id`, `user_marka`, `user_model`, `user_tiv`, `user_dziauj`, `user_guyn`) VALUES
(1, 'BMW', 'e46', '2000', '250', 'karmir'),
(2, 'Mercedes', 'E-class', '2002', '260+', 'Silver');

-- --------------------------------------------------------

--
-- Структура таблицы `cocktails`
--

CREATE TABLE `cocktails` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(256) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_ing` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cocktails`
--

INSERT INTO `cocktails` (`id`, `prod_name`, `prod_price`, `prod_ing`) VALUES
(1, 'Royal Arrival', 19, 'Captain Morgan spiced rum, pineaple'),
(3, 'Savoy Affai', 23, 'Captain Morgan spiced rum'),
(4, 'Tequila Sunrise', 14, 'Tequila, orange juice, grenadine'),
(5, 'El Presidente', 18, 'Tequila, orange juice, grenadine'),
(9, 'Cuba Libre', 22, 'Dark rum, fresh lime, Coke'),
(10, 'Hennchata', 13, 'Dark rum, fresh lime, Coke'),
(11, 'Coco Spice', 17, 'Dark rum, fresh lime, Cok'),
(12, 'Michelada', 19, 'Dark rum, fresh lime, Cok');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `like` int(11) NOT NULL,
  `prod_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prod_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `like`, `prod_name`, `prod_price`) VALUES
(8, '3.jpg', '0000-00-00 00:00:00', 0, 'aa@aaa.aa', 52050),
(9, '1.jpg', '0000-00-00 00:00:00', 1, 'dexc', 1200),
(10, '3.jpg', '0000-00-00 00:00:00', 0, 'elak', 2000),
(11, '2.jpg', '0000-00-00 00:00:00', 0, 'elak', 2000),
(12, '4.jpg', '0000-00-00 00:00:00', 0, 'dexc', 2000),
(13, '4.jpg', '0000-00-00 00:00:00', 0, 'dexc', 5000);

-- --------------------------------------------------------

--
-- Структура таблицы `marijuanna`
--

CREATE TABLE `marijuanna` (
  `id` int(11) NOT NULL,
  `img_name` varchar(256) NOT NULL,
  `file_name` varchar(256) NOT NULL,
  `file_giny` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `marijuanna`
--

INSERT INTO `marijuanna` (`id`, `img_name`, `file_name`, `file_giny`) VALUES
(5, 'k1.jpg', 'ddasfasd', '4000'),
(6, 'product-6.jpg', 'ddasfasd', '4000'),
(7, 'product-5.jpg', 'ddasfasd', '34324');

-- --------------------------------------------------------

--
-- Структура таблицы `marvel`
--

CREATE TABLE `marvel` (
  `film_id` int(11) NOT NULL,
  `film_name` varchar(256) NOT NULL,
  `film_img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `marvel`
--

INSERT INTO `marvel` (`film_id`, `film_name`, `film_img`) VALUES
(1, 'ddasfasd', '5.jpg'),
(2, 'qweqweqweqwe', '1.jpg'),
(3, 'sdasd', '6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `mesig`
--

CREATE TABLE `mesig` (
  `id` int(11) NOT NULL,
  `user_mail` varchar(256) NOT NULL,
  `user_text` text NOT NULL,
  `user_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mesig`
--

INSERT INTO `mesig` (`id`, `user_mail`, `user_text`, `user_name`) VALUES
(1, 'vahe@mail.ru', 'asdascaaa aaaaaaa aaacssssssssss ssssssssss ssssssss ssssssssssss ', 'Vahe'),
(2, 'fghfgh', 'ghfh', 'fghfgh');

-- --------------------------------------------------------

--
-- Структура таблицы `res`
--

CREATE TABLE `res` (
  `id` int(11) NOT NULL,
  `person` int(11) NOT NULL DEFAULT '1',
  `data` varchar(256) NOT NULL,
  `time` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `res`
--

INSERT INTO `res` (`id`, `person`, `data`, `time`) VALUES
(2, 4, '20-06-2022 ', '4:30pm'),
(3, 3, '01-06-2022 ', '11:00am');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `admin_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `admin_key`) VALUES
(13, 'aa@aaa.aa', 'aa@aaa.aa', 'aa@aaa.aa', 'aa@aaa.aa', '$2y$10$2Do94j7fdP6uW8vpet9y6uSRe4fwE0UUjMMm8CVkWWkvNiNIBHrCC', ''),
(14, 'aa@aaa.aa1', 'aa@aaa.aa1', 'vahe_gevorgyan_99@mail.ru', 'aa@aaa.aa1', '$2y$10$hMSYeUmlvfiQ2VuFn4Su9O7na644a.Ec1iWkZjmnleOnriNir.C8u', ''),
(15, 'wef', 'sdfgsdf', 'grfchya.gevorgyan.73@mail.ru', 'dsfsdf', '$2y$10$uMQ6FGUs0BMqdTJ8RrhCFeK7Pt6fTQdzX8Np9iGB9gKwQxIwccnyq', '');

-- --------------------------------------------------------

--
-- Структура таблицы `wine`
--

CREATE TABLE `wine` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(256) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_ing` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wine`
--

INSERT INTO `wine` (`id`, `prod_name`, `prod_price`, `prod_ing`) VALUES
(1, 'Leoville-Las Cases', 19, 'Saint-Julien, Franc'),
(2, 'Echezeaux Grand Cru', 19, 'Pauillac, France'),
(3, 'Moscato Cavit', 14, 'Chile'),
(4, 'Harlan Estate', 14, 'Santa Lucia Hoghlands'),
(5, 'Corton-Charlemagne', 22, 'Cote de Beaune, France'),
(6, 'Leoville Barton\r\n', 22, 'Saint-Julien, France'),
(7, 'Meiomi Pinot Noi', 17, 'California'),
(8, 'Monte Bello _ Ridge Vineyards', 17, 'California, USA'),
(9, 'Hermitage La Chapelle', 14, 'Rhone, France'),
(10, 'Riesling Ranch', 14, 'anta Lucia Hoghlands');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ip`);

--
-- Индексы таблицы `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `beer`
--
ALTER TABLE `beer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `cocktails`
--
ALTER TABLE `cocktails`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `marijuanna`
--
ALTER TABLE `marijuanna`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `marvel`
--
ALTER TABLE `marvel`
  ADD PRIMARY KEY (`film_id`);

--
-- Индексы таблицы `mesig`
--
ALTER TABLE `mesig`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `wine`
--
ALTER TABLE `wine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `ip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `beer`
--
ALTER TABLE `beer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cocktails`
--
ALTER TABLE `cocktails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `marijuanna`
--
ALTER TABLE `marijuanna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `marvel`
--
ALTER TABLE `marvel`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `mesig`
--
ALTER TABLE `mesig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `res`
--
ALTER TABLE `res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `wine`
--
ALTER TABLE `wine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
