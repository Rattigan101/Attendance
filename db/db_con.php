<?php 
    // Development connectio
   // $host = '127.0.0.1';
   // $db = 'attendance_db';
    //$user = 'root';
   // $password = '';
    //$charset = 'utf8mb4';
    
    // Remote development connection
    //$host = 'remotemysql.com';
    // $db = 'plistVH5gv';
    //$user = 'plistVH5gv';
    //$password = 'A23zJM3VyF';

    //Azure connection string
     $host='applied-web.mysql.database.azure.com';
     $db = 'appliedweb_user@applied-web';
     $user='appliedweb_user@applied-web';
     $password='P@ssword1';

    $charset = 'utf8mb4';

    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try{
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }
    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");
?>