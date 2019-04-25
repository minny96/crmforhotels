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
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <?php
            include "menu.php"; 
        ?>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Добавление гостя</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Форма добавления гостя
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Фамилия:</label>
                                            <input class="form-control" placeholder="Введите фамилию гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Имя:</label>
                                            <input class="form-control" placeholder="Введите имя гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Отчество:</label>
                                            <input class="form-control" placeholder="Введите отчество гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Дата рождения:</label>
                                            <input class="form-control" placeholder="Введите дату рождения гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Страна рождения:</label>
                                            <input class="form-control" placeholder="Введите страну рождения гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Город:</label>
                                            <input class="form-control" placeholder="Введите город по прописке гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Серия паспорта:</label>
                                            <input class="form-control" placeholder="Введите серию паспорта гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Номер паспорта:</label>
                                            <input class="form-control" placeholder="Введите номер паспорта гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Кем выдан:</label>
                                            <textarea class="form-control" rows="2" placeholder="Введите орган, выдавший паспорт"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Дата выдачи:</label>
                                            <input class="form-control" placeholder="Введите дату выдачи паспорта гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Дата регистрации:</label>
                                            <input class="form-control" placeholder="Введите номер паспорта гостя" />
                                        </div>
                                        <div class="form-group">
                                            <label>Доолнительная информация о госте:</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Добавить гостя</button>
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
