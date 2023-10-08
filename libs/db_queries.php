<?php

require_once("db_init.php");


function getAllTable($name) {
    /**
     * @var PDO $con
     * @param $name Название таблцы (как в базе)
     *
     */
    return $con->query("SELECT * FROM $name")->fetchAll();
}
