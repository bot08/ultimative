<?php
$request = explode("/", $_SERVER['REQUEST_URI']);

// Тут место для подключения скриптов, которые до отправки заголовка


switch ($request[1]) {
    case '' :
        $view="home.php";
        $pagetitle="Домашняя страница";
        $description="Hello world!";
        break;


    case 'github' :
        $view="gh.php";
        $pagetitle="Github";
        $description="Hello world!";
        break;


    // system
    case 'menu' :
        $view="system/menu.php";
        $pagetitle="Меню";
        $description="";
        break;

    case 'search' :
        $view="system/search.php";
        $pagetitle="Поиск";
        $description="";
        break;


    // 404 page
    default :
        http_response_code(404);
        $view="system/404.php";
        $pagetitle="404";
        $description="404";
        break;
}


include "core/app.php";
?>