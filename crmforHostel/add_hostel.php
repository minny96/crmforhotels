<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Добавление работника</title>
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
                     <h2>Добавление информации о работнике</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Форма добавления информации о работнике
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="addHostel.php"> 
                                        <div class="form-group">
                                            <label>Фамилия работника:</label>
                                            <input class="form-control" placeholder="Введите Фамиилию работника" name="hFirstName" />
                                        </div>
                                        <div class="form-group">
                                            <label>Имя работника:</label>
                                            <input class="form-control" placeholder="Введите Имя  работника" name="hName" />
                                        </div>
                                        <div class="form-group">
                                            <label>Должность работника:</label>
                                            <input class="form-control" placeholder="Введите должность" name="hName" />
                                        </div>
                                        <div class="form-group">
                                            <label>Дата выхода:</label>
                                            <input class="form-control" placeholder="Введите дату выхода на рабочее место" name="hName" />
                                        </div>
                                        <div class="form-group">
                                            <label>Кол-во часов:</label>
                                            <input class="form-control" placeholder="Введите количество отработанных часов" name="hName" />
                                        </div>
                                        <button type="submit" class="btn btn-default">Добавить информацию</button>
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
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>