<?php

require_once("libs/helpers.php");
require_once("libs/db_queries.php");

/**
 * @var PDO $con
 *
 */

$lots = $con->query("SELECT
	lots.id,
    lots.title,
    lots.img_url,
    lots.price,
    lots.date_end,
    lots.date_create,
    categories.title as category
FROM
	lots JOIN categories on lots.category_id = categories.id
WHERE
	lots.date_end > NOW()
ORDER BY lots.date_create
LIMIT 6;")->fetchAll();

$is_auth = rand(0, 1);

$title = "Главная";

$user_name = 'Алексей Б.'; // укажите здесь ваше имя

$templateMain = include_template("main_template.php", [
    "categories" => $cots,
    "lot_list" => $lots,
]);

$page = include_template("layout.php", [
    'title' => $title,
    'user_name' => $user_name,
    'is_auth' => $is_auth,
    'content' => $templateMain,
    "categories" => $cots
]);

print_r($page);
