<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Добавление номера</title>
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
                     <h2>Добавление номера</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Форма добавления номера
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="addRoom.php">
                                        <div class="form-group">
                                            <label>Размер номера:</label>
                                            <input class="form-control" placeholder="Введите размер номера" name="hSize"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Этаж:</label>
                                            <input class="form-control" placeholder="Введите этаж" name="hFloor" />
                                        </div>
                                        <div class="form-group">
                                            <label>Категория:</label>
                                            <input class="form-control" placeholder="Введите категория" name="hCategory" />
                                        </div>
                                        <div class="form-group">
                                            <label>Стоимость:</label>
                                            <input class="form-control" placeholder="Введите стоимость" name="hCost" />
                                        </div>
                                        <div class="form-group">
                                            <label>Доолнительная информация</label>
                                            <textarea class="form-control" rows="3" name="hDescr"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Принадлежность хостелу:</label>
                                            <input class="form-control" placeholder="Введите hostel_no" name="hHostelNo"/>
                                        </div>
                                        <button type="submit" class="btn btn-default">Добавить комнату к хостелу</button>
                                    </form>
                                <br />
                                </div>
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
