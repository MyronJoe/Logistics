<?php
    require_once(ROOT_PATH . "/app/includes/session.php");
    
    require 'connect.php';

    //funtion for texting - will be deleted
    function dump($value){
        echo '<pre>';
            print_r($value);
        echo '</pre>';
        exit;
    }

    //execute the querry for selectone and selectall fn
    function executeQuery($sql, $data){
        global $conn;
        $stmt = $conn->prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        return $stmt;
    }
 
    
?>