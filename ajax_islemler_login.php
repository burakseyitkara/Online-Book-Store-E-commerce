<?php
require_once 'database.php';
session_start();


//LOGIN AJAX ISLEMLERI
if ($_POST)
{
    $email = $_POST["usersEmail"];
    $password = $_POST["usersPassword"];
   
    if (empty($email) or empty($password)) {
        echo "bos";
    }else{
        $select_stmt = $db->prepare("SELECT * FROM users WHERE usersEmail= ? ");
        $select_stmt->execute(array($email)); 
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($select_stmt->rowCount() > 0)
        {
        if($email == $row["usersEmail"])
            {
                if(password_verify($password,$row["usersPassword"]))
                {
                    $_SESSION['user_login'] = $row["usersEmail"];
                    echo "done";
                }else{
                    echo "error";
                }
            }else{
                echo "error";
            }
        }else{
            echo "error";
        }
    }
}
    
        
                    
                    














