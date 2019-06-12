<?php include('bd.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRM-система</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <?php
            include "brand.php"; 
            include "menu.php"; 
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Панель администратора</h2>   
                        <h5>Приветствуем, Дарья
                        </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-6 col-sm-1 col-xs-12">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue set-icon">
                                <i class="fa fa-bell-o"></i>
                            </span>
                            <div class="text-box" >
                                <p class="main-text">20</p>
                                <p class="text-muted">Забронировано</p>
                            </div>
                        </div>
                        </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-brown set-icon">
                                <i class="fa fa-rocket"></i>
                            </span>
                            <div class="text-box" >
                                <p class="main-text">180</p>
                                <p class="text-muted">Свободно</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                <hr />                
                 <!-- /. ROW  -->
                <div class="row" >
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Последние бронирования
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>E-Mail</th>
                                            <th>Телефон</th>
                                            <th>Въезд</th>
                                            <th>Отъезд</th>
                                            <th>Кол-во персон</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        // Выполнение SQL-запроса
                                        $query = 'SELECT "number", firstname, lastname, email, phone, arrive, depart, no_of_persons
                                        FROM hotelcrm.last_bookings order by arrive desc';
                                        $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
                                        // Вывод результатов в HTML
                                        echo "<tbody>\n";
                                        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                                            echo "\t<tr>\n";
                                            foreach ($line as $col_value) {
                                                echo "\t\t<td>$col_value</td>\n";
                                            }
                                            echo "\t</tr>\n";
                                        }
                                        echo "</tbody>\n";
                                        // Очистка результата
                                        pg_free_result($result);
                                        // Закрытие соединения
                                        pg_close($dbconn);
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 <!-- /. ROW  -->
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    </div>
     <!-- /. WRAPPER  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>