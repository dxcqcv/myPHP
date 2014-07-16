<?php
    $connect_error = "Sorry, we're experiencing down problem.";

    mysql_connect('localhost', 'root', 'admin') or die($connect_error);
    mysql_select_db('lr') or die($connect_error);
?>
