<?php

require "../config/config.php";

$page = 'index';

//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index

$url_array = explode('/', $_SERVER['REQUEST_URI']);

$action = $url_array[2];

if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}

$params = router($page, $action);
$params['links'] = $links;

echo render($page, $params);