-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 10 2019 г., 14:48
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `spravochnik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rkphones`
--

CREATE TABLE `rkphones` (
  `id` int(11) NOT NULL,
  `department` text NOT NULL,
  `subdepartment` text,
  `position` text NOT NULL,
  `fullname` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `shedule` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rkphones`
--

INSERT INTO `rkphones` (`id`, `department`, `subdepartment`, `position`, `fullname`, `phone`, `email`, `shedule`) VALUES
(1, 'ООО Русская компания Север', '', 'Директор', 'Полякова Юлия', '39-00-66<br>\r\n8-952-345-44-33', 'polyakova@rk.t72.ru', ''),
(2, 'ООО Связьпроектсервис', '', 'Генеральный директор', 'Чесноков Александр Петрович', '8-912-386-01-05', 'chesnokov@rk.t72.ru', ''),
(4, 'ООО Русская компания Север', 'Отдел по работе с ФЛ', 'Старший менеджер', 'Ослина Надежда Михайловна', '685051', 'nm.oslina@rk.t72.ru', 'шестидневка'),
(6, 'ООО Русская компания Север', 'Отдел по работе с ЮЛ', 'Старший менеджер', 'Пинигина Марина Николаевна ', '68-40-88<br>\r\n8(963)061-27-52', 'mn.pinigina@rk.t72.ru', 'пятидневка'),
(7, 'ООО Русская компания Север', 'Отдел по работе с ЮЛ', 'Менеджер', 'Побрус Елена Александровна', '68-40-89', 'ea.pobrus@rk.t72.ru', 'пятидневка'),
(8, 'ООО Русская компания Север', 'Отдел по работе с ЮЛ', 'Менеджер', 'Бушуева Анна Евгеньевна', '39-00-38', 'bushueva@rk.t72.ru', 'пятидневка'),
(9, 'ООО Русская компания Север', 'Отдел по работе с ФЛ', 'Менеджер', 'Бакланова Анастасия Владимировна', '68-97-66', 'av.baklanova@rk.t72.ru', 'шестидневка'),
(10, 'ООО Русская компания Север', 'Отдел по работе с ФЛ', 'Менеджер', 'Заболотских Анастасия Викторовна', '39-01-43', 'av.zabolotskih@rk.t72.ru', 'шестидневка'),
(11, 'ООО Русская компания Север', 'Технический отдел', 'Начальник', 'Сокерин Игорь Владимирович', '68-98-96<br>\r\n8-967-384-69-41', 'sokerin@rk.t72.ru', 'шестидневка'),
(12, 'ООО Русская компания связи', 'Технический отдел', 'Специалист', 'Хабаров Максим Игоревич', '79-66-88<br>\r\n8-982-927-04-51', 'mi.habarov@rk.t72.ru', 'шестидневка'),
(13, 'ООО Связьпроектсервис', '', 'Главный бухгалтер', 'Барабанова Ирина Владиславовна', '29-50-04', 'barabanova@rk.t72.ru', ''),
(14, 'ООО Связьпроектсервис', 'Отдел по работе с ФЛ', 'Менеджер', 'Малахова Кристина Ивановна', '68-40-12', 'ki.malahova@rk.t72.ru', 'шестидневка'),
(15, 'ООО Связьпроектсервис', 'Отдел по работе с ФЛ', 'Менеджер', 'Зырянова Виктория Евгеньевна', '39-01-84', 've.zyrjanova@rk.t72.ru', 'шестидневка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rkphones`
--
ALTER TABLE `rkphones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rkphones`
--
ALTER TABLE `rkphones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
