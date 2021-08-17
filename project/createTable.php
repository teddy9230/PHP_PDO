<?php
include_once 'Database.php';

$table = "CREATE TABLE IF NOT EXISTS shop
          (
              id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
              name VARCHAR(255) NOT NULL UNIQUE,
              description VARCHAR(255) NOT NULL,
              price VARCHAR(255) NOT NULL,
              status VARCHAR(255) NOT NULL DEFAULT '正常',
              created_at TIMESTAMP
          )";

try{
    $conn->query($table);
    echo "資料表 建立成功 <br>";
}catch (PDOException $ex){
    echo "資料表 建立失敗".$ex->getMessage();
}