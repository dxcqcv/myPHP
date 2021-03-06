<?php
    function email($to, $subject, $body){
        mail($to, $subject, $body, 'From: dxcqcv@gmail.com');
    }
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
    function admin_protect($user_id) {
        if(has_access($user_id, 1) === false) { // do not use type check in mysql
            header('Location: index.php');
            exit();
        }
    }
    function array_sanitize(&$item) {
        return htmlentities(strip_tags(mysql_real_escape_string($itme)));
    }
    function sanitize($data) {
        return htmlentities(strip_tags(mysql_real_escape_string($data)));
    }

    function output_errors($errors) {
        $output = array();

        foreach($errors as $error) {
            $output[] = '<li>' . $error . '</li>';
        }
        return '<ul class="error">' . implode('', $output) . '</ul>';
    }
?>
