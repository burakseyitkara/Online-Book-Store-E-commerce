<?php
require_once 'database.php';

//REGISTER AJAX İSLEMLERİ

if ($_POST) {
    $name = $_POST["usersName"];
    $email = $_POST["usersEmail"];
    $password = $_POST["usersPassword"];
    $passwordRepeat = $_POST["PasswordRepeat"];
    
    if (empty($name) or empty($email) or empty($password) or empty($passwordRepeat)) {
        echo "bos";
    } else if (strlen($name) < 5) {
        echo "name";
    } else if ($password !== $passwordRepeat) {
        echo "pwdMatch";
    } else if (strlen($password) < 8) {
        echo "shortPwd";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email";
    } else {
        $ayni_email_varmi = $db->prepare('SELECT * FROM users WHERE usersEmail = ?');
        $ayni_email_varmi->execute(array($email));
        
        if ($ayni_email_varmi->rowCount()) {
            echo "existEmail";
        } else {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            $uye_ekle = $db->prepare("INSERT INTO users (usersName,usersEmail,usersPassword) VALUES (?,?,?)");
            $uye_ekle->execute(array($name, $email, $hashedPwd));
            if ($uye_ekle) {
                echo "done";
            } else {
                echo "error";
            }
        }
    }
}








