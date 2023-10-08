<?php

require_once("libs/helpers.php");
require_once("libs/db_queries.php");

/**
 * @var PDO $con
 *
 */

$is_auth = rand(0, 1);

$title = "Главная";

$user_name = 'Алексей Б.'; // укажите здесь ваше имя

$templateMain = include_template("add_lot_template.php", [
    "categories" => $cots
]);

$page = include_template("layout.php", [
    'title' => $title,
    'user_name' => $user_name,
    'is_auth' => $is_auth,
    'content' => $templateMain,
    "categories" => $cots
]);

print_r($page);
