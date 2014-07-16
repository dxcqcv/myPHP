<?php
    function logged_in_redirect() {
        if(logged_in() === true) {
            header('Location: index.php');
            exit();
        }
    }
    function protect_page() {
        if(logged_in() === false) {
            header('Location: protect.php');
            exit();
        }        
    }
    function array_sanitize(&$item) {
        return mysql_real_escape_string($itme);
    }
    function sanitize($data) {
        return mysql_real_escape_string($data);
    }

    function output_errors($errors) {
        $output = array();

        foreach($errors as $error) {
            $output[] = '<li>' . $error . '</li>';
        }
        return '<ul class="error">' . implode('', $output) . '</ul>';
    }
?>
