<?php
    $dsn = "mysql:host=localhost;dbname=db_ohyamal";
    $user = 'userdb_ohyamal';
    $pass = 'u9L#j63i';
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
    try{
        $con = new PDO($dsn, $user, $pass, $option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo 'Failed To Connect ' . $e ->getMessage();
    }
?>