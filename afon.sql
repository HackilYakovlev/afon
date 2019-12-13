-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 13 2019 г., 12:34
-- Версия сервера: 5.7.17
-- Версия PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `afon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `role`, `password`, `auth_key`, `email`, `fio`) VALUES
(1, 'admin', 'admin', 'admin', 'test1key', 'admin@mail.ru', 'о.Философ');

-- --------------------------------------------------------

--
-- Структура таблицы `bed`
--

CREATE TABLE `bed` (
  `id` int(3) NOT NULL,
  `bedname` varchar(255) NOT NULL,
  `roomid` int(3) NOT NULL,
  `sectionid` int(3) NOT NULL,
  `floorid` int(3) NOT NULL,
  `hotelid` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bed`
--

INSERT INTO `bed` (`id`, `bedname`, `roomid`, `sectionid`, `floorid`, `hotelid`) VALUES
(1, 'Возле окна', 1, 0, 1, 1),
(7, 'Кровать №2', 1, 0, 1, 1),
(3, 'Диван в позолоте', 2, 0, 9, 6),
(4, 'Диван тестовый', 2, 0, 9, 6),
(8, 'Кровать №3', 1, 0, 1, 1),
(6, 'Деревянная койка ', 3, 0, 10, 6),
(9, 'Первая', 4, 0, 1, 1),
(10, 'Вторая', 4, 0, 1, 1),
(11, 'Третья', 4, 0, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `countryresolution`
--

CREATE TABLE `countryresolution` (
  `id` int(3) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countryresolution`
--

INSERT INTO `countryresolution` (`id`, `value`) VALUES
(1, 'Да'),
(2, 'Нет');

-- --------------------------------------------------------

--
-- Структура таблицы `disease`
--

CREATE TABLE `disease` (
  `id` int(3) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `disease`
--

INSERT INTO `disease` (`id`, `value`) VALUES
(1, 'Нет'),
(2, 'Да');

-- --------------------------------------------------------

--
-- Структура таблицы `floor`
--

CREATE TABLE `floor` (
  `id` int(3) NOT NULL,
  `floornum` int(3) NOT NULL,
  `hotelid` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `floor`
--

INSERT INTO `floor` (`id`, `floornum`, `hotelid`) VALUES
(1, 1, 1),
(9, 1, 6),
(10, 2, 6),
(11, 3, 6),
(13, 3, 1),
(14, 4, 1),
(15, 5, 1),
(12, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `guest`
--

CREATE TABLE `guest` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `nameeng` varchar(255) NOT NULL,
  `surnameeng` varchar(255) NOT NULL,
  `dayofbirth` tinyint(2) DEFAULT NULL,
  `monthofbirth` tinyint(2) DEFAULT NULL,
  `yearofbirth` tinyint(4) DEFAULT NULL,
  `residentcountryid` int(3) DEFAULT NULL,
  `passportseries` varchar(255) NOT NULL,
  `workpositionid` int(3) DEFAULT NULL,
  `regionfrom` varchar(255) NOT NULL,
  `createddate` int(3) DEFAULT NULL,
  `statusid` int(3) DEFAULT NULL,
  `sourceid` int(3) DEFAULT NULL,
  `settled` tinyint(1) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `dateofbirth` int(3) DEFAULT NULL,
  `checkindate` varchar(255) NOT NULL,
  `checkoutdate` varchar(255) NOT NULL,
  `extra` text NOT NULL,
  `placeofbirth` varchar(255) NOT NULL,
  `krestname` varchar(255) NOT NULL,
  `monahname` varchar(255) NOT NULL,
  `san` varchar(255) NOT NULL,
  `krestplace` varchar(255) NOT NULL,
  `krestyear` varchar(255) NOT NULL,
  `communion` varchar(255) NOT NULL,
  `churchyear` varchar(255) NOT NULL,
  `mychurch` varchar(255) NOT NULL,
  `maritalstatusid` tinyint(2) DEFAULT NULL,
  `disease` tinyint(1) DEFAULT NULL,
  `diseasedescription` varchar(255) NOT NULL,
  `residentialaddress` varchar(255) NOT NULL,
  `homephone` varchar(255) NOT NULL,
  `workphone` varchar(255) NOT NULL,
  `mobilephone` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `workplace` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `passportnumber` varchar(255) NOT NULL,
  `passportissued` varchar(255) NOT NULL,
  `dateofissue` varchar(255) NOT NULL,
  `expires` varchar(255) NOT NULL,
  `schengenvisa` varchar(255) NOT NULL,
  `shengencountry` varchar(255) NOT NULL,
  `visatermination` varchar(255) NOT NULL,
  `visacitydraw` varchar(255) NOT NULL,
  `goalpilgrimage` text NOT NULL,
  `visitscount` tinyint(2) DEFAULT NULL,
  `lastvisit` varchar(255) NOT NULL,
  `birthsurname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `citizenshipnow` varchar(255) NOT NULL,
  `ukrainpassportnumber` varchar(255) NOT NULL,
  `wife` varchar(255) NOT NULL,
  `fiomaidenname` varchar(255) NOT NULL,
  `placeofbirthvisa` varchar(255) NOT NULL,
  `childrens` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `parentsfio` varchar(255) NOT NULL,
  `etcvisa` varchar(255) NOT NULL,
  `previousstay` varchar(255) NOT NULL,
  `transitroute` varchar(255) NOT NULL,
  `modeoftransport` varchar(255) NOT NULL,
  `anketadate` varchar(255) NOT NULL,
  `qualityid` int(3) DEFAULT NULL,
  `shengen` int(1) DEFAULT NULL,
  `pgroup` int(1) DEFAULT NULL,
  `pgroupcode` varchar(255) NOT NULL,
  `zagranend` int(3) DEFAULT NULL,
  `countryresolution` varchar(255) NOT NULL,
  `typeofpassport` varchar(255) NOT NULL,
  `roomtype` tinyint(2) DEFAULT NULL,
  `sum` int(5) DEFAULT NULL,
  `managerid` int(3) DEFAULT NULL,
  `resolution` tinyint(1) DEFAULT '0',
  `issueddiamonitirion` int(3) DEFAULT NULL,
  `usersender` int(3) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `changed` int(1) DEFAULT '0',
  `adminid` int(3) DEFAULT NULL,
  `approved_by_manager` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guest`
--

INSERT INTO `guest` (`id`, `name`, `secondname`, `surname`, `nameeng`, `surnameeng`, `dayofbirth`, `monthofbirth`, `yearofbirth`, `residentcountryid`, `passportseries`, `workpositionid`, `regionfrom`, `createddate`, `statusid`, `sourceid`, `settled`, `email`, `dateofbirth`, `checkindate`, `checkoutdate`, `extra`, `placeofbirth`, `krestname`, `monahname`, `san`, `krestplace`, `krestyear`, `communion`, `churchyear`, `mychurch`, `maritalstatusid`, `disease`, `diseasedescription`, `residentialaddress`, `homephone`, `workphone`, `mobilephone`, `skype`, `education`, `degree`, `institution`, `specialty`, `workplace`, `position`, `passportnumber`, `passportissued`, `dateofissue`, `expires`, `schengenvisa`, `shengencountry`, `visatermination`, `visacitydraw`, `goalpilgrimage`, `visitscount`, `lastvisit`, `birthsurname`, `nationality`, `citizenship`, `citizenshipnow`, `ukrainpassportnumber`, `wife`, `fiomaidenname`, `placeofbirthvisa`, `childrens`, `father`, `mother`, `parentsfio`, `etcvisa`, `previousstay`, `transitroute`, `modeoftransport`, `anketadate`, `qualityid`, `shengen`, `pgroup`, `pgroupcode`, `zagranend`, `countryresolution`, `typeofpassport`, `roomtype`, `sum`, `managerid`, `resolution`, `issueddiamonitirion`, `usersender`, `photo`, `changed`, `adminid`, `approved_by_manager`) VALUES
(178, 'Илья', 'Владимирович', 'Яковлев', '', '', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, '', NULL, '18.05.2015', '19.05.2015', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, 0),
(179, 'Илья', 'Владимирович', 'Яковлев', '', '', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, '', NULL, '18.05.2015', '19.05.2015', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, 0),
(180, 'Илья', 'Владимирович', 'Яковлев', '', '', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `guest_changes`
--

CREATE TABLE `guest_changes` (
  `id` bigint(13) NOT NULL,
  `guestid` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `guest_sender`
--

CREATE TABLE `guest_sender` (
  `id` int(3) NOT NULL,
  `sender` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guest_sender`
--

INSERT INTO `guest_sender` (`id`, `sender`) VALUES
(1, 'Афонское подворье г.Киев'),
(2, 'Афонское подворье г.Москва'),
(0, 'Самостоятельно');

-- --------------------------------------------------------

--
-- Структура таблицы `hotel`
--

CREATE TABLE `hotel` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `floorcount` int(3) NOT NULL,
  `weight` int(3) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `floorcount`, `weight`) VALUES
(1, 'Архантарики 1', 5, 1),
(6, 'Архантарики 2', 0, 2),
(3, 'Архантарики 3', 7, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `hotel_reserve`
--

CREATE TABLE `hotel_reserve` (
  `id` int(3) NOT NULL,
  `checkin` int(3) NOT NULL,
  `checkout` int(3) NOT NULL,
  `hotelid` int(3) NOT NULL,
  `floorid` int(3) NOT NULL,
  `roomid` int(3) NOT NULL,
  `bedid` int(3) NOT NULL,
  `reservelock` int(1) NOT NULL DEFAULT '0',
  `guestid` int(3) NOT NULL,
  `automatic` tinyint(1) NOT NULL,
  `evicted` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hotel_reserve`
--

INSERT INTO `hotel_reserve` (`id`, `checkin`, `checkout`, `hotelid`, `floorid`, `roomid`, `bedid`, `reservelock`, `guestid`, `automatic`, `evicted`) VALUES
(212, 1431637200, 1432069200, 1, 1, 1, 1, 0, 177, 0, 0),
(213, 1577404800, 1577404800, 1, 1, 1, 7, 1, 180, 0, 0),
(214, 1577318400, 1577750400, 6, 9, 2, 3, 0, 178, 0, 0),
(215, 1575936000, 1577750400, 1, 1, 1, 7, 0, 180, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `hotel_types`
--

CREATE TABLE `hotel_types` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `issueddiamonitirion`
--

CREATE TABLE `issueddiamonitirion` (
  `id` int(3) NOT NULL,
  `issued` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `issueddiamonitirion`
--

INSERT INTO `issueddiamonitirion` (`id`, `issued`) VALUES
(1, 'Пантелеимонов'),
(2, 'Ватопед'),
(3, 'Петра и Павла'),
(4, 'Дохиар');

-- --------------------------------------------------------

--
-- Структура таблицы `manager`
--

CREATE TABLE `manager` (
  `id` int(3) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `manager`
--

INSERT INTO `manager` (`id`, `login`, `role`, `password`, `email`, `fio`) VALUES
(1, 'manager', 'admin', 'manager', 'manager@mail.ru', '');

-- --------------------------------------------------------

--
-- Структура таблицы `maritalstatus`
--

CREATE TABLE `maritalstatus` (
  `id` int(3) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `maritalstatus`
--

INSERT INTO `maritalstatus` (`id`, `status`) VALUES
(1, 'Холост'),
(2, 'Женат'),
(3, 'состою в браке, но живем раздельно'),
(4, 'вдовец'),
(5, 'разведен');

-- --------------------------------------------------------

--
-- Структура таблицы `palomnik_card`
--

CREATE TABLE `palomnik_card` (
  `id` int(3) NOT NULL,
  `palomnikid` int(3) NOT NULL,
  `appliedfor` tinyint(1) NOT NULL DEFAULT '0',
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `issueddocuments` tinyint(1) NOT NULL DEFAULT '0',
  `diamonitirion` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `palomnik_country`
--

CREATE TABLE `palomnik_country` (
  `id` int(3) NOT NULL,
  `countryname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `palomnik_country`
--

INSERT INTO `palomnik_country` (`id`, `countryname`) VALUES
(1, 'Киев'),
(4, 'Борисполь'),
(5, 'Борисполь');

-- --------------------------------------------------------

--
-- Структура таблицы `palomnik_source`
--

CREATE TABLE `palomnik_source` (
  `id` int(3) NOT NULL,
  `sourcename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `palomnik_source`
--

INSERT INTO `palomnik_source` (`id`, `sourcename`) VALUES
(1, 'E-mail'),
(0, 'Через портал'),
(2, 'Fax'),
(3, 'Skype');

-- --------------------------------------------------------

--
-- Структура таблицы `palomnik_status`
--

CREATE TABLE `palomnik_status` (
  `id` int(3) NOT NULL,
  `statusname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `palomnik_status`
--

INSERT INTO `palomnik_status` (`id`, `statusname`) VALUES
(1, 'Принят к рассмотрению'),
(0, 'Подал заявку'),
(2, 'Оформил документы'),
(3, 'Вылетел'),
(4, 'Прилетел в Грецию'),
(5, 'Ожидает заселения'),
(6, 'Заселен'),
(7, 'Выселен'),
(8, 'Заявка отклонена');

-- --------------------------------------------------------

--
-- Структура таблицы `palomnik_works`
--

CREATE TABLE `palomnik_works` (
  `id` int(3) NOT NULL,
  `worknamerus` varchar(255) NOT NULL,
  `worknamegk` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `quality`
--

CREATE TABLE `quality` (
  `id` int(3) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `quality`
--

INSERT INTO `quality` (`id`, `value`) VALUES
(1, 'VIP'),
(2, 'Священнослужитель'),
(3, 'Послушник'),
(4, 'Паломник'),
(5, 'Рабочий'),
(0, 'Неопределённый');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Администратор'),
(2, 'Архантаричный'),
(3, 'Менеджер паломников');

-- --------------------------------------------------------

--
-- Структура таблицы `room`
--

CREATE TABLE `room` (
  `id` int(3) NOT NULL,
  `roomnum` int(3) NOT NULL,
  `sectionid` int(3) NOT NULL,
  `hotelid` int(3) NOT NULL,
  `floorid` int(3) NOT NULL,
  `personscount` int(3) NOT NULL,
  `roomstate` tinyint(3) NOT NULL,
  `roomtype` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `room`
--

INSERT INTO `room` (`id`, `roomnum`, `sectionid`, `hotelid`, `floorid`, `personscount`, `roomstate`, `roomtype`) VALUES
(1, 219, 0, 1, 1, 1, 2, 3),
(2, 222, 0, 6, 9, 2, 1, 3),
(3, 256, 0, 6, 10, 3, 0, 3),
(4, 220, 0, 1, 1, 0, 1, 1),
(5, 221, 0, 1, 1, 0, 0, 2),
(6, 222, 0, 1, 1, 0, 0, 3),
(7, 223, 0, 1, 1, 0, 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `room_state`
--

CREATE TABLE `room_state` (
  `id` int(3) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `room_state`
--

INSERT INTO `room_state` (`id`, `state`) VALUES
(1, 'Свободна'),
(2, 'Уборка'),
(3, 'Ремонт');

-- --------------------------------------------------------

--
-- Структура таблицы `room_type`
--

CREATE TABLE `room_type` (
  `id` int(3) NOT NULL,
  `roomtype` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `room_type`
--

INSERT INTO `room_type` (`id`, `roomtype`) VALUES
(1, 'С золотой отделкой'),
(2, 'Для элиты'),
(3, 'Среднего качества');

-- --------------------------------------------------------

--
-- Структура таблицы `schengenvisa`
--

CREATE TABLE `schengenvisa` (
  `id` int(3) NOT NULL,
  `visa` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `countryresolution`
--
ALTER TABLE `countryresolution`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `guest_changes`
--
ALTER TABLE `guest_changes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `guest_sender`
--
ALTER TABLE `guest_sender`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hotel_reserve`
--
ALTER TABLE `hotel_reserve`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hotel_types`
--
ALTER TABLE `hotel_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `issueddiamonitirion`
--
ALTER TABLE `issueddiamonitirion`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maritalstatus`
--
ALTER TABLE `maritalstatus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `palomnik_card`
--
ALTER TABLE `palomnik_card`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `palomnik_country`
--
ALTER TABLE `palomnik_country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `palomnik_source`
--
ALTER TABLE `palomnik_source`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `palomnik_status`
--
ALTER TABLE `palomnik_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `palomnik_works`
--
ALTER TABLE `palomnik_works`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `room_state`
--
ALTER TABLE `room_state`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `schengenvisa`
--
ALTER TABLE `schengenvisa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `bed`
--
ALTER TABLE `bed`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `countryresolution`
--
ALTER TABLE `countryresolution`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `floor`
--
ALTER TABLE `floor`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT для таблицы `guest_changes`
--
ALTER TABLE `guest_changes`
  MODIFY `id` bigint(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `guest_sender`
--
ALTER TABLE `guest_sender`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `hotel_reserve`
--
ALTER TABLE `hotel_reserve`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT для таблицы `hotel_types`
--
ALTER TABLE `hotel_types`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `issueddiamonitirion`
--
ALTER TABLE `issueddiamonitirion`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `palomnik_card`
--
ALTER TABLE `palomnik_card`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `palomnik_country`
--
ALTER TABLE `palomnik_country`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `palomnik_works`
--
ALTER TABLE `palomnik_works`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `quality`
--
ALTER TABLE `quality`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `room`
--
ALTER TABLE `room`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `room_state`
--
ALTER TABLE `room_state`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `schengenvisa`
--
ALTER TABLE `schengenvisa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
