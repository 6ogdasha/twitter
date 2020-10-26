-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2020 г., 11:46
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `twitter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `twits`
--

CREATE TABLE `twits` (
  `user` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `text` varchar(180) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `twits`
--

INSERT INTO `twits` (`user`, `img`, `text`, `id`) VALUES
('MaryJane', 'img/1.jpg', '8 лучших аудиоредакторов для музыки и голосовых дорожек', 1),
('Лайфхакер', 'img/2.jpg', 'В «Архиве интернета» появилось 2 500 классических DOS-игр. Их можно запустить в браузере', 2),
('Лайфхакер', 'img/3.jpg', 'Как начать рисовать, если вы никогда этим не занимались', 3),
('6ogdasha', 'img/bb.jpg', 'я прошел дес стрендинг аоаоаоао лучшая игра', 4),
('Едисеев Олег', 'img/op.jpg', 'Я жду новую главу ван писа... Ода живи.....', 5),
('MK1337', 'img/bolen.jpg', 'люблю болеть. болею каждую кр', 6),
('Богдан', 'йй', 'img/1.jpg', 7),
('Богдан', 'йй', 'img/1.jpg', 8),
('Богдан', 'йй', 'img/1.jpg', 9),
('', '', '', 10),
('sfgdfgd', 'sdff', 'dgdfgdf', 11),
('sfgdfgd', 'sdff', 'dgdfgdf', 12),
('sfgdfgd', 'sdff', 'dgdfgdf', 13),
('sfgdfgd', 'sdff', 'dgdfgdf', 14),
('sfgdfgd', 'sdff', 'dgdfgdf', 15),
('sfgdfgd', 'sdff', 'dgdfgdf', 16),
('ale', 'ffff', 'sdfsdf', 17),
('nbnvbn', 'hghghgh', 'vbnvbnvbn', 18),
('bogdan', '1111', 'ded', 19),
('bogdan', '1111', 'ded', 20),
('hfghghgh', '1111', 'ded', 21),
('олег', 'аываы', 'олеог', 22),
('фывфыв', 'фывфыв', 'фывфыв', 23),
('оооооо', 'ээээээ', 'ддддддд', 24);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `twits`
--
ALTER TABLE `twits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `twits`
--
ALTER TABLE `twits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
