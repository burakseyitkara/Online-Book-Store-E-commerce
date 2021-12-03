
<?php

$MYSQL_HOST = 'localhost';
$MYSQL_USER = 'root';
$MYSQL_PASS = '';
$MYSQL_DB = 'koskitap_db';

$SQL = "mysql:host=".$MYSQL_HOST.";dbname=".$MYSQL_DB;
try {
    $db = new PDO($SQL, $MYSQL_USER, $MYSQL_PASS);
    $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
} catch (PDOException $e) {
    die("PDO ile veritabanına ulaşılamadı" . $e->getMessage());
}

?>