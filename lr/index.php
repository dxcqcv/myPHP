<?php 
    include 'core/init.php';
    include 'includes/overall/globalHeader.php'; 
?>
<h1>Home</h1>
<p>Just a Template</p>
<?php
    if(has_access($session_user_id, 1) === true) {
        echo 'Admin';
    } else if(has_access($session_user_id, 2) === true) {
        echo 'Moderator';
    }
?>
<?php include 'includes/overall/globalFooter.php'; ?>
