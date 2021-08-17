<?php
 
include_once 'Database.php';

$name = "name";
$description = "description";

try{
    //建立
    $insert = "INSERT INTO books (name, description, created_at) VALUES (?, ?, now())";

    //準備
    $statement = $conn->prepare($insert);

    //執行(資料庫)
    $statement->execute(array($name, $description));

    echo 'CREATE';
    

}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}