<?php include('bd.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                <?php
                        $get_user_query = 'select session_user';
                        $get_user_process = pg_query($get_user_query) or die('Ошибка запроса: ' . pg_last_error());
                        $session_user = pg_fetch_result($get_user_process, 0, 0);
                        echo $session_user;  
                     ?>
                </a><!--Будем сюда вставлять Имя админа--> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!--Подключаем меню-->  
        <?php 
            include('menu.php'); 

        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Панель администратора</h2>   
                        <h5>Приветствуем, 
                        <?php
                        $get_user_query = 'select session_user';
                        $get_user_process = pg_query($get_user_query) or die('Ошибка запроса: ' . pg_last_error());
                        $session_user = pg_fetch_result($get_user_process, 0, 0);
                        echo $session_user;  
                     ?>

                        </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                <p class="main-text">
                    <?php
                        $get_count_query = 'select count(*)  FROM hotelcrm.hotels';
                        $get_count_process = pg_query($get_count_query) or die('Ошибка запроса: ' . pg_last_error());
                        $count_of_hostels = pg_fetch_result($get_count_process, 0, 0);
                        echo $count_of_hostels;  
                     ?>
                     </p>
                    <p class="text-muted">хостелов</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                    <?php
                        $get_count_query1 = 'select count(*)  FROM hotelcrm.rooms';
                        $get_count_process1 = pg_query($get_count_query1) or die('Ошибка запроса: ' . pg_last_error());
                        $count_of_rooms = pg_fetch_result($get_count_process1, 0, 0);
                        echo $count_of_rooms;  
                     ?>
                    </p>
                    <p class="text-muted">комнат</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
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
                    <div class="col-md-3 col-sm-6 col-xs-6">           
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
                           Свободные номера
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>Хостел</th>
                                             <th>Менеджер</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        // Выполнение SQL-запроса
                                        $query = 'select * from hotelcrm.manager_of_hotel;';
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
                 <div class="row">    
                      <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Area Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                    </div>            
                </div>                       
                <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                        </div>
                    </div>            
                </div>   
           </div>
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
