<div>
    <h1>Hello, <?php echo $user_data['first_name']?></h1>
    <div class="inner">
        <ul>
            <li><a href="logout.php">Log out</a></li>
            <li><a href="profile.php?username=<?php echo $user_data['username']?>">Profile</a></li>
            <li><a href="changepassword.php">Change password</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>
</div>    
