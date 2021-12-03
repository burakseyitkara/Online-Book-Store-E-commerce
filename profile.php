<?php

session_start();
if(empty($_SESSION['user_login'])){
    echo "lütfen giris yapiniz.";
    exit();
}else{
    
}
echo "Welcome " . $_SESSION['user_login'];

echo "<a href ='logout.php'>Logout</a>";
echo "<a href ='update.php'>Update</a>";
echo "<a href ='delete.php'>Delete</a>";

?>
