<?php 
    include 'core/init.php';
    protect_page();
    admin_protect($user_data['user_id']);
    include 'includes/overall/globalHeader.php'; 
?>
<h1>Admin</h1>
<p>Admin page</p>


<?php include 'includes/overall/globalFooter.php'; ?>
