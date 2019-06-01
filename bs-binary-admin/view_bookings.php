<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Просмотр номеров</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                     <h2>Просмотр номеров</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Все номера
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Тип</th>
                                            <th>Вместимость</th>
                                            <th>Цена</th>
                                            <th>Описание</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        // Выполнение SQL-запроса
                                        $query = 'SELECT "number", room_type, capacity, price, descr FROM hotelcrm.rooms;';
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
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
