<?php

include_once 'Database.php';

$name = "name last002";
$description = "description last";

try{
    //建立
    $insert = "INSERT INTO books (name, description, created_at) VALUES (:book_name, :description, now())";

    //建立 & 準備
    $statement = $conn->prepare("INSERT INTO books (name, description, created_at) VALUES (:book_name, :description, now())");

    //執行(資料庫)
    $statement->execute(array(":book_name" => $name, ":description" => $description));

    // echo 'CREATE';
    // echo '<br>';
    echo 'Last Insert ID:'.$conn->lastInsertId();
    

}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}