<div>
    <h1>Hello, <?php echo $user_data['first_name']?></h1>
    <div class="inner">
        <div class="profile">
            <?php 
                if(isset($_FILES['profile']) === true) {
                    if(empty($_FILES['profile']['name']) === true) {
                        echo 'Please choose a file!';
                    } else {
                        $allowed = array('jpg', 'jpeg', 'gif', 'png');

                        $file_name = $_FILES['profile']['name'];
                        $explode_file_name = explode('.', $file_name);
                        $file_extn = strtolower(end($explode_file_name));
                        $file_temp = $_FILES['profile']['tmp_name'];
                        
                        if(in_array($file_extn, $allowed) === true ) {
                            change_profile_image($session_user_id, $file_temp, $file_extn);
                            header('Location: '. $current_file);
                            exit();
                        } else {
                            echo 'Incorrect file type. Allowed:';
                            echo implode(', ', $allowed);
                            /*
                            foreach($allowed as $ext) {
                                echo $ext;
                            }
                            */
                        }
                    }
                }
                if(empty($user_data['profile']) === false) {
                    echo '<img src="'. $user_data['profile']  .'" alt="'. $user_data['first_name'] .'\'s profile images">';
                }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="profile">
                <br><input type="submit">
            </form>
        </div>
        <ul>
            <li><a href="logout.php">Log out</a></li>
            <li><a href="profile.php?username=<?php echo $user_data['username']?>">Profile</a></li>
            <li><a href="changepassword.php">Change password</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>
</div>    
