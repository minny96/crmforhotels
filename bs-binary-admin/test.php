<?php
include('bd.php');
$query = "select hotelcrm.add_room('$_POST['hSize'], $_POST['hFloor'],$_POST['hCategory']." '")";
echo $query;  
?>