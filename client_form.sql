-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 02 2014 г., 21:37
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `client_form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `patronymic` text NOT NULL,
  `date_birth` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `passport` text NOT NULL,
  `issued` text NOT NULL,
  `date_issue` text NOT NULL,
  `code` text NOT NULL,
  `code2` text NOT NULL,
  `place_Birth` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `lastname`, `firstname`, `patronymic`, `date_birth`, `phone`, `email`, `passport`, `issued`, `date_issue`, `code`, `code2`, `place_Birth`, `date`) VALUES
(13, 'Буриченко', 'Никита', 'Алексеевич', '13.08.1991', '+7(925) 053-04-49', 'nikitosikys@gmail.com', '4351 355313', 'ОВД "Текстильщики" гор. Москвы', '12.09.2011', '314', '242', 'гор. Архангельск', '01.10.2014'),
(14, 'Беляков', 'Иван', 'Андреевич', '04.12.1991', '+7(906) 234-51-25', 'aspej@gmail.com', '2451 244522', 'УФМС Октябрского округа г. Архангельска', '12.09.2011', '290', '001', 'гор. Архангельск', '01.10.2014'),
(18, 'Зайцева', 'Ирина', 'Андреевна', '05.06.1978', '+7(925) 234-62-35', 'irina.zaic@yandex.ru', '3462 335632', 'ОВД "Текстильщики" гор. Москвы', '14.62.3674', '543', '346', 'гор. Москва', '01.10.2014'),
(19, 'Лабутин', 'Антон', 'Сергеевич', '12.07.1990', '+7(906) 243-61-52', 'tobyShow@gmail.com', '2561 367335', 'УФМС Октябрьского округа', '23.06.2010', '125', '256', 'гор. Архангельск', '01.10.2014'),
(20, 'Петров', 'Николай', 'Васильевич', '12.06.1988', '+7(925) 236-73-31', 'nikolai@gmail.com', '2123 411353', 'ОВД "Кузьминки" гор. Москвы', '13.05.2000', '245', '245', 'гор.Москва', '01.10.2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
