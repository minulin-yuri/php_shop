-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 14 2022 г., 14:09
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basic_php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `author` varchar(64) NOT NULL,
  `comment` text NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `comment`, `product_id`, `created_at`) VALUES
(1, 'Вася Пупкин', 'Отличная машина!!!', 14, '2022-02-13 07:49:19'),
(2, 'Иванов Иван Иванович', 'Какой-то комментарий...', 14, '2022-02-13 07:49:51');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `name` varchar(64) NOT NULL,
  `likes` int NOT NULL DEFAULT '0',
  `dislikes` int NOT NULL DEFAULT '0',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `likes`, `dislikes`, `added_at`) VALUES
(1, '01.jpg', 73, 1, '2022-02-07 08:24:01'),
(2, '01.jpg', 1, 0, '2022-02-07 08:24:09'),
(3, '02.jpg', 103, 1, '2022-02-07 08:25:00'),
(4, '03.jpg', 0, 0, '2022-02-07 08:25:00'),
(5, '04.jpg', 60, 2, '2022-02-07 08:25:00'),
(6, '05.jpg', 0, 0, '2022-02-07 08:25:00'),
(7, '06.jpg', 0, 0, '2022-02-07 08:25:00'),
(8, '07.jpg', 54, 6, '2022-02-07 08:25:00'),
(9, '08.jpg', 0, 0, '2022-02-07 08:25:00'),
(10, '09.jpg', 5, 0, '2022-02-07 10:52:35'),
(11, 'portfolio_foto_horiz.png', 5, 0, '2022-02-07 11:07:10'),
(12, 'russia.png', 1, 0, '2022-02-07 12:23:11'),
(13, 'portfolio_foto_horiz.png', 0, 0, '2022-02-10 07:50:39'),
(14, 'about_img.png', 1, 0, '2022-02-10 07:51:19');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `price_new` decimal(10,2) NOT NULL,
  `price_old` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price_new`, `price_old`, `description`) VALUES
(9, '2020 Audi S5 Coupe', 'car1.png', '19.99', '55.68', 'В начале июня шестнадцатого года компания Audi представила купе А5 нового поколения, а вместе с ним сразу же показали и «подогретую» модификацию S5 Coupe II. Мировая премьера обеих моделей прошла на мотор-шоу в Париже. \r\nДизайн новой модели Audi S5 Coupe 2020 модельного года получил эволюционные изменения, так что с любого ракурса модель осталась полностью узнаваемой. В отличие от машины прежней генерации, оформление экстерьера получило больше острых граней и подштамповок.\r\n'),
(10, '2016 Ford Mustang GT', 'car2.png', '7.99', '9.68', 'Ford Mustang в 2016 относился к 6 поколению, выпускался в кузове: открытый кузов, купе. Автомобиль комплектовался моторами объёмом: 2.3, 3.7, 5.0 л. В 2016 году Ford Mustang остался без рестайлинга.'),
(11, '2020 Bugatti Chiron', 'car3.png', '0.99', '1.39', 'Bugatti Chiron — гиперкар компании Bugatti (входит в концерн Volkswagen AG), официально представлен публике в 2016 году. Модель получила название в честь автогонщика Луи-Александра Широна, который выступал за марку с 1928 по 1958 год.'),
(12, '2019 Porsche 911 Carrera', 'car4.png', '1.99', '2.99', 'Вслед за презентацией базовых моделей 911 Carrera и 911 Carrera Cabriolet компания Porsche расширяет модельную линейку полноприводными модификациями 911 Carrera 4 и 911 Carrera 4 Cabriolet.\r\nКак и модели 911 Carrera 2020-го модельного года, новые 911 Carrera 4 и 911 Carrera 4 Cabriolet оснащаются оппозитным 6-цилиндровым двигателем рабочим объемом 3,0 литра с двумя специально разработанными турбонагнетателями (битурбо). Мощность этого силового агрегата составляет 283 кВт (385 л.с.) при 6500 об/мин (на 15 л.с. больше, чем у предыдущих моделей Carrera 4), а крутящий момент – 440 Нм в диапазоне от 1950 до 5000 об/мин. Со стандартной 8-ступенчатой коробкой передач PDK (Porsche Doppelkupplung) новый 911 Carrera 4 2020-го модельного года разгоняется до 100 км/ч за 4,2 секунды. С опциональным пакетом Sport Chrono это время сокращается до 4,0 секунды. 911 Carrera 4 Cabriolet 2020-го модельного года ускоряется до 100 км/ч всего за 4,4 секунды (4,2 секунды с опциональным пакетом Sport Chrono). Максимальная скорость моделей составляет 291 км/ч для 911 Carrera 4 и 289 км/ч для 911 Carrera 4 Cabriolet.'),
(13, 'Купе Acura NSX 2016', 'car5.jpg', '59.64', '87.15', 'Для японского автопроизводителя Honda купе NSX является особенной моделью. Она появилась на свет в 1990-м году и стала первооткрывателем для компании сегмента среднемоторных спортивных купе. Машина находилась на конвейере в течение 15-ти лет.\r\nОднако вторую генерацию автомобиля пришлось ожидать весьма долго. Концептуальную версию купе автолюбители смогли увидеть лишь в 2012-м году, а ещё несколько лет ушло на разработку серийного варианта.\r\nИ вот в 2015-м году в рамках международного автосалона в Детройте состоялась официальная премьера полностью нового купе NSX, правда, под маркой Acura, поскольку именно под этим названием машина известна в Соединённых Штатах.'),
(14, 'Mazda MX-5', 'car6.jpg', '34.56', '67.89', 'Многие из нас автомобилистов с нетерпением ждут, когда наконец новая Мазда начнет продаваться по всему миру. Новая модель автомобиля, что была представлена совсем недавно на автосалоне, стала немного больше, чуть красивее и готова поразить своего покупателя.\r\nАвтомашина оснащается 1,5 и 2,0-литровыми моторами. Если вы думаете друзья, что этого будет мало и недостаточно для спортивного адреналина за рулем, то вы ошибаетесь. На самом деле поверьте нам уважаемые автомобилисты, этого вполне будет достаточно для такого легкого кузова.\r\nЭтот автомобиль приготовлен для истинных любителей автотранспортных средств.'),
(15, 'Mercedes-Benz S-класса', 'car7.jpg', '13.42', '24.58', 'В начале сентябре 2015 года компания Mercedes-Benz публично рассекретила «самый красивый и эксклюзивный S-класс в истории». По крайней мере, именно так в Штутгарте нарекли новый роскошный кабриолет, построенный на базе флагманского седана. Мировой показ автомобиля состоится на подиумах международного автосалона во Франкфурте, а его реализации в европейских странах начнутся в первой половине 2016 года.\r\nВнешне кабриолет Mercedes-Benz S-class выглядит роскошно, стильно и невероятно гармонично, а оформлением передка и кормы перекликается с купе.\r\nЭлегантности динамичному облику добавляет мягкая складная крыша, доступная в четырех вариантах цветового решения – бежевом, черном, темно-синем и темно-красном.'),
(16, 'Hennessey Venom GT', 'car8.jpg', '43.12', '56.17', 'В основе лежит кузов Lotus Exige, «сердце» автомобиля 1244-сильный 7-литровый турбированный V8. Многие сомневаются, а правильно ли называть автомобиль серийным? По сути, вся машина собирается вручную. Учитываются любые пожелания клиентов. Например, фронтмен Аэросмит Стивен Тайлер захотел Hennessey Venom GT без крыши. Клиент всегда прав, как говорится. Стивену кабриолет обошелся в $1,1 млн.\r\nВ США «серийное» купе продается за $950 000. До «сотни» Hennessey Venom GT разгоняется за 2,5 секунды. 1-0, Tesla медленнее.\r\n14 февраля 2014 года автомобиль Hennessey Venom GT побил неофициальный рекорд для самого быстрого автомобиля — когда он достиг скорости 435.31 км/ч.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `hash`) VALUES
(1, 'admin', 'admin', '$2y$10$IFb.ZhTUlmi2VRsmTwrhXeOHScUIUR.mMSii8qS3We3baHRL.XzAi'),
(2, 'user1', '1234', '$2y$10$pRADwENP.amHBZIEkcUeC.A3fip5/bOIcTVYx52brgnj/fz0Xdzde'),
(3, 'user2', '4321', '$2y$10$icvInw07scG6JAfSmJeJ1uznFRnSqe/Vlq0KD9eJz8ZWoFL7QyMoe');

-- --------------------------------------------------------

--
-- Структура таблицы `winners`
--

CREATE TABLE `winners` (
  `id` int NOT NULL,
  `name` varchar(64) NOT NULL,
  `desc` varchar(128) NOT NULL,
  `img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `winners`
--

INSERT INTO `winners` (`id`, `name`, `desc`, `img`) VALUES
(1, 'Ferrari 458', '12 November 2020', 'winner1.png'),
(2, 'Aquila Gullwing', '9 November 2020', 'winner2.png'),
(3, '2020 Audi S5 Coupe', '5 November 2020', 'winner3.png'),
(4, 'Ferrari Purosangue SUV', '25 September 2020', 'winner4.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `winners`
--
ALTER TABLE `winners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
