<div>
    <h1>Users</h1>
    <div class="inner">
        <?php 
            $user_count = user_count();
            $suffix = ($user_count != 1) ? 's' : '';
        ?>
        We current have <?php echo $user_count;?> registered user<?php echo $suffix; ?>.
    </div>
</div>    
