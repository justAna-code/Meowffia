<?php
$mysqli = new mysqli("localhost", "root", "", "db_meowfia");
if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8mb4");
?>