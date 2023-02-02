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
 
    
    // function that select from db and also checks conditions to select
    function selectAll($table, $conditions = []){
        global $conn;
        $sql = "SELECT * FROM $table";
    
        if (empty($conditions)) {
            $sql = "SELECT * FROM $table";
            $stmt = $conn->prepare($sql . " ORDER BY id DESC");
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }else {
            $i = 0;
            foreach($conditions as $key => $value){
                if ($i === 0) {
                    $sql = $sql . " WHERE $key = ?";
                }else{
                    $sql = $sql . " AND $key = ?";
                }
                $i++;
            }
    
            // dump($sql);
    
            $sql = $sql . " ORDER BY id DESC";
            $stmt = executeQuery($sql, $conditions);
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
        
    }

    //select one based on a condition
    function selectOne($table, $conditions){
        global $conn;
        $sql = "SELECT * FROM $table";
        $i = 0;
        foreach ($conditions as $key => $value) {

            if ($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            }else{
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }

        //RETURNS THE FIRST CONDITION FOUND
        $sql = $sql . " LIMIT 1";

        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
        
    }


   
?>