<?php
    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/helpers/validateuser.php');
    // include(ROOT_PATH . '/app/helpers/middlewear.php');

    $errors = [];
    $username = '';
    $admin = '';
    $email = '';
    $password = '';
    $confirmpass = '';
    $table = 'users';
    $id = '';

    $admin_users = selectAll($table);

    //function that logs the user in
    function loginUser($user){
        $_SESSION['id'] = $user["id"];
        $_SESSION['username'] = $user["username"];
        $_SESSION['email'] = $user["email"];
        $_SESSION['admin'] = $user["admin"];
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['type'] = "success";

        if ($_SESSION['admin']) {
            header("location: " . BASE_URL . "/admin/dashboard.php");
        }else{
            header("location: " . BASE_URL . "/index.php");
        }
        exit();
    }

    

?>