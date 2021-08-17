<?php

include_once 'Database.php';

$table = 'CREATE TABLE IF NOT EXISTS books
        (
           id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
           name VARCHAR(255) NOT NULL UNIQUE,
           description VARCHAR(255) NOT NULL,
           created_at TIMESTAMP
        )';
try{
    $conn->query($table);            
    echo '<br> CREARED TABLE';
}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}