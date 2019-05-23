<?php
include('bd.php');
// Выполнение SQL-запроса
$query = "select hotelcrm.add_room(".$_POST['hSize'].",".$_POST['hFloor'].", '".$_POST['hCategory']."', ".$_POST['hCost'].", '".$_POST['hDescr']."', ".$_POST['hHostelNo'].", false)";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
if ($result) { echo "Успешно";} else {$result;}
?>