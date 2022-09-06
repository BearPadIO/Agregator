<?php 

$server = "server173.hosting.reg.ru";
$login = "u1561259_admin";
$pass = "123admin123";
$name_db = "u1561259_agregator";

$link = mysqli_connect($server,$login,$pass,$name_db);
$huruf= $link->query("SET NAMES 'utf8'");
$huruf2= $link->query("SET CHARACTER SET 'utf8'");
$huruf3= $link->query("SET SESSION collation_connection = 'utf8_general_ci'");

if (!$link) {
    echo "Соединение не удалось";
}

?>