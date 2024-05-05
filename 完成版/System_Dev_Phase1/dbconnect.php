<?php
    require_once 'config.php';

    function connect(){
        $dsn = "mysql:host=localhost;dbname=studb;charset=utf8mb4";
        try{
            $db = new PDO($dsn, DB_USER, DB_PASS);

            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            $db->setAttribute(PDO::ATTR_AUTOCOMMIT,false);

            return $db;
        }catch(PDOExeption $e){
            echo $e->getMessage();
            exit;
        }
    }
?>