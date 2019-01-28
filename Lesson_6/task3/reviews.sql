-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:33333
-- Время создания: Янв 23 2019 г., 19:52
-- Версия сервера: 5.7.20-log
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reviews`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reviewItems`
--

CREATE TABLE `reviewItems` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `review_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviewItems`
--

INSERT INTO `reviewItems` (`id`, `user_name`, `review_text`) VALUES
(1, 'Игорь', 'Но предприниматели в сети интернет, превозмогая сложившуюся непростую экономическую ситуацию, призваны к ответу. В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик является качественно новой ступенью форм воздействия.'),
(2, 'Анна', 'Современные технологии достигли такого уровня, что высокотехнологичная концепция общественного уклада позволяет оценить значение укрепления моральных ценностей. Тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть смешаны с неуникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.'),
(3, 'Андрей', 'Задача организации, в особенности же новая модель организационной деятельности представляет собой интересный эксперимент проверки форм воздействия. Современные технологии достигли такого уровня, что курс на социально-ориентированный национальный проект обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Кстати, ключевые особенности структуры проекта заблокированы в рамках своих собственных рациональных ограничений.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reviewItems`
--
ALTER TABLE `reviewItems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reviewItems`
--
ALTER TABLE `reviewItems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
