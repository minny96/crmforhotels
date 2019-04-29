<?php
    // Соединение, выбор базы данных
    $dbconn = pg_connect("host=192.168.4.150 dbname=hotelcrm user=hotel password=hotel")
        or die('Не удалось соединиться: ' . pg_last_error());
?>