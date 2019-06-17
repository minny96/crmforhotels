<?php
include('bd.php');
$xsurname = $_POST['hSurname'];	
$xname = $_POST['hName'];
$xlastname = $_POST['hLastname'];
$xbday = $_POST['hBday'];
$xdescr = $_POST['hDescr'];
$xserie = $_POST['hSerie'];
$xnumber = $_POST['hNumber'];
$xgivedate = $_POST['hGivedate'];
$xwhogive = $_POST['hWhogive'];
$xcountry = $_POST['hCountry'];
$xcity = $_POST['hCity'];
$xstreet = NULL;
$xregdate = $_POST['hRegdate'];
// Выполнение SQL-запроса
$query = "select hotelcrm.add_guest_all('".$xsurname."', '".$xname."', '".$xlastname."', '".$xbday."', '".$xdescr."', '".$xserie."', '".$xnumber."', '".$xgivedate."', '".$xwhogive."', '".$xcountry."', '".$xcity."', NULL, '".$xregdate."')";
//echo $query;
$result = pg_query($query) or die('Ошибка запроса$ ' . pg_last_error());
if ($result) { echo "Успешно";} else {$result;}

?>