<?php
include('bd.php');
$query = "select hotelcrm.add_room(".$_POST['hNumber'].",' ".$_POST['hType']."', ".$_POST['hCapacity'].", ".$_POST['hCost'].", '".$_POST['hDescr']."', ".$_POST['hHostelNo'].", false)";
echo $query;  
?>