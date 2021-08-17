<?php
 
include_once 'Database.php';

try{
    // 建立 & 準備
    $statement = $conn->prepare("INSERT INTO books (name, description, created_at) VALUES (:name, :description, now())");

    //執行(資料庫)
    $statement->bindParam(":name", $name);
    $statement->bindParam(":description", $description);

    // No.1
    $name = "No.1";
    $description = "No.1";
    $statement->execute();


    // No.2
    $name = "No.2";
    $description = "No.2";
    $statement->execute();


    // No.3
    $name = "No.3";
    $description = "No.3";
    $statement->execute();


    // No.4
    $name = "No.4";
    $description = "No.4";
    $statement->execute();

    
    // No.5
    $name = "No.5";
    $description = "No.5";
    $statement->execute();

    echo 'CREATE';
    

}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}