<?php
    require_once 'dbconnect.php';

    function edit_checker($emp_No){
        $result = false;
        try{
            $sql = "SELECT COUNT(*) FROM Password AS P LEFT OUTER JOIN EDIT AS E ON P.EMP_NO = E.EMP_NO WHERE P.EMP_NO = :emp_No AND E.EDIT_RIGHT = 1";

            $stmt = connect()->prepare($sql);
            $stmt -> bindParam('emp_No',$emp_No, PDO::PARAM_STR);

            $stmt -> execute();
            $cnt = $stmt->fetchColumn();
            
            if($cnt == 1){
                $result = true;
            }
        }catch(PDOExeption $e){
            echo $e->getMessage();
            $result = false;
        }
        return $result;
    }

    
?>