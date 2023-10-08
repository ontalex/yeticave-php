<?php

require_once("libs/helpers.php");
require_once("libs/db_queries.php");

/**
 * @var PDO $con
 *
 */

$is_auth = rand(0, 1);

$title = "Лот";

$user_name = 'Алексей Б.'; // укажите здесь ваше имя


$lot = $con->prepare("SELECT 
	lots.title,
    lots.img_url,
    categories.code as cat_code,
    categories.title as cat_title,
    lots.description,
    lots.date_end,
    lots.price,
    lots.step as price_step
FROM 
	lots JOIN categories ON lots.category_id = categories.id
WHERE
	lots.id = :id_lot;");
$lotStatus = $lot->execute(["id_lot" => $_GET["id"]]);
$lotData = $lot->fetch();

// print_r("lot status = " . $lotStatus . "<br/>");
// print_r("rows count = " . $lot->rowCount() . "<br/>");
// print_r("id = " . $_GET["id"] . "<br/>");
// print_r($lotData);

if ($lot->rowCount() > 0) {

  $templateLot = include_template("lot_template.php", [
    "categories" => $cots,
    "lot_id" => $_GET["id"],
    "lot" => $lotData,
  ]);

  print_r(include_template("layout.php", [
    'title' => $title,
    'user_name' => $user_name,
    'is_auth' => $is_auth,
    'content' => $templateLot,
    "categories" => $cots
  ]));
  
} else {

  print_r(include_template("layout.php", [
    'title' => $title,
    'user_name' => $user_name,
    'is_auth' => $is_auth,
    'content' => include_template("404_template.php", []),
    "categories" => $cots
  ]));
  die;

}