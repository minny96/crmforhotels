<?php
include('bd.php');
$get_count_query = 'select count(*)  FROM hotelcrm.hotels';
                        $get_count_process = pg_query($get_count_query) or die('Ошибка запроса: ' . pg_last_error());
                        $count_of_hostels = pg_fetch_result($get_count_process, 0, 0);
                        echo ("<p class='main-text'>".$count_of_hostels."</p>");  
        ?>