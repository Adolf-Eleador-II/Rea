-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2023 г., 09:52
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Rea`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Comment`
--

CREATE TABLE `Comment` (
  `idComment` int UNSIGNED NOT NULL,
  `idPostParent` int UNSIGNED NOT NULL,
  `idUser` int UNSIGNED NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Post`
--

CREATE TABLE `Post` (
  `idPost` int UNSIGNED NOT NULL COMMENT 'id этого поста',
  `idUser` int UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Tag`
--

CREATE TABLE `Tag` (
  `idTag` int UNSIGNED NOT NULL,
  `idTagParent` int UNSIGNED DEFAULT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Tag`
--

INSERT INTO `Tag` (`idTag`, `idTagParent`, `name`) VALUES
(0, NULL, 'ZeroTeg'),
(1, 0, 'Word'),
(2, 1, 'Best'),
(3, 1, 'Forever'),
(6, 0, 'NULL'),
(12, 0, 'Color'),
(13, 12, 'Red'),
(14, 12, 'Green'),
(15, 12, 'Blue'),
(16, 2, 'Superior'),
(17, 0, 'Tag');

-- --------------------------------------------------------

--
-- Структура таблицы `Tag_Post`
--

CREATE TABLE `Tag_Post` (
  `id` int UNSIGNED NOT NULL,
  `idPost` int UNSIGNED NOT NULL,
  `idTag` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `idUser` int UNSIGNED NOT NULL COMMENT 'id пользователя',
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '-',
  `pass` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '-',
  `avatar` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idPostParent` (`idPostParent`);

--
-- Индексы таблицы `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `idUser` (`idUser`);

--
-- Индексы таблицы `Tag`
--
ALTER TABLE `Tag`
  ADD PRIMARY KEY (`idTag`),
  ADD KEY `idTagParent` (`idTagParent`);

--
-- Индексы таблицы `Tag_Post`
--
ALTER TABLE `Tag_Post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPost` (`idPost`,`idTag`),
  ADD KEY `idTag` (`idTag`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Comment`
--
ALTER TABLE `Comment`
  MODIFY `idComment` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `Post`
--
ALTER TABLE `Post`
  MODIFY `idPost` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id этого поста', AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `Tag`
--
ALTER TABLE `Tag`
  MODIFY `idTag` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `Tag_Post`
--
ALTER TABLE `Tag_Post`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `idUser` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id пользователя', AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idPostParent`) REFERENCES `Post` (`idPost`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `User` (`idUser`);

--
-- Ограничения внешнего ключа таблицы `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `User` (`idUser`);

--
-- Ограничения внешнего ключа таблицы `Tag`
--
ALTER TABLE `Tag`
  ADD CONSTRAINT `tag_ibfk_1` FOREIGN KEY (`idTagParent`) REFERENCES `Tag` (`idTag`);

--
-- Ограничения внешнего ключа таблицы `Tag_Post`
--
ALTER TABLE `Tag_Post`
  ADD CONSTRAINT `tag_post_ibfk_1` FOREIGN KEY (`idTag`) REFERENCES `Tag` (`idTag`),
  ADD CONSTRAINT `tag_post_ibfk_2` FOREIGN KEY (`idPost`) REFERENCES `Post` (`idPost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
