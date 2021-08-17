<?php

include_once 'Database.php';

$name = "我是一本書";
$description = "一本書是我";

try{
    //建立
    $insert = "INSERT INTO books (name, description, created_at) VALUES (:book_name, :description, now())";

    //準備
    $statement = $conn->prepare($insert);

    //執行(資料庫)
    $statement->execute(array(":book_name" => $name, ":description" => $description));

    echo 'CREATE';
    

}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}