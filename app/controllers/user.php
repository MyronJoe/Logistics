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

    


?>