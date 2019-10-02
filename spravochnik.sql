-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 02 2019 г., 06:06
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
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1567101020),
('m190829_174634_create_taraskulkommutator_table', 1567101035),
('m190830_152910_create_taraskulinfo_table', 1567179881),
('m190830_152935_create_taraskulphones_table', 1567179881),
('m190830_153007_create_taraskulcorpus_table', 1567179881);

-- --------------------------------------------------------

--
-- Структура таблицы `obschie`
--

CREATE TABLE `obschie` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reestrofcompanies`
--

CREATE TABLE `reestrofcompanies` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `typeofactivity` text NOT NULL,
  `numberresource` text NOT NULL,
  `presencezone` text NOT NULL,
  `clients` text NOT NULL,
  `services` text NOT NULL,
  `colspan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(15, 'ООО Связьпроектсервис', 'Отдел по работе с ФЛ', 'Менеджер', 'Зырянова Виктория Евгеньевна', '39-01-84', 've.zyrjanova@rk.t72.ru', 'шестидневка'),
(16, 'ООО Инфо-Магистраль', '', 'Директор', 'Губин Дмитрий Александрович', '68-00-03', 'gubin@rk.t72.ru', 'пятидневка');

-- --------------------------------------------------------

--
-- Структура таблицы `taraskulcorpus`
--

CREATE TABLE `taraskulcorpus` (
  `id` int(11) NOT NULL,
  `title` text,
  `floor` int(11) DEFAULT NULL,
  `room` text,
  `insidephone` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `taraskulcorpus`
--

INSERT INTO `taraskulcorpus` (`id`, `title`, `floor`, `room`, `insidephone`) VALUES
(1, 'АБОНЕМЕНТЫ НОМЕРОВ СПАЛЬНОГО КОРПУСА', 1, '2/101', '22-78'),
(2, 'АБОНЕМЕНТЫ НОМЕРОВ СПАЛЬНОГО КОРПУСА', 1, '3/101', '23-78'),
(3, 'АБОНЕНТЫ СПАЛЬНОГО КОРПУСА СПЕЦИАЛИЗИРОВАННОГО ОТДЕЛЕНИЯ ПО ДОЛЕЧИВАНИЮ ПОСЛЕ ТРАВМ СПИННОГО МОЗГА', 1, '1', '36-01'),
(4, 'АБОНЕНТЫ СПАЛЬНОГО КОРПУСА СПЕЦИАЛИЗИРОВАННОГО ОТДЕЛЕНИЯ ПО ДОЛЕЧИВАНИЮ ПОСЛЕ ТРАВМ СПИННОГО МОЗГА', 2, '18', '36-18'),
(5, 'АБОНЕМЕНТЫ НОМЕРОВ СПАЛЬНОГО КОРПУСА', 2, '2/105', '22-98');

-- --------------------------------------------------------

--
-- Структура таблицы `taraskulinfo`
--

CREATE TABLE `taraskulinfo` (
  `id` int(11) NOT NULL,
  `title` text,
  `content` text,
  `address` text,
  `phone` text,
  `email` text,
  `site` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `taraskulinfo`
--

INSERT INTO `taraskulinfo` (`id`, `title`, `content`, `address`, `phone`, `email`, `site`) VALUES
(1, 'Коммутатор \"Тараскуль\"', 'Коммутатор «Тараскуль» – это услуга ручного соединения (выполняется оператором) с внутренними абонентами санатория «Тараскуль».', '', '395-111', '', ''),
(2, 'Автокоммутатор \"Тараскуль\"', 'Автокоммутатор – реализация автоматического соединения с внутренними абонентами санатория «Тараскуль» путем набора внутреннего номера на клавиатуре телефона.\r\nАбонент может позвонить на любой из этих двух номеров. Если «ручной» коммутатор занят, звонок переадресовывается на автокоммутатор.', '', '395-911', '', ''),
(3, 'Контакты', '', '625058, г. Тюмень, п. Тараскуль, ул. Санаторная, 10', '8(3452) 39-57-05,<br> 8(3452) 39-57-64, 72-91-69', 'mail@taraskul72.ru', 'http://тараскуль72.рф/'),
(4, '<!--Справочная информация-->', '<!--Справочная г.Тюмень-->332-332, 75-75-75', '<!--Справочная аэропорта Рощино-->496-450', '<!--Справочная ж/д вокзала-->461-870, 523-609', '<!-Заказ билетов с доставкой-->494-794', ''),
(5, '<!--Звонки из санатория \"Тараскуль\"-->', '9 (если оплачен)', '8 (если оплачен)', '39-51-11', '39-59-11', '');

-- --------------------------------------------------------

--
-- Структура таблицы `taraskulphones`
--

CREATE TABLE `taraskulphones` (
  `id` int(11) NOT NULL,
  `department` text,
  `position` text,
  `fullname` text,
  `insidephone` text,
  `outsidephone` text,
  `floor` int(11) DEFAULT NULL,
  `room` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `taraskulphones`
--

INSERT INTO `taraskulphones` (`id`, `department`, `position`, `fullname`, `insidephone`, `outsidephone`, `floor`, `room`) VALUES
(1, 'Административно-управленческий персонал', 'Директор', 'Мальцев Сергей Владимирович', '20-05', '39-57-05', NULL, '301'),
(2, 'Административно-управленческий персонал', 'Приемная директора<br>\r\nСекретарь-машинистка', 'Хрусталева Лариса Ильинична', '20-05', '39-57-05', NULL, '301'),
(3, 'Заместители директора', 'Главный бухгалтер', 'Каримова Расима Закиевна', '20-02', '39-57-02', NULL, '313');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `obschie`
--
ALTER TABLE `obschie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reestrofcompanies`
--
ALTER TABLE `reestrofcompanies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rkphones`
--
ALTER TABLE `rkphones`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `taraskulcorpus`
--
ALTER TABLE `taraskulcorpus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `taraskulinfo`
--
ALTER TABLE `taraskulinfo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `taraskulphones`
--
ALTER TABLE `taraskulphones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `obschie`
--
ALTER TABLE `obschie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reestrofcompanies`
--
ALTER TABLE `reestrofcompanies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `rkphones`
--
ALTER TABLE `rkphones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `taraskulcorpus`
--
ALTER TABLE `taraskulcorpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `taraskulinfo`
--
ALTER TABLE `taraskulinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `taraskulphones`
--
ALTER TABLE `taraskulphones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
