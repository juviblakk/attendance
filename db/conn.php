<?php
    //Development Connection
    /*$host='127.0.0.1';
    $db='attendance';
    $user='root';
    $pass='';
    $charset='utf8mb4';*/

    //Remote Database Connection
    $host='remotemysql.com';
    $db='sZkIzyrnvg';
    $user='sZkIzyrnvg';
    $pass='Ta3Iiilhl6';
    $charset='utf8mb4';

    $dsn= "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn,$user,$pass);
        echo 'hello database';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "<h1 class='text-danger'>NO DATABASE FOUND</h1>";
        throw new PDOException($e->getMessage());

    }
    require_once 'crud.php';
    $crud = new crud($pdo);
?>