<?php


class DB
{
static function conection(){
$conection = ROOT."/config/db_params.php";
$include_conection = include($conection);

    $dsn = "mysql:host={$include_conection['host']};dbname={$include_conection['dbname']}";

    $db = new PDO($dsn, $include_conection['user'], $include_conection['password']);
    $db->exec("set names utf8");
    return $db;

}
}