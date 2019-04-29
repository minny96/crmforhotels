<?php
include('bd.php');
// Выполнение SQL-запроса
$query = "SELECT hotelcrm.add_hotel('".$_POST['hName']."', '".$_POST['hAddress']."')";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

if ($result) { echo "Успешно";} else {$result;}
?>