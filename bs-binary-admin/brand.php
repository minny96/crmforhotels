<?php include('bd.php'); ?>
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">
            <?php
                    $get_user_query = 'select session_user';
                    $get_user_process = pg_query($get_user_query) or die('Ошибка запроса: ' . pg_last_error());
                    $session_user = pg_fetch_result($get_user_process, 0, 0);
                    echo $session_user;  
            ?>
        </a> 
    </div>
</nav>