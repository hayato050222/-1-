<?php
    require_once 'dbconnect.php';

    function login($emp_No,$password){
        $login_result = false;

        if(emp_check($emp_No) && password_check($password,$emp_No) ){
            //ログイン成功 
            $login_result = true;
        }
        return $login_result;

    }

    function password_check($password,$emp_No){
        $result = false;
        
        $sql = "SELECT password_value FROM Password WHERE 1 AND EMP_NO = :emp_No";
        
        $stmt = connect()->prepare($sql);
        $stmt -> bindParam('emp_No',$emp_No, PDO::PARAM_STR);

        $stmt->execute();

        $pass_model = $stmt->fetchColumn();
        if(password_verify($password,$pass_model)){
            $result = true;
        }
        return $result;
    }

    function emp_check($emp_No){
        $result = false;
        
        $sql = "SELECT COUNT(*) FROM Password WHERE 1 AND EMP_NO = :emp_No";
        
        $stmt = connect()->prepare($sql);
        $stmt -> bindParam('emp_No',$emp_No, PDO::PARAM_STR);

        $stmt->execute();

        $cnt = $stmt->fetchColumn();
        if($cnt == 1){
            $result = true;
        }
        return $result;
    }

    function insert_emp($emp_No,$password_value){
        $result = false;

        $sql = "INSERT INTO Password VALUE (:emp_No,:password_value)";

        try{
            $db = connect();
            $stmt = $db->prepare($sql);
            $pass_hash = password_hash($password_value,PASSWORD_DEFAULT);
            $stmt -> bindParam('emp_No',$emp_No, PDO::PARAM_STR);
            $stmt -> bindParam('password_value',$pass_hash, PDO::PARAM_STR);
    
            $stmt->execute();
            
            if(($cnt = $stmt-> rowcount()) === 1){
                $db -> commit();
            }else{
                $db -> rollback();
            }
        }catch(PDOExeption $e){
            echo $e->getMessage();
            $result = false;
        }
        return $result;

    }

?>